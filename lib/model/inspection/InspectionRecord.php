<?php

/**
 * Subclass for representing a row from the 'inspection_record' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class InspectionRecord extends BaseInspectionRecord
{


    public function getInspectionRecordItems()
    {
        $c = new Criteria();
        $c->add(InspectionRecordItemPeer::INSPECTION_RECORD_ID, $this->getId());
        
        return (InspectionRecordItemPeer::doSelect($c));
    }
}
