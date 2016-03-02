<?php

/**
 * Subclass for performing query and update operations on the 'team' table.
 *
 * 
 *
 * @package lib.model.hgas
 */ 
class hgasTeamPeer extends BasehgasTeamPeer
{
	
    public static function GetTeamList()
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
