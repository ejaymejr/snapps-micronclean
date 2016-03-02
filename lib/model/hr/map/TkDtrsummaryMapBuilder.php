<?php



class TkDtrsummaryMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.TkDtrsummaryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tk_dtrsummary');
		$tMap->setPhpName('TkDtrsummary');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MULTIPLIER', 'Multiplier', 'double', CreoleTypes::FLOAT, false, 2);

		$tMap->addColumn('ATTENDANCE', 'Attendance', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('HOLIDAY_CODE', 'HolidayCode', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LEAVE_TYPE', 'LeaveType', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DAYOFF', 'Dayoff', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('OVERTIMES', 'Overtimes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('EXTRA_OT_PAY', 'ExtraOtPay', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('EXTRA_OT', 'ExtraOt', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NORMAL', 'Normal', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('UNDERTIME', 'Undertime', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('DURATION', 'Duration', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('INCOME_PREPOST_BATCH', 'IncomePrepostBatch', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEDUCTION_PREPOST_BATCH', 'DeductionPrepostBatch', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('POSTED_AMOUNT', 'PostedAmount', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MEAL', 'Meal', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ALLOWANCE', 'Allowance', 'double', CreoleTypes::FLOAT, false, 9);

		$tMap->addColumn('LEVY', 'Levy', 'double', CreoleTypes::FLOAT, false, 9);

		$tMap->addColumn('INCOME_DEDUCTION', 'IncomeDeduction', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('IS_POSTED', 'IsPosted', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('POSTED_DATE', 'PostedDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('AC_DURA', 'AcDura', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('PART_TIME_INCOME', 'PartTimeIncome', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('RATE_PER_HOUR', 'RatePerHour', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TEAM', 'Team', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('UNEDITED_DURATION', 'UneditedDuration', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('TK_ATTENDANCE_ID', 'TkAttendanceId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('HR_EMPLOYEE_LEAVE_ID', 'HrEmployeeLeaveId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('HR_HOLIDAY_ID', 'HrHolidayId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 