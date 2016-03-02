<?php


abstract class BaseHrAcroNanoTrainingRecordSubstratePeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_acro_nano_training_record_substrate';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrAcroNanoTrainingRecordSubstrate';

	
	const NUM_COLUMNS = 22;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_acro_nano_training_record_substrate.ID';

	
	const DATE_TIME = 'hr_acro_nano_training_record_substrate.DATE_TIME';

	
	const DATE_NEXT_TIME = 'hr_acro_nano_training_record_substrate.DATE_NEXT_TIME';

	
	const EMPLOYEE_NO = 'hr_acro_nano_training_record_substrate.EMPLOYEE_NO';

	
	const TYPE_OF_TRAINING = 'hr_acro_nano_training_record_substrate.TYPE_OF_TRAINING';

	
	const POLICY_AND_OBJECTIVES = 'hr_acro_nano_training_record_substrate.POLICY_AND_OBJECTIVES';

	
	const CLEANROOM_DISCIPLINE = 'hr_acro_nano_training_record_substrate.CLEANROOM_DISCIPLINE';

	
	const INITIAL_INSPECTION = 'hr_acro_nano_training_record_substrate.INITIAL_INSPECTION';

	
	const DELABELING_JELLY_REMOVAL = 'hr_acro_nano_training_record_substrate.DELABELING_JELLY_REMOVAL';

	
	const PRE_WASH = 'hr_acro_nano_training_record_substrate.PRE_WASH';

	
	const LOADING = 'hr_acro_nano_training_record_substrate.LOADING';

	
	const MACHINE_WASH = 'hr_acro_nano_training_record_substrate.MACHINE_WASH';

	
	const UNLOADING = 'hr_acro_nano_training_record_substrate.UNLOADING';

	
	const INPROCESS_VISUAL_INSPECTION = 'hr_acro_nano_training_record_substrate.INPROCESS_VISUAL_INSPECTION';

	
	const LPC = 'hr_acro_nano_training_record_substrate.LPC';

	
	const IC = 'hr_acro_nano_training_record_substrate.IC';

	
	const NVR = 'hr_acro_nano_training_record_substrate.NVR';

	
	const QA_SAMPLE_INSPECTION = 'hr_acro_nano_training_record_substrate.QA_SAMPLE_INSPECTION';

	
	const PACKING = 'hr_acro_nano_training_record_substrate.PACKING';

	
	const REMARKS = 'hr_acro_nano_training_record_substrate.REMARKS';

	
	const VERIFY = 'hr_acro_nano_training_record_substrate.VERIFY';

	
	const LAST_ISSUE_DATE = 'hr_acro_nano_training_record_substrate.LAST_ISSUE_DATE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'DateNextTime', 'EmployeeNo', 'TypeOfTraining', 'PolicyAndObjectives', 'CleanroomDiscipline', 'InitialInspection', 'DelabelingJellyRemoval', 'PreWash', 'Loading', 'MachineWash', 'Unloading', 'InprocessVisualInspection', 'Lpc', 'Ic', 'Nvr', 'QaSampleInspection', 'Packing', 'Remarks', 'Verify', 'LastIssueDate', ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingRecordSubstratePeer::ID, HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME, HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME, HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO, HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING, HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES, HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE, HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION, HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL, HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH, HrAcroNanoTrainingRecordSubstratePeer::LOADING, HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH, HrAcroNanoTrainingRecordSubstratePeer::UNLOADING, HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION, HrAcroNanoTrainingRecordSubstratePeer::LPC, HrAcroNanoTrainingRecordSubstratePeer::IC, HrAcroNanoTrainingRecordSubstratePeer::NVR, HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION, HrAcroNanoTrainingRecordSubstratePeer::PACKING, HrAcroNanoTrainingRecordSubstratePeer::REMARKS, HrAcroNanoTrainingRecordSubstratePeer::VERIFY, HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'date_next_time', 'employee_no', 'type_of_training', 'policy_and_objectives', 'cleanroom_discipline', 'initial_inspection', 'delabeling_jelly_removal', 'pre_wash', 'loading', 'machine_wash', 'unloading', 'inprocess_visual_inspection', 'lpc', 'ic', 'nvr', 'qa_sample_inspection', 'packing', 'remarks', 'verify', 'last_issue_date', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'DateNextTime' => 2, 'EmployeeNo' => 3, 'TypeOfTraining' => 4, 'PolicyAndObjectives' => 5, 'CleanroomDiscipline' => 6, 'InitialInspection' => 7, 'DelabelingJellyRemoval' => 8, 'PreWash' => 9, 'Loading' => 10, 'MachineWash' => 11, 'Unloading' => 12, 'InprocessVisualInspection' => 13, 'Lpc' => 14, 'Ic' => 15, 'Nvr' => 16, 'QaSampleInspection' => 17, 'Packing' => 18, 'Remarks' => 19, 'Verify' => 20, 'LastIssueDate' => 21, ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingRecordSubstratePeer::ID => 0, HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME => 1, HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME => 2, HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO => 3, HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING => 4, HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES => 5, HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE => 6, HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION => 7, HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL => 8, HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH => 9, HrAcroNanoTrainingRecordSubstratePeer::LOADING => 10, HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH => 11, HrAcroNanoTrainingRecordSubstratePeer::UNLOADING => 12, HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION => 13, HrAcroNanoTrainingRecordSubstratePeer::LPC => 14, HrAcroNanoTrainingRecordSubstratePeer::IC => 15, HrAcroNanoTrainingRecordSubstratePeer::NVR => 16, HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION => 17, HrAcroNanoTrainingRecordSubstratePeer::PACKING => 18, HrAcroNanoTrainingRecordSubstratePeer::REMARKS => 19, HrAcroNanoTrainingRecordSubstratePeer::VERIFY => 20, HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE => 21, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'date_next_time' => 2, 'employee_no' => 3, 'type_of_training' => 4, 'policy_and_objectives' => 5, 'cleanroom_discipline' => 6, 'initial_inspection' => 7, 'delabeling_jelly_removal' => 8, 'pre_wash' => 9, 'loading' => 10, 'machine_wash' => 11, 'unloading' => 12, 'inprocess_visual_inspection' => 13, 'lpc' => 14, 'ic' => 15, 'nvr' => 16, 'qa_sample_inspection' => 17, 'packing' => 18, 'remarks' => 19, 'verify' => 20, 'last_issue_date' => 21, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrAcroNanoTrainingRecordSubstrateMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrAcroNanoTrainingRecordSubstrateMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrAcroNanoTrainingRecordSubstratePeer::getTableMap();
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
		return str_replace(HrAcroNanoTrainingRecordSubstratePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::ID);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::DATE_TIME);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::DATE_NEXT_TIME);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::TYPE_OF_TRAINING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::POLICY_AND_OBJECTIVES);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::CLEANROOM_DISCIPLINE);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::INITIAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::DELABELING_JELLY_REMOVAL);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::PRE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::LOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::MACHINE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::UNLOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::INPROCESS_VISUAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::LPC);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::IC);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::NVR);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::QA_SAMPLE_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::PACKING);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::REMARKS);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::VERIFY);

		$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::LAST_ISSUE_DATE);

	}

	const COUNT = 'COUNT(hr_acro_nano_training_record_substrate.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_acro_nano_training_record_substrate.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrAcroNanoTrainingRecordSubstratePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrAcroNanoTrainingRecordSubstratePeer::doSelectRS($criteria, $con);
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
		$objects = HrAcroNanoTrainingRecordSubstratePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrAcroNanoTrainingRecordSubstratePeer::populateObjects(HrAcroNanoTrainingRecordSubstratePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrAcroNanoTrainingRecordSubstratePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrAcroNanoTrainingRecordSubstratePeer::getOMClass();
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
		return HrAcroNanoTrainingRecordSubstratePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrAcroNanoTrainingRecordSubstratePeer::ID); 

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
			$comparison = $criteria->getComparison(HrAcroNanoTrainingRecordSubstratePeer::ID);
			$selectCriteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, $criteria->remove(HrAcroNanoTrainingRecordSubstratePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrAcroNanoTrainingRecordSubstratePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrAcroNanoTrainingRecordSubstrate) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrAcroNanoTrainingRecordSubstrate $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrAcroNanoTrainingRecordSubstratePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME, HrAcroNanoTrainingRecordSubstratePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrAcroNanoTrainingRecordSubstratePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrAcroNanoTrainingRecordSubstratePeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, $pk);


		$v = HrAcroNanoTrainingRecordSubstratePeer::doSelect($criteria, $con);

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
			$criteria->add(HrAcroNanoTrainingRecordSubstratePeer::ID, $pks, Criteria::IN);
			$objs = HrAcroNanoTrainingRecordSubstratePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrAcroNanoTrainingRecordSubstratePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrAcroNanoTrainingRecordSubstrateMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrAcroNanoTrainingRecordSubstrateMapBuilder');
}
