<?php


abstract class BaseIcDataPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'ic_data';

	
	const CLASS_DEFAULT = 'lib.model.particle.IcData';

	
	const NUM_COLUMNS = 35;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ic_data.ID';

	
	const DATE_TIME = 'ic_data.DATE_TIME';

	
	const SAMPLE = 'ic_data.SAMPLE';

	
	const CUSTOMER = 'ic_data.CUSTOMER';

	
	const DEPARTMENT = 'ic_data.DEPARTMENT';

	
	const TYPE = 'ic_data.TYPE';

	
	const NA = 'ic_data.NA';

	
	const NA_SPEC = 'ic_data.NA_SPEC';

	
	const NH = 'ic_data.NH';

	
	const NH_SPEC = 'ic_data.NH_SPEC';

	
	const K = 'ic_data.K';

	
	const K_SPEC = 'ic_data.K_SPEC';

	
	const CA = 'ic_data.CA';

	
	const CA_SPEC = 'ic_data.CA_SPEC';

	
	const MG = 'ic_data.MG';

	
	const MG_SPEC = 'ic_data.MG_SPEC';

	
	const F = 'ic_data.F';

	
	const F_SPEC = 'ic_data.F_SPEC';

	
	const CL = 'ic_data.CL';

	
	const CL_SPEC = 'ic_data.CL_SPEC';

	
	const NO = 'ic_data.NO';

	
	const NO_SPEC = 'ic_data.NO_SPEC';

	
	const PO = 'ic_data.PO';

	
	const PO_SPEC = 'ic_data.PO_SPEC';

	
	const SO = 'ic_data.SO';

	
	const SO_SPEC = 'ic_data.SO_SPEC';

	
	const WASHER = 'ic_data.WASHER';

	
	const DRYER = 'ic_data.DRYER';

	
	const REMARKS = 'ic_data.REMARKS';

	
	const TESTER = 'ic_data.TESTER';

	
	const GARMENT_CODE = 'ic_data.GARMENT_CODE';

	
	const CREATED_BY = 'ic_data.CREATED_BY';

	
	const DATE_CREATED = 'ic_data.DATE_CREATED';

	
	const MODIFIED_BY = 'ic_data.MODIFIED_BY';

	
	const DATE_MODIFIED = 'ic_data.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'Sample', 'Customer', 'Department', 'Type', 'Na', 'NaSpec', 'Nh', 'NhSpec', 'K', 'KSpec', 'Ca', 'CaSpec', 'Mg', 'MgSpec', 'F', 'FSpec', 'Cl', 'ClSpec', 'No', 'NoSpec', 'Po', 'PoSpec', 'So', 'SoSpec', 'Washer', 'Dryer', 'Remarks', 'Tester', 'GarmentCode', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (IcDataPeer::ID, IcDataPeer::DATE_TIME, IcDataPeer::SAMPLE, IcDataPeer::CUSTOMER, IcDataPeer::DEPARTMENT, IcDataPeer::TYPE, IcDataPeer::NA, IcDataPeer::NA_SPEC, IcDataPeer::NH, IcDataPeer::NH_SPEC, IcDataPeer::K, IcDataPeer::K_SPEC, IcDataPeer::CA, IcDataPeer::CA_SPEC, IcDataPeer::MG, IcDataPeer::MG_SPEC, IcDataPeer::F, IcDataPeer::F_SPEC, IcDataPeer::CL, IcDataPeer::CL_SPEC, IcDataPeer::NO, IcDataPeer::NO_SPEC, IcDataPeer::PO, IcDataPeer::PO_SPEC, IcDataPeer::SO, IcDataPeer::SO_SPEC, IcDataPeer::WASHER, IcDataPeer::DRYER, IcDataPeer::REMARKS, IcDataPeer::TESTER, IcDataPeer::GARMENT_CODE, IcDataPeer::CREATED_BY, IcDataPeer::DATE_CREATED, IcDataPeer::MODIFIED_BY, IcDataPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'sample', 'customer', 'department', 'type', 'na', 'na_spec', 'nh', 'nh_spec', 'k', 'k_spec', 'ca', 'ca_spec', 'mg', 'mg_spec', 'f', 'f_spec', 'cl', 'cl_spec', 'no', 'no_spec', 'po', 'po_spec', 'so', 'so_spec', 'washer', 'dryer', 'remarks', 'tester', 'garment_code', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'Sample' => 2, 'Customer' => 3, 'Department' => 4, 'Type' => 5, 'Na' => 6, 'NaSpec' => 7, 'Nh' => 8, 'NhSpec' => 9, 'K' => 10, 'KSpec' => 11, 'Ca' => 12, 'CaSpec' => 13, 'Mg' => 14, 'MgSpec' => 15, 'F' => 16, 'FSpec' => 17, 'Cl' => 18, 'ClSpec' => 19, 'No' => 20, 'NoSpec' => 21, 'Po' => 22, 'PoSpec' => 23, 'So' => 24, 'SoSpec' => 25, 'Washer' => 26, 'Dryer' => 27, 'Remarks' => 28, 'Tester' => 29, 'GarmentCode' => 30, 'CreatedBy' => 31, 'DateCreated' => 32, 'ModifiedBy' => 33, 'DateModified' => 34, ),
		BasePeer::TYPE_COLNAME => array (IcDataPeer::ID => 0, IcDataPeer::DATE_TIME => 1, IcDataPeer::SAMPLE => 2, IcDataPeer::CUSTOMER => 3, IcDataPeer::DEPARTMENT => 4, IcDataPeer::TYPE => 5, IcDataPeer::NA => 6, IcDataPeer::NA_SPEC => 7, IcDataPeer::NH => 8, IcDataPeer::NH_SPEC => 9, IcDataPeer::K => 10, IcDataPeer::K_SPEC => 11, IcDataPeer::CA => 12, IcDataPeer::CA_SPEC => 13, IcDataPeer::MG => 14, IcDataPeer::MG_SPEC => 15, IcDataPeer::F => 16, IcDataPeer::F_SPEC => 17, IcDataPeer::CL => 18, IcDataPeer::CL_SPEC => 19, IcDataPeer::NO => 20, IcDataPeer::NO_SPEC => 21, IcDataPeer::PO => 22, IcDataPeer::PO_SPEC => 23, IcDataPeer::SO => 24, IcDataPeer::SO_SPEC => 25, IcDataPeer::WASHER => 26, IcDataPeer::DRYER => 27, IcDataPeer::REMARKS => 28, IcDataPeer::TESTER => 29, IcDataPeer::GARMENT_CODE => 30, IcDataPeer::CREATED_BY => 31, IcDataPeer::DATE_CREATED => 32, IcDataPeer::MODIFIED_BY => 33, IcDataPeer::DATE_MODIFIED => 34, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'sample' => 2, 'customer' => 3, 'department' => 4, 'type' => 5, 'na' => 6, 'na_spec' => 7, 'nh' => 8, 'nh_spec' => 9, 'k' => 10, 'k_spec' => 11, 'ca' => 12, 'ca_spec' => 13, 'mg' => 14, 'mg_spec' => 15, 'f' => 16, 'f_spec' => 17, 'cl' => 18, 'cl_spec' => 19, 'no' => 20, 'no_spec' => 21, 'po' => 22, 'po_spec' => 23, 'so' => 24, 'so_spec' => 25, 'washer' => 26, 'dryer' => 27, 'remarks' => 28, 'tester' => 29, 'garment_code' => 30, 'created_by' => 31, 'date_created' => 32, 'modified_by' => 33, 'date_modified' => 34, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/IcDataMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.IcDataMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IcDataPeer::getTableMap();
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
		return str_replace(IcDataPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IcDataPeer::ID);

		$criteria->addSelectColumn(IcDataPeer::DATE_TIME);

		$criteria->addSelectColumn(IcDataPeer::SAMPLE);

		$criteria->addSelectColumn(IcDataPeer::CUSTOMER);

		$criteria->addSelectColumn(IcDataPeer::DEPARTMENT);

		$criteria->addSelectColumn(IcDataPeer::TYPE);

		$criteria->addSelectColumn(IcDataPeer::NA);

		$criteria->addSelectColumn(IcDataPeer::NA_SPEC);

		$criteria->addSelectColumn(IcDataPeer::NH);

		$criteria->addSelectColumn(IcDataPeer::NH_SPEC);

		$criteria->addSelectColumn(IcDataPeer::K);

		$criteria->addSelectColumn(IcDataPeer::K_SPEC);

		$criteria->addSelectColumn(IcDataPeer::CA);

		$criteria->addSelectColumn(IcDataPeer::CA_SPEC);

		$criteria->addSelectColumn(IcDataPeer::MG);

		$criteria->addSelectColumn(IcDataPeer::MG_SPEC);

		$criteria->addSelectColumn(IcDataPeer::F);

		$criteria->addSelectColumn(IcDataPeer::F_SPEC);

		$criteria->addSelectColumn(IcDataPeer::CL);

		$criteria->addSelectColumn(IcDataPeer::CL_SPEC);

		$criteria->addSelectColumn(IcDataPeer::NO);

		$criteria->addSelectColumn(IcDataPeer::NO_SPEC);

		$criteria->addSelectColumn(IcDataPeer::PO);

		$criteria->addSelectColumn(IcDataPeer::PO_SPEC);

		$criteria->addSelectColumn(IcDataPeer::SO);

		$criteria->addSelectColumn(IcDataPeer::SO_SPEC);

		$criteria->addSelectColumn(IcDataPeer::WASHER);

		$criteria->addSelectColumn(IcDataPeer::DRYER);

		$criteria->addSelectColumn(IcDataPeer::REMARKS);

		$criteria->addSelectColumn(IcDataPeer::TESTER);

		$criteria->addSelectColumn(IcDataPeer::GARMENT_CODE);

		$criteria->addSelectColumn(IcDataPeer::CREATED_BY);

		$criteria->addSelectColumn(IcDataPeer::DATE_CREATED);

		$criteria->addSelectColumn(IcDataPeer::MODIFIED_BY);

		$criteria->addSelectColumn(IcDataPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(ic_data.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ic_data.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IcDataPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IcDataPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IcDataPeer::doSelectRS($criteria, $con);
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
		$objects = IcDataPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IcDataPeer::populateObjects(IcDataPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IcDataPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IcDataPeer::getOMClass();
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
		return IcDataPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IcDataPeer::ID); 

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
			$comparison = $criteria->getComparison(IcDataPeer::ID);
			$selectCriteria->add(IcDataPeer::ID, $criteria->remove(IcDataPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IcDataPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IcDataPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IcData) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IcDataPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(IcData $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IcDataPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IcDataPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IcDataPeer::DATABASE_NAME, IcDataPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IcDataPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IcDataPeer::DATABASE_NAME);

		$criteria->add(IcDataPeer::ID, $pk);


		$v = IcDataPeer::doSelect($criteria, $con);

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
			$criteria->add(IcDataPeer::ID, $pks, Criteria::IN);
			$objs = IcDataPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIcDataPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/IcDataMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.IcDataMapBuilder');
}
