<?php



class TicketDesignDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.ticket.map.TicketDesignDetailMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('rental');

		$tMap = $this->dbMap->addTable('ticket_design_detail');
		$tMap->setPhpName('TicketDesignDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('GARMENT', 'Garment', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPONENT', 'Component', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('VALUE', 'Value', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SEQUENCE', 'Sequence', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('TICKET_DESIGN_HEADER_ID', 'TicketDesignHeaderId', 'string', CreoleTypes::BIGINT, true, null);

	} 
} 