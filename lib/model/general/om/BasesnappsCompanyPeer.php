<?php


abstract class BasesnappsCompanyPeer {

	
	const DATABASE_NAME = 'general';

	
	const TABLE_NAME = 'company';

	
	const CLASS_DEFAULT = 'lib.model.general.snappsCompany';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const INDEX_NO = 'company.INDEX_NO';

	
	const COMPANY = 'company.COMPANY';

	
	const NICKNAME = 'company.NICKNAME';

	
	const INITIAL = 'company.INITIAL';

	
	const ADDRESS_LINE1 = 'company.ADDRESS_LINE1';

	
	const ADDRESS_LINE2 = 'company.ADDRESS_LINE2';

	
	const PHONE = 'company.PHONE';

	
	const FAX = 'company.FAX';

	
	const POSTAL_CODE = 'company.POSTAL_CODE';

	
	const WEBSITE = 'company.WEBSITE';

	
	const LOGO_FILENAME = 'company.LOGO_FILENAME';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IndexNo', 'Company', 'Nickname', 'Initial', 'AddressLine1', 'AddressLine2', 'Phone', 'Fax', 'PostalCode', 'Website', 'LogoFilename', ),
		BasePeer::TYPE_COLNAME => array (snappsCompanyPeer::INDEX_NO, snappsCompanyPeer::COMPANY, snappsCompanyPeer::NICKNAME, snappsCompanyPeer::INITIAL, snappsCompanyPeer::ADDRESS_LINE1, snappsCompanyPeer::ADDRESS_LINE2, snappsCompanyPeer::PHONE, snappsCompanyPeer::FAX, snappsCompanyPeer::POSTAL_CODE, snappsCompanyPeer::WEBSITE, snappsCompanyPeer::LOGO_FILENAME, ),
		BasePeer::TYPE_FIELDNAME => array ('index_no', 'company', 'nickname', 'initial', 'address_line1', 'address_line2', 'phone', 'fax', 'postal_code', 'website', 'logo_filename', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IndexNo' => 0, 'Company' => 1, 'Nickname' => 2, 'Initial' => 3, 'AddressLine1' => 4, 'AddressLine2' => 5, 'Phone' => 6, 'Fax' => 7, 'PostalCode' => 8, 'Website' => 9, 'LogoFilename' => 10, ),
		BasePeer::TYPE_COLNAME => array (snappsCompanyPeer::INDEX_NO => 0, snappsCompanyPeer::COMPANY => 1, snappsCompanyPeer::NICKNAME => 2, snappsCompanyPeer::INITIAL => 3, snappsCompanyPeer::ADDRESS_LINE1 => 4, snappsCompanyPeer::ADDRESS_LINE2 => 5, snappsCompanyPeer::PHONE => 6, snappsCompanyPeer::FAX => 7, snappsCompanyPeer::POSTAL_CODE => 8, snappsCompanyPeer::WEBSITE => 9, snappsCompanyPeer::LOGO_FILENAME => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('index_no' => 0, 'company' => 1, 'nickname' => 2, 'initial' => 3, 'address_line1' => 4, 'address_line2' => 5, 'phone' => 6, 'fax' => 7, 'postal_code' => 8, 'website' => 9, 'logo_filename' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/general/map/snappsCompanyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.general.map.snappsCompanyMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = snappsCompanyPeer::getTableMap();
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
		return str_replace(snappsCompanyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(snappsCompanyPeer::INDEX_NO);

		$criteria->addSelectColumn(snappsCompanyPeer::COMPANY);

		$criteria->addSelectColumn(snappsCompanyPeer::NICKNAME);

		$criteria->addSelectColumn(snappsCompanyPeer::INITIAL);

		$criteria->addSelectColumn(snappsCompanyPeer::ADDRESS_LINE1);

		$criteria->addSelectColumn(snappsCompanyPeer::ADDRESS_LINE2);

		$criteria->addSelectColumn(snappsCompanyPeer::PHONE);

		$criteria->addSelectColumn(snappsCompanyPeer::FAX);

		$criteria->addSelectColumn(snappsCompanyPeer::POSTAL_CODE);

		$criteria->addSelectColumn(snappsCompanyPeer::WEBSITE);

		$criteria->addSelectColumn(snappsCompanyPeer::LOGO_FILENAME);

	}

	const COUNT = 'COUNT(company.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT company.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(snappsCompanyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(snappsCompanyPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = snappsCompanyPeer::doSelectRS($criteria, $con);
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
		$objects = snappsCompanyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return snappsCompanyPeer::populateObjects(snappsCompanyPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			snappsCompanyPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = snappsCompanyPeer::getOMClass();
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
		return snappsCompanyPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(snappsCompanyPeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(snappsCompanyPeer::INDEX_NO);
			$selectCriteria->add(snappsCompanyPeer::INDEX_NO, $criteria->remove(snappsCompanyPeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(snappsCompanyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(snappsCompanyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof snappsCompany) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(snappsCompanyPeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(snappsCompany $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(snappsCompanyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(snappsCompanyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(snappsCompanyPeer::DATABASE_NAME, snappsCompanyPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = snappsCompanyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(snappsCompanyPeer::DATABASE_NAME);

		$criteria->add(snappsCompanyPeer::INDEX_NO, $pk);


		$v = snappsCompanyPeer::doSelect($criteria, $con);

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
			$criteria->add(snappsCompanyPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = snappsCompanyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasesnappsCompanyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/general/map/snappsCompanyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.general.map.snappsCompanyMapBuilder');
}
