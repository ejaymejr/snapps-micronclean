<?php



class HrEmployeeMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.HrEmployeeMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hr_employee');
		$tMap->setPhpName('HrEmployee');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('LASTNAME', 'Lastname', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('FIRSTNAME', 'Firstname', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('MIDNAME', 'Midname', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('HR_COMPANY_ID', 'HrCompanyId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('IC_NO', 'IcNo', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 90);

		$tMap->addColumn('DATE_OF_BIRTH', 'DateOfBirth', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('BIRTH_PLACE', 'BirthPlace', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('BLOOD_TYPE', 'BloodType', 'string', CreoleTypes::VARCHAR, false, 12);

		$tMap->addColumn('ORGAN_DONOR', 'OrganDonor', 'string', CreoleTypes::VARCHAR, false, 12);

		$tMap->addColumn('STREET', 'Street', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('BLDG_ROOM_NO', 'BldgRoomNo', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('CITY', 'City', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('PROVINCE', 'Province', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('ZIP_CODE', 'ZipCode', 'string', CreoleTypes::VARCHAR, false, 24);

		$tMap->addColumn('TEL_NO', 'TelNo', 'string', CreoleTypes::VARCHAR, false, 68);

		$tMap->addColumn('CELL_NO', 'CellNo', 'string', CreoleTypes::VARCHAR, false, 68);

		$tMap->addColumn('EMAIL_ADD', 'EmailAdd', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('GENDER', 'Gender', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('RANK_CODE', 'RankCode', 'string', CreoleTypes::VARCHAR, false, 48);

		$tMap->addColumn('JOB_TITLE', 'JobTitle', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('DATE_HIRED', 'DateHired', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('BANK', 'Bank', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('ACCT_NO', 'AcctNo', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('COST_CENTER_CODE', 'CostCenterCode', 'string', CreoleTypes::VARCHAR, false, 48);

		$tMap->addColumn('EMP_STATUS', 'EmpStatus', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('TYPE_OF_EMPLOYMENT', 'TypeOfEmployment', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('TAX_ID', 'TaxId', 'string', CreoleTypes::VARCHAR, false, 120);

		$tMap->addColumn('SIN_ID', 'SinId', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('ACTIVE', 'Active', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('PHOTO', 'Photo', 'string', CreoleTypes::VARCHAR, false, 254);

		$tMap->addColumn('NAME_NOTIFIED', 'NameNotified', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('RELATION', 'Relation', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('CONTACT_NO', 'ContactNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DATE_RESIGNED', 'DateResigned', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FIN_NO', 'FinNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NATIONALITY', 'Nationality', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COMMENCE_DATE', 'CommenceDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('RACE', 'Race', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('TEAM', 'Team', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('PERMIT_NO', 'PermitNo', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('PERMIT_RENEW', 'PermitRenew', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PERMIT_EXPIRY', 'PermitExpiry', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PASSPORT_EXPIRY', 'PassportExpiry', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('EMPLOYMENT_AS', 'EmploymentAs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('PROFESSION', 'Profession', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('MOM_GROUP', 'MomGroup', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('LEVY_TIER', 'LevyTier', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('ANNUAL_LEAVE', 'AnnualLeave', 'string', CreoleTypes::BIGINT, false, null);

	} 
} 