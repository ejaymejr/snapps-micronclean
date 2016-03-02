<?php


abstract class BaseTicketDesignDetailPeer {

	
	const DATABASE_NAME = 'rental';

	
	const TABLE_NAME = 'ticket_design_detail';

	
	const CLASS_DEFAULT = 'lib.model.ticket.TicketDesignDetail';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ticket_design_detail.ID';

	
	const GARMENT = 'ticket_design_detail.GARMENT';

	
	const COMPONENT = 'ticket_design_detail.COMPONENT';

	
	const VALUE = 'ticket_design_detail.VALUE';

	
	const REMARK = 'ticket_design_detail.REMARK';

	
	const SEQUENCE = 'ticket_design_detail.SEQUENCE';

	
	const CREATED_BY = 'ticket_design_detail.CREATED_BY';

	
	const DATE_CREATED = 'ticket_design_detail.DATE_CREATED';

	
	const MODIFIED_BY = 'ticket_design_detail.MODIFIED_BY';

	
	const DATE_MODIFIED = 'ticket_design_detail.DATE_MODIFIED';

	
	const TICKET_DESIGN_HEADER_ID = 'ticket_design_detail.TICKET_DESIGN_HEADER_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Garment', 'Component', 'Value', 'Remark', 'Sequence', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', 'TicketDesignHeaderId', ),
		BasePeer::TYPE_COLNAME => array (TicketDesignDetailPeer::ID, TicketDesignDetailPeer::GARMENT, TicketDesignDetailPeer::COMPONENT, TicketDesignDetailPeer::VALUE, TicketDesignDetailPeer::REMARK, TicketDesignDetailPeer::SEQUENCE, TicketDesignDetailPeer::CREATED_BY, TicketDesignDetailPeer::DATE_CREATED, TicketDesignDetailPeer::MODIFIED_BY, TicketDesignDetailPeer::DATE_MODIFIED, TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment', 'component', 'value', 'remark', 'sequence', 'created_by', 'date_created', 'modified_by', 'date_modified', 'ticket_design_header_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Garment' => 1, 'Component' => 2, 'Value' => 3, 'Remark' => 4, 'Sequence' => 5, 'CreatedBy' => 6, 'DateCreated' => 7, 'ModifiedBy' => 8, 'DateModified' => 9, 'TicketDesignHeaderId' => 10, ),
		BasePeer::TYPE_COLNAME => array (TicketDesignDetailPeer::ID => 0, TicketDesignDetailPeer::GARMENT => 1, TicketDesignDetailPeer::COMPONENT => 2, TicketDesignDetailPeer::VALUE => 3, TicketDesignDetailPeer::REMARK => 4, TicketDesignDetailPeer::SEQUENCE => 5, TicketDesignDetailPeer::CREATED_BY => 6, TicketDesignDetailPeer::DATE_CREATED => 7, TicketDesignDetailPeer::MODIFIED_BY => 8, TicketDesignDetailPeer::DATE_MODIFIED => 9, TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment' => 1, 'component' => 2, 'value' => 3, 'remark' => 4, 'sequence' => 5, 'created_by' => 6, 'date_created' => 7, 'modified_by' => 8, 'date_modified' => 9, 'ticket_design_header_id' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/ticket/map/TicketDesignDetailMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.ticket.map.TicketDesignDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TicketDesignDetailPeer::getTableMap();
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
		return str_replace(TicketDesignDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TicketDesignDetailPeer::ID);

		$criteria->addSelectColumn(TicketDesignDetailPeer::GARMENT);

		$criteria->addSelectColumn(TicketDesignDetailPeer::COMPONENT);

		$criteria->addSelectColumn(TicketDesignDetailPeer::VALUE);

		$criteria->addSelectColumn(TicketDesignDetailPeer::REMARK);

		$criteria->addSelectColumn(TicketDesignDetailPeer::SEQUENCE);

		$criteria->addSelectColumn(TicketDesignDetailPeer::CREATED_BY);

		$criteria->addSelectColumn(TicketDesignDetailPeer::DATE_CREATED);

		$criteria->addSelectColumn(TicketDesignDetailPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TicketDesignDetailPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(TicketDesignDetailPeer::TICKET_DESIGN_HEADER_ID);

	}

	const COUNT = 'COUNT(ticket_design_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ticket_design_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TicketDesignDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TicketDesignDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TicketDesignDetailPeer::doSelectRS($criteria, $con);
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
		$objects = TicketDesignDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TicketDesignDetailPeer::populateObjects(TicketDesignDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TicketDesignDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TicketDesignDetailPeer::getOMClass();
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
		return TicketDesignDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TicketDesignDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(TicketDesignDetailPeer::ID);
			$selectCriteria->add(TicketDesignDetailPeer::ID, $criteria->remove(TicketDesignDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TicketDesignDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TicketDesignDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TicketDesignDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TicketDesignDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TicketDesignDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TicketDesignDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TicketDesignDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TicketDesignDetailPeer::DATABASE_NAME, TicketDesignDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TicketDesignDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TicketDesignDetailPeer::DATABASE_NAME);

		$criteria->add(TicketDesignDetailPeer::ID, $pk);


		$v = TicketDesignDetailPeer::doSelect($criteria, $con);

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
			$criteria->add(TicketDesignDetailPeer::ID, $pks, Criteria::IN);
			$objs = TicketDesignDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTicketDesignDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/ticket/map/TicketDesignDetailMapBuilder.php';
	Propel::registerMapBuilder('lib.model.ticket.map.TicketDesignDetailMapBuilder');
}
