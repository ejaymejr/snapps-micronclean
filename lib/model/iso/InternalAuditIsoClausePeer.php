<?php

/**
 * Subclass for performing query and update operations on the 'internal_audit_iso_clause' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class InternalAuditIsoClausePeer extends BaseInternalAuditIsoClausePeer
{
    public static function GetDataBySummaryId($id)
    {
        $c = new Criteria();
        $c->add(self::SUMMARY_ID, $id);
        $rs = self::doSelect($c);
        return $rs;
    }
    
    public static function GetDataBySummaryIdAndClause($id, $data)
    {
        $c = new Criteria();
        $c->add(self::SUMMARY_ID, $id);
        $c->add(self::ISO_CLAUSE, $data);
        $rs = self::doSelectOne($c);
        return $rs;
    }    
    
    public static function DeleteBySummaryId($id)
    {
        $c = new Criteria();
        $c->add(self::SUMMARY_ID, $id);
        $rs = self::doDelete($c);
        return $rs;
    }    
}
