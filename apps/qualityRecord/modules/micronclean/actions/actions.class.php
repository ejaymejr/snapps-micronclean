<?php
/**
 * qualityRecord actions.
 *
 * @package    qualityRecords
 * @subpackage qualityRecord
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class microncleanActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
    }
    
    public function executeSpcGraph()
    {
        //$this->forward('default', 'module');
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('date_from', date('Y-m-d'));            
            $this->_S('date_to', date('Y-m-d'));
        }
        if ($this->getRequest()->getMethod() == sfRequest::POST){
            $this->showgraph = true;
        }        
    }
    

    public function executeGraphIndex()
    {
        //$this->forward('default', 'module');
    }

    public function executeManageIndex()
    {

        //$this->forward('default', 'module');
    }

    public function executeReportIndex()
    {
        //$this->forward('default', 'module');
    }

    public function executeWashingMachineDoseCalibrationSearch()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(WashingMachineDoseCalibrationPeer::DATE_TIME);
    	$this->pager = WashingMachineDoseCalibrationPeer::GetPager($c);
    }
    public function executeWashingMachineDoseEdit()
    {
    	$id = $this->_G('id');
    	$rec = WashingMachineDoseCalibrationPeer::retrieveByPK($id);
    	if ($rec){
    		$this->_S('date_time', $rec->getDateTime());
    		$this->_S('machine_no', $rec->getMachineNo());
    		$this->_S('volume_dispensed', $rec->getVolumeDispensed());
    		$this->_S('time_taken', $rec->getTimeTaken());
    		$this->_S('checked_by', $rec->getCheckedBy());
    		$this->_S('remarks', $rec->getRemarks());
    	}
    	$this->setTemplate('washingMachineDoseAdd');
    }    
    public function executeWashingMachineDoseDelete()
    {
    	$id = $this->_G('id');
    	$this->record = WashingMachineDoseCalibrationPeer::retrieveByPK($id);
    	$rec = $this->record->getDateTime().'('.$this->record->getMachineNo().')';
    	$this->record->delete();
    	$this->_SUF($rec.' has been deleted successfuly.');
    	$this->redirect('micronclean/washingMachineDoseCalibrationSearch');
    }
    
    public function executeWashingMachineLoadSearch()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(WashingMachineLoadPeer::DATE_TIME);
    	$this->pager = WashingMachineLoadPeer::GetPager($c);
    }
    

    
    public function executeWashingMachineLoadEdit()
    {
    	$id = $this->_G('id');
    	$rec = WashingMachineLoadPeer::retrieveByPK($id);
    	if ($rec){
    		$this->_S('date_time', $rec->getDateTime());
    		$this->_S('machine_no', $rec->getMachineNo());
    		$this->_S('wt_scale', $rec->getWtScale());
    		$this->_S('wt_display', $rec->getWtDisplay());
    		$this->_S('verified_by', $rec->getVerifiedBy());
    		$this->_S('remarks', $rec->getRemarks());
    	}
    	$this->setTemplate('washingMachineLoadAdd');
    }
    public function executeWashingMachineLoadDelete()
    {
    	$id = $this->_G('id');
    	$this->record = WashingMachineLoadPeer::retrieveByPK($id);
    	$rec = $this->record->getDateTime().'('.$this->record->getMachineNo().')';
    	$this->record->delete();
    	$this->_SUF($rec.' has been deleted successfuly.');
    	$this->redirect('micronclean/washingMachineLoadSearch');
    }
    
    
    public function executeWashingMachineTempSearch()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(WashingMachineTempPeer::DATE_TIME);
    	$this->pager = WashingMachineTempPeer::GetPager($c);
    }
    public function executeWashingMachineTempEdit()
    {
    	$id = $this->_G('id');
    	$rec = WashingMachineTempPeer::retrieveByPK($id);
    	if ($rec){
    		$this->_S('date_time', $rec->getDateTime());
    		$this->_S('machine_no', $rec->getMachineNo());
    		$this->_S('temp_thermometer', $rec->getTempThermometer());
    		$this->_S('temp_display', $rec->getTempDisplay());
    		$this->_S('verified_by', $rec->getVerifiedBy());
    		$this->_S('remarks', $rec->getRemarks());
    	}
    	$this->setTemplate('washingMachineTempAdd');
    }
    public function executeWashingMachineTempDelete()
    {
    	$id = $this->_G('id');
    	$this->record = WashingMachineTempPeer::retrieveByPK($id);
    	$rec = $this->record->getDateTime().'('.$this->record->getMachineNo().')';
    	$this->record->delete();
    	$this->_SUF($rec.' has been deleted successfuly.');
    	$this->redirect('micronclean/washingMachineTempSearch');
    }
    
    
    public function executeHelmkeSearch()
    {
        $c = new ParticleDataCriteria();
        $this->pager = ParticleDataPeer::GetPager($c);
    }
    
    public function executeGarmentBacteriaSearch()
    {
        $c = new GarmentBacteriaCriteria();
        $c->addDescendingOrderByColumn(GarmentBacteriaCountPeer::DATE_TIME);
        $c->addAscendingOrderByColumn(GarmentBacteriaCountPeer::CUSTOMER);
        $c->addAscendingOrderByColumn(GarmentBacteriaCountPeer::DEPARTMENT);
        $c->addAscendingOrderByColumn(GarmentBacteriaCountPeer::TYPE);
        $c->addGroupByColumn(GarmentBacteriaCountPeer::CUSTOMER);
        $c->addGroupByColumn(GarmentBacteriaCountPeer::DEPARTMENT);
        $c->addGroupByColumn(GarmentBacteriaCountPeer::TYPE);
        $c->addGroupByColumn(GarmentBacteriaCountPeer::DATE_TIME);
        $this->pager = GarmentBacteriaCountPeer::GetPager($c);
    }
    
    public function executeAirSearch()
    {
        $c = new AirDataCriteria();
        $this->pager = AirDataPeer::GetPager($c);
    }
    
    public function executeAirBacteriaSearch()
    {
        $c = new AirBacteriaCriteria();
        $this->pager = AirBacteriaCountPeer::GetPager($c);
    }
    
    public function executeWaterSearch()
    {
        $c = new WaterDataCriteria();
        $this->pager = WaterDataPeer::GetPager($c);
    }
    public function executeSurfaceSearch()
    {
        $c = new SurfaceDataCriteria();
        $this->pager = SurfaceDataPeer::GetPager($c);
    }
    public function executeIcSearch()
    {
        $c = new IcDataCriteria();
        $this->pager = IcDataPeer::GetPager($c);
    }
    public function executeNvrSearch()
    {
        $c = new NvrFtirDataCriteria();
        $this->pager = NvrFtirDataPeer::GetPager($c);
    }
    public function executeVeritasSearch()
    {
        $c = new VeritasParticleDataCriteria();
        $this->pager = VeritasParticleDataPeer::GetPager($c);
    }
    
    public function executeOocSearch()
    {
        $c = new OutOfControlCriteria();
        $this->pager = OutOfControlPeer::GetPager($c);
    }
    
    public function executeAjaxDeptList()
    {
        $this->cust = $this->_G('customer');
    }
    
    
    public function executeHelmkeEdit()
    {
        $id = $this->_G('id');
        $rec = ParticleDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            $this->_S('point_5', $rec->getPoint5());
            $this->_S('point_5_spec', $rec->getPoint5Spec());
            $this->_S('point_3', $rec->getPoint3());
            $this->_S('point_3_spec', $rec->getPoint3Spec());
            $this->_S('no_of_times_wash', $rec->getNoOfTimesWash());
       }
        $this->setTemplate('helmkeAdd');        
    }
    
    public function executeGarmentBacteriaEdit()
    {
        $id = $this->_G('id');
        $rec = GarmentBacteriaCountPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            $this->_S('bacteria_count', $rec->getBacteriaCount());
            $this->_S('no_of_times_wash', $rec->getNoOfTimesWash());
       }
        $this->setTemplate('garmentBacteriaAdd');        
    }    
    
    public function executeAirEdit()
    {
        $id = $this->_G('id');
        $rec = AirDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('rh', $rec->getRh());
            $this->_S('x_data', $rec->getXData());
            $this->_S('filter_area', $rec->getFilterArea());
            $this->_S('temperature', $rec->getTemperature());
       }
        $this->setTemplate('airAdd');        
    }    
    
    public function executeAirBacteriaEdit()
    {
        $id = $this->_G('id');
        $rec = AirBacteriaCountPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('rh', $rec->getRh());
            $this->_S('x_data', $rec->getXData());
            $this->_S('bacteria_count', $rec->getBacteriaCount());
            $this->_S('filter_area', $rec->getFilterArea());
            $this->_S('temperature', $rec->getTemperature());
       }
        $this->setTemplate('airBacteriaAdd');        
    }     
    
    public function executeWaterEdit()
    {
        $id = $this->_G('id');
        $rec = WaterDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('resistivity', $rec->getResistivity());
            $this->_S('lcl', $rec->getLcl());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
       }
        $this->setTemplate('waterAdd');        
    }

    public function executeSurfaceEdit()
    {
        $id = $this->_G('id');
        $rec = SurfaceDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            $this->_S('sleeve_x1', $rec->getSleeveX1());
            $this->_S('sleeve_x1_spec', $rec->getSleeveX1Spec());
            $this->_S('sleeve_x2', $rec->getSleeveX2());
            $this->_S('sleeve_x2_spec', $rec->getSleeveX2Spec());
            $this->_S('shoe_left', $rec->getShoeLeft());
            $this->_S('shoe_left_spec', $rec->getShoeLeftSpec());
            $this->_S('shoe_right', $rec->getShoeRight());
            $this->_S('shoe_right_spec', $rec->getShoeRightSpec());
       }
        $this->setTemplate('surfaceAdd');        
    }    
    
    public function executeIcEdit()
    {
        $id = $this->_G('id');
        $rec = IcDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            $this->_S('na', $rec->getNa());
            $this->_S('na_spec', $rec->getNaSpec());
            $this->_S('nh', $rec->getNh());
            $this->_S('nh_spec', $rec->getNhSpec());
            $this->_S('k', $rec->getK());
            $this->_S('k_spec', $rec->getKSpec());
            $this->_S('ca', $rec->getCa());
            $this->_S('ca_spec', $rec->getCaSpec());
            $this->_S('mg', $rec->getMg());
            $this->_S('mg_spec', $rec->getMgSpec());
            $this->_S('f', $rec->getF());
            $this->_S('f_spec', $rec->getFSpec());
            $this->_S('cl', $rec->getCl());
            $this->_S('cl_spec', $rec->getClSpec());
            $this->_S('no', $rec->getNo() );
            $this->_S('no_spec', $rec->getNoSpec());
            $this->_S('po', $rec->getPo());
            $this->_S('po_spec', $rec->getPoSpec());
            $this->_S('so', $rec->getSo());
            $this->_S('so_spec', $rec->getSoSpec());
            $this->_S('sample', $rec->getSample());
       }
        $this->setTemplate('icAdd');        
    }     
    
    public function executeNvrFtirEdit()
    {
        $id = $this->_G('id');
        $rec = NvrFtirDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            
            $this->_S('left_sleeve', $rec->getLeftSleeve());
            $this->_S('left_sleeve_spec', $rec->getLeftSleeveSpec());
            $this->_S('right_sleeve', $rec->getRightSleeve());
            $this->_S('right_sleeve_spec', $rec->getRightSleeveSpec());
            $this->_S('silicone', $rec->getSilicone());
            $this->_S('silicone_spec', $rec->getSiliconeSpec());
            $this->_S('amide', $rec->getAmide());
            $this->_S('amide_spec', $rec->getAmideSpec());
            $this->_S('dop', $rec->getDop());
            $this->_S('dop_spec', $rec->getDopSpec());
       }
        $this->setTemplate('nvrFtirAdd');        
    }    
    
    public function executeVeritasEdit()
    {
        $id = $this->_G('id');
        $rec = VeritasParticleDataPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('department', $rec->getDepartment());
            $this->_S('washer', $rec->getWasher());
            $this->_S('tester', $rec->getTester());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('dryer', $rec->getDryer());
            $this->_S('garment_code', $rec->getGarmentCode());
            $this->_S('Type', $rec->getType() );
            $this->_S('point_5', $rec->getPoint5());
            $this->_S('point_5_spec', $rec->getPoint5Spec());
            $this->_S('point_3', $rec->getPoint3());
            $this->_S('point_3_spec', $rec->getPoint3Spec());
            $this->_S('no_of_times_wash', $rec->getNoOfTimesWash());
       }
        $this->setTemplate('veritasAdd');        
    }

    public function executeOocEdit()
    {
        $id = $this->_G('id');
        $rec = OutOfControlPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('observation', $rec->getObservation());
            $this->_S('investigate_by', $rec->getInvestigateBy());
            $this->_S('prop_action', $rec->getPropAction());
            $this->_S('review_by', $rec->getReviewBy());
       }
        $this->setTemplate('oocAdd');        
    }    
    
    public function executeHelmkeDelete()
    {
        $id = $this->_G('id');
        $this->record = ParticleDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/helmkeSearch');
    }    

    public function executeGarmentBacteriaDelete()
    {
        $id = $this->_G('id');
        $this->record = GarmentBacteriaCountPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/garmentBacteriaSearch');
    }    
    
    public function executeAirDelete()
    {
        $id = $this->_G('id');
        $this->record = AirDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getXData().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/airSearch');
    }    
    
    public function executeAirBacteriaDelete()
    {
        $id = $this->_G('id');
        $this->record = AirBacteriaCountPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getXData().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/airBacteriaSearch');
    }      
    
    public function executeWaterDelete()
    {
        $id = $this->_G('id');
        $this->record = WaterDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getResistivity().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/waterSearch');
    }     
    
    public function executeSurfaceDelete()
    {
        $id = $this->_G('id');
        $this->record = SurfaceDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/surfaceSearch');
    }
        
    public function executeIcDelete()
    {
        $id = $this->_G('id');
        $this->record = IcDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/icSearch');
    }
    
    public function executeNvrFtirDelete()
    {
        $id = $this->_G('id');
        $this->record = NvrFtirDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/nvrSearch');
    }    
    
    public function executeVeritasDelete()
    {
        $id = $this->_G('id');
        $this->record = VeritasParticleDataPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/veritasSearch');
    }

    public function executeAirGraph()
    {
	    //$this->_S('tie', date('Y-m-d'));
	    $edate = AirDataPeer::GetLatestDate();
	    $this->_S('tie', $edate);
	    $this->_S('tis', DateUtils::AddDate($this->_G('tie'), -90));
	    $c = new Criteria();
	    $c->add(AirDataPeer::DATE_TIME, "date(".AirDataPeer::DATE_TIME.") >= '".$this->_G('tis')."' &&  date(".AirDataPeer::DATE_TIME.") <= '".$this->_G('tie')."'", 'CUSTOM'  );
	    $this->pager = AirDataPeer::doSelect($c);
    }
    
    public function executeLpcSearch()
    {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(LpcCalibrationPeer::DUE_DATE);
        $this->pager = LpcCalibrationPeer::GetPager($c);
    }
    
    public function executeLpcEdit()
    {
        $id = $this->_G('id');
        $rec = LpcCalibrationPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('company', $rec->getCompany());
            $this->_S('trans_date', $rec->getTransDate());
            $this->_S('due_date', $rec->getDueDate());
            $this->_S('calibrated_by', $rec->getCalibratedBy());
            $this->_S('verified_by', $rec->getVerifiedBy());
            
            $this->_S('point_2_manufacturer', $rec->getPoint2Manufacturer());
            $this->_S('point_2_std_deviation', $rec->getPoint2StdDeviation());
            $this->_S('point_2_lot_no', $rec->getPoint2LotNo());
            $this->_S('point_2_expiry_date', $rec->getPoint2ExpiryDate() );
            
            $this->_S('point_5_manufacturer', $rec->getPoint5Manufacturer());
            $this->_S('point_5_std_deviation', $rec->getPoint5StdDeviation());
            $this->_S('point_5_lot_no', $rec->getPoint5LotNo());
            $this->_S('point_5_expiry_date', $rec->getPoint5ExpiryDate() );

            $this->_S('emm_serial_no', $rec->getEmmSerialNo());
            $this->_S('emm_cal_date', $rec->getEmmCalDate());
            $this->_S('emm_cal_due_date', $rec->getEmmCalDueDate());
            
            $this->_S('tp_1_before', $rec->getTp1Before());
            $this->_S('tp_2_before', $rec->getTp2Before());
            $this->_S('tp_3_before', $rec->getTp3Before());
            $this->_S('tp_4_before', $rec->getTp4Before());
            $this->_S('tp_5_before', $rec->getTp5Before());
            $this->_S('tp_6_before', $rec->getTp6Before());
            $this->_S('tp_7_before', $rec->getTp7Before());
            $this->_S('tp_8_before', $rec->getTp8Before());
            $this->_S('tp_9_before', $rec->getTp9Before());
            $this->_S('tp_10_before', $rec->getTp10Before());
            $this->_S('tp_11_before', $rec->getTp11Before());
            $this->_S('tp_12_before', $rec->getTp12Before());
            
            $this->_S('tp_1_after', $rec->getTp1After());
            $this->_S('tp_2_after', $rec->getTp2After());
            $this->_S('tp_3_after', $rec->getTp3After());
            $this->_S('tp_4_after', $rec->getTp4After());
            $this->_S('tp_5_after', $rec->getTp5After());
            $this->_S('tp_6_after', $rec->getTp6After());
            $this->_S('tp_7_after', $rec->getTp7After());
            $this->_S('tp_8_after', $rec->getTp8After());
            $this->_S('tp_9_after', $rec->getTp9After());
            $this->_S('tp_10_after', $rec->getTp10After());
            $this->_S('tp_11_after', $rec->getTp11After());
            $this->_S('tp_12_after', $rec->getTp12After());
            
            $this->_S('temperature', $rec->getTemperature());
            $this->_S('humidity', $rec->getHumidity());
            $this->_S('zero_count', $rec->getZeroCount());
            $this->_S('in_house_ref', $rec->getInHouseRef());
            $this->_S('unit_under_test', $rec->getUnitUnderTest());
            $this->_S('tolerance', $rec->getTolerance());
       }
        $this->setTemplate('lpcAdd');        
    }     
    
    public function executeLpcDelete()
    {
        $id = $this->_G('id');
        $this->record = LpcCalibrationPeer::retrieveByPK($id);
        $rec = $this->record->getCompany().'('.$this->record->getTransDate().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/lpcSearch');
    }     
    
    public function executeUltrasonicSearch()
    {
        $c = new UltrasonicCriteria();
        $c->addDescendingOrderByColumn(UltrasonicPeer::TRANS_DATE);
        $this->pager = UltrasonicPeer::GetPager($c);
    }
    
    public function executeUltrasonicEdit()
    {
        $id = $this->_G('id');
        $rec = UltrasonicPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('trans_date', $rec->getTransDate());
            $this->_S('power', $rec->getPower());
            $this->_S('frequency', $rec->getFrequency());
            $this->_S('verified_by', $rec->getVerifiedBy());
            $this->_S('done_by', $rec->getDoneBy());
            $this->_S('equipment_name', $rec->getEquipmentName());
            $this->_S('equipment_no', $rec->getEquipmentNo());
            $this->_S('equipment_cal_date', $rec->getEquipmentCalDate());
            $this->_S('equipment_cal_no', $rec->getEquipmentCalNo());
            $this->_S('remark', $rec->getRemark());
       }
        $this->setTemplate('ultrasonicAdd');        
    }
    
    public function executeUltrasonicDelete()
    {
        $id = $this->_G('id');
        $this->record = UltrasonicPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate();
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/ultrasonicSearch');
    }     
    
    public function executeIcCalibrationSearch()
    {
    	//sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MCS SINGAPORE QUALITY RECORD</h2></span>');
        $c = new IcCalibrationCriteria();
        $c->addDescendingOrderByColumn(IcCalibrationPeer::TRANS_DATE);
        $this->pager = IcCalibrationPeer::GetPager($c);
    }    
    
    public function executeIcCalibrationEdit()
    {
        $id = $this->_G('id');
        $rec = IcCalibrationPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('trans_date', $rec->getTransDate());
            $this->_S('verified_by', $rec->getVerifiedBy());
            $this->_S('checked_by', $rec->getCheckedBy());
            $this->_S('remark', $rec->getRemark());

            
            $this->_S('std0F',$rec->getStd0f());
            $this->_S('std0Cl',$rec->getStd0cl());
            $this->_S('std0NO2',$rec->getStd0no2());
            $this->_S('std0NO3',$rec->getStd0no3());
            $this->_S('std0PO4',$rec->getStd0po4());
            $this->_S('std0SO4',$rec->getStd0so4());
            $this->_S('std0Br',$rec->getStd0Br());
            $this->_S('std0Li',$rec->getStd0li());
            $this->_S('std0Na',$rec->getStd0na());
            $this->_S('std0NH4',$rec->getStd0nh4());
            $this->_S('std0K',$rec->getStd0k());
            $this->_S('std0Mg',$rec->getStd0mg());
            $this->_S('std0Ca',$rec->getStd0ca());

            $this->_S('std1F',$rec->getStd1f());
            $this->_S('std1Cl',$rec->getStd1cl());
            $this->_S('std1NO2',$rec->getStd1no2());
            $this->_S('std1NO3',$rec->getStd1no3());
            $this->_S('std1PO4',$rec->getStd1po4());
            $this->_S('std1SO4',$rec->getStd1so4());
            $this->_S('std1Br',$rec->getStd1Br());
            $this->_S('std1Li',$rec->getStd1li());
            $this->_S('std1Na',$rec->getStd1na());
            $this->_S('std1NH4',$rec->getStd1nh4());
            $this->_S('std1K',$rec->getStd1k());
            $this->_S('std1Mg',$rec->getStd1mg());
            $this->_S('std1Ca',$rec->getStd1ca()); 

            $this->_S('std2F',$rec->getStd2f());
            $this->_S('std2Cl',$rec->getStd2cl());
            $this->_S('std2NO2',$rec->getStd2no2());
            $this->_S('std2NO3',$rec->getStd2no3());
            $this->_S('std2PO4',$rec->getStd2po4());
            $this->_S('std2SO4',$rec->getStd2so4());
            $this->_S('std2Br',$rec->getStd2Br());
            $this->_S('std2Li',$rec->getStd2li());
            $this->_S('std2Na',$rec->getStd2na());
            $this->_S('std2NH4',$rec->getStd2nh4());
            $this->_S('std2K',$rec->getStd2k());
            $this->_S('std2Mg',$rec->getStd2mg());
            $this->_S('std2Ca',$rec->getStd2ca());             
       }
        $this->setTemplate('icCalibrationAdd');        
    }

    public function executeIcCalibrationDelete()
    {
        $id = $this->_G('id');
        $this->record = IcCalibrationPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate();
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/icCalibrationSearch');
    }

    public function executeBacteriaTestSearch()
    {
    	//sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MCS SINGAPORE QUALITY RECORD</h2></span>');
        $c = new BacteriaTestCriteria();
        $c->addDescendingOrderByColumn(BacteriaTestPeer::TRANS_DATE);
        $this->pager = BacteriaTestPeer::GetPager($c);
    }    
    
    public function executeBacteriaTestEdit()
    {
        $id = $this->_G('id');
        $rec = BacteriaTestPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('trans_date', $rec->getTransDate());
            $this->_S('verified_by', $rec->getVerifiedBy());
            $this->_S('checked_by', $rec->getCheckedBy());
            $this->_S('remark', $rec->getRemark());
            
            $this->_S('cleanroom', $rec->getCleanroom());
            $this->_S('area_a_value', $rec->getAreaA());
            $this->_S('area_b_value', $rec->getAreaB());
            $this->_S('folding_table_a_value', $rec->getFoldingTableA());
            $this->_S('folding_table_b_value', $rec->getFoldingTableB());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('garment', $rec->getGarment());
        }
        $this->setTemplate('bacteriaTestAdd'); 
    }	        
    
    public function executeBacteriaTestDelete()
    {
        $id = $this->_G('id');
        $this->record = BacteriaTestPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate();
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('micronclean/bacteriaTestSearch');
    }    
    
    public function executeBacteriaTestPopulate()
    {
		$fromDate = '2011-01-01';
		//$fromDate = '2012-03-01';
		$toDate = Date('Y-m-d');
		$cleanroom = 'Micronclean';
		$area = array('A', 'B');
		$xtime = '08:30:04';
		$times = array('08:35:00', '11:30:00', '02:30:00', '05:30:00');
		
		$cdate = DateUtils::DUFormat('Y-m-d', $fromDate);
		$status = 0;
		while($cdate <= $toDate):
			$bacteria = BacteriaTestPeer::GetDataByTransDate($cdate);
			//if (! $bacteria):  //if no record
			if (true):
				if (DateUtils::DuFormat('D', $cdate) <> 'Sun'):  //not sunday
					switch($cleanroom):
						case 'Micronclean':
							// area
							foreach($area as $a):
								$bacteria = new BacteriaTest();
								$bacteria->setCleanroom($cleanroom);
								$bacteria->setArea($a);
								$bacteria->setTransDate($cdate . $xtime);
								$bacteria->save();
							endforeach;
							// folding table
							foreach($area as $a):
								$bacteria = new BacteriaTest();
								$bacteria->setCleanroom($cleanroom);
								$bacteria->setTransDate($cdate . $xtime);
								if ($a == 'A'):
									$bacteria->setFoldingTableA('Tested');
								else:
									$bacteria->setFoldingTableB('Tested');
								endif;
								$bacteria->save();
							endforeach;
							$bacteria = new BacteriaTest();
							$bacteria->setTransDate($cdate . $xtime);
							$bacteria->setGarment('JUMPSUIT');					
							$bacteria->setCustomer('LONZA');
							$bacteria->save();
							
							$bacteria = new BacteriaTest();
							$bacteria->setTransDate($cdate . '01:00:00');
							$bacteria->setGarment('JUMPSUIT');					
							$bacteria->setCustomer('LONZA');
							$bacteria->save();
							break;
							
						case 'Nanoclean':
							$bacteria = new BacteriaTest();
							$bacteria->setCleanroom($cleanroom);
							$bacteria->setArea('A');
							$bacteria->setTransDate($cdate . $xtime);
							$bacteria->save();	
													
							foreach($times as $time):
								$bacteria = new BacteriaTest();
								$bacteria->setCleanroom($cleanroom);
								$bacteria->setFoldingTableA('Tested');
								$bacteria->setTransDate($cdate . $time);
								$bacteria->save();
							endforeach;							
							break;
					endswitch;			
				endif;
			endif;
			
			echo $cdate . "done updated...<br>";
			$cdate = DateUtils::AddDate($cdate, 1);
			//exit();
		endwhile;
	 	$this->redirect('micronclean/bacteriaTestSearch');
    }
    
    public function executeBacteriaTestPopulate1()
    {
		$fromDate = '2011-01-01';
		//$fromDate = '2012-03-01';
		$toDate = Date('Y-m-d');
		$cdate = DateUtils::DUFormat('Y-m-d', $fromDate);
		$status = 0;
		while($cdate <= $toDate):
			$humidity = rand(53, 67);
			$temp = rand(19, 21);
			if (DateUtils::DuFormat('D', $cdate) <> 'Sun'):  //not sunday    
			$data = AirParticleCountNanocleanGPeer::GetDataByDate($cdate);
			if (!$data):
				$data = new AirParticleCountNanocleanG();
				$data->setDateRecord($cdate);
				$data->setHumidity($humidity);
				$data->setTemperature($temp);
				$data->setFrequency('Daily');
				$data->setDiffPressure(0);
				$data->setTesterId('Melvin');
				$data->save();
			endif;
			echo 'Humidity: ' . $humidity . '<br>';
			echo 'Temperature: '. $temp . '<br>';	
    		echo $cdate  . " done updated...<br>";
    		endif;
			$cdate = DateUtils::AddDate($cdate, 1);
			//exit();
		endwhile;
    }	
    
    public function executeBacteriaGraph()
    {
    	//$this->_S('tie', date('Y-m-d'));
    	$edate = GarmentBacteriaCountPeer::GetLatestDate();
    	$this->_S('tie', $edate);
    	$this->_S('tis', DateUtils::AddDate($this->_G('tie'), -90));
    	$c = new Criteria();
    	$c->add(GarmentBacteriaCountPeer::DATE_TIME, "date(".GarmentBacteriaCountPeer::DATE_TIME.") >= '".$this->_G('tis')."' &&  date(".GarmentBacteriaCountPeer::DATE_TIME.") <= '".$this->_G('tie')."'", 'CUSTOM'  );
    	$c->addAscendingOrderByColumn(GarmentBacteriaCountPeer::DATE_TIME);
    	$this->pager = GarmentBacteriaCountPeer::doSelect($c);
    }

}
