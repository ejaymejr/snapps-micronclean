<?php
class HrLib
{
	function __construct()
	{
	}

	function __destruct()
	{
	}

	static function DisplayArray($data){
		foreach($data as $kd=>$vd){
			echo 'key ['.$kd.']: '.$vd.'<br>';
		}
	}

	static function ExecuteMercurySQL($db = null, $sql)
	{
		//mercury_online_garment
		$db = $db? $db : 'mercury_online_garment';
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
	
	static function GetMercuryCustomerList()
	{
		$sql = "select customer from garmentInformation group by customer order by customer";
		$res = self::ExecuteMercurySQL('', $sql);
		$customer = array();
		while ($res->next()):
			$customer[ $res->getString('customer') ] = $res->getString('customer');
		endwhile;	
		$customer['WD MEDIA (SINGAPORE) PTE LTD'] = 'WD MEDIA (SINGAPORE) PTE LTD';
		return $customer;
	}


		
	static function GetMercuryColorList($customer= null)
	{
		$where = '';
		$sql = "select color from color_attr"; 
		if ($customer) $where .= 'customer= "' . $customer.'"';  
		if ($where) $where = ' where ' . $where;
		$sql .= $where .  " group by customer order by color";
//		var_dump($sql);
// 		exit();
		$res = self::ExecuteMercurySQL('', $sql);
		$color = array();
		while ($res->next()):
			$color[ $res->getString('color') ] = $res->getString('color');
		endwhile;
		return $color;
	}
	
	static function GetMercuryTypeList($customer= null)
	{
		//$sql = "select type from garmentInformation group by customer order by type";
		$where = '';
		$sql = "select type from type_attr";
		if ($customer) $where .= 'customer= "' . $customer.'"';
		if ($where) $where = ' where ' . $where;
		$sql .= $where .  " group by customer order by type";
		
		$res = self::ExecuteMercurySQL('', $sql);
		$gtype = array();
		while ($res->next()):
			$gtype[ $res->getString('type') ] = $res->getString('type');
		endwhile;
		return $gtype;
	}
	
	static function GetRejectAttrByCompany($co = null )
	{
		$co = $co ? $co : 'micronclean';
		$sql = "select * from reject_attr where customer = '".$co."' order by customer, garment_type, reason";
		$res = self::ExecuteMercurySQL('', $sql);
		$gtype = array();
		while ($res->next()):
			$gtype[ $res->getString('reason') ] = $res->getString('reason');
		endwhile;
		return $gtype;
	}
	
	static function GetMercurySizeList()
	{
		$sql = "select size from garmentInformation group by customer order by size";
		$res = self::ExecuteMercurySQL('', $sql);
		$size = array();
		while ($res->next()):
			$size[ $res->getString('size') ] = $res->getString('size');
		endwhile;
		return $size;
	}
	
	static function GetMercuryDepartmentList()
	{
		//$sql = "select department from department_attr where customer = 'seagate' order by department";
		$sql = "select department from department_attr order by department";
		$res = self::ExecuteMercurySQL("", $sql);
		$deptList = array();
		while ($res->next()):
			$deptList[ $res->getString('department') ] = $res->getString('department');
		endwhile;	
		return $deptList;
	}
	
	static function GetMercuryGarmentList($co = null)
	{
		//$sql = "select department from department_attr where customer = 'seagate' order by department";
		$coList = (implode("','", $co) );
		$where = '';
		if ($coList) $where = " where customer in ( '" . $coList . "' )";
		$sql = "select type from garmentInformation ".$where." group by type order by type";
		$res = self::ExecuteMercurySQL('', $sql);
		$garmentList = array();
		while ($res->next()):
			if ($res->getString('type') <> '')
			$garmentList[ $res->getString('type') ] =  self::ValueAsID($res->getString('type'));
		endwhile;
		//var_dump($garmentList);
		return $garmentList;
	}
	
	static function ValueAsID($value)
	{
		return str_replace(' ', '_', $value );
	}
	static function ExecuteSQL($sql)
	{
		$con = Propel::getConnection('hr');
		$stmt = $con->PrepareStatement($sql);
		$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
		return $rs;
		//        $this->sql = "
		//        SELECT *
		//        FROM inventory_transaction
		//        WHERE transaction_date <= '" . $this->date . "'
		//        AND transaction_date > '2006-12-30'
		//        $wheres
		//        ORDER BY transaction_date DESC
		//        LIMIT 1
		//    ";

	}

	public function GetStartDate($pcode)
	{
		$dt = substr($pcode, 0, 8);
		return date('Y-m-d', mktime(1, 1, 1, strval(substr($dt, 4, 2)), strval(substr($dt, 6, 2)), strval(substr($dt, 0, 4)) ) );
	}

	public function GetEndDate($pcode)
	{
		$dt = substr($pcode, 9, 8);
		return date('Y-m-d', mktime(1, 1, 1, strval(substr($dt, 4, 2)), strval(substr($dt, 6, 2)), strval(substr($dt, 0, 4)) ) );
	}

	public function GenerateTextFile($period='sample')
	{
		$filename = $period.'.txt';
		$somecontent = "Add this to the file\n";

		// Let's make sure the file exists and is writable first.
		if (is_writable($filename)) {

			// In our example we're opening $filename in append mode.
			// The file pointer is at the bottom of the file hence
			// that's where $somecontent will go when we fwrite() it.
			if (!$handle = fopen($filename, 'a')) {
				echo "Cannot open file ($filename)";
				exit;
			}

			// Write $somecontent to our opened file.
			if (fwrite($handle, $somecontent) === FALSE) {
				echo "Cannot write to file ($filename)";
				exit;
			}

			echo "Success, wrote ($somecontent) to file ($filename)";

			fclose($handle);

		} else {
			echo "The file $filename is not writable";
		}

	}

	static function ShowLog()
	{
		echo ("
			<script type='text/javascript'>
			function open_win()
			{
				window.open('','_blank','toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400');
			}
			</script>
			");
		//echo javascript_tag("open_win();");
	}
	static function GetChartDataforNoDtr($empList)
	{
		foreach($empList as $empNo)
		{
				
		}
	}
	static function GetChartData($empList, $sdt, $edt)
	{
		$tReq    = array();
		$tAbs    = array();
		$tDura   = array();
		$tOt     = array();
		$tUt	 = array();
		$tMeal	 = array();
		$tDt     = array();
		$diff    = DateUtils::DateDiff('d', $sdt, $edt);
		$pos  	 = 0;
		$xpos    = 0;
		$tickLabels = '';
		$ballonLabels = '';
		$initLabels = false;
		$pntr	 = array();
		$empCnt  = 0;

		for($x=0; $x<=$diff; $x++)
		{
			$pntr[]    = DateUtils::AddDate($sdt, $x);
			$tOt []    = '';
			$tReq[]    = '';
			$tAbs[]    = '';
			$tDura[]   = '';
			$tUt[]     = '';
			$tMeal[]   = '';
			$tDt[]     = '';
			$tAllw[]   = '';
			$dPay[]    = 0;	//daily pay
			$otPay[]   = 0;
			$utDed[]   = 0;
			$meal[]    = 0;
			$allw[]    = 0;

		}
		$empData = array();
		$monthCnt = 0;
		foreach($empList as $empNo=>$eName)
		{
			$dtrData   = TkDtrsummaryPeer::GetDatabyEmployeeNoDateRange($empNo, $sdt, $edt);
			$allowance = PayBasicPayPeer::GetOptimizedDatabyEmployeeNo($empNo, array('allowance'));
			$dAll      = ($allowance) ? round($allowance->get('ALLOWANCE') / 26, 2) : 0;
			if ( $dtrData )
			{
				$cpos = 0;
				$monthCnt ++;
				//echo $empCnt .' - '. $empNo . '<br>';
				foreach ($dtrData as $rec)
				{
					$empCnt = $empCnt + (($rec->getAcDura() > 0)? 1: 0 );
					//------------------------ init labels on first pass
					if (!$initLabels)
					{
						$ballonLabels[]		 = $rec->getTransDate();
						$tickLabels[] 	 	 = DateUtils::DUFormat('d', $rec->getTransDate() );
					}

					//------------------------ search date before update
					$pos = $rec->getTransDate();
					if (in_array($pos, $pntr))
					{
						$xpos = array_search($pos, $pntr);
						$tOt[$xpos] 	= $tOt[$xpos]   + $rec->getOvertimes();
						$tReq[$xpos] 	= $tReq[$xpos]  + $rec->getNormal();
						$utDed[$xpos]   = $utDed[$xpos] + ($rec->getPostedAmount() < 0 ? $rec->getPostedAmount() : 0);
						$otPay[$xpos]   = $otPay[$xpos] + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0);
						$tMeal[$xpos]   = $tMeal[$xpos] + $rec->getMeal();
						$tAllw[$xpos]   = $tAllw[$xpos] + $dAll + $rec->getAllowance();
						$tDt[$xpos]     = $rec->getTransDate();
						if ( $rec->getUndertime() && $rec->getAttendance() != 'A')
						{
							$tUt[$xpos] = $tUt[$xpos] + ( $rec->getUndertime());
							$tReq[$xpos] 	= $tReq[$xpos] + ($rec->getUndertime()) ;
						}

						if ( $rec->getAttendance() == 'A' && $rec->getDayOff() <> 'Y' )
						{
							$tAbs[$xpos]  	= $tAbs[$xpos] - $rec->getNormal();
							$tReq[$xpos] 	= $tReq[$xpos] - $rec->getNormal();
						}
						$dPay[$xpos] = $dPay[$xpos] + ( $rec->getRatePerHour() * ($rec->getAcDura() - $rec->getOvertimes() + $rec->getUndertime()) );
					}
					$empData['empno'][] = $rec->getEmployeeNo();
					$empData['name'][]  = $rec->getName();
					$empData['date'][]  = $rec->getTransDate();
					$empData['duration'][]= $rec->getAcDura();
					$empData['normal'][]= $rec->getNormal();
					$empData['ot'][]    = $rec->getOvertimes();
					$empData['ut'][]    = $rec->getUndertime();
					$empData['otpay'][] = $rec->getPostedAmount();
					$empData['pi'][]    = $rec->getPartTimeIncome();
					$empData['meal'][]  = $rec->getMeal();
					$empData['absent'][]= 0;
					$empData['allw'][]  = $dAll + $rec->getAllowance();
					//echo  $dAll .' + '. $rec->getAllowance() . '<--- test <br>';
					if ( $rec->getUndertime() && $rec->getAttendance() != 'A')
					{
						$empData['ut'][$cpos]      = $rec->getUndertime();
						$empData['normal'][$cpos]  = $rec->getNormal() + $rec->getUndertime();
					}
					if ( $rec->getAttendance() == 'A' && $rec->getDayOff() <> 'Y' )
					{
						$empData['absent'][$cpos]  = - $rec->getNormal();
						$empData['normal'][$cpos]  = 0;
					}
					$cpos ++;
				} // dtr Data
				$initLabels = true;
			}

		}
		$plotDatas['DATE']   = $tDt;
		$plotDatas['OT']     = $tOt;
		$plotDatas['UT']     = $tUt;
		$plotDatas['ABSENT'] = $tAbs;
		$plotDatas['REQD']   = $tReq;
		$plotDatas['OTPAY']  = $otPay;
		$plotDatas['UTDED']  = $utDed;
		$plotDatas['PAY']    = $dPay;
		$plotDatas['MEAL']   = $tMeal;
		$plotDatas['ALLW']   = $tAllw;

		$sOt = 0;
		$sUt = 0;
		$sAb = 0;
		$sRe = 0;
		$sOP = 0; //summary OT Pay
		$sUD = 0; //summary UnderTime Deduction
		$sDP = 0; //summary Daily Pay
		$sMeal = 0;
		$sAllw = 0;
		$tPay  = 0;  // total pay
		//-------------------- generate Summary
		foreach($plotDatas['OT'] as $ke=>$ve)
		{
			$sOt   += $plotDatas['OT'][$ke];
			$sUt   += $plotDatas['UT'][$ke];
			$sAb   += $plotDatas['ABSENT'][$ke];
			$sRe   += $plotDatas['REQD'][$ke];
			$sOP   += $plotDatas['OTPAY'][$ke];
			$sUD   += $plotDatas['UTDED'][$ke];
			$sDP   += $plotDatas['PAY'][$ke];
			$sMeal += $plotDatas['MEAL'][$ke];
			$sAllw += $plotDatas['ALLW'][$ke];
			//echo $plotDatas['DATE'][$ke] .' - '. $plotDatas['REQD'][$ke] . '<br>';

		}
		$addInfo = array($tickLabels, $ballonLabels, round($sOt), round($sUt), round($sAb), round($sRe), round($sOP), round($sUD), round($sDP), round($sMeal), round($empCnt), round($sAllw), round($monthCnt),);
		return array($plotDatas, $addInfo, $empData);
	}

	public static function GetChartDataLedgerArchive($empNo, $batch, $co=null,  $eGroup)
	{
		if ( $empNo )
		{
			$empInfo = PayEmployeeLedgerArchivePeer::GetJournalListing($empNo, $batch, '', '');
		}else{
			$empInfo = PayEmployeeLedgerArchivePeer::GetJournalListing('', $batch, '', $co, $eGroup);
		}

		$pos = 0;
		$chartData = array();
		$sDp  = 0;
		$sOt  = 0;
		$sAll = 0;
		$sMe  = 0;
		$sOth = 0;
		$oth  = 0;
		$cnt  = 0;

		$chartData['BASIC'] = $empInfo['basic'];
		$chartData['OT'] 	 = $empInfo['ot'];
		$chartData['ALL'] 	 = $empInfo['ml'];
		$chartData['MEAL']  = $empInfo['mr'];

		foreach($empInfo['empno'] as $ke=>$ve)
		{
			//$chartData3['OTHERS']= array(0)
			$sDp  += round($empInfo['basic'][$pos], 2);
			$sOt  += round($empInfo['ot'][$pos], 2);
			$sAll += round($empInfo['ml'][$pos], 2);
			$sMe  += round($empInfo['meal'][$pos], 2);
			$oth  =  round($empInfo['ul'][$pos], 2 );
			$sOth += $oth;
			$pos++;
		}

		$addInfo = array($sDp, $sOt, $sAll, $sMe, $sOth, $pos );
		return array($chartData, $addInfo);
	}

	public static function SumDailyData($cdt, $empData)
	{
		if ( ! is_array($empData))
		{
			return;
		}
		$sDura = 0;
		$sNorm = 0;
		$sOt   = 0;
		$sUt   = 0;
		$sOpay = 0;
		$sPi   = 0;
		$sMeal = 0;
		$sAbs  = 0;
		$pos = 0;
		foreach($empData['date'] as $kd=>$vd)
		{
			if ($vd == $cdt)
			{
				$sDura += $empData['duration'][$pos];
				$sNorm += $empData['normal'][$pos];
				$sOt   += $empData['ot'][$pos];
				$sUt   += $empData['ut'][$pos];
				$sOpay += $empData['otpay'][$pos];
				$sPi   += $empData['pi'][$pos];
				$sMeal += $empData['meal'][$pos];
				$sAbs  += $empData['absent'][$pos];
				//echo $empData['date'][$pos] .' - '. $empData['normal'][$pos] .'<br>';
			}
			$pos ++ ;
		}
		return array($sDura, $sNorm, $sOt, $sUt, $sOpay, $sPi, $sMeal, $sAbs);
	}


	public static function oldcode()
	{
		//$empList = TkDtrmasterPeer::GetEmployeeNameList($sf_params->get('company')) ;
		//			$empList = array('S1723139A'=>'S1723139A', '057936665121007'=>'057936665121007', '512458114220805'=>'512458114220805');

		//		$tReq    = array();
		//		$tAbs    = array();
		//		$tDura   = array();
		//		$tOt     = array();
		//		$tUt	 = array();
		//		$diff    = DateUtils::DateDiff('d', $sdt, $edt);
		//		$pos  	 = 0;
		//		$xpos    = 0;
		//		$tickLabels = '';
		//		$ballonLabels = '';
		//		$initLabels = false;
		//		$pntr	 = array();
		//
		//		for($x=0; $x<=$diff; $x++)
		//		{
		//			$pntr[]  = DateUtils::AddDate($sdt, $x);
		//			$tOt []  = '';
		//			$tReq[]  = '';
		//			$tAbs[]  = '';
		//			$tDura[] = '';
		//			$tUt[]   = '';
		//		}
		//
		//		foreach($empList as $empNo=>$eName)
		//		{
		//			$dtrData = TkDtrsummaryPeer::GetDatabyEmployeeNoDateRange($empNo, $sdt, $edt);
		//			if ( $dtrData )
		//			{
		//				foreach ($dtrData as $rec)
		//				{
		//					//------------------------ init labels on first pass
		//					if (!$initLabels)
		//					{
		//						$ballonLabels[]		 = $rec->getTransDate();
		//						$tickLabels[] 	 	 = DateUtils::DUFormat('d', $rec->getTransDate() );
		//					}
		//
		//					//------------------------ search date before update
		//					$pos = $rec->getTransDate();
		//					if (in_array($pos, $pntr))
		//					{
		//						$xpos = array_search($pos, $pntr);
		//						$tOt[$xpos] = $tOt[$xpos] + $rec->getOvertimes();
		//						$tReq[$xpos] 	= $tReq[$xpos] + $rec->getNormal();
		//
		//						if ( $rec->getUndertime() && $rec->getAttendance() != 'A')
		//						{
		//							$tUt[$xpos] = $tUt[$xpos] + ( $rec->getUndertime() * -1);
		//						    $tReq[$xpos] 	= $tReq[$xpos] + ($rec->getUndertime() * -1) ;
		//						}
		//
		//						if ( $rec->getAttendance() == 'A' )
		//						{
		//							$tAbs[$xpos]  	= $tAbs[$xpos] + $rec->getNormal();
		//							$tReq[$xpos] 	= $tReq[$xpos] - $rec->getNormal();
		//						}
		//
		//
		//						//echo $rec->getName() .''. $rec->getTransDate().''. $rec->getOvertimes().'<br>';
		//					}
		//				} // dtr Data
		//				$initLabels = true;
		//			}
		//		}
		//		$plotDatas['OT']     = $tOt;
		//		$plotDatas['UT']     = $tUt;
		//		$plotDatas['ABSENT'] = $tAbs;
		//		$plotDatas['REQD']   = $tReq;
		//
		//		$sOt = 0;
		//		$sUt = 0;
		//		$sAb = 0;
		//		$sRe = 0;
		//		//-------------------- generate Summary
		//		foreach($plotDatas['OT'] as $ke=>$ve)
		//		{
		//			$sOt += $plotDatas['OT'][$ke];
		//			$sUt += $plotDatas['UT'][$ke];
		//			$sAb += $plotDatas['ABSENT'][$ke];
		//			$sRe += $plotDatas['REQD'][$ke];
		//		}

	}


	function returnmacaddress() {
		// This code is under the GNU Public Licence
		// Written by michael_stankiewicz {don't spam} at yahoo {no spam} dot com
		// Tested only on linux, please report bugs

		// WARNING: the commands 'which' and 'arp' should be executable
		// by the apache user; on most linux boxes the default configuration
		// should work fine

		// get the arp executable path
		$location = `which arp`;
		$location = rtrim($location);
		// Execute the arp command and store the output in $arpTable
		$arpTable = `$location -n`;
		// Split the output so every line is an entry of the $arpSplitted array
		$arpSplitted = split("\n",$arpTable);
		// get the remote ip address (the ip address of the client, the browser)
		$remoteIp = $GLOBALS['REMOTE_ADDR'];
		$remoteIp = str_replace(".", "\\.", $remoteIp);
		// Cicle the array to find the match with the remote ip address
		foreach ($arpSplitted as $value) {
			// Split every arp line, this is done in case the format of the arp
			// command output is a bit different than expected
			$valueSplitted = split(" ",$value);
			foreach ($valueSplitted as $spLine) {
				if (preg_match("/$remoteIp/",$spLine)) {
					$ipFound = true;
				}
				// The ip address has been found, now rescan all the string
				// to get the mac address
				if ($ipFound) {
					// Rescan all the string, in case the mac address, in the string
					// returned by arp, comes before the ip address
					// (you know, Murphy's laws)
					reset($valueSplitted);
					foreach ($valueSplitted as $spLine) {
						if (preg_match("/[0-9a-f][0-9a-f][:-]".
		"[0-9a-f][0-9a-f][:-]".
		"[0-9a-f][0-9a-f][:-]".
		"[0-9a-f][0-9a-f][:-]".
		"[0-9a-f][0-9a-f][:-]".
		"[0-9a-f][0-9a-f]/i",$spLine)) {
						return $spLine;
		}
					}
				}
				$ipFound = false;
			}
		}
		return false;
	}

	public static function selfURL()
	{ 
		if(!isset($_SERVER['REQUEST_URI'])){ 
			$serverrequri = $_SERVER['PHP_SELF']; 
		}else{ 
			$serverrequri = $_SERVER['REQUEST_URI']; 
		} 
		$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
		//var_dump($_SERVER["SERVER_PROTOCOL"]);
		$protocol = 'http' .$s; 
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
		return $protocol."://".$_SERVER['SERVER_NAME'].$port.$serverrequri; 
	}
	
	public static function LogThis($user, $action, $desc, $actionModule)
	{
		$rec = new HrLog();
		$rec->setUser($user);
		$rec->setUserAction($action);
		$rec->setDescription($desc);
		$rec->setActionModule($actionModule);
		$rec->setDateCreated(DateUtils::DUNow());
		$rec->save();
	}
	
	public static function randomID($length = null){
		$length = $length ? $length : 10;
	    $key = '';
	    $keys = array_merge(range(0, 9), range('a', 'z'));
	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	    return $key;
	}
	
	public static function curPageURL() {
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

	
  function getMac(){
      $mac          = "";
      $cmd_info     = "";
      $mac_address  = "";

      
      ob_start();
      system("ipconfig /all");
      $cmd_info=ob_get_contents();
      ob_clean();
      $mac          = strpos($cmd_info, 'Physical');
      $mac_address  = substr($cmd_info,($mac+36),17);//MAC Address
      return $mac_address;
  } 
    
	public static function CamelCase($str) {
	    $i = array("-","_");
	    $str = preg_replace('/([a-z])([A-Z])/', "\\1 \\2", $str);
	    $str = preg_replace('@[^a-zA-Z0-9\-_ ]+@', '', $str);
	    $str = str_replace($i, ' ', $str);
	    $str = str_replace(' ', '', ucwords(strtolower($str)));
	    $str = strtolower(substr($str,0,1)).substr($str,1);
	    $str = ucfirst($str); //upper case first character
	    return $str;
	}
	
	public static function uncamelCase($str) {
	    $str = preg_replace('/([a-z])([A-Z])/', "\\1_\\2", $str);
	    $str = strtolower($str);
	    return $str;
	}	
	
	public static function DownloadScript()
	{
		$filename = './upload/'.$_GET['path'];
		// required for IE, otherwise Content-disposition is ignored
		if(ini_get('zlib.output_compression'))
		  ini_set('zlib.output_compression', 'Off');
		
		// addition by Jorg Weske
		$file_extension = strtolower(substr(strrchr($filename,"."),1));
		
		if( $filename == "" ) 
		{
		  echo "<html><title>Download Script</title><body>ERROR: download file NOT SPECIFIED. USE force-download.php?file=filepath</body></html>";
		  exit;
		} elseif ( ! file_exists( $filename ) ) 
		{
		  echo "<html><title>Download Script</title><body>ERROR: File not found. USE force-download.php?file=filepath</body></html>";
		  exit;
		};
		switch( $file_extension )
		{
		  case "pdf": $ctype="application/pdf"; break;
		  case "exe": $ctype="application/octet-stream"; break;
		  case "zip": $ctype="application/zip"; break;
		  case "doc": $ctype="application/msword"; break;
		  case "xls": $ctype="application/vnd.ms-excel"; break;
		  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
		  case "gif": $ctype="image/gif"; break;
		  case "png": $ctype="image/png"; break;
		  case "jpeg":
		  case "jpg": $ctype="image/jpg"; break;
		  default: $ctype="application/force-download";
		}
		header("Pragma: public"); // required
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false); // required for certain browsers 
		header("Content-Type: $ctype");
		// change, added quotes to allow spaces in filenames, by Rajkumar Singh
		header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: ".filesize($filename));
		readfile("$filename");
		exit();

	}
	
	public static function PopUpDialog($trigger, $title, $content)
	{
		$content = self::html_compress($content);
		$mess = '
			<script type="text/javascript">
			$(document).ready(function(){
				$("#'.$trigger.'").on(\'click\', function(){
					$.Dialog({
					shadow: true,
					overlay: false,
					icon: \'<span class="icon-comments-4 fg-white"></span>\',
					title: "'.$title.'",
					width: 500,
					padding: 10,
					content: "'.$content.'"
					});
				});
			});
			</script>';
		return $mess;
	}
	
	public static function html_compress($buf){
	    $buf = str_replace(array("\n","\r","\t"),'',$buf);
	    return str_replace('"',"'",$buf);
	}
	
	public static function StringAsVariable()
	{
		//$pager = ${'pager'.DateUtils::DUFormat('l', $cdate)};
		return;
	}
	
}
