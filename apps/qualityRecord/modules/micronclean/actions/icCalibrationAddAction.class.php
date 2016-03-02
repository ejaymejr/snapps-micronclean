<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class icCalibrationAddAction extends SnappsAction
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
        $this->record = IcCalibrationPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new IcCalibration();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('checked_by', strtoupper($this->_U()));
            $this->_S('verified_by', 'Terence Chen');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setCheckedBy($this->_G('checked_by'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
//        	$this->record->setX6Peak($this->_G('x6peak'));
//        	$this->record->setX7Peak($this->_G('x7peak'));
            
            $this->record->setStd0f($this->_G('std0F'));
            $this->record->setStd0cl($this->_G('std0Cl'));
            $this->record->setStd0no2($this->_G('std0NO2'));
            $this->record->setStd0no3($this->_G('std0NO3'));
            $this->record->setStd0po4($this->_G('std0PO4'));
            $this->record->setStd0so4($this->_G('std0SO4'));
            $this->record->setStd0br($this->_G('std0Br'));
            $this->record->setStd0li($this->_G('std0Li'));
            $this->record->setStd0na($this->_G('std0Na'));
            $this->record->setStd0nh4($this->_G('std0NH4'));
            $this->record->setStd0k($this->_G('std0K'));
            $this->record->setStd0mg($this->_G('std0Mg'));
            $this->record->setStd0ca($this->_G('std0Ca'));

            $this->record->setStd1f($this->_G('std1F'));
            $this->record->setStd1cl($this->_G('std1Cl'));
            $this->record->setStd1no2($this->_G('std1NO2'));
            $this->record->setStd1no3($this->_G('std1NO3'));
            $this->record->setStd1po4($this->_G('std1PO4'));
            $this->record->setStd1so4($this->_G('std1SO4'));
            $this->record->setStd1br($this->_G('std1Br'));
            $this->record->setStd1li($this->_G('std1Li'));
            $this->record->setStd1na($this->_G('std1Na'));
            $this->record->setStd1nh4($this->_G('std1NH4'));
            $this->record->setStd1k($this->_G('std1K'));
            $this->record->setStd1mg($this->_G('std1Mg'));
            $this->record->setStd1ca($this->_G('std1Ca'));
            
            $this->record->setStd2f($this->_G('std2F'));
            $this->record->setStd2cl($this->_G('std2Cl'));
            $this->record->setStd2no2($this->_G('std2NO2'));
            $this->record->setStd2no3($this->_G('std2NO3'));
            $this->record->setStd2po4($this->_G('std2PO4'));
            $this->record->setStd2so4($this->_G('std2SO4'));
            $this->record->setStd2br($this->_G('std2Br'));
            $this->record->setStd2li($this->_G('std2Li'));
            $this->record->setStd2na($this->_G('std2Na'));
            $this->record->setStd2nh4($this->_G('std2NH4'));
            $this->record->setStd2k($this->_G('std2K'));
            $this->record->setStd2mg($this->_G('std2Mg'));
            $this->record->setStd2ca($this->_G('std2Ca'));            
            
            $this->record->setRemark($this->_G('remark'));
                        
            $this->record->save();
            $data = $this->_G('trans_date');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/icCalibrationSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorIcCalibrationAdd()
    {
        return sfView::SUCCESS;
    }


}

