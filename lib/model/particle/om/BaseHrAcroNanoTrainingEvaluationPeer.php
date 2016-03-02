<?php


abstract class BaseHrAcroNanoTrainingEvaluationPeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'hr_acro_nano_training_evaluation';

	
	const CLASS_DEFAULT = 'lib.model.particle.HrAcroNanoTrainingEvaluation';

	
	const NUM_COLUMNS = 20;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'hr_acro_nano_training_evaluation.ID';

	
	const DATE_TIME = 'hr_acro_nano_training_evaluation.DATE_TIME';

	
	const INITIAL_INSPECTION = 'hr_acro_nano_training_evaluation.INITIAL_INSPECTION';

	
	const DELABELING_JELLY_REMOVAL = 'hr_acro_nano_training_evaluation.DELABELING_JELLY_REMOVAL';

	
	const PRE_WASH = 'hr_acro_nano_training_evaluation.PRE_WASH';

	
	const LOADING = 'hr_acro_nano_training_evaluation.LOADING';

	
	const MACHINE_WASH = 'hr_acro_nano_training_evaluation.MACHINE_WASH';

	
	const UNLOADING = 'hr_acro_nano_training_evaluation.UNLOADING';

	
	const INPROCESS_VISUAL_INSPECTION = 'hr_acro_nano_training_evaluation.INPROCESS_VISUAL_INSPECTION';

	
	const LPC = 'hr_acro_nano_training_evaluation.LPC';

	
	const IC = 'hr_acro_nano_training_evaluation.IC';

	
	const NVR = 'hr_acro_nano_training_evaluation.NVR';

	
	const QA_SAMPLE_INSPECTION = 'hr_acro_nano_training_evaluation.QA_SAMPLE_INSPECTION';

	
	const PACKING = 'hr_acro_nano_training_evaluation.PACKING';

	
	const REMARKS = 'hr_acro_nano_training_evaluation.REMARKS';

	
	const EVALUATED = 'hr_acro_nano_training_evaluation.EVALUATED';

	
	const CREATED_BY = 'hr_acro_nano_training_evaluation.CREATED_BY';

	
	const DATE_CREATED = 'hr_acro_nano_training_evaluation.DATE_CREATED';

	
	const MODIFIED_BY = 'hr_acro_nano_training_evaluation.MODIFIED_BY';

	
	const DATE_MODIFIED = 'hr_acro_nano_training_evaluation.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'InitialInspection', 'DelabelingJellyRemoval', 'PreWash', 'Loading', 'MachineWash', 'Unloading', 'InprocessVisualInspection', 'Lpc', 'Ic', 'Nvr', 'QaSampleInspection', 'Packing', 'Remarks', 'Evaluated', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingEvaluationPeer::ID, HrAcroNanoTrainingEvaluationPeer::DATE_TIME, HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION, HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL, HrAcroNanoTrainingEvaluationPeer::PRE_WASH, HrAcroNanoTrainingEvaluationPeer::LOADING, HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH, HrAcroNanoTrainingEvaluationPeer::UNLOADING, HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION, HrAcroNanoTrainingEvaluationPeer::LPC, HrAcroNanoTrainingEvaluationPeer::IC, HrAcroNanoTrainingEvaluationPeer::NVR, HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION, HrAcroNanoTrainingEvaluationPeer::PACKING, HrAcroNanoTrainingEvaluationPeer::REMARKS, HrAcroNanoTrainingEvaluationPeer::EVALUATED, HrAcroNanoTrainingEvaluationPeer::CREATED_BY, HrAcroNanoTrainingEvaluationPeer::DATE_CREATED, HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY, HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'initial_inspection', 'delabeling_jelly_removal', 'pre_wash', 'loading', 'machine_wash', 'unloading', 'inprocess_visual_inspection', 'lpc', 'ic', 'nvr', 'qa_sample_inspection', 'packing', 'remarks', 'evaluated', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'InitialInspection' => 2, 'DelabelingJellyRemoval' => 3, 'PreWash' => 4, 'Loading' => 5, 'MachineWash' => 6, 'Unloading' => 7, 'InprocessVisualInspection' => 8, 'Lpc' => 9, 'Ic' => 10, 'Nvr' => 11, 'QaSampleInspection' => 12, 'Packing' => 13, 'Remarks' => 14, 'Evaluated' => 15, 'CreatedBy' => 16, 'DateCreated' => 17, 'ModifiedBy' => 18, 'DateModified' => 19, ),
		BasePeer::TYPE_COLNAME => array (HrAcroNanoTrainingEvaluationPeer::ID => 0, HrAcroNanoTrainingEvaluationPeer::DATE_TIME => 1, HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION => 2, HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL => 3, HrAcroNanoTrainingEvaluationPeer::PRE_WASH => 4, HrAcroNanoTrainingEvaluationPeer::LOADING => 5, HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH => 6, HrAcroNanoTrainingEvaluationPeer::UNLOADING => 7, HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION => 8, HrAcroNanoTrainingEvaluationPeer::LPC => 9, HrAcroNanoTrainingEvaluationPeer::IC => 10, HrAcroNanoTrainingEvaluationPeer::NVR => 11, HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION => 12, HrAcroNanoTrainingEvaluationPeer::PACKING => 13, HrAcroNanoTrainingEvaluationPeer::REMARKS => 14, HrAcroNanoTrainingEvaluationPeer::EVALUATED => 15, HrAcroNanoTrainingEvaluationPeer::CREATED_BY => 16, HrAcroNanoTrainingEvaluationPeer::DATE_CREATED => 17, HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY => 18, HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED => 19, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'initial_inspection' => 2, 'delabeling_jelly_removal' => 3, 'pre_wash' => 4, 'loading' => 5, 'machine_wash' => 6, 'unloading' => 7, 'inprocess_visual_inspection' => 8, 'lpc' => 9, 'ic' => 10, 'nvr' => 11, 'qa_sample_inspection' => 12, 'packing' => 13, 'remarks' => 14, 'evaluated' => 15, 'created_by' => 16, 'date_created' => 17, 'modified_by' => 18, 'date_modified' => 19, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/HrAcroNanoTrainingEvaluationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.HrAcroNanoTrainingEvaluationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HrAcroNanoTrainingEvaluationPeer::getTableMap();
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
		return str_replace(HrAcroNanoTrainingEvaluationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::ID);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::DATE_TIME);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::INITIAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::DELABELING_JELLY_REMOVAL);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::PRE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::LOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::MACHINE_WASH);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::UNLOADING);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::INPROCESS_VISUAL_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::LPC);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::IC);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::NVR);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::QA_SAMPLE_INSPECTION);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::PACKING);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::REMARKS);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::EVALUATED);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::CREATED_BY);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::DATE_CREATED);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(hr_acro_nano_training_evaluation.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT hr_acro_nano_training_evaluation.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HrAcroNanoTrainingEvaluationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HrAcroNanoTrainingEvaluationPeer::doSelectRS($criteria, $con);
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
		$objects = HrAcroNanoTrainingEvaluationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HrAcroNanoTrainingEvaluationPeer::populateObjects(HrAcroNanoTrainingEvaluationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HrAcroNanoTrainingEvaluationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HrAcroNanoTrainingEvaluationPeer::getOMClass();
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
		return HrAcroNanoTrainingEvaluationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HrAcroNanoTrainingEvaluationPeer::ID); 

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
			$comparison = $criteria->getComparison(HrAcroNanoTrainingEvaluationPeer::ID);
			$selectCriteria->add(HrAcroNanoTrainingEvaluationPeer::ID, $criteria->remove(HrAcroNanoTrainingEvaluationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HrAcroNanoTrainingEvaluationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HrAcroNanoTrainingEvaluation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HrAcroNanoTrainingEvaluationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HrAcroNanoTrainingEvaluation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HrAcroNanoTrainingEvaluationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME, HrAcroNanoTrainingEvaluationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HrAcroNanoTrainingEvaluationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HrAcroNanoTrainingEvaluationPeer::DATABASE_NAME);

		$criteria->add(HrAcroNanoTrainingEvaluationPeer::ID, $pk);


		$v = HrAcroNanoTrainingEvaluationPeer::doSelect($criteria, $con);

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
			$criteria->add(HrAcroNanoTrainingEvaluationPeer::ID, $pks, Criteria::IN);
			$objs = HrAcroNanoTrainingEvaluationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHrAcroNanoTrainingEvaluationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/HrAcroNanoTrainingEvaluationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.HrAcroNanoTrainingEvaluationMapBuilder');
}
