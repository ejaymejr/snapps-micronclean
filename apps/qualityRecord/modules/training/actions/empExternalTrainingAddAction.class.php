<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class empExternalTrainingAddAction extends SnappsAction
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
        $this->record = HrTrainingDevelopmentPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new HrTrainingDevelopment();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
//        if ($this->getRequest()->getMethod() != sfRequest::POST){
//            $this->_S('tester', strtoupper($this->_U()));
//        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $empData = HrEmployeeMasterPeer::GetEmployeeData($this->_G('employee_no'));
            
            $this->record->setDescription($this->_G('description'));
            $this->record->setHrTrainingId($this->_G('hr_training_id'));
            $this->record->setEmployeeNo($this->_G('employee_no'));
            $this->record->setName($empData? $empData->getName(): '');
            $this->record->setCompany($empData? $empData->getCompany(): '');
            $this->record->setPlaceHeld($this->_G('place_held'));
            $this->record->setDateFrom($this->_G('date_from'));
            $this->record->setDateTo($this->_G('date_to'));
            $this->record->setNoHrs($this->_G('no_hrs'));
            $this->record->setNameTrainor($this->_G('name_trainor'));
            $this->record->setLicenseNo($this->_G('license_no'));
            $this->record->setRemarks($this->_G('remarks'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('employee_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('training/externalTrainingSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorAirAdd()
    {
        return sfView::SUCCESS;
    }


}

