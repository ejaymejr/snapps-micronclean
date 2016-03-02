<?php


abstract class BaseNonConformancePartPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'non_conformance_part';

	
	const CLASS_DEFAULT = 'lib.model.iso.NonConformancePart';

	
	const NUM_COLUMNS = 57;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'non_conformance_part.ID';

	
	const DATE = 'non_conformance_part.DATE';

	
	const CUSTOMER = 'non_conformance_part.CUSTOMER';

	
	const COMPANY = 'non_conformance_part.COMPANY';

	
	const PRODUCT_TYPE = 'non_conformance_part.PRODUCT_TYPE';

	
	const PART = 'non_conformance_part.PART';

	
	const QUANTITY = 'non_conformance_part.QUANTITY';

	
	const COST = 'non_conformance_part.COST';

	
	const VPC = 'non_conformance_part.VPC';

	
	const ADHESIVE_TOP = 'non_conformance_part.ADHESIVE_TOP';

	
	const PARTICLE_COUNT = 'non_conformance_part.PARTICLE_COUNT';

	
	const CRACK_TOP = 'non_conformance_part.CRACK_TOP';

	
	const AFTER_DRYING = 'non_conformance_part.AFTER_DRYING';

	
	const DDI = 'non_conformance_part.DDI';

	
	const MISSING_PART = 'non_conformance_part.MISSING_PART';

	
	const OVER_DATE_TOP = 'non_conformance_part.OVER_DATE_TOP';

	
	const OVER_PUNCH_TOP = 'non_conformance_part.OVER_PUNCH_TOP';

	
	const STAIN = 'non_conformance_part.STAIN';

	
	const STICKER_TOP = 'non_conformance_part.STICKER_TOP';

	
	const TORN_BROKEN = 'non_conformance_part.TORN_BROKEN';

	
	const DATE_CREATED = 'non_conformance_part.DATE_CREATED';

	
	const CREATED_BY = 'non_conformance_part.CREATED_BY';

	
	const DATE_MODIFIED = 'non_conformance_part.DATE_MODIFIED';

	
	const MODIFIED_BY = 'non_conformance_part.MODIFIED_BY';

	
	const OVER_DATE_BOTTOM = 'non_conformance_part.OVER_DATE_BOTTOM';

	
	const OVER_DATE_BODY = 'non_conformance_part.OVER_DATE_BODY';

	
	const OVER_PUNCH_BOTTOM = 'non_conformance_part.OVER_PUNCH_BOTTOM';

	
	const OVER_PUNCH_BODY = 'non_conformance_part.OVER_PUNCH_BODY';

	
	const MIXED_PART_BOTTOM = 'non_conformance_part.MIXED_PART_BOTTOM';

	
	const MIXED_PART_BODY = 'non_conformance_part.MIXED_PART_BODY';

	
	const MIXED_PART_TOP = 'non_conformance_part.MIXED_PART_TOP';

	
	const CRACK_BODY = 'non_conformance_part.CRACK_BODY';

	
	const CRACK_BOTTOM = 'non_conformance_part.CRACK_BOTTOM';

	
	const SCRATCHES_TOP = 'non_conformance_part.SCRATCHES_TOP';

	
	const SCRATCHES_BODY = 'non_conformance_part.SCRATCHES_BODY';

	
	const SCRATCHES_BOTTOM = 'non_conformance_part.SCRATCHES_BOTTOM';

	
	const WORPAGE_TOP = 'non_conformance_part.WORPAGE_TOP';

	
	const WORPAGE_BODY = 'non_conformance_part.WORPAGE_BODY';

	
	const WORPAGE_BOTTOM = 'non_conformance_part.WORPAGE_BOTTOM';

	
	const STAIN_TOP = 'non_conformance_part.STAIN_TOP';

	
	const STAIN_BODY = 'non_conformance_part.STAIN_BODY';

	
	const STAIN_BOTTOM = 'non_conformance_part.STAIN_BOTTOM';

	
	const STICKER_BOTTOM = 'non_conformance_part.STICKER_BOTTOM';

	
	const STICKER_BODY = 'non_conformance_part.STICKER_BODY';

	
	const ADHESIVE_BODY = 'non_conformance_part.ADHESIVE_BODY';

	
	const ADHESIVE_BOTTOM = 'non_conformance_part.ADHESIVE_BOTTOM';

	
	const MOULDING_DEFECT_TOP = 'non_conformance_part.MOULDING_DEFECT_TOP';

	
	const MOULDING_DEFECT_BOTTOM = 'non_conformance_part.MOULDING_DEFECT_BOTTOM';

	
	const MOULDING_DEFECT_BODY = 'non_conformance_part.MOULDING_DEFECT_BODY';

	
	const HK_DRUM_FAIL = 'non_conformance_part.HK_DRUM_FAIL';

	
	const CHIPS_TOP = 'non_conformance_part.CHIPS_TOP';

	
	const CHIPS_BODY = 'non_conformance_part.CHIPS_BODY';

	
	const CHIPS_BOTTOM = 'non_conformance_part.CHIPS_BOTTOM';

	
	const DRYER_1_TEMPERATURE = 'non_conformance_part.DRYER_1_TEMPERATURE';

	
	const DRYER_1_PARTICLE = 'non_conformance_part.DRYER_1_PARTICLE';

	
	const DRYER_2_TEMPERATURE = 'non_conformance_part.DRYER_2_TEMPERATURE';

	
	const DRYER_2_PARTICLE = 'non_conformance_part.DRYER_2_PARTICLE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Date', 'Customer', 'Company', 'ProductType', 'Part', 'Quantity', 'Cost', 'Vpc', 'AdhesiveTop', 'ParticleCount', 'CrackTop', 'AfterDrying', 'Ddi', 'MissingPart', 'OverDateTop', 'OverPunchTop', 'Stain', 'StickerTop', 'TornBroken', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', 'OverDateBottom', 'OverDateBody', 'OverPunchBottom', 'OverPunchBody', 'MixedPartBottom', 'MixedPartBody', 'MixedPartTop', 'CrackBody', 'CrackBottom', 'ScratchesTop', 'ScratchesBody', 'ScratchesBottom', 'WorpageTop', 'WorpageBody', 'WorpageBottom', 'StainTop', 'StainBody', 'StainBottom', 'StickerBottom', 'StickerBody', 'AdhesiveBody', 'AdhesiveBottom', 'MouldingDefectTop', 'MouldingDefectBottom', 'MouldingDefectBody', 'HkDrumFail', 'ChipsTop', 'ChipsBody', 'ChipsBottom', 'Dryer1Temperature', 'Dryer1Particle', 'Dryer2Temperature', 'Dryer2Particle', ),
		BasePeer::TYPE_COLNAME => array (NonConformancePartPeer::ID, NonConformancePartPeer::DATE, NonConformancePartPeer::CUSTOMER, NonConformancePartPeer::COMPANY, NonConformancePartPeer::PRODUCT_TYPE, NonConformancePartPeer::PART, NonConformancePartPeer::QUANTITY, NonConformancePartPeer::COST, NonConformancePartPeer::VPC, NonConformancePartPeer::ADHESIVE_TOP, NonConformancePartPeer::PARTICLE_COUNT, NonConformancePartPeer::CRACK_TOP, NonConformancePartPeer::AFTER_DRYING, NonConformancePartPeer::DDI, NonConformancePartPeer::MISSING_PART, NonConformancePartPeer::OVER_DATE_TOP, NonConformancePartPeer::OVER_PUNCH_TOP, NonConformancePartPeer::STAIN, NonConformancePartPeer::STICKER_TOP, NonConformancePartPeer::TORN_BROKEN, NonConformancePartPeer::DATE_CREATED, NonConformancePartPeer::CREATED_BY, NonConformancePartPeer::DATE_MODIFIED, NonConformancePartPeer::MODIFIED_BY, NonConformancePartPeer::OVER_DATE_BOTTOM, NonConformancePartPeer::OVER_DATE_BODY, NonConformancePartPeer::OVER_PUNCH_BOTTOM, NonConformancePartPeer::OVER_PUNCH_BODY, NonConformancePartPeer::MIXED_PART_BOTTOM, NonConformancePartPeer::MIXED_PART_BODY, NonConformancePartPeer::MIXED_PART_TOP, NonConformancePartPeer::CRACK_BODY, NonConformancePartPeer::CRACK_BOTTOM, NonConformancePartPeer::SCRATCHES_TOP, NonConformancePartPeer::SCRATCHES_BODY, NonConformancePartPeer::SCRATCHES_BOTTOM, NonConformancePartPeer::WORPAGE_TOP, NonConformancePartPeer::WORPAGE_BODY, NonConformancePartPeer::WORPAGE_BOTTOM, NonConformancePartPeer::STAIN_TOP, NonConformancePartPeer::STAIN_BODY, NonConformancePartPeer::STAIN_BOTTOM, NonConformancePartPeer::STICKER_BOTTOM, NonConformancePartPeer::STICKER_BODY, NonConformancePartPeer::ADHESIVE_BODY, NonConformancePartPeer::ADHESIVE_BOTTOM, NonConformancePartPeer::MOULDING_DEFECT_TOP, NonConformancePartPeer::MOULDING_DEFECT_BOTTOM, NonConformancePartPeer::MOULDING_DEFECT_BODY, NonConformancePartPeer::HK_DRUM_FAIL, NonConformancePartPeer::CHIPS_TOP, NonConformancePartPeer::CHIPS_BODY, NonConformancePartPeer::CHIPS_BOTTOM, NonConformancePartPeer::DRYER_1_TEMPERATURE, NonConformancePartPeer::DRYER_1_PARTICLE, NonConformancePartPeer::DRYER_2_TEMPERATURE, NonConformancePartPeer::DRYER_2_PARTICLE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date', 'customer', 'company', 'product_type', 'part', 'quantity', 'cost', 'vpc', 'adhesive_top', 'particle_count', 'crack_top', 'after_drying', 'ddi', 'missing_part', 'over_date_top', 'over_punch_top', 'stain', 'sticker_top', 'torn_broken', 'date_created', 'created_by', 'date_modified', 'modified_by', 'over_date_bottom', 'over_date_body', 'over_punch_bottom', 'over_punch_body', 'mixed_part_bottom', 'mixed_part_body', 'mixed_part_top', 'crack_body', 'crack_bottom', 'scratches_top', 'scratches_body', 'scratches_bottom', 'worpage_top', 'worpage_body', 'worpage_bottom', 'stain_top', 'stain_body', 'stain_bottom', 'sticker_bottom', 'sticker_body', 'adhesive_body', 'adhesive_bottom', 'moulding_defect_top', 'moulding_defect_bottom', 'moulding_defect_body', 'hk_drum_fail', 'chips_top', 'chips_body', 'chips_bottom', 'dryer_1_temperature', 'dryer_1_particle', 'dryer_2_temperature', 'dryer_2_particle', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Date' => 1, 'Customer' => 2, 'Company' => 3, 'ProductType' => 4, 'Part' => 5, 'Quantity' => 6, 'Cost' => 7, 'Vpc' => 8, 'AdhesiveTop' => 9, 'ParticleCount' => 10, 'CrackTop' => 11, 'AfterDrying' => 12, 'Ddi' => 13, 'MissingPart' => 14, 'OverDateTop' => 15, 'OverPunchTop' => 16, 'Stain' => 17, 'StickerTop' => 18, 'TornBroken' => 19, 'DateCreated' => 20, 'CreatedBy' => 21, 'DateModified' => 22, 'ModifiedBy' => 23, 'OverDateBottom' => 24, 'OverDateBody' => 25, 'OverPunchBottom' => 26, 'OverPunchBody' => 27, 'MixedPartBottom' => 28, 'MixedPartBody' => 29, 'MixedPartTop' => 30, 'CrackBody' => 31, 'CrackBottom' => 32, 'ScratchesTop' => 33, 'ScratchesBody' => 34, 'ScratchesBottom' => 35, 'WorpageTop' => 36, 'WorpageBody' => 37, 'WorpageBottom' => 38, 'StainTop' => 39, 'StainBody' => 40, 'StainBottom' => 41, 'StickerBottom' => 42, 'StickerBody' => 43, 'AdhesiveBody' => 44, 'AdhesiveBottom' => 45, 'MouldingDefectTop' => 46, 'MouldingDefectBottom' => 47, 'MouldingDefectBody' => 48, 'HkDrumFail' => 49, 'ChipsTop' => 50, 'ChipsBody' => 51, 'ChipsBottom' => 52, 'Dryer1Temperature' => 53, 'Dryer1Particle' => 54, 'Dryer2Temperature' => 55, 'Dryer2Particle' => 56, ),
		BasePeer::TYPE_COLNAME => array (NonConformancePartPeer::ID => 0, NonConformancePartPeer::DATE => 1, NonConformancePartPeer::CUSTOMER => 2, NonConformancePartPeer::COMPANY => 3, NonConformancePartPeer::PRODUCT_TYPE => 4, NonConformancePartPeer::PART => 5, NonConformancePartPeer::QUANTITY => 6, NonConformancePartPeer::COST => 7, NonConformancePartPeer::VPC => 8, NonConformancePartPeer::ADHESIVE_TOP => 9, NonConformancePartPeer::PARTICLE_COUNT => 10, NonConformancePartPeer::CRACK_TOP => 11, NonConformancePartPeer::AFTER_DRYING => 12, NonConformancePartPeer::DDI => 13, NonConformancePartPeer::MISSING_PART => 14, NonConformancePartPeer::OVER_DATE_TOP => 15, NonConformancePartPeer::OVER_PUNCH_TOP => 16, NonConformancePartPeer::STAIN => 17, NonConformancePartPeer::STICKER_TOP => 18, NonConformancePartPeer::TORN_BROKEN => 19, NonConformancePartPeer::DATE_CREATED => 20, NonConformancePartPeer::CREATED_BY => 21, NonConformancePartPeer::DATE_MODIFIED => 22, NonConformancePartPeer::MODIFIED_BY => 23, NonConformancePartPeer::OVER_DATE_BOTTOM => 24, NonConformancePartPeer::OVER_DATE_BODY => 25, NonConformancePartPeer::OVER_PUNCH_BOTTOM => 26, NonConformancePartPeer::OVER_PUNCH_BODY => 27, NonConformancePartPeer::MIXED_PART_BOTTOM => 28, NonConformancePartPeer::MIXED_PART_BODY => 29, NonConformancePartPeer::MIXED_PART_TOP => 30, NonConformancePartPeer::CRACK_BODY => 31, NonConformancePartPeer::CRACK_BOTTOM => 32, NonConformancePartPeer::SCRATCHES_TOP => 33, NonConformancePartPeer::SCRATCHES_BODY => 34, NonConformancePartPeer::SCRATCHES_BOTTOM => 35, NonConformancePartPeer::WORPAGE_TOP => 36, NonConformancePartPeer::WORPAGE_BODY => 37, NonConformancePartPeer::WORPAGE_BOTTOM => 38, NonConformancePartPeer::STAIN_TOP => 39, NonConformancePartPeer::STAIN_BODY => 40, NonConformancePartPeer::STAIN_BOTTOM => 41, NonConformancePartPeer::STICKER_BOTTOM => 42, NonConformancePartPeer::STICKER_BODY => 43, NonConformancePartPeer::ADHESIVE_BODY => 44, NonConformancePartPeer::ADHESIVE_BOTTOM => 45, NonConformancePartPeer::MOULDING_DEFECT_TOP => 46, NonConformancePartPeer::MOULDING_DEFECT_BOTTOM => 47, NonConformancePartPeer::MOULDING_DEFECT_BODY => 48, NonConformancePartPeer::HK_DRUM_FAIL => 49, NonConformancePartPeer::CHIPS_TOP => 50, NonConformancePartPeer::CHIPS_BODY => 51, NonConformancePartPeer::CHIPS_BOTTOM => 52, NonConformancePartPeer::DRYER_1_TEMPERATURE => 53, NonConformancePartPeer::DRYER_1_PARTICLE => 54, NonConformancePartPeer::DRYER_2_TEMPERATURE => 55, NonConformancePartPeer::DRYER_2_PARTICLE => 56, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date' => 1, 'customer' => 2, 'company' => 3, 'product_type' => 4, 'part' => 5, 'quantity' => 6, 'cost' => 7, 'vpc' => 8, 'adhesive_top' => 9, 'particle_count' => 10, 'crack_top' => 11, 'after_drying' => 12, 'ddi' => 13, 'missing_part' => 14, 'over_date_top' => 15, 'over_punch_top' => 16, 'stain' => 17, 'sticker_top' => 18, 'torn_broken' => 19, 'date_created' => 20, 'created_by' => 21, 'date_modified' => 22, 'modified_by' => 23, 'over_date_bottom' => 24, 'over_date_body' => 25, 'over_punch_bottom' => 26, 'over_punch_body' => 27, 'mixed_part_bottom' => 28, 'mixed_part_body' => 29, 'mixed_part_top' => 30, 'crack_body' => 31, 'crack_bottom' => 32, 'scratches_top' => 33, 'scratches_body' => 34, 'scratches_bottom' => 35, 'worpage_top' => 36, 'worpage_body' => 37, 'worpage_bottom' => 38, 'stain_top' => 39, 'stain_body' => 40, 'stain_bottom' => 41, 'sticker_bottom' => 42, 'sticker_body' => 43, 'adhesive_body' => 44, 'adhesive_bottom' => 45, 'moulding_defect_top' => 46, 'moulding_defect_bottom' => 47, 'moulding_defect_body' => 48, 'hk_drum_fail' => 49, 'chips_top' => 50, 'chips_body' => 51, 'chips_bottom' => 52, 'dryer_1_temperature' => 53, 'dryer_1_particle' => 54, 'dryer_2_temperature' => 55, 'dryer_2_particle' => 56, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/NonConformancePartMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.NonConformancePartMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = NonConformancePartPeer::getTableMap();
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
		return str_replace(NonConformancePartPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NonConformancePartPeer::ID);

		$criteria->addSelectColumn(NonConformancePartPeer::DATE);

		$criteria->addSelectColumn(NonConformancePartPeer::CUSTOMER);

		$criteria->addSelectColumn(NonConformancePartPeer::COMPANY);

		$criteria->addSelectColumn(NonConformancePartPeer::PRODUCT_TYPE);

		$criteria->addSelectColumn(NonConformancePartPeer::PART);

		$criteria->addSelectColumn(NonConformancePartPeer::QUANTITY);

		$criteria->addSelectColumn(NonConformancePartPeer::COST);

		$criteria->addSelectColumn(NonConformancePartPeer::VPC);

		$criteria->addSelectColumn(NonConformancePartPeer::ADHESIVE_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::PARTICLE_COUNT);

		$criteria->addSelectColumn(NonConformancePartPeer::CRACK_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::AFTER_DRYING);

		$criteria->addSelectColumn(NonConformancePartPeer::DDI);

		$criteria->addSelectColumn(NonConformancePartPeer::MISSING_PART);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_DATE_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_PUNCH_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::STAIN);

		$criteria->addSelectColumn(NonConformancePartPeer::STICKER_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::TORN_BROKEN);

		$criteria->addSelectColumn(NonConformancePartPeer::DATE_CREATED);

		$criteria->addSelectColumn(NonConformancePartPeer::CREATED_BY);

		$criteria->addSelectColumn(NonConformancePartPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(NonConformancePartPeer::MODIFIED_BY);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_DATE_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_DATE_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_PUNCH_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::OVER_PUNCH_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::MIXED_PART_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::MIXED_PART_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::MIXED_PART_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::CRACK_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::CRACK_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::SCRATCHES_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::SCRATCHES_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::SCRATCHES_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::WORPAGE_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::WORPAGE_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::WORPAGE_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::STAIN_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::STAIN_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::STAIN_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::STICKER_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::STICKER_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::ADHESIVE_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::ADHESIVE_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::MOULDING_DEFECT_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::MOULDING_DEFECT_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::MOULDING_DEFECT_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::HK_DRUM_FAIL);

		$criteria->addSelectColumn(NonConformancePartPeer::CHIPS_TOP);

		$criteria->addSelectColumn(NonConformancePartPeer::CHIPS_BODY);

		$criteria->addSelectColumn(NonConformancePartPeer::CHIPS_BOTTOM);

		$criteria->addSelectColumn(NonConformancePartPeer::DRYER_1_TEMPERATURE);

		$criteria->addSelectColumn(NonConformancePartPeer::DRYER_1_PARTICLE);

		$criteria->addSelectColumn(NonConformancePartPeer::DRYER_2_TEMPERATURE);

		$criteria->addSelectColumn(NonConformancePartPeer::DRYER_2_PARTICLE);

	}

	const COUNT = 'COUNT(non_conformance_part.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT non_conformance_part.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(NonConformancePartPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(NonConformancePartPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = NonConformancePartPeer::doSelectRS($criteria, $con);
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
		$objects = NonConformancePartPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return NonConformancePartPeer::populateObjects(NonConformancePartPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			NonConformancePartPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = NonConformancePartPeer::getOMClass();
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
		return NonConformancePartPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(NonConformancePartPeer::ID); 

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
			$comparison = $criteria->getComparison(NonConformancePartPeer::ID);
			$selectCriteria->add(NonConformancePartPeer::ID, $criteria->remove(NonConformancePartPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(NonConformancePartPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(NonConformancePartPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof NonConformancePart) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NonConformancePartPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(NonConformancePart $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NonConformancePartPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NonConformancePartPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(NonConformancePartPeer::DATABASE_NAME, NonConformancePartPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = NonConformancePartPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(NonConformancePartPeer::DATABASE_NAME);

		$criteria->add(NonConformancePartPeer::ID, $pk);


		$v = NonConformancePartPeer::doSelect($criteria, $con);

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
			$criteria->add(NonConformancePartPeer::ID, $pks, Criteria::IN);
			$objs = NonConformancePartPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseNonConformancePartPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/NonConformancePartMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.NonConformancePartMapBuilder');
}
