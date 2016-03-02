<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class washingMachineDoseAddAction extends SnappsAction
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
        $this->record = WashingMachineDoseCalibrationPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new WashingMachineDoseCalibration();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('checked_by', strtoupper($this->_U()));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setMachineNo($this->_G('machine_no'));
            $this->record->setCheckedBy($this->_G('checked_by'));
            $this->record->setVolumeDispensed($this->_G('volume_dispensed'));
            $this->record->setTimeTaken($this->_G('time_taken'));
            $this->record->setRemarks($this->_G('remarks'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('date_time') . ': ' . $this->_G('machine_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/washingMachineDoseCalibrationSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorWashingMachineDoseAdd()
    {
        return sfView::SUCCESS;
    }


}

