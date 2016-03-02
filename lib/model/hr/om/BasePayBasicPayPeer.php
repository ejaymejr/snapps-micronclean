<?php


abstract class BasePayBasicPayPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'pay_basic_pay';

	
	const CLASS_DEFAULT = 'lib.model.hr.PayBasicPay';

	
	const NUM_COLUMNS = 28;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'pay_basic_pay.ID';

	
	const EMPLOYEE_NO = 'pay_basic_pay.EMPLOYEE_NO';

	
	const NAME = 'pay_basic_pay.NAME';

	
	const DEPARTMENT = 'pay_basic_pay.DEPARTMENT';

	
	const COMPANY = 'pay_basic_pay.COMPANY';

	
	const BASIC_AMOUNT = 'pay_basic_pay.BASIC_AMOUNT';

	
	const SCHEDULED_AMOUNT = 'pay_basic_pay.SCHEDULED_AMOUNT';

	
	const HOURLY_RATE = 'pay_basic_pay.HOURLY_RATE';

	
	const OT_RATE = 'pay_basic_pay.OT_RATE';

	
	const ALLOWANCE = 'pay_basic_pay.ALLOWANCE';

	
	const LEVY = 'pay_basic_pay.LEVY';

	
	const TAXABLE_AMOUNT = 'pay_basic_pay.TAXABLE_AMOUNT';

	
	const GROSS_PAY = 'pay_basic_pay.GROSS_PAY';

	
	const FREQUENCY = 'pay_basic_pay.FREQUENCY';

	
	const ACCT_CODE = 'pay_basic_pay.ACCT_CODE';

	
	const CPF = 'pay_basic_pay.CPF';

	
	const CPF_AMOUNT = 'pay_basic_pay.CPF_AMOUNT';

	
	const CPF_CITIZENSHIP = 'pay_basic_pay.CPF_CITIZENSHIP';

	
	const EFFECTIVITY_DATE = 'pay_basic_pay.EFFECTIVITY_DATE';

	
	const PAID_TYPE = 'pay_basic_pay.PAID_TYPE';

	
	const STATUS = 'pay_basic_pay.STATUS';

	
	const REMARK = 'pay_basic_pay.REMARK';

	
	const DATE_RESIGNED = 'pay_basic_pay.DATE_RESIGNED';

	
	const RESIGNED_REMARK = 'pay_basic_pay.RESIGNED_REMARK';

	
	const CREATED_BY = 'pay_basic_pay.CREATED_BY';

	
	const DATE_CREATED = 'pay_basic_pay.DATE_CREATED';

	
	const MODIFIED_BY = 'pay_basic_pay.MODIFIED_BY';

	
	const DATE_MODIFIED = 'pay_basic_pay.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EmployeeNo', 'Name', 'Department', 'Company', 'BasicAmount', 'ScheduledAmount', 'HourlyRate', 'OtRate', 'Allowance', 'Levy', 'TaxableAmount', 'GrossPay', 'Frequency', 'AcctCode', 'Cpf', 'CpfAmount', 'CpfCitizenship', 'EffectivityDate', 'PaidType', 'Status', 'Remark', 'DateResigned', 'ResignedRemark', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (PayBasicPayPeer::ID, PayBasicPayPeer::EMPLOYEE_NO, PayBasicPayPeer::NAME, PayBasicPayPeer::DEPARTMENT, PayBasicPayPeer::COMPANY, PayBasicPayPeer::BASIC_AMOUNT, PayBasicPayPeer::SCHEDULED_AMOUNT, PayBasicPayPeer::HOURLY_RATE, PayBasicPayPeer::OT_RATE, PayBasicPayPeer::ALLOWANCE, PayBasicPayPeer::LEVY, PayBasicPayPeer::TAXABLE_AMOUNT, PayBasicPayPeer::GROSS_PAY, PayBasicPayPeer::FREQUENCY, PayBasicPayPeer::ACCT_CODE, PayBasicPayPeer::CPF, PayBasicPayPeer::CPF_AMOUNT, PayBasicPayPeer::CPF_CITIZENSHIP, PayBasicPayPeer::EFFECTIVITY_DATE, PayBasicPayPeer::PAID_TYPE, PayBasicPayPeer::STATUS, PayBasicPayPeer::REMARK, PayBasicPayPeer::DATE_RESIGNED, PayBasicPayPeer::RESIGNED_REMARK, PayBasicPayPeer::CREATED_BY, PayBasicPayPeer::DATE_CREATED, PayBasicPayPeer::MODIFIED_BY, PayBasicPayPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'employee_no', 'name', 'department', 'company', 'basic_amount', 'scheduled_amount', 'hourly_rate', 'ot_rate', 'allowance', 'levy', 'taxable_amount', 'gross_pay', 'frequency', 'acct_code', 'cpf', 'cpf_amount', 'cpf_citizenship', 'effectivity_date', 'paid_type', 'status', 'remark', 'date_resigned', 'resigned_remark', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EmployeeNo' => 1, 'Name' => 2, 'Department' => 3, 'Company' => 4, 'BasicAmount' => 5, 'ScheduledAmount' => 6, 'HourlyRate' => 7, 'OtRate' => 8, 'Allowance' => 9, 'Levy' => 10, 'TaxableAmount' => 11, 'GrossPay' => 12, 'Frequency' => 13, 'AcctCode' => 14, 'Cpf' => 15, 'CpfAmount' => 16, 'CpfCitizenship' => 17, 'EffectivityDate' => 18, 'PaidType' => 19, 'Status' => 20, 'Remark' => 21, 'DateResigned' => 22, 'ResignedRemark' => 23, 'CreatedBy' => 24, 'DateCreated' => 25, 'ModifiedBy' => 26, 'DateModified' => 27, ),
		BasePeer::TYPE_COLNAME => array (PayBasicPayPeer::ID => 0, PayBasicPayPeer::EMPLOYEE_NO => 1, PayBasicPayPeer::NAME => 2, PayBasicPayPeer::DEPARTMENT => 3, PayBasicPayPeer::COMPANY => 4, PayBasicPayPeer::BASIC_AMOUNT => 5, PayBasicPayPeer::SCHEDULED_AMOUNT => 6, PayBasicPayPeer::HOURLY_RATE => 7, PayBasicPayPeer::OT_RATE => 8, PayBasicPayPeer::ALLOWANCE => 9, PayBasicPayPeer::LEVY => 10, PayBasicPayPeer::TAXABLE_AMOUNT => 11, PayBasicPayPeer::GROSS_PAY => 12, PayBasicPayPeer::FREQUENCY => 13, PayBasicPayPeer::ACCT_CODE => 14, PayBasicPayPeer::CPF => 15, PayBasicPayPeer::CPF_AMOUNT => 16, PayBasicPayPeer::CPF_CITIZENSHIP => 17, PayBasicPayPeer::EFFECTIVITY_DATE => 18, PayBasicPayPeer::PAID_TYPE => 19, PayBasicPayPeer::STATUS => 20, PayBasicPayPeer::REMARK => 21, PayBasicPayPeer::DATE_RESIGNED => 22, PayBasicPayPeer::RESIGNED_REMARK => 23, PayBasicPayPeer::CREATED_BY => 24, PayBasicPayPeer::DATE_CREATED => 25, PayBasicPayPeer::MODIFIED_BY => 26, PayBasicPayPeer::DATE_MODIFIED => 27, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'employee_no' => 1, 'name' => 2, 'department' => 3, 'company' => 4, 'basic_amount' => 5, 'scheduled_amount' => 6, 'hourly_rate' => 7, 'ot_rate' => 8, 'allowance' => 9, 'levy' => 10, 'taxable_amount' => 11, 'gross_pay' => 12, 'frequency' => 13, 'acct_code' => 14, 'cpf' => 15, 'cpf_amount' => 16, 'cpf_citizenship' => 17, 'effectivity_date' => 18, 'paid_type' => 19, 'status' => 20, 'remark' => 21, 'date_resigned' => 22, 'resigned_remark' => 23, 'created_by' => 24, 'date_created' => 25, 'modified_by' => 26, 'date_modified' => 27, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/PayBasicPayMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.PayBasicPayMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PayBasicPayPeer::getTableMap();
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
		return str_replace(PayBasicPayPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PayBasicPayPeer::ID);

		$criteria->addSelectColumn(PayBasicPayPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(PayBasicPayPeer::NAME);

		$criteria->addSelectColumn(PayBasicPayPeer::DEPARTMENT);

		$criteria->addSelectColumn(PayBasicPayPeer::COMPANY);

		$criteria->addSelectColumn(PayBasicPayPeer::BASIC_AMOUNT);

		$criteria->addSelectColumn(PayBasicPayPeer::SCHEDULED_AMOUNT);

		$criteria->addSelectColumn(PayBasicPayPeer::HOURLY_RATE);

		$criteria->addSelectColumn(PayBasicPayPeer::OT_RATE);

		$criteria->addSelectColumn(PayBasicPayPeer::ALLOWANCE);

		$criteria->addSelectColumn(PayBasicPayPeer::LEVY);

		$criteria->addSelectColumn(PayBasicPayPeer::TAXABLE_AMOUNT);

		$criteria->addSelectColumn(PayBasicPayPeer::GROSS_PAY);

		$criteria->addSelectColumn(PayBasicPayPeer::FREQUENCY);

		$criteria->addSelectColumn(PayBasicPayPeer::ACCT_CODE);

		$criteria->addSelectColumn(PayBasicPayPeer::CPF);

		$criteria->addSelectColumn(PayBasicPayPeer::CPF_AMOUNT);

		$criteria->addSelectColumn(PayBasicPayPeer::CPF_CITIZENSHIP);

		$criteria->addSelectColumn(PayBasicPayPeer::EFFECTIVITY_DATE);

		$criteria->addSelectColumn(PayBasicPayPeer::PAID_TYPE);

		$criteria->addSelectColumn(PayBasicPayPeer::STATUS);

		$criteria->addSelectColumn(PayBasicPayPeer::REMARK);

		$criteria->addSelectColumn(PayBasicPayPeer::DATE_RESIGNED);

		$criteria->addSelectColumn(PayBasicPayPeer::RESIGNED_REMARK);

		$criteria->addSelectColumn(PayBasicPayPeer::CREATED_BY);

		$criteria->addSelectColumn(PayBasicPayPeer::DATE_CREATED);

		$criteria->addSelectColumn(PayBasicPayPeer::MODIFIED_BY);

		$criteria->addSelectColumn(PayBasicPayPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(pay_basic_pay.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT pay_basic_pay.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PayBasicPayPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PayBasicPayPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PayBasicPayPeer::doSelectRS($criteria, $con);
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
		$objects = PayBasicPayPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PayBasicPayPeer::populateObjects(PayBasicPayPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PayBasicPayPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PayBasicPayPeer::getOMClass();
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
		return PayBasicPayPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PayBasicPayPeer::ID); 

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
			$comparison = $criteria->getComparison(PayBasicPayPeer::ID);
			$selectCriteria->add(PayBasicPayPeer::ID, $criteria->remove(PayBasicPayPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(PayBasicPayPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(PayBasicPayPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof PayBasicPay) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PayBasicPayPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(PayBasicPay $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PayBasicPayPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PayBasicPayPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(PayBasicPayPeer::DATABASE_NAME, PayBasicPayPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PayBasicPayPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(PayBasicPayPeer::DATABASE_NAME);

		$criteria->add(PayBasicPayPeer::ID, $pk);


		$v = PayBasicPayPeer::doSelect($criteria, $con);

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
			$criteria->add(PayBasicPayPeer::ID, $pks, Criteria::IN);
			$objs = PayBasicPayPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePayBasicPayPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/PayBasicPayMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.PayBasicPayMapBuilder');
}
