<?php


abstract class BasePlasticBagPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'plastic_bag';

	
	const CLASS_DEFAULT = 'lib.model.iso.PlasticBag';

	
	const NUM_COLUMNS = 18;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'plastic_bag.ID';

	
	const DATE_TIME = 'plastic_bag.DATE_TIME';

	
	const TYPE_OF_PLASTIC = 'plastic_bag.TYPE_OF_PLASTIC';

	
	const BY_WHO = 'plastic_bag.BY_WHO';

	
	const SURFACE_AREA = 'plastic_bag.SURFACE_AREA';

	
	const VENDOR = 'plastic_bag.VENDOR';

	
	const VOL_IN_ML = 'plastic_bag.VOL_IN_ML';

	
	const LPC_BLANK_IN_ML = 'plastic_bag.LPC_BLANK_IN_ML';

	
	const LPC_PLASTIC_IN_ML = 'plastic_bag.LPC_PLASTIC_IN_ML';

	
	const LPC_PLASTIC_IN_CM = 'plastic_bag.LPC_PLASTIC_IN_CM';

	
	const IC_CL_IN_CM = 'plastic_bag.IC_CL_IN_CM';

	
	const IC_NO_IN_CM = 'plastic_bag.IC_NO_IN_CM';

	
	const IC_SO_IN_CM = 'plastic_bag.IC_SO_IN_CM';

	
	const STATUS = 'plastic_bag.STATUS';

	
	const DATE_CREATED = 'plastic_bag.DATE_CREATED';

	
	const CREATED_BY = 'plastic_bag.CREATED_BY';

	
	const DATE_MODIFIED = 'plastic_bag.DATE_MODIFIED';

	
	const MODIFIED_BY = 'plastic_bag.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'TypeOfPlastic', 'ByWho', 'SurfaceArea', 'Vendor', 'VolInMl', 'LpcBlankInMl', 'LpcPlasticInMl', 'LpcPlasticInCm', 'IcClInCm', 'IcNoInCm', 'IcSoInCm', 'Status', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (PlasticBagPeer::ID, PlasticBagPeer::DATE_TIME, PlasticBagPeer::TYPE_OF_PLASTIC, PlasticBagPeer::BY_WHO, PlasticBagPeer::SURFACE_AREA, PlasticBagPeer::VENDOR, PlasticBagPeer::VOL_IN_ML, PlasticBagPeer::LPC_BLANK_IN_ML, PlasticBagPeer::LPC_PLASTIC_IN_ML, PlasticBagPeer::LPC_PLASTIC_IN_CM, PlasticBagPeer::IC_CL_IN_CM, PlasticBagPeer::IC_NO_IN_CM, PlasticBagPeer::IC_SO_IN_CM, PlasticBagPeer::STATUS, PlasticBagPeer::DATE_CREATED, PlasticBagPeer::CREATED_BY, PlasticBagPeer::DATE_MODIFIED, PlasticBagPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'type_of_plastic', 'by_who', 'surface_area', 'vendor', 'vol_in_ml', 'lpc_blank_in_ml', 'lpc_plastic_in_ml', 'lpc_plastic_in_cm', 'ic_cl_in_cm', 'ic_no_in_cm', 'ic_so_in_cm', 'status', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'TypeOfPlastic' => 2, 'ByWho' => 3, 'SurfaceArea' => 4, 'Vendor' => 5, 'VolInMl' => 6, 'LpcBlankInMl' => 7, 'LpcPlasticInMl' => 8, 'LpcPlasticInCm' => 9, 'IcClInCm' => 10, 'IcNoInCm' => 11, 'IcSoInCm' => 12, 'Status' => 13, 'DateCreated' => 14, 'CreatedBy' => 15, 'DateModified' => 16, 'ModifiedBy' => 17, ),
		BasePeer::TYPE_COLNAME => array (PlasticBagPeer::ID => 0, PlasticBagPeer::DATE_TIME => 1, PlasticBagPeer::TYPE_OF_PLASTIC => 2, PlasticBagPeer::BY_WHO => 3, PlasticBagPeer::SURFACE_AREA => 4, PlasticBagPeer::VENDOR => 5, PlasticBagPeer::VOL_IN_ML => 6, PlasticBagPeer::LPC_BLANK_IN_ML => 7, PlasticBagPeer::LPC_PLASTIC_IN_ML => 8, PlasticBagPeer::LPC_PLASTIC_IN_CM => 9, PlasticBagPeer::IC_CL_IN_CM => 10, PlasticBagPeer::IC_NO_IN_CM => 11, PlasticBagPeer::IC_SO_IN_CM => 12, PlasticBagPeer::STATUS => 13, PlasticBagPeer::DATE_CREATED => 14, PlasticBagPeer::CREATED_BY => 15, PlasticBagPeer::DATE_MODIFIED => 16, PlasticBagPeer::MODIFIED_BY => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'type_of_plastic' => 2, 'by_who' => 3, 'surface_area' => 4, 'vendor' => 5, 'vol_in_ml' => 6, 'lpc_blank_in_ml' => 7, 'lpc_plastic_in_ml' => 8, 'lpc_plastic_in_cm' => 9, 'ic_cl_in_cm' => 10, 'ic_no_in_cm' => 11, 'ic_so_in_cm' => 12, 'status' => 13, 'date_created' => 14, 'created_by' => 15, 'date_modified' => 16, 'modified_by' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/PlasticBagMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.PlasticBagMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PlasticBagPeer::getTableMap();
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
		return str_replace(PlasticBagPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PlasticBagPeer::ID);

		$criteria->addSelectColumn(PlasticBagPeer::DATE_TIME);

		$criteria->addSelectColumn(PlasticBagPeer::TYPE_OF_PLASTIC);

		$criteria->addSelectColumn(PlasticBagPeer::BY_WHO);

		$criteria->addSelectColumn(PlasticBagPeer::SURFACE_AREA);

		$criteria->addSelectColumn(PlasticBagPeer::VENDOR);

		$criteria->addSelectColumn(PlasticBagPeer::VOL_IN_ML);

		$criteria->addSelectColumn(PlasticBagPeer::LPC_BLANK_IN_ML);

		$criteria->addSelectColumn(PlasticBagPeer::LPC_PLASTIC_IN_ML);

		$criteria->addSelectColumn(PlasticBagPeer::LPC_PLASTIC_IN_CM);

		$criteria->addSelectColumn(PlasticBagPeer::IC_CL_IN_CM);

		$criteria->addSelectColumn(PlasticBagPeer::IC_NO_IN_CM);

		$criteria->addSelectColumn(PlasticBagPeer::IC_SO_IN_CM);

		$criteria->addSelectColumn(PlasticBagPeer::STATUS);

		$criteria->addSelectColumn(PlasticBagPeer::DATE_CREATED);

		$criteria->addSelectColumn(PlasticBagPeer::CREATED_BY);

		$criteria->addSelectColumn(PlasticBagPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(PlasticBagPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(plastic_bag.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT plastic_bag.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PlasticBagPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PlasticBagPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PlasticBagPeer::doSelectRS($criteria, $con);
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
		$objects = PlasticBagPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PlasticBagPeer::populateObjects(PlasticBagPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PlasticBagPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PlasticBagPeer::getOMClass();
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
		return PlasticBagPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PlasticBagPeer::ID); 

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
			$comparison = $criteria->getComparison(PlasticBagPeer::ID);
			$selectCriteria->add(PlasticBagPeer::ID, $criteria->remove(PlasticBagPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(PlasticBagPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(PlasticBagPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof PlasticBag) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PlasticBagPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(PlasticBag $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PlasticBagPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PlasticBagPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(PlasticBagPeer::DATABASE_NAME, PlasticBagPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PlasticBagPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(PlasticBagPeer::DATABASE_NAME);

		$criteria->add(PlasticBagPeer::ID, $pk);


		$v = PlasticBagPeer::doSelect($criteria, $con);

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
			$criteria->add(PlasticBagPeer::ID, $pks, Criteria::IN);
			$objs = PlasticBagPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePlasticBagPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/PlasticBagMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.PlasticBagMapBuilder');
}
