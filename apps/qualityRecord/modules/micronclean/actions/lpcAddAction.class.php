<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class lpcAddAction extends SnappsAction
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
        $this->record = LpcCalibrationPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new LpcCalibration();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('company', 'ACRO SOLUTION');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setCompany($this->_G('company'));
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setDueDate($this->_G('due_date'));
            $this->record->setCalibratedBy($this->_G('calibrated_by'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            
            $this->record->setPoint2Manufacturer($this->_G('point_2_manufacturer'));
            $this->record->setPoint2StdDeviation($this->_G('point_2_std_deviation'));
            $this->record->setPoint2LotNo($this->_G('point_2_lot_no'));
            $this->record->setPoint2ExpiryDate($this->_G('point_2_expiry_date'));
            
            $this->record->setPoint5Manufacturer($this->_G('point_5_manufacturer'));
            $this->record->setPoint5StdDeviation($this->_G('point_5_std_deviation'));
            $this->record->setPoint5LotNo($this->_G('point_5_lot_no'));
            $this->record->setPoint5ExpiryDate($this->_G('point_5_expiry_date'));
            
            $this->record->setEmmSerialNo($this->_G('emm_serial_no'));
            $this->record->setEmmCalDate($this->_G('emm_cal_date'));
            $this->record->setEmmCalDueDate($this->_G('emm_cal_due_date'));            
            
            $this->record->setTp1Before($this->_G('tp_1_before'));
            $this->record->setTp2Before($this->_G('tp_2_before'));
            $this->record->setTp3Before($this->_G('tp_3_before'));
            $this->record->setTp4Before($this->_G('tp_4_before'));
            $this->record->setTp5Before($this->_G('tp_5_before'));
            $this->record->setTp6Before($this->_G('tp_6_before'));
            $this->record->setTp7Before($this->_G('tp_7_before'));
            $this->record->setTp8Before($this->_G('tp_8_before'));
            $this->record->setTp9Before($this->_G('tp_9_before'));
            $this->record->setTp10Before($this->_G('tp_10_before'));
            $this->record->setTp11Before($this->_G('tp_11_before'));
            $this->record->setTp12Before($this->_G('tp_12_before'));
            
            $this->record->setTp1After($this->_G('tp_1_after'));
            $this->record->setTp2After($this->_G('tp_2_after'));
            $this->record->setTp3After($this->_G('tp_3_after'));
            $this->record->setTp4After($this->_G('tp_4_after'));
            $this->record->setTp5After($this->_G('tp_5_after'));
            $this->record->setTp6After($this->_G('tp_6_after'));
            $this->record->setTp7After($this->_G('tp_7_after'));
            $this->record->setTp8After($this->_G('tp_8_after'));
            $this->record->setTp9After($this->_G('tp_9_after'));
            $this->record->setTp10After($this->_G('tp_10_after'));
            $this->record->setTp11After($this->_G('tp_11_after'));
            $this->record->setTp12After($this->_G('tp_12_after'));
            
            $this->record->setTemperature($this->_G('temperature'));
            $this->record->setHumidity($this->_G('humidity'));
            $this->record->setZeroCount($this->_G('zero_count'));
            
            $this->record->setInHouseRef($this->_G('in_house_ref'));
            $this->record->setUnitUnderTest($this->_G('unit_under_test'));
            $this->record->setTolerance($this->_G('tolerance'));
            
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('company');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/lpcSearch?hIDs[]=' . $this->record->getId());
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

