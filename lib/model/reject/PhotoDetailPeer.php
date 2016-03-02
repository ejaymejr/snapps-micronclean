<?php

/**
 * Subclass for performing query and update operations on the 'photo_detail' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class PhotoDetailPeer extends BasePhotoDetailPeer
{
    const CUSTOM = "CUSTOM";
    
    public static function GetPager($cd, $res = null)
    {        
    	$res = $res? $res : 20;
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $res);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        
        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1); 
        
        $c = clone($cd);
        $pager = new sfPropelPager('PhotoDetail', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }	
    
	public static function GetDataByGarmentCode($garment)
	{
		$c = new Criteria();
		$c->add(self::GARMENT_CODE, $garment);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetDataByBatchId($bID)
	{
		$c = new Criteria();
		$c->add(self::BATCH_ID, $bID);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function GetGarmentCodeSql()
	{
		$c = new Criteria();
		$rs = self::doSelect($c);
		$list = '';
		foreach($rs as $r):
			$list = $list . ", '" . $r->getGarmentCode() . "'" ;
		endforeach;
		return substr($list, 1);
	}
	

	
	public static function GetAllCustomer()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = self::GenerateArrayList($rs, "getName");
		return $list;
	}
	
	public static function GetAllCustomerList()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array();
		foreach ($rs as $r):
			$list[$r->getName()] = $r->getName();
		endforeach;
		return $list;
	}
	
	public static function GetAllGarment()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::GARMENT);
		$rs = self::doSelect($c);
		$list = self::GenerateArrayList($rs, "getGarment");
		return $list;
	}
	
	
	public static function GetAllSize()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::SIZE);
		$rs = self::doSelect($c);
		$list = self::GenerateArrayList($rs, "getSize");
		return $list;
	}
	
	public static function GetAllColor()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::COLOR);
		$rs = self::doSelect($c);
		$list = self::GenerateArrayList($rs, "getColor");
		return $list;
	}
	
	public static function GenerateArrayList($rs, $getColumn)
	{
		$list = array();
		foreach ($rs as $r):
			$list[ "'" . $r->$getColumn() ."'"] = '&middot; '.$r->$getColumn() . ' &middot;';
		endforeach;
		return $list;
	}
	
	
	public static function GetDataByCustomerByDepartmentByList($custList=null, $deptList=null, $shiftList=null)
	{
		$c = new Criteria();
		if ($custList) $c->add(self::NAME, $custList, Criteria::IN);
		if ($deptList) $c->add(self::DEPARTMENT, $deptList, Criteria::IN);
		if ($shiftList) $c->add(self::SHIFT, $shiftList, Criteria::IN);
		$rs = self::doSelect($c);
		return $rs;
// 		$list = array();
// 		foreach ($rs as $r):
// 			$list[$r->getBatchId()] = $r->getBatchId();
// 		endforeach;
// 		return $list;
	}
	
	public static function GetBatchIDByName($customer) //By Customer
	{
		$c = new Criteria();
		$c->add(self::NAME, $customer);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[$r->getBatchId()] =  $r->getBatchId();
		endforeach;
		return $list;
	}
}
