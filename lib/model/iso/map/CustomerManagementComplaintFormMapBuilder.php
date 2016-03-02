<?php



class CustomerManagementComplaintFormMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.CustomerManagementComplaintFormMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('customer_management_complaint_form');
		$tMap->setPhpName('CustomerManagementComplaintForm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMPLAIN_DATE_TIME', 'ComplainDateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPANY_NAME', 'CompanyName', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('CUSTOMER_NUMBER', 'CustomerNumber', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('COMPLAINEE_NAME', 'ComplaineeName', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('COMPLAINEE_DESIGNATION', 'ComplaineeDesignation', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('COMPLAINEE_DEPARTMENT', 'ComplaineeDepartment', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('COMPLAINEE_CONTACT_NO', 'ComplaineeContactNo', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('COMPLAINEE_EMAIL', 'ComplaineeEmail', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('COMPLAIN_DESCRIPTION', 'ComplainDescription', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('RECEIVED_BY_NAME', 'ReceivedByName', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('RECEIVED_BY_DESIGNATION', 'ReceivedByDesignation', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('RECEIVED_BY_DEPARTMENT', 'ReceivedByDepartment', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('CHANNEL', 'Channel', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPLAIN_CONCERNING', 'ComplainConcerning', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CORRECTION_ACTION_TAKEN', 'CorrectionActionTaken', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('UNDERTAKEN_BY_DATE', 'UndertakenByDate', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('UNDERTAKEN_BY', 'UndertakenBy', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('UNDERTAKEN_BY_DESIGNATION', 'UndertakenByDesignation', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('UNDERTAKEN_BY_DEPARTMENT', 'UndertakenByDepartment', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('UNDERTAKEN_BY_INITIALS', 'UndertakenByInitials', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('VERIFIED_BY_DATE', 'VerifiedByDate', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('VERIFIED_BY', 'VerifiedBy', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('VERIFIED_BY_DESIGNATION', 'VerifiedByDesignation', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('VERIFIED_BY_DEPARTMENT', 'VerifiedByDepartment', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('VERIFIED_BY_INITIALS', 'VerifiedByInitials', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 