<?php


abstract class BaseHrCompanyPeer {

	
	const DATABASE_NAME = 'hr';

	
	const TABLE_NAME = 'hr_company';

	
	const CLASS_DEFAULT = 'lib.model.hr.HrCompany';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_company.ID';

	
	const COMP_CODE = 'hr_company.COMP_CODE';

	
	const COMP_NAME = 'hr_company.COMP_NAME';

	
	const COMP_ADDRESS = 'hr_company.COMP_ADDRESS';

	
	const COMP_HEADER = 'hr_company.COMP_HEADER';

	
	const CREATED_BY = 'hr_company.CREATED_BY';

	
	const DATE_CREATED = 'hr_company.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_company.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_company.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'CompCode', 'CompName', 'CompAddress', 'CompHeader', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrCompanyPeer::ID, HrCompanyPeer::COMP_CODE, HrCompanyPeer::COMP_NAME, HrCompanyPeer::COMP_ADDRESS, HrCompanyPeer::COMP_HEADER, HrCompanyPeer::CREATED_BY, HrCompanyPeer::DATE_CREATED, HrCompanyPeer::MODIFIED_BY, HrCompanyPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'comp_code', 'comp_name', 'comp_address', 'comp_header', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CompCode' => 1, 'CompName' => 2, 'CompAddress' => 3, 'CompHeader' => 4, 'CreatedBy' => 5, 'DateCreated' => 6, 'ModifiedBy' => 7, 'DateModified' => 8, ),
		BasePeer::TYPE_COLNAME => array (HrCompanyPeer::ID => 0, HrCompanyPeer::COMP_CODE => 1, HrCompanyPeer::COMP_NAME => 2, HrCompanyPeer::COMP_ADDRESS => 3, HrCompanyPeer::COMP_HEADER => 4, HrCompanyPeer::CREATED_BY => 5, HrCompanyPeer::DATE_CREATED => 6, HrCompanyPeer::MODIFIED_BY => 7, HrCompanyPeer::DATE_MODIFIED => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'comp_code' => 1, 'comp_name' => 2, 'comp_address' => 3, 'comp_header' => 4, 'created_by' => 5, 'date_created' => 6, 'modified_by' => 7, 'date_modified' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hr/map/HrCompanyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hr.map.HrCompanyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrCompanyPeer::getTableMap();
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
		return str_replace(HrCompanyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrCompanyPeer::ID);

		$criteria->addSelectColumn(HrCompanyPeer::COMP_CODE);

		$criteria->addSelectColumn(HrCompanyPeer::COMP_NAME);

		$criteria->addSelectColumn(HrCompanyPeer::COMP_ADDRESS);

		$criteria->addSelectColumn(HrCompanyPeer::COMP_HEADER);

		$criteria->addSelectColumn(HrCompanyPeer::CREATED_BY);

		$criteria->addSelectColumn(HrCompanyPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrCompanyPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrCompanyPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_company.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_company.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrCompanyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrCompanyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrCompanyPeer::doSelectRS($criteria, $con);
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
		$objects = HrCompanyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrCompanyPeer::populateObjects(HrCompanyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrCompanyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrCompanyPeer::getOMClass();
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
		return HrCompanyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrCompanyPeer::ID); 

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
			$comparison = $criteria->getComparison(HrCompanyPeer::ID);
			$selectCriteria->add(HrCompanyPeer::ID, $criteria->remove(HrCompanyPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrCompanyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrCompanyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrCompany) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrCompanyPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrCompany $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrCompanyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrCompanyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrCompanyPeer::DATABASE_NAME, HrCompanyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrCompanyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrCompanyPeer::DATABASE_NAME);

		$criteria->add(HrCompanyPeer::ID, $pk);


		$v = HrCompanyPeer::doSelect($criteria, $con);

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
			$criteria->add(HrCompanyPeer::ID, $pks, Criteria::IN);
			$objs = HrCompanyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrCompanyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hr/map/HrCompanyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hr.map.HrCompanyMapBuilder');
}
