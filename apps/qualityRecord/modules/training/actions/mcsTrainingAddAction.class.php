<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class mcsTrainingAddAction extends SnappsAction
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
        $this->record = HrTrainingRecordPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new HrTrainingRecord();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());

        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('no_hrs', 12);
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	if ($this->_G('rebuild')){
        		self::RebuildMasterList($this->_U());
        		$this->_SUC('Masterlist has been updated...');
        	}
        	if ($this->_G('save')){
	            $empData = HrEmployeeMasterPeer::GetEmployeeData($this->_G('employee_no'));
	            $this->record->setEmployeeNo($this->_G('employee_no'));
	            $this->record->setName($empData? $empData->getName(): '');
	            $this->record->setCompany($empData? $empData->getCompany(): '');
	            $this->record->setDateFrom($this->_G('date_from'));
	            $this->record->setDateTo($this->_G('date_to'));
	            $this->record->setVerify($this->_G('verify'));
	            $this->record->setNoHrs($this->_G('no_hrs'));
	            $this->record->setRemarks($this->_G('remarks'));
	            $this->record->setBasicTraining($this->_G('basic_training', 'NO'));
	            $this->record->setSoilSorting($this->_G('soil_sorting', 'NO'));
	            $this->record->setLoadingWasher($this->_G('loading_washer', 'NO'));
	            $this->record->setUnloadingWasher($this->_G('unloading_washer', 'NO'));
	            $this->record->setCleanroomDryer($this->_G('cleanroom_dryer', 'NO'));
	            $this->record->setFolding($this->_G('folding'));
	            $this->record->setVacuumPacker($this->_G('vacuum_packer', 'NO'));
	            $this->record->setHelmkeDrum($this->_G('helmke_drum', 'NO'));
	            $this->record->setWaterParticleCounter($this->_G('water_particle_counter', 'NO'));
	            $this->record->setAirParticleCounter($this->_G('air_particle_counter', 'NO'));
	            $this->record->setThermoPatch($this->_G('thermo_patch', 'NO'));
	            $this->record->setDispatch($this->_G('dispatch', 'NO'));
	            $this->record->setSewingMachine($this->_G('sewing_machine', 'NO'));
	            $this->record->setStudMachine($this->_G('stud_machine', 'NO'));
	            $this->record->setShoeWasher($this->_G('shoe_washer', 'NO'));
	            $this->record->setShoeDryer($this->_G('shoe_dryer', 'NO'));
	            $this->record->setEsdMeasurement($this->_G('esd_measurement', 'NO'));
	            $this->record->setBeyondRepair($this->_G('beyond_repair', 'NO'));
	            $this->record->setBioBurdenTest($this->_G('bio_burden_test', 'NO'));
	            $this->record->setModifiedBy($this->_U());
	            $this->record->setDateModified(DateUtils::DUNow());
	            $this->record->save();
	            $data = $this->_G('employee_no');
	            $this->_SUF('Record <b>' . $data . '</b> saved.');
	            $this->redirect('training/mcsTrainingSearch?hIDs[]=' . $this->record->getId());
        	}
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

    public static function RebuildMasterList($user){
    	$sql = "truncate hr_employee_master";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	$sql = '
    	select a.employee_no as employee_no, a.name as name, b.comp_name as company, a.commence_date as commence_date
    		from hr_employee a, hr_company b
    		where a.hr_company_id = b.id 
    		and (a.date_resigned = "" or  a.date_resigned is null)
    	';
    	$rs = HrLib::ExecuteSQL($sql);
    	if ($rs){
	    	$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
			while ($rs->next())
			{
				$empData = $rs->getRow();
				$empNo =  $empData['employee_no'];
				$name  = $empData['name'];
				$comm  = $empData['commence_date'];
				$hrMaster = HrEmployeeMasterPeer::GetEmployeeDataByName($name);
				if (!$hrMaster)
				{
					$hrMaster = new HrEmployeeMaster();
					$hrMaster->setDateCreated(DateUtils::DUNow());
					$hrMaster->setCreatedBy($user);
				}
				$hrMaster->setEmployeeNo($empNo);
				$hrMaster->setName($name);
				$hrMaster->setCommenceDate($comm);
				$hrMaster->setCompany($empData['company']);
				$hrMaster->setDateModified(DateUtils::DUNow());
				$hrMaster->setModifiedBy($user);
				$hrMaster->save();
			}
    	}//rs
    	$sql = '
    	update hr_training_record, hr_employee_master 
    	set hr_training_record.employee_no = hr_employee_master.employee_no,
    	hr_training_record.commence_date = hr_employee_master.commence_date
    	where hr_training_record.name = hr_employee_master.name
    	';
    	$rs = HrEmployeeMasterPeer::ExecuteSql($sql);   
    		
    	$sql = '
    	update hr_training_record, hr_employee_master 
    	set hr_training_record.commence_date = hr_employee_master.commence_date,
    	hr_training_record.commence_date = hr_employee_master.commence_date
    	where hr_training_record.employee_no = hr_employee_master.employee_no
    	';
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	
    	
    	//------------------------ update entries
    	$dateTime = '2013-10-07';
    	$trainingDate = '2013-10-04';
    	$company = 'Micronclean';
    	$sql = "truncate hr_training_record_temp";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	$sql = "insert into hr_training_record_temp select * from hr_training_record where company = '".$company."' group by name order by date_from";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	$sql = "SELECT *
					FROM hr_employee_master
					WHERE employee_no NOT
					IN (
					
					SELECT employee_no
					FROM hr_training_record_temp
					WHERE company = 'micronclean'
					)
					AND company = 'micronclean'";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	while ($rs->next()):
    		$sql = "insert into hr_training_record_temp (employee_no, name,  basic_training) values ('".$rs->getString('employee_no')."', '".$rs->getString('name')."', 'YES'  ) ";
    		$res = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	endwhile;
    	$sql = "update hr_training_record_temp set id=0, date_time='".$dateTime."', date_from='".$trainingDate."', date_to='".$trainingDate."', date_created='".$dateTime."', date_modified='".$dateTime."',company='".$company."' ,no_hrs='12', created_by='MELVIN', modified_by='MELVIN',verify='MELVIN' ";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	
    	//---------------------- enable when trying to update new record
    	$sql = "delete from hr_training_record_temp where employee_no not in (select employee_no from hr_employee_master)";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	$sql = "delete from hr_training_record where date(date_time) = '".$dateTime."'";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    	$sql = "insert into hr_training_record select * from hr_training_record_temp";
    	$rs = HrEmployeeMasterPeer::ExecuteSQL($sql);
    }

}

