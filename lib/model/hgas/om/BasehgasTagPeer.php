<?php


abstract class BasehgasTagPeer {

	
	const DATABASE_NAME = 'hgas';

	
	const TABLE_NAME = 'tag';

	
	const CLASS_DEFAULT = 'lib.model.hgas.hgasTag';

	
	const NUM_COLUMNS = 48;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tag.ID';

	
	const USER_ID = 'tag.USER_ID';

	
	const USER_FULLNAME = 'tag.USER_FULLNAME';

	
	const USER_GID = 'tag.USER_GID';

	
	const JUMPSUIT_SIZE = 'tag.JUMPSUIT_SIZE';

	
	const BOOTIES_SIZE = 'tag.BOOTIES_SIZE';

	
	const SAFETY_BOOT_SIZE = 'tag.SAFETY_BOOT_SIZE';

	
	const HOOD_SIZE = 'tag.HOOD_SIZE';

	
	const REQUESTED_BY = 'tag.REQUESTED_BY';

	
	const DATE_REQUESTED = 'tag.DATE_REQUESTED';

	
	const COMPLETED_BY = 'tag.COMPLETED_BY';

	
	const DATE_COMPLETED = 'tag.DATE_COMPLETED';

	
	const DEPARTMENT_ID = 'tag.DEPARTMENT_ID';

	
	const DEPARTMENT_NAME = 'tag.DEPARTMENT_NAME';

	
	const TEAM_ID = 'tag.TEAM_ID';

	
	const TEAM_NAME = 'tag.TEAM_NAME';

	
	const CELL_ID = 'tag.CELL_ID';

	
	const CELL_NAME = 'tag.CELL_NAME';

	
	const RACK_ID = 'tag.RACK_ID';

	
	const RACK_NAME = 'tag.RACK_NAME';

	
	const HANGER_ID = 'tag.HANGER_ID';

	
	const HANGER_NAME = 'tag.HANGER_NAME';

	
	const SLOT_ID = 'tag.SLOT_ID';

	
	const SLOT_NAME = 'tag.SLOT_NAME';

	
	const BOOT_CONDITION = 'tag.BOOT_CONDITION';

	
	const SAFETY_BOOT_CONDITION = 'tag.SAFETY_BOOT_CONDITION';

	
	const JS_CONDITION = 'tag.JS_CONDITION';

	
	const HOOD_CONDITION = 'tag.HOOD_CONDITION';

	
	const BOOT_STAT = 'tag.BOOT_STAT';

	
	const SBOOT_STAT = 'tag.SBOOT_STAT';

	
	const JS_STAT = 'tag.JS_STAT';

	
	const HOOD_STAT = 'tag.HOOD_STAT';

	
	const DATE_PEN_BOOT = 'tag.DATE_PEN_BOOT';

	
	const DATE_PEN_SBOOT = 'tag.DATE_PEN_SBOOT';

	
	const DATE_PEN_JS = 'tag.DATE_PEN_JS';

	
	const DATE_PEN_HOOD = 'tag.DATE_PEN_HOOD';

	
	const DATE_INP_BOOT = 'tag.DATE_INP_BOOT';

	
	const DATE_INP_SBOOT = 'tag.DATE_INP_SBOOT';

	
	const DATE_INP_JS = 'tag.DATE_INP_JS';

	
	const DATE_INP_HOOD = 'tag.DATE_INP_HOOD';

	
	const DATE_NA_BOOT = 'tag.DATE_NA_BOOT';

	
	const DATE_NA_SBOOT = 'tag.DATE_NA_SBOOT';

	
	const DATE_NA_JS = 'tag.DATE_NA_JS';

	
	const DATE_NA_HOOD = 'tag.DATE_NA_HOOD';

	
	const DATE_COM_BOOT = 'tag.DATE_COM_BOOT';

	
	const DATE_COM_SBOOT = 'tag.DATE_COM_SBOOT';

	
	const DATE_COM_JS = 'tag.DATE_COM_JS';

	
	const DATE_COM_HOOD = 'tag.DATE_COM_HOOD';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'UserFullname', 'UserGid', 'JumpsuitSize', 'BootiesSize', 'SafetyBootSize', 'HoodSize', 'RequestedBy', 'DateRequested', 'CompletedBy', 'DateCompleted', 'DepartmentId', 'DepartmentName', 'TeamId', 'TeamName', 'CellId', 'CellName', 'RackId', 'RackName', 'HangerId', 'HangerName', 'SlotId', 'SlotName', 'BootCondition', 'SafetyBootCondition', 'JsCondition', 'HoodCondition', 'BootStat', 'SbootStat', 'JsStat', 'HoodStat', 'DatePenBoot', 'DatePenSboot', 'DatePenJs', 'DatePenHood', 'DateInpBoot', 'DateInpSboot', 'DateInpJs', 'DateInpHood', 'DateNaBoot', 'DateNaSboot', 'DateNaJs', 'DateNaHood', 'DateComBoot', 'DateComSboot', 'DateComJs', 'DateComHood', ),
		BasePeer::TYPE_COLNAME => array (hgasTagPeer::ID, hgasTagPeer::USER_ID, hgasTagPeer::USER_FULLNAME, hgasTagPeer::USER_GID, hgasTagPeer::JUMPSUIT_SIZE, hgasTagPeer::BOOTIES_SIZE, hgasTagPeer::SAFETY_BOOT_SIZE, hgasTagPeer::HOOD_SIZE, hgasTagPeer::REQUESTED_BY, hgasTagPeer::DATE_REQUESTED, hgasTagPeer::COMPLETED_BY, hgasTagPeer::DATE_COMPLETED, hgasTagPeer::DEPARTMENT_ID, hgasTagPeer::DEPARTMENT_NAME, hgasTagPeer::TEAM_ID, hgasTagPeer::TEAM_NAME, hgasTagPeer::CELL_ID, hgasTagPeer::CELL_NAME, hgasTagPeer::RACK_ID, hgasTagPeer::RACK_NAME, hgasTagPeer::HANGER_ID, hgasTagPeer::HANGER_NAME, hgasTagPeer::SLOT_ID, hgasTagPeer::SLOT_NAME, hgasTagPeer::BOOT_CONDITION, hgasTagPeer::SAFETY_BOOT_CONDITION, hgasTagPeer::JS_CONDITION, hgasTagPeer::HOOD_CONDITION, hgasTagPeer::BOOT_STAT, hgasTagPeer::SBOOT_STAT, hgasTagPeer::JS_STAT, hgasTagPeer::HOOD_STAT, hgasTagPeer::DATE_PEN_BOOT, hgasTagPeer::DATE_PEN_SBOOT, hgasTagPeer::DATE_PEN_JS, hgasTagPeer::DATE_PEN_HOOD, hgasTagPeer::DATE_INP_BOOT, hgasTagPeer::DATE_INP_SBOOT, hgasTagPeer::DATE_INP_JS, hgasTagPeer::DATE_INP_HOOD, hgasTagPeer::DATE_NA_BOOT, hgasTagPeer::DATE_NA_SBOOT, hgasTagPeer::DATE_NA_JS, hgasTagPeer::DATE_NA_HOOD, hgasTagPeer::DATE_COM_BOOT, hgasTagPeer::DATE_COM_SBOOT, hgasTagPeer::DATE_COM_JS, hgasTagPeer::DATE_COM_HOOD, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'user_fullname', 'user_gid', 'jumpsuit_size', 'booties_size', 'safety_boot_size', 'hood_size', 'requested_by', 'date_requested', 'completed_by', 'date_completed', 'department_id', 'department_name', 'team_id', 'team_name', 'cell_id', 'cell_name', 'rack_id', 'rack_name', 'hanger_id', 'hanger_name', 'slot_id', 'slot_name', 'boot_condition', 'safety_boot_condition', 'js_condition', 'hood_condition', 'boot_stat', 'sboot_stat', 'js_stat', 'hood_stat', 'date_pen_boot', 'date_pen_sboot', 'date_pen_js', 'date_pen_hood', 'date_inp_boot', 'date_inp_sboot', 'date_inp_js', 'date_inp_hood', 'date_na_boot', 'date_na_sboot', 'date_na_js', 'date_na_hood', 'date_com_boot', 'date_com_sboot', 'date_com_js', 'date_com_hood', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'UserFullname' => 2, 'UserGid' => 3, 'JumpsuitSize' => 4, 'BootiesSize' => 5, 'SafetyBootSize' => 6, 'HoodSize' => 7, 'RequestedBy' => 8, 'DateRequested' => 9, 'CompletedBy' => 10, 'DateCompleted' => 11, 'DepartmentId' => 12, 'DepartmentName' => 13, 'TeamId' => 14, 'TeamName' => 15, 'CellId' => 16, 'CellName' => 17, 'RackId' => 18, 'RackName' => 19, 'HangerId' => 20, 'HangerName' => 21, 'SlotId' => 22, 'SlotName' => 23, 'BootCondition' => 24, 'SafetyBootCondition' => 25, 'JsCondition' => 26, 'HoodCondition' => 27, 'BootStat' => 28, 'SbootStat' => 29, 'JsStat' => 30, 'HoodStat' => 31, 'DatePenBoot' => 32, 'DatePenSboot' => 33, 'DatePenJs' => 34, 'DatePenHood' => 35, 'DateInpBoot' => 36, 'DateInpSboot' => 37, 'DateInpJs' => 38, 'DateInpHood' => 39, 'DateNaBoot' => 40, 'DateNaSboot' => 41, 'DateNaJs' => 42, 'DateNaHood' => 43, 'DateComBoot' => 44, 'DateComSboot' => 45, 'DateComJs' => 46, 'DateComHood' => 47, ),
		BasePeer::TYPE_COLNAME => array (hgasTagPeer::ID => 0, hgasTagPeer::USER_ID => 1, hgasTagPeer::USER_FULLNAME => 2, hgasTagPeer::USER_GID => 3, hgasTagPeer::JUMPSUIT_SIZE => 4, hgasTagPeer::BOOTIES_SIZE => 5, hgasTagPeer::SAFETY_BOOT_SIZE => 6, hgasTagPeer::HOOD_SIZE => 7, hgasTagPeer::REQUESTED_BY => 8, hgasTagPeer::DATE_REQUESTED => 9, hgasTagPeer::COMPLETED_BY => 10, hgasTagPeer::DATE_COMPLETED => 11, hgasTagPeer::DEPARTMENT_ID => 12, hgasTagPeer::DEPARTMENT_NAME => 13, hgasTagPeer::TEAM_ID => 14, hgasTagPeer::TEAM_NAME => 15, hgasTagPeer::CELL_ID => 16, hgasTagPeer::CELL_NAME => 17, hgasTagPeer::RACK_ID => 18, hgasTagPeer::RACK_NAME => 19, hgasTagPeer::HANGER_ID => 20, hgasTagPeer::HANGER_NAME => 21, hgasTagPeer::SLOT_ID => 22, hgasTagPeer::SLOT_NAME => 23, hgasTagPeer::BOOT_CONDITION => 24, hgasTagPeer::SAFETY_BOOT_CONDITION => 25, hgasTagPeer::JS_CONDITION => 26, hgasTagPeer::HOOD_CONDITION => 27, hgasTagPeer::BOOT_STAT => 28, hgasTagPeer::SBOOT_STAT => 29, hgasTagPeer::JS_STAT => 30, hgasTagPeer::HOOD_STAT => 31, hgasTagPeer::DATE_PEN_BOOT => 32, hgasTagPeer::DATE_PEN_SBOOT => 33, hgasTagPeer::DATE_PEN_JS => 34, hgasTagPeer::DATE_PEN_HOOD => 35, hgasTagPeer::DATE_INP_BOOT => 36, hgasTagPeer::DATE_INP_SBOOT => 37, hgasTagPeer::DATE_INP_JS => 38, hgasTagPeer::DATE_INP_HOOD => 39, hgasTagPeer::DATE_NA_BOOT => 40, hgasTagPeer::DATE_NA_SBOOT => 41, hgasTagPeer::DATE_NA_JS => 42, hgasTagPeer::DATE_NA_HOOD => 43, hgasTagPeer::DATE_COM_BOOT => 44, hgasTagPeer::DATE_COM_SBOOT => 45, hgasTagPeer::DATE_COM_JS => 46, hgasTagPeer::DATE_COM_HOOD => 47, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'user_fullname' => 2, 'user_gid' => 3, 'jumpsuit_size' => 4, 'booties_size' => 5, 'safety_boot_size' => 6, 'hood_size' => 7, 'requested_by' => 8, 'date_requested' => 9, 'completed_by' => 10, 'date_completed' => 11, 'department_id' => 12, 'department_name' => 13, 'team_id' => 14, 'team_name' => 15, 'cell_id' => 16, 'cell_name' => 17, 'rack_id' => 18, 'rack_name' => 19, 'hanger_id' => 20, 'hanger_name' => 21, 'slot_id' => 22, 'slot_name' => 23, 'boot_condition' => 24, 'safety_boot_condition' => 25, 'js_condition' => 26, 'hood_condition' => 27, 'boot_stat' => 28, 'sboot_stat' => 29, 'js_stat' => 30, 'hood_stat' => 31, 'date_pen_boot' => 32, 'date_pen_sboot' => 33, 'date_pen_js' => 34, 'date_pen_hood' => 35, 'date_inp_boot' => 36, 'date_inp_sboot' => 37, 'date_inp_js' => 38, 'date_inp_hood' => 39, 'date_na_boot' => 40, 'date_na_sboot' => 41, 'date_na_js' => 42, 'date_na_hood' => 43, 'date_com_boot' => 44, 'date_com_sboot' => 45, 'date_com_js' => 46, 'date_com_hood' => 47, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/hgas/map/hgasTagMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.hgas.map.hgasTagMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = hgasTagPeer::getTableMap();
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
		return str_replace(hgasTagPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(hgasTagPeer::ID);

		$criteria->addSelectColumn(hgasTagPeer::USER_ID);

		$criteria->addSelectColumn(hgasTagPeer::USER_FULLNAME);

		$criteria->addSelectColumn(hgasTagPeer::USER_GID);

		$criteria->addSelectColumn(hgasTagPeer::JUMPSUIT_SIZE);

		$criteria->addSelectColumn(hgasTagPeer::BOOTIES_SIZE);

		$criteria->addSelectColumn(hgasTagPeer::SAFETY_BOOT_SIZE);

		$criteria->addSelectColumn(hgasTagPeer::HOOD_SIZE);

		$criteria->addSelectColumn(hgasTagPeer::REQUESTED_BY);

		$criteria->addSelectColumn(hgasTagPeer::DATE_REQUESTED);

		$criteria->addSelectColumn(hgasTagPeer::COMPLETED_BY);

		$criteria->addSelectColumn(hgasTagPeer::DATE_COMPLETED);

		$criteria->addSelectColumn(hgasTagPeer::DEPARTMENT_ID);

		$criteria->addSelectColumn(hgasTagPeer::DEPARTMENT_NAME);

		$criteria->addSelectColumn(hgasTagPeer::TEAM_ID);

		$criteria->addSelectColumn(hgasTagPeer::TEAM_NAME);

		$criteria->addSelectColumn(hgasTagPeer::CELL_ID);

		$criteria->addSelectColumn(hgasTagPeer::CELL_NAME);

		$criteria->addSelectColumn(hgasTagPeer::RACK_ID);

		$criteria->addSelectColumn(hgasTagPeer::RACK_NAME);

		$criteria->addSelectColumn(hgasTagPeer::HANGER_ID);

		$criteria->addSelectColumn(hgasTagPeer::HANGER_NAME);

		$criteria->addSelectColumn(hgasTagPeer::SLOT_ID);

		$criteria->addSelectColumn(hgasTagPeer::SLOT_NAME);

		$criteria->addSelectColumn(hgasTagPeer::BOOT_CONDITION);

		$criteria->addSelectColumn(hgasTagPeer::SAFETY_BOOT_CONDITION);

		$criteria->addSelectColumn(hgasTagPeer::JS_CONDITION);

		$criteria->addSelectColumn(hgasTagPeer::HOOD_CONDITION);

		$criteria->addSelectColumn(hgasTagPeer::BOOT_STAT);

		$criteria->addSelectColumn(hgasTagPeer::SBOOT_STAT);

		$criteria->addSelectColumn(hgasTagPeer::JS_STAT);

		$criteria->addSelectColumn(hgasTagPeer::HOOD_STAT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_PEN_BOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_PEN_SBOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_PEN_JS);

		$criteria->addSelectColumn(hgasTagPeer::DATE_PEN_HOOD);

		$criteria->addSelectColumn(hgasTagPeer::DATE_INP_BOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_INP_SBOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_INP_JS);

		$criteria->addSelectColumn(hgasTagPeer::DATE_INP_HOOD);

		$criteria->addSelectColumn(hgasTagPeer::DATE_NA_BOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_NA_SBOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_NA_JS);

		$criteria->addSelectColumn(hgasTagPeer::DATE_NA_HOOD);

		$criteria->addSelectColumn(hgasTagPeer::DATE_COM_BOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_COM_SBOOT);

		$criteria->addSelectColumn(hgasTagPeer::DATE_COM_JS);

		$criteria->addSelectColumn(hgasTagPeer::DATE_COM_HOOD);

	}

	const COUNT = 'COUNT(tag.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tag.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(hgasTagPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(hgasTagPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = hgasTagPeer::doSelectRS($criteria, $con);
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
		$objects = hgasTagPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return hgasTagPeer::populateObjects(hgasTagPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			hgasTagPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = hgasTagPeer::getOMClass();
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
		return hgasTagPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(hgasTagPeer::ID); 

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
			$comparison = $criteria->getComparison(hgasTagPeer::ID);
			$selectCriteria->add(hgasTagPeer::ID, $criteria->remove(hgasTagPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(hgasTagPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(hgasTagPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof hgasTag) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(hgasTagPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(hgasTag $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(hgasTagPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(hgasTagPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(hgasTagPeer::DATABASE_NAME, hgasTagPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = hgasTagPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(hgasTagPeer::DATABASE_NAME);

		$criteria->add(hgasTagPeer::ID, $pk);


		$v = hgasTagPeer::doSelect($criteria, $con);

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
			$criteria->add(hgasTagPeer::ID, $pks, Criteria::IN);
			$objs = hgasTagPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasehgasTagPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/hgas/map/hgasTagMapBuilder.php';
	Propel::registerMapBuilder('lib.model.hgas.map.hgasTagMapBuilder');
}
