<?php

/**
 * Subclass for performing query and update operations on the 'label_field3' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelField3Peer extends BaseLabelField3Peer
{
	public static function GetByName($fld, $cID)
	{
		$c = new Criteria();
		$c->add(self::NAME, $fld);
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$rs = self::doSelectOne($c);
		return $rs;
	}

	public static function GetListByCompany($cID)
	{
		$c = new Criteria();
		$c->add(self::LABEL_COMPANY_ID, $cID);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array(''=>' - SELECT FIELD 3 - ');
		foreach($rs as $r)
		{
			$list[$r->getId()] = ' - '.$r->getName() . ' - ';
		}
		return array_unique($list);
	}	
	
	public static function GetNameById($fID)
	{
		$c = new Criteria();
		$c->add(self::ID, $fID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getName(): '';
	}	
	
	public static function GetNameLikeThis($f1name)
	{
		$c =new Criteria();
		$c->add(self::NAME, $f1name, Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list =array();
		foreach($rs as $r){
			$list[] = $r->getId();
		}
		return $list;
	}	
	
}
