<?php

/**
 * Subclass for performing query and update operations on the 'inspection_record_item' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class InspectionRecordItemPeer extends BaseInspectionRecordItemPeer
{
	public static function GetItemByIdFldNameOptimized($recId, $fldName)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::FIELD_NAME);
		$c->addSelectColumn(self::FIELD_VALUE);
		$c->add(self::INSPECTION_RECORD_ID, $recId);
		$c->add(self::FIELD_NAME, $fldName);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(Resultset::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs;
		}
	}
	
	public static function GetItemByIdFldName($recId, $fldId)
	{
		$c = new Criteria();
		$c->add(self::INSPECTION_RECORD_ID, $recId);
		$c->add(self::INSPECTION_FIELD_LIST_ID, $fldId);
		$rs = self::doSelectOne($c);
		return $rs;
	}	

	public static function GetItemByInspectionRecordId($id)
	{
		$c = new Criteria();
		$c->add(self::INSPECTION_RECORD_ID, $id);
		$rs = self::doSelect($c);
		return $rs;
	}

	public static function DeleteItemByInspectionRecordId($id)
	{
		$c = new Criteria();
		$c->add(self::INSPECTION_RECORD_ID, $id);
		$rs = self::doSelect($c);
		foreach($rs as $rec)
		{
			$rec->delete();
		}
	}
	
	
}
