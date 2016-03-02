<?php


abstract class BaseSeagateCaPaReportPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'seagate_ca_pa_report';

	
	const CLASS_DEFAULT = 'lib.model.iso.SeagateCaPaReport';

	
	const NUM_COLUMNS = 40;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'seagate_ca_pa_report.ID';

	
	const REPORT_NO = 'seagate_ca_pa_report.REPORT_NO';

	
	const ISSUE_DATE = 'seagate_ca_pa_report.ISSUE_DATE';

	
	const RESPONSE_DATE = 'seagate_ca_pa_report.RESPONSE_DATE';

	
	const FINDINGS = 'seagate_ca_pa_report.FINDINGS';

	
	const ROOT_CAUSE_ANALYSIS = 'seagate_ca_pa_report.ROOT_CAUSE_ANALYSIS';

	
	const CONTAINMENT_PLAN = 'seagate_ca_pa_report.CONTAINMENT_PLAN';

	
	const PREVENTIVE_PLAN = 'seagate_ca_pa_report.PREVENTIVE_PLAN';

	
	const VERIFICATION_OF_CA_PA = 'seagate_ca_pa_report.VERIFICATION_OF_CA_PA';

	
	const REPORTED_BY = 'seagate_ca_pa_report.REPORTED_BY';

	
	const SYMPTOM = 'seagate_ca_pa_report.SYMPTOM';

	
	const ERA_DESCRIPTION = 'seagate_ca_pa_report.ERA_DESCRIPTION';

	
	const ERA_EFFECTIVITY = 'seagate_ca_pa_report.ERA_EFFECTIVITY';

	
	const ERA_IMPLEMENTED = 'seagate_ca_pa_report.ERA_IMPLEMENTED';

	
	const ERA_COMPLETED = 'seagate_ca_pa_report.ERA_COMPLETED';

	
	const TITLE = 'seagate_ca_pa_report.TITLE';

	
	const TEAM = 'seagate_ca_pa_report.TEAM';

	
	const CONT_EFFECTIVITY = 'seagate_ca_pa_report.CONT_EFFECTIVITY';

	
	const CONT_IMPLEMENTED = 'seagate_ca_pa_report.CONT_IMPLEMENTED';

	
	const CONT_COMPLETED = 'seagate_ca_pa_report.CONT_COMPLETED';

	
	const CHOSEN_PERM_CA = 'seagate_ca_pa_report.CHOSEN_PERM_CA';

	
	const CHOSEN_PERM_EFFECTIVITY = 'seagate_ca_pa_report.CHOSEN_PERM_EFFECTIVITY';

	
	const CHOSEN_PERM_IMPLEMENTED = 'seagate_ca_pa_report.CHOSEN_PERM_IMPLEMENTED';

	
	const CHOSEN_PERM_COMPLETED = 'seagate_ca_pa_report.CHOSEN_PERM_COMPLETED';

	
	const IMPLEMENTED_PERM_CA = 'seagate_ca_pa_report.IMPLEMENTED_PERM_CA';

	
	const IMPLEMENTED_PERM_EFFECTIVITY = 'seagate_ca_pa_report.IMPLEMENTED_PERM_EFFECTIVITY';

	
	const IMPLEMENTED_PERM_IMPLEMENTED = 'seagate_ca_pa_report.IMPLEMENTED_PERM_IMPLEMENTED';

	
	const IMPLEMENTED_PERM_COMPLETED = 'seagate_ca_pa_report.IMPLEMENTED_PERM_COMPLETED';

	
	const CAR_NAME = 'seagate_ca_pa_report.CAR_NAME';

	
	const CAR_FOLLOWUP_REQUIRED = 'seagate_ca_pa_report.CAR_FOLLOWUP_REQUIRED';

	
	const CAR_FOLLOWUP_DATE = 'seagate_ca_pa_report.CAR_FOLLOWUP_DATE';

	
	const CAR_CA_STATUS = 'seagate_ca_pa_report.CAR_CA_STATUS';

	
	const CAR_TITLE = 'seagate_ca_pa_report.CAR_TITLE';

	
	const CAR_PLAN_EFFECTIVE = 'seagate_ca_pa_report.CAR_PLAN_EFFECTIVE';

	
	const CAR_VERIFIED_BY = 'seagate_ca_pa_report.CAR_VERIFIED_BY';

	
	const CAR_CLOSURE_DATE = 'seagate_ca_pa_report.CAR_CLOSURE_DATE';

	
	const DATE_CREATED = 'seagate_ca_pa_report.DATE_CREATED';

	
	const CREATED_BY = 'seagate_ca_pa_report.CREATED_BY';

	
	const DATE_MODIFIED = 'seagate_ca_pa_report.DATE_MODIFIED';

	
	const MODIFIED_BY = 'seagate_ca_pa_report.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ReportNo', 'IssueDate', 'ResponseDate', 'Findings', 'RootCauseAnalysis', 'ContainmentPlan', 'PreventivePlan', 'VerificationOfCaPa', 'ReportedBy', 'Symptom', 'EraDescription', 'EraEffectivity', 'EraImplemented', 'EraCompleted', 'Title', 'Team', 'ContEffectivity', 'ContImplemented', 'ContCompleted', 'ChosenPermCa', 'ChosenPermEffectivity', 'ChosenPermImplemented', 'ChosenPermCompleted', 'ImplementedPermCa', 'ImplementedPermEffectivity', 'ImplementedPermImplemented', 'ImplementedPermCompleted', 'CarName', 'CarFollowupRequired', 'CarFollowupDate', 'CarCaStatus', 'CarTitle', 'CarPlanEffective', 'CarVerifiedBy', 'CarClosureDate', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (SeagateCaPaReportPeer::ID, SeagateCaPaReportPeer::REPORT_NO, SeagateCaPaReportPeer::ISSUE_DATE, SeagateCaPaReportPeer::RESPONSE_DATE, SeagateCaPaReportPeer::FINDINGS, SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS, SeagateCaPaReportPeer::CONTAINMENT_PLAN, SeagateCaPaReportPeer::PREVENTIVE_PLAN, SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA, SeagateCaPaReportPeer::REPORTED_BY, SeagateCaPaReportPeer::SYMPTOM, SeagateCaPaReportPeer::ERA_DESCRIPTION, SeagateCaPaReportPeer::ERA_EFFECTIVITY, SeagateCaPaReportPeer::ERA_IMPLEMENTED, SeagateCaPaReportPeer::ERA_COMPLETED, SeagateCaPaReportPeer::TITLE, SeagateCaPaReportPeer::TEAM, SeagateCaPaReportPeer::CONT_EFFECTIVITY, SeagateCaPaReportPeer::CONT_IMPLEMENTED, SeagateCaPaReportPeer::CONT_COMPLETED, SeagateCaPaReportPeer::CHOSEN_PERM_CA, SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY, SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED, SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED, SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA, SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY, SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED, SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED, SeagateCaPaReportPeer::CAR_NAME, SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED, SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE, SeagateCaPaReportPeer::CAR_CA_STATUS, SeagateCaPaReportPeer::CAR_TITLE, SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE, SeagateCaPaReportPeer::CAR_VERIFIED_BY, SeagateCaPaReportPeer::CAR_CLOSURE_DATE, SeagateCaPaReportPeer::DATE_CREATED, SeagateCaPaReportPeer::CREATED_BY, SeagateCaPaReportPeer::DATE_MODIFIED, SeagateCaPaReportPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'report_no', 'issue_date', 'response_date', 'findings', 'root_cause_analysis', 'containment_plan', 'preventive_plan', 'verification_of_ca_pa', 'reported_by', 'symptom', 'era_description', 'era_effectivity', 'era_implemented', 'era_completed', 'title', 'team', 'cont_effectivity', 'cont_implemented', 'cont_completed', 'chosen_perm_ca', 'chosen_perm_effectivity', 'chosen_perm_implemented', 'chosen_perm_completed', 'implemented_perm_ca', 'implemented_perm_effectivity', 'implemented_perm_implemented', 'implemented_perm_completed', 'car_name', 'car_followup_required', 'car_followup_date', 'car_ca_status', 'car_title', 'car_plan_effective', 'car_verified_by', 'car_closure_date', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ReportNo' => 1, 'IssueDate' => 2, 'ResponseDate' => 3, 'Findings' => 4, 'RootCauseAnalysis' => 5, 'ContainmentPlan' => 6, 'PreventivePlan' => 7, 'VerificationOfCaPa' => 8, 'ReportedBy' => 9, 'Symptom' => 10, 'EraDescription' => 11, 'EraEffectivity' => 12, 'EraImplemented' => 13, 'EraCompleted' => 14, 'Title' => 15, 'Team' => 16, 'ContEffectivity' => 17, 'ContImplemented' => 18, 'ContCompleted' => 19, 'ChosenPermCa' => 20, 'ChosenPermEffectivity' => 21, 'ChosenPermImplemented' => 22, 'ChosenPermCompleted' => 23, 'ImplementedPermCa' => 24, 'ImplementedPermEffectivity' => 25, 'ImplementedPermImplemented' => 26, 'ImplementedPermCompleted' => 27, 'CarName' => 28, 'CarFollowupRequired' => 29, 'CarFollowupDate' => 30, 'CarCaStatus' => 31, 'CarTitle' => 32, 'CarPlanEffective' => 33, 'CarVerifiedBy' => 34, 'CarClosureDate' => 35, 'DateCreated' => 36, 'CreatedBy' => 37, 'DateModified' => 38, 'ModifiedBy' => 39, ),
		BasePeer::TYPE_COLNAME => array (SeagateCaPaReportPeer::ID => 0, SeagateCaPaReportPeer::REPORT_NO => 1, SeagateCaPaReportPeer::ISSUE_DATE => 2, SeagateCaPaReportPeer::RESPONSE_DATE => 3, SeagateCaPaReportPeer::FINDINGS => 4, SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS => 5, SeagateCaPaReportPeer::CONTAINMENT_PLAN => 6, SeagateCaPaReportPeer::PREVENTIVE_PLAN => 7, SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA => 8, SeagateCaPaReportPeer::REPORTED_BY => 9, SeagateCaPaReportPeer::SYMPTOM => 10, SeagateCaPaReportPeer::ERA_DESCRIPTION => 11, SeagateCaPaReportPeer::ERA_EFFECTIVITY => 12, SeagateCaPaReportPeer::ERA_IMPLEMENTED => 13, SeagateCaPaReportPeer::ERA_COMPLETED => 14, SeagateCaPaReportPeer::TITLE => 15, SeagateCaPaReportPeer::TEAM => 16, SeagateCaPaReportPeer::CONT_EFFECTIVITY => 17, SeagateCaPaReportPeer::CONT_IMPLEMENTED => 18, SeagateCaPaReportPeer::CONT_COMPLETED => 19, SeagateCaPaReportPeer::CHOSEN_PERM_CA => 20, SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY => 21, SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED => 22, SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED => 23, SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA => 24, SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY => 25, SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED => 26, SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED => 27, SeagateCaPaReportPeer::CAR_NAME => 28, SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED => 29, SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE => 30, SeagateCaPaReportPeer::CAR_CA_STATUS => 31, SeagateCaPaReportPeer::CAR_TITLE => 32, SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE => 33, SeagateCaPaReportPeer::CAR_VERIFIED_BY => 34, SeagateCaPaReportPeer::CAR_CLOSURE_DATE => 35, SeagateCaPaReportPeer::DATE_CREATED => 36, SeagateCaPaReportPeer::CREATED_BY => 37, SeagateCaPaReportPeer::DATE_MODIFIED => 38, SeagateCaPaReportPeer::MODIFIED_BY => 39, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'report_no' => 1, 'issue_date' => 2, 'response_date' => 3, 'findings' => 4, 'root_cause_analysis' => 5, 'containment_plan' => 6, 'preventive_plan' => 7, 'verification_of_ca_pa' => 8, 'reported_by' => 9, 'symptom' => 10, 'era_description' => 11, 'era_effectivity' => 12, 'era_implemented' => 13, 'era_completed' => 14, 'title' => 15, 'team' => 16, 'cont_effectivity' => 17, 'cont_implemented' => 18, 'cont_completed' => 19, 'chosen_perm_ca' => 20, 'chosen_perm_effectivity' => 21, 'chosen_perm_implemented' => 22, 'chosen_perm_completed' => 23, 'implemented_perm_ca' => 24, 'implemented_perm_effectivity' => 25, 'implemented_perm_implemented' => 26, 'implemented_perm_completed' => 27, 'car_name' => 28, 'car_followup_required' => 29, 'car_followup_date' => 30, 'car_ca_status' => 31, 'car_title' => 32, 'car_plan_effective' => 33, 'car_verified_by' => 34, 'car_closure_date' => 35, 'date_created' => 36, 'created_by' => 37, 'date_modified' => 38, 'modified_by' => 39, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/SeagateCaPaReportMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.SeagateCaPaReportMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SeagateCaPaReportPeer::getTableMap();
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
		return str_replace(SeagateCaPaReportPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ID);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::REPORT_NO);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ISSUE_DATE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::RESPONSE_DATE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::FINDINGS);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ROOT_CAUSE_ANALYSIS);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CONTAINMENT_PLAN);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::PREVENTIVE_PLAN);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::VERIFICATION_OF_CA_PA);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::REPORTED_BY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::SYMPTOM);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ERA_DESCRIPTION);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ERA_EFFECTIVITY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ERA_IMPLEMENTED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::ERA_COMPLETED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::TITLE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::TEAM);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CONT_EFFECTIVITY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CONT_IMPLEMENTED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CONT_COMPLETED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CHOSEN_PERM_CA);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CHOSEN_PERM_EFFECTIVITY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CHOSEN_PERM_IMPLEMENTED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CHOSEN_PERM_COMPLETED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::IMPLEMENTED_PERM_CA);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::IMPLEMENTED_PERM_EFFECTIVITY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::IMPLEMENTED_PERM_IMPLEMENTED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::IMPLEMENTED_PERM_COMPLETED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_NAME);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_FOLLOWUP_REQUIRED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_FOLLOWUP_DATE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_CA_STATUS);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_TITLE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_PLAN_EFFECTIVE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_VERIFIED_BY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CAR_CLOSURE_DATE);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::DATE_CREATED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::CREATED_BY);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SeagateCaPaReportPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(seagate_ca_pa_report.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT seagate_ca_pa_report.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeagateCaPaReportPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeagateCaPaReportPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SeagateCaPaReportPeer::doSelectRS($criteria, $con);
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
		$objects = SeagateCaPaReportPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SeagateCaPaReportPeer::populateObjects(SeagateCaPaReportPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SeagateCaPaReportPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SeagateCaPaReportPeer::getOMClass();
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
		return SeagateCaPaReportPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SeagateCaPaReportPeer::ID); 

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
			$comparison = $criteria->getComparison(SeagateCaPaReportPeer::ID);
			$selectCriteria->add(SeagateCaPaReportPeer::ID, $criteria->remove(SeagateCaPaReportPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SeagateCaPaReportPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SeagateCaPaReportPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SeagateCaPaReport) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SeagateCaPaReportPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SeagateCaPaReport $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SeagateCaPaReportPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SeagateCaPaReportPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SeagateCaPaReportPeer::DATABASE_NAME, SeagateCaPaReportPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SeagateCaPaReportPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SeagateCaPaReportPeer::DATABASE_NAME);

		$criteria->add(SeagateCaPaReportPeer::ID, $pk);


		$v = SeagateCaPaReportPeer::doSelect($criteria, $con);

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
			$criteria->add(SeagateCaPaReportPeer::ID, $pks, Criteria::IN);
			$objs = SeagateCaPaReportPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSeagateCaPaReportPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/SeagateCaPaReportMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.SeagateCaPaReportMapBuilder');
}
