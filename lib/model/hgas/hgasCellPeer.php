<?php

/**
 * Subclass for performing query and update operations on the 'cell' table.
 *
 * 
 *
 * @package lib.model.hgas
 */ 
class hgasCellPeer extends BasehgasCellPeer
{
	
	public static function GetCellList($cId=null)
    {
        $c = new Criteria();
        if ($cId){
            $c->add(self::ID, $cId);
        }
        $c->addAscendingOrderbyColumn(self::NAME);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getId()] = $r->getName();
        }
        return ($list);
    }    
    
}
