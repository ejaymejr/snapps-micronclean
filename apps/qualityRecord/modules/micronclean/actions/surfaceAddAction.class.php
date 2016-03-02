<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class surfaceAddAction extends SnappsAction
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
        $this->record = SurfaceDataPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new SurfaceData();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
            $this->_S('sleeve_x1_spec', 'TBD');
            $this->_S('sleeve_x2_spec', 'TBD');
            $this->_S('shoe_left_spec', 'TBD');
            $this->_S('shoe_right_spec', 'TBD');            
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
            $this->record->setSleeveX1($this->_G('sleeve_x1'));
            $this->record->setSleeveX1Spec($this->_G('sleeve_x1_spec'));
            $this->record->setSleeveX2($this->_G('sleeve_x2'));
            $this->record->setSleeveX2Spec($this->_G('sleeve_x2_spec'));
            $this->record->setShoeLeft($this->_G('shoe_left'));
            $this->record->setShoeLeftSpec($this->_G('shoe_left_spec'));
            $this->record->setShoeRight($this->_G('shoe_right'));
            $this->record->setShoeRightSpec($this->_G('shoe_right_spec'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/surfaceSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorBasicPayAdd()
    {
        return sfView::SUCCESS;
    }


}
