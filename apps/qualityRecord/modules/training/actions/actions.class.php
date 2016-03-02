<?php

/**
 * training actions.
 *
 * @package    qualityRecords
 * @subpackage training
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class trainingActions extends SnappsActions
{
	/**
	 * Executes index action
	 *
	 */
	public function executeIndex()
	{
		//$this->forward('default', 'module');
	}

	public function executeTrainingPlanSearch()
	{
		$this->redirect('https://www.microncleansingapore.com/sym/isodoc/training');
	}

	public function executeAcroNanoCertificatePDF()
	{
		$id = $this->_G('id');
		$rec = HrAcroNanoTrainingRecordPeer::retrieveByPK($id);
		if ($rec)
		{
			 
			$pdf = new PdfLibrary();
			$pdf->addPage();
			$x = 100;
			$xpos = 0;
			$y    = 3;
			$hrs = ($rec->getNoHrs() > 0 ? ' ('.$rec->getNoHrs() . ' Hours )' : '');
			$pdf->printBoldLn( $x ,    $y++, 'Nanoclean Singapore Pte Ltd', 'Arial', 12);
			$pdf->printLn( $x,          $y++, '35 Senoko Way, Woodlands East Singapore 758051', 'Arial', 10);
			$pdf->printLn( $x,          $y++, 'Tel: +65 67582119 Fax: +65 67532978', 'Arial', 10);
			$pdf->printLn( $x,          $y++, 'Website: http://www.micronclean.com.sg', 'Arial', 10);
			 
			$x = 10;
			$y+= 4;
			$pdf->printBoldLn( $x ,    $y++, 'SUBSTRATE TRAINING CERTIFICATE', 'Arial', 15);
			$pdf->printLn( $x,          $y+=2, 'Date of Training ', 'Arial', 10);
			$pdf->printLn( $x+30,          $y, DateUtils::DUFormat('F d, Y', $rec->getDateFrom()), 'Arial', 10);

			$pdf->printLn( $x,          $y+=2, 'Employee Name    ', 'Arial', 10);
			$pdf->printBoldLn( $x+30,          $y, $rec->getName(), 'Arial', 10);

			$pdf->printLn( $x,          $y+=2, 'Type of Training '  , 'Arial', 10);
			$pdf->printLn( $x+30,          $y, 'Initial '. $hrs , 'Arial', 10);

			$pdf->Box($x, $y+78, 83, 100, 1);
			$pdf->Box($x+83, $y+78, 82, 100, 1);
			//$pdf->Box($x, $y+65, 77, 70, 1);
			$pdf->Line($x, $y+3.5, 175, .4);
			$pdf->Line($x, $y+5.5, 175, .4);
			$pdf->Line($x, $y+7.5, 175, .4);
			$pdf->Line($x, $y+9.5, 175, .4);
			$pdf->Line($x, $y+11.5, 175, .4);
			$pdf->Line($x, $y+13.5, 175, .4);
			$pdf->Line($x, $y+15.5, 175, .4);
			$pdf->Line($x, $y+17.5, 175, .4);
			$pdf->Line($x, $y+19.5, 175, .4);
			 
			$pdf->printLn( $x+5,          $y+=2.5, 'Company Policy and Objectives', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, 'YES', 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Cleanroom Discipline', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, 'YES', 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Initial Inspection', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getInitialInspection()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Delabeling and Jelly Removal', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getDelabelingJellyRemoval()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Pre Wash', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getPreWash()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Loading', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getLoading()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, '1232 Machine Wash', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getMachineWash()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Unloading', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getUnloading()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Inprocess Visual Inspection', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getInprocessVisualInspection()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'LPC', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getLpc()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'IC', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getIc()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'NVR', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getNvr()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'QA Sample Inspection', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getQaSampleInspection()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Packing', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getPacking()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Operate Nano2 Pharmag Washer', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getPharmagWasher()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'PVA VMI', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getPvaVmi()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Operate PVA PreWash Tank Loading', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getPreWashLoading()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Operate PVA PreWash Tank Loading', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getPreWashUnloading()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Operate PVA Soaking Tank Loading', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getSoakingLoading()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Operate PVA Soaking Tank Loading', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getSoakingUnloading()), 'Arial', 10);


			$y+=2;
			$pdf->Line($x+10, $y+5, 80, .1);
			$pdf->printBoldLn( $x+23,          $y+=4, $rec->getVerify(), 'Arial', 10);
			$pdf->printLn( $x+25,          $y+=2, 'Verified By', 'Arial', 10);

			$pdf->Line($x+100, $y+3, 165, .1);
			$pdf->printLn( $x+120,          $y+=4, 'Approved By', 'Arial', 10);

			//$pdf->printLn( $x+20,          $y+=4, 'Not Valid without Company Stamp', 'Arial', 5);
			 
			//$pdf->printLn( $x+15,          $y+=4, 'Approved By', 10);
			//         $pdf->printLn( $x+120,    $y, 'DATE    : '.Date('d-M-Y'));
			$pdf->closePDF('testing.pdf');
		}
		return sfView::NONE;
	}

	public function executeMcsCertificatePDF()
	{
		$id = $this->_G('id');
		//$rec = HrAcroNanoTrainingRecordPeer::retrieveByPK($id);
		$rec = HrTrainingRecordPeer::retrieveByPK($id);
		if ($rec)
		{
			 
			$pdf = new PdfLibrary();
			$pdf->addPage();
			$x = 100;
			$xpos = 0;
			$y    = 3;
			$hrs = ($rec->getNoHrs() > 0 ? ' ('.$rec->getNoHrs() . ' Hours )' : '');
			$pdf->printBoldLn( $x ,    $y++, 'Micronclean Singapore Pte Ltd', 'Arial', 12);
			$pdf->printLn( $x,          $y++, '35 Senoko Way, Woodlands East Singapore 758051', 'Arial', 10);
			$pdf->printLn( $x,          $y++, 'Tel: +65 67582119 Fax: +65 67532978', 'Arial', 10);
			$pdf->printLn( $x,          $y++, 'Website: http://www.micronclean.com.sg', 'Arial', 10);
			 
			$x = 10;
			$y+= 4;
			$pdf->printBoldLn( $x ,    $y++, 'MICRONCLEAN TRAINING CERTIFICATE', 'Arial', 15);
			$pdf->printLn( $x,          $y+=2, 'Date of Training ', 'Arial', 10);
			$pdf->printLn( $x+30,          $y, DateUtils::DUFormat('F d, Y', $rec->getDateFrom()), 'Arial', 10);

			$pdf->printLn( $x,          $y+=2, 'Employee Name    ', 'Arial', 10);
			$pdf->printBoldLn( $x+30,          $y, $rec->getName(), 'Arial', 10);

			$pdf->printLn( $x,          $y+=2, 'Type of Training '  , 'Arial', 10);
			$pdf->printLn( $x+30,          $y, 'Initial '. $hrs , 'Arial', 10);

			$pdf->Box($x, $y+78, 83, 100, 1);
			$pdf->Box($x+83, $y+78, 82, 100, 1);
			//$pdf->Box($x, $y+65, 77, 70, 1);
			$pdf->Line($x, $y+3.5, 175, .4);
			$pdf->Line($x, $y+5.5, 175, .4);
			$pdf->Line($x, $y+7.5, 175, .4);
			$pdf->Line($x, $y+9.5, 175, .4);
			$pdf->Line($x, $y+11.5, 175, .4);
			$pdf->Line($x, $y+13.5, 175, .4);
			$pdf->Line($x, $y+15.5, 175, .4);
			$pdf->Line($x, $y+17.5, 175, .4);
			$pdf->Line($x, $y+19.5, 175, .4);
			 
			$pdf->printLn( $x+5,          $y+=2.5, 'Company Policy and Objectives', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, 'YES', 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Cleanroom Discipline', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, 'YES', 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Soil Training', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getSoilSorting()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Loading Washer', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getLoadingWasher()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Unloading Washer', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getUnloadingWasher()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Cleanroom Dryer', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getCleanroomDryer()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Folding', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getFolding()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Vacuum Packer', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getVacuumPacker()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Helmke Drum', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getHelmkeDrum()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Water Particle Counter', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getWaterParticleCounter()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Air Particle Counter', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getAirParticleCounter()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Thermo Patch', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getThermoPatch()), 'Arial', 10);
			 
			$pdf->printLn( $x+5,          $y+=2, 'Dispatch', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getDispatch()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Sewing Machine', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getSewingMachine()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Stud Machine', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getStudMachine()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'Shoe Washer', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getShoeWasher()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Shoe Dryer', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getShoeDryer()), 'Arial', 10);

			$pdf->printLn( $x+88,          $y, 'ESD Measurement', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getEsdMeasurement()), 'Arial', 10);

			$pdf->printLn( $x+5,          $y+=2, 'Beyond Repair', 'Arial', 10);
			$pdf->printBoldLn( $x+65,          $y, $this->YesNo($rec->getBeyondRepair()), 'Arial', 10);
			
			$pdf->printLn( $x+88,          $y, 'Bio Burden Test', 'Arial', 10);
			$pdf->printBoldLn( $x+148,          $y, $this->YesNo($rec->getBioBurdenTest()), 'Arial', 10);

			$y+=2;
			$pdf->Line($x+10, $y+5, 80, .1);
			$pdf->printBoldLn( $x+23,          $y+=4, $rec->getVerify(), 'Arial', 10);
			$pdf->printLn( $x+25,          $y+=2, 'Verified By', 'Arial', 10);

			$pdf->Line($x+100, $y+3, 165, .1);
			$pdf->printLn( $x+120,          $y+=4, 'Approved By', 'Arial', 10);

			//$pdf->printLn( $x+20,          $y+=4, 'Not Valid without Company Stamp', 'Arial', 5);
			 
			//$pdf->printLn( $x+15,          $y+=4, 'Approved By', 10);
			//         $pdf->printLn( $x+120,    $y, 'DATE    : '.Date('d-M-Y'));
			$pdf->closePDF('testing.pdf');
		}
		return sfView::NONE;
	}


	public function YesNo($mess){
		return ($mess == "YES" ? "YES" : "NO");
	}

	public function executeExternalTrainingSearch()
	{
		$c = new HrTrainingDevelopmentCriteria();
		$this->pager = HrTrainingDevelopmentPeer::GetPager($c);
	}

	public function executeListTrainingSearch()
	{
		$c = new HrTrainingCriteria();
		$this->pager = HrTrainingPeer::GetPager($c);
	}

	public function executeMcsTrainingSearch()
	{
		$c = new HrTrainingRecordCriteria();
		$c->addAscendingOrderByColumn(HrTrainingRecordPeer::NAME);
		$this->pager = HrTrainingRecordPeer::GetPager($c);
	}

	public function executeAcroNanoTrainingSearch()
	{
		$c = new AcroNanoTrainingRecordCriteria();
		$this->pager = HrAcroNanoTrainingRecordPeer::GetPager($c);
	}

	public function executeMcsTrainingEval(){
		if ($this->getRequest()->getMethod() != sfRequest::POST){
			$id = $this->_G('id');
			$this->record = HrTrainingEvaluationPeer::GetHrTrainingRecordIdByTrId($id);
			if (!$this->record){
				$tr = HrTrainingRecordPeer::retrieveByPK($id);
				if ($tr){
					$this->_S('employee_no', $tr->getEmployeeNO());
					$this->_S('name', $tr->getName());
					$this->_S('company', $tr->getCompany());
					$this->_S('date_from', $tr->getDateFrom());
					$this->_S('date_to', $tr->getDateTo());
					$this->_S('verify', $tr->getVerify());
					$this->_S('no_hrs', $tr->getNoHrs());
					$this->_S('basic_training', $tr->getBasicTraining());
					$this->_S('soil_sorting', $tr->getSoilSorting());
					$this->_S('loading_washer', $tr->getLoadingWasher());
					$this->_S('unloading_washer', $tr->getUnloadingWasher());
					$this->_S('cleanroom_dryer', $tr->getCleanroomDryer());
					$this->_S('folding', $tr->getFolding());
					$this->_S('vacuum_packer', $tr->getVacuumPacker());
					$this->_S('helmke_drum', $tr->getHelmkeDrum());
					$this->_S('water_particle_counter', $tr->getWaterParticleCounter());
					$this->_S('air_particle_counter', $tr->getAirParticleCounter());
					$this->_S('thermo_patch', $tr->getThermoPatch());
					$this->_S('dispatch', $tr->getDispatch());
					$this->_S('sewing_machine', $tr->getSewingMachine());
					$this->_S('stud_machine', $tr->getStudMachine());
					$this->_S('shoe_washer', $tr->getShoeWasher());
					$this->_S('shoe_dryer', $tr->getShoeDryer());
				}

			}else{
				//--------------- have evaluated before
				$this->_S('employee_no', $this->record->getEmployeeNo());
				$this->_S('name', $this->record->getName());
				$this->_S('company', $this->record->getCompany());
				$this->_S('date_from', $this->record->getDateFrom());
				$this->_S('date_to', $this->record->getDateTo());
				$this->_S('verify', $this->record->getVerify());
				$this->_S('no_hrs', $this->record->getNoHrs());
				$this->_S('remarks', $this->record->getRemarks());
				$this->_S('basic_training', $this->record->getBasicTraining());
				$this->_S('soil_sorting', $this->record->getSoilSorting());
				$this->_S('loading_washer', $this->record->getLoadingWasher());
				$this->_S('unloading_washer', $this->record->getUnloadingWasher());
				$this->_S('cleanroom_dryer', $this->record->getCleanroomDryer());
				$this->_S('folding', $this->record->getFolding());
				$this->_S('vacuum_packer', $this->record->getVacuumPacker());
				$this->_S('helmke_drum', $this->record->getHelmkeDrum());
				$this->_S('water_particle_counter', $this->record->getWaterParticleCounter());
				$this->_S('air_particle_counter', $this->record->getAirParticleCounter());
				$this->_S('thermo_patch', $this->record->getThermoPatch());
				$this->_S('dispatch', $this->record->getDispatch());
				$this->_S('sewing_machine', $this->record->getSewingMachine());
				$this->_S('stud_machine', $this->record->getStudMachine());
				$this->_S('shoe_washer', $this->record->getShoeWasher());
				$this->_S('shoe_dryer', $this->record->getShoeDryer());
			}

		}
		//--------- save data
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$id = $this->_G('id');
			$this->record = HrTrainingEvaluationPeer::GetHrTrainingRecordIdByTrId($id);
			if (!$this->record){
				$this->record = new HrTrainingEvaluation();
				$this->record->setCreatedBy($this->_U());
				$this->record->setDateCreated(DateUtils::DUNow());
			}
			$empData = HrEmployeeMasterPeer::GetEmployeeData($this->_G('employee_no'));
			$this->record->setEmployeeNo($this->_G('employee_no'));
			$this->record->setName($empData? $empData->getName(): '');
			$this->record->setCompany($empData? $empData->getCompany(): '');
			$this->record->setDateTime($this->_G('date_time'));
			$this->record->setEvaluated($this->_G('evaluated'));
			$this->record->setNoHrs($this->_G('no_hrs'));
			$this->record->setRemarks($this->_G('remarks'));
			$this->record->setBasicTraining($this->_G('basic_training', ''));
			$this->record->setSoilSorting($this->_G('soil_sorting', ''));
			$this->record->setLoadingWasher($this->_G('loading_washer', ''));
			$this->record->setUnloadingWasher($this->_G('unloading_washer', ''));
			$this->record->setCleanroomDryer($this->_G('cleanroom_dryer', ''));
			$this->record->setFolding($this->_G('folding'));
			$this->record->setVacuumPacker($this->_G('vacuum_packer', ''));
			$this->record->setHelmkeDrum($this->_G('helmke_drum', ''));
			$this->record->setWaterParticleCounter($this->_G('water_particle_counter', ''));
			$this->record->setAirParticleCounter($this->_G('air_particle_counter', ''));
			$this->record->setThermoPatch($this->_G('thermo_patch', ''));
			$this->record->setDispatch($this->_G('dispatch', ''));
			$this->record->setSewingMachine($this->_G('sewing_machine', ''));
			$this->record->setStudMachine($this->_G('stud_machine', ''));
			$this->record->setShoeWasher($this->_G('shoe_washer', ''));
			$this->record->setShoeDryer($this->_G('shoe_dryer', ''));
			$this->record->setModifiedBy($this->_U());
			$this->record->setDateModified(DateUtils::DUNow());
			$this->record->save();
			$data = $this->_G('employee_no');
			$this->_SUF('Record <b>' . $data . '</b> saved.');
			$this->redirect('training/mcsTrainingSearch?hIDs[]=' . $this->record->getId());
		}
		 
	}

	public function executeTrainingInfo()
	{
		$this->id = $this->_G('trId');
	}

	public function executeExternalTrainingEdit()
	{
		$id = $this->_G('id');
		$rec = HrTrainingDevelopmentPeer::retrieveByPK($id);
		$this->_S('employee_no', $rec->getEmployeeNo());
		$this->_S('hr_training_id', $rec->getHrTrainingId());
		$this->_S('description', $rec->getDescription());
		$this->_S('place_held', $rec->getPlaceHeld());
		$this->_S('date_from', $rec->getDateFrom());
		$this->_S('date_to', $rec->getDateTo());
		$this->_S('name_trainor', $rec->getNameTrainor());
		$this->_S('license_no', $rec->getLicenseNo());
		$this->_S('no_hrs', $rec->getNoHrs());
		$this->_S('remarks', $rec->getRemarks());
		$this->setTemplate('empExternalTrainingAdd');
	}

	public function executeTrainingEdit()
	{
		$id = $this->_G('id');
		$rec = HrTrainingPeer::retrieveByPK($id);
		$this->_S('description', $rec->getDescription());
		$this->_S('place_held', $rec->getPlaceHeld());
		$this->_S('date_from', $rec->getDateFrom());
		$this->_S('date_to', $rec->getDateTo());
		$this->_S('name_trainor', $rec->getNameTrainor());
		$this->_S('license_no', $rec->getLicenseNo());
		$this->_S('no_hrs', $rec->getNoHrs());
		$this->_S('remarks', $rec->getRemarks());
		$this->setTemplate('trainingAdd');
	}

	public function executeMcsTrainingEdit()
	{
		$id = $this->_G('id');
		$rec = HrTrainingRecordPeer::retrieveByPK($id);
		$this->_S('employee_no', $rec->getEmployeeNO());
		$this->_S('name', $rec->getName());
		$this->_S('company', $rec->getCompany());
		$this->_S('date_from', $rec->getDateFrom());
		$this->_S('date_to', $rec->getDateTo());
		$this->_S('verify', $rec->getVerify());
		$this->_S('no_hrs', $rec->getNoHrs());
		$this->_S('remarks', $rec->getRemarks());
		$this->_S('basic_training', $rec->getBasicTraining());
		$this->_S('soil_sorting', $rec->getSoilSorting());
		$this->_S('loading_washer', $rec->getLoadingWasher());
		$this->_S('unloading_washer', $rec->getUnloadingWasher());
		$this->_S('cleanroom_dryer', $rec->getCleanroomDryer());
		$this->_S('folding', $rec->getFolding());
		$this->_S('vacuum_packer', $rec->getVacuumPacker());
		$this->_S('helmke_drum', $rec->getHelmkeDrum());
		$this->_S('water_particle_counter', $rec->getWaterParticleCounter());
		$this->_S('air_particle_counter', $rec->getAirParticleCounter());
		$this->_S('thermo_patch', $rec->getThermoPatch());
		$this->_S('dispatch', $rec->getDispatch());
		$this->_S('sewing_machine', $rec->getSewingMachine());
		$this->_S('stud_machine', $rec->getStudMachine());
		$this->_S('shoe_washer', $rec->getShoeWasher());
		$this->_S('shoe_dryer', $rec->getShoeDryer());
		$this->_S('esd_measurement', $rec->getEsdMeasurement());
		$this->_S('beyond_repair', $rec->getBeyondRepair());
		$this->_S('bio_burden_test', $rec->getBioBurdenTest());

		$this->setTemplate('mcsTrainingAdd');
	}

	public function executeAcroNanoTrainingEdit()
	{
		$id = $this->_G('id');
		$rec = HrAcroNanoTrainingRecordPeer::retrieveByPK($id);
		$this->_S('employee_no', $rec->getEmployeeNO());
		$this->_S('name', $rec->getName());
		$this->_S('company', $rec->getCompany());
		$this->_S('date_from', $rec->getDateFrom());
		$this->_S('date_to', $rec->getDateTo());
		$this->_S('verify', $rec->getVerify());
		$this->_S('no_hrs', $rec->getNoHrs());
		$this->_S('remarks', $rec->getRemarks());

		$this->_S('initial_inspection', $rec->getInitialInspection());
		$this->_S('delabeling_jelly_removal', $rec->getDelabelingJellyRemoval());
		$this->_S('pre_wash', $rec->getPreWash());
		$this->_S('loading', $rec->getLoading());
		$this->_S('machine_wash', $rec->getMachineWash());
		$this->_S('unloading', $rec->getUnloading());
		$this->_S('inprocess_visual_inspection', $rec->getInprocessVisualInspection());
		$this->_S('lpc', $rec->getLpc());
		$this->_S('ic', $rec->getIc());
		$this->_S('nvr', $rec->getNvr());
		$this->_S('qa_sample_inspection', $rec->getQaSampleInspection());
		$this->_S('packing', $rec->getPacking());
		$this->_S('purging_machine', $rec->getPurgingMachine());
		$this->_S('quality_policy', $rec->getQualityPolicy());
		$this->_S('spc_awareness', $rec->getSpcAwareness());
		$this->_S('visual_inspection', $rec->getVisualInspection());

		$this->_S('pharmag_washer', $rec->getPharmagWasher());
		$this->_S('pva_vmi', $rec->getPvaVmi());
		$this->_S('pre_wash_loading', $rec->getPreWashLoading());
		$this->_S('pre_wash_unloading', $rec->getPreWashUnloading());
		$this->_S('soaking_loading', $rec->getSoakingLoading());
		$this->_S('soaking_unloading', $rec->getSoakingUnloading());

		$this->setTemplate('acroNanoTrainingAdd');
	}

	public function executeTrainingDelete()
	{
		$id = $this->_G('id');
		$this->record = HrTrainingPeer::retrieveByPK($id);
		$rec = $this->record->getDateFrom().'('.$this->record->getDescription().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('training/listTrainingSearch');
	}

	public function executeExternalTrainingDelete()
	{
		$id = $this->_G('id');
		$this->record = HrTrainingDevelopmentPeer::retrieveByPK($id);
		$rec = $this->record->getDateFrom().'('.$this->record->getName().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('training/externalTrainingSearch');
	}

	public function executeMcsTrainingDelete()
	{
		$id = $this->_G('id');
		$this->record = HrTrainingRecordPeer::retrieveByPK($id);
		$rec = $this->record->getDateFrom().'('.$this->record->getName().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('training/mcsTrainingSearch');
	}

	public function executeAcroNanoTrainingDelete()
	{
		$id = $this->_G('id');
		$this->record = HrAcroNanoTrainingRecordPeer::retrieveByPK($id);
		$rec = $this->record->getDateFrom().'('.$this->record->getName().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('training/acroNanoTrainingSearch');
	}

	public function executeMcsRepairNames()
	{
		$rec = hrTrainingRecordPeer::doSelect(new Criteria());
		foreach($rec as $r){
			$empNo = $r->getEmployeeNo();
			$empMaster = HrEmployeeMasterPeer::GetEmployeeDataLikeEmpNo($empNo);
			if ($empMaster){
				$r->setName($empMaster->getName());
				$r->save();
			}
		}
		$this->redirect('training/mcsTrainingSearch');
	}

	public function executeAcroNanoRepairNames()
	{
		$rec = HrAcroNanoTrainingRecordPeer::doSelect(new Criteria());
		foreach($rec as $r){
			$empNo = $r->getEmployeeNo();
			$empMaster = HrEmployeeMasterPeer::GetEmployeeDataLikeEmpNo($empNo);
			if ($empMaster){
				$r->setName($empMaster->getName());
				$r->save();
			}
		}
		$this->redirect('training/acroNanoTrainingSearch');
	}

	public function executeTrainingVerify()
	{
		if ($this->_G('save')){
			$empData = HrEmployeeMasterPeer::GetEmployees();
			foreach($empData as $employee):
				$this->record = 
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
				$this->record->setModifiedBy($this->_U());
				$this->record->setDateModified(DateUtils::DUNow());
				$this->record->save();
			endforeach;
		}
	}
}

