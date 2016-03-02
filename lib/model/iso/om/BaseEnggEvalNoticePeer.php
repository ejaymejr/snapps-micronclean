<?php


abstract class BaseEnggEvalNoticePeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'engg_eval_notice';

	
	const CLASS_DEFAULT = 'lib.model.iso.EnggEvalNotice';

	
	const NUM_COLUMNS = 34;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'engg_eval_notice.ID';

	
	const EEN_NO = 'engg_eval_notice.EEN_NO';

	
	const PROPOSED_ACTION = 'engg_eval_notice.PROPOSED_ACTION';

	
	const INITIATOR = 'engg_eval_notice.INITIATOR';

	
	const CUSTOMER = 'engg_eval_notice.CUSTOMER';

	
	const PROBLEM_DESCRIPTION = 'engg_eval_notice.PROBLEM_DESCRIPTION';

	
	const INITIATED_BY = 'engg_eval_notice.INITIATED_BY';

	
	const INITIATED_DATE = 'engg_eval_notice.INITIATED_DATE';

	
	const KEYED_IN_BY = 'engg_eval_notice.KEYED_IN_BY';

	
	const KEYED_IN_DATE = 'engg_eval_notice.KEYED_IN_DATE';

	
	const ASSIGNED_TO = 'engg_eval_notice.ASSIGNED_TO';

	
	const ASSIGNED_DATE = 'engg_eval_notice.ASSIGNED_DATE';

	
	const EIGHT_D_FORM = 'engg_eval_notice.EIGHT_D_FORM';

	
	const FLOW_DESCRIPTION = 'engg_eval_notice.FLOW_DESCRIPTION';

	
	const DATA_COLLECTION = 'engg_eval_notice.DATA_COLLECTION';

	
	const DATA_COMPLETION_DATE = 'engg_eval_notice.DATA_COMPLETION_DATE';

	
	const QTY_FOR_RUN = 'engg_eval_notice.QTY_FOR_RUN';

	
	const RUN_COMPLETION_DATE = 'engg_eval_notice.RUN_COMPLETION_DATE';

	
	const SUBMITTED_BY = 'engg_eval_notice.SUBMITTED_BY';

	
	const RUN_PLAN_DATE = 'engg_eval_notice.RUN_PLAN_DATE';

	
	const APPROVE_COMMENT = 'engg_eval_notice.APPROVE_COMMENT';

	
	const APPROVED_BY = 'engg_eval_notice.APPROVED_BY';

	
	const ACTION_PLAN_DATE = 'engg_eval_notice.ACTION_PLAN_DATE';

	
	const FOLLOW_UP_BY = 'engg_eval_notice.FOLLOW_UP_BY';

	
	const FOLLOW_UP_DATE = 'engg_eval_notice.FOLLOW_UP_DATE';

	
	const IS_EFFECTIVE = 'engg_eval_notice.IS_EFFECTIVE';

	
	const EVIDENCE = 'engg_eval_notice.EVIDENCE';

	
	const DISPOSITION_OF_MATERIAL = 'engg_eval_notice.DISPOSITION_OF_MATERIAL';

	
	const CLOSED_OUT_DATE = 'engg_eval_notice.CLOSED_OUT_DATE';

	
	const ADDITIONAL_SHEET = 'engg_eval_notice.ADDITIONAL_SHEET';

	
	const DATE_CREATED = 'engg_eval_notice.DATE_CREATED';

	
	const CREATED_BY = 'engg_eval_notice.CREATED_BY';

	
	const DATE_MODIFIED = 'engg_eval_notice.DATE_MODIFIED';

	
	const MODIFIED_BY = 'engg_eval_notice.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'EenNo', 'ProposedAction', 'Initiator', 'Customer', 'ProblemDescription', 'InitiatedBy', 'InitiatedDate', 'KeyedInBy', 'KeyedInDate', 'AssignedTo', 'AssignedDate', 'EightDForm', 'FlowDescription', 'DataCollection', 'DataCompletionDate', 'QtyForRun', 'RunCompletionDate', 'SubmittedBy', 'RunPlanDate', 'ApproveComment', 'ApprovedBy', 'ActionPlanDate', 'FollowUpBy', 'FollowUpDate', 'IsEffective', 'Evidence', 'DispositionOfMaterial', 'ClosedOutDate', 'AdditionalSheet', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (EnggEvalNoticePeer::ID, EnggEvalNoticePeer::EEN_NO, EnggEvalNoticePeer::PROPOSED_ACTION, EnggEvalNoticePeer::INITIATOR, EnggEvalNoticePeer::CUSTOMER, EnggEvalNoticePeer::PROBLEM_DESCRIPTION, EnggEvalNoticePeer::INITIATED_BY, EnggEvalNoticePeer::INITIATED_DATE, EnggEvalNoticePeer::KEYED_IN_BY, EnggEvalNoticePeer::KEYED_IN_DATE, EnggEvalNoticePeer::ASSIGNED_TO, EnggEvalNoticePeer::ASSIGNED_DATE, EnggEvalNoticePeer::EIGHT_D_FORM, EnggEvalNoticePeer::FLOW_DESCRIPTION, EnggEvalNoticePeer::DATA_COLLECTION, EnggEvalNoticePeer::DATA_COMPLETION_DATE, EnggEvalNoticePeer::QTY_FOR_RUN, EnggEvalNoticePeer::RUN_COMPLETION_DATE, EnggEvalNoticePeer::SUBMITTED_BY, EnggEvalNoticePeer::RUN_PLAN_DATE, EnggEvalNoticePeer::APPROVE_COMMENT, EnggEvalNoticePeer::APPROVED_BY, EnggEvalNoticePeer::ACTION_PLAN_DATE, EnggEvalNoticePeer::FOLLOW_UP_BY, EnggEvalNoticePeer::FOLLOW_UP_DATE, EnggEvalNoticePeer::IS_EFFECTIVE, EnggEvalNoticePeer::EVIDENCE, EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL, EnggEvalNoticePeer::CLOSED_OUT_DATE, EnggEvalNoticePeer::ADDITIONAL_SHEET, EnggEvalNoticePeer::DATE_CREATED, EnggEvalNoticePeer::CREATED_BY, EnggEvalNoticePeer::DATE_MODIFIED, EnggEvalNoticePeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'een_no', 'proposed_action', 'initiator', 'customer', 'problem_description', 'initiated_by', 'initiated_date', 'keyed_in_by', 'keyed_in_date', 'assigned_to', 'assigned_date', 'eight_d_form', 'flow_description', 'data_collection', 'data_completion_date', 'qty_for_run', 'run_completion_date', 'submitted_by', 'run_plan_date', 'approve_comment', 'approved_by', 'action_plan_date', 'follow_up_by', 'follow_up_date', 'is_effective', 'evidence', 'disposition_of_material', 'closed_out_date', 'additional_sheet', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EenNo' => 1, 'ProposedAction' => 2, 'Initiator' => 3, 'Customer' => 4, 'ProblemDescription' => 5, 'InitiatedBy' => 6, 'InitiatedDate' => 7, 'KeyedInBy' => 8, 'KeyedInDate' => 9, 'AssignedTo' => 10, 'AssignedDate' => 11, 'EightDForm' => 12, 'FlowDescription' => 13, 'DataCollection' => 14, 'DataCompletionDate' => 15, 'QtyForRun' => 16, 'RunCompletionDate' => 17, 'SubmittedBy' => 18, 'RunPlanDate' => 19, 'ApproveComment' => 20, 'ApprovedBy' => 21, 'ActionPlanDate' => 22, 'FollowUpBy' => 23, 'FollowUpDate' => 24, 'IsEffective' => 25, 'Evidence' => 26, 'DispositionOfMaterial' => 27, 'ClosedOutDate' => 28, 'AdditionalSheet' => 29, 'DateCreated' => 30, 'CreatedBy' => 31, 'DateModified' => 32, 'ModifiedBy' => 33, ),
		BasePeer::TYPE_COLNAME => array (EnggEvalNoticePeer::ID => 0, EnggEvalNoticePeer::EEN_NO => 1, EnggEvalNoticePeer::PROPOSED_ACTION => 2, EnggEvalNoticePeer::INITIATOR => 3, EnggEvalNoticePeer::CUSTOMER => 4, EnggEvalNoticePeer::PROBLEM_DESCRIPTION => 5, EnggEvalNoticePeer::INITIATED_BY => 6, EnggEvalNoticePeer::INITIATED_DATE => 7, EnggEvalNoticePeer::KEYED_IN_BY => 8, EnggEvalNoticePeer::KEYED_IN_DATE => 9, EnggEvalNoticePeer::ASSIGNED_TO => 10, EnggEvalNoticePeer::ASSIGNED_DATE => 11, EnggEvalNoticePeer::EIGHT_D_FORM => 12, EnggEvalNoticePeer::FLOW_DESCRIPTION => 13, EnggEvalNoticePeer::DATA_COLLECTION => 14, EnggEvalNoticePeer::DATA_COMPLETION_DATE => 15, EnggEvalNoticePeer::QTY_FOR_RUN => 16, EnggEvalNoticePeer::RUN_COMPLETION_DATE => 17, EnggEvalNoticePeer::SUBMITTED_BY => 18, EnggEvalNoticePeer::RUN_PLAN_DATE => 19, EnggEvalNoticePeer::APPROVE_COMMENT => 20, EnggEvalNoticePeer::APPROVED_BY => 21, EnggEvalNoticePeer::ACTION_PLAN_DATE => 22, EnggEvalNoticePeer::FOLLOW_UP_BY => 23, EnggEvalNoticePeer::FOLLOW_UP_DATE => 24, EnggEvalNoticePeer::IS_EFFECTIVE => 25, EnggEvalNoticePeer::EVIDENCE => 26, EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL => 27, EnggEvalNoticePeer::CLOSED_OUT_DATE => 28, EnggEvalNoticePeer::ADDITIONAL_SHEET => 29, EnggEvalNoticePeer::DATE_CREATED => 30, EnggEvalNoticePeer::CREATED_BY => 31, EnggEvalNoticePeer::DATE_MODIFIED => 32, EnggEvalNoticePeer::MODIFIED_BY => 33, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'een_no' => 1, 'proposed_action' => 2, 'initiator' => 3, 'customer' => 4, 'problem_description' => 5, 'initiated_by' => 6, 'initiated_date' => 7, 'keyed_in_by' => 8, 'keyed_in_date' => 9, 'assigned_to' => 10, 'assigned_date' => 11, 'eight_d_form' => 12, 'flow_description' => 13, 'data_collection' => 14, 'data_completion_date' => 15, 'qty_for_run' => 16, 'run_completion_date' => 17, 'submitted_by' => 18, 'run_plan_date' => 19, 'approve_comment' => 20, 'approved_by' => 21, 'action_plan_date' => 22, 'follow_up_by' => 23, 'follow_up_date' => 24, 'is_effective' => 25, 'evidence' => 26, 'disposition_of_material' => 27, 'closed_out_date' => 28, 'additional_sheet' => 29, 'date_created' => 30, 'created_by' => 31, 'date_modified' => 32, 'modified_by' => 33, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/EnggEvalNoticeMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.EnggEvalNoticeMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = EnggEvalNoticePeer::getTableMap();
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
		return str_replace(EnggEvalNoticePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(EnggEvalNoticePeer::ID);

		$criteria->addSelectColumn(EnggEvalNoticePeer::EEN_NO);

		$criteria->addSelectColumn(EnggEvalNoticePeer::PROPOSED_ACTION);

		$criteria->addSelectColumn(EnggEvalNoticePeer::INITIATOR);

		$criteria->addSelectColumn(EnggEvalNoticePeer::CUSTOMER);

		$criteria->addSelectColumn(EnggEvalNoticePeer::PROBLEM_DESCRIPTION);

		$criteria->addSelectColumn(EnggEvalNoticePeer::INITIATED_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::INITIATED_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::KEYED_IN_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::KEYED_IN_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::ASSIGNED_TO);

		$criteria->addSelectColumn(EnggEvalNoticePeer::ASSIGNED_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::EIGHT_D_FORM);

		$criteria->addSelectColumn(EnggEvalNoticePeer::FLOW_DESCRIPTION);

		$criteria->addSelectColumn(EnggEvalNoticePeer::DATA_COLLECTION);

		$criteria->addSelectColumn(EnggEvalNoticePeer::DATA_COMPLETION_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::QTY_FOR_RUN);

		$criteria->addSelectColumn(EnggEvalNoticePeer::RUN_COMPLETION_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::SUBMITTED_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::RUN_PLAN_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::APPROVE_COMMENT);

		$criteria->addSelectColumn(EnggEvalNoticePeer::APPROVED_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::ACTION_PLAN_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::FOLLOW_UP_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::FOLLOW_UP_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::IS_EFFECTIVE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::EVIDENCE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::DISPOSITION_OF_MATERIAL);

		$criteria->addSelectColumn(EnggEvalNoticePeer::CLOSED_OUT_DATE);

		$criteria->addSelectColumn(EnggEvalNoticePeer::ADDITIONAL_SHEET);

		$criteria->addSelectColumn(EnggEvalNoticePeer::DATE_CREATED);

		$criteria->addSelectColumn(EnggEvalNoticePeer::CREATED_BY);

		$criteria->addSelectColumn(EnggEvalNoticePeer::DATE_MODIFIED);

		$criteria->addSelectColumn(EnggEvalNoticePeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(engg_eval_notice.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT engg_eval_notice.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EnggEvalNoticePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EnggEvalNoticePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = EnggEvalNoticePeer::doSelectRS($criteria, $con);
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
		$objects = EnggEvalNoticePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return EnggEvalNoticePeer::populateObjects(EnggEvalNoticePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			EnggEvalNoticePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = EnggEvalNoticePeer::getOMClass();
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
		return EnggEvalNoticePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(EnggEvalNoticePeer::ID); 

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
			$comparison = $criteria->getComparison(EnggEvalNoticePeer::ID);
			$selectCriteria->add(EnggEvalNoticePeer::ID, $criteria->remove(EnggEvalNoticePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(EnggEvalNoticePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(EnggEvalNoticePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof EnggEvalNotice) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EnggEvalNoticePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(EnggEvalNotice $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EnggEvalNoticePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EnggEvalNoticePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(EnggEvalNoticePeer::DATABASE_NAME, EnggEvalNoticePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = EnggEvalNoticePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(EnggEvalNoticePeer::DATABASE_NAME);

		$criteria->add(EnggEvalNoticePeer::ID, $pk);


		$v = EnggEvalNoticePeer::doSelect($criteria, $con);

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
			$criteria->add(EnggEvalNoticePeer::ID, $pks, Criteria::IN);
			$objs = EnggEvalNoticePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseEnggEvalNoticePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/EnggEvalNoticeMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.EnggEvalNoticeMapBuilder');
}
