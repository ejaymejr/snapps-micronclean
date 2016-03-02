<?php



class hgasTagRequestMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas.map.hgasTagRequestMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tag_request');
		$tMap->setPhpName('hgasTagRequest');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('HANGER_SLOT_ID', 'HangerSlotId', 'int', CreoleTypes::INTEGER, 'hanger_slot', 'ID', false, null);

		$tMap->addForeignKey('BEFORE_TAG_ID', 'BeforeTagId', 'string', CreoleTypes::BIGINT, 'tag', 'ID', false, null);

		$tMap->addForeignKey('AFTER_TAG_ID', 'AfterTagId', 'string', CreoleTypes::BIGINT, 'tag', 'ID', false, null);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('REQUESTED_BY', 'RequestedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_REQUESTED', 'DateRequested', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('IP_SET_BY', 'IpSetBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_IP_SET', 'DateIpSet', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPLETED_BY', 'CompletedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_COMPLETED', 'DateCompleted', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 