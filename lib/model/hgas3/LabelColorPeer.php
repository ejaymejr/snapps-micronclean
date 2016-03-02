<?php

/**
 * Subclass for performing query and update operations on the 'label_color' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelColorPeer extends BaseLabelColorPeer
{
	
	public static function GetColorList()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::DESCRIPTION);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT COLOR - ');
		foreach($rs as $r)
		{
			$list[$r->getDescription()] = ' - '.$r->getDescription().' - ';
		}
		return $list;
	}	
	
	public static function GetColorHexByColor($color)
	{
		$c = new Criteria();
		$c->add(self::DESCRIPTION, $color);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getHexColor() : '';
	}
 	
}
