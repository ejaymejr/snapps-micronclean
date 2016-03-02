<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class leaveApplyAddAction extends SnappsAction
{
	var $preCount = 0;

	public function preExecute()
	{
		if (!$this->preCount)
		{
			sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Compute Leave Credits');
			$this->preCount++;
		}

		$id= $this->_G('id');
		$this->record = HrEmployeeLeavePeer::retrieveByPK($id);
		if (!$this->record)
		{
			$this->record = new HrEmployeeLeave();
			$this->record->setDateCreated(DateUtils::DUNow());
			$this->record->setCreatedBy($this->_U());
		}

		$this->emp = HrEmployeePeer::GetDatabyEmployeeNo($this->_G('employee_no'));
		if ($this->emp)
		{
			$this->_S('ic_no',       $this->_G('ic_no')? $this->_G('ic_no'): $this->emp->getIcNo());
			$this->_S('contact_no',  $this->_G('contact_no')? $this->_G('contact_no'): $this->emp->getContactNo());
			$this->_S('name',        $this->_G('name')? $this->_G('name'): $this->emp->getName());
			$this->_S('commence_date', $this->emp->getCommenceDate());
		}
			

		$this->wrtmp = TkDtrmasterPeer::GetDatabyEmployeeNo1($this->_G('employee_no'));
		$this->holinfo = HrHolidayPeer::getDateHolByDate(sfConfig::get('fiscal_year'));
		//--------------------- init calendar object
		$this->cal = new TkCalendar(sfConfig::get('fiscal_year'));
		//$this->cal->setMonthBaseURL('leave/leaveApplyAdd','');
		$this->cal->SetHolidays($this->holinfo['dates_hol'],$this->holinfo['holname']);
		$this->cdate = sfConfig::get('fiscal_Year').'-01-01';
		$this->nwk = 1;
		$this->cdt = $this->cdate;
		$this->am_pm = '0';
		$this->dday  = 'Saturday';

		if ($this->getRequest()->getMethod() != sfRequest::POST )
		{
			$this->vtmp = array(0, 8, 8, 8, 8, 8, 0);
			$this->am_pm = '0';
			$this->dday  = 'Saturday';
			$this->_S('leave_type', 6);
			$this->_S('half_day', 'none');
		}
	}

	public function execute()
	{


		//--------------------- get fiscal year
		//$fyear = HrFiscalYearPeer::getFiscalYearbyDate(DateUtils::DUFormat("Y-m-d", $this->_G('inclusive_datefrom')));
		//$fyear = HrFiscalYearPeer::GetFiscalYear();
		$fyear = DateUtils::DUFormat("Y", $this->_G('inclusive_datefrom'));
		
		$this->_S('fiscal_year', ($fyear)? $fyear : HrFiscalYearPeer::GetFiscalYear());

		//--------------------- available credits
		if ($this->getRequest()->getMethod() !== sfRequest::POST):
			//var_dump($fyear);
			$this->leave = HrEmployeeLeaveCreditsPeer::GetDatabyEmployeeNoLeaveId($this->_G('employee_no'), $this->_G('leave_type'), $this->_G('fiscal_year') );
			$this->_S('credits', ($this->leave)? $this->leave->getCredits() - $this->leave->getConsumed() : 'Open');
			//$tot = HrEmployeeLeavePeer::GetCountLeaves($this->_G('employee_no'), $this->_G('leave_type'), $this->_G('fiscal_year') );
		endif;
		//var_dump($tot );
		//echo $this->leave->getCredits() .' - '. $this->con;
		
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
			if ( ( $this->_G('leave_type') == '2' ||  $this->_G('leave_type') == '1') 
					&& (HrEmployeeLeavePeer::IsDuplicate($this->_G('employee_no'),$this->_G('fiscal_year'),  $this->_G('inclusive_datefrom'), $this->_G('inclusive_dateto') ) ) ){
				$this->_ERR('Some Days Are already applied!');
				return;
			}
			//--------------------- get Worktemplate Detail
			$emp = TkDtrmasterPeer::GetDatabyEmployeeNo1($this->_G('employee_no'));
			if ($emp->getTkWorktemplateNo() != 'NON PUNCHING') {
				$this->vtmp = TkWorktemplateDetailPeer::GetWorkTempDetailbyWTNo($emp->getTkWorktemplateNo());
				$this->cal->setWorktemplate($this->vtmp);
				$ndays = $this->cal->getNoDaysLeave($this->_G('inclusive_datefrom'), $this->_G('inclusive_dateto'));
				$ndays = ($this->_G('half_day') == 'none') ? $ndays : $ndays / 2;
			}else{
				$ndays = DateUtils::DateDiff('d',$this->_G('inclusive_datefrom'), $this->_G('inclusive_dateto')) + 1;
				$ndays = ($this->_G('half_day') == 'none') ? $ndays : $ndays - .5;
			}
			$this->_S('no_days', $ndays);	
			//---------- open for reservist		
			if ($this->_G('leave_type') == '8')
			{
				$this->_S('credits', '365');
			}		
			//--------------- for engineer half day leave is whole day equivalent on saturday
			//var_dump(strpos($emp->getTkWorktemplateNo(), 'engineer') );
			//exit();
			if ( (strpos($emp->getTkWorktemplateNo(), 'engineer') === TRUE)
					&& ($this->_G('inclusive_datefrom') == $this->_G('inclusive_dateto') )
					&& DateUtils::DUFormat('D', $this->_G('inclusive_dateto')) == "Sat" ) :
					$ndays = .5;
			endif;
			
			if ($this->_G('credits') == "Open"):
				$this->_S('credits', $ndays);
			endif;
			
				if ($this->_G('consumed') < $ndays):
					if ($this->_G('credits') <= 0 || $this->_G('credits') < $ndays)
					{
						$this->_ERR('Insufficient Credits!');
						return;
					}
				endif;
			$employment = HrEmployeePeer::GetOptimizedDatabyEmployeeNo($this->_G('employee_no'), array('type_of_employment'));
			if ( $employment->get('TYPE_OF_EMPLOYMENT') == 'PART-TIME'
			&& $this->_G('leave_type') != 6 )
			{
				$this->_ERR('PART-TIME Employee not Allowed For Leave Benefits, Use Leave without Pay instead!');
				return;
			}

			if ($this->_G('save') && ($this->_G('credits') > 0))
			{

				$this->record->setEmployeeNo($this->_G('employee_no') );
				$this->record->setName($this->_G('name') );
				$this->record->setContactNo($this->_G('contact_no') );
				$this->record->setIcNo($this->_G('ic_no') );
				$this->record->setReasonLeave($this->_G('reason_leave') );
				$this->record->setHrLeaveId($this->_G('leave_type') );
				$this->record->setInclusiveDateFrom($this->_G('inclusive_datefrom') );
				$this->record->setInclusiveDateTo($this->_G('inclusive_dateto') );
				$this->record->setDateFiled($this->_G('date_filed') );
				$this->record->setNoDays($this->_G('no_days') );
				$this->record->setHalfDay($this->_G('half_day') );
				$this->record->setFiscalYear($this->_G('fiscal_year') );
				$this->record->setLeaveType(HrLeavePeer::GetLeaveTypebyId($this->_G('leave_type')));
				$this->record->setDateModified(DateUtils::DUNow());
				$this->record->setModifiedBy($this->_U());
				$this->record->save();
				HrLib::LogThis($this->_U(),  'Update Leave', '', $this->getModuleName().'/'.$this->getActionName() );
// 				//------------------------------ update employee leave credits
				if ($this->leave)
				{
					//--------------------- need to refresh querry to have an update from the above save
					$this->con = HrEmployeeLeavePeer::GetCountLeaves($this->_G('employee_no'), $this->_G('leave_type'), $this->_G('fiscal_year'));
//					var_dump($this->con);
					$this->leave->setConsumed($this->con);
					$this->leave->save();		
					HrLib::LogThis($this->_U(),  'Count Leave', '', $this->getModuleName().'/'.$this->getActionName() );			
				}
				
				$this->ProcessAttendance($this->_G('employee_no'), $this->_G('inclusive_datefrom'), $this->_G('inclusive_dateto'));
				$this->_SUF('Record <b>' . $data . '</b> saved.');
				$this->redirect('leave/leaveApplySearch?hIDs[]=' . $this->record->getId());
			}
		}
	}

	public function validateBasicPayAdd()
	{
		//               //$this->getRequest()->getErrorMsg()->addMsg('Invalid Price');
		//                    $this->getRequest()->setError($key, 'Invalid');
		//                    $localError++;

		$this->preExecute();
		if ($this->getRequest()->getMethod() != sfRequest::POST)
		{
			return true;
		}
		$localError = 0;
		return ($localError == 0);
	}

	public function handleErrorBasicPayAdd()
	{
		return sfView::SUCCESS;
	}

	public function ProcessAttendance($empNo, $sdt, $edt){
//		$sdt = dateUtils::DUFormat('Y-m-d', $sdt);
//		$edt = dateUtils::DUFormat('Y-m-d', $edt);
		
		$sdt = DateUtils::DUFormat('Y-m-01', $sdt);
		$edt = DateUtils::DUFormat('Y-m-t', $sdt);
		
		$batch = DateUtils::DUFormat("Ymd",$sdt).'-'.DateUtils::DUFormat("Ymd",$edt) ;
		$emparr = array(TkDtrmasterPeer::GetDatabyEmployeeNo($empNo));
		$extra = new PayComputeExtra();
		$extra->PrepareDtrData($emparr, $sdt, $edt, 'CRON SYSTEM');
		$cnt =1;
		foreach ($emparr as $emp){
			$cnt++;
			$extra->BuildDtrsummary($emp->getEmployeeNo(), $sdt,$edt, 'CRON SYSTEM', $batch);
		}
	}

}
