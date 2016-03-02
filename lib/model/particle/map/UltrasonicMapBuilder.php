<?php



class UltrasonicMapBuilder {

	
	const CLASS_NAME = 'lib.model.particle.map.UltrasonicMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('particle');

		$tMap = $this->dbMap->addTable('ultrasonic');
		$tMap->setPhpName('Ultrasonic');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FREQUENCY', 'Frequency', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('POWER', 'Power', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CAPACITANCE', 'Capacitance', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('EQUIPMENT_NAME', 'EquipmentName', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('EQUIPMENT_NO', 'EquipmentNo', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('EQUIPMENT_CAL_NO', 'EquipmentCalNo', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('EQUIPMENT_CAL_DATE', 'EquipmentCalDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DONE_BY', 'DoneBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 