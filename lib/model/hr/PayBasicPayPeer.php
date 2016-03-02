<?php

/**
 * Subclass for performing query and update operations on the 'pay_basic_pay' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class PayBasicPayPeer extends BasePayBasicPayPeer
{
    const FLAG_STATUS_ACTIVE    = 'A';
    const FLAG_STATUS_INACTIVE  = 'I';
    
    public static function GetPager($cd)
    {        
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 20);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        
        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1); 
        
        $c = clone($cd);
        $pager = new sfPropelPager('PayBasicPay', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

    public static function GetStatus($stat)
    {
        return ($stat == self::FLAG_STATUS_ACTIVE) ? 'ACTIVE' : 'INACTIVE';
    }

    public static function OptStatus()
    {
        return array('A'=>'ACTIVE', 'I'=>'INACTIVE');
    }
    
    public static function GetDatabyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return $rs;
    }
    
    public static function GetOldPay($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_INACTIVE);
        $c->addDescendingOrderByColumn(self::EFFECTIVITY_DATE);
        $rs = self::doSelectone($c);      
        return $rs;
    }
    
    
    public static function GetAllData()
    {
        $c = new Criteria();
        $rs = self::doSelect($c);      
        return $rs;
    }    
    
    public static function GetAllowancebyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return ( $rs ) ? $rs->getAllowance() : 0 ;
    }
    
    public static function GetLevyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return ( $rs ) ? $rs->getLevy() : 0 ;
    }    
    
    public static function GetBasicPaybyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);        
        $rs = self::doSelectone($c);      
        return ($rs) ? $rs->getScheduledAmount() : null;
    }  
      
    public static function GetLastPayDatabyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->addDescendingOrderByColumn(self::STATUS);
        $c->addDescendingOrderByColumn(self::DATE_MODIFIED);
        $rs = self::doSelectone($c);      
        return $rs;
    }
        
    public static function GetLastPayByEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->addDescendingOrderByColumn(self::DATE_MODIFIED);        
        $rs = self::doSelectone($c);      
        return ($rs) ? $rs->getScheduledAmount() : null;
    }
      
    public static function GetHourlyRatebyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return ( $rs ) ? $rs->getHourlyRate() : 0 ;
    }

    public static function GetCpfAmountbyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return ( $rs ) ? $rs->getCpfAmount() : 0 ;
    }
        
    public static function GetCpfCitizenshipbyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectone($c);      
        return ( $rs ) ? $rs->getCpfCitizenship() : 0 ;
    }
    
    /*
     * this is to avoid double active basic
     */
    public static function SetAllStatusInactive($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelect($c);
//        var_dump($rs);
//        exit();
        foreach($rs as $rec)
        {
            $rec->setStatus('I');
            $rec->save();
        }
        return true;
    }
    
    public static function GetLevyList()
    {
        $list = array('empno'=>array(), 'basic'=>array());
        $c = new Criteria();
//        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $c->add(self::LEVY, 0, Criteria::GREATER_THAN);
        //$c->add(self::EMPLOYEE_NO, '032781616230609');        
        $rs = self::doSelect($c);
        foreach($rs as $rec)
        {
            $list['empno'][]= $rec->getEmployeeNo();
            $list['basic'][]= $rec->getBasicAmount();
        }
//        var_dump($list);
//        exit();
        return $list;
    }    

    public static function GetEffectivityDate($empNo)
    {
        $list = array('empno'=>array(), 'basic'=>array());
        $c = new Criteria();
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $c->add(self::EMPLOYEE_NO, $empNo);        
        $rs = self::doSelectone($c);
        return $rs ? ($rs->getEffectivityDate()) : null; 
    }    
    
    public static function GetOptimizedDatabyEmployeeNo($empNo, $fldList)
    {
        $c = new Criteria();
        $c->clearSelectColumns();
        foreach($fldList as $kf=>$vf)
        {
            switch(strtolower($vf))
            {
                case 'employee_no':
                    $c->addSelectColumn(self::EMPLOYEE_NO);                    
                    break;
                case 'name':
                    $c->addSelectColumn(self::NAME);                    
                    break;
                case 'basic_amount':
                    $c->addSelectColumn(self::BASIC_AMOUNT);
                    break;
                case 'scheduled_amount':
                    $c->addSelectColumn(self::SCHEDULED_AMOUNT);
                    break;
                case 'hourly_rate':
                    $c->addSelectColumn(self::HOURLY_RATE);
                    break;
                case 'allowance':
                    $c->addSelectColumn(self::ALLOWANCE);
                    break;
                case 'cpf':
                    $c->addSelectColumn(self::CPF);
                    break;
                case 'cpf_amount':
                    $c->addSelectColumn(self::CPF_AMOUNT);
                    break;
                case 'company':
                    $c->addSelectColumn(self::COMPANY);
                    break;
                case 'effectivity_date':
                    $c->addSelectColumn(self::EFFECTIVITY_DATE);
                    break;
                    
            }
        }
        
        $c->add(self::EMPLOYEE_NO, $empNo);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        while ($rs->next()) 
        {
            return $rs; // nr of column in select clause
        }
    }    
    
    //--------- use by admin report
    public static function GetEmpList($empNo=null)
    {
    	//$empNos = PayEmployeeLedgerArchivePeer::GetEmployeeNoListByPeriod('20100101-20100131-ALL-MONTHLY');
    	$c = new Criteria();
    	$c->clearSelectColumns();
    	$c->addSelectColumn(self::EMPLOYEE_NO);
    	$c->addSelectColumn(self::NAME);
    	$c->addSelectColumn(self::DEPARTMENT);
    	$c->addSelectColumn(self::COMPANY);
    	$c->addSelectColumn(self::BASIC_AMOUNT);
    	$c->addSelectColumn(self::HOURLY_RATE);
    	$c->addSelectColumn(self::ALLOWANCE);
    	$c->add(self::STATUS, 'A');
    	//$c->add(self::EMPLOYEE_NO, $empNos, Criteria::LIKE);
    	
    	if ($empNo)
    	{
    		$c->add(self::EMPLOYEE_NO, $empNo);
    	}
    	$rs = self::doSelectRS($c);
    	$rs->setFetchMode(Resultset::FETCHMODE_ASSOC);
    	$empList = array(
    	    'empNo'=>array(),
    		'name'=>array(),
    		'dept'=>array(),
    		'comp'=>array(),
    		'basi'=>array(),
    		'hour'=>array(),
    		'allo'=>array()
    	);
    	while ($rs->next())
    	{
    		$empList['empNo'][] = $rs->get('EMPLOYEE_NO');
    		$empList['name'][]  = $rs->get('NAME');
    		$empList['dept'][]  = $rs->get('DEPARTMENT');
    		$empList['comp'][]  = $rs->get('COMPANY');
    		$empList['basi'][]  = $rs->get('BASIC_AMOUNT');
    		$empList['hour'][]  = $rs->get('HOURLY_RATE');
    		$empList['allo'][]  = $rs->get('ALLOWANCE');
    	}
    	return $empList;
    }
    
    public static function GetLevyDataEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $c->add(self::STATUS, self::FLAG_STATUS_ACTIVE);
        $c->add(self::LEVY, 0, Criteria::GREATER_THAN);
        $rs = self::doSelectone($c);      
        return $rs;
    }

    public static function GetListOfCitizenshipBelow3Years()
    {
    	$c = new Criteria();
    	//$c->add(self::CPF_CITIZENSHIP, self::CPF_CITIZENSHIP . ' >= ' . 0.01 . ' and '. self::CPF_CITIZENSHIP .'<= 2.99', Criteria::CUSTOM);
    	$c->add(self::CPF_CITIZENSHIP, array(1,2), Criteria::IN);
    	$c->add(self::STATUS, 'A');
    	$c->addAscendingOrderByColumn(self::NAME);
    	$rs = self::doSelect($c);
    	return $rs;
    }

}
