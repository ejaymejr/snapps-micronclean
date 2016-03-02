<?php

/**
 * Subclass for performing query and update operations on the 'garmentInformation' table.
 *
 * 
 *
 * @package lib.model.manage
 */ 
class GarmentinformationPeer extends BaseGarmentinformationPeer
{
	public static function CheckGarmentRecord($garment, $customer, $iDate)
	{		
		$sql = 'SELECT * FROM garmentInformation where garment_code = "' . $garment .'" and customer = "' . $customer .'" and inserted_date = "' . $iDate .'"order by inserted_date desc limit 1';
		$rs = self::ExecuteSQL('', $sql);
		$detail = '';
		while($rs->next()):
			return true;
		endwhile;
		return false;
		
	}
	
	public static function ExecuteSQL($db = null, $sql)
	{
		//mercury_online_garment
		if ($sql == 'truncate garmentInformation' || $sql == 'delete from garmentInformation where date(inserted_date) >= "2011-01-01" '):
			// --- do not touch this code
			$db = 'reject_photo';
			$con = Propel::getConnection($db);
			$stmt = $con->PrepareStatement($sql);
			$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
			return;
		endif;
//		var_dump($sql);
//		exit();
		$db = $db? $db : 'reject_photo';
		$con = Propel::getConnection($db);
		$stmt = $con->PrepareStatement($sql);
		$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
	
		return $rs;
//          $sql = "select * from garmentInformation order by customer, type, size";
//        	$res = RejectLib::ExecuteSQL('mercury_online_garment', $sql);
//			while ($res->next()):
//				$garments[ $res->getString('garment_code') ] = $res->getString('customer') .'_' . $res->getString('type') .'_' .$res->getString('size') .'_' .$res->getString('color') ;
//			endwhile;		
	}
	
	public static function ClearEntry()
	{
		//$sql = 'truncate garmentInformation';
		$sql = 'delete from garmentInformation where date(inserted_date) >= "2011-01-01" ';
		$rs = self::ExecuteSQL('', $sql);
		return;
	}
		
	public static function GetGarmentTextDetailByGarmentCode($gCode)
	{
		$sql = 'SELECT * FROM garmentInformation where garment_code = "' . $gCode .'" order by inserted_date desc limit 1';
		$rs = self::ExecuteSQL('', $sql);
		$detail = '';
		while($rs->next()):
			$detail =  $rs->getString('customer') .' | '. $rs->getString('type') .' | '. $rs->getString('size') . ' | ' . $rs->getString('color');
		endwhile;
		return $detail;
		
	}
	
	public static function GetCustomer($customer, $garment, $size, $color, $xwash)
	{
//		$c = new Criteria();
//		$
		$sql = 'SELECT * FROM garmentInformation where status is not null and (customer is not null or customer <> "") ';
//		if ($customer) :
//			$sql = $sql . 'and customer in (' . implode(',' ,$customer) .' )';
//		endif; 
//		if ($garment) :
//			$sql = $sql . 'and type in (' . implode(',' ,$garment) .' )';
//		endif; 
//		if ($size) :
//			$sql = $sql . 'and size in (' . implode(',' ,$size) .' )';
//		endif;
//		if ($color) :
//			$sql = $sql . 'and color in (' . implode(',' ,$color) .' )';
//		endif;
//		if ($xwash) :
//			$sql = $sql . self::GetTimesWashArgs($xwash);
//		endif;		
		$sql = $sql . ' GROUP BY customer';

		$rs = self::ExecuteSQL('', $sql);
		$list = array();
//		var_dump($rs);
//		exit();
		while($rs->next()):
			$list["'".$rs->getString('customer')."'"] = $rs->getString('customer');
		endwhile;
		return $list;
	}
			
	public static function GetType($customer, $garment, $size, $color, $xwash)
	{
		$sql = 'SELECT * FROM garmentInformation where status is not null ';
		if ($customer) :
			$sql = $sql . 'and customer in (' . implode(',' ,$customer) .' )';
		endif; 
		$sql = $sql . ' GROUP BY garmentInformation.TYPE';
		$rs = self::ExecuteSQL('', $sql);
		$list = array();
		while($rs->next()):
			$list["'".$rs->getString('type')."'"] = $rs->getString('type');
		endwhile;
		return $list;
	}
	
	public static function GetSize($customer, $garment, $size, $color, $xwash)
	{
		$sql = 'SELECT * FROM garmentInformation where status is not null ';
		if ($customer) :
			$sql = $sql . 'and customer in (' . implode(',' ,$customer) .' )';
		endif; 
		//var_dump($sql);
		//exit();
		$sql = $sql . ' GROUP BY garmentInformation.SIZE';
		$rs = self::ExecuteSQL('', $sql);
		$list = array();
		while($rs->next()):
			$list["'".$rs->getString('size')."'"] = $rs->getString('size');
		endwhile;
		return $list;
	}
	
	public static function GetColor($customer, $garment, $size, $color, $xwash)
	{
		$sql = 'SELECT * FROM garmentInformation where status is not null ';
		if ($customer) :
			$sql = $sql . 'and customer in (' . implode(',' ,$customer) .' )';
		endif; 
//		if ($garment) :
//			$sql = $sql . 'and type in (' . implode(',' ,$garment) .' )';
//		endif; 
//		if ($size) :
//			$sql = $sql . 'and size in (' . implode(',' ,$size) .' )';
//		endif;
//		if ($color) :
//			$sql = $sql . 'and color in (' . implode(',' ,$color) .' )';
//		endif;
//		if ($xwash) :
//			$sql = $sql . self::GetTimesWashArgs($xwash);
//		endif;
		$sql = $sql . ' GROUP BY garmentInformation.COLOR';		
		$rs = self::ExecuteSQL('', $sql);
		$list = array();
		while($rs->next()):
			$list["'".$rs->getString('color')."'"] = $rs->getString('color');
		endwhile;
		return $list;
	}
	
	public static function GetTimesWashArgs($xwash)
	{
		switch($xwash):
			case 0:
				return '';
			case 50:
				return 'and no_of_times_wash >= 1 and no_of_times_wash <= 50 ';
			case 100:
				return 'and no_of_times_wash >= 51 and no_of_times_wash <= 100 ';
			case 150:
				return 'and no_of_times_wash >= 101 and no_of_times_wash <= 150 ';
			case 200:
				return 'and no_of_times_wash >= 151 and no_of_times_wash <= 200 ';
			case 250:
				return 'and no_of_times_wash >= 201 and no_of_times_wash <= 250 ';
			case 251:
				return 'and no_of_times_wash >= 251 ';
		endswitch;
	}
	
	public static function GetTimesWashArgsForCriteria($xwash)
	{
		switch($xwash):
			case 0:
				return '';
			case 50:
				return ' no_of_times_wash >= 1 and no_of_times_wash <= 50 ';
			case 100:
				return ' no_of_times_wash >= 51 and no_of_times_wash <= 100 ';
			case 150:
				return ' no_of_times_wash >= 101 and no_of_times_wash <= 150 ';
			case 200:
				return ' no_of_times_wash >= 151 and no_of_times_wash <= 200 ';
			case 250:
				return ' no_of_times_wash >= 201 and no_of_times_wash <= 250 ';
			case 251:
				return ' no_of_times_wash >= 251 ';
		endswitch;
	}
	
	public static function GetGarmentListByCustomer($customer, $garment, $size, $color, $xwash)
	{
		$garmentCodeList = PhotoDetailPeer::GetGarmentCodeSql();
		
		$sql = 'SELECT * FROM garmentInformation   ';
		if ($customer) :
			//$sql = $sql . 'and customer in (' . implode(',' ,$customer) .' )';
			$sql = $sql . 'where customer = "'. $customer . '" ';
		endif; 
		if ($garment) :
			$sql = $sql . 'and type in (' . implode(',' ,$garment) .' )';
		endif; 
		if ($size) :
			$sql = $sql . 'and size in (' . implode(',' ,$size) .' )';
		endif;
		if ($color) :
			$sql = $sql . 'and color in (' . implode(',' ,$color) .' )';
		endif;
		if ($xwash) :
			$sql = $sql . self::GetTimesWashArgs($xwash);
		endif;		
		$sql = $sql . 'and garment_code in ('.$garmentCodeList.')';
//		var_dump($sql);
		$rs = self::ExecuteSQL('', $sql);
		$list = array();
		while($rs->next()):
			$list[$rs->getString('garment_code')] = $rs->getString('garment_code');
		endwhile;
		return $list;
	}
}
