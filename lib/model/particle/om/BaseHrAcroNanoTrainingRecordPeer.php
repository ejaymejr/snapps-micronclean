<?php


abstract class BaseHrAcroNanoTrainingRecordPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_acro_nano_training_record';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrAcroNanoTrainingRecord';

	
	const NUM_COLUMNS = 36;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_acro_nano_training_record.ID';

	
	const DATE_TIME = 'hr_acro_nano_training_record.DATE_TIME';

	
	const DATE_FROM = 'hr_acro_nano_training_record.DATE_FROM';

	
	const DATE_TO = 'hr_acro_nano_training_record.DATE_TO';

	
	const EMPLOYEE_NO = 'hr_acro_nano_training_record.EMPLOYEE_NO';

	
	const NAME = 'hr_acro_nano_training_record.NAME';

	
	const COMPANY = 'hr_acro_nano_training_record.COMPANY';

	
	const NO_HRS = 'hr_acro_nano_training_record.NO_HRS';

	
	const INITIAL_INSPECTION = 'hr_acro_nano_training_record.INITIAL_INSPECTION';

	
	const DELABELING_JELLY_REMOVAL = 'hr_acro_nano_training_record.DELABELING_JELLY_REMOVAL';

	
	const PRE_WASH = 'hr_acro_nano_training_record.PRE_WASH';

	
	const LOADING = 'hr_acro_nano_training_record.LOADING';

	
	const MACHINE_WASH = 'hr_acro_nano_training_record.MACHINE_WASH';

	
	const UNLOADING = 'hr_acro_nano_training_record.UNLOADING';

	
	const INPROCESS_VISUAL_INSPECTION = 'hr_acro_nano_training_record.INPROCESS_VISUAL_INSPECTION';

	
	const LPC = 'hr_acro_nano_training_record.LPC';

	
	const IC = 'hr_acro_nano_training_record.IC';

	
	const NVR = 'hr_acro_nano_training_record.NVR';

	
	const QA_SAMPLE_INSPECTION = 'hr_acro_nano_training_record.QA_SAMPLE_INSPECTION';

	
	const PURGING_MACHINE = 'hr_acro_nano_training_record.PURGING_MACHINE';

	
	const PACKING = 'hr_acro_nano_training_record.PACKING';

	
	const QUALITY_POLICY = 'hr_acro_nano_training_record.QUALITY_POLICY';

	
	const SPC_AWARENESS = 'hr_acro_nano_training_record.SPC_AWARENESS';

	
	const VISUAL_INSPECTION = 'hr_acro_nano_training_record.VISUAL_INSPECTION';

	
	const REMARKS = 'hr_acro_nano_training_record.REMARKS';

	
	const VERIFY = 'hr_acro_nano_training_record.VERIFY';

	
	const CREATED_BY = 'hr_acro_nano_training_record.CREATED_BY';

	
	const DATE_CREATED = 'hr_acro_nano_training_record.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_acro_nano_training_record.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_acro_nano_training_record.DATE_MODIFIED';

	
	const PHARMAG_WASHER = 'hr_acro_nano_training_record.PHARMAG_WASHER';

	
	const PVA_VMI = 'hr_acro_nano_training_record.PVA_VMI';

	
	const PRE_WASH_LOADING = 'hr_acro_nano_training_record.PRE_WASH_LOADING';

	
	const PRE_WASH_UNLOADING = 'hr_acro_nano_training_record.PRE_WASH_UNLOADING';

	
	const SOAKING_LOADING = 'hr_acro_nano_training_record.SOAKING_LOADING';

	
	const SOAKING_UNLOADING = 'hr_acro_nano_training_record.SOAKING_UNLOADING';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'DateFrom', 'DateTo', 'EmployeeNo', 'Name', 'Company', 'NoHrs', 'InitialInspection', 'DelabelingJellyRemoval', 'PreWash', 'Loading', 'MachineWash', 'Unloading', 'InprocessVisualInspection', 'Lpc', 'Ic', 'Nvr', 'QaSampleInspection', 'PurgingMachine', 'Packing', 'QualityPolicy', 'SpcAwareness', 'VisualInspection', 'Remarks', 'Verify', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', 'PharmagWasher', 'PvaVmi', 'PreWashLoading', 'PreWashUnloading', 'SoakingLoading', 'SoakingUnloading', ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingRecordPeer::ID, HrAcroNanoTrainingRecordPeer::DATE_TIME, HrAcroNanoTrainingRecordPeer::DATE_FROM, HrAcroNanoTrainingRecordPeer::DATE_TO, HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO, HrAcroNanoTrainingRecordPeer::NAME, HrAcroNanoTrainingRecordPeer::COMPANY, HrAcroNanoTrainingRecordPeer::NO_HRS, HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION, HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL, HrAcroNanoTrainingRecordPeer::PRE_WASH, HrAcroNanoTrainingRecordPeer::LOADING, HrAcroNanoTrainingRecordPeer::MACHINE_WASH, HrAcroNanoTrainingRecordPeer::UNLOADING, HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION, HrAcroNanoTrainingRecordPeer::LPC, HrAcroNanoTrainingRecordPeer::IC, HrAcroNanoTrainingRecordPeer::NVR, HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION, HrAcroNanoTrainingRecordPeer::PURGING_MACHINE, HrAcroNanoTrainingRecordPeer::PACKING, HrAcroNanoTrainingRecordPeer::QUALITY_POLICY, HrAcroNanoTrainingRecordPeer::SPC_AWARENESS, HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION, HrAcroNanoTrainingRecordPeer::REMARKS, HrAcroNanoTrainingRecordPeer::VERIFY, HrAcroNanoTrainingRecordPeer::CREATED_BY, HrAcroNanoTrainingRecordPeer::DATE_CREATED, HrAcroNanoTrainingRecordPeer::MODIFIED_BY, HrAcroNanoTrainingRecordPeer::DATE_MODIFIED, HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER, HrAcroNanoTrainingRecordPeer::PVA_VMI, HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING, HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING, HrAcroNanoTrainingRecordPeer::SOAKING_LOADING, HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'date_from', 'date_to', 'employee_no', 'name', 'company', 'no_hrs', 'initial_inspection', 'delabeling_jelly_removal', 'pre_wash', 'loading', 'machine_wash', 'unloading', 'inprocess_visual_inspection', 'lpc', 'ic', 'nvr', 'qa_sample_inspection', 'purging_machine', 'packing', 'quality_policy', 'spc_awareness', 'visual_inspection', 'remarks', 'verify', 'created_by', 'date_created', 'modified_by', 'date_modified', 'pharmag_washer', 'pva_vmi', 'pre_wash_loading', 'pre_wash_unloading', 'soaking_loading', 'soaking_unloading', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'DateFrom' => 2, 'DateTo' => 3, 'EmployeeNo' => 4, 'Name' => 5, 'Company' => 6, 'NoHrs' => 7, 'InitialInspection' => 8, 'DelabelingJellyRemoval' => 9, 'PreWash' => 10, 'Loading' => 11, 'MachineWash' => 12, 'Unloading' => 13, 'InprocessVisualInspection' => 14, 'Lpc' => 15, 'Ic' => 16, 'Nvr' => 17, 'QaSampleInspection' => 18, 'PurgingMachine' => 19, 'Packing' => 20, 'QualityPolicy' => 21, 'SpcAwareness' => 22, 'VisualInspection' => 23, 'Remarks' => 24, 'Verify' => 25, 'CreatedBy' => 26, 'DateCreated' => 27, 'ModifiedBy' => 28, 'DateModified' => 29, 'PharmagWasher' => 30, 'PvaVmi' => 31, 'PreWashLoading' => 32, 'PreWashUnloading' => 33, 'SoakingLoading' => 34, 'SoakingUnloading' => 35, ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingRecordPeer::ID => 0, HrAcroNanoTrainingRecordPeer::DATE_TIME => 1, HrAcroNanoTrainingRecordPeer::DATE_FROM => 2, HrAcroNanoTrainingRecordPeer::DATE_TO => 3, HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO => 4, HrAcroNanoTrainingRecordPeer::NAME => 5, HrAcroNanoTrainingRecordPeer::COMPANY => 6, HrAcroNanoTrainingRecordPeer::NO_HRS => 7, HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION => 8, HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL => 9, HrAcroNanoTrainingRecordPeer::PRE_WASH => 10, HrAcroNanoTrainingRecordPeer::LOADING => 11, HrAcroNanoTrainingRecordPeer::MACHINE_WASH => 12, HrAcroNanoTrainingRecordPeer::UNLOADING => 13, HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION => 14, HrAcroNanoTrainingRecordPeer::LPC => 15, HrAcroNanoTrainingRecordPeer::IC => 16, HrAcroNanoTrainingRecordPeer::NVR => 17, HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION => 18, HrAcroNanoTrainingRecordPeer::PURGING_MACHINE => 19, HrAcroNanoTrainingRecordPeer::PACKING => 20, HrAcroNanoTrainingRecordPeer::QUALITY_POLICY => 21, HrAcroNanoTrainingRecordPeer::SPC_AWARENESS => 22, HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION => 23, HrAcroNanoTrainingRecordPeer::REMARKS => 24, HrAcroNanoTrainingRecordPeer::VERIFY => 25, HrAcroNanoTrainingRecordPeer::CREATED_BY => 26, HrAcroNanoTrainingRecordPeer::DATE_CREATED => 27, HrAcroNanoTrainingRecordPeer::MODIFIED_BY => 28, HrAcroNanoTrainingRecordPeer::DATE_MODIFIED => 29, HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER => 30, HrAcroNanoTrainingRecordPeer::PVA_VMI => 31, HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING => 32, HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING => 33, HrAcroNanoTrainingRecordPeer::SOAKING_LOADING => 34, HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING => 35, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'date_from' => 2, 'date_to' => 3, 'employee_no' => 4, 'name' => 5, 'company' => 6, 'no_hrs' => 7, 'initial_inspection' => 8, 'delabeling_jelly_removal' => 9, 'pre_wash' => 10, 'loading' => 11, 'machine_wash' => 12, 'unloading' => 13, 'inprocess_visual_inspection' => 14, 'lpc' => 15, 'ic' => 16, 'nvr' => 17, 'qa_sample_inspection' => 18, 'purging_machine' => 19, 'packing' => 20, 'quality_policy' => 21, 'spc_awareness' => 22, 'visual_inspection' => 23, 'remarks' => 24, 'verify' => 25, 'created_by' => 26, 'date_created' => 27, 'modified_by' => 28, 'date_modified' => 29, 'pharmag_washer' => 30, 'pva_vmi' => 31, 'pre_wash_loading' => 32, 'pre_wash_unloading' => 33, 'soaking_loading' => 34, 'soaking_unloading' => 35, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrAcroNanoTrainingRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrAcroNanoTrainingRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrAcroNanoTrainingRecordPeer::getTableMap();
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
		return str_replace(HrAcroNanoTrainingRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::ID);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DATE_TIME);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DATE_FROM);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DATE_TO);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::NAME);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::COMPANY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::NO_HRS);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::INITIAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DELABELING_JELLY_REMOVAL);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PRE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::LOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::MACHINE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::UNLOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::INPROCESS_VISUAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::LPC);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::IC);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::NVR);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::QA_SAMPLE_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PURGING_MACHINE);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PACKING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::QUALITY_POLICY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::SPC_AWARENESS);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::VISUAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::REMARKS);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::VERIFY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::CREATED_BY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PHARMAG_WASHER);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PVA_VMI);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PRE_WASH_LOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::PRE_WASH_UNLOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::SOAKING_LOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::SOAKING_UNLOADING);

	}

	const COUNT = 'COUNT(hr_acro_nano_training_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_acro_nano_training_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrAcroNanoTrainingRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrAcroNanoTrainingRecordPeer::doSelectRS($criteria, $con);
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
		$objects = HrAcroNanoTrainingRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrAcroNanoTrainingRecordPeer::populateObjects(HrAcroNanoTrainingRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrAcroNanoTrainingRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrAcroNanoTrainingRecordPeer::getOMClass();
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
		return HrAcroNanoTrainingRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrAcroNanoTrainingRecordPeer::ID); 

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
			$comparison = $criteria->getComparison(HrAcroNanoTrainingRecordPeer::ID);
			$selectCriteria->add(HrAcroNanoTrainingRecordPeer::ID, $criteria->remove(HrAcroNanoTrainingRecordPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrAcroNanoTrainingRecordPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrAcroNanoTrainingRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrAcroNanoTrainingRecordPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrAcroNanoTrainingRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrAcroNanoTrainingRecordPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrAcroNanoTrainingRecordPeer::DATABASE_NAME, HrAcroNanoTrainingRecordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrAcroNanoTrainingRecordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrAcroNanoTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingRecordPeer::ID, $pk);


		$v = HrAcroNanoTrainingRecordPeer::doSelect($criteria, $con);

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
			$criteria->add(HrAcroNanoTrainingRecordPeer::ID, $pks, Criteria::IN);
			$objs = HrAcroNanoTrainingRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrAcroNanoTrainingRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrAcroNanoTrainingRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrAcroNanoTrainingRecordMapBuilder');
}
