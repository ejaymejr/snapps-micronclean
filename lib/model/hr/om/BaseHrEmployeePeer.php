<?php


abstract class BaseHrEmployeePeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_employee';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrEmployee';

	
	const NUM_COLUMNS = 59;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_employee.ID';

	
	const EMPLOYEE_NO = 'hr_employee.EMPLOYEE_NO';

	
	const LASTNAME = 'hr_employee.LASTNAME';

	
	const FIRSTNAME = 'hr_employee.FIRSTNAME';

	
	const MIDNAME = 'hr_employee.MIDNAME';

	
	const HR_COMPANY_ID = 'hr_employee.HR_COMPANY_ID';

	
	const IC_NO = 'hr_employee.IC_NO';

	
	const NAME = 'hr_employee.NAME';

	
	const DATE_OF_BIRTH = 'hr_employee.DATE_OF_BIRTH';

	
	const BIRTH_PLACE = 'hr_employee.BIRTH_PLACE';

	
	const BLOOD_TYPE = 'hr_employee.BLOOD_TYPE';

	
	const ORGAN_DONOR = 'hr_employee.ORGAN_DONOR';

	
	const STREET = 'hr_employee.STREET';

	
	const BLDG_ROOM_NO = 'hr_employee.BLDG_ROOM_NO';

	
	const CITY = 'hr_employee.CITY';

	
	const PROVINCE = 'hr_employee.PROVINCE';

	
	const ZIP_CODE = 'hr_employee.ZIP_CODE';

	
	const TEL_NO = 'hr_employee.TEL_NO';

	
	const CELL_NO = 'hr_employee.CELL_NO';

	
	const EMAIL_ADD = 'hr_employee.EMAIL_ADD';

	
	const STATUS = 'hr_employee.STATUS';

	
	const GENDER = 'hr_employee.GENDER';

	
	const RANK_CODE = 'hr_employee.RANK_CODE';

	
	const JOB_TITLE = 'hr_employee.JOB_TITLE';

	
	const DATE_HIRED = 'hr_employee.DATE_HIRED';

	
	const BANK = 'hr_employee.BANK';

	
	const ACCT_NO = 'hr_employee.ACCT_NO';

	
	const COST_CENTER_CODE = 'hr_employee.COST_CENTER_CODE';

	
	const EMP_STATUS = 'hr_employee.EMP_STATUS';

	
	const TYPE_OF_EMPLOYMENT = 'hr_employee.TYPE_OF_EMPLOYMENT';

	
	const TAX_ID = 'hr_employee.TAX_ID';

	
	const SIN_ID = 'hr_employee.SIN_ID';

	
	const ACTIVE = 'hr_employee.ACTIVE';

	
	const PHOTO = 'hr_employee.PHOTO';

	
	const NAME_NOTIFIED = 'hr_employee.NAME_NOTIFIED';

	
	const RELATION = 'hr_employee.RELATION';

	
	const ADDRESS = 'hr_employee.ADDRESS';

	
	const CONTACT_NO = 'hr_employee.CONTACT_NO';

	
	const DATE_RESIGNED = 'hr_employee.DATE_RESIGNED';

	
	const FIN_NO = 'hr_employee.FIN_NO';

	
	const NATIONALITY = 'hr_employee.NATIONALITY';

	
	const COMMENCE_DATE = 'hr_employee.COMMENCE_DATE';

	
	const TYPE = 'hr_employee.TYPE';

	
	const RACE = 'hr_employee.RACE';

	
	const REMARK = 'hr_employee.REMARK';

	
	const TEAM = 'hr_employee.TEAM';

	
	const PERMIT_NO = 'hr_employee.PERMIT_NO';

	
	const PERMIT_RENEW = 'hr_employee.PERMIT_RENEW';

	
	const PERMIT_EXPIRY = 'hr_employee.PERMIT_EXPIRY';

	
	const PASSPORT_EXPIRY = 'hr_employee.PASSPORT_EXPIRY';

	
	const EMPLOYMENT_AS = 'hr_employee.EMPLOYMENT_AS';

	
	const CREATED_BY = 'hr_employee.CREATED_BY';

	
	const DATE_CREATED = 'hr_employee.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_employee.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_employee.DATE_MODIFIED';

	
	const PROFESSION = 'hr_employee.PROFESSION';

	
	const MOM_GROUP = 'hr_employee.MOM_GROUP';

	
	const LEVY_TIER = 'hr_employee.LEVY_TIER';

	
	const ANNUAL_LEAVE = 'hr_employee.ANNUAL_LEAVE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Lastname', 'Firstname', 'Midname', 'HrCompanyId', 'IcNo', 'Name', 'DateOfBirth', 'BirthPlace', 'BloodType', 'OrganDonor', 'Street', 'BldgRoomNo', 'City', 'Province', 'ZipCode', 'TelNo', 'CellNo', 'EmailAdd', 'Status', 'Gender', 'RankCode', 'JobTitle', 'DateHired', 'Bank', 'AcctNo', 'CostCenterCode', 'EmpStatus', 'TypeOfEmployment', 'TaxId', 'SinId', 'Active', 'Photo', 'NameNotified', 'Relation', 'Address', 'ContactNo', 'DateResigned', 'FinNo', 'Nationality', 'CommenceDate', 'Type', 'Race', 'Remark', 'Team', 'PermitNo', 'PermitRenew', 'PermitExpiry', 'PassportExpiry', 'EmploymentAs', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', 'Profession', 'MomGroup', 'LevyTier', 'AnnualLeave', ),
		BasePeer::TYPE_COLNAME => array (HrEmployeePeer::ID, HrEmployeePeer::EMPLOYEE_NO, HrEmployeePeer::LASTNAME, HrEmployeePeer::FIRSTNAME, HrEmployeePeer::MIDNAME, HrEmployeePeer::HR_COMPANY_ID, HrEmployeePeer::IC_NO, HrEmployeePeer::NAME, HrEmployeePeer::DATE_OF_BIRTH, HrEmployeePeer::BIRTH_PLACE, HrEmployeePeer::BLOOD_TYPE, HrEmployeePeer::ORGAN_DONOR, HrEmployeePeer::STREET, HrEmployeePeer::BLDG_ROOM_NO, HrEmployeePeer::CITY, HrEmployeePeer::PROVINCE, HrEmployeePeer::ZIP_CODE, HrEmployeePeer::TEL_NO, HrEmployeePeer::CELL_NO, HrEmployeePeer::EMAIL_ADD, HrEmployeePeer::STATUS, HrEmployeePeer::GENDER, HrEmployeePeer::RANK_CODE, HrEmployeePeer::JOB_TITLE, HrEmployeePeer::DATE_HIRED, HrEmployeePeer::BANK, HrEmployeePeer::ACCT_NO, HrEmployeePeer::COST_CENTER_CODE, HrEmployeePeer::EMP_STATUS, HrEmployeePeer::TYPE_OF_EMPLOYMENT, HrEmployeePeer::TAX_ID, HrEmployeePeer::SIN_ID, HrEmployeePeer::ACTIVE, HrEmployeePeer::PHOTO, HrEmployeePeer::NAME_NOTIFIED, HrEmployeePeer::RELATION, HrEmployeePeer::ADDRESS, HrEmployeePeer::CONTACT_NO, HrEmployeePeer::DATE_RESIGNED, HrEmployeePeer::FIN_NO, HrEmployeePeer::NATIONALITY, HrEmployeePeer::COMMENCE_DATE, HrEmployeePeer::TYPE, HrEmployeePeer::RACE, HrEmployeePeer::REMARK, HrEmployeePeer::TEAM, HrEmployeePeer::PERMIT_NO, HrEmployeePeer::PERMIT_RENEW, HrEmployeePeer::PERMIT_EXPIRY, HrEmployeePeer::PASSPORT_EXPIRY, HrEmployeePeer::EMPLOYMENT_AS, HrEmployeePeer::CREATED_BY, HrEmployeePeer::DATE_CREATED, HrEmployeePeer::MODIFIED_BY, HrEmployeePeer::DATE_MODIFIED, HrEmployeePeer::PROFESSION, HrEmployeePeer::MOM_GROUP, HrEmployeePeer::LEVY_TIER, HrEmployeePeer::ANNUAL_LEAVE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'lastname', 'firstname', 'midname', 'hr_company_id', 'ic_no', 'name', 'date_of_birth', 'birth_place', 'blood_type', 'organ_donor', 'street', 'bldg_room_no', 'city', 'province', 'zip_code', 'tel_no', 'cell_no', 'email_add', 'status', 'gender', 'rank_code', 'job_title', 'date_hired', 'bank', 'acct_no', 'cost_center_code', 'emp_status', 'type_of_employment', 'tax_id', 'sin_id', 'active', 'photo', 'name_notified', 'relation', 'address', 'contact_no', 'date_resigned', 'fin_no', 'nationality', 'commence_date', 'type', 'race', 'remark', 'team', 'permit_no', 'permit_renew', 'permit_expiry', 'passport_expiry', 'employment_as', 'created_by', 'date_created', 'modified_by', 'date_modified', 'profession', 'mom_group', 'levy_tier', 'annual_leave', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Lastname' => 2, 'Firstname' => 3, 'Midname' => 4, 'HrCompanyId' => 5, 'IcNo' => 6, 'Name' => 7, 'DateOfBirth' => 8, 'BirthPlace' => 9, 'BloodType' => 10, 'OrganDonor' => 11, 'Street' => 12, 'BldgRoomNo' => 13, 'City' => 14, 'Province' => 15, 'ZipCode' => 16, 'TelNo' => 17, 'CellNo' => 18, 'EmailAdd' => 19, 'Status' => 20, 'Gender' => 21, 'RankCode' => 22, 'JobTitle' => 23, 'DateHired' => 24, 'Bank' => 25, 'AcctNo' => 26, 'CostCenterCode' => 27, 'EmpStatus' => 28, 'TypeOfEmployment' => 29, 'TaxId' => 30, 'SinId' => 31, 'Active' => 32, 'Photo' => 33, 'NameNotified' => 34, 'Relation' => 35, 'Address' => 36, 'ContactNo' => 37, 'DateResigned' => 38, 'FinNo' => 39, 'Nationality' => 40, 'CommenceDate' => 41, 'Type' => 42, 'Race' => 43, 'Remark' => 44, 'Team' => 45, 'PermitNo' => 46, 'PermitRenew' => 47, 'PermitExpiry' => 48, 'PassportExpiry' => 49, 'EmploymentAs' => 50, 'CreatedBy' => 51, 'DateCreated' => 52, 'ModifiedBy' => 53, 'DateModified' => 54, 'Profession' => 55, 'MomGroup' => 56, 'LevyTier' => 57, 'AnnualLeave' => 58, ),
		BasePeer::TYPE_COLNAME => array (HrEmployeePeer::ID => 0, HrEmployeePeer::EMPLOYEE_NO => 1, HrEmployeePeer::LASTNAME => 2, HrEmployeePeer::FIRSTNAME => 3, HrEmployeePeer::MIDNAME => 4, HrEmployeePeer::HR_COMPANY_ID => 5, HrEmployeePeer::IC_NO => 6, HrEmployeePeer::NAME => 7, HrEmployeePeer::DATE_OF_BIRTH => 8, HrEmployeePeer::BIRTH_PLACE => 9, HrEmployeePeer::BLOOD_TYPE => 10, HrEmployeePeer::ORGAN_DONOR => 11, HrEmployeePeer::STREET => 12, HrEmployeePeer::BLDG_ROOM_NO => 13, HrEmployeePeer::CITY => 14, HrEmployeePeer::PROVINCE => 15, HrEmployeePeer::ZIP_CODE => 16, HrEmployeePeer::TEL_NO => 17, HrEmployeePeer::CELL_NO => 18, HrEmployeePeer::EMAIL_ADD => 19, HrEmployeePeer::STATUS => 20, HrEmployeePeer::GENDER => 21, HrEmployeePeer::RANK_CODE => 22, HrEmployeePeer::JOB_TITLE => 23, HrEmployeePeer::DATE_HIRED => 24, HrEmployeePeer::BANK => 25, HrEmployeePeer::ACCT_NO => 26, HrEmployeePeer::COST_CENTER_CODE => 27, HrEmployeePeer::EMP_STATUS => 28, HrEmployeePeer::TYPE_OF_EMPLOYMENT => 29, HrEmployeePeer::TAX_ID => 30, HrEmployeePeer::SIN_ID => 31, HrEmployeePeer::ACTIVE => 32, HrEmployeePeer::PHOTO => 33, HrEmployeePeer::NAME_NOTIFIED => 34, HrEmployeePeer::RELATION => 35, HrEmployeePeer::ADDRESS => 36, HrEmployeePeer::CONTACT_NO => 37, HrEmployeePeer::DATE_RESIGNED => 38, HrEmployeePeer::FIN_NO => 39, HrEmployeePeer::NATIONALITY => 40, HrEmployeePeer::COMMENCE_DATE => 41, HrEmployeePeer::TYPE => 42, HrEmployeePeer::RACE => 43, HrEmployeePeer::REMARK => 44, HrEmployeePeer::TEAM => 45, HrEmployeePeer::PERMIT_NO => 46, HrEmployeePeer::PERMIT_RENEW => 47, HrEmployeePeer::PERMIT_EXPIRY => 48, HrEmployeePeer::PASSPORT_EXPIRY => 49, HrEmployeePeer::EMPLOYMENT_AS => 50, HrEmployeePeer::CREATED_BY => 51, HrEmployeePeer::DATE_CREATED => 52, HrEmployeePeer::MODIFIED_BY => 53, HrEmployeePeer::DATE_MODIFIED => 54, HrEmployeePeer::PROFESSION => 55, HrEmployeePeer::MOM_GROUP => 56, HrEmployeePeer::LEVY_TIER => 57, HrEmployeePeer::ANNUAL_LEAVE => 58, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'lastname' => 2, 'firstname' => 3, 'midname' => 4, 'hr_company_id' => 5, 'ic_no' => 6, 'name' => 7, 'date_of_birth' => 8, 'birth_place' => 9, 'blood_type' => 10, 'organ_donor' => 11, 'street' => 12, 'bldg_room_no' => 13, 'city' => 14, 'province' => 15, 'zip_code' => 16, 'tel_no' => 17, 'cell_no' => 18, 'email_add' => 19, 'status' => 20, 'gender' => 21, 'rank_code' => 22, 'job_title' => 23, 'date_hired' => 24, 'bank' => 25, 'acct_no' => 26, 'cost_center_code' => 27, 'emp_status' => 28, 'type_of_employment' => 29, 'tax_id' => 30, 'sin_id' => 31, 'active' => 32, 'photo' => 33, 'name_notified' => 34, 'relation' => 35, 'address' => 36, 'contact_no' => 37, 'date_resigned' => 38, 'fin_no' => 39, 'nationality' => 40, 'commence_date' => 41, 'type' => 42, 'race' => 43, 'remark' => 44, 'team' => 45, 'permit_no' => 46, 'permit_renew' => 47, 'permit_expiry' => 48, 'passport_expiry' => 49, 'employment_as' => 50, 'created_by' => 51, 'date_created' => 52, 'modified_by' => 53, 'date_modified' => 54, 'profession' => 55, 'mom_group' => 56, 'levy_tier' => 57, 'annual_leave' => 58, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrEmployeeMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrEmployeeMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrEmployeePeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(HrEmployeePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrEmployeePeer::ID);

		$criteria->addSelectColumn(HrEmployeePeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrEmployeePeer::LASTNAME);

		$criteria->addSelectColumn(HrEmployeePeer::FIRSTNAME);

		$criteria->addSelectColumn(HrEmployeePeer::MIDNAME);

		$criteria->addSelectColumn(HrEmployeePeer::HR_COMPANY_ID);

		$criteria->addSelectColumn(HrEmployeePeer::IC_NO);

		$criteria->addSelectColumn(HrEmployeePeer::NAME);

		$criteria->addSelectColumn(HrEmployeePeer::DATE_OF_BIRTH);

		$criteria->addSelectColumn(HrEmployeePeer::BIRTH_PLACE);

		$criteria->addSelectColumn(HrEmployeePeer::BLOOD_TYPE);

		$criteria->addSelectColumn(HrEmployeePeer::ORGAN_DONOR);

		$criteria->addSelectColumn(HrEmployeePeer::STREET);

		$criteria->addSelectColumn(HrEmployeePeer::BLDG_ROOM_NO);

		$criteria->addSelectColumn(HrEmployeePeer::CITY);

		$criteria->addSelectColumn(HrEmployeePeer::PROVINCE);

		$criteria->addSelectColumn(HrEmployeePeer::ZIP_CODE);

		$criteria->addSelectColumn(HrEmployeePeer::TEL_NO);

		$criteria->addSelectColumn(HrEmployeePeer::CELL_NO);

		$criteria->addSelectColumn(HrEmployeePeer::EMAIL_ADD);

		$criteria->addSelectColumn(HrEmployeePeer::STATUS);

		$criteria->addSelectColumn(HrEmployeePeer::GENDER);

		$criteria->addSelectColumn(HrEmployeePeer::RANK_CODE);

		$criteria->addSelectColumn(HrEmployeePeer::JOB_TITLE);

		$criteria->addSelectColumn(HrEmployeePeer::DATE_HIRED);

		$criteria->addSelectColumn(HrEmployeePeer::BANK);

		$criteria->addSelectColumn(HrEmployeePeer::ACCT_NO);

		$criteria->addSelectColumn(HrEmployeePeer::COST_CENTER_CODE);

		$criteria->addSelectColumn(HrEmployeePeer::EMP_STATUS);

		$criteria->addSelectColumn(HrEmployeePeer::TYPE_OF_EMPLOYMENT);

		$criteria->addSelectColumn(HrEmployeePeer::TAX_ID);

		$criteria->addSelectColumn(HrEmployeePeer::SIN_ID);

		$criteria->addSelectColumn(HrEmployeePeer::ACTIVE);

		$criteria->addSelectColumn(HrEmployeePeer::PHOTO);

		$criteria->addSelectColumn(HrEmployeePeer::NAME_NOTIFIED);

		$criteria->addSelectColumn(HrEmployeePeer::RELATION);

		$criteria->addSelectColumn(HrEmployeePeer::ADDRESS);

		$criteria->addSelectColumn(HrEmployeePeer::CONTACT_NO);

		$criteria->addSelectColumn(HrEmployeePeer::DATE_RESIGNED);

		$criteria->addSelectColumn(HrEmployeePeer::FIN_NO);

		$criteria->addSelectColumn(HrEmployeePeer::NATIONALITY);

		$criteria->addSelectColumn(HrEmployeePeer::COMMENCE_DATE);

		$criteria->addSelectColumn(HrEmployeePeer::TYPE);

		$criteria->addSelectColumn(HrEmployeePeer::RACE);

		$criteria->addSelectColumn(HrEmployeePeer::REMARK);

		$criteria->addSelectColumn(HrEmployeePeer::TEAM);

		$criteria->addSelectColumn(HrEmployeePeer::PERMIT_NO);

		$criteria->addSelectColumn(HrEmployeePeer::PERMIT_RENEW);

		$criteria->addSelectColumn(HrEmployeePeer::PERMIT_EXPIRY);

		$criteria->addSelectColumn(HrEmployeePeer::PASSPORT_EXPIRY);

		$criteria->addSelectColumn(HrEmployeePeer::EMPLOYMENT_AS);

		$criteria->addSelectColumn(HrEmployeePeer::CREATED_BY);

		$criteria->addSelectColumn(HrEmployeePeer::DATE_CREATED);

		$criteria->addSelectColumn(HrEmployeePeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrEmployeePeer::DATE_MODIFIED);

		$criteria->addSelectColumn(HrEmployeePeer::PROFESSION);

		$criteria->addSelectColumn(HrEmployeePeer::MOM_GROUP);

		$criteria->addSelectColumn(HrEmployeePeer::LEVY_TIER);

		$criteria->addSelectColumn(HrEmployeePeer::ANNUAL_LEAVE);

	}

	const COUNT = 'COUNT(hr_employee.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_employee.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrEmployeePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrEmployeePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrEmployeePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = HrEmployeePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrEmployeePeer::populateObjects(HrEmployeePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrEmployeePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrEmployeePeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return HrEmployeePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrEmployeePeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(HrEmployeePeer::ID);
			$selectCriteria->add(HrEmployeePeer::ID, $criteria->remove(HrEmployeePeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(HrEmployeePeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(HrEmployeePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrEmployee) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrEmployeePeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(HrEmployee $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrEmployeePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrEmployeePeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(HrEmployeePeer::DATABASE_NAME, HrEmployeePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrEmployeePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(HrEmployeePeer::DATABASE_NAME);

		$criteria->add(HrEmployeePeer::ID, $pk);


		$v = HrEmployeePeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(HrEmployeePeer::ID, $pks, Criteria::IN);
			$objs = HrEmployeePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrEmployeePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrEmployeeMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrEmployeeMapBuilder');
}
