<?php

/**
 * Subclass for performing query and update operations on the 'tk_dtrsummary' table.
 *
 *
 *
 * @package lib.model.hr
 */
class TkDtrsummaryPeer extends BaseTkDtrsummaryPeer
{
	const FLAG_PRESENT = 'P';
	const FLAG_ABSENT  = 'A';
	const CUSTOM = "CUSTOM";
	const FLAG_INCOME  = 'I';
	const FLAG_DEDUCTION = 'D';
	const FLAG_POSTEDYES = 'Y';
	const FLAG_POSTEDNO  = 'N';

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
		$pager = new sfPropelPager('TkDtrsummary', $rowsPerPage);

		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}

	public static function GetPagerCount($cd, $rcnt)
	{
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $rcnt);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}

		$page = sfContext::getInstance()->getRequest()->getParameter('page', 1);

		$c = clone($cd);
		$pager = new sfPropelPager('TkDtrsummary', $rowsPerPage);

		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}


	public static function GetDatabyEmployeeNoDateRange($empno, $sdt, $edt )
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);
		return $rs;

		//        $c = new Criteria();
		//        $c->clearSelectColumns();
		//        $c->addSelectColumn(self::EMPLOYEE_NO);
		//        $c->addSelectColumn(self::OVERTIMES);
		//        $c->addSelectColumn(self::MULTIPLIER);
		//        $c->addSelectColumn(self::UNDERTIME);
		//        $c->addSelectColumn(self::ATTENDANCE);
		//        $c->addSelectColumn(self::DAYOFF);
		//        $c->addSelectColumn(self::AC_DURA);
		//        $c->addSelectColumn(self::MEAL);
		//
		//        $c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//        $c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		//        $c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		//        $rs = self::doSelectRS($c);
		//        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		//        return $rs;


	}

	public static function GetEmployeeTotalHoursByDateRangeByTeam($empno, $sdt, $edt, $team )
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn('sum( if(ac_dura > 0, ac_dura, 0 ) ) as TOTAL_HOURS' );
		$c->addSelectColumn('sum( if(overtimes > 0, overtimes, 0 ) ) as TOTAL_OT' );
		$c->addSelectColumn('avg( if(rate_per_hour > 0, rate_per_hour, 0 ) ) as RATE_PER_HOUR' );
		$c->addSelectColumn('sum( if(normal > 0, normal, 0 ) ) as NORMAL_HOUR' );
		$c->addSelectColumn('sum( if(posted_amount > 0, posted_amount, 0 ) ) as POSTED_AMOUNT' ) ;
		$c->addSelectColumn('sum( if(unedited_duration > 0, (unedited_duration ), 0 ) ) as CLOCK_HOURS' ) ;
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if (sizeof($team) <= 9) $c->add(self::TEAM, $team, Criteria::IN);
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		//$c->add(self::ID,'&& || &&', Criteria::CUSTOM);
	    $rs = self::doSelectRS($c);
        $rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
        return $rs;
// 	   while ($rs->next()) 
//        {
//            var_dump($rs);
//            exit();
//            return $rs; // nr of column in select clause
//        }
	}
	
// 	public static function GetEmployeeTotalHoursByDateRangeByTeam($empno, $sdt, $edt, $team )
// 	{
// 		$teamSql = '';
// 				if (sizeof($team) <= 9):
// 					$teamList = "'".implode("','", $team)."'";
// 					$teamSql = ' AND tk_dtrsummary.TEAM IN (' .$teamList. ') ';
// 				endif;
// 		$sql = "
// 			SELECT
// 				  sum( if(tk_dtrsummary.AC_DURA > 0, tk_dtrsummary.AC_DURA, 0 ) ) as TOTAL_HOURS
// 				, sum( if(tk_dtrsummary.OVERTIMES > 0, tk_dtrsummary.OVERTIMES, 0 ) ) as TOTAL_OT
// 				, avg( if(tk_dtrsummary.RATE_PER_HOUR > 0, tk_dtrsummary.RATE_PER_HOUR, 0 ) ) as RATE_PER_HOUR
// 				, sum( if(tk_dtrsummary.NORMAL > 0, tk_dtrsummary.NORMAL, 0 ) ) as NORMAL_HOUR
// 				, sum( if(tk_dtrsummary.posted_amount > 0, tk_dtrsummary.posted_amount, 0 ) ) as POSTED_AMOUNT
// 				, (sum( if(tk_attendance.duration > 0, TIME_TO_SEC(TIMEDIFF(tk_attendance.time_out_orig, tk_attendance.time_in)), 0 ) ) / 3600) as CLOCK_HOURS
// 				FROM tk_dtrsummary LEFT JOIN tk_attendance ON (tk_dtrsummary.EMPLOYEE_NO=tk_attendance.EMPLOYEE_NO)
// 				WHERE tk_dtrsummary.EMPLOYEE_NO='".$empno."'
// 				AND date (tk_attendance.TIME_IN) = tk_dtrsummary.TRANS_DATE
// 				AND DATE(tk_dtrsummary.TRANS_DATE) >= '" . $sdt . "' AND DATE(tk_dtrsummary.TRANS_DATE) <= '". $edt . "'
// 				".$teamSql."
// 				ORDER BY tk_dtrsummary.TRANS_DATE ASC
// 				";
// 		//echo $sql .'<br>';
// 		//exit();
// 		$con = Propel::getConnection('hr');
// 		$stmt = $con->PrepareStatement($sql);
// 		$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
// 		return $rs;
	
// 	}	
	
	public static function GetDatabyEmployeeNoDateRangeByTeam($empno, $sdt, $edt, $team = null )
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if ($team) $c->add(self::TEAM, $team, Criteria::IN);
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);
		return $rs;
	}

	public static function GetDatabyEmployeeNoDateRange1($empno, $sdt, $edt )
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->add(self::IS_POSTED, self::FLAG_POSTEDYES);    //used in computation
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);

		return $rs;
	}

	public static function GetDatabyEmployeeNoDateRangeNotPosted($empNo, $sdt, $edt, $fldList )
	{
		//kebot
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empno);
		//        $c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//        $c->addAscendingOrderByColumn(self::TRANS_DATE);
		//        $rs = self::doSelect($c);
		//        return $rs;

		$c = new Criteria();
		$c->clearSelectColumns();
		foreach($fldList as $kf=>$vf)
		{
			switch(strtolower($vf))
			{
				case 'employee_no':
					$c->addSelectColumn(self::EMPLOYEE_NO);
					break;
				case 'name':
					$c->addSelectColumn(self::NAME);
					break;
				case 'id':
					$c->addSelectColumn(self::ID);
					break;
					 
			}
		}

		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs; // nr of column in select clause
		}

	}


	public static function DeletebyEmployeeNo($empno, $sdt, $edt)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, Criteria::NOT_EQUAL);
		//$c->add(self::IS_POSTED, '&& || &&', Criteria::CUSTOM);
		self::doDelete($c);
		return true;
	}

	public static function DeletebyData($empno=null, $sdt, $edt)
	{
		$c = new Criteria();
		if ($empno)
		{
			$c->add(self::EMPLOYEE_NO, $empno);
		}
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, Criteria::NOT_EQUAL);
		self::doDelete($c);
		return true;
	}

	public static function GetDatabyEmployeeNoDate($empno, $cdate)  //, $sdt, $edt
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE, $cdate);
		$rs = self::doSelectOne($c);
		return $rs;
	}

	public static function GetDatabyDateRange($sdt, $edt )
	{
		$c = new Criteria();
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		$c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelect($c);
		return $rs;
	}

	public static function GetOptimizedDatabyRange($sdt, $edt )
	{
		$c = new Criteria();
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		$c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelect($c);
		return $rs;

	}


	public static function GetSummaryPerIncomePrepostBatch($batch)
	{
		$c = new Criteria();
		$c->add(self::INCOME_PREPOST_BATCH, $batch);
		$c->addGroupByColumn(self::INCOME_PREPOST_BATCH);
		$c->addGroupByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelect($c);
		return $rs;

	}

	public static function GetSummaryPerDeductionPrepostBatch($batch)
	{
		$c = new Criteria();
		$c->add(self::DEDUCTION_PREPOST_BATCH, $batch);
		$c->addGroupByColumn(self::DEDUCTION_PREPOST_BATCH);
		$c->addGroupByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelect($c);
		return $rs;

	}

	public static function GetActualDatabyEmployeeNoDateRange($empno, $sdt, $edt )
	{
//		echo $sdt .' | '. $edt;
//		exit();
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);
		//        foreach($rs as $rec)
		//        {
		//        	echo $rec->getTransDate() .' '. $rec->getOvertimes() .' '. $rec->getUndertime() . '<br>';
		//        }
		//        exit();
		return $rs;
	}

	public static function ClearIsPostedIncome($bNo)
	{
		$c = new Criteria();
		$c->add(self::INCOME_PREPOST_BATCH, $bNo);
		$rs = self::doSelect($c);
		if ($rs)
		{
			foreach ($rs as $res)
			{
				$res->setIncomePrepostBatch(null);
				$res->setIsPosted(null);
				$res->save();
			}
		}
	}

	public static function ClearIsPostedDeduction($bNo)
	{
		$c = new Criteria();
		$c->add(self::DEDUCTION_PREPOST_BATCH, $bNo);
		$rs = self::doSelect($c);
		if ($rs)
		{
			foreach ($rs as $res)
			{
				$res->setDeductionPrepostBatch(null);
				$res->setIsPosted(null);
				$res->save();
			}
		}
	}

	public static function GetTotalAllowance($empno, $sdt, $edt )
	{
		$sdt = DateUtils::DUFormat('Y-m-d', $sdt);
		$edt = DateUtils::DUFormat('Y-m-d', $edt);
		$amt = 0;
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->add(self::IS_POSTED, self::FLAG_POSTEDYES);    //used in computation
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);
		if ( $rs )
		{
			foreach ($rs as $rec)
			{
				$amt = $amt + $rec->getAllowance();
			}
		}
		return $amt;
	}

	public static function GetSummaryPerEmployeeDate($empno, $sdt, $edt )
	{
		$sdt = DateUtils::DUFormat('Y-m-d', $sdt);
		$edt = DateUtils::DUFormat('Y-m-d', $edt);
		$amt = 0;
		$lvDays = 0;
		$lvDetail = '';
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		//$c->add(self::IS_POSTED, self::FLAG_POSTEDYES);    //used in computation
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
//		if ($empno == 'S8360501D' )
//			$c->add(self::CREATED_BY, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$daily = 0;
		$ot1 = 0;
		$ot2 = 0;
		$ot3 = 0;
		$ot1amt = 0;
		$ot2amt = 0;
		$ot3amt = 0;
		$ot1rat = 0;
		$ot2rat = 0;
		$ot3rat = 0;
		$tothours = 0;
		$totOt  = 0;

		$pdLeave = 0;
		$mcLeave = 0;
		$upLeave = 0;
		$levy    = 0;
		$absent  = 0;
		$ptinc   = 0;
		$meal    = 0;
		$all     = 0;
		$tardy   = 0;
		$extraOt = 0;
		$extraOtPay = 0;
		$totalDaysAbsent = 0;
		

		
		if ( $rs )
		{
			foreach ($rs as $rec)
			{
				if ( $rec->getMultiplier() == '1.5' )
				{
					$ot1 = $ot1 + $rec->getOvertimes();

					$ot1amt = $ot1amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot1rat = $rec->getRatePerHour();
				}
				if ( $rec->getMultiplier() == '2.0' )
				{
					$ot2 = $ot2 + $rec->getOvertimes();
					$ot2amt = $ot2amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot2rat = $rec->getRatePerHour();
				}
				if ( $rec->getMultiplier() == '2.5' )
				{
					$ot3 = $ot3 + $rec->getOvertimes();
					$ot3amt = $ot3amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot3rat = $rec->getRatePerHour();
				}
//				                echo $rec->getName().' - '.$rec->getTransDate().': '.$rec->getMultiplier().' >>>'.$flag.' amount:->'.$ot1amt.'<br>';
//				                echo $rec->getName().' - '.$rec->getTransDate().': '.$rec->getLevy().' =  '.$levy.'<br>';
				if ($rec->getPostedAmount() < 0 )
				{
					if ( ($rec->getAttendance() == 'P')  )
					{
						$tardy  = $tardy  + $rec->getPostedAmount();
					}else{
						$absent = $absent + $rec->getPostedAmount();
						$totalDaysAbsent += 1;
					}
				}
				if ($rec->getAttendance() == 'A' && $rec->getAttendance() == 'N'):
				else:
					$daily    = $daily + ( $rec->getNormal() * $rec->getRatePerHour() );
				endif;
//				var_dump($rec->getNormal());
//				var_dump($rec->getRatePerHour());
//				var_dump($daily);
//				exit();
				$tothours = $tothours + $rec->getNormal();
				$levy     = $levy  + $rec->getLevy();
				$ptinc    = $ptinc + $rec->getPartTimeIncome();
				$meal     = $meal  + $rec->getMeal();
				$all      = $all   + $rec->getAllowance();
				$extraOtPay += $rec->getExtraOtPay();
				$extraOt  += $rec->getExtraOt();
//				switch($rec->getLeaveType())
//				{
//					case 'Leave without Pay':
//						
//						break;
//					case 'Medical Leave':
//						break;
//					case 'Annual Leave':
//						break;
//				}
//				if ($rec->getAttendance() == 'A' and $rec->getDayOff() <> 'Y')
//				{
//					$upLeave++;
//				}
				$lvDetail = HrEmployeeLeavePeer::IsOnleave($rec->getEmployeeNo(), $rec->getTransDate());
				if ($lvDetail):
					$lvDays = $lvDetail->getHalfDay() <> 'none' ? .5 : 1;
				endif;
				
				if ($rec->getLeaveType() == 'Leave without Pay')
				{
					//$upLeave = $upLeave + ( $rec->getNormal() + $rec->getUndertime() == 0 ? 1 : .5  ) ;
					$upLeave = $upLeave + $lvDays;
				}
				
				if ($rec->getLeaveType() )
				{
					if ($rec->getLeaveType() <> 'Leave without Pay')
					{
						if ($rec->getLeaveType() == 'Medical Leave')
						{
							//$mcLeave++;
							//$mcLeave = $mcLeave + ($rec->getUndertime() == 0? 1 : .5);
							$mcLeave = $mcLeave + $lvDays;
						}else{
							//$pdLeave = $pdLeave + ($rec->getUndertime() == 0? 1 : .5);
							$pdLeave = $pdLeave + $lvDays;
						}
					}

				}
				
				
				
			}
		}
		
		//--------------------- other income
		$othReceivable = array();
		$perDayOthRate = 0; //per day other income rate;
		$othReceivableList = PayFixedIncomePeer::GetIncomeListByEmployeeNo($empno);
		foreach($othReceivableList as  $k=>$v):
			$perDayOthRate = $v/30;
			$othReceivable[$k] = $v - ($perDayOthRate * $totalDaysAbsent);
		endforeach;		
		
		$totOt = $ot1amt + $ot2amt + $ot3amt;
		$eSum  = array( 'ot1'=>$ot1, 'ot2'=>$ot2, 'ot3'=>$ot3,
                        'ot1amt'=>$ot1amt, 'ot2amt'=>$ot2amt, 'ot3amt'=>$ot3amt,
                        'ot1rat'=>$ot1rat, 'ot2rat'=>$ot2rat, 'ot3rat'=>$ot3rat,
                        'paidleave'=>$pdLeave, 'unpaidleave'=>$upLeave,'mcleave'=>$mcLeave,
                        'tothours'=>$tothours, 'levy'=>$levy, 'pt'=>$ptinc, 'meal'=>$meal,
                        'totalOt'=>$totOt, 'all'=>$all, 'tardy'=>$tardy, 'absent'=>$absent
						, 'daily'=>$daily, 'receivable' => $othReceivable, 'extraOt' => $extraOt,
						'extraOtPay' => $extraOtPay, 'otPay' => ($totOt - $extraOtPay)
		);
//		if ($empno == 'S8360501D' )
//			var_dump($eSum);
		return $eSum;
	}
	public static function GetByEmployeeNoDateMultipliedHr($empNo, $cDate, $fldList)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::TRANS_DATE, $cDate);
		$rs = self::doSelect($c);
		$hr = 0;
		foreach($rs as $r):
	        $acdura  = $r->getAcDura();
	        $xplier = $r->getMultiplier();
	        $normal = $r->getNormal();
	        if ($acdura >= $normal):
	        	$nohrs = $normal + ( $r->getOvertimes() * $xplier);
	 		else:
	        	$nohrs = $acdura;
	        endif;			
		endforeach;
		return $nohrs;
	}
	
	public static function GetOptimizedDatabyEmployeeNoDate($empNo, $cDate, $fldList)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		foreach($fldList as $kf=>$vf)
		{
			switch(strtolower($vf))
			{
				case 'employee_no':
					$c->addSelectColumn(self::EMPLOYEE_NO);
					break;
				case 'name':
					$c->addSelectColumn(self::NAME);
					break;
				case 'id':
					$c->addSelectColumn(self::ID);
					break;
				case 'ac_dura':
					$c->addSelectColumn(self::AC_DURA);
					break;

					 
			}
		}
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::TRANS_DATE, $cDate);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs; // nr of column in select clause
		}
	}
	
	public static function GetOptimizedDatabyEmployeeNoDateByTeam($empNo, $cDate, $fldList, $team)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		foreach($fldList as $kf=>$vf)
		{
			switch(strtolower($vf))
			{
				case 'employee_no':
					$c->addSelectColumn(self::EMPLOYEE_NO);
					break;
				case 'name':
					$c->addSelectColumn(self::NAME);
					break;
				case 'id':
					$c->addSelectColumn(self::ID);
					break;
				case 'ac_dura':
					$c->addSelectColumn(self::AC_DURA);
					break;

					 
			}
		}
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::TRANS_DATE, $cDate);
		$c->add(self::TEAM, $team, Criteria::IN);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs; // nr of column in select clause
		}
	}

	public static function GetEmployeeListbyDateRange($sdt, $edt, $co=null )
	{
		//--------------------------------------- not posted only
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::EMPLOYEE_NO);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		if ($co)
		{
			$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
			$c->add(TkDtrmasterPeer::COMPANY, $co);
		}
		$c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$empList = array();
		while ($rs->next())
		{
			$empList[$rs->get('EMPLOYEE_NO')] = $rs->get('EMPLOYEE_NO');
		}
		return array_unique($empList);
	}

	public static function GetEmpListbyDateRange($sdt, $edt, $co=null )
	{
		//---------------------------------------- all posted and non posted
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::EMPLOYEE_NO);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if ($co)
		{
			$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
			$c->add(TkDtrmasterPeer::COMPANY, $co);
		}
		$c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$empList = array();
		while ($rs->next())
		{
			$empList[$rs->get('EMPLOYEE_NO')] = $rs->get('EMPLOYEE_NO');
		}
		return array_unique($empList);
	}

	//-----------------------------------------------------------
	public static function GetTimeCategory()
	{
		return array('required'=>'Required', 'duration'=>'Duration', 'overtime'=>'Overtime', 'undertime'=>'Undertime');
	}

	public static function GetAcDurabyEmployeeNoDateRange($empNo, $sdt, $edt)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::AC_DURA);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$dura = 0;
		$tEmp = 0;
		while ($rs->next())
		{
			$cdura = 0;
			if ($rs->get('AC_DURA')>0)
			{
				$cdura = $rs->get('AC_DURA');
				$tEmp++;
			}
			$dura = $dura + $cdura;
		}
		return array('dura'=>$dura, 'total'=>$tEmp);
	}

	public static function GetTotalManWorkingbyDateRange($sdt, $edt, $co=null, $dept, $race = null )
	{
		//--------------------------------------- not posted only
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::EMPLOYEE_NO);
		$c->addSelectColumn(self::AC_DURA);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if ($co)
		{
			$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
			$c->add(TkDtrmasterPeer::COMPANY, $co);
		}
		$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
		if ($race)
		{
			$c->add(HrEmployeePeer::RACE, $race);
		}
		foreach($dept as $ke=>$group)
		{
			if ($group)
			{
				$c->addor(HrEmployeePeer::TEAM, $group);
				//$c->addAscendingOrderByColumn(HrEmployeePeer::TEAM);
			}
		}
		$c->addAscendingOrderByColumn(HrEmployeePeer::TEAM);
		$c->addAscendingOrderByColumn(self::NAME);
		//$c->add(self::CREATED_BY, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectRS($c);
		//        var_dump($rs);
		//        exit();
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$cnt = 0;
		while ($rs->next())
		{
			//if ($rs->get('AC_DURA') > 0 )
			//{
				$empList[$rs->get('EMPLOYEE_NO')] = $rs->get('EMPLOYEE_NO');
				$cnt++;
			//}
		}
		//asort($empList); 
		return (isset($empList))? array('list'=>array_unique($empList), 'cnt'=>$cnt) : array();
	}

	public static function GetTotalManWorkingbyWeekNo($wk1, $wk2, $co=null, $dept )
	{
		$wk1Dt = HrFiscalYearPeer::GetDateRangeByWeekNo($wk1);
		$wk2Dt = HrFiscalYearPeer::GetDateRangeByWeekNo($wk2);
		$sdt = $wk1['start'];
		$edt = $wk2['end'];
//		echo $sdt .' - '. $edt;
//		exit();
		//--------------------------------------- not posted only
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::EMPLOYEE_NO);
		$c->addSelectColumn(self::AC_DURA);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if ($co)
		{
			$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
			$c->add(TkDtrmasterPeer::COMPANY, $co);
		}
		$c->addJoin(TkDtrsummaryPeer::EMPLOYEE_NO, HrEmployeePeer::EMPLOYEE_NO);
		foreach($dept as $ke=>$group)
		{
			if ($group)
			{
				$c->addor(HrEmployeePeer::TEAM, $group);
				$c->addAscendingOrderByColumn(HrEmployeePeer::TEAM);
			}
		}
		
		$c->addAscendingOrderByColumn(self::EMPLOYEE_NO);
		//$c->add(self::CREATED_BY, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectRS($c);
		//        var_dump($rs);
		//        exit();
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$cnt = 0;
		while ($rs->next())
		{
			//if ($rs->get('AC_DURA') > 0 )
			//{
				$empList[$rs->get('EMPLOYEE_NO')] = $rs->get('EMPLOYEE_NO');
				$cnt++;
			//}
		}
		asort($empList);
		return (isset($empList))? array('list'=>array_unique($empList), 'cnt'=>$cnt) : array();
	}

	public static function GetDurationByEmployeeNoDateRange($empno, $sdt, $edt )
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::AC_DURA);
		$c->addSelectColumn(self::OVERTIMES);
		$c->addSelectColumn(self::NORMAL);
		$c->addSelectColumn(self::HOLIDAY_CODE);
		$c->addSelectColumn(self::EXTRA_OT);
		$c->addSelectColumn(self::EXTRA_OT_PAY);
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		//$c->add(self::OVERTIMES, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$act = 0;
		$ot  = 0;
		$req = 0;
		$extraOt = 0;
		$extraOtPay = 0;
		while ($rs->next())
		{
			$req = ($req < $rs->get('NORMAL') ? $rs->get('NORMAL') : $req) ;
			$act = $act + ($rs->get('AC_DURA')> 0? $rs->get('AC_DURA') : 0 );
			$ot  = $ot  + $rs->get('OVERTIMES');
			$extraOt += $rs->get('EXTRA_OT');
			$extraOtPay += $rs->get('EXTRA_OT_PAY');
			if ($rs->get('HOLIDAY_CODE') && $rs->get('AC_DURA') <= 0){
				$act = $act + $req;
			}
		}
		return array('actual'=>$act, 'ot'=>$ot, 'extraOt'=>$extraOt, 'extraOtPay'=>$extraOtPay);
	}

	public static function InitDuration($cdura)
	{
		$dura = (intval($cdura/3600));
		return $dura;
	}
	
	public static function GetEmployeeIncomeEstimate($empno, $sdt, $edt )
	{
		$empData = self::GetSummaryPerEmployeeDate($empno, $sdt, $edt);
		$income = $empData['ot1amt'] + $empData['ot2amt'] + $empData['ot3amt'] + $empData['daily'];
		return $income;
	}
	
	//-----------------------------------  used in Forecast
	public static function GetEmployeeIncomeEstimateAccount($empno, $sdt, $edt )
	{
		$empData = self::GetEmployeeIncomeOnlyEstimate($empno, $sdt, $edt);
		$income = $empData['ot1amt'] + $empData['ot2amt'] + $empData['ot3amt'] + $empData['daily'];
		return $income;
	}
		
	public static function GetEmployeeIncomeOnlyEstimate($empno, $sdt, $edt )
	{
		$sdt = DateUtils::DUFormat('Y-m-d', $sdt);
		$edt = DateUtils::DUFormat('Y-m-d', $edt);
		$amt = 0;
		$lvDays = 0;
		$lvDetail = '';
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE,  'DATE(' . self::TRANS_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::TRANS_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		$c->addAscendingOrderByColumn(self::TRANS_DATE);
		$rs = self::doSelect($c);
		$daily = 0;
		$ot1 = 0;
		$ot2 = 0;
		$ot3 = 0;
		$ot1amt = 0;
		$ot2amt = 0;
		$ot3amt = 0;
		$ot1rat = 0;
		$ot2rat = 0;
		$ot3rat = 0;
		$tothours = 0;
		$totOt  = 0;

		$pdLeave = 0;
		$mcLeave = 0;
		$upLeave = 0;
		$levy    = 0;
		$absent  = 0;
		$ptinc   = 0;
		$meal    = 0;
		$all     = 0;
		$tardy   = 0;
		$totalDaysAbsent = 0;
		

		
		if ( $rs )
		{
			foreach ($rs as $rec)
			{
				if ( $rec->getMultiplier() == '1.5' )
				{
					$ot1 = $ot1 + $rec->getOvertimes();

					$ot1amt = $ot1amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot1rat = $rec->getRatePerHour();
				}
				if ( $rec->getMultiplier() == '2.0' )
				{
					$ot2 = $ot2 + $rec->getOvertimes();
					$ot2amt = $ot2amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot2rat = $rec->getRatePerHour();
				}
				if ( $rec->getMultiplier() == '2.5' )
				{
					$ot3 = $ot3 + $rec->getOvertimes();
					$ot3amt = $ot3amt + ($rec->getPostedAmount() > 0 ? $rec->getPostedAmount() : 0 );
					$ot3rat = $rec->getRatePerHour();
				}
//				                echo $rec->getName().' - '.$rec->getTransDate().': '.$rec->getMultiplier().' >>>'.$flag.' amount:->'.$ot1amt.'<br>';
//				                echo $rec->getName().' - '.$rec->getTransDate().': '.$rec->getLevy().' =  '.$levy.'<br>';

				if ($rec->getAttendance() == 'A' && $rec->getAttendance() == 'N'):
				else:
					if ($rec->getHolidayCode()):
						$daily    = $daily + ( ($rec->getMultiplier() > 0? $rec->getAcDura() : 12 )  * $rec->getRatePerHour() );
					else:
						$daily    = $daily + ( $rec->getNormal() * $rec->getRatePerHour() );
					endif;
					
				endif;
			}
		}
		
		
		$totOt = $ot1amt + $ot2amt + $ot3amt;
		$eSum  = array( 'ot1amt'=>$ot1amt, 'ot2amt'=>$ot2amt, 'ot3amt'=>$ot3amt, 'daily'=>$daily);

		return $eSum;
	} 
	//-----------------------------------  used in Forecast
	
	public static function GetTotalComplianceOt($empno, $sdt, $edt)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$c->add(self::TRANS_DATE, self::TRANS_DATE .' >= date( "' .$sdt .'" ) && ' . self::TRANS_DATE .' <= date ( "' .$edt . '" )', Criteria::CUSTOM );
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$rph = 0;
		$complianceOT = 0;
		$complianceOTPay = 0;
		$extraOTHour = 0;
		$extraOTPay = 0;
		foreach ($rs as $r):
			$isHol = HrHolidayPeer::IsHoliday($r->getTransDate());
			if ($isHol):
				$complianceOT += $r->getOvertimes();
			else:
				$complianceOT +=   ($r->getOvertimes() - $r->getExtraOt());
			endif;
			$complianceOTPay = $complianceOTPay + ($r->getPostedAmount() - $r->getExtraOtPay());
			if ($rph <= 0 ) $rph = $r->getRatePerHour();
		endforeach;
		return array('complianceOT'=>$complianceOT, 'complianceOTPay'=>$complianceOTPay, 'ratePerHour' => $rph);
	}
}


