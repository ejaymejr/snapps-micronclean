<?php


abstract class BaseIsoCapaPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'iso_capa';

	
	const CLASS_DEFAULT = 'lib.model.iso.IsoCapa';

	
	const NUM_COLUMNS = 36;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'iso_capa.ID';

	
	const QAN_NO = 'iso_capa.QAN_NO';

	
	const FILE_NAME = 'iso_capa.FILE_NAME';

	
	const PROPOSED_ACTION = 'iso_capa.PROPOSED_ACTION';

	
	const INITIATOR = 'iso_capa.INITIATOR';

	
	const CUSTOMER = 'iso_capa.CUSTOMER';

	
	const CUST_COMMENT = 'iso_capa.CUST_COMMENT';

	
	const PROBLEM_DESCRIPTION = 'iso_capa.PROBLEM_DESCRIPTION';

	
	const INITIATED_BY = 'iso_capa.INITIATED_BY';

	
	const INITIATED_DATE = 'iso_capa.INITIATED_DATE';

	
	const KEYED_IN_BY = 'iso_capa.KEYED_IN_BY';

	
	const KEYED_IN_DATE = 'iso_capa.KEYED_IN_DATE';

	
	const ASSIGNED_TO = 'iso_capa.ASSIGNED_TO';

	
	const ASSIGNED_DATE = 'iso_capa.ASSIGNED_DATE';

	
	const EIGHT_D_FORM = 'iso_capa.EIGHT_D_FORM';

	
	const RECOMMENDED_ACTION = 'iso_capa.RECOMMENDED_ACTION';

	
	const DATA_COLLECTION = 'iso_capa.DATA_COLLECTION';

	
	const IMPLEMENTED_DATE = 'iso_capa.IMPLEMENTED_DATE';

	
	const AFFECTED_PARTS = 'iso_capa.AFFECTED_PARTS';

	
	const INITIAL_COMPLETION_DATE = 'iso_capa.INITIAL_COMPLETION_DATE';

	
	const PLAN_COMPLETION_DATE = 'iso_capa.PLAN_COMPLETION_DATE';

	
	const SUBMITTED_BY = 'iso_capa.SUBMITTED_BY';

	
	const RUN_PLAN_DATE = 'iso_capa.RUN_PLAN_DATE';

	
	const APPROVE_COMMENT = 'iso_capa.APPROVE_COMMENT';

	
	const APPROVED_BY = 'iso_capa.APPROVED_BY';

	
	const ACTION_PLAN_DATE = 'iso_capa.ACTION_PLAN_DATE';

	
	const FOLLOW_UP_BY = 'iso_capa.FOLLOW_UP_BY';

	
	const FOLLOW_UP_DATE = 'iso_capa.FOLLOW_UP_DATE';

	
	const IS_EFFECTIVE = 'iso_capa.IS_EFFECTIVE';

	
	const EFFECTIVITY_COMMENT = 'iso_capa.EFFECTIVITY_COMMENT';

	
	const CLOSED_OUT_DATE = 'iso_capa.CLOSED_OUT_DATE';

	
	const ADDITIONAL_SHEET = 'iso_capa.ADDITIONAL_SHEET';

	
	const DATE_CREATED = 'iso_capa.DATE_CREATED';

	
	const CREATED_BY = 'iso_capa.CREATED_BY';

	
	const DATE_MODIFIED = 'iso_capa.DATE_MODIFIED';

	
	const MODIFIED_BY = 'iso_capa.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'QanNo', 'FileName', 'ProposedAction', 'Initiator', 'Customer', 'CustComment', 'ProblemDescription', 'InitiatedBy', 'InitiatedDate', 'KeyedInBy', 'KeyedInDate', 'AssignedTo', 'AssignedDate', 'EightDForm', 'RecommendedAction', 'DataCollection', 'ImplementedDate', 'AffectedParts', 'InitialCompletionDate', 'PlanCompletionDate', 'SubmittedBy', 'RunPlanDate', 'ApproveComment', 'ApprovedBy', 'ActionPlanDate', 'FollowUpBy', 'FollowUpDate', 'IsEffective', 'EffectivityComment', 'ClosedOutDate', 'AdditionalSheet', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (IsoCapaPeer::ID, IsoCapaPeer::QAN_NO, IsoCapaPeer::FILE_NAME, IsoCapaPeer::PROPOSED_ACTION, IsoCapaPeer::INITIATOR, IsoCapaPeer::CUSTOMER, IsoCapaPeer::CUST_COMMENT, IsoCapaPeer::PROBLEM_DESCRIPTION, IsoCapaPeer::INITIATED_BY, IsoCapaPeer::INITIATED_DATE, IsoCapaPeer::KEYED_IN_BY, IsoCapaPeer::KEYED_IN_DATE, IsoCapaPeer::ASSIGNED_TO, IsoCapaPeer::ASSIGNED_DATE, IsoCapaPeer::EIGHT_D_FORM, IsoCapaPeer::RECOMMENDED_ACTION, IsoCapaPeer::DATA_COLLECTION, IsoCapaPeer::IMPLEMENTED_DATE, IsoCapaPeer::AFFECTED_PARTS, IsoCapaPeer::INITIAL_COMPLETION_DATE, IsoCapaPeer::PLAN_COMPLETION_DATE, IsoCapaPeer::SUBMITTED_BY, IsoCapaPeer::RUN_PLAN_DATE, IsoCapaPeer::APPROVE_COMMENT, IsoCapaPeer::APPROVED_BY, IsoCapaPeer::ACTION_PLAN_DATE, IsoCapaPeer::FOLLOW_UP_BY, IsoCapaPeer::FOLLOW_UP_DATE, IsoCapaPeer::IS_EFFECTIVE, IsoCapaPeer::EFFECTIVITY_COMMENT, IsoCapaPeer::CLOSED_OUT_DATE, IsoCapaPeer::ADDITIONAL_SHEET, IsoCapaPeer::DATE_CREATED, IsoCapaPeer::CREATED_BY, IsoCapaPeer::DATE_MODIFIED, IsoCapaPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'qan_no', 'file_name', 'proposed_action', 'initiator', 'customer', 'cust_comment', 'problem_description', 'initiated_by', 'initiated_date', 'keyed_in_by', 'keyed_in_date', 'assigned_to', 'assigned_date', 'eight_d_form', 'recommended_action', 'data_collection', 'implemented_date', 'affected_parts', 'initial_completion_date', 'plan_completion_date', 'submitted_by', 'run_plan_date', 'approve_comment', 'approved_by', 'action_plan_date', 'follow_up_by', 'follow_up_date', 'is_effective', 'effectivity_comment', 'closed_out_date', 'additional_sheet', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'QanNo' => 1, 'FileName' => 2, 'ProposedAction' => 3, 'Initiator' => 4, 'Customer' => 5, 'CustComment' => 6, 'ProblemDescription' => 7, 'InitiatedBy' => 8, 'InitiatedDate' => 9, 'KeyedInBy' => 10, 'KeyedInDate' => 11, 'AssignedTo' => 12, 'AssignedDate' => 13, 'EightDForm' => 14, 'RecommendedAction' => 15, 'DataCollection' => 16, 'ImplementedDate' => 17, 'AffectedParts' => 18, 'InitialCompletionDate' => 19, 'PlanCompletionDate' => 20, 'SubmittedBy' => 21, 'RunPlanDate' => 22, 'ApproveComment' => 23, 'ApprovedBy' => 24, 'ActionPlanDate' => 25, 'FollowUpBy' => 26, 'FollowUpDate' => 27, 'IsEffective' => 28, 'EffectivityComment' => 29, 'ClosedOutDate' => 30, 'AdditionalSheet' => 31, 'DateCreated' => 32, 'CreatedBy' => 33, 'DateModified' => 34, 'ModifiedBy' => 35, ),
		BasePeer::TYPE_COLNAME => array (IsoCapaPeer::ID => 0, IsoCapaPeer::QAN_NO => 1, IsoCapaPeer::FILE_NAME => 2, IsoCapaPeer::PROPOSED_ACTION => 3, IsoCapaPeer::INITIATOR => 4, IsoCapaPeer::CUSTOMER => 5, IsoCapaPeer::CUST_COMMENT => 6, IsoCapaPeer::PROBLEM_DESCRIPTION => 7, IsoCapaPeer::INITIATED_BY => 8, IsoCapaPeer::INITIATED_DATE => 9, IsoCapaPeer::KEYED_IN_BY => 10, IsoCapaPeer::KEYED_IN_DATE => 11, IsoCapaPeer::ASSIGNED_TO => 12, IsoCapaPeer::ASSIGNED_DATE => 13, IsoCapaPeer::EIGHT_D_FORM => 14, IsoCapaPeer::RECOMMENDED_ACTION => 15, IsoCapaPeer::DATA_COLLECTION => 16, IsoCapaPeer::IMPLEMENTED_DATE => 17, IsoCapaPeer::AFFECTED_PARTS => 18, IsoCapaPeer::INITIAL_COMPLETION_DATE => 19, IsoCapaPeer::PLAN_COMPLETION_DATE => 20, IsoCapaPeer::SUBMITTED_BY => 21, IsoCapaPeer::RUN_PLAN_DATE => 22, IsoCapaPeer::APPROVE_COMMENT => 23, IsoCapaPeer::APPROVED_BY => 24, IsoCapaPeer::ACTION_PLAN_DATE => 25, IsoCapaPeer::FOLLOW_UP_BY => 26, IsoCapaPeer::FOLLOW_UP_DATE => 27, IsoCapaPeer::IS_EFFECTIVE => 28, IsoCapaPeer::EFFECTIVITY_COMMENT => 29, IsoCapaPeer::CLOSED_OUT_DATE => 30, IsoCapaPeer::ADDITIONAL_SHEET => 31, IsoCapaPeer::DATE_CREATED => 32, IsoCapaPeer::CREATED_BY => 33, IsoCapaPeer::DATE_MODIFIED => 34, IsoCapaPeer::MODIFIED_BY => 35, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'qan_no' => 1, 'file_name' => 2, 'proposed_action' => 3, 'initiator' => 4, 'customer' => 5, 'cust_comment' => 6, 'problem_description' => 7, 'initiated_by' => 8, 'initiated_date' => 9, 'keyed_in_by' => 10, 'keyed_in_date' => 11, 'assigned_to' => 12, 'assigned_date' => 13, 'eight_d_form' => 14, 'recommended_action' => 15, 'data_collection' => 16, 'implemented_date' => 17, 'affected_parts' => 18, 'initial_completion_date' => 19, 'plan_completion_date' => 20, 'submitted_by' => 21, 'run_plan_date' => 22, 'approve_comment' => 23, 'approved_by' => 24, 'action_plan_date' => 25, 'follow_up_by' => 26, 'follow_up_date' => 27, 'is_effective' => 28, 'effectivity_comment' => 29, 'closed_out_date' => 30, 'additional_sheet' => 31, 'date_created' => 32, 'created_by' => 33, 'date_modified' => 34, 'modified_by' => 35, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/IsoCapaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.IsoCapaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IsoCapaPeer::getTableMap();
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
		return str_replace(IsoCapaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IsoCapaPeer::ID);

		$criteria->addSelectColumn(IsoCapaPeer::QAN_NO);

		$criteria->addSelectColumn(IsoCapaPeer::FILE_NAME);

		$criteria->addSelectColumn(IsoCapaPeer::PROPOSED_ACTION);

		$criteria->addSelectColumn(IsoCapaPeer::INITIATOR);

		$criteria->addSelectColumn(IsoCapaPeer::CUSTOMER);

		$criteria->addSelectColumn(IsoCapaPeer::CUST_COMMENT);

		$criteria->addSelectColumn(IsoCapaPeer::PROBLEM_DESCRIPTION);

		$criteria->addSelectColumn(IsoCapaPeer::INITIATED_BY);

		$criteria->addSelectColumn(IsoCapaPeer::INITIATED_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::KEYED_IN_BY);

		$criteria->addSelectColumn(IsoCapaPeer::KEYED_IN_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::ASSIGNED_TO);

		$criteria->addSelectColumn(IsoCapaPeer::ASSIGNED_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::EIGHT_D_FORM);

		$criteria->addSelectColumn(IsoCapaPeer::RECOMMENDED_ACTION);

		$criteria->addSelectColumn(IsoCapaPeer::DATA_COLLECTION);

		$criteria->addSelectColumn(IsoCapaPeer::IMPLEMENTED_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::AFFECTED_PARTS);

		$criteria->addSelectColumn(IsoCapaPeer::INITIAL_COMPLETION_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::PLAN_COMPLETION_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::SUBMITTED_BY);

		$criteria->addSelectColumn(IsoCapaPeer::RUN_PLAN_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::APPROVE_COMMENT);

		$criteria->addSelectColumn(IsoCapaPeer::APPROVED_BY);

		$criteria->addSelectColumn(IsoCapaPeer::ACTION_PLAN_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::FOLLOW_UP_BY);

		$criteria->addSelectColumn(IsoCapaPeer::FOLLOW_UP_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::IS_EFFECTIVE);

		$criteria->addSelectColumn(IsoCapaPeer::EFFECTIVITY_COMMENT);

		$criteria->addSelectColumn(IsoCapaPeer::CLOSED_OUT_DATE);

		$criteria->addSelectColumn(IsoCapaPeer::ADDITIONAL_SHEET);

		$criteria->addSelectColumn(IsoCapaPeer::DATE_CREATED);

		$criteria->addSelectColumn(IsoCapaPeer::CREATED_BY);

		$criteria->addSelectColumn(IsoCapaPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(IsoCapaPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(iso_capa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT iso_capa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IsoCapaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IsoCapaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IsoCapaPeer::doSelectRS($criteria, $con);
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
		$objects = IsoCapaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IsoCapaPeer::populateObjects(IsoCapaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IsoCapaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IsoCapaPeer::getOMClass();
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
		return IsoCapaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IsoCapaPeer::ID); 

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
			$comparison = $criteria->getComparison(IsoCapaPeer::ID);
			$selectCriteria->add(IsoCapaPeer::ID, $criteria->remove(IsoCapaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IsoCapaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IsoCapaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IsoCapa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IsoCapaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(IsoCapa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IsoCapaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IsoCapaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IsoCapaPeer::DATABASE_NAME, IsoCapaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IsoCapaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IsoCapaPeer::DATABASE_NAME);

		$criteria->add(IsoCapaPeer::ID, $pk);


		$v = IsoCapaPeer::doSelect($criteria, $con);

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
			$criteria->add(IsoCapaPeer::ID, $pks, Criteria::IN);
			$objs = IsoCapaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIsoCapaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/IsoCapaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.IsoCapaMapBuilder');
}
