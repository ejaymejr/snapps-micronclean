<?php

/**
 * Subclass for performing query and update operations on the 'management_review_user' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class ManagementReviewUserPeer extends BaseManagementReviewUserPeer
{
    public static function getMembersList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::NAME);
        $c->addGroupByColumn(self::NAME);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getName()] = $r->getName();
        }
        return $list;
    }    
}
