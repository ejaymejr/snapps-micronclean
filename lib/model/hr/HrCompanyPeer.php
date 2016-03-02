<?php

/**
 * Subclass for performing query and update operations on the 'hr_company' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class HrCompanyPeer extends BaseHrCompanyPeer
{
	public static function GetCompanyNameby() {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::COMP_NAME);
		$leave = self::doSelect($c);
		$leaves = array();
		foreach($leave as $leavetype)
		{
			$leaves[$leavetype->getLeaveType()] = $leavetype->getLeaveType();
		}
		return $leaves;
	}

	public static function GetNamebyId($Id)
	{
        $c = new Criteria();
        $c->add(self::ID, $Id);
        $rs = self::doSelectOne($c);
        return ($rs) ? $rs->getCompName() : null;	    
	}
	
	public static function GetIDbyCompanyName($cName)
	{
	    $c = new Criteria();
	    $c->add(self::COMP_NAME, $cName);
	    $rs = self::doSelectOne($c);
	    return ($rs)? $rs->getId(): null;
	}
	
	public static function OptCompanyList()
	{
	    $list = array();
	    $c = new Criteria();
	    $rs = self::doSelect($c);
	    if ($rs)
	    {
	        foreach($rs as $comp)
	        {
	            $list[$comp->getId()] = ' - '.$comp->getCompName().' - ';
	        }
	    }
	    return $list;
	}
	
	
    public static function OptCompanyNameList()
    {
        $list = array();
        $c = new Criteria();
        $rs = self::doSelect($c);
        if ($rs)
        {
            foreach($rs as $comp)
            {
                $list[$comp->getCompName()] = ' - '.$comp->getCompName().' - ';
            }
        }
        return $list;
    }	
	
    public static function OptCompanyNameListWithAll()
    {
        $list = array();
        $c = new Criteria();
        $rs = self::doSelect($c);
        $list = array(''=>' - ALL -');
        if ($rs)
        {
            foreach($rs as $comp)
            {
                $list[$comp->getCompName()] = ' - '.$comp->getCompName().' - ';
            }
        }
        return $list;
    }	
	    
	public static function GetCompanyList()
	{
	    $list = array(''=>' -Select Company- ');
	    $c = new Criteria();
	    $rs = self::doSelect($c);
	    if ($rs)
	    {
	        foreach($rs as $comp)
	        {
	            $list[$comp->getId()] = ' - '.$comp->getCompName().' - ';
	        }
	    }
	    return $list;
	}

	public static function GetCompanyListName()
	{
	    $list = array(''=>' -Select Company- ');
	    $c = new Criteria();
	    $rs = self::doSelect($c);
	    if ($rs)
	    {
	        foreach($rs as $comp)
	        {
	            $list[$comp->getCompName()] = ' - '.$comp->getCompName().' - ';
	        }
	    }
	    return $list;
	}
		    
	public static function GetCompanyList2()
	{
		$list = array();
		$c = new Criteria();
		$rs = self::doSelect($c);
		if ($rs)
		{
			foreach($rs as $comp)
			{
				$list[$comp->getId()] = $comp->getCompName();
			}
		}
		return $list;
	}
}
