<?php



class HrEmployeeSatisfactionQuestionaireMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeSatisfactionQuestionaireMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hr');

		$tMap = $this->dbMap->addTable('hr_employee_satisfaction_questionaire');
		$tMap->setPhpName('HrEmployeeSatisfactionQuestionaire');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('HEADER', 'Header', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('QUESTION', 'Question', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('GROUP', 'Group', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 