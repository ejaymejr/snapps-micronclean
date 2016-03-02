<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class helmkeAddAction extends SnappsAction
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
        $this->record = ParticleDataPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new ParticleData();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
            $this->_S('point_5_spec', 'TBD');
            $this->_S('point_3_spec', 'TBD');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setCustomer($this->_G('customer'));
            $this->record->setDepartment($this->_G('department'));
            $this->record->setWasher($this->_G('washer'));
            $this->record->setTester($this->_G('tester'));
            $this->record->setRemarks($this->_G('remarks'));
            $this->record->setDryer($this->_G('dryer'));
            $this->record->setGarmentCode($this->_G('garment_code'));
            $this->record->setType(QrTypePeer::GetGarmentTypeById($this->_G('garment_code')) );
            $this->record->setPoint5($this->_G('point_5'));
            $this->record->setPoint5Spec($this->_G('point_5_spec'));
            $this->record->setPoint3($this->_G('point_3'));
            $this->record->setPoint3Spec($this->_G('point_3_spec'));
            $this->record->setNoOfTimesWash($this->_G('no_of_times_wash'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/helmkeSearch?hIDs[]=' . $this->record->getId());
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

