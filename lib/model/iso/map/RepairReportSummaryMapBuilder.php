<?php



class RepairReportSummaryMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.RepairReportSummaryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('repair_report_summary');
		$tMap->setPhpName('RepairReportSummary');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REPAIR_DATE', 'RepairDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GARMENT_TYPE', 'GarmentType', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('REPAIR_TYPE', 'RepairType', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('TEMPERATURE', 'Temperature', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('PRESSURE', 'Pressure', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('QUANTITY', 'Quantity', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PCS_OR_PAIRS', 'PcsOrPairs', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('INITIALS', 'Initials', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 