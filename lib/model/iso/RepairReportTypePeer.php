<?php

/**
 * Subclass for performing query and update operations on the 'repair_report_type' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class RepairReportTypePeer extends BaseRepairReportTypePeer
{
    
    public static function GetRepairListName()
    {
        $c= new Criteria();
        $c->addAscendingOrderByColumn(self::REPAIR_TYPE );
        $rs = self::doSelect($c);
        $list = array(''=>' - REPAIR TYPE - ');
        foreach($rs as $r){
           $list[$r->getRepairType()] = $r->getRepairType();
        }
        return $list;
    }    
    
}
