<?php


abstract class BaseRepairReportSummaryPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'repair_report_summary';

	
	const CLASS_DEFAULT = 'lib.model.iso.RepairReportSummary';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'repair_report_summary.ID';

	
	const REPAIR_DATE = 'repair_report_summary.REPAIR_DATE';

	
	const CUSTOMER = 'repair_report_summary.CUSTOMER';

	
	const DEPARTMENT = 'repair_report_summary.DEPARTMENT';

	
	const GARMENT_CODE = 'repair_report_summary.GARMENT_CODE';

	
	const GARMENT_TYPE = 'repair_report_summary.GARMENT_TYPE';

	
	const REPAIR_TYPE = 'repair_report_summary.REPAIR_TYPE';

	
	const TEMPERATURE = 'repair_report_summary.TEMPERATURE';

	
	const PRESSURE = 'repair_report_summary.PRESSURE';

	
	const QUANTITY = 'repair_report_summary.QUANTITY';

	
	const PCS_OR_PAIRS = 'repair_report_summary.PCS_OR_PAIRS';

	
	const INITIALS = 'repair_report_summary.INITIALS';

	
	const REMARKS = 'repair_report_summary.REMARKS';

	
	const DATE_CREATED = 'repair_report_summary.DATE_CREATED';

	
	const CREATED_BY = 'repair_report_summary.CREATED_BY';

	
	const DATE_MODIFIED = 'repair_report_summary.DATE_MODIFIED';

	
	const MODIFIED_BY = 'repair_report_summary.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'RepairDate', 'Customer', 'Department', 'GarmentCode', 'GarmentType', 'RepairType', 'Temperature', 'Pressure', 'Quantity', 'PcsOrPairs', 'Initials', 'Remarks', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (RepairReportSummaryPeer::ID, RepairReportSummaryPeer::REPAIR_DATE, RepairReportSummaryPeer::CUSTOMER, RepairReportSummaryPeer::DEPARTMENT, RepairReportSummaryPeer::GARMENT_CODE, RepairReportSummaryPeer::GARMENT_TYPE, RepairReportSummaryPeer::REPAIR_TYPE, RepairReportSummaryPeer::TEMPERATURE, RepairReportSummaryPeer::PRESSURE, RepairReportSummaryPeer::QUANTITY, RepairReportSummaryPeer::PCS_OR_PAIRS, RepairReportSummaryPeer::INITIALS, RepairReportSummaryPeer::REMARKS, RepairReportSummaryPeer::DATE_CREATED, RepairReportSummaryPeer::CREATED_BY, RepairReportSummaryPeer::DATE_MODIFIED, RepairReportSummaryPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'repair_date', 'customer', 'department', 'garment_code', 'garment_type', 'repair_type', 'temperature', 'pressure', 'quantity', 'pcs_or_pairs', 'initials', 'remarks', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RepairDate' => 1, 'Customer' => 2, 'Department' => 3, 'GarmentCode' => 4, 'GarmentType' => 5, 'RepairType' => 6, 'Temperature' => 7, 'Pressure' => 8, 'Quantity' => 9, 'PcsOrPairs' => 10, 'Initials' => 11, 'Remarks' => 12, 'DateCreated' => 13, 'CreatedBy' => 14, 'DateModified' => 15, 'ModifiedBy' => 16, ),
		BasePeer::TYPE_COLNAME => array (RepairReportSummaryPeer::ID => 0, RepairReportSummaryPeer::REPAIR_DATE => 1, RepairReportSummaryPeer::CUSTOMER => 2, RepairReportSummaryPeer::DEPARTMENT => 3, RepairReportSummaryPeer::GARMENT_CODE => 4, RepairReportSummaryPeer::GARMENT_TYPE => 5, RepairReportSummaryPeer::REPAIR_TYPE => 6, RepairReportSummaryPeer::TEMPERATURE => 7, RepairReportSummaryPeer::PRESSURE => 8, RepairReportSummaryPeer::QUANTITY => 9, RepairReportSummaryPeer::PCS_OR_PAIRS => 10, RepairReportSummaryPeer::INITIALS => 11, RepairReportSummaryPeer::REMARKS => 12, RepairReportSummaryPeer::DATE_CREATED => 13, RepairReportSummaryPeer::CREATED_BY => 14, RepairReportSummaryPeer::DATE_MODIFIED => 15, RepairReportSummaryPeer::MODIFIED_BY => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'repair_date' => 1, 'customer' => 2, 'department' => 3, 'garment_code' => 4, 'garment_type' => 5, 'repair_type' => 6, 'temperature' => 7, 'pressure' => 8, 'quantity' => 9, 'pcs_or_pairs' => 10, 'initials' => 11, 'remarks' => 12, 'date_created' => 13, 'created_by' => 14, 'date_modified' => 15, 'modified_by' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/RepairReportSummaryMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.RepairReportSummaryMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RepairReportSummaryPeer::getTableMap();
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
		return str_replace(RepairReportSummaryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RepairReportSummaryPeer::ID);

		$criteria->addSelectColumn(RepairReportSummaryPeer::REPAIR_DATE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::CUSTOMER);

		$criteria->addSelectColumn(RepairReportSummaryPeer::DEPARTMENT);

		$criteria->addSelectColumn(RepairReportSummaryPeer::GARMENT_CODE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::GARMENT_TYPE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::REPAIR_TYPE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::TEMPERATURE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::PRESSURE);

		$criteria->addSelectColumn(RepairReportSummaryPeer::QUANTITY);

		$criteria->addSelectColumn(RepairReportSummaryPeer::PCS_OR_PAIRS);

		$criteria->addSelectColumn(RepairReportSummaryPeer::INITIALS);

		$criteria->addSelectColumn(RepairReportSummaryPeer::REMARKS);

		$criteria->addSelectColumn(RepairReportSummaryPeer::DATE_CREATED);

		$criteria->addSelectColumn(RepairReportSummaryPeer::CREATED_BY);

		$criteria->addSelectColumn(RepairReportSummaryPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(RepairReportSummaryPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(repair_report_summary.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT repair_report_summary.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RepairReportSummaryPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RepairReportSummaryPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RepairReportSummaryPeer::doSelectRS($criteria, $con);
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
		$objects = RepairReportSummaryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RepairReportSummaryPeer::populateObjects(RepairReportSummaryPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RepairReportSummaryPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RepairReportSummaryPeer::getOMClass();
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
		return RepairReportSummaryPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RepairReportSummaryPeer::ID); 

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
			$comparison = $criteria->getComparison(RepairReportSummaryPeer::ID);
			$selectCriteria->add(RepairReportSummaryPeer::ID, $criteria->remove(RepairReportSummaryPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RepairReportSummaryPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RepairReportSummaryPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof RepairReportSummary) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RepairReportSummaryPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(RepairReportSummary $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RepairReportSummaryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RepairReportSummaryPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RepairReportSummaryPeer::DATABASE_NAME, RepairReportSummaryPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RepairReportSummaryPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RepairReportSummaryPeer::DATABASE_NAME);

		$criteria->add(RepairReportSummaryPeer::ID, $pk);


		$v = RepairReportSummaryPeer::doSelect($criteria, $con);

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
			$criteria->add(RepairReportSummaryPeer::ID, $pks, Criteria::IN);
			$objs = RepairReportSummaryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRepairReportSummaryPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/RepairReportSummaryMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.RepairReportSummaryMapBuilder');
}
