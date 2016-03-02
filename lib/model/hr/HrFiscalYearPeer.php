<?php

/**
 * Subclass for performing query and update operations on the 'hr_fiscal_year' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrFiscalYearPeer extends BaseHrFiscalYearPeer
{
    const CUSTOM = "CUSTOM";
    const FLAG_IS_CURRENT_YES = 'Y';
    const FLAG_IS_CURRENT_NO  = 'N';
    
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
        $pager = new sfPropelPager('HrFiscalYear', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }
    
	public static function getFiscalYear() {
		$c = new Criteria();
		$c->add(self::IS_CURRENT, "Y");
		$rs = self::doSelect($c);
		foreach($rs as $res) {
			return $res->getFiscalYear();
		}
	}

	public static function getPreviousYear() {
		$c = new Criteria();
		$c->add(self::IS_CURRENT, "Y");		
		$rs = self::doSelect($c);
		foreach($rs as $res) {
			return $res->getPreviousYear();
		}
	}	

    public static function getFiscalYearbyDate($sdt) {
        $c = new Criteria();
        $c->add(self::START_DATE,  'DATE(' . self::START_DATE . ') <= \'' . $sdt . '\'', self::CUSTOM); 
        $c->add(self::END_DATE,  'DATE(' . self::END_DATE . ') >= \'' . $sdt . '\'', self::CUSTOM);        
        //AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
        $rs = self::doSelectone($c);                
        return $rs;
    }	
	
    public static function OptIsCurrent()
    {
        return array('Y'=>'YES', 'N'=>'NO');
    }
    
    public static function OptPreviousYear() {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::FISCAL_YEAR);     
        $rs = self::doSelect($c);
        foreach($rs as $res) {
            $data[$res->getFiscalYear()]= $res->getFiscalYear();
        }
        return $data;
    }
    
    public static function GetFiscalYearList()
    {
        $list = array();
        $cyear = intval(Date('Y'));
        $x = 1;
        while ($cyear >= 2008):
        	$list[] = $cyear;
        	$cyear = $cyear - 1;
        endwhile;
        return $list;
    }
    
    public static function GetFiscalYearListYK()
    {
        $list = array();
        $cyear = intval(Date('Y'));
        $x = 1;
        while ($cyear >= 2008):
        	$list[$cyear] = $cyear;
        	$cyear = $cyear - 1;
        endwhile;
        return $list;
    }    
    
    public static function GetFiscalYearListYKinOpt()
    {
    	$list = array('0'=>' - ALL - ');
    	$cyear = intval(Date('Y'));
    	$x = 1;
    	while ($cyear >= 2008):
    		$list[$cyear] = $cyear;
    		$cyear = $cyear - 1;
    	endwhile;
    	return $list;
    }
    
    public static function GetFiscalYearList1()
    {
    	// used by leave application
        $list = array();
        $cyear = intval(Date('Y'));
        $x = 1;
        while ($cyear >= 2008):
        	$list[$cyear] = $cyear;
        	$cyear = $cyear - 1;
        endwhile;
        return $list;
    }    
    
    public static function GetFiscalYearListInCriteria()
    {
        $list = array();
        $cyear = intval(Date('Y'));
        $x = 1;
        while ($cyear >= 2008):
        	$list[] = "'".$cyear."'";
        	$cyear = $cyear - 1;
        endwhile;
        $mess = implode("," , $list);
        return $mess;
    } 
    
    public static function GetDateRangeByWeekNo($wkNo, $cyear=null)
    {
    	$cyear = $cyear? $cyear : HrFiscalYearPeer::getFiscalYear();
    	$week_start = new DateTime();
		$week_start->setISODate($cyear, $wkNo);
		//$cdt =  DateUtils::AddDate($week_start->format('Y-m-d'), 0);
		$cdt =  $week_start->format('Y-m-d');
		$dt = array('start'=>$cdt, 'end'=> DateUtils::AddDate($cdt, 6) );
		return $dt;
		
    }
    
    public static function SetAllInactive()
    {
    	$c = new Criteria();
    	$rs = self::doSelect($c);
    	foreach($rs as $r):
    		$r->setIsCurrent('N');
    		$r->save();
    	endforeach;
    	return true;
    }
    
}
