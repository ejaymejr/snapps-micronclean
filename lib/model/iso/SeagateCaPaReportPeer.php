<?php

/**
 * Subclass for performing query and update operations on the 'seagate_ca_pa_report' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class SeagateCaPaReportPeer extends BaseSeagateCaPaReportPeer
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
        $pager = new sfPropelPager('SeagateCaPaReport', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }    
    
	public static function GetCapaList()
	{
		$c = new Criteria();
//		$c->addDescendingOrderByColumn(self::DATE_MODIFIED);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[$r->getReportNo()] = $r->getFindings();
		endforeach;
		return $list;
	}
}
