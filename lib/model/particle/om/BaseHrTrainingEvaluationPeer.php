<?php


abstract class BaseHrTrainingEvaluationPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_training_evaluation';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrTrainingEvaluation';

	
	const NUM_COLUMNS = 33;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_training_evaluation.ID';

	
	const HR_TRAINING_RECORD_ID = 'hr_training_evaluation.HR_TRAINING_RECORD_ID';

	
	const EMPLOYEE_NO = 'hr_training_evaluation.EMPLOYEE_NO';

	
	const NAME = 'hr_training_evaluation.NAME';

	
	const COMPANY = 'hr_training_evaluation.COMPANY';

	
	const NO_HRS = 'hr_training_evaluation.NO_HRS';

	
	const DATE_TIME = 'hr_training_evaluation.DATE_TIME';

	
	const BASIC_TRAINING = 'hr_training_evaluation.BASIC_TRAINING';

	
	const SOIL_SORTING = 'hr_training_evaluation.SOIL_SORTING';

	
	const LOADING_WASHER = 'hr_training_evaluation.LOADING_WASHER';

	
	const UNLOADING_WASHER = 'hr_training_evaluation.UNLOADING_WASHER';

	
	const CLEANROOM_DRYER = 'hr_training_evaluation.CLEANROOM_DRYER';

	
	const FOLDING = 'hr_training_evaluation.FOLDING';

	
	const VACUUM_PACKER = 'hr_training_evaluation.VACUUM_PACKER';

	
	const AIR_PARTICLE_COUNTER = 'hr_training_evaluation.AIR_PARTICLE_COUNTER';

	
	const HELMKE_DRUM = 'hr_training_evaluation.HELMKE_DRUM';

	
	const WATER_PARTICLE_COUNTER = 'hr_training_evaluation.WATER_PARTICLE_COUNTER';

	
	const THERMO_PATCH = 'hr_training_evaluation.THERMO_PATCH';

	
	const SEWING_MACHINE = 'hr_training_evaluation.SEWING_MACHINE';

	
	const STUD_MACHINE = 'hr_training_evaluation.STUD_MACHINE';

	
	const DISPATCH = 'hr_training_evaluation.DISPATCH';

	
	const SHOE_DRYER = 'hr_training_evaluation.SHOE_DRYER';

	
	const SHOE_WASHER = 'hr_training_evaluation.SHOE_WASHER';

	
	const EXTERNAL_COURSE = 'hr_training_evaluation.EXTERNAL_COURSE';

	
	const ESD_MEASUREMENT = 'hr_training_evaluation.ESD_MEASUREMENT';

	
	const BEYOND_REPAIR = 'hr_training_evaluation.BEYOND_REPAIR';

	
	const BIO_BURDEN_TEST = 'hr_training_evaluation.BIO_BURDEN_TEST';

	
	const REMARKS = 'hr_training_evaluation.REMARKS';

	
	const EVALUATED = 'hr_training_evaluation.EVALUATED';

	
	const CREATED_BY = 'hr_training_evaluation.CREATED_BY';

	
	const DATE_CREATED = 'hr_training_evaluation.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_training_evaluation.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_training_evaluation.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'HrTrainingRecordId', 'EmployeeNo', 'Name', 'Company', 'NoHrs', 'DateTime', 'BasicTraining', 'SoilSorting', 'LoadingWasher', 'UnloadingWasher', 'CleanroomDryer', 'Folding', 'VacuumPacker', 'AirParticleCounter', 'HelmkeDrum', 'WaterParticleCounter', 'ThermoPatch', 'SewingMachine', 'StudMachine', 'Dispatch', 'ShoeDryer', 'ShoeWasher', 'ExternalCourse', 'EsdMeasurement', 'BeyondRepair', 'BioBurdenTest', 'Remarks', 'Evaluated', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrTrainingEvaluationPeer::ID, HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID, HrTrainingEvaluationPeer::EMPLOYEE_NO, HrTrainingEvaluationPeer::NAME, HrTrainingEvaluationPeer::COMPANY, HrTrainingEvaluationPeer::NO_HRS, HrTrainingEvaluationPeer::DATE_TIME, HrTrainingEvaluationPeer::BASIC_TRAINING, HrTrainingEvaluationPeer::SOIL_SORTING, HrTrainingEvaluationPeer::LOADING_WASHER, HrTrainingEvaluationPeer::UNLOADING_WASHER, HrTrainingEvaluationPeer::CLEANROOM_DRYER, HrTrainingEvaluationPeer::FOLDING, HrTrainingEvaluationPeer::VACUUM_PACKER, HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER, HrTrainingEvaluationPeer::HELMKE_DRUM, HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER, HrTrainingEvaluationPeer::THERMO_PATCH, HrTrainingEvaluationPeer::SEWING_MACHINE, HrTrainingEvaluationPeer::STUD_MACHINE, HrTrainingEvaluationPeer::DISPATCH, HrTrainingEvaluationPeer::SHOE_DRYER, HrTrainingEvaluationPeer::SHOE_WASHER, HrTrainingEvaluationPeer::EXTERNAL_COURSE, HrTrainingEvaluationPeer::ESD_MEASUREMENT, HrTrainingEvaluationPeer::BEYOND_REPAIR, HrTrainingEvaluationPeer::BIO_BURDEN_TEST, HrTrainingEvaluationPeer::REMARKS, HrTrainingEvaluationPeer::EVALUATED, HrTrainingEvaluationPeer::CREATED_BY, HrTrainingEvaluationPeer::DATE_CREATED, HrTrainingEvaluationPeer::MODIFIED_BY, HrTrainingEvaluationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'hr_training_record_id', 'employee_no', 'name', 'company', 'no_hrs', 'date_time', 'basic_training', 'soil_sorting', 'loading_washer', 'unloading_washer', 'cleanroom_dryer', 'folding', 'vacuum_packer', 'air_particle_counter', 'helmke_drum', 'water_particle_counter', 'thermo_patch', 'sewing_machine', 'stud_machine', 'dispatch', 'shoe_dryer', 'shoe_washer', 'external_course', 'esd_measurement', 'beyond_repair', 'bio_burden_test', 'remarks', 'evaluated', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'HrTrainingRecordId' => 1, 'EmployeeNo' => 2, 'Name' => 3, 'Company' => 4, 'NoHrs' => 5, 'DateTime' => 6, 'BasicTraining' => 7, 'SoilSorting' => 8, 'LoadingWasher' => 9, 'UnloadingWasher' => 10, 'CleanroomDryer' => 11, 'Folding' => 12, 'VacuumPacker' => 13, 'AirParticleCounter' => 14, 'HelmkeDrum' => 15, 'WaterParticleCounter' => 16, 'ThermoPatch' => 17, 'SewingMachine' => 18, 'StudMachine' => 19, 'Dispatch' => 20, 'ShoeDryer' => 21, 'ShoeWasher' => 22, 'ExternalCourse' => 23, 'EsdMeasurement' => 24, 'BeyondRepair' => 25, 'BioBurdenTest' => 26, 'Remarks' => 27, 'Evaluated' => 28, 'CreatedBy' => 29, 'DateCreated' => 30, 'ModifiedBy' => 31, 'DateModified' => 32, ),
		BasePeer::TYPE_COLNAME => array (HrTrainingEvaluationPeer::ID => 0, HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID => 1, HrTrainingEvaluationPeer::EMPLOYEE_NO => 2, HrTrainingEvaluationPeer::NAME => 3, HrTrainingEvaluationPeer::COMPANY => 4, HrTrainingEvaluationPeer::NO_HRS => 5, HrTrainingEvaluationPeer::DATE_TIME => 6, HrTrainingEvaluationPeer::BASIC_TRAINING => 7, HrTrainingEvaluationPeer::SOIL_SORTING => 8, HrTrainingEvaluationPeer::LOADING_WASHER => 9, HrTrainingEvaluationPeer::UNLOADING_WASHER => 10, HrTrainingEvaluationPeer::CLEANROOM_DRYER => 11, HrTrainingEvaluationPeer::FOLDING => 12, HrTrainingEvaluationPeer::VACUUM_PACKER => 13, HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER => 14, HrTrainingEvaluationPeer::HELMKE_DRUM => 15, HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER => 16, HrTrainingEvaluationPeer::THERMO_PATCH => 17, HrTrainingEvaluationPeer::SEWING_MACHINE => 18, HrTrainingEvaluationPeer::STUD_MACHINE => 19, HrTrainingEvaluationPeer::DISPATCH => 20, HrTrainingEvaluationPeer::SHOE_DRYER => 21, HrTrainingEvaluationPeer::SHOE_WASHER => 22, HrTrainingEvaluationPeer::EXTERNAL_COURSE => 23, HrTrainingEvaluationPeer::ESD_MEASUREMENT => 24, HrTrainingEvaluationPeer::BEYOND_REPAIR => 25, HrTrainingEvaluationPeer::BIO_BURDEN_TEST => 26, HrTrainingEvaluationPeer::REMARKS => 27, HrTrainingEvaluationPeer::EVALUATED => 28, HrTrainingEvaluationPeer::CREATED_BY => 29, HrTrainingEvaluationPeer::DATE_CREATED => 30, HrTrainingEvaluationPeer::MODIFIED_BY => 31, HrTrainingEvaluationPeer::DATE_MODIFIED => 32, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'hr_training_record_id' => 1, 'employee_no' => 2, 'name' => 3, 'company' => 4, 'no_hrs' => 5, 'date_time' => 6, 'basic_training' => 7, 'soil_sorting' => 8, 'loading_washer' => 9, 'unloading_washer' => 10, 'cleanroom_dryer' => 11, 'folding' => 12, 'vacuum_packer' => 13, 'air_particle_counter' => 14, 'helmke_drum' => 15, 'water_particle_counter' => 16, 'thermo_patch' => 17, 'sewing_machine' => 18, 'stud_machine' => 19, 'dispatch' => 20, 'shoe_dryer' => 21, 'shoe_washer' => 22, 'external_course' => 23, 'esd_measurement' => 24, 'beyond_repair' => 25, 'bio_burden_test' => 26, 'remarks' => 27, 'evaluated' => 28, 'created_by' => 29, 'date_created' => 30, 'modified_by' => 31, 'date_modified' => 32, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrTrainingEvaluationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrTrainingEvaluationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrTrainingEvaluationPeer::getTableMap();
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
		return str_replace(HrTrainingEvaluationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::ID);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::HR_TRAINING_RECORD_ID);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::NAME);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::COMPANY);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::NO_HRS);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::DATE_TIME);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::BASIC_TRAINING);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::SOIL_SORTING);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::LOADING_WASHER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::UNLOADING_WASHER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::CLEANROOM_DRYER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::FOLDING);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::VACUUM_PACKER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::AIR_PARTICLE_COUNTER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::HELMKE_DRUM);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::WATER_PARTICLE_COUNTER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::THERMO_PATCH);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::SEWING_MACHINE);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::STUD_MACHINE);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::DISPATCH);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::SHOE_DRYER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::SHOE_WASHER);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::EXTERNAL_COURSE);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::ESD_MEASUREMENT);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::BEYOND_REPAIR);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::BIO_BURDEN_TEST);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::REMARKS);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::EVALUATED);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::CREATED_BY);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrTrainingEvaluationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_training_evaluation.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_training_evaluation.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrTrainingEvaluationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrTrainingEvaluationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrTrainingEvaluationPeer::doSelectRS($criteria, $con);
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
		$objects = HrTrainingEvaluationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrTrainingEvaluationPeer::populateObjects(HrTrainingEvaluationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrTrainingEvaluationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrTrainingEvaluationPeer::getOMClass();
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
		return HrTrainingEvaluationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrTrainingEvaluationPeer::ID); 

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
			$comparison = $criteria->getComparison(HrTrainingEvaluationPeer::ID);
			$selectCriteria->add(HrTrainingEvaluationPeer::ID, $criteria->remove(HrTrainingEvaluationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrTrainingEvaluationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrTrainingEvaluationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrTrainingEvaluation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrTrainingEvaluationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrTrainingEvaluation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrTrainingEvaluationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrTrainingEvaluationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrTrainingEvaluationPeer::DATABASE_NAME, HrTrainingEvaluationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrTrainingEvaluationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrTrainingEvaluationPeer::DATABASE_NAME);

		$criteria->add(HrTrainingEvaluationPeer::ID, $pk);


		$v = HrTrainingEvaluationPeer::doSelect($criteria, $con);

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
			$criteria->add(HrTrainingEvaluationPeer::ID, $pks, Criteria::IN);
			$objs = HrTrainingEvaluationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrTrainingEvaluationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrTrainingEvaluationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrTrainingEvaluationMapBuilder');
}
