<?php



class HrEmployeeSatisfactionSurveyMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeSatisfactionSurveyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee_satisfaction_survey');
		$tMap->setPhpName('HrEmployeeSatisfactionSurvey');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('QUESTIONAIRE_ID', 'QuestionaireId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('RATING', 'Rating', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('RECOMMENDATION', 'Recommendation', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 