<?php


abstract class BaseInternalAuditReportSummaryPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'internal_audit_report_summary';

	
	const CLASS_DEFAULT = 'lib.model.iso.InternalAuditReportSummary';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'internal_audit_report_summary.ID';

	
	const AUDITOR = 'internal_audit_report_summary.AUDITOR';

	
	const AUDITED_DATE = 'internal_audit_report_summary.AUDITED_DATE';

	
	const AREA_AUDITED = 'internal_audit_report_summary.AREA_AUDITED';

	
	const NC = 'internal_audit_report_summary.NC';

	
	const OBSERVATION = 'internal_audit_report_summary.OBSERVATION';

	
	const FINDINGS_SUMMARY = 'internal_audit_report_summary.FINDINGS_SUMMARY';

	
	const OTHER_OBSERVATION = 'internal_audit_report_summary.OTHER_OBSERVATION';

	
	const RECOMMENDATION = 'internal_audit_report_summary.RECOMMENDATION';

	
	const CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO = 'internal_audit_report_summary.CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO';

	
	const PREPARED_BY = 'internal_audit_report_summary.PREPARED_BY';

	
	const PREPARED_DATE = 'internal_audit_report_summary.PREPARED_DATE';

	
	const DATE_CREATED = 'internal_audit_report_summary.DATE_CREATED';

	
	const CREATED_BY = 'internal_audit_report_summary.CREATED_BY';

	
	const DATE_MODIFIED = 'internal_audit_report_summary.DATE_MODIFIED';

	
	const MODIFIED_BY = 'internal_audit_report_summary.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Auditor', 'AuditedDate', 'AreaAudited', 'Nc', 'Observation', 'FindingsSummary', 'OtherObservation', 'Recommendation', 'CorrectivePreventiveActionReportNo', 'PreparedBy', 'PreparedDate', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (InternalAuditReportSummaryPeer::ID, InternalAuditReportSummaryPeer::AUDITOR, InternalAuditReportSummaryPeer::AUDITED_DATE, InternalAuditReportSummaryPeer::AREA_AUDITED, InternalAuditReportSummaryPeer::NC, InternalAuditReportSummaryPeer::OBSERVATION, InternalAuditReportSummaryPeer::FINDINGS_SUMMARY, InternalAuditReportSummaryPeer::OTHER_OBSERVATION, InternalAuditReportSummaryPeer::RECOMMENDATION, InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO, InternalAuditReportSummaryPeer::PREPARED_BY, InternalAuditReportSummaryPeer::PREPARED_DATE, InternalAuditReportSummaryPeer::DATE_CREATED, InternalAuditReportSummaryPeer::CREATED_BY, InternalAuditReportSummaryPeer::DATE_MODIFIED, InternalAuditReportSummaryPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'auditor', 'audited_date', 'area_audited', 'nc', 'observation', 'findings_summary', 'other_observation', 'recommendation', 'corrective_preventive_action_report_no', 'prepared_by', 'prepared_date', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Auditor' => 1, 'AuditedDate' => 2, 'AreaAudited' => 3, 'Nc' => 4, 'Observation' => 5, 'FindingsSummary' => 6, 'OtherObservation' => 7, 'Recommendation' => 8, 'CorrectivePreventiveActionReportNo' => 9, 'PreparedBy' => 10, 'PreparedDate' => 11, 'DateCreated' => 12, 'CreatedBy' => 13, 'DateModified' => 14, 'ModifiedBy' => 15, ),
		BasePeer::TYPE_COLNAME => array (InternalAuditReportSummaryPeer::ID => 0, InternalAuditReportSummaryPeer::AUDITOR => 1, InternalAuditReportSummaryPeer::AUDITED_DATE => 2, InternalAuditReportSummaryPeer::AREA_AUDITED => 3, InternalAuditReportSummaryPeer::NC => 4, InternalAuditReportSummaryPeer::OBSERVATION => 5, InternalAuditReportSummaryPeer::FINDINGS_SUMMARY => 6, InternalAuditReportSummaryPeer::OTHER_OBSERVATION => 7, InternalAuditReportSummaryPeer::RECOMMENDATION => 8, InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO => 9, InternalAuditReportSummaryPeer::PREPARED_BY => 10, InternalAuditReportSummaryPeer::PREPARED_DATE => 11, InternalAuditReportSummaryPeer::DATE_CREATED => 12, InternalAuditReportSummaryPeer::CREATED_BY => 13, InternalAuditReportSummaryPeer::DATE_MODIFIED => 14, InternalAuditReportSummaryPeer::MODIFIED_BY => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'auditor' => 1, 'audited_date' => 2, 'area_audited' => 3, 'nc' => 4, 'observation' => 5, 'findings_summary' => 6, 'other_observation' => 7, 'recommendation' => 8, 'corrective_preventive_action_report_no' => 9, 'prepared_by' => 10, 'prepared_date' => 11, 'date_created' => 12, 'created_by' => 13, 'date_modified' => 14, 'modified_by' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/InternalAuditReportSummaryMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.InternalAuditReportSummaryMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InternalAuditReportSummaryPeer::getTableMap();
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
		return str_replace(InternalAuditReportSummaryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::ID);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::AUDITOR);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::AUDITED_DATE);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::AREA_AUDITED);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::NC);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::OBSERVATION);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::FINDINGS_SUMMARY);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::OTHER_OBSERVATION);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::RECOMMENDATION);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::CORRECTIVE_PREVENTIVE_ACTION_REPORT_NO);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::PREPARED_BY);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::PREPARED_DATE);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::DATE_CREATED);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::CREATED_BY);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(InternalAuditReportSummaryPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(internal_audit_report_summary.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT internal_audit_report_summary.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InternalAuditReportSummaryPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InternalAuditReportSummaryPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InternalAuditReportSummaryPeer::doSelectRS($criteria, $con);
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
		$objects = InternalAuditReportSummaryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InternalAuditReportSummaryPeer::populateObjects(InternalAuditReportSummaryPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InternalAuditReportSummaryPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InternalAuditReportSummaryPeer::getOMClass();
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
		return InternalAuditReportSummaryPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InternalAuditReportSummaryPeer::ID); 

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
			$comparison = $criteria->getComparison(InternalAuditReportSummaryPeer::ID);
			$selectCriteria->add(InternalAuditReportSummaryPeer::ID, $criteria->remove(InternalAuditReportSummaryPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InternalAuditReportSummaryPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InternalAuditReportSummaryPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InternalAuditReportSummary) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InternalAuditReportSummaryPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InternalAuditReportSummary $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InternalAuditReportSummaryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InternalAuditReportSummaryPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InternalAuditReportSummaryPeer::DATABASE_NAME, InternalAuditReportSummaryPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InternalAuditReportSummaryPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(InternalAuditReportSummaryPeer::DATABASE_NAME);

		$criteria->add(InternalAuditReportSummaryPeer::ID, $pk);


		$v = InternalAuditReportSummaryPeer::doSelect($criteria, $con);

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
			$criteria->add(InternalAuditReportSummaryPeer::ID, $pks, Criteria::IN);
			$objs = InternalAuditReportSummaryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInternalAuditReportSummaryPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/InternalAuditReportSummaryMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.InternalAuditReportSummaryMapBuilder');
}
