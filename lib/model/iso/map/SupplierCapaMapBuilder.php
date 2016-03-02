<?php



class SupplierCapaMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.SupplierCapaMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('iso');

		$tMap = $this->dbMap->addTable('supplier_capa');
		$tMap->setPhpName('SupplierCapa');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REPORT_NO', 'ReportNo', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ISSUE_DATE', 'IssueDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('RESPONSE_DATE', 'ResponseDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FINDINGS', 'Findings', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ROOT_CAUSE_ANALYSIS', 'RootCauseAnalysis', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CONTAINMENT_PLAN', 'ContainmentPlan', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PREVENTIVE_PLAN', 'PreventivePlan', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('VERIFICATION_OF_CA_PA', 'VerificationOfCaPa', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('REPORTED_BY', 'ReportedBy', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SYMPTOM', 'Symptom', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ERA_DESCRIPTION', 'EraDescription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ERA_EFFECTIVITY', 'EraEffectivity', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ERA_IMPLEMENTED', 'EraImplemented', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ERA_COMPLETED', 'EraCompleted', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('TEAM', 'Team', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CONT_EFFECTIVITY', 'ContEffectivity', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CONT_IMPLEMENTED', 'ContImplemented', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CONT_COMPLETED', 'ContCompleted', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHOSEN_PERM_CA', 'ChosenPermCa', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CHOSEN_PERM_EFFECTIVITY', 'ChosenPermEffectivity', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHOSEN_PERM_IMPLEMENTED', 'ChosenPermImplemented', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHOSEN_PERM_COMPLETED', 'ChosenPermCompleted', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IMPLEMENTED_PERM_CA', 'ImplementedPermCa', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMPLEMENTED_PERM_EFFECTIVITY', 'ImplementedPermEffectivity', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IMPLEMENTED_PERM_IMPLEMENTED', 'ImplementedPermImplemented', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IMPLEMENTED_PERM_COMPLETED', 'ImplementedPermCompleted', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_NAME', 'CarName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_FOLLOWUP_REQUIRED', 'CarFollowupRequired', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_FOLLOWUP_DATE', 'CarFollowupDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('CAR_CA_STATUS', 'CarCaStatus', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CAR_TITLE', 'CarTitle', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_PLAN_EFFECTIVE', 'CarPlanEffective', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_VERIFIED_BY', 'CarVerifiedBy', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_CLOSURE_DATE', 'CarClosureDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TOKEN', 'Token', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('TOKEN_EXPIRY', 'TokenExpiry', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 