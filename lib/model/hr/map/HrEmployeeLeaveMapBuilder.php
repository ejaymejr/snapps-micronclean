<?php



class HrEmployeeLeaveMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeLeaveMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee_leave');
		$tMap->setPhpName('HrEmployeeLeave');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 60);

		$tMap->addColumn('IC_NO', 'IcNo', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('CONTACT_NO', 'ContactNo', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('HR_LEAVE_ID', 'HrLeaveId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('HR_EMPLOYEE_ID', 'HrEmployeeId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('HR_DEPARTMENT_ID', 'HrDepartmentId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('HR_COMPANY_ID', 'HrCompanyId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DATE_FILED', 'DateFiled', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('LEAVE_TYPE', 'LeaveType', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('REASON_LEAVE', 'ReasonLeave', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INCLUSIVE_DATEFROM', 'InclusiveDatefrom', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('INCLUSIVE_DATETO', 'InclusiveDateto', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('FISCAL_YEAR', 'FiscalYear', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('NO_DAYS', 'NoDays', 'double', CreoleTypes::FLOAT, false, 3);

		$tMap->addColumn('HALF_DAY', 'HalfDay', 'string', CreoleTypes::VARCHAR, false, 8);

		$tMap->addColumn('VERIFIED', 'Verified', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('DATE_VERIFIED', 'DateVerified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('APPROVED', 'Approved', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('APPROVED_BY', 'ApprovedBy', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('DATE_APPROVED', 'DateApproved', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 