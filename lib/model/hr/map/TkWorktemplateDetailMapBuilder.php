<?php



class TkWorktemplateDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.TkWorktemplateDetailMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('hr');

		$tMap = $this->dbMap->addTable('tk_worktemplate_detail');
		$tMap->setPhpName('TkWorktemplateDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('DAY', 'Day', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IS_WORKING', 'IsWorking', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_DET', 'DateDet', 'int', CreoleTypes::DATE, false, null);

		$tMap->addForeignKey('TK_WORKTEMPLATE_NO', 'TkWorktemplateNo', 'string', CreoleTypes::CHAR, 'tk_worktemplate', 'WORKTEMP_NO', false, 30);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 