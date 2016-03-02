<?php



class HrEmployeeLeaveCreditsMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeLeaveCreditsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee_leave_credits');
		$tMap->setPhpName('HrEmployeeLeaveCredits');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('HR_EMPLOYEE_ID', 'HrEmployeeId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HR_LEAVE_ID', 'HrLeaveId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LEAVE_TYPE', 'LeaveType', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('CREDITS', 'Credits', 'double', CreoleTypes::DECIMAL, false, 5);

		$tMap->addColumn('CONSUMED', 'Consumed', 'double', CreoleTypes::DECIMAL, false, 5);

		$tMap->addColumn('PREVIOUS_BALANCE', 'PreviousBalance', 'double', CreoleTypes::DECIMAL, false, 5);

		$tMap->addColumn('FISCAL_YEAR', 'FiscalYear', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 