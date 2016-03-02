<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class icAddAction extends SnappsAction
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
        $this->record = IcDataPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new IcData();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
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
            $this->record->setWasher($this->_G('washer'));
            $this->record->setTester($this->_G('tester'));
            $this->record->setRemarks($this->_G('remarks'));
            $this->record->setDryer($this->_G('dryer'));
            $this->record->setGarmentCode($this->_G('garment_code'));
            $this->record->setType(QrTypePeer::GetGarmentTypeById($this->_G('garment_code')) );
            
            $this->record->setNa($this->_G('na'));
            $this->record->setNaSpec($this->_G('na_spec'));
            $this->record->setNh($this->_G('nh'));
            $this->record->setNhSpec($this->_G('nh_spec'));
            $this->record->setK($this->_G('k'));
            $this->record->setKSpec($this->_G('k_spec'));
            $this->record->setCa($this->_G('ca'));
            $this->record->setCaSpec($this->_G('ca_spec'));
            $this->record->setMg($this->_G('mg'));
            $this->record->setMgSpec($this->_G('mg_spec'));
            $this->record->setF($this->_G('f'));
            $this->record->setFSpec($this->_G('f_spec'));
            $this->record->setCl($this->_G('cl'));
            $this->record->setClSpec($this->_G('cl_spec'));
            $this->record->setNo($this->_G('no'));
            $this->record->setNoSpec($this->_G('no_spec'));
            $this->record->setPo($this->_G('po'));
            $this->record->setPoSpec($this->_G('po_spec'));
            $this->record->setSo($this->_G('so'));
            $this->record->setSoSpec($this->_G('so_spec'));
            $this->record->setSample($this->_G('sample'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/icSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorIcAdd()
    {
        return sfView::SUCCESS;
    }


}

