<?php


abstract class BaseSupplierCapaPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'supplier_capa';

	
	const CLASS_DEFAULT = 'lib.model.iso.SupplierCapa';

	
	const NUM_COLUMNS = 42;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'supplier_capa.ID';

	
	const REPORT_NO = 'supplier_capa.REPORT_NO';

	
	const ISSUE_DATE = 'supplier_capa.ISSUE_DATE';

	
	const RESPONSE_DATE = 'supplier_capa.RESPONSE_DATE';

	
	const FINDINGS = 'supplier_capa.FINDINGS';

	
	const ROOT_CAUSE_ANALYSIS = 'supplier_capa.ROOT_CAUSE_ANALYSIS';

	
	const CONTAINMENT_PLAN = 'supplier_capa.CONTAINMENT_PLAN';

	
	const PREVENTIVE_PLAN = 'supplier_capa.PREVENTIVE_PLAN';

	
	const VERIFICATION_OF_CA_PA = 'supplier_capa.VERIFICATION_OF_CA_PA';

	
	const REPORTED_BY = 'supplier_capa.REPORTED_BY';

	
	const SYMPTOM = 'supplier_capa.SYMPTOM';

	
	const ERA_DESCRIPTION = 'supplier_capa.ERA_DESCRIPTION';

	
	const ERA_EFFECTIVITY = 'supplier_capa.ERA_EFFECTIVITY';

	
	const ERA_IMPLEMENTED = 'supplier_capa.ERA_IMPLEMENTED';

	
	const ERA_COMPLETED = 'supplier_capa.ERA_COMPLETED';

	
	const TITLE = 'supplier_capa.TITLE';

	
	const TEAM = 'supplier_capa.TEAM';

	
	const CONT_EFFECTIVITY = 'supplier_capa.CONT_EFFECTIVITY';

	
	const CONT_IMPLEMENTED = 'supplier_capa.CONT_IMPLEMENTED';

	
	const CONT_COMPLETED = 'supplier_capa.CONT_COMPLETED';

	
	const CHOSEN_PERM_CA = 'supplier_capa.CHOSEN_PERM_CA';

	
	const CHOSEN_PERM_EFFECTIVITY = 'supplier_capa.CHOSEN_PERM_EFFECTIVITY';

	
	const CHOSEN_PERM_IMPLEMENTED = 'supplier_capa.CHOSEN_PERM_IMPLEMENTED';

	
	const CHOSEN_PERM_COMPLETED = 'supplier_capa.CHOSEN_PERM_COMPLETED';

	
	const IMPLEMENTED_PERM_CA = 'supplier_capa.IMPLEMENTED_PERM_CA';

	
	const IMPLEMENTED_PERM_EFFECTIVITY = 'supplier_capa.IMPLEMENTED_PERM_EFFECTIVITY';

	
	const IMPLEMENTED_PERM_IMPLEMENTED = 'supplier_capa.IMPLEMENTED_PERM_IMPLEMENTED';

	
	const IMPLEMENTED_PERM_COMPLETED = 'supplier_capa.IMPLEMENTED_PERM_COMPLETED';

	
	const CAR_NAME = 'supplier_capa.CAR_NAME';

	
	const CAR_FOLLOWUP_REQUIRED = 'supplier_capa.CAR_FOLLOWUP_REQUIRED';

	
	const CAR_FOLLOWUP_DATE = 'supplier_capa.CAR_FOLLOWUP_DATE';

	
	const CAR_CA_STATUS = 'supplier_capa.CAR_CA_STATUS';

	
	const CAR_TITLE = 'supplier_capa.CAR_TITLE';

	
	const CAR_PLAN_EFFECTIVE = 'supplier_capa.CAR_PLAN_EFFECTIVE';

	
	const CAR_VERIFIED_BY = 'supplier_capa.CAR_VERIFIED_BY';

	
	const CAR_CLOSURE_DATE = 'supplier_capa.CAR_CLOSURE_DATE';

	
	const TOKEN = 'supplier_capa.TOKEN';

	
	const TOKEN_EXPIRY = 'supplier_capa.TOKEN_EXPIRY';

	
	const DATE_CREATED = 'supplier_capa.DATE_CREATED';

	
	const CREATED_BY = 'supplier_capa.CREATED_BY';

	
	const DATE_MODIFIED = 'supplier_capa.DATE_MODIFIED';

	
	const MODIFIED_BY = 'supplier_capa.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ReportNo', 'IssueDate', 'ResponseDate', 'Findings', 'RootCauseAnalysis', 'ContainmentPlan', 'PreventivePlan', 'VerificationOfCaPa', 'ReportedBy', 'Symptom', 'EraDescription', 'EraEffectivity', 'EraImplemented', 'EraCompleted', 'Title', 'Team', 'ContEffectivity', 'ContImplemented', 'ContCompleted', 'ChosenPermCa', 'ChosenPermEffectivity', 'ChosenPermImplemented', 'ChosenPermCompleted', 'ImplementedPermCa', 'ImplementedPermEffectivity', 'ImplementedPermImplemented', 'ImplementedPermCompleted', 'CarName', 'CarFollowupRequired', 'CarFollowupDate', 'CarCaStatus', 'CarTitle', 'CarPlanEffective', 'CarVerifiedBy', 'CarClosureDate', 'Token', 'TokenExpiry', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (SupplierCapaPeer::ID, SupplierCapaPeer::REPORT_NO, SupplierCapaPeer::ISSUE_DATE, SupplierCapaPeer::RESPONSE_DATE, SupplierCapaPeer::FINDINGS, SupplierCapaPeer::ROOT_CAUSE_ANALYSIS, SupplierCapaPeer::CONTAINMENT_PLAN, SupplierCapaPeer::PREVENTIVE_PLAN, SupplierCapaPeer::VERIFICATION_OF_CA_PA, SupplierCapaPeer::REPORTED_BY, SupplierCapaPeer::SYMPTOM, SupplierCapaPeer::ERA_DESCRIPTION, SupplierCapaPeer::ERA_EFFECTIVITY, SupplierCapaPeer::ERA_IMPLEMENTED, SupplierCapaPeer::ERA_COMPLETED, SupplierCapaPeer::TITLE, SupplierCapaPeer::TEAM, SupplierCapaPeer::CONT_EFFECTIVITY, SupplierCapaPeer::CONT_IMPLEMENTED, SupplierCapaPeer::CONT_COMPLETED, SupplierCapaPeer::CHOSEN_PERM_CA, SupplierCapaPeer::CHOSEN_PERM_EFFECTIVITY, SupplierCapaPeer::CHOSEN_PERM_IMPLEMENTED, SupplierCapaPeer::CHOSEN_PERM_COMPLETED, SupplierCapaPeer::IMPLEMENTED_PERM_CA, SupplierCapaPeer::IMPLEMENTED_PERM_EFFECTIVITY, SupplierCapaPeer::IMPLEMENTED_PERM_IMPLEMENTED, SupplierCapaPeer::IMPLEMENTED_PERM_COMPLETED, SupplierCapaPeer::CAR_NAME, SupplierCapaPeer::CAR_FOLLOWUP_REQUIRED, SupplierCapaPeer::CAR_FOLLOWUP_DATE, SupplierCapaPeer::CAR_CA_STATUS, SupplierCapaPeer::CAR_TITLE, SupplierCapaPeer::CAR_PLAN_EFFECTIVE, SupplierCapaPeer::CAR_VERIFIED_BY, SupplierCapaPeer::CAR_CLOSURE_DATE, SupplierCapaPeer::TOKEN, SupplierCapaPeer::TOKEN_EXPIRY, SupplierCapaPeer::DATE_CREATED, SupplierCapaPeer::CREATED_BY, SupplierCapaPeer::DATE_MODIFIED, SupplierCapaPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'report_no', 'issue_date', 'response_date', 'findings', 'root_cause_analysis', 'containment_plan', 'preventive_plan', 'verification_of_ca_pa', 'reported_by', 'symptom', 'era_description', 'era_effectivity', 'era_implemented', 'era_completed', 'title', 'team', 'cont_effectivity', 'cont_implemented', 'cont_completed', 'chosen_perm_ca', 'chosen_perm_effectivity', 'chosen_perm_implemented', 'chosen_perm_completed', 'implemented_perm_ca', 'implemented_perm_effectivity', 'implemented_perm_implemented', 'implemented_perm_completed', 'car_name', 'car_followup_required', 'car_followup_date', 'car_ca_status', 'car_title', 'car_plan_effective', 'car_verified_by', 'car_closure_date', 'token', 'token_expiry', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ReportNo' => 1, 'IssueDate' => 2, 'ResponseDate' => 3, 'Findings' => 4, 'RootCauseAnalysis' => 5, 'ContainmentPlan' => 6, 'PreventivePlan' => 7, 'VerificationOfCaPa' => 8, 'ReportedBy' => 9, 'Symptom' => 10, 'EraDescription' => 11, 'EraEffectivity' => 12, 'EraImplemented' => 13, 'EraCompleted' => 14, 'Title' => 15, 'Team' => 16, 'ContEffectivity' => 17, 'ContImplemented' => 18, 'ContCompleted' => 19, 'ChosenPermCa' => 20, 'ChosenPermEffectivity' => 21, 'ChosenPermImplemented' => 22, 'ChosenPermCompleted' => 23, 'ImplementedPermCa' => 24, 'ImplementedPermEffectivity' => 25, 'ImplementedPermImplemented' => 26, 'ImplementedPermCompleted' => 27, 'CarName' => 28, 'CarFollowupRequired' => 29, 'CarFollowupDate' => 30, 'CarCaStatus' => 31, 'CarTitle' => 32, 'CarPlanEffective' => 33, 'CarVerifiedBy' => 34, 'CarClosureDate' => 35, 'Token' => 36, 'TokenExpiry' => 37, 'DateCreated' => 38, 'CreatedBy' => 39, 'DateModified' => 40, 'ModifiedBy' => 41, ),
		BasePeer::TYPE_COLNAME => array (SupplierCapaPeer::ID => 0, SupplierCapaPeer::REPORT_NO => 1, SupplierCapaPeer::ISSUE_DATE => 2, SupplierCapaPeer::RESPONSE_DATE => 3, SupplierCapaPeer::FINDINGS => 4, SupplierCapaPeer::ROOT_CAUSE_ANALYSIS => 5, SupplierCapaPeer::CONTAINMENT_PLAN => 6, SupplierCapaPeer::PREVENTIVE_PLAN => 7, SupplierCapaPeer::VERIFICATION_OF_CA_PA => 8, SupplierCapaPeer::REPORTED_BY => 9, SupplierCapaPeer::SYMPTOM => 10, SupplierCapaPeer::ERA_DESCRIPTION => 11, SupplierCapaPeer::ERA_EFFECTIVITY => 12, SupplierCapaPeer::ERA_IMPLEMENTED => 13, SupplierCapaPeer::ERA_COMPLETED => 14, SupplierCapaPeer::TITLE => 15, SupplierCapaPeer::TEAM => 16, SupplierCapaPeer::CONT_EFFECTIVITY => 17, SupplierCapaPeer::CONT_IMPLEMENTED => 18, SupplierCapaPeer::CONT_COMPLETED => 19, SupplierCapaPeer::CHOSEN_PERM_CA => 20, SupplierCapaPeer::CHOSEN_PERM_EFFECTIVITY => 21, SupplierCapaPeer::CHOSEN_PERM_IMPLEMENTED => 22, SupplierCapaPeer::CHOSEN_PERM_COMPLETED => 23, SupplierCapaPeer::IMPLEMENTED_PERM_CA => 24, SupplierCapaPeer::IMPLEMENTED_PERM_EFFECTIVITY => 25, SupplierCapaPeer::IMPLEMENTED_PERM_IMPLEMENTED => 26, SupplierCapaPeer::IMPLEMENTED_PERM_COMPLETED => 27, SupplierCapaPeer::CAR_NAME => 28, SupplierCapaPeer::CAR_FOLLOWUP_REQUIRED => 29, SupplierCapaPeer::CAR_FOLLOWUP_DATE => 30, SupplierCapaPeer::CAR_CA_STATUS => 31, SupplierCapaPeer::CAR_TITLE => 32, SupplierCapaPeer::CAR_PLAN_EFFECTIVE => 33, SupplierCapaPeer::CAR_VERIFIED_BY => 34, SupplierCapaPeer::CAR_CLOSURE_DATE => 35, SupplierCapaPeer::TOKEN => 36, SupplierCapaPeer::TOKEN_EXPIRY => 37, SupplierCapaPeer::DATE_CREATED => 38, SupplierCapaPeer::CREATED_BY => 39, SupplierCapaPeer::DATE_MODIFIED => 40, SupplierCapaPeer::MODIFIED_BY => 41, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'report_no' => 1, 'issue_date' => 2, 'response_date' => 3, 'findings' => 4, 'root_cause_analysis' => 5, 'containment_plan' => 6, 'preventive_plan' => 7, 'verification_of_ca_pa' => 8, 'reported_by' => 9, 'symptom' => 10, 'era_description' => 11, 'era_effectivity' => 12, 'era_implemented' => 13, 'era_completed' => 14, 'title' => 15, 'team' => 16, 'cont_effectivity' => 17, 'cont_implemented' => 18, 'cont_completed' => 19, 'chosen_perm_ca' => 20, 'chosen_perm_effectivity' => 21, 'chosen_perm_implemented' => 22, 'chosen_perm_completed' => 23, 'implemented_perm_ca' => 24, 'implemented_perm_effectivity' => 25, 'implemented_perm_implemented' => 26, 'implemented_perm_completed' => 27, 'car_name' => 28, 'car_followup_required' => 29, 'car_followup_date' => 30, 'car_ca_status' => 31, 'car_title' => 32, 'car_plan_effective' => 33, 'car_verified_by' => 34, 'car_closure_date' => 35, 'token' => 36, 'token_expiry' => 37, 'date_created' => 38, 'created_by' => 39, 'date_modified' => 40, 'modified_by' => 41, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/SupplierCapaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.SupplierCapaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SupplierCapaPeer::getTableMap();
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
		return str_replace(SupplierCapaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SupplierCapaPeer::ID);

		$criteria->addSelectColumn(SupplierCapaPeer::REPORT_NO);

		$criteria->addSelectColumn(SupplierCapaPeer::ISSUE_DATE);

		$criteria->addSelectColumn(SupplierCapaPeer::RESPONSE_DATE);

		$criteria->addSelectColumn(SupplierCapaPeer::FINDINGS);

		$criteria->addSelectColumn(SupplierCapaPeer::ROOT_CAUSE_ANALYSIS);

		$criteria->addSelectColumn(SupplierCapaPeer::CONTAINMENT_PLAN);

		$criteria->addSelectColumn(SupplierCapaPeer::PREVENTIVE_PLAN);

		$criteria->addSelectColumn(SupplierCapaPeer::VERIFICATION_OF_CA_PA);

		$criteria->addSelectColumn(SupplierCapaPeer::REPORTED_BY);

		$criteria->addSelectColumn(SupplierCapaPeer::SYMPTOM);

		$criteria->addSelectColumn(SupplierCapaPeer::ERA_DESCRIPTION);

		$criteria->addSelectColumn(SupplierCapaPeer::ERA_EFFECTIVITY);

		$criteria->addSelectColumn(SupplierCapaPeer::ERA_IMPLEMENTED);

		$criteria->addSelectColumn(SupplierCapaPeer::ERA_COMPLETED);

		$criteria->addSelectColumn(SupplierCapaPeer::TITLE);

		$criteria->addSelectColumn(SupplierCapaPeer::TEAM);

		$criteria->addSelectColumn(SupplierCapaPeer::CONT_EFFECTIVITY);

		$criteria->addSelectColumn(SupplierCapaPeer::CONT_IMPLEMENTED);

		$criteria->addSelectColumn(SupplierCapaPeer::CONT_COMPLETED);

		$criteria->addSelectColumn(SupplierCapaPeer::CHOSEN_PERM_CA);

		$criteria->addSelectColumn(SupplierCapaPeer::CHOSEN_PERM_EFFECTIVITY);

		$criteria->addSelectColumn(SupplierCapaPeer::CHOSEN_PERM_IMPLEMENTED);

		$criteria->addSelectColumn(SupplierCapaPeer::CHOSEN_PERM_COMPLETED);

		$criteria->addSelectColumn(SupplierCapaPeer::IMPLEMENTED_PERM_CA);

		$criteria->addSelectColumn(SupplierCapaPeer::IMPLEMENTED_PERM_EFFECTIVITY);

		$criteria->addSelectColumn(SupplierCapaPeer::IMPLEMENTED_PERM_IMPLEMENTED);

		$criteria->addSelectColumn(SupplierCapaPeer::IMPLEMENTED_PERM_COMPLETED);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_NAME);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_FOLLOWUP_REQUIRED);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_FOLLOWUP_DATE);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_CA_STATUS);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_TITLE);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_PLAN_EFFECTIVE);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_VERIFIED_BY);

		$criteria->addSelectColumn(SupplierCapaPeer::CAR_CLOSURE_DATE);

		$criteria->addSelectColumn(SupplierCapaPeer::TOKEN);

		$criteria->addSelectColumn(SupplierCapaPeer::TOKEN_EXPIRY);

		$criteria->addSelectColumn(SupplierCapaPeer::DATE_CREATED);

		$criteria->addSelectColumn(SupplierCapaPeer::CREATED_BY);

		$criteria->addSelectColumn(SupplierCapaPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(SupplierCapaPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(supplier_capa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT supplier_capa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SupplierCapaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SupplierCapaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SupplierCapaPeer::doSelectRS($criteria, $con);
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
		$objects = SupplierCapaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SupplierCapaPeer::populateObjects(SupplierCapaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SupplierCapaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SupplierCapaPeer::getOMClass();
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
		return SupplierCapaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SupplierCapaPeer::ID); 

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
			$comparison = $criteria->getComparison(SupplierCapaPeer::ID);
			$selectCriteria->add(SupplierCapaPeer::ID, $criteria->remove(SupplierCapaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SupplierCapaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SupplierCapaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SupplierCapa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SupplierCapaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SupplierCapa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SupplierCapaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SupplierCapaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SupplierCapaPeer::DATABASE_NAME, SupplierCapaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SupplierCapaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SupplierCapaPeer::DATABASE_NAME);

		$criteria->add(SupplierCapaPeer::ID, $pk);


		$v = SupplierCapaPeer::doSelect($criteria, $con);

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
			$criteria->add(SupplierCapaPeer::ID, $pks, Criteria::IN);
			$objs = SupplierCapaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSupplierCapaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/SupplierCapaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.SupplierCapaMapBuilder');
}
