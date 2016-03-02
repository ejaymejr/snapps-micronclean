<?php


abstract class BaseTicketDeliveryRecordPeer {

	
	const DATABASE_NAME = 'rental';

	
	const TABLE_NAME = 'ticket_delivery_record';

	
	const CLASS_DEFAULT = 'lib.model.ticket.TicketDeliveryRecord';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ticket_delivery_record.ID';

	
	const TRANS_DATE = 'ticket_delivery_record.TRANS_DATE';

	
	const TICKET_DESIGN_HEADER_ID = 'ticket_delivery_record.TICKET_DESIGN_HEADER_ID';

	
	const TICKET_DESIGN_DETAIL_ID = 'ticket_delivery_record.TICKET_DESIGN_DETAIL_ID';

	
	const DELIVERY_TICKET_ID = 'ticket_delivery_record.DELIVERY_TICKET_ID';

	
	const GARMENT = 'ticket_delivery_record.GARMENT';

	
	const COMPONENT = 'ticket_delivery_record.COMPONENT';

	
	const VALUE = 'ticket_delivery_record.VALUE';

	
	const QUANTITY = 'ticket_delivery_record.QUANTITY';

	
	const CREATED_BY = 'ticket_delivery_record.CREATED_BY';

	
	const DATE_CREATED = 'ticket_delivery_record.DATE_CREATED';

	
	const MODIFIED_BY = 'ticket_delivery_record.MODIFIED_BY';

	
	const DATE_MODIFIED = 'ticket_delivery_record.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TransDate', 'TicketDesignHeaderId', 'TicketDesignDetailId', 'DeliveryTicketId', 'Garment', 'Component', 'Value', 'Quantity', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (TicketDeliveryRecordPeer::ID, TicketDeliveryRecordPeer::TRANS_DATE, TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID, TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID, TicketDeliveryRecordPeer::DELIVERY_TICKET_ID, TicketDeliveryRecordPeer::GARMENT, TicketDeliveryRecordPeer::COMPONENT, TicketDeliveryRecordPeer::VALUE, TicketDeliveryRecordPeer::QUANTITY, TicketDeliveryRecordPeer::CREATED_BY, TicketDeliveryRecordPeer::DATE_CREATED, TicketDeliveryRecordPeer::MODIFIED_BY, TicketDeliveryRecordPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trans_date', 'ticket_design_header_id', 'ticket_design_detail_id', 'delivery_ticket_id', 'garment', 'component', 'value', 'quantity', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TransDate' => 1, 'TicketDesignHeaderId' => 2, 'TicketDesignDetailId' => 3, 'DeliveryTicketId' => 4, 'Garment' => 5, 'Component' => 6, 'Value' => 7, 'Quantity' => 8, 'CreatedBy' => 9, 'DateCreated' => 10, 'ModifiedBy' => 11, 'DateModified' => 12, ),
		BasePeer::TYPE_COLNAME => array (TicketDeliveryRecordPeer::ID => 0, TicketDeliveryRecordPeer::TRANS_DATE => 1, TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID => 2, TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID => 3, TicketDeliveryRecordPeer::DELIVERY_TICKET_ID => 4, TicketDeliveryRecordPeer::GARMENT => 5, TicketDeliveryRecordPeer::COMPONENT => 6, TicketDeliveryRecordPeer::VALUE => 7, TicketDeliveryRecordPeer::QUANTITY => 8, TicketDeliveryRecordPeer::CREATED_BY => 9, TicketDeliveryRecordPeer::DATE_CREATED => 10, TicketDeliveryRecordPeer::MODIFIED_BY => 11, TicketDeliveryRecordPeer::DATE_MODIFIED => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trans_date' => 1, 'ticket_design_header_id' => 2, 'ticket_design_detail_id' => 3, 'delivery_ticket_id' => 4, 'garment' => 5, 'component' => 6, 'value' => 7, 'quantity' => 8, 'created_by' => 9, 'date_created' => 10, 'modified_by' => 11, 'date_modified' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/ticket/map/TicketDeliveryRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.ticket.map.TicketDeliveryRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TicketDeliveryRecordPeer::getTableMap();
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
		return str_replace(TicketDeliveryRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::ID);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::TRANS_DATE);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::TICKET_DESIGN_HEADER_ID);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::TICKET_DESIGN_DETAIL_ID);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::DELIVERY_TICKET_ID);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::GARMENT);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::COMPONENT);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::VALUE);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::QUANTITY);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::CREATED_BY);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::DATE_CREATED);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::MODIFIED_BY);

		$criteria->addSelectColumn(TicketDeliveryRecordPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(ticket_delivery_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ticket_delivery_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TicketDeliveryRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TicketDeliveryRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TicketDeliveryRecordPeer::doSelectRS($criteria, $con);
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
		$objects = TicketDeliveryRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TicketDeliveryRecordPeer::populateObjects(TicketDeliveryRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TicketDeliveryRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TicketDeliveryRecordPeer::getOMClass();
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
		return TicketDeliveryRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TicketDeliveryRecordPeer::ID); 

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
			$comparison = $criteria->getComparison(TicketDeliveryRecordPeer::ID);
			$selectCriteria->add(TicketDeliveryRecordPeer::ID, $criteria->remove(TicketDeliveryRecordPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TicketDeliveryRecordPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TicketDeliveryRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TicketDeliveryRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TicketDeliveryRecordPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TicketDeliveryRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TicketDeliveryRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TicketDeliveryRecordPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TicketDeliveryRecordPeer::DATABASE_NAME, TicketDeliveryRecordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TicketDeliveryRecordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TicketDeliveryRecordPeer::DATABASE_NAME);

		$criteria->add(TicketDeliveryRecordPeer::ID, $pk);


		$v = TicketDeliveryRecordPeer::doSelect($criteria, $con);

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
			$criteria->add(TicketDeliveryRecordPeer::ID, $pks, Criteria::IN);
			$objs = TicketDeliveryRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTicketDeliveryRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/ticket/map/TicketDeliveryRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.ticket.map.TicketDeliveryRecordMapBuilder');
}
