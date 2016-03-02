<?php

/**
 * Subclass for performing query and update operations on the 'inspection_field_list' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class InspectionFieldListPeer extends BaseInspectionFieldListPeer
{
	public static function GetPager($cd)
    {
    	$results = 20;        
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $results);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        $c = clone($cd);
        $pager = new sfPropelPager('InspectionFieldList', $rowsPerPage);                    
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
    
    public static function GetFieldList()
    {
    	$c = new Criteria();
    	$c->clearSelectColumns();
		$c->addSelectColumn(self::ID);    	
    	$c->addSelectColumn(self::FIELD_NAME);
    	$c->addSelectColumn(self::FIELD_TYPE);
    	$c->addSelectColumn(self::REMARK);
    	$c->add(self::STATUS, 'A');
    	$c->addAscendingOrderByColumn(self::SEQ);
    	$rs = self::doSelectRS($c);
    	$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
    	$fList = array('id'=>array(),'field_name'=>array(), 'field_type'=>array(), 'remark'=>array());
    	while($rs->next())
    	{
    		$fList['id'][] = $rs->get('ID');
    		$fList['field_name'][] = $rs->get('FIELD_NAME');
    		$fList['field_type'][] = $rs->get('FIELD_TYPE');
    		$fList['remark'][]	   = $rs->get('REMARK'); 
    	}
    	return $fList;
    }

    public static function GetNewIndexSeq()
    {
    	$c = new Criteria();
    	$c->clearSelectColumns();
    	$c->addSelectColumn(self::SEQ);
    	$c->add(self::STATUS, 'A');
    	$c->addDescendingOrderByColumn(self::SEQ);
    	$rs = self::doSelectRS($c);
    	$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
    	while($rs->next())
    	{	
    		return $rs->get('SEQ') + 1;
    	}
    }    
    
    public static function removU()
    {
    	$c = new Criteria();
    	$rs = self::doSelect($c);
    	//var_dump($rs);
    	foreach($rs as $rec)
    	{
    		$name = str_replace('_', ' ', $rec->getFieldName());
    		echo $name . ' <--- test <br>';
    		$rec->setFieldName($name);
    		$rec->save();
    	}
    	exit();
    }
    
}
