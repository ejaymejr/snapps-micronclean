<?php

/**
 * Subclass for performing query and update operations on the 'qr_ohm' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class QrOhmPeer extends BaseQrOhmPeer
{
    public static function GetOhms()
    {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::OHM);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getOhm()] = $r->getOhm();            
        }
        return $list;
        
    }
}
