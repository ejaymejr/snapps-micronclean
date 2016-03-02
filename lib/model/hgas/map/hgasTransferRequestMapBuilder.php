<?php



class hgasTransferRequestMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasTransferRequestMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas');

		$tMap = $this->dbMap->addTable('transfer_request');
		$tMap->setPhpName('hgasTransferRequest');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('TAG_ID', 'TagId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('FROM_HANGER_ID', 'FromHangerId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('FROM_HANGER_NAME', 'FromHangerName', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TO_HANGER_ID', 'ToHangerId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TO_HANGER_NAME', 'ToHangerName', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('VERIFIED', 'Verified', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 