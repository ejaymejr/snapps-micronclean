<?php

/**
 * Subclass for performing query and update operations on the 'label_garment_position' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelGarmentPositionPeer extends BaseLabelGarmentPositionPeer
{
	public static function GetDataByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'jumpsuit');
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetJumpsuitByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'jumpsuit');
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetGarmentPositionByTemplateId($tID, $garment)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, $garment);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getPosition(): '';
	}	
	
	public static function GetHoodByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'hood');
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetBootiesByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'booties');
		$rs = self::doSelectOne($c);
		return $rs;
	}	
	
	public static function GetCapByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'cap');
		$rs = self::doSelectOne($c);
		return $rs;
	}	
	
	public static function GetSmockByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'smock');
		$rs = self::doSelectOne($c);
		return $rs;
	}	

	public static function GetTrolleyByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'TROLLEY');
		$rs = self::doSelectOne($c);
		return $rs;
	}
		
	public static function GetCrJumpsuitByTemplateId($tID)
	{
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$c->add(self::GARMENT, 'cleanroom-jumpsuit');
		$rs = self::doSelectOne($c);
		return $rs;
	}	
	
	public static function GetGarmentListTextByTempId($tID) {
		$c = new Criteria();
		$c->add(self::LABELING_TEMPLATE_ID, $tID);
		$rs = self::doSelect($c);
		$list = '';
		foreach ($rs as $r){
			if ($r->getPosition()) {
				$list = $list . $r->getGarment() . ': ' .$r->getPosition();
				$list = $list . '<br>'; 
			}
		}
		return $list;
	}
}
