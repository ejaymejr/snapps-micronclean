<?php



class IsoCapaMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.IsoCapaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('iso_capa');
		$tMap->setPhpName('IsoCapa');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('QAN_NO', 'QanNo', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('FILE_NAME', 'FileName', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PROPOSED_ACTION', 'ProposedAction', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('INITIATOR', 'Initiator', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CUST_COMMENT', 'CustComment', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PROBLEM_DESCRIPTION', 'ProblemDescription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INITIATED_BY', 'InitiatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('INITIATED_DATE', 'InitiatedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('KEYED_IN_BY', 'KeyedInBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('KEYED_IN_DATE', 'KeyedInDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('ASSIGNED_TO', 'AssignedTo', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('ASSIGNED_DATE', 'AssignedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('EIGHT_D_FORM', 'EightDForm', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('RECOMMENDED_ACTION', 'RecommendedAction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATA_COLLECTION', 'DataCollection', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMPLEMENTED_DATE', 'ImplementedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('AFFECTED_PARTS', 'AffectedParts', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INITIAL_COMPLETION_DATE', 'InitialCompletionDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PLAN_COMPLETION_DATE', 'PlanCompletionDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('SUBMITTED_BY', 'SubmittedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('RUN_PLAN_DATE', 'RunPlanDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('APPROVE_COMMENT', 'ApproveComment', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('APPROVED_BY', 'ApprovedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('ACTION_PLAN_DATE', 'ActionPlanDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FOLLOW_UP_BY', 'FollowUpBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('FOLLOW_UP_DATE', 'FollowUpDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('IS_EFFECTIVE', 'IsEffective', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('EFFECTIVITY_COMMENT', 'EffectivityComment', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CLOSED_OUT_DATE', 'ClosedOutDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('ADDITIONAL_SHEET', 'AdditionalSheet', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 