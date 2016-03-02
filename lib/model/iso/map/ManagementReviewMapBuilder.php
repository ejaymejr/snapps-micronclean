<?php



class ManagementReviewMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.ManagementReviewMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('management_review');
		$tMap->setPhpName('ManagementReview');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE', 'Date', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('VENUE', 'Venue', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CHAIR_PERSON', 'ChairPerson', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('DISCUSSION', 'Discussion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PROP_ACTION', 'PropAction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ACTION_DATE', 'ActionDate', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CONCLUSION', 'Conclusion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SECRETARY', 'Secretary', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('REVIEW_BY', 'ReviewBy', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('VERIFY_BY', 'VerifyBy', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 