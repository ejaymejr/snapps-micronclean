<?php



class NonConformancePartMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.NonConformancePartMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('iso');

		$tMap = $this->dbMap->addTable('non_conformance_part');
		$tMap->setPhpName('NonConformancePart');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE', 'Date', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PRODUCT_TYPE', 'ProductType', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PART', 'Part', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('QUANTITY', 'Quantity', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('COST', 'Cost', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('VPC', 'Vpc', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ADHESIVE_TOP', 'AdhesiveTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PARTICLE_COUNT', 'ParticleCount', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CRACK_TOP', 'CrackTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('AFTER_DRYING', 'AfterDrying', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('DDI', 'Ddi', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MISSING_PART', 'MissingPart', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OVER_DATE_TOP', 'OverDateTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OVER_PUNCH_TOP', 'OverPunchTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STAIN', 'Stain', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STICKER_TOP', 'StickerTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('TORN_BROKEN', 'TornBroken', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('OVER_DATE_BOTTOM', 'OverDateBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OVER_DATE_BODY', 'OverDateBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OVER_PUNCH_BOTTOM', 'OverPunchBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OVER_PUNCH_BODY', 'OverPunchBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MIXED_PART_BOTTOM', 'MixedPartBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MIXED_PART_BODY', 'MixedPartBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MIXED_PART_TOP', 'MixedPartTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CRACK_BODY', 'CrackBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CRACK_BOTTOM', 'CrackBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SCRATCHES_TOP', 'ScratchesTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SCRATCHES_BODY', 'ScratchesBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SCRATCHES_BOTTOM', 'ScratchesBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('WORPAGE_TOP', 'WorpageTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('WORPAGE_BODY', 'WorpageBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('WORPAGE_BOTTOM', 'WorpageBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STAIN_TOP', 'StainTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STAIN_BODY', 'StainBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STAIN_BOTTOM', 'StainBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STICKER_BOTTOM', 'StickerBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STICKER_BODY', 'StickerBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ADHESIVE_BODY', 'AdhesiveBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ADHESIVE_BOTTOM', 'AdhesiveBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MOULDING_DEFECT_TOP', 'MouldingDefectTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MOULDING_DEFECT_BOTTOM', 'MouldingDefectBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MOULDING_DEFECT_BODY', 'MouldingDefectBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('HK_DRUM_FAIL', 'HkDrumFail', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CHIPS_TOP', 'ChipsTop', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHIPS_BODY', 'ChipsBody', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHIPS_BOTTOM', 'ChipsBottom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('DRYER_1_TEMPERATURE', 'Dryer1Temperature', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DRYER_1_PARTICLE', 'Dryer1Particle', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DRYER_2_TEMPERATURE', 'Dryer2Temperature', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DRYER_2_PARTICLE', 'Dryer2Particle', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 