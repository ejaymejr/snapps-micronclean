<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class processEventLogAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Plastic Bag');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = ProcessEventLogPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new ProcessEventLog();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
        	$this->_S('trans_date', Date('Y-m-d'));
        	$this->_S('trans_time', Date('h:i:s'));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$data = $this->_G('machine_no') . ' | ' . $this->_G('tran_date') ;
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setTransTime($this->_G('trans_time'));
            $this->record->setMachineNo(strtoupper($this->_G('machine_no')) );
            $this->record->setFailureMode($this->_G('failure_mode'));
            $this->record->setAffected($this->_G('affected'));
            $this->record->setProbableCause($this->_G('probable_cause'));
            $this->record->setCorrectiveAction($this->_G('corrective_action'));
            $this->record->setDescriptionOfParts($this->_G('description_of_parts'));
            $this->record->setCheckedBy($this->_G('checked_by'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            $this->record->setModifiedBy($this->_G('modified_by'));
            $this->record->setDateModified($this->_G('date_modified'));
        	$this->record->save();
        	$eventID = $this->record->getId();
        	//$terenc=array('sms'=>HrEmployeePeer::getC, 'email'=>'');
//        	var_dump(HrEmployeePeer::GetMobileNoByEmployee('S7406059E'));
//        	exit();
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'terence', $this->_G('sms_terence'), $this->_G('email_terence'));
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'adeline', $this->_G('sms_adeline'), $this->_G('email_adeline'));
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'melvin', $this->_G('sms_melvin'), $this->_G('email_melvin'));
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'rex', $this->_G('sms_rex'), $this->_G('email_rex'));
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'lyeheng', $this->_G('sms_lyeheng'), $this->_G('email_lyeheng'));
        	ProcessEventNotifiedPeer::NotifyByEventLogByPerson($eventID, 'velu', $this->_G('sms_velu'), $this->_G('email_velu'));
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/processEventLogSearch?HID[]=' . $this->record->getId());
        }
    }

    public function validateFieldListAdd()
    {
        $this->preExecute();
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
            return true;
        }
        $localError = 0;
        return ($localError == 0);
    }

    public function handleErrorHelmkeAdd()
    {
        return sfView::SUCCESS;
    }


}

