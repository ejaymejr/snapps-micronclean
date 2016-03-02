<?php


abstract class BasesnappsCurrencyRatePeer {

	
	const DATABASE_NAME = 'general';

	
	const TABLE_NAME = 'currency_rate';

	
	const CLASS_DEFAULT = 'lib.model.general.snappsCurrencyRate';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CODE_FROM = 'currency_rate.CODE_FROM';

	
	const CODE_TO = 'currency_rate.CODE_TO';

	
	const DATE_FROM = 'currency_rate.DATE_FROM';

	
	const DATE_TO = 'currency_rate.DATE_TO';

	
	const RATE = 'currency_rate.RATE';

	
	const ID = 'currency_rate.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CodeFrom', 'CodeTo', 'DateFrom', 'DateTo', 'Rate', 'Id', ),
		BasePeer::TYPE_COLNAME => array (snappsCurrencyRatePeer::CODE_FROM, snappsCurrencyRatePeer::CODE_TO, snappsCurrencyRatePeer::DATE_FROM, snappsCurrencyRatePeer::DATE_TO, snappsCurrencyRatePeer::RATE, snappsCurrencyRatePeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('code_from', 'code_to', 'date_from', 'date_to', 'rate', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CodeFrom' => 0, 'CodeTo' => 1, 'DateFrom' => 2, 'DateTo' => 3, 'Rate' => 4, 'Id' => 5, ),
		BasePeer::TYPE_COLNAME => array (snappsCurrencyRatePeer::CODE_FROM => 0, snappsCurrencyRatePeer::CODE_TO => 1, snappsCurrencyRatePeer::DATE_FROM => 2, snappsCurrencyRatePeer::DATE_TO => 3, snappsCurrencyRatePeer::RATE => 4, snappsCurrencyRatePeer::ID => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('code_from' => 0, 'code_to' => 1, 'date_from' => 2, 'date_to' => 3, 'rate' => 4, 'id' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/general/map/snappsCurrencyRateMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.general.map.snappsCurrencyRateMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = snappsCurrencyRatePeer::getTableMap();
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
		return str_replace(snappsCurrencyRatePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(snappsCurrencyRatePeer::CODE_FROM);

		$criteria->addSelectColumn(snappsCurrencyRatePeer::CODE_TO);

		$criteria->addSelectColumn(snappsCurrencyRatePeer::DATE_FROM);

		$criteria->addSelectColumn(snappsCurrencyRatePeer::DATE_TO);

		$criteria->addSelectColumn(snappsCurrencyRatePeer::RATE);

		$criteria->addSelectColumn(snappsCurrencyRatePeer::ID);

	}

	const COUNT = 'COUNT(currency_rate.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT currency_rate.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(snappsCurrencyRatePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(snappsCurrencyRatePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = snappsCurrencyRatePeer::doSelectRS($criteria, $con);
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
		$objects = snappsCurrencyRatePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return snappsCurrencyRatePeer::populateObjects(snappsCurrencyRatePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			snappsCurrencyRatePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = snappsCurrencyRatePeer::getOMClass();
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
		return snappsCurrencyRatePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(snappsCurrencyRatePeer::ID); 

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
			$comparison = $criteria->getComparison(snappsCurrencyRatePeer::ID);
			$selectCriteria->add(snappsCurrencyRatePeer::ID, $criteria->remove(snappsCurrencyRatePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(snappsCurrencyRatePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(snappsCurrencyRatePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof snappsCurrencyRate) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(snappsCurrencyRatePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(snappsCurrencyRate $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(snappsCurrencyRatePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(snappsCurrencyRatePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(snappsCurrencyRatePeer::DATABASE_NAME, snappsCurrencyRatePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = snappsCurrencyRatePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(snappsCurrencyRatePeer::DATABASE_NAME);

		$criteria->add(snappsCurrencyRatePeer::ID, $pk);


		$v = snappsCurrencyRatePeer::doSelect($criteria, $con);

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
			$criteria->add(snappsCurrencyRatePeer::ID, $pks, Criteria::IN);
			$objs = snappsCurrencyRatePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasesnappsCurrencyRatePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/general/map/snappsCurrencyRateMapBuilder.php';
	Propel::registerMapBuilder('lib.model.general.map.snappsCurrencyRateMapBuilder');
}
