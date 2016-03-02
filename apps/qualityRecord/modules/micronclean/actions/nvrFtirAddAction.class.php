<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class nvrFtirAddAction extends SnappsAction
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
        $this->record = NvrFtirDataPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new NvrFtirData();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
            $this->_S('left_sleeve_before', 0);
            $this->_S('left_sleeve_after', 0);
            $this->_S('right_sleeve_before', 0);
            $this->_S('right_sleeve_after', 0);
            $this->_S('left_sleeve_spec', 'TBD');
            $this->_S('right_sleeve_spec', 'TBD');
            $this->_S('silicone_spec', 'TBD');
            $this->_S('amide_spec', 'TBD');    
                    
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setCustomer($this->_G('customer'));
            $this->record->setDepartment($this->_G('department'));
            $this->record->setLeftSleeve($this->_G('left_sleeve'));
            $this->record->setLeftSleeveSpec($this->_G('left_sleeve_spec'));
            $this->record->setRightSleeve($this->_G('right_sleeve'));
            $this->record->setRightSleeveSpec($this->_G('right_sleeve_spec'));
            $this->record->setSilicone($this->_G('silicone'));
            $this->record->setSiliconeSpec($this->_G('silicone_spec'));
            $this->record->setAmide($this->_G('amide'));
            $this->record->setAmideSpec($this->_G('amide_spec'));
            $this->record->setDop($this->_G('dop'));
            $this->record->setDopSpec($this->_G('dop_spec'));
            $this->record->setWasher($this->_G('washer'));
            $this->record->setTester($this->_G('tester'));
            $this->record->setRemarks($this->_G('remarks'));
            $this->record->setDryer($this->_G('dryer'));
            $this->record->setGarmentCode($this->_G('garment_code'));
            $this->record->setType(QrTypePeer::GetGarmentTypeById($this->_G('garment_code')) );
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/nvrSearch?hIDs[]=' . $this->record->getId());
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
