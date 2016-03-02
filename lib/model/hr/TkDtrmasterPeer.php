<?php

/**
 * Subclass for performing query and update operations on the 'tk_dtrmaster' table.
 *
 *
 *
 * @package lib.model.hr
 */
class TkDtrmasterPeer extends BaseTkDtrmasterPeer
{
	const CUSTOM = 'CUSTOM';
    public static function ChkEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelect($c);
        if ($rs) {
            return true;
        }else{
            return false;
        }
    }

    public static function GetDatabyEmployeeNo($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelectOne($c);       //do not change used in dtrComputeTime Individual
        return $rs;
    }

    public static function GetDatabyEmployeeNo1($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelectone($c);       //do not change used in dtrComputeTime Individual
        return $rs;
    }

    public static function GetDatabyCompany($com, $sdt, $edt)
    {
        $c = new Criteria();
//        $c->add(self::COMPANY, $com);
//        $c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
//        $c->add(TkDtrsummaryPeer::TRANS_DATE,  'DATE(' . TkDtrsummaryPeer::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . TkDtrsummaryPeer::TRANS_DATE . ') <= \'' . $edt . '\'', 'CUSTOM');

//		$c1 = $c->getNewCriterion(TkDtrsummaryPeer::EMPLOYEE_NO, self::EMPLOYEE_NO, 'CUSTOM');
//		$c2 = $c->getNewCriterion(TkDtrsummaryPeer::TRANS_DATE,  'DATE(' . TkDtrsummaryPeer::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . TkDtrsummaryPeer::TRANS_DATE . ') <= \'' . $edt . '\'', 'CUSTOM');
//        $c3 = $c->getNewCriterion(self::TK_WORKTEMPLATE_NO, 'Non-Punching');
//        $c1->addAnd($c2);
//        $c1->addOr($c3);
//        $c->add($c1);

//        $x=array();
//        var_dump ( basepeer::createSelectSql($c, $x) );
//        exit();
//		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
//		$c->add(PayBasicPayPeer::STATUS, 'A');
//		$c->add(self::EMPLOYEE_NO, 'S1325685C');
        $rs = self::doSelect($c);
        return $rs;
    }

    public static function GetAllEmployeeNo()
    {
        $c = new Criteria();
        $c->addjoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
        $c->add(PayBasicPayPeer::STATUS, 'A');
        $c->addjoin(self::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
        //$c->add(self::EMPLOYEE_NO, array('024747352270509'), Criteria::IN );
        $rs = self::doSelect($c);
        return $rs;
        
//        $c = new Criteria();
//        $c->clearSelectColumns();
//        $c->addSelectColumn(self::EMPLOYEE_NO);
//        $c->addSelectColumn(self::NAME);
//        $c->addSelectColumn(self::TK_WORKTEMPLATE_NO);
//        $c->addSelectColumn(self::TYPE_OF_EMPLOYMENT);
//        $rs = self::doSelectRS($c);
//        return $rs;
//        
    }

   public static function GetAllEmployee()
   {
        $c = new Criteria();
        $c->clearSelectColumns();
        $c->addSelectColumn(self::EMPLOYEE_NO);
        $c->addSelectColumn(self::NAME);
        $c->addSelectColumn(self::TK_WORKTEMPLATE_NO);
        $c->addSelectColumn(self::TYPE_OF_EMPLOYMENT);
        $c->addSelectColumn(self::COMPANY);
        $c->addjoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
        $c->add(PayBasicPayPeer::STATUS, 'A');
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        return $rs;
  }    

    public static function Search($xpg)
    {
        $c = new HrEmployeeCriteria(self::NAME);
        $pager = new sfPropelPager('TkDtrmaster', 20);
        $pager->setCriteria($c);
        $pager->setPage($xpg);
        $pager->init();
        return array('pager'=>$pager, 'count'=>self::doCount($c) );
    }

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
        $pager = new sfPropelPager('TkDtrmaster', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

    
    public static function GetEmployeeList($comp = null)
    {
        if ($comp)
        {
            return (self::GetDatabyCompany($comp));
        }else{
            return (self::GetAllEmployeeNo()) ;
        }
    }

    public static function DeleteOldData()
    {

    }

    public static function GetEmployeeNameList($co=null) {
//        $c = new Criteria();
//        $c->addAscendingOrderByColumn(self::NAME);
//        $rs = self::doSelect($c);
//        $val[] = '';
//        foreach($rs as $res){
//            $val[$res->getEmployeeNo()] = $res->getName();
//        }
//        return $val;        
        $c = new Criteria();
        $c->clearSelectColumns();
        $c->addSelectColumn(self::EMPLOYEE_NO);
        $c->addSelectColumn(self::NAME);
        if ($co)
        {
            $c->add(self::COMPANY, $co);
        }
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        $list[] = '';
        while ($rs->next()) 
        {
            $list[$rs->get('EMPLOYEE_NO')] =$rs->get('NAME');
        }
        return $list;        
    }
    
    public static function GetEmployeeNameListActive($co=null) {
        $c = new Criteria();
        $c->clearSelectColumns();
        $c->addSelectColumn(self::EMPLOYEE_NO);
        $c->addSelectColumn(self::NAME);
        $c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
        $c->add(PayBasicPayPeer::STATUS, 'A');        
        if ($co)
        {
            $c->add(self::COMPANY, $co);
        }
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        $list[] = '';
        while ($rs->next()) 
        {
            $list[$rs->get('EMPLOYEE_NO')] =$rs->get('NAME');
        }
        return $list;        
    }    

    public static function GetEmployeeDatabyCompany($com)
    {
        $c = new Criteria();
        if ($com !== 'ALL')
        {
            $c->add(self::COMPANY, $com);
        }
        $rs = self::doSelect($c);
        return $rs;
    }
    
    public static function GetEmployeeName($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelectOne($c);       //do not change used in dtrComputeTime Individual
        return ($rs)? $rs->getName() : null;
    }    

    public static function GetWorkSchedulebyEmployeeNo($empno)
    {
        //$empno = '401611134250304';
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
//        $c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
//        $c->add(PayBasicPayPeer::STATUS, 'A');
        $rs = self::doSelectone($c);       //do not change used in dtrComputeTime Individual
        //var_dump($rs->getTkWorktemplateNo());
        return ($rs)? $rs->getTkWorktemplateNo() : null;
        
    }
    
    public static function GetAllData()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doSelect($c);
        return $rs;
    }
    
    public static function GetListforMasterList($co=null, $work=null, $team=null, $year=null, $race = null)
    {
        $c = new Criteria();
        if ($co)
        {
            $c->add(self::COMPANY, $co);
        }
        if ($work)
        {
            $c->add(self::TK_WORKTEMPLATE_NO, $work);
        }
        
        if ($team)
        {
            $c->addjoin(self::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
            $c->add(HrEmployeePeer::TEAM, $team);
        }
    	if ($year) {
			$c->addJoin(self::EMPLOYEE_NO, PayEmployeeLedgerArchivePeer::EMPLOYEE_NO);
			$c->add( PayEmployeeLedgerArchivePeer::DATE_CREATED, 'year(date('.PayEmployeeLedgerArchivePeer::DATE_CREATED.')) = "'.$year.'"', Criteria::CUSTOM);
		}
    	if ($race) {
            $c->addjoin(self::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
            $c->add(HrEmployeePeer::RACE, $race);
    	} 		        
        $c->addjoin(self::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
        //$c->addAscendingOrderByColumn(HrEmployeePeer::NAME);
        $c->addGroupByColumn(self::NAME);
        //$c->addAscendingOrderByColumn(HrEmployeePeer::TEAM);
        //$c->addAscendingOrderByColumn(HrEmployeePeer::TEAM);
        $c->addAscendingOrderByColumn(self::NAME);
        //$c->add(self::EMPLOYEE_NO, 'S7181242A');
        //$c->add(self::ID, '&& || &&', Criteria::CUSTOM);        
        $rs = self::doSelect($c);
        return $rs;
    }

    
//    public static function GetAllDatayReturnArray()
//    {
//        $c = new Criteria();
//        $rs = self::doSelect($c);
//        $dataSet = null;
//        if ($rs)
//        {
//            foreach($rs as $data)
//            {
//                $rs->
//            }
//        }
//        
//    }

    public static function GetEmployment($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelectOne($c);       //do not change used in dtrComputeTime Individual
        return ($rs)? $rs->getTypeOfEmployment() : '';
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
                case 'tk_worktemplate_no':
                    $c->addSelectColumn(self::TK_WORKTEMPLATE_NO);                    
                    break;
            }
        }
        
        $c->add(self::EMPLOYEE_NO, $empNo);
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        while ($rs->next()) 
        {
            return $rs; // nr of column in select clause
        }
    }    
    
    public static function DeleteEmployee($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doDelete($c);       //do not change used in dtrComputeTime Individual
        return;
    }
    
	
    public static function GetEmployeeListForNoDtr($comp = null)
    {
        $c = new Criteria();
        $c->clearSelectColumns();
        $c->addSelectColumn(self::EMPLOYEE_NO);                    
        $c->add(self::TK_WORKTEMPLATE_NO, 'NON PUNCHING');
        if ($comp)
        {
        	$c->add(self::COMPANY, $comp);
        }
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        $list = array();
        while ($rs->next()) 
        {
            $list[$rs->get('EMPLOYEE_NO')] = $rs->get('EMPLOYEE_NO');
        }
    	return $list;
    }

    public static function Is12HoursShift($empno)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empno);
        $rs = self::doSelectOne($c);       //do not change used in dtrComputeTime Individual
        if ($rs):
	        if ($rs->getTkWorktemplateNo() == "STANDARD TWELVE(12) HOURS"):
	        	return true;
	        else:
	        	return false;
	        endif;
	    endif;
	    return false;
    }
    
    public static function GetMealBreak($empno)
    {
    	$c = new Criteria();
    	$c->add(self::EMPLOYEE_NO, $empno);
    	$c->addDescendingOrderByColumn(self::ID);
    	$c->addJoin(TkWorktemplatePeer::WORKTEMP_NO, self::TK_WORKTEMPLATE_NO);
    	$c->add(TkWorktemplatePeer::MEALBREAK, 0, Criteria::GREATER_THAN);
    	$rs = self::doSelectOne($c);
    	return $rs? .50 : 0; //return in decimal format
    }
    
    public static function GetMealBreakHrsPerDay($empno)
    {
    	$mealbreak = 0;
    	$hrsperday = 0;
    	$c = new Criteria();
    	$c->add(self::EMPLOYEE_NO, $empno);
    	$c->addDescendingOrderByColumn(self::ID);
    	$rs = self::doSelectOne($c);
    	
    	if ($rs):
	    	$cc = new Criteria();
    		$cc->add(TkWorktemplatePeer::WORKTEMP_NO, $rs->getTkWorktemplateNo() );
	    	$res = TkWorktemplatePeer::doSelectOne($cc);
	    	$mealbreak = 0;
	    	$hrsperday = 0;
	    	if ($rs):
	    		$mealbreak = $res->getMealbreak() * 60;
	    		
	    	endif;
    	endif;
    	return array('mealbreak'=> $mealbreak, 'template'=> $rs->getTkWorktemplateNo());
    	//return $rs? 1800 : 0; //return in decimal format
    }

}


//insert into tk_dtrmaster (employee_no, name, hr_company_id, hr_department_id, type_of_employment, tk_worktemplate_no) select employee_no, name, hr_company_id, hr_department_id, type_of_employment, '5DAYSWORK' from hr_employee group by employee_no