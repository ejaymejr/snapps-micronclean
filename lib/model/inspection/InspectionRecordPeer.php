<?php

/**
 * Subclass for performing query and update operations on the 'inspection_record' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class InspectionRecordPeer extends BaseInspectionRecordPeer
{
	public static function GetPager($cd, $results = 20)
    {      
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $results);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        
        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1); 
        
        $c = clone($cd);
        $pager = new sfPropelPager('InspectionRecord', $rowsPerPage);                    
        $pager->setCriteria($c);

    	$pos = 0;
    	$cpage = 0;
    	$Id = sfContext::getInstance()->getRequest()->getParameter('hIDs');
    	if ($Id)
    	{
    		foreach($pager->getResults() as $rec)
    		{
    			if ($cpage == 0)
    			{
    				$cpage = ($rec->getId() == $Id[0]) ? $pos + 1  : 0;
    			}
    			$pos++;
	    	}
    	}
    	$cpage = intval($cpage / $results) + ($cpage % $results ? 1 : 0 );
    	$page = sfContext::getInstance()->getRequest()->getParameter('page', $cpage);
    	$pager->setPage($page);
        $pager->init();
        return $pager;
    } 
}
