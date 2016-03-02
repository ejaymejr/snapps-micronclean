<?php



class PayBasicPayMapBuilder {

	
	const CLASS_NAME = 'lib.model.hr.map.PayBasicPayMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pay_basic_pay');
		$tMap->setPhpName('PayBasicPay');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'string', CreoleTypes::BIGINT, true, null);

		$tMap->addColumn('EMPLOYEE_NO', 'EmployeeNo', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('COMPANY', 'Company', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('BASIC_AMOUNT', 'BasicAmount', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('SCHEDULED_AMOUNT', 'ScheduledAmount', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('HOURLY_RATE', 'HourlyRate', 'double', CreoleTypes::FLOAT, false, 9);

		$tMap->addColumn('OT_RATE', 'OtRate', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('ALLOWANCE', 'Allowance', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('LEVY', 'Levy', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('TAXABLE_AMOUNT', 'TaxableAmount', 'double', CreoleTypes::DECIMAL, true, 9);

		$tMap->addColumn('GROSS_PAY', 'GrossPay', 'double', CreoleTypes::FLOAT, true, 9);

		$tMap->addColumn('FREQUENCY', 'Frequency', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('ACCT_CODE', 'AcctCode', 'string', CreoleTypes::VARCHAR, true, 12);

		$tMap->addColumn('CPF', 'Cpf', 'string', CreoleTypes::CHAR, false, 3);

		$tMap->addColumn('CPF_AMOUNT', 'CpfAmount', 'double', CreoleTypes::FLOAT, false, 9);

		$tMap->addColumn('CPF_CITIZENSHIP', 'CpfCitizenship', 'string', CreoleTypes::BIGINT, false, 5);

		$tMap->addColumn('EFFECTIVITY_DATE', 'EffectivityDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PAID_TYPE', 'PaidType', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('STATUS', 'Status', 'string', CreoleTypes::CHAR, false, 1);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('DATE_RESIGNED', 'DateResigned', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('RESIGNED_REMARK', 'ResignedRemark', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 