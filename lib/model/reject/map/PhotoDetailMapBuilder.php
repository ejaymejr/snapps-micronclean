<?php



class PhotoDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.reject.map.PhotoDetailMapBuilder';

	
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
		$this->dbMap = Propel::getDatabaseMap('reject_photo');

		$tMap = $this->dbMap->addTable('photo_detail');
		$tMap->setPhpName('PhotoDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('TRANS_DATE', 'TransDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('BATCH_ID', 'BatchId', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CUSTOMER_ID', 'CustomerId', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('GARMENT', 'Garment', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::BIGINT, false, 100);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('GARMENT_ACTION', 'GarmentAction', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FILELINK', 'Filelink', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('FILENAME', 'Filename', 'string', CreoleTypes::VARCHAR, false, 100);

	} 
} 