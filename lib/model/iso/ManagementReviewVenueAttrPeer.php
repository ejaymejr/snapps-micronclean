<?php

/**
 * Subclass for performing query and update operations on the 'management_review_venue_attr' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class ManagementReviewVenueAttrPeer extends BaseManagementReviewVenueAttrPeer
{
    public static function GetVenueList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::VENUE);
        $c->addGroupByColumn(self::VENUE);
        $rs = self::doSelect($c);
        //$list = array(''=>'  -SELECT VENUE-');
        $list = array();
        foreach($rs as $r){
            $list[$r->getVenue()] = $r->getVenue();
        }
        return $list;
    }    
}
