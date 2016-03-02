<?php

/**
 * Subclass for performing query and update operations on the 'label_font' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelFontPeer extends BaseLabelFontPeer
{
    public static function GetFontSizeList()
    {
    	$c = new Criteria();
    	$c->addAscendingOrderByColumn(self::SIZE);
    	$rs = self::doSelect($c);
    	$list = array();
    	$list[] = ' - SIZE - ';
    	foreach($rs as $r)
    	{
    		$list[$r->getSize()] = ' - '. $r->getSize().' - ';
    	}
    	return $list;
    }	
    
    public static function GetFontList()
    {
    	$c = new Criteria();
    	$c->addAscendingOrderByColumn(self::NAME);
    	$rs = self::doSelect($c);
    	$list = array();
    	$list[] = ' - CHOOSE FONT - ';
    	foreach($rs as $r)
    	{
    		$list[$r->getName()] = ' - '. $r->getName().' - ';
    	}
    	return $list;
    }    
}
