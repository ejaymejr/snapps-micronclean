<?php



class TkWorktemplateMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.TkWorktemplateMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tk_worktemplate');
		$tMap->setPhpName('TkWorktemplate');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('WORKTEMP_NO', 'WorktempNo', 'string', CreoleTypes::CHAR, true, 30);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('FISCAL_YEAR', 'FiscalYear', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('AM_PM_EV', 'AmPmEv', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DAYOFF', 'Dayoff', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DAYOFF_DAY', 'DayoffDay', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('TEMPLATE', 'Template', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('HRS_PER_DAY', 'HrsPerDay', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('HRS_PER_WEEK', 'HrsPerWeek', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('DAYS_PER_MONTH', 'DaysPerMonth', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('ACCT_CODE', 'AcctCode', 'string', CreoleTypes::CHAR, false, 5);

		$tMap->addColumn('ACCT_DESC', 'AcctDesc', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ALLOWANCE_DAYS', 'AllowanceDays', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('MEALBREAK', 'Mealbreak', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('ALLOWANCE_AMT', 'AllowanceAmt', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('BASE_NOHOURS', 'BaseNohours', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('TIMEIN_ALLOWANCE', 'TimeinAllowance', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TIMEOUT_ALLOWANCE', 'TimeoutAllowance', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ENDURANCE', 'Endurance', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('OT1', 'Ot1', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('OT2', 'Ot2', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('OT3', 'Ot3', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MIN_OT', 'MinOt', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MIN_TIME', 'MinTime', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 