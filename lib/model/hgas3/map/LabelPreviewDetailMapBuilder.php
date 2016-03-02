<?php



class LabelPreviewDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas3.map.LabelPreviewDetailMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('label_preview_detail');
		$tMap->setPhpName('LabelPreviewDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LABELING_TEMPLATE_ID', 'LabelingTemplateId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LINE1_COL1', 'Line1Col1', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE1_COL2', 'Line1Col2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE2_COL1', 'Line2Col1', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE2_COL2', 'Line2Col2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE3_COL1', 'Line3Col1', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE3_COL2', 'Line3Col2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE4_COL1', 'Line4Col1', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LINE4_COL2', 'Line4Col2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 