<?php

/**
 * Subclass for performing query and update operations on the 'customer_management_complaint_form' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class CustomerManagementComplaintFormPeer extends BaseCustomerManagementComplaintFormPeer
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
        $pager = new sfPropelPager('CustomerManagementComplaintForm', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }  
    
    public static function GetComplaintByDate($sdt, $edt)
    {
        $c = new Criteria();
        $c->add(self::COMPLAIN_DATE_TIME,  'DATE(' . self::COMPLAIN_DATE_TIME . ') >= \'' . $sdt . '\' AND DATE(' . self::COMPLAIN_DATE_TIME . ') <= \'' . $edt . '\'', self::CUSTOM);
        $c->addAscendingOrderByColumn(self::COMPLAIN_DATE_TIME);
        $rs = self::doCount($c);
        return $rs;
    }
}
