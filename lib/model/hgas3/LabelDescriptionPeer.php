<?php

/**
 * Subclass for performing query and update operations on the 'label_description' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelDescriptionPeer extends BaseLabelDescriptionPeer
{
	public static function GetByDescription($desc)
	{
		$c = new Criteria();
		$c->add(self::DESCRIPTION, $desc);
		$rs = self::doSelectOne($c);
		return $rs;
	}

	public static function GetDescriptionList()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::DESCRIPTION);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT DESCRIPTION - ');
		foreach($rs as $r)
		{
			$list[$r->getId()] = ' - '.$r->getDescription() . ' - ';
		}
		return array_unique($list);
	}
	
    public static function GetDescriptionId($dID)
    {
    	$c = new Criteria();
    	$c->add(self::ID, $dID);
    	$rs = self::doSelectOne($c);
    	return $rs? $rs->getDescription() : ' NO DESCRIPTION AVAILABLE ';
    }	
		
}
