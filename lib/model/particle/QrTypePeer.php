<?php

/**
 * Subclass for performing query and update operations on the 'qr_type' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class QrTypePeer extends BaseQrTypePeer
{
    public static function GetGarmentList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::TYPE);
        $c->addGroupByColumn(self::TYPE);
        $rs = self::doSelect($c);
        $list = array(''=>' -SELECT GARMENT TYPE HERE- ');
        foreach($rs as $r){
            if (trim($r->getType())) $list[$r->getId()] = $r->getType();            
        }
        return $list;
    }    
    
    public static function GetGarmentTypeById($id)
    {
        $c = new Criteria();
        $c->add(self::ID, $id);
        $rs = self::doSelectOne($c);
        return ($rs? $rs->getType() : '');
    }
    
    public static function GetIdByType($customer, $gtype)
    {
        $c = new Criteria();
        $c->add(self::TYPE, $gtype);
        $c->add(self::CUSTOMER, $customer);
        $rs = self::doSelectOne($c);
        return ($rs? $rs->getId() : '');
    }
}
