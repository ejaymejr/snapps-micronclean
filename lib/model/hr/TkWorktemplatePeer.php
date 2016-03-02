<?php

/**
 * Subclass for performing query and update operations on the 'tk_worktemplate' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class TkWorktemplatePeer extends BaseTkWorktemplatePeer
{
    public static function Search($xpage){
  	    $c = new Criteria();
  	    $c->addDescendingOrderByColumn(self::WORKTEMP_NO);
        $pager = new sfPropelPager('TkWorktemplate', 20);
        $pager->setCriteria($c);
        $pager->setPage($xpage);
        $pager->init();
        return array('pager'=>$pager, 'count'=>self::doCount($c) );  	
    }
    
	public static function GetOptions() {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::DESCRIPTION);
		$rs = self::doSelect($c);
		$opt = array();
		foreach($rs as $res)
		{
			$opt[$res->getWorktempNo()] = $res->getDescription();
		}
		return $opt;
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
        $pager = new sfPropelPager('TkWorktemplate', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

//    public static function GetDatabyEmployeeNo($empno) {
//        $c = new Criteria();
//        $c->add(self::e, $empno);
//        $rs = self::doSelect($c);
//        foreach($rs as $res){
//            return $res;
//        }
//    }

    public static function GetIdbyWorktempNo($wtno) {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $wtno);
        $rs = self::doSelect($c);
        foreach($rs as $res){
            return $res->getId();
        }
    }

    public static function GetDescriptionbyWorktempNo($wtno) {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $wtno);
        $rs = self::doSelect($c);
        foreach($rs as $res){
            return $res->getDescription();
        }
    }
    
    public static function GetDayoffbyWtNo($no) {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $no);
        $rs = self::doSelect($c);
        foreach($rs as $res)
        {
            $doff = $res->getDayoff();
            $dofd = $res->getDayoffDay();
            return array('dayoff'=>$doff, 'dayoff_day'=>$dofd);            
        }     
    }

    public static function GetMealBreak($no) 
    {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $no);
        $rs = self::doSelectOne($c);
        return ($rs) ? $rs->getMealbreak(): 0;
    }
    
    public static function GetShift($no)
    {
        switch ($no)
        {
            case 0:
                return 'Morning Shift';
            case 1:
                return 'Afternoon Shift';
            case 2:
                return 'Evening Shift';
            default:
                return 'Error';
        }
    }
    
    public static function GetHrsandDaysbyWorktempNo($wtNo)
    {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $wtNo);
        $rs = self::doSelectOne($c);
//        $tmin = 0;
//        if ($rs)
//        {
//            $tmin = $rs->getHrsPerDay() * $rs->getDaysPerMonth() * 60;  // 60 - min
//        }
        return array('hours'=>$rs->getHrsPerDay(), 'days'=>$rs->getDaysPerMonth(), 'endurance'=>$rs->getEndurance());
    }
    
    public static function GetDatabyWorktemplateNo($wtNo)
    {
        $c = new Criteria();
        $c->add(self::WORKTEMP_NO, $wtNo);
        $rs = self::doSelectOne($c);
        return $rs;
    }
    
    
    public static function GetOptimizedDatabyWorkTemplateNo($wtno, $fldList)
    {
        $c = new Criteria();
        $c->clearSelectColumns();
        foreach($fldList as $kf=>$vf)
        {
            switch(strtolower($vf))
            {
                case 'hrs_per_day':
                    $c->addSelectColumn(self::HRS_PER_DAY);                    
                    break;
            }
        }
        $c->add(self::WORKTEMP_NO, $wtno);
        $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        while ($rs->next()) 
        {
            return $rs; // nr of column in select clause
        }
    }    
    
    public static function WorktemplateList()
    {
    	$list =array();
    	$c = new Criteria();
    	$c->addAscendingOrderByColumn(self::WORKTEMP_NO);
    	$rs = self::doSelect($c);
    	foreach ($rs as $r):
    		$list[$r->getWorktempNo()] = $r->getDescription();
    	endforeach;
    	return $list;
    }
    
}
