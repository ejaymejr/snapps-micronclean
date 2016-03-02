<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class ultrasonicAddAction extends SnappsAction
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
        $this->record = UltrasonicPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new Ultrasonic();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('done_by', strtoupper($this->_U()));
            $this->_S('verified_by', 'Terence Chen');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setFrequency($this->_G('frequency'));
            $this->record->setPower($this->_G('power'));
            $this->record->setEquipmentName($this->_G('equipment_name'));
            $this->record->setEquipmentNo($this->_G('equipment_no'));
            $this->record->setEquipmentCalDate($this->_G('equipment_cal_date'));
            $this->record->setEquipmentCalNo($this->_G('equipment_cal_no'));
            $this->record->setRemark($this->_G('remark'));
            $this->record->setDoneBy($this->_G('done_by'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            $this->record->setDateModified(DateUtils::DUNow());
            $this->record->setModifiedBy($this->_U());
            $this->record->save();
            $data = $this->_G('trans_date');
            $this->_SUF('Record <b>' . $data . '</b> has been saved.');
            $this->redirect('micronclean/ultrasonicSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorUltrasonicAdd()
    {
        return sfView::SUCCESS;
    }


}

