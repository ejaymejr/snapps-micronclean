<?php

/**
 * Subclass for performing query and update operations on the 'air_data' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class AirDataPeer extends BaseAirDataPeer
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
        $pager = new sfPropelPager('AirData', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

    public static function GetLatestDate()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(self::DATE_TIME);
    	$rs = self::doSelectOne($c);
    	return $rs? DateUtils::DUFormat('Y-m-d',$rs->getDateTime()) : '';
    }
}
