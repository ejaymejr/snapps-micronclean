<?php



class LabelingTemplateMapBuilder {

	
	const CLASS_NAME = 'lib.model.hgas3.map.LabelingTemplateMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('labeling_template');
		$tMap->setPhpName('LabelingTemplate');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('LABEL_DESCRIPTION_ID', 'LabelDescriptionId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LABEL_FIELD1_ID', 'LabelField1Id', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LABEL_FIELD2_ID', 'LabelField2Id', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LABEL_FIELD3_ID', 'LabelField3Id', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LABEL_COMPANY_ID', 'LabelCompanyId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('LINE1_COL1', 'Line1Col1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE2_COL1', 'Line2Col1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE3_COL1', 'Line3Col1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE4_COL1', 'Line4Col1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE1_COL2', 'Line1Col2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE2_COL2', 'Line2Col2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE3_COL2', 'Line3Col2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('LINE4_COL2', 'Line4Col2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L1_FONT', 'L1Font', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L1_FONT_SIZE', 'L1FontSize', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('L2_FONT', 'L2Font', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L2_FONT_SIZE', 'L2FontSize', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('L3_FONT', 'L3Font', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L3_FONT_SIZE', 'L3FontSize', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('L4_FONT', 'L4Font', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L4_FONT_SIZE', 'L4FontSize', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('LABEL_HEIGHT_IN_CM', 'LabelHeightInCm', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('LABEL_WIDTH_IN_CM', 'LabelWidthInCm', 'double', CreoleTypes::FLOAT, false, 5);

		$tMap->addColumn('POSITION', 'Position', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('GARMENT_TYPE', 'GarmentType', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('COLOR_HEX', 'ColorHex', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PRINT_ORIENTATION', 'PrintOrientation', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('L1_FONT_STYLE', 'L1FontStyle', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L2_FONT_STYLE', 'L2FontStyle', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L3_FONT_STYLE', 'L3FontStyle', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L4_FONT_STYLE', 'L4FontStyle', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('L1_SEPARATOR', 'L1Separator', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('L2_SEPARATOR', 'L2Separator', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('L3_SEPARATOR', 'L3Separator', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('L4_SEPARATOR', 'L4Separator', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 