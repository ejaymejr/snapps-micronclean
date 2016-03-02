<?php


abstract class BaseHrTrainingRecordPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_training_record';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrTrainingRecord';

	
	const NUM_COLUMNS = 35;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_training_record.ID';

	
	const DATE_TIME = 'hr_training_record.DATE_TIME';

	
	const DATE_FROM = 'hr_training_record.DATE_FROM';

	
	const DATE_TO = 'hr_training_record.DATE_TO';

	
	const EMPLOYEE_NO = 'hr_training_record.EMPLOYEE_NO';

	
	const NAME = 'hr_training_record.NAME';

	
	const COMMENCE_DATE = 'hr_training_record.COMMENCE_DATE';

	
	const COMPANY = 'hr_training_record.COMPANY';

	
	const NO_HRS = 'hr_training_record.NO_HRS';

	
	const BASIC_TRAINING = 'hr_training_record.BASIC_TRAINING';

	
	const SOIL_SORTING = 'hr_training_record.SOIL_SORTING';

	
	const LOADING_WASHER = 'hr_training_record.LOADING_WASHER';

	
	const UNLOADING_WASHER = 'hr_training_record.UNLOADING_WASHER';

	
	const CLEANROOM_DRYER = 'hr_training_record.CLEANROOM_DRYER';

	
	const FOLDING = 'hr_training_record.FOLDING';

	
	const VACUUM_PACKER = 'hr_training_record.VACUUM_PACKER';

	
	const AIR_PARTICLE_COUNTER = 'hr_training_record.AIR_PARTICLE_COUNTER';

	
	const HELMKE_DRUM = 'hr_training_record.HELMKE_DRUM';

	
	const WATER_PARTICLE_COUNTER = 'hr_training_record.WATER_PARTICLE_COUNTER';

	
	const THERMO_PATCH = 'hr_training_record.THERMO_PATCH';

	
	const SEWING_MACHINE = 'hr_training_record.SEWING_MACHINE';

	
	const STUD_MACHINE = 'hr_training_record.STUD_MACHINE';

	
	const DISPATCH = 'hr_training_record.DISPATCH';

	
	const SHOE_DRYER = 'hr_training_record.SHOE_DRYER';

	
	const SHOE_WASHER = 'hr_training_record.SHOE_WASHER';

	
	const ESD_MEASUREMENT = 'hr_training_record.ESD_MEASUREMENT';

	
	const BEYOND_REPAIR = 'hr_training_record.BEYOND_REPAIR';

	
	const BIO_BURDEN_TEST = 'hr_training_record.BIO_BURDEN_TEST';

	
	const EXTERNAL_COURSE = 'hr_training_record.EXTERNAL_COURSE';

	
	const REMARKS = 'hr_training_record.REMARKS';

	
	const VERIFY = 'hr_training_record.VERIFY';

	
	const CREATED_BY = 'hr_training_record.CREATED_BY';

	
	const DATE_CREATED = 'hr_training_record.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_training_record.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_training_record.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'DateFrom', 'DateTo', 'EmployeeNo', 'Name', 'CommenceDate', 'Company', 'NoHrs', 'BasicTraining', 'SoilSorting', 'LoadingWasher', 'UnloadingWasher', 'CleanroomDryer', 'Folding', 'VacuumPacker', 'AirParticleCounter', 'HelmkeDrum', 'WaterParticleCounter', 'ThermoPatch', 'SewingMachine', 'StudMachine', 'Dispatch', 'ShoeDryer', 'ShoeWasher', 'EsdMeasurement', 'BeyondRepair', 'BioBurdenTest', 'ExternalCourse', 'Remarks', 'Verify', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrTrainingRecordPeer::ID, HrTrainingRecordPeer::DATE_TIME, HrTrainingRecordPeer::DATE_FROM, HrTrainingRecordPeer::DATE_TO, HrTrainingRecordPeer::EMPLOYEE_NO, HrTrainingRecordPeer::NAME, HrTrainingRecordPeer::COMMENCE_DATE, HrTrainingRecordPeer::COMPANY, HrTrainingRecordPeer::NO_HRS, HrTrainingRecordPeer::BASIC_TRAINING, HrTrainingRecordPeer::SOIL_SORTING, HrTrainingRecordPeer::LOADING_WASHER, HrTrainingRecordPeer::UNLOADING_WASHER, HrTrainingRecordPeer::CLEANROOM_DRYER, HrTrainingRecordPeer::FOLDING, HrTrainingRecordPeer::VACUUM_PACKER, HrTrainingRecordPeer::AIR_PARTICLE_COUNTER, HrTrainingRecordPeer::HELMKE_DRUM, HrTrainingRecordPeer::WATER_PARTICLE_COUNTER, HrTrainingRecordPeer::THERMO_PATCH, HrTrainingRecordPeer::SEWING_MACHINE, HrTrainingRecordPeer::STUD_MACHINE, HrTrainingRecordPeer::DISPATCH, HrTrainingRecordPeer::SHOE_DRYER, HrTrainingRecordPeer::SHOE_WASHER, HrTrainingRecordPeer::ESD_MEASUREMENT, HrTrainingRecordPeer::BEYOND_REPAIR, HrTrainingRecordPeer::BIO_BURDEN_TEST, HrTrainingRecordPeer::EXTERNAL_COURSE, HrTrainingRecordPeer::REMARKS, HrTrainingRecordPeer::VERIFY, HrTrainingRecordPeer::CREATED_BY, HrTrainingRecordPeer::DATE_CREATED, HrTrainingRecordPeer::MODIFIED_BY, HrTrainingRecordPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'date_from', 'date_to', 'employee_no', 'name', 'commence_date', 'company', 'no_hrs', 'basic_training', 'soil_sorting', 'loading_washer', 'unloading_washer', 'cleanroom_dryer', 'folding', 'vacuum_packer', 'air_particle_counter', 'helmke_drum', 'water_particle_counter', 'thermo_patch', 'sewing_machine', 'stud_machine', 'dispatch', 'shoe_dryer', 'shoe_washer', 'esd_measurement', 'beyond_repair', 'bio_burden_test', 'external_course', 'remarks', 'verify', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'DateFrom' => 2, 'DateTo' => 3, 'EmployeeNo' => 4, 'Name' => 5, 'CommenceDate' => 6, 'Company' => 7, 'NoHrs' => 8, 'BasicTraining' => 9, 'SoilSorting' => 10, 'LoadingWasher' => 11, 'UnloadingWasher' => 12, 'CleanroomDryer' => 13, 'Folding' => 14, 'VacuumPacker' => 15, 'AirParticleCounter' => 16, 'HelmkeDrum' => 17, 'WaterParticleCounter' => 18, 'ThermoPatch' => 19, 'SewingMachine' => 20, 'StudMachine' => 21, 'Dispatch' => 22, 'ShoeDryer' => 23, 'ShoeWasher' => 24, 'EsdMeasurement' => 25, 'BeyondRepair' => 26, 'BioBurdenTest' => 27, 'ExternalCourse' => 28, 'Remarks' => 29, 'Verify' => 30, 'CreatedBy' => 31, 'DateCreated' => 32, 'ModifiedBy' => 33, 'DateModified' => 34, ),
		BasePeer::TYPE_COLNAME => array (HrTrainingRecordPeer::ID => 0, HrTrainingRecordPeer::DATE_TIME => 1, HrTrainingRecordPeer::DATE_FROM => 2, HrTrainingRecordPeer::DATE_TO => 3, HrTrainingRecordPeer::EMPLOYEE_NO => 4, HrTrainingRecordPeer::NAME => 5, HrTrainingRecordPeer::COMMENCE_DATE => 6, HrTrainingRecordPeer::COMPANY => 7, HrTrainingRecordPeer::NO_HRS => 8, HrTrainingRecordPeer::BASIC_TRAINING => 9, HrTrainingRecordPeer::SOIL_SORTING => 10, HrTrainingRecordPeer::LOADING_WASHER => 11, HrTrainingRecordPeer::UNLOADING_WASHER => 12, HrTrainingRecordPeer::CLEANROOM_DRYER => 13, HrTrainingRecordPeer::FOLDING => 14, HrTrainingRecordPeer::VACUUM_PACKER => 15, HrTrainingRecordPeer::AIR_PARTICLE_COUNTER => 16, HrTrainingRecordPeer::HELMKE_DRUM => 17, HrTrainingRecordPeer::WATER_PARTICLE_COUNTER => 18, HrTrainingRecordPeer::THERMO_PATCH => 19, HrTrainingRecordPeer::SEWING_MACHINE => 20, HrTrainingRecordPeer::STUD_MACHINE => 21, HrTrainingRecordPeer::DISPATCH => 22, HrTrainingRecordPeer::SHOE_DRYER => 23, HrTrainingRecordPeer::SHOE_WASHER => 24, HrTrainingRecordPeer::ESD_MEASUREMENT => 25, HrTrainingRecordPeer::BEYOND_REPAIR => 26, HrTrainingRecordPeer::BIO_BURDEN_TEST => 27, HrTrainingRecordPeer::EXTERNAL_COURSE => 28, HrTrainingRecordPeer::REMARKS => 29, HrTrainingRecordPeer::VERIFY => 30, HrTrainingRecordPeer::CREATED_BY => 31, HrTrainingRecordPeer::DATE_CREATED => 32, HrTrainingRecordPeer::MODIFIED_BY => 33, HrTrainingRecordPeer::DATE_MODIFIED => 34, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'date_from' => 2, 'date_to' => 3, 'employee_no' => 4, 'name' => 5, 'commence_date' => 6, 'company' => 7, 'no_hrs' => 8, 'basic_training' => 9, 'soil_sorting' => 10, 'loading_washer' => 11, 'unloading_washer' => 12, 'cleanroom_dryer' => 13, 'folding' => 14, 'vacuum_packer' => 15, 'air_particle_counter' => 16, 'helmke_drum' => 17, 'water_particle_counter' => 18, 'thermo_patch' => 19, 'sewing_machine' => 20, 'stud_machine' => 21, 'dispatch' => 22, 'shoe_dryer' => 23, 'shoe_washer' => 24, 'esd_measurement' => 25, 'beyond_repair' => 26, 'bio_burden_test' => 27, 'external_course' => 28, 'remarks' => 29, 'verify' => 30, 'created_by' => 31, 'date_created' => 32, 'modified_by' => 33, 'date_modified' => 34, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrTrainingRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrTrainingRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrTrainingRecordPeer::getTableMap();
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
		return str_replace(HrTrainingRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrTrainingRecordPeer::ID);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DATE_TIME);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DATE_FROM);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DATE_TO);

		$criteria->addSelectColumn(HrTrainingRecordPeer::EMPLOYEE_NO);

		$criteria->addSelectColumn(HrTrainingRecordPeer::NAME);

		$criteria->addSelectColumn(HrTrainingRecordPeer::COMMENCE_DATE);

		$criteria->addSelectColumn(HrTrainingRecordPeer::COMPANY);

		$criteria->addSelectColumn(HrTrainingRecordPeer::NO_HRS);

		$criteria->addSelectColumn(HrTrainingRecordPeer::BASIC_TRAINING);

		$criteria->addSelectColumn(HrTrainingRecordPeer::SOIL_SORTING);

		$criteria->addSelectColumn(HrTrainingRecordPeer::LOADING_WASHER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::UNLOADING_WASHER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::CLEANROOM_DRYER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::FOLDING);

		$criteria->addSelectColumn(HrTrainingRecordPeer::VACUUM_PACKER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::AIR_PARTICLE_COUNTER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::HELMKE_DRUM);

		$criteria->addSelectColumn(HrTrainingRecordPeer::WATER_PARTICLE_COUNTER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::THERMO_PATCH);

		$criteria->addSelectColumn(HrTrainingRecordPeer::SEWING_MACHINE);

		$criteria->addSelectColumn(HrTrainingRecordPeer::STUD_MACHINE);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DISPATCH);

		$criteria->addSelectColumn(HrTrainingRecordPeer::SHOE_DRYER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::SHOE_WASHER);

		$criteria->addSelectColumn(HrTrainingRecordPeer::ESD_MEASUREMENT);

		$criteria->addSelectColumn(HrTrainingRecordPeer::BEYOND_REPAIR);

		$criteria->addSelectColumn(HrTrainingRecordPeer::BIO_BURDEN_TEST);

		$criteria->addSelectColumn(HrTrainingRecordPeer::EXTERNAL_COURSE);

		$criteria->addSelectColumn(HrTrainingRecordPeer::REMARKS);

		$criteria->addSelectColumn(HrTrainingRecordPeer::VERIFY);

		$criteria->addSelectColumn(HrTrainingRecordPeer::CREATED_BY);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrTrainingRecordPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrTrainingRecordPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_training_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_training_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrTrainingRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrTrainingRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrTrainingRecordPeer::doSelectRS($criteria, $con);
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
		$objects = HrTrainingRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrTrainingRecordPeer::populateObjects(HrTrainingRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrTrainingRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrTrainingRecordPeer::getOMClass();
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
		return HrTrainingRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrTrainingRecordPeer::ID); 

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
			$comparison = $criteria->getComparison(HrTrainingRecordPeer::ID);
			$selectCriteria->add(HrTrainingRecordPeer::ID, $criteria->remove(HrTrainingRecordPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrTrainingRecordPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrTrainingRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrTrainingRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrTrainingRecordPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrTrainingRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrTrainingRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrTrainingRecordPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrTrainingRecordPeer::DATABASE_NAME, HrTrainingRecordPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrTrainingRecordPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrTrainingRecordPeer::DATABASE_NAME);

		$criteria->add(HrTrainingRecordPeer::ID, $pk);


		$v = HrTrainingRecordPeer::doSelect($criteria, $con);

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
			$criteria->add(HrTrainingRecordPeer::ID, $pks, Criteria::IN);
			$objs = HrTrainingRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrTrainingRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrTrainingRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrTrainingRecordMapBuilder');
}
