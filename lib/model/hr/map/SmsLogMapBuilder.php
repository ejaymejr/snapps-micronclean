<?php



class SmsLogMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.SmsLogMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('sms_log');
		$tMap->setPhpName('SmsLog');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('SENDER', 'Sender', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('RECEIVER', 'Receiver', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('MSG', 'Msg', 'string', CreoleTypes::VARCHAR, false, 1024);

		$tMap->addColumn('SENTTIME', 'Senttime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('RECEIVEDTIME', 'Receivedtime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OPERATOR', 'Operator', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MSGTYPE', 'Msgtype', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('PERIOD_CODE', 'PeriodCode', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('MODULE', 'Module', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BANK_CASH', 'BankCash', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 20);

	} 
} 