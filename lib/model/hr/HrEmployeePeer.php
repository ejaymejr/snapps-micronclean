<?php

/**
 * Subclass for performing query and update operations on the 'hr_employee' table.
 *
 *
 *
 * @package lib.model.hr
 */
class HrEmployeePeer extends BaseHrEmployeePeer
{
	const CUSTOM = 'CUSTOM';

	public static function GetPagerNew($cd)
	{
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 50);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}

		$page = sfContext::getInstance()->getRequest()->getParameter('page', 1);

		$c = clone($cd);
		$pager = new sfPropelPager('HrEmployee', $rowsPerPage);

		$pager->setCriteria($c);
		$pager->setPage($page);
		$pager->init();
		return $pager;
	}
	
	public static function GetEmployeeListByMomGroup($empNos, $momGroup)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNos, Criteria::IN);
		$c->add(self::MOM_GROUP, $momGroup);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[] = $r->getEmployeeNo();
		endforeach;
		return $list;
	}
	
	public static function GetRaceList()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::RACE);
		$c->addAscendingOrderByColumn(self::RACE);
		$rs = self::doSelect($c);
		$list = array(''=>' - ALL - ');
		foreach($rs as $r):
			$list[$r->getRace()] = $r->getRace();
		endforeach;
		return $list;
	}

	public static function GetRankList()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::RANK_CODE);
		$c->addAscendingOrderByColumn(self::RANK_CODE);
		$rs = self::doSelect($c);
		//$list = array(''=>' - ALL - ');
		$list = array();
		foreach($rs as $r):
			if ($r->getRankCode()):
				$list[$r->getRankCode()] = $r->getRankCode();
			endif;
		endforeach;
		return $list;
	}
	
	public static function GetPager($cd, $results=null)
	{
		$results = $results? $results: 20;
		$startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
		$rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $results);
		$page = (int) ( ($startIndex + 1) / $rowsPerPage);
		if (( ($startIndex + 1) % $rowsPerPage) != 0) {
			$page++;
		}
		$c = clone($cd);
		$pager = new sfPropelPager('HrEmployee', $rowsPerPage);

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

	public static function GetActiveEmployeeList()
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			 $list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	}
	
	public static function GetActiveEmployee($co = null, $cpf = null, $srtOrder = null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
		if ($cpf) $c->add(PayBasicPayPeer::CPF, 'YES');
		if ($srtOrder) $c->addAscendingOrderByColumn(self::$srtOrder);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		return $rs;
	}	
	
	public static function GetActiveEmployeeByWorkSchedule($ws, $co=null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->addJoin(self::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
		$c->add(TkDtrmasterPeer::TK_WORKTEMPLATE_NO, $ws);
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetActiveEmployeeByRaceByCompany($race = null, $co = null, $sort=null)
	{
// 		var_dump($co);
// 		exit();
//		if ($co == 0) unset($co);

		$oth = array('chinese'=>'chinese', 'indian'=>'indian', 'malay'=>'malay' );
		$c = new Criteria();
		if ($race == 'OTHERS'):
			$c->add(self::RACE, $oth, Criteria::NOT_IN);
		else:
			if ($race ):
				$c->add(self::RACE, $race);
			endif;
		endif;
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
// 		var_dump($sort);
// 		exit();
		switch ($sort):
			case 'name':
				$c->addAscendingOrderByColumn(self::NAME);
				break;
			default:
				$c->addAscendingOrderByColumn(self::COMMENCE_DATE);
				break;
		endswitch;
		//$c->add(self::IC_NO, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetActiveEmployeeListByCompany($co = null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[] = $r->getEmployeeNo();
		endforeach;
		return $list;
	}
	
	public static function GetActiveEmployeeByRace($co = null, $cpf = null, $srtOrder = null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
		if ($cpf) $c->add(PayBasicPayPeer::CPF, 'YES');
		if ($srtOrder) $c->addAscendingOrderByColumn(self::$srtOrder);
		$c->addAscendingOrderByColumn(self::COMMENCE_DATE);
		$rs = self::doSelect($c);
		return $rs;
	}

	public static function GetActiveEmployeeByCompany($co = null, $cpf = null, $srtOrder = null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($co) $c->add(PayBasicPayPeer::COMPANY, $co );
		if ($cpf) $c->add(PayBasicPayPeer::CPF, 'YES');
		if ($srtOrder) $c->addAscendingOrderByColumn(self::$srtOrder);
		$c->addAscendingOrderByColumn(self::COMMENCE_DATE);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetListByDepartmentCompany($co=null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($co) {
			$c->addJoin(HrCompanyPeer::ID, self::HR_COMPANY_ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
			$c->addAscendingOrderByColumn(self::HR_COMPANY_ID);
		}
		$c->addAscendingOrderByColumn(self::TEAM);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
//		$list = array();
//		foreach($rs as $r)
//		{
//			 $list[$r->getEmployeeNo()] = $r->getName();
//		}
//		return $list;
		return $rs;
	}	
	
	public static function GetAllEmployeeList()
	{
		//------------------ for use with manual paysplis.  wherein need to give backpay to inactive employee
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			 $list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	}	


	public static function EmployeeSearch($xpg){
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		$pager = new sfPropelPager('HrEmployee', 20);
		$pager->setCriteria($c);
		$pager->setPage($xpg);
		$pager->init();
		return array('pager'=>$pager, 'count'=>self::doCount($c) );
	}

	public static function Search($xpg) {
		$c = new HrEmployeeCriteria(self::NAME);
		$pager = new sfPropelPager('HrEmployee', 20);
		$pager->setCriteria($c);
		$pager->setPage($xpg);
		$pager->init();
		return array('pager'=>$pager, 'count'=>self::doCount($c) );
	}

	public static function GetDatabyEmployeeNo($empno) {
//		var_dump($empno);
//		$empno = trim($empno);
//		var_dump('tets');
//		var_dump($empno);
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno );
//		$c->add(self::HR_COMPANY_ID, 2);
		$rs = self::doSelectone($c);
		return $rs;
	}
	
	public static function GetDatabyEmployeeNoList($list) {
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $list, Criteria::IN );
		$rs = self::doSelect($c);
		return $rs;
	}	
	
	public static function GetDatabyName($name) {
		$c = new Criteria();
		$c->add(self::NAME, $name);
		$rs = self::doSelectone($c);
		return $rs;
	}	
	
	public static function GetEmployeeNoByAcctno($acctno) {
		$c = new Criteria();
		$c->add(self::ACCT_NO, $acctno);
		$rs = self::doSelectone($c);
		return $rs? $rs->getEmployeeNo() : '';
	}
	
	public static function GetDatabyTeam($team) {
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->add(self::TEAM, $team);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		return $rs;
	}
		
	public static function GetDatabyMobileNo($mobileNo) {
		$c = new Criteria();
		$c->add(self::CELL_NO, $mobileNo);
		$rs = self::doSelectone($c);
		return $rs;
	}
		
	public static function GetDatabyFinNo($finNo) {
		$c = new Criteria();
		$c->add(self::FIN_NO, $finNo);
		$rs = self::doSelectone($c);
		return $rs;
	}	

	public static function GetEmployeeNoList() {
		$c = new Criteria();
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$rs = self::doSelect($c);
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getEmployeeNo();
		}
		return $val;
	}
	
	public static function GetEmployeeListHistory() {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}

	public static function GetEmployeeNoListWithCriteria($co=null, $work=null, $team=null) {
		$c = new Criteria();
		if ($co)
		{
			$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
		}
//		if ($work)
//		{
//			var_dump($work);
//			exit();
//			$c->addJoin(self::EMPLOYEE_NO, TkDtrmasterPeer::EMPLOYEE_NO);
//			$c->add(TkDtrmasterPeer::TK_WORKTEMPLATE_NO, $work);
//		}

		if ($team)
		{
			$c->add(HrEmployeePeer::TEAM, $team);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$val = array();
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getEmployeeNo();
		}
		return $val;
	}

	public static function GetEmployeeNoListResignedByYear($yr, $co=null, $work=null, $team=null) {
		$sdt = $yr. '-01-01';
		$edt = $yr. '-12-31';
		$c = new Criteria();
		if ($co)
		{
			$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
		}
//		if ($work)
//		{
//			$c->add(self::TK_WORKTEMPLATE_NO, $work);
//		}

		if ($team)
		{
			$c->add(HrEmployeePeer::TEAM, $team);
		}
		//$c->add(self::DATE_RESIGNED, "year(" . self::DATE_RESIGNED . ") = '" . $yr . "'", "CUSTOM" );
		$c->add(self::DATE_RESIGNED,  'DATE(' . self::DATE_RESIGNED . ') >= \'' . $sdt . '\' AND DATE(' . self::DATE_RESIGNED . ') <= \'' . $edt . '\'', "CUSTOM");
		$c->addAscendingOrderByColumn(self::DATE_RESIGNED);
		$rs = self::doSelect($c);
		$val = array();
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}

	public static function GetEmployeeNameList($co=null, $user) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
// 		if ($user == 'adeline' || $user == 'huiping'):
// 			$c->add(self::HR_COMPANY_ID, 2);
// 		endif;
		if ($user == 'lyeheng'):
			$c->add(self::HR_COMPANY_ID, 2, Criteria::NOT_EQUAL);
		endif;
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		//$c->add(PayBasicPayPeer::EMPLOYEE_NO, '83');
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}

	public static function GetEmployeeNameListAll($co=null) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		//$c->add(PayBasicPayPeer::EMPLOYEE_NO, '83');
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}
	
	public static function GetNumonyxNameList($co=null) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		$c->add(self::TEAM, "%numonyx%", Criteria::LIKE);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}
	
	public static function GetNumonyxEmpNoList($co=null) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		$c->add(self::TEAM, "%numonyx%", Criteria::LIKE);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getEmployeeNo();
		}
		return $val;
	}	


	public static function GetEmployeeNameListArchive($co=null) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		//$c->add(PayBasicPayPeer::EMPLOYEE_NO, '83');
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}

	public static function GetEmployeeNameListNoPartTime($co=null) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co)
		{
			$c->add(self::HR_COMPANY_ID, $co);
		}
		$c->addJoin(PayBasicPayPeer::EMPLOYEE_NO, self::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$c->add(self::TYPE_OF_EMPLOYMENT, '%PART-TIME%',  Criteria::NOT_LIKE);
		//$c->add(self::ACCT_NO,'&& || &&', criteria::CUSTOM);
		$rs = self::doSelect($c);
		$val[] = '';
		foreach($rs as $res){
			$val[$res->getEmployeeNo()] = $res->getName();
		}
		return $val;
	}
//	public static function GetEmployeeNameListAll($co=null) {
//		$c = new Criteria();
//		$c->addAscendingOrderByColumn(self::NAME);
//		$rs = self::doSelect($c);
//		$val[] = '';
//		foreach($rs as $res){
//			$val[$res->getEmployeeNo()] = $res->getName();
//		}
//		return $val;
//	}


	public static function GetNamebyEmployeeNo($empNo) {
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::NAME);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('NAME'); // nr of column in select clause
		}
	}

	public static function GetCompanyByEmployeeNo($empNo) {
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID, Criteria::LEFT_JOIN);
		$c->addSelectColumn(HrCompanyPeer::COMP_NAME);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('COMP_NAME'); // nr of column in select clause
		}
	}

	public static function GetBirthdaybyEmployeeNo($empNo)
	{
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empNo);
		//        $rs = self::doSelectone($c);
		//        return ($rs) ? $rs->getDateOfBirth() : null;

		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::DATE_OF_BIRTH);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('DATE_OF_BIRTH'); // nr of column in select clause
		}

	}

	public static function GetAllData()
	{
		$c = new Criteria();
		$c->addAscendingOrderByColumn('name');
		$rs = self::doSelect($c);
		return $rs;
	}

	public static function GetRacebyEmployeeNo($empNo)
	{
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empNo);
		//        $rs= self::doSelectOne($c);
		//        return ($rs)? $rs->getRace() : null;

		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::RACE);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('RACE'); // nr of column in select clause
		}


	}

	public static function GetCommenceDate($empNo)
	{
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empNo);
		//        $rs = self::doSelectOne($c);
		//        return ($rs) ? $rs->getCommenceDate() : null;

		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::COMMENCE_DATE);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('COMMENCE_DATE'); // nr of column in select clause
		}

	}

	public static function GetAccountNo($empNo)
	{
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empNo);
		//        $rs = self::doSelectOne($c);
		//        return ($rs) ? $rs->getAcctNo() : null;
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::ACCT_NO);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('ACCT_NO'); // nr of column in select clause
		}


	}

	public static function GetEmployment($empNo)
	{
		//        $c = new Criteria();
		//        $c->add(self::EMPLOYEE_NO, $empNo);
		//        $rs = self::doSelectOne($c);
		//        return ($rs) ? $rs->getTypeOfEmployment() : null;
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::TYPE_OF_EMPLOYMENT);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs->get('TYPE_OF_EMPLOYMENT'); // nr of column in select clause
		}

	}

	public static function GetOptimizedDatabyEmployeeNo($empNo, $fldList)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
		foreach($fldList as $kf=>$vf)
		{
			switch(strtolower($vf))
			{
				case 'id':
					$c->addSelectColumn(self::ID);
					break;
				case 'employee_no':
					$c->addSelectColumn(self::EMPLOYEE_NO);
					break;
				case 'name':
					$c->addSelectColumn(self::NAME);
					break;
				case 'company':
					$c->addSelectColumn(HrCompanyPeer::COMP_NAME);
					break;
				case 'employment_as':
					$c->addSelectColumn(self::EMPLOYMENT_AS);
					break;
				case 'commence_date':
					$c->addSelectColumn(self::COMMENCE_DATE);
					break;
				case 'team':
					$c->addSelectColumn(self::TEAM);
					break;
				case 'nationality':
					$c->addSelectColumn(self::NATIONALITY);
					break;
				case 'bldg_room_no':
					$c->addSelectColumn(self::BLDG_ROOM_NO);
					break;
				case 'tel_no':
					$c->addSelectColumn(self::TEL_NO);
					break;
				case 'cell_no':
					$c->addSelectColumn(self::CELL_NO);
					break;
				case 'date_resigned':
					$c->addSelectColumn(self::DATE_RESIGNED);
					break;
				case 'commence_date':
					$c->addSelectColumn(self::COMMENCE_DATE);
					break;
				case 'profession':
					$c->addSelectColumn(self::PROFESSION);
					break;
				case 'type_of_employment':
					$c->addSelectColumn(self::TYPE_OF_EMPLOYMENT);
					break;
				case 'mom_group':
					$c->addSelectColumn(self::MOM_GROUP);
					break;					

				default:
					break;

			}
		}

		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs; // nr of column in select clause
			//$rs->get('TEAM');
		}
	}

	public static function GetOptimizedDatabyName($name, $fldList)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->add(self::NAME, $name);
		$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
		foreach($fldList as $kf=>$vf)
		{
			switch(strtolower($vf))
			{
				case 'id':
					$c->addSelectColumn(self::ID);
					break;
				case 'employee_no':
					$c->addSelectColumn(self::EMPLOYEE_NO);
					break;
				case 'name':
					$c->addSelectColumn(self::NAME);
					break;
				case 'company':
					$c->addSelectColumn(HrCompanyPeer::COMP_NAME);
					break;
				case 'hr_company_id':
					$c->addSelectColumn(HrCompanyPeer::ID);
					break;
				case 'employment_as':
					$c->addSelectColumn(self::EMPLOYMENT_AS);
					break;
				case 'commence_date':
					$c->addSelectColumn(self::COMMENCE_DATE);
					break;
				case 'team':
					$c->addSelectColumn(self::TEAM);
					break;
				case 'nationality':
					$c->addSelectColumn(self::NATIONALITY);
					break;
				case 'bldg_room_no':
					$c->addSelectColumn(self::BLDG_ROOM_NO);
					break;
				case 'tel_no':
					$c->addSelectColumn(self::TEL_NO);
					break;
				case 'cell_no':
					$c->addSelectColumn(self::CELL_NO);
					break;
				case 'date_resigned':
					$c->addSelectColumn(self::DATE_RESIGNED);
					break;
				case 'commence_date':
					$c->addSelectColumn(self::COMMENCE_DATE);
					break;
				case 'profession':
					$c->addSelectColumn(self::PROFESSION);
					break;
				case 'type_of_employment':
					$c->addSelectColumn(self::TYPE_OF_EMPLOYMENT);
					break;
					

				default:
					break;

			}
		}

		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			return $rs; // nr of column in select clause
		}
	}
	
	public static function OptionEmploymentGroup()
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::EMPLOYMENT_AS);
		$c->addAscendingOrderByColumn(self::EMPLOYMENT_AS);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		$list = array();
		$list['ALL'] = 'ALL';
		while ($rs->next())
		{
			$list[$rs->get('EMPLOYMENT_AS')] = $rs->get('EMPLOYMENT_AS');
		}
		return $list;
	}

	public static function CheckEmplistbyEmpGroup($empList, $eGroup)
	{
		$nList  = array();
		$cGroup = '';
		if ($eGroup != 'ALL')
		{
			foreach($empList as $empNo=>$empName)
			{
				//echo $empNo . '<br>';
				$cGroup = self::GetOptimizedDatabyEmployeeNo($empNo, array('employment_as'));
				if ($cGroup)
				{
					if ($cGroup->get('EMPLOYMENT_AS') == $eGroup)
					{
						$nList[$empNo] = $empName;
					}
				}
			}
		}else{
			$nList = $empList;
		}
		return $nList;
	}

	public static function CheckEmplistbyEmpGroup1($empList, $eGroup)
	{
		$nList  = array();
		$cGroup = '';
		if ($eGroup != 'ALL')
		{
			foreach($empList as $empNo=>$empName)
			{
				$cGroup = self::GetOptimizedDatabyEmployeeNo($empName, array('employment_as'));
				if ($cGroup)
				{
					if ($cGroup->get('EMPLOYMENT_AS') == $eGroup)
					{
						$nList[$empNo] = $empName;
					}
				}
			}
		}else{
			$nList = $empList;
		}
		return $nList;
	}

	public static function CPFAge($empNo)
	{
		$c = new Criteria();
		$c->clearSelectColumns();
		$c->addSelectColumn(self::DATE_OF_BIRTH);
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectRS($c);
		$rs->setFetchMode(ResultSet::FETCHMODE_ASSOC);
		while ($rs->next())
		{
			$bdate = $rs->get('DATE_OF_BIRTH');
		}
		if ($bdate){
			$bdate= DateUtils::DUNow();		
		}
		$cyr  = date('Y');
		$cmon = date('m');
		$age = $cyr - DateUtils::DUFormat('Y', $bdate) - 1;

		if (DateUtils::DUFormat('m', $bdate) < $cmon)
		{
			$age++;
		}
		return ($age? $age : 1);
	}

	public static function ComputeAge1($bdate)
	{
		$bdate = "1950-01-01";
		$cyr  = date('Y');
		$cmon = date('m');
		$age = $cyr - DateUtils::DUFormat('Y', $bdate) - 1;
		$monthDiff = ( $cmon - DateUtils::DUFormat('m', $bdate) );
		
		switch($monthDiff) {
			case ($monthDiff  == 0): 
				$age+=1;
				break;
			case ($monthDiff  > 0):
				$age= $age + 1 + ($monthDiff * .1000) ; 
				break;
			default:
				break;
		}
		var_dump($age);
		exit();
		return ($age? $age : 1);
	}	
	
	public static function ComputeAge($bdate, $refDate = null)
	{

		//$bdate = "2010-05-20";
		// refDate is used for cpf computation... if this month is your birthday then the effectivity of bracket change will be next month
		// therefore reduce the age with 1 month or -1
		if ($refDate):
			$diff = DateUtils::DateDiff('m', $bdate, DateUtils::DUFormat('Y-m-d', $refDate));
			$age = $diff/12;
			if ( ($age - intval($age)) == 0):
				//$age = $age - 1;
			endif;
		else:
			$diff = DateUtils::DateDiff('m', $bdate, Date('Y-m-d'));
			$age = $diff/12;
		endif;
//		echo 'Payroll: '.$refDate .'<br>';
//		echo 'Birth Day: '.$bdate .'<br>';
//		echo 'Difference (M): ' . $diff .'<br>';		
//		echo 'Difference (A): ' . $age .'<br>';
//		//var_dump($diff);
//		exit();
		return ($age? $age : 1);
	}	
	
	public static function GetNameToolTip($empNo)
	{
		$data = self::GetOptimizedDatabyEmployeeNo($empNo, array('name', 'company', 'team'));
		if (!$data):
			return $empNo .'- ERROR';
		endif;
		if ($data):
			$workTemp = TkDtrmasterPeer::GetWorkSchedulebyEmployeeNo($empNo);
			return '<a href="#" class="tt">'.$data->get('NAME').'<span class="tooltip">
			<span class="top"></span><span class="middle">
			'.$data->get('NAME')
			.' <br /> '.strtoupper($data->get('COMP_NAME'))
			.' <br /> '.strtoupper($data->get('TEAM'))
			.' <br /> '.strtoupper($workTemp)
			.'</span>
			<span class="bottom"></span></span></a>';
		endif;
	}

	public static function GetTeamList($co=null)
	{
		$c = new Criteria();
		if ($co){
			$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
		}
		$c->addGroupByColumn(self::TEAM);
		$rs = self::doSelect($c);
		$list = array();
		foreach ($rs as $r)
		{
			$list[$r->getTeam()] = $r->getTeam();
		}
		return $list;
	}

	public static function GetEmployeeTeam($empNo, $co=null)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		if ($co){
			$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
		}
		$c->addGroupByColumn(self::TEAM);
		$rs = self::doSelectOne($c);
		return ($rs? strtoupper($rs->getTeam()) : '');
	}

	public static function GetTeambyEmployee($empNo)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectOne($c);
		return ($rs? $rs->getTeam() : '');

	}

	public static function GetEmployeeWithTeamList($list, $teams=null)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $list, Criteria::IN);
		if ($teams){
			foreach($teams as $k=>$tname){
				$c->addOr(self::TEAM, $tname);
			}
		}
		$rs = self::doSelect($c);
		$nlist = array();
		foreach($rs as $r){
			$nlist[$r->getEmployeeNo()] = $r->getEmployeeNo();
		}
		return $nlist;
	}

	public static function GetListforMasterListInActive()
	{
		$c = new Criteria();
		$c->add(self::TEAM, '');
		$c->add(self::HR_COMPANY_ID, 2);
		$c->addAscendingOrderByColumn(HrEmployeePeer::NAME);
		$rs = self::doSelect($c);
		return $rs;
	}
	
	public static function GetSingaporean()
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, 'substr(' .  self::EMPLOYEE_NO . ', 1, 1) = "S" ', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r) {
			if (! $r->getDateResigned()) {
				$list[] = $r->getEmployeeNo();
			}
		}
		return $list;
		
	}

	public static function GetIdType($empNo)
	{
		if (substr($empNo, 0, 1) == 'S'){
			return '1';
		}

		return '0';
	}
	
	public static function GetEmployeeNotices($empNo)
	{
		$basic = PayBasicPayPeer::GetBasicPaybyEmployeeNo($empNo);
		$work  = TkDtrmasterPeer::GetWorkSchedulebyEmployeeNo($empNo);
		$mess = '';
		if (!$basic) {
			$mess = $mess .  ' No Basic Pay ';
		}
		if (!$work) {
			$mess = $mess .  ' | No Workschedule ';
		}		
		return $mess;
	}
	
	public static function GetEmployeeNoByFinNo($uID)
	{
		//------------------ for use with manual paysplis.  wherein need to give backpay to inactive employee
		$c = new Criteria();
		$c->add(self::FIN_NO, $uID);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getEmployeeNo() : '';
	}	
	
	public static function GetEmployeeNoByName($name)
	{
		//------------------ for use with manual paysplis.  wherein need to give backpay to inactive employee
		$c = new Criteria();
		$c->add(self::NAME, $name);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getEmployeeNo() : '';
	}	
	
	public static function GetCommenceDateRange($sdt, $edt, $co )
	{
		$c = new Criteria();
		$c->add(self::COMMENCE_DATE,  'DATE(' . self::COMMENCE_DATE . ') >= \'' . $sdt . '\' AND DATE(' . self::COMMENCE_DATE . ') <= \'' . $edt . '\'', self::CUSTOM);
		if ($co) {
			$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
			$c->add(HrCompanyPeer::COMP_NAME, $co);
		}
		//$c->add(self::DATE_RESIGNED, Criteria::ISNULL);
		//$c->add(self::DATE_RESIGNED, 'is_null('.self::DATE_RESIGNED.')');
		//$c->add(self::IS_POSTED, self::FLAG_POSTEDYES, criteria::NOT_EQUAL);    //used in computation
		
		$c->addAscendingOrderByColumn(self::COMMENCE_DATE);
		$c->addAscendingOrderByColumn(self::HR_COMPANY_ID);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		return $rs;
	}	

	public static function GetEmployeeSearch($q=null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($q) $c->add(self::NAME, "%$q%", Criteria::LIKE);
		$c->addAscendingOrderByColumn(self::NAME);
		$c->setLimit(10);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			 $list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	}
	
	public static function IsNewThisMonth($empNo, $cdate)
	{
		$isNew = false;
		$comDt = $this->GetOptimizedDatabyEmployeeNo($empNo, array('commence_date'));
		$commence = $comDt->get('COMMENCE_DATE');
		if ($commence >= DateUtils::DUFormat('Y-m-01', $cdate) && $commence <= DateUtils::DUFormat('Y-m-t', $cdate)) :
			$isNew = true;
		endif;
		return $isNew; 
	}

	public static function IsResignedThisMonth($empNo, $cdate)
	{
		$isNew = false;
		$comDt = $this->GetOptimizedDatabyEmployeeNo($empNo, array('date_resigned'));
		$resigned = $comDt->get('DATE_RESIGNED');
		if ($resigned >= DateUtils::DUFormat('Y-m-01', $cdate) && $resigned <= DateUtils::DUFormat('Y-m-t', $cdate)) :
			$isNew = true;
		endif;
		return $isNew; 
	}	
	
	public static function SurveyNewEmployee($sdate, $edate)
	{
		$c = new Criteria();
		$c->add(self::COMMENCE_DATE, "( " . self::COMMENCE_DATE . ">= '"  . $sdate ."' and ". self::COMMENCE_DATE ." <= '" . $edate . "' )" , Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$proForiegnNew = 0;
		$cleForiegnNew = 0;
		$traForiegnNew = 0;
		
		$proSprNew = 0;
		$cleSprNew = 0;
		$traSprNew = 0;
		
		$res = array();
		$employeeListing = array();
		foreach( $rs as $r):
			if (strtoupper(substr($r->getEmployeeNo(), 0, 1)) <> 'S') :
				$proForiegnNew = PayEmployeeLedgerArchivePeer::isProfessional($r->getProfession()) ? $proForiegnNew + 1 : $proForiegnNew ;
				$cleForiegnNew = PayEmployeeLedgerArchivePeer::isClerk($r->getProfession()) ? $cleForiegnNew + 1 : $cleForiegnNew ;
				$traForiegnNew = PayEmployeeLedgerArchivePeer::isProduction($r->getProfession()) ? $traForiegnNew + 1 : $traForiegnNew ;
			endif;
			if (strtoupper(substr($r->getEmployeeNo(), 0, 1)) == 'S') :
				$proSprNew = PayEmployeeLedgerArchivePeer::isProfessional($r->getProfession()) ? $proSprNew + 1 : $proSprNew ;
				$cleSprNew = PayEmployeeLedgerArchivePeer::isClerk($r->getProfession()) ? $cleSprNew + 1 : $cleSprNew ;
				$traSprNew = PayEmployeeLedgerArchivePeer::isProduction($r->getProfession()) ? $traSprNew + 1 : $traSprNew ;
			endif;
			$employeeListing[] = $r->getEmployeeNo() .' '. $r->getName() . ' : ' . $r->getProfession() . '<br>';
		endforeach;
    	
		$res['new_foreign_professional'] = $proForiegnNew;
    	$res['new_foreign_clerk'] = $cleForiegnNew;
    	$res['new_foreign_production'] = $traForiegnNew;

    	$res['new_spr_professional'] = $proSprNew;
    	$res['new_spr_clerk'] = $cleSprNew;
    	$res['new_spr_production'] = $traSprNew;
    	$res['list'] = $employeeListing;
    	
		return $res;
	}
	
	public static function SurveyResignedEmployee($sdate, $edate)
	{
		$c = new Criteria();
		$c->add(self::DATE_RESIGNED, "( " . self::DATE_RESIGNED . ">= '"  . $sdate ."' and ". self::DATE_RESIGNED ." <= '" . $edate . "' )" , Criteria::CUSTOM);
		$c->addDescendingOrderByColumn(self::DATE_RESIGNED);
		$rs = self::doSelect($c);
		$proForiegnResigned = 0;
		$cleForiegnResigned = 0;
		$traForiegnResigned = 0;
		
		$proSprResigned = 0;
		$cleSprResigned = 0;
		$traSprResigned = 0;
		
		$res = array();
		
		foreach( $rs as $r):
			//echo $r->getDateResigned() .' : ' . $r->getName().' - '.$r->getProfession() . '<br>';
			if (strtoupper(substr($r->getEmployeeNo(), 0, 1)) <> 'S') :
				$proForiegnResigned = PayEmployeeLedgerArchivePeer::isProfessional($r->getProfession()) ? $proForiegnResigned + 1 : $proForiegnResigned ;
				$cleForiegnResigned = PayEmployeeLedgerArchivePeer::isClerk($r->getProfession()) ? $cleForiegnResigned + 1 : $cleForiegnResigned ;
				$traForiegnResigned = PayEmployeeLedgerArchivePeer::isProduction($r->getProfession()) ? $traForiegnResigned + 1 : $traForiegnResigned ;
			endif;
			if (strtoupper(substr($r->getEmployeeNo(), 0, 1)) == 'S') :
				$proSprResigned = PayEmployeeLedgerArchivePeer::isProfessional($r->getProfession()) ? $proSprResigned + 1 : $proSprResigned ;
				$cleSprResigned = PayEmployeeLedgerArchivePeer::isClerk($r->getProfession()) ? $cleSprResigned + 1 : $cleSprResigned ;
				$traSprResigned = PayEmployeeLedgerArchivePeer::isProduction($r->getProfession()) ? $traSprResigned + 1 : $traSprResigned ;
			endif;
		endforeach;
    	
		$res['resigned_foreign_professional'] = $proForiegnResigned;
    	$res['resigned_foreign_clerk'] = $cleForiegnResigned;
    	$res['resigned_foreign_production'] = $traForiegnResigned;

    	$res['resigned_spr_professional'] = $proSprResigned;
    	$res['resigned_spr_clerk'] = $cleSprResigned;
    	$res['resigned_spr_production'] = $traSprResigned;
    	
		return $res;
	}	
	
	public static function OtherGroup($co)
	{
		$defGrp = array("CLEANROOM PACKING", "INCOMING(SORTING JUMPSUIT)", "SHOE WASHING", "SHOE PACKING", "SHOES VACUUM PACK", "MCS SUPPORT", "PACKING (JUMPSUIT)", "OUTSIDE SHOE PACKING");
		$c = new Criteria();
		$c->add(self::TEAM, $defGrp, Criteria::NOT_IN);
		$c->addJoin(self::HR_COMPANY_ID, HrCompanyPeer::ID);
		$c->add(HrCompanyPeer::COMP_NAME, $co);
		$c->addGroupByColumn(self::TEAM);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r):
			$list[] = $r->getTeam();
		endforeach;
		return $list;
	}
	
	public static function GetEmployeePass($empNo)
	{
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empNo);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getRankCode() : '';
	}
//	public static function GetActiveEmployeeMomGroup($mom = null)
//	{
//		$c = new Criteria();
//		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
//		$c->add(PayBasicPayPeer::STATUS, 'A');
//		if ($mom) $c->add(self::MOM_GROUP, $mom );
//		$c->addAscendingOrderByColumn(self::NAME);
//		$rs = self::doSelect($c);
//		return $rs;
//	}

	public static function GetListByMomGroupRankCode($momGroup, $rankCode)
	{
		$c = new Criteria();
		$c->add(self::MOM_GROUP, $momGroup);
		if ($rankCode != "ALL") $c->add(self::RANK_CODE, $rankCode);
		$c->addAscendingOrderByColumn(self::NAME);
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		$rs = self::doSelect($c);
// 		$list = array();
// 		foreach($rs as $r):
// 			$list[] = $r->getEmployeeNo();
// 		endforeach;
		return $rs;
	}
	
	public static function GetMomGroup()
	{
		$c = new Criteria();
		$c->addGroupByColumn(self::MOM_GROUP);
		$c->addAscendingOrderByColumn(self::MOM_GROUP);
		$rs = self::doSelect($c);
		$list = array(''=>' - ALL - ');
		foreach($rs as $r):
			if ($r->getMomGroup()):
				$list[$r->getMomGroup()] = $r->getMomGroup();
			endif;
		endforeach;
		return $list;
	}
	
	public static function GetResignedThisYear($yr, $pass = null)
	{
// 		var_dump(array_key_exists('ALL',  $pass ));
// 		exit();
		$c = new Criteria();
		if ($pass && ! array_key_exists('ALL',  $pass ) ) $c->add(self::RANK_CODE, $pass, Criteria::IN);
		$c->add(self::DATE_RESIGNED, 'date('. self::DATE_RESIGNED . ' ) >= "' .($yr-1) . '-04-01"', Criteria::CUSTOM);
		$c->addAscendingOrderByColumn(self::NAME);
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r) {
				$list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	
	}
	
	public static function GetResignedBetweenDates($sdate, $edate, $pass = null)
	{
		$c = new Criteria();
		if ($pass && ! array_key_exists('ALL',  $pass ) ) $c->add(self::RANK_CODE, $pass, Criteria::IN);
		$c1 = $c->getNewCriterion(self::DATE_RESIGNED, $sdate, Criteria::GREATER_EQUAL);
		$c2 = $c->getNewCriterion(self::DATE_RESIGNED, $edate, Criteria::LESS_EQUAL);
		$c1->addAnd($c2);
		$c->addAnd($c1);
		$c->addAscendingOrderByColumn(self::NAME);
		//$c->add(self::ID, '&& || &&', Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r) {
			$list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	
	}
	
	public static function GetActiveEmployeeListByRankCode($pass, $co = null)
	{
		$c = new Criteria();
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		if ($pass && ! array_key_exists('ALL',  $pass ) ) $c->add(self::RANK_CODE, $pass, Criteria::IN);
		$c->addAscendingOrderByColumn(self::NAME);
		if ($co) $c->add(PayBasicPayPeer::COMPANY,$co);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r)
		{
			$list[$r->getEmployeeNo()] = $r->getName();
		}
		return $list;
	}
	
	
	public static function GetPhoto($id)
	{
		$c = new Criteria();
		$c->add(self::ID, $id);
		$rs = self::doSelectOne($c);
		$photo = '';
		if ($rs):
			$photo = $rs->getPhoto();
			if ( $photo !== '' && ! isset($photo) ):
				$photo = $rs->getGender() == 'F' ? 'female.jpg' : 'male.jpg';
			endif;
		endif;
		return $photo;
	}
	
	public static function ResignationSurvey($sdate, $edate)
	{
		$c = new Criteria();
		$c->add(self::DATE_RESIGNED, "( " . self::DATE_RESIGNED . ">= '"  . $sdate ."' and ". self::DATE_RESIGNED ." <= '" . $edate . "' )" , Criteria::CUSTOM);
		$rs = self::doSelect($c);
		$resigned = array();
		foreach($rs as $r):
			$resigned['total'] += 1; 
		endforeach;
		return $resignation;
	}
	
	public static function GetActiveSingaporean($empno)
	{
		$c = new Criteria();
		if ($empno) $c->add(self::EMPLOYEE_NO, $empno);
		$c->addJoin(self::EMPLOYEE_NO, PayBasicPayPeer::EMPLOYEE_NO);
		$c->add(PayBasicPayPeer::STATUS, 'A');
		//$c->add(self::EMPLOYEE_NO, 'substr(' .  self::EMPLOYEE_NO . ', 1, 1) = "S" ', Criteria::CUSTOM);
		$c->addAscendingOrderByColumn(self::NAME);
		$rs = self::doSelect($c);
		$list = array();
		foreach($rs as $r) {
			if (! $r->getDateResigned()) {
				$list[] = $r->getEmployeeNo();
			}
		}
		return $list;
	}
	
	public static function GetMobileNoByEmployee($empno) {
		$c = new Criteria();
		$c->add(self::EMPLOYEE_NO, $empno);
		$rs = self::doSelectone($c);
		return $rs? $rs->getCellNo() : '';
	}
	
	public static function GetMobileNoByName($name) {
		$c = new Criteria();
		$c->add(self::NAME, $name);
		$rs = self::doSelectone($c);
		return $rs? $rs->getCellNo() : '';
	}
	
}
