<?php

/**
 * Subclass for performing query and update operations on the 'supplier_capa' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class SupplierCapaPeer extends BaseSupplierCapaPeer
{
	public static function GetPager($cd)
	{
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 20);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}
	
		$page = sfContext::getInstance()->getRequest()->getParameter('page', 1);
	
		$c = clone($cd);
		$pager = new sfPropelPager('SupplierCapa', $rowsPerPage);
	
		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
	
	public static function GetDataByToken($tokenID)
	{
		$c = new Criteria();
		$c->add(SupplierCapaPeer::TOKEN, $tokenID);
		$rs = self::doSelectOne($c);
		if ($rs):
			if (($rs->getTokenExpiry()) <= date('Y-m-d')):
				return '';
			endif;
		endif;
		return $rs;
	}
	
	public static function GetCapaList()
	{
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::DATE_MODIFIED);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[$r->getReportNo()] = $r->getFindings();
		endforeach;
		var_dump($list);
		exit();
		return $list;
	}
}
