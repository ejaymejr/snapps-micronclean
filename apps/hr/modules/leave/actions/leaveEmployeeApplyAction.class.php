<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class leaveEmployeeApplyAction extends SnappsAction
{
	var $preCount = 0;

	public function preExecute()
	{
		if (!$this->preCount)
		{
			sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Compute Leave Credits');
			$this->preCount++;
		}
		$user = $this->getUser()->isAuthenticated()? $this->_U() : 'no Login';
		$id= $this->_G('id');
		$this->record = HrEmployeeLeavePeer::retrieveByPK($id);
		if (!$this->record)
		{
			$this->record = new HrEmployeeLeave();
			$this->record->setDateCreated(DateUtils::DUNow());
			$this->record->setCreatedBy($user);
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
			//$this->_S('cmonth', date('Y-m-01'));
			
		}
	}

	public function execute()
	{
		$leaveID = $this->_G('leaveID');
		$empNo = $this->_G('employee_no' . $leaveID);
		$fiscal = HrFiscalYearPeer::getFiscalYear();
		$this->_S('ctab', $leaveID);
		$user = $this->getUser()->isAuthenticated()? $this->_U() : 'no Login';
		
	
		if ($this->getRequest()->getMethod() == sfRequest::POST && $empNo && $this->_G('dates'. $leaveID) )
		{
			$message = '';
			if ($empNo):
				$dates = $this->_G('dates'. $leaveID);
				$dtarr = explode(", " ,$dates);
				$emp = TkDtrmasterPeer::GetDatabyEmployeeNo1($empNo);
				$leaveEntry = HrEmployeeLeavePeer::ConvertToLeaveEntry($dtarr, $emp); 
				$fiscal  = HrFiscalYearPeer::GetFiscalYear();
				$balance = HrEmployeeLeaveCreditsPeer::GetBalanceLeave($empNo, $leaveID, HrFiscalYearPeer::getFiscalYear());
				$empData = HrEmployeePeer::GetDatabyEmployeeNo($empNo);
				foreach($leaveEntry as $inclusiveDateFrom => $inclusiveDateTo):
					if ( ( $leaveID == '2' ||  $leaveID == '1') 
						&& (HrEmployeeLeavePeer::IsDuplicate($empNo, $fiscal,  $inclusiveDateFrom, $inclusiveDateTo ) ) ):
						$this->_ERR('Some Days Are already applied!');
						return;
					endif;			
					if ($emp->getTkWorktemplateNo() != 'NON PUNCHING') {
						$this->vtmp = TkWorktemplateDetailPeer::GetWorkTempDetailbyWTNo($emp->getTkWorktemplateNo(), $this->holinfo['dates_hol']);
						$this->cal->setWorktemplate($this->vtmp);
						$ndays = $this->cal->getNoDaysLeave($inclusiveDateFrom, $inclusiveDateTo);
						$ndays = ($this->_G('half_day'.$leaveID) == 'none') ? $ndays : $ndays / 2;
					}else{
						$ndays = DateUtils::DateDiff('d',$inclusiveDateFrom,$inclusiveDateTo) + 1;
						$ndays = ($this->_G('half_day'.$leaveID) == 'none') ? $ndays : $ndays / 2;
					}	
					if ( $empData->getTypeOfEmployment() == 'PART-TIME' && $leaveID != 6 )
					{
						$this->_ERR('PART-TIME Employee not Allowed For Leave Benefits, Use Leave without Pay instead!');
						return;
					}
					

					if ( (strpos($emp->getTkWorktemplateNo(), 'ENGINEER') !== FALSE)
							&& ($inclusiveDateFrom == $inclusiveDateTo )
							&& DateUtils::DUFormat('D', DateUtils::DUFormat('Y-m-d',$inclusiveDateFrom))  == "Sat"   ):
							$ndays = .5;
					endif;

					if ($balance <= 0 )
					{
						$this->_ERR('Insufficient Credits!');
						return;
					}
					if ($balance < $ndays)
					{
						$this->_ERR('Insufficient Credits!');
						return;
					}
// 					var_dump($balance);
// 					var_dump($ndays);
// 					exit();
	
					$this->record = new HrEmployeeLeave();
					$this->record->setEmployeeNo($empNo);
					$this->record->setName($empData->getName() );
					$this->record->setContactNo($empData->getContactNo() );
					$this->record->setIcNo($empData->getIcNo() );
					$this->record->setReasonLeave($this->_G('reason_leave'.$leaveID) );
					$this->record->setHrLeaveId($leaveID );
					$this->record->setInclusiveDateFrom($inclusiveDateFrom );
					$this->record->setInclusiveDateTo($inclusiveDateTo );
					$this->record->setDateFiled($this->_G('date_filed'.$leaveID) );
					$this->record->setNoDays($ndays );
					$this->record->setHalfDay($this->_G('half_day'.$leaveID) );
					$this->record->setFiscalYear($fiscal);
					$this->record->setLeaveType(HrLeavePeer::GetLeaveTypebyId($leaveID));
					$this->record->setDateModified(DateUtils::DUNow());
					$this->record->setModifiedBy($user);
					if ($user <> 'no Login'):
						$this->record->setVerified('OK');
						$this->record->setVerifiedBy($user);
						$this->record->setDateVerified(DateUtils::DUNow());
						
						$this->record->setApproved('OK');
						$this->record->setApprovedBy($user);
						$this->record->setDateApproved(DateUtils::DUNow());						
					endif;
					$this->record->save();
					
					HrLib::LogThis('no Login',  'Apply Leave', '', $this->getModuleName().'/'.$this->getActionName() );
					$this->leave = HrEmployeeLeaveCreditsPeer::GetDatabyEmployeeNoLeaveId($empNo, $leaveID, $fiscal );
					//------------------------------ update employee leave credits
					if ($this->leave)
					{
						//--------------------- need to refresh querry to have an update from the above save
						$this->con = HrEmployeeLeavePeer::GetCountLeaves($empNo, $leaveID, $fiscal);
						$this->leave->setConsumed($this->con);
						$this->leave->save();		
						HrLib::LogThis('no Login',  'Count Leave', '', $this->getModuleName().'/'.$this->getActionName() );			
					}
					
					$this->ProcessAttendance($empNo, $inclusiveDateFrom, $inclusiveDateTo);
					$message = $message . $empData->getName() . ': ' . $inclusiveDateFrom .' - ' .$inclusiveDateTo . '<br>';
					
					//$this->redirect('leave/leaveEmployeeApply');

				endforeach;
				
				if ($empData)
				{
					$this->_S('ic_no'.$leaveID,       $this->_G('ic_no')? $this->_G('ic_no'): $empData->getIcNo());
					$this->_S('contact_no'.$leaveID,  $this->_G('contact_no')? $this->_G('contact_no'): $empData->getContactNo());
					$this->_S('name'.$leaveID,        $this->_G('name')? $this->_G('name'): $empData->getName());
					$this->_S('commence_date'.$leaveID, $empData->getCommenceDate());
					$balance = HrEmployeeLeaveCreditsPeer::GetBalanceLeave($empNo, $this->_G('leaveID'), HrFiscalYearPeer::getFiscalYear());
					$this->_S('balance'.$leaveID, $balance);
					$this->_S('dates'.$leaveID, '');
				}				
				$this->_SUC('Record <b>' . $message .'' . '</b> saved.');			
			endif; //ifempno
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
