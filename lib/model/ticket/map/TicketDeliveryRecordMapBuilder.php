<?php



class TicketDeliveryRecordMapBuilder {

	
	const CLASS_NAME = 'lib.model.ticket.map.TicketDeliveryRecordMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('ticket_delivery_record');
		$tMap->setPhpName('TicketDeliveryRecord');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('TICKET_DESIGN_HEADER_ID', 'TicketDesignHeaderId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('TICKET_DESIGN_DETAIL_ID', 'TicketDesignDetailId', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('DELIVERY_TICKET_ID', 'DeliveryTicketId', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('GARMENT', 'Garment', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPONENT', 'Component', 'string', CreoleTypes::VARCHAR, true, 40);

		$tMap->addColumn('VALUE', 'Value', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('QUANTITY', 'Quantity', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 