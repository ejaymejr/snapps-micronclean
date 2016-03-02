<?php

/**
 * Subclass for performing query and update operations on the 'hr_training_development' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class HrTrainingDevelopmentPeer extends BaseHrTrainingDevelopmentPeer
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
        $pager = new sfPropelPager('HrTrainingDevelopment', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }
    
    public static function GetTrainingList()
    {
        $c= new criteria();
        $c->addAscendingOrderByColumn(self::DATE_HELD);
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getId()] = $r->getDescription() ;
        }
        return $list;
    }     
}
