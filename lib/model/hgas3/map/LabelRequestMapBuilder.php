<?php



class LabelRequestMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas3.map.LabelRequestMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hgas3');

		$tMap = $this->dbMap->addTable('label_request');
		$tMap->setPhpName('LabelRequest');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('BATCH', 'Batch', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GID', 'Gid', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('DESIGNATION', 'Designation', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('FSET', 'Fset', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CELL', 'Cell', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('END', 'End', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LOCKER', 'Locker', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COST_CENTER', 'CostCenter', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PLATFORM', 'Platform', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GSIZE', 'Gsize', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('TEMPLATE', 'Template', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IS_CHECKED', 'IsChecked', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('IS_PRINTED', 'IsPrinted', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('ORDER_BY', 'OrderBy', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PRINTED_BY', 'PrintedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_PRINTED', 'DatePrinted', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('QUANTITY', 'Quantity', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 