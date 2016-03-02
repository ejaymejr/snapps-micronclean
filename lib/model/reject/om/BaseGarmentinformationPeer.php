<?php


abstract class BaseGarmentinformationPeer {

	
	const DATABASE_NAME = 'reject_photo';

	
	const TABLE_NAME = 'garmentInformation';

	
	const CLASS_DEFAULT = 'lib.model.reject.Garmentinformation';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const GARMENT_CODE = 'garmentInformation.GARMENT_CODE';

	
	const TYPE = 'garmentInformation.TYPE';

	
	const SIZE = 'garmentInformation.SIZE';

	
	const COLOR = 'garmentInformation.COLOR';

	
	const CUSTOMER = 'garmentInformation.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'garmentInformation.NO_OF_TIMES_WASH';

	
	const NUMBER = 'garmentInformation.NUMBER';

	
	const HANGER_NO = 'garmentInformation.HANGER_NO';

	
	const INSERTED_DATE = 'garmentInformation.INSERTED_DATE';

	
	const STATUS = 'garmentInformation.STATUS';

	
	const ID = 'garmentInformation.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'Status', 'Id', ),
		BasePeer::TYPE_COLNAME => array (GarmentinformationPeer::GARMENT_CODE, GarmentinformationPeer::TYPE, GarmentinformationPeer::SIZE, GarmentinformationPeer::COLOR, GarmentinformationPeer::CUSTOMER, GarmentinformationPeer::NO_OF_TIMES_WASH, GarmentinformationPeer::NUMBER, GarmentinformationPeer::HANGER_NO, GarmentinformationPeer::INSERTED_DATE, GarmentinformationPeer::STATUS, GarmentinformationPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'status', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('GarmentCode' => 0, 'Type' => 1, 'Size' => 2, 'Color' => 3, 'Customer' => 4, 'NoOfTimesWash' => 5, 'Number' => 6, 'HangerNo' => 7, 'InsertedDate' => 8, 'Status' => 9, 'Id' => 10, ),
		BasePeer::TYPE_COLNAME => array (GarmentinformationPeer::GARMENT_CODE => 0, GarmentinformationPeer::TYPE => 1, GarmentinformationPeer::SIZE => 2, GarmentinformationPeer::COLOR => 3, GarmentinformationPeer::CUSTOMER => 4, GarmentinformationPeer::NO_OF_TIMES_WASH => 5, GarmentinformationPeer::NUMBER => 6, GarmentinformationPeer::HANGER_NO => 7, GarmentinformationPeer::INSERTED_DATE => 8, GarmentinformationPeer::STATUS => 9, GarmentinformationPeer::ID => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('garment_code' => 0, 'type' => 1, 'size' => 2, 'color' => 3, 'customer' => 4, 'no_of_times_wash' => 5, 'number' => 6, 'hanger_no' => 7, 'inserted_date' => 8, 'status' => 9, 'id' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/reject/map/GarmentinformationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.reject.map.GarmentinformationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = GarmentinformationPeer::getTableMap();
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
		return str_replace(GarmentinformationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(GarmentinformationPeer::GARMENT_CODE);

		$criteria->addSelectColumn(GarmentinformationPeer::TYPE);

		$criteria->addSelectColumn(GarmentinformationPeer::SIZE);

		$criteria->addSelectColumn(GarmentinformationPeer::COLOR);

		$criteria->addSelectColumn(GarmentinformationPeer::CUSTOMER);

		$criteria->addSelectColumn(GarmentinformationPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(GarmentinformationPeer::NUMBER);

		$criteria->addSelectColumn(GarmentinformationPeer::HANGER_NO);

		$criteria->addSelectColumn(GarmentinformationPeer::INSERTED_DATE);

		$criteria->addSelectColumn(GarmentinformationPeer::STATUS);

		$criteria->addSelectColumn(GarmentinformationPeer::ID);

	}

	const COUNT = 'COUNT(garmentInformation.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT garmentInformation.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(GarmentinformationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(GarmentinformationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = GarmentinformationPeer::doSelectRS($criteria, $con);
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
		$objects = GarmentinformationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return GarmentinformationPeer::populateObjects(GarmentinformationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			GarmentinformationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = GarmentinformationPeer::getOMClass();
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
		return GarmentinformationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(GarmentinformationPeer::ID); 

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
			$comparison = $criteria->getComparison(GarmentinformationPeer::ID);
			$selectCriteria->add(GarmentinformationPeer::ID, $criteria->remove(GarmentinformationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(GarmentinformationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(GarmentinformationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Garmentinformation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GarmentinformationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Garmentinformation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GarmentinformationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GarmentinformationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(GarmentinformationPeer::DATABASE_NAME, GarmentinformationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = GarmentinformationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(GarmentinformationPeer::DATABASE_NAME);

		$criteria->add(GarmentinformationPeer::ID, $pk);


		$v = GarmentinformationPeer::doSelect($criteria, $con);

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
			$criteria->add(GarmentinformationPeer::ID, $pks, Criteria::IN);
			$objs = GarmentinformationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseGarmentinformationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/reject/map/GarmentinformationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.reject.map.GarmentinformationMapBuilder');
}
