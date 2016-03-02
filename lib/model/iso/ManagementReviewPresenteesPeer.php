<?php

/**
 * Subclass for performing query and update operations on the 'management_review_presentees' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class ManagementReviewPresenteesPeer extends BaseManagementReviewPresenteesPeer
{
    public static function GetPresenteeListByReviewId($id)
    {
        $c = new Criteria();
        $c->add(self::MANAGEMENT_REVIEW_ID, $id);
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getName()] = $r->getName();
        }
        return $list;
    }    
    
    public static function DeleteListByReviewId($id)
    {
        $c = new Criteria();
        $c->add(self::MANAGEMENT_REVIEW_ID, $id);
        $c->addAscendingOrderByColumn(self::NAME);
        $rs = self::doDelete($c);
    }     
}
