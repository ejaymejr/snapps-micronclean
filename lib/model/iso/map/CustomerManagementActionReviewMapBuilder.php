<?php



class CustomerManagementActionReviewMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.CustomerManagementActionReviewMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('customer_management_action_review');
		$tMap->setPhpName('CustomerManagementActionReview');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('CASE_ACTION', 'CaseAction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('REVIEWED_BY', 'ReviewedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('REVIEW_DATE', 'ReviewDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 