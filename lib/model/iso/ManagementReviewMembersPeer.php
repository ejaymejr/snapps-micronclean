<?php

/**
 * Subclass for performing query and update operations on the 'management_review_members' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class ManagementReviewMembersPeer extends BaseManagementReviewMembersPeer
{
    public static function getMembersList($lbl = null)
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::NAME);
        $c->addGroupByColumn(self::NAME);
        $rs = self::doSelect($c);
        $list = array();
        if ($lbl )$list = array(''=>'  -SELECT CHAIRPERSON-');
        foreach($rs as $r){
            $list[$r->getName()] = $r->getName();
        }
        return $list;
    }
    
    public static function getMembersListByReviewId($id)
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
