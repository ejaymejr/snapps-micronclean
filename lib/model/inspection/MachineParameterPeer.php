<?php

/**
 * Subclass for performing query and update operations on the 'machine_parameter' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class MachineParameterPeer extends BaseMachineParameterPeer
{
    const CUSTOM = "CUSTOM";
    
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
        $pager = new sfPropelPager('MachineParameter', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }	
}
