<?php

/**
 * Subclass for performing query and update operations on the 'qr_department' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class QrDepartmentPeer extends BaseQrDepartmentPeer
{
    public static function GetCustomerList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::CUSTOMER);
        $c->addGroupByColumn(self::CUSTOMER);
        $rs = self::doSelect($c);
        $list = array(''=>' -SELECT CUSTOMER HERE- ');
        foreach($rs as $r){
            $list[$r->getCustomer()] = $r->getCustomer(); 
            //if (trim($r->getCustomer())) $list[$r->getId()] = $r->getCustomer();            
        }
        return $list;
    }
    
    public static function GetDepartmentList($cust)
    {
        $c = new Criteria();
        $c->add(self::CUSTOMER, $cust);
        $c->addGroupByColumn(self::DEPARTMENT);
        $c->addAscendingOrderByColumn(self::CUSTOMER);
        $c->addAscendingOrderByColumn(self::DEPARTMENT);
        $rs = self::doSelect($c);
        $list = array(''=>' -SELECT DEPARTMENT HERE- ');
        foreach($rs as $r){
            $list[$r->getDepartment()] = $r->getDepartment(); 
        }
        return $list;
    }    
    
    
}
