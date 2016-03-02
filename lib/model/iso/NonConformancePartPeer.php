<?php

/**
 * Subclass for performing query and update operations on the 'non_conformance_part' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class NonConformancePartPeer extends BaseNonConformancePartPeer
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
        $pager = new sfPropelPager('NonConformancePart', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }     
    
    
    public static function GetMonthlyCostSummary()
    {   
        
        $con = Propel::getConnection('iso');
        
        $query = $con->createStatement();
        
        $sql = " SELECT DATE_FORMAT( `date`, '%Y-%m') as yyyymm,
                        DATE_FORMAT( `date`, '%M %Y') as monthNice,
                        SUM(cost + vpc) as totalCost
                    FROM " . self::TABLE_NAME . "
                    GROUP BY yyyymm
                    ORDER BY yyyymm ";
                    
        $rs = $query->executeQuery($sql, ResultSet::FETCHMODE_ASSOC);
        
        $rows = array();
        while ($rs->next()) {
            
            $row = $rs->getRow();   
            if ($row['totalCost'] > 0) $rows[$row['yyyymm']] = $row;
        }
        
        return $rows;
    }
    
    public static function GetLatestDate()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByColumn(self::DATE);
    	$rs = self::doSelectOne($c);
    	return $rs? DateUtils::DUFormat('Y-m-d',$rs->getDate()) : '';
    }     
    
    public static function GetCompanyList()
    {
    	$c = new Criteria();
    	$c->addAscendingOrderByColumn(self::COMPANY);
    	$c->addGroupByColumn(self::COMPANY);
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach ($rs as $r) {
    		if ($r->getCompany()) {
    			$list[] = $r->getCompany();
    		}
    	}
    	return $list;
    }
}
