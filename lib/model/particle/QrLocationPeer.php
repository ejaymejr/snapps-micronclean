<?php

/**
 * Subclass for performing query and update operations on the 'qr_location' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class QrLocationPeer extends BaseQrLocationPeer
{
    public static function GetFilterList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::LOCATION);
        $c->addGroupByColumn(self::LOCATION);
        $rs = self::doSelect($c);
        $list = array(''=>' -SELECT FILTER HERE- ');
        foreach($rs as $r){
            $list[$r->getLocation()] = $r->getLocation() . ' - ' . $r->getRemarks();            
        }
        return $list;
    }

    public static function GetFilterListNoSelect()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::LOCATION);
        $c->addGroupByColumn(self::LOCATION);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getLocation()] = $r->getLocation();            
        }
        return $list;
    }    
}
