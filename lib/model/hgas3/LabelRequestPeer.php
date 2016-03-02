<?php

/**
 * Subclass for performing query and update operations on the 'label_request' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelRequestPeer extends BaseLabelRequestPeer
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
        $pager = new sfPropelPager('LabelRequest', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }

    public static function GetRequestByBatch($batch)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$rs = self::doSelect($c);
    	return $rs;
    }
    
    public static function GetDataByTemplate($template)
    {
    	$c = new Criteria();
    	$c->add(self::TEMPLATE, $template);
    	$c->addAscendingOrderByColumn(self::ORDER_BY);
    	$rs = self::doSelect($c);
    	return $rs;
    }    
    
    public static function GetEntryByColumnName($fld, $req)
    {
    	switch ($fld){
    		case 'gid':
    			return $req->getGid();
    		case 'name':
    			return $req->getName();
    		case 'company':
    			return $req->getCompany();
    		case 'department':
    			return $req->getDepartment();
    		case 'designation':
    			return $req->getDesignation();
    		case 'hanger_no':
    			return $req->getHangerNo();
    		case 'shift':
    			return $req->getShift();
    		case 'set':
    			return $req->getFset();    			
    		case 'cell':
    			return $req->getCell();    			
    		case 'end':
    			return $req->getEnd();    			
    		case 'locker':
    			return $req->getLocker();    			
    		case 'cost_center':
    			return $req->getCostCenter();    			
    		case 'platform':
    			return $req->getPlatform();    			
    		case 'size':
    			return $req->getGsize();    			
    			
    		default:
    			return '';
    	}
    }    
    
    public static function DeleteBatchTemplate($batch, $template)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$c->add(self::TEMPLATE, $template);
    	$rs = self::doDelete($c);
    	return $rs;
    }

    public static function GetIdByBatchTemplateChecked($batch, $template)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$c->add(self::TEMPLATE, $template);
    	$c->add(self::IS_CHECKED, 'Y');
    	$c->addAscendingOrderByColumn(self::ORDER_BY);
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r){
    		$qty = $r->getQuantity()? $r->getQuantity() : 1;
    		for ($x=1; $x<= $qty; $x++)
    		{
    			$list[] = $r->getId();
    		}
    	}
    	return $list;
    }

    public static function GetDataByBatchTemplate($batch, $template)
    {
    	$c = new Criteria();
    	$c->add(self::TEMPLATE, $template);
    	$c->add(self::BATCH, $batch);
    	$c->addAscendingOrderByColumn(self::ORDER_BY);
    	$rs = self::doSelect($c);
    	return $rs;
    }     
    
    public static function GetOneDataByBatch($batch)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$c->addAscendingOrderByColumn(self::ORDER_BY);
    	$rs = self::doSelectOne($c);
    	return $rs;
    }     
    
    public static function GetPrintedByBatch($batch)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$rs = self::doSelect($c);
    	$printed = 0;
    	$count = 0;
    	foreach($rs as $r){
    		$count++;
    		if ($r->getIsPrinted()){
    			$printed++;
    		}
    	}
    	return $printed.'/'.$count;
    }

    public static function DeleteBatch($batch)
    {
    	$c = new Criteria();
    	$c->add(self::BATCH, $batch);
    	$rs = self::doDelete($c);
    	return ;
    }    
}
