<?php



class SmsMessageoutMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.SmsMessageoutMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('sms_messageout');
		$tMap->setPhpName('SmsMessageout');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('SENDER', 'Sender', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('RECEIVER', 'Receiver', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('MSG', 'Msg', 'string', CreoleTypes::VARCHAR, false, 1024);

		$tMap->addColumn('SENTTIME', 'Senttime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('RECEIVEDTIME', 'Receivedtime', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('OPERATOR', 'Operator', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MSGTYPE', 'Msgtype', 'string', CreoleTypes::VARCHAR, false, 160);

		$tMap->addColumn('PERIOD_CODE', 'PeriodCode', 'string', CreoleTypes::VARCHAR, false, 50);

	} 
} 