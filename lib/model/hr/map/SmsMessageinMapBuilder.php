<?php



class SmsMessageinMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.SmsMessageinMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('sms_messagein');
		$tMap->setPhpName('SmsMessagein');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('SENDER', 'Sender', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('RECEIVER', 'Receiver', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('MSG', 'Msg', 'string', CreoleTypes::VARCHAR, false, 1024);

		$tMap->addColumn('SENTTIME', 'Senttime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('RECEIVEDTIME', 'Receivedtime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OPERATOR', 'Operator', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MSGTYPE', 'Msgtype', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('IS_UPDATED', 'IsUpdated', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('UPDATE_REMARK', 'UpdateRemark', 'string', CreoleTypes::VARCHAR, false, 254);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 100);

	} 
} 