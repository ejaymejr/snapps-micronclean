<?php



class EnggEvalNoticeMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.EnggEvalNoticeMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('engg_eval_notice');
		$tMap->setPhpName('EnggEvalNotice');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('EEN_NO', 'EenNo', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PROPOSED_ACTION', 'ProposedAction', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('INITIATOR', 'Initiator', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PROBLEM_DESCRIPTION', 'ProblemDescription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INITIATED_BY', 'InitiatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('INITIATED_DATE', 'InitiatedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('KEYED_IN_BY', 'KeyedInBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('KEYED_IN_DATE', 'KeyedInDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('ASSIGNED_TO', 'AssignedTo', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('ASSIGNED_DATE', 'AssignedDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('EIGHT_D_FORM', 'EightDForm', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('FLOW_DESCRIPTION', 'FlowDescription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATA_COLLECTION', 'DataCollection', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATA_COMPLETION_DATE', 'DataCompletionDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('QTY_FOR_RUN', 'QtyForRun', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('RUN_COMPLETION_DATE', 'RunCompletionDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('SUBMITTED_BY', 'SubmittedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('RUN_PLAN_DATE', 'RunPlanDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('APPROVE_COMMENT', 'ApproveComment', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('APPROVED_BY', 'ApprovedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('ACTION_PLAN_DATE', 'ActionPlanDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FOLLOW_UP_BY', 'FollowUpBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('FOLLOW_UP_DATE', 'FollowUpDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('IS_EFFECTIVE', 'IsEffective', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('EVIDENCE', 'Evidence', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DISPOSITION_OF_MATERIAL', 'DispositionOfMaterial', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CLOSED_OUT_DATE', 'ClosedOutDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('ADDITIONAL_SHEET', 'AdditionalSheet', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 