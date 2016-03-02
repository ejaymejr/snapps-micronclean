<?php

/**
 * Subclass for performing query and update operations on the 'department' table.
 *
 * 
 *
 * @package lib.model.hgas
 */ 
class hgasDepartmentPeer extends BasehgasDepartmentPeer
{
	
    public static function GetDeptList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getId()] = $r->getName();
        }
        return $list;
    }
}
