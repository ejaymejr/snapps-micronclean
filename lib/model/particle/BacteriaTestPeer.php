<?php

/**
 * Subclass for performing query and update operations on the 'bacteria_test' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class BacteriaTestPeer extends BaseBacteriaTestPeer
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
        $pager = new sfPropelPager('BacteriaTest', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    } 	
    
	public static function GetDataByTransDate($cdate)
	{
		$c = new Criteria();
		$c->add(self::TRANS_DATE, $cdate);
		$rs = self::DoSelect($c);
		return $rs;
	}
	
	public static function GetLatestDate()
	{
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelectOne($c);
		return $rs? DateUtils::DUFormat('Y-m-d',$rs->getTransDate()) : '';
	}
}
