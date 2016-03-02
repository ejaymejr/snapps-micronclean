<?php
    	//format will be
    	// timein 09:35

/**
 * Subclass for performing query and update operations on the 'sms_messagein' table.
 *
 * 
 *
 * @package lib.model.hr
 */ 
class SmsMessageinPeer extends BaseSmsMessageinPeer
{
	
    public static function GetUnprocessed()
    {
    	$c = new Criteria();
    	$c->add(self::IS_UPDATED, 'Y', Criteria::NOT_EQUAL);
    	$rs = self::doSelect($c);
    	return $rs;
    }
    
    public static function GetPager($cd, $rows=null)
    {        
    	$rows = $rows? $rows : 20;
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', $rows);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }
        
        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1); 
        
        $c = clone($cd);
        $pager = new sfPropelPager('SmsMessagein', $rowsPerPage);                    
                    
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }
    

    
    public static function ProcessRequest()
    {
    	$c = new Criteria();
    	$c->add(self::IS_UPDATED, 'Y', Criteria::NOT_EQUAL);
    	$rs = self::doSelect($c);
    	$msg = '';
    	foreach($rs as $r){
    		$sender = substr($r->getSender(), 3); //remove the +65
    		$msg = $r->getMsg();
    		$empData = HrEmployeePeer::GetDatabyMobileNo($sender);
    		$isOnsite = '';
    		$isDriver = '';
    		$isRecordOnly = false;
    		if ($empData) {
    			$isRecordOnly = SmsServiceToEmployeePeer::isRecordOnly($empData->getEmployeeNo());
//     			var_dump($isRecordOnly);
//     			var_dump($empData->getEmployeeNo());
//     			exit();
    			$r->setEmployeeNo($empData->getEmployeeNo());
    			$r->setName($empData->getName());
    			$req = explode(' ' , $msg);
    			echo "\n". $r->getSender() .' - '. $empData->getName() .' : '. $msg;
    			switch (trim(strtolower($req[0])))
    			{
    				case '0':
    					if ($isRecordOnly):
    						self::UpdateTimeOutMultiple($empData, $req, $r);
    					else:
    						self::UpdateTimeOut($empData, $req, $r);
    					endif;
    					break;
    				case '1':
    					if ($isRecordOnly):
    						self::UpdateTimeInMultiple($empData, $req, $r);
    					else:
    						self::UpdateTimeIn($empData, $req, $r);
    					endif;
    					break; 
    				case 'resend':
    					if ($r->getIsUpdated() <> 'Y'):
	    					$msg = SmsLogPeer::GetLastSms($empData->getEmployeeNo());
	    					SmsMessageoutPeer::SendMessage($msg->getMsg(), $empData->getCellNo());
	    					$r->setName( $empData->getName());
	    					$r->setIsUpdated('Y');
	    					$r->setUpdateRemark("last sms sent");
	    					$r->save();
	    				endif;
	    				break; 
    				default:
    					$r->setIsUpdated('Y');
    					$r->setUpdateRemark("Don't play play! ");
    					$r->save();
    					break; 
    			}
    		}
    	}
    }
    
    public static function ProcessRequestAttendanceOnly()
    {
    	$c = new Criteria();
    	$c->add(self::IS_UPDATED, 'Y', Criteria::NOT_EQUAL);
    	$rs = self::doSelect($c);
    	$msg = '';
    	echo  "\n|----------------------------------------|";
    	foreach($rs as $r){
    		$sender = substr($r->getSender(), 3); //remove the +65
    		$msg = $r->getMsg();
    		$empData = HrEmployeePeer::GetDatabyMobileNo($sender);
    		if ($empData) {
    			$r->setEmployeeNo($empData->getEmployeeNo());
    			$r->setName($empData->getName());
    			$req = explode(' ' , $msg);
    			echo "\n". $r->getSender() .' - '. $empData->getName() .' : '. $msg;
    			switch (trim(strtolower($req[0])))
    			{
    				case '0':
    					self::UpdateTimeOut($empData, $req, $r);
    					break;
    				case '1':
    					self::UpdateTimeIn($empData, $req, $r);;
    					break;
    				default:
    					$r->setIsUpdated('Y');
    					$r->setUpdateRemark("Don't play play! ");
    					$r->save();
    					break;
    			}
    		}
    	}
    	echo "\ndate: " . Date("Y-m-d h:i:s");
    	echo "\n|----------------------------------------|";
    }
    
    public static function UpdateTimeOut($empData, $req, $sms)
    {
    	$sentDateTime = DateUtils::DUFormat('Y-m-d H:i:s', $sms->getSentTime());
    	//$sentDateTime = $sms->getSentTime();
    	$req = array($sentDateTime, $sentDateTime);
    	//var_dump($sentDateTime);
    	//---------- if no value return;
    	$message = '';
    	if (!  isset($req[1])) {
    		$message = 'Check the ",".  Request format Invalid';
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark($message);
		   	$sms->save();
			SmsMessageout::SendMessage($message, $empData->getCellNo()); //send sms   	
    		return;	
    	}
    	
    	$cdttime = trim($req[1]); //? trim($req[1]) : DateUtils::DUNow() ;
    	//---------- if not valid return;    	
    	if (strlen($cdttime) < 5){
    		$message = 'Invalid date/time request.\0x0A Please use Full Military Time.';
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark('Invalid date/time request.');
		   	$sms->save();
		   	SmsMessageout::SendMessage($message, $empData->getCellNo()); //send sms
    		return;
    	}
    	
    	//----------- if update today's time
    	if (strlen($cdttime) == 5){
    		$cdttime = date('Y-m-d ') . $cdttime . ':00';
    		
    	}
    	
    	//----------- 'yyyy-mm-dd hh:ii'
    	if (strlen($cdttime) == 16){
    		$cdttime = DateUtils::DUDate('Y-m-d h:i:00');
    	}

    	//----------- 'yyyy-mm-dd hh:ii:ss'
    	if (strlen($cdttime) == 19){
    		$cddttime = DateUtils::DUDate('Y-m-d h:i:s', $cdttime);
    	}
    	
    	if ($cdttime) {
    		//$att = TkAttendanceMultiplePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
    		$att = TkAttendancePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
    		if ($att) {
    			//------- mobile and employee no is not the same
    			if ( $att->getEmployeeNo() <> $empData->getEmployeeNo() ) 
    			{
    				//$sms->setIsUpdated('Y');
		   			$sms->setUpdateRemark('Employee mobile is not updated...');
		   			$sms->save();
		   			return;
    			}

    			if ( $att->getModifiedBy() <> 'SMS Server' ) 
    			{
    				$message = 'Employee Have \0x0ATime In record prior to SMS.\0x0ASMS invalid';
    				$sms->setIsUpdated('Y');
		   			$sms->setUpdateRemark('Employee Have Time In record prior to SMS.  SMS invalid');
		   			$sms->save();
		   			//SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
		   			//return;
    			}
    			
    			$message = 'Attendance posted.';
    			$att->setEmployeeNo($empData->getEmployeeNo());
    			$att->setName($empData->getName());
    			if (!$att->getTimeIn()):
   					$att->setTimeIn($cdttime);
   					$message = 'åœ¨ä¿�å­˜æ™‚é–“\0x0A' . 'TimeIn Posted. ' . $cdttime ;
   				else:
   					$att->setTimeOut($cdttime);
   					$message = 'è¶…æ™‚ä¿�å­˜\0x0A' . 'TimeOut Posted. ' . $cdttime  ;
   				endif;
   				$att->setTimeout($cdttime);
   				$att->setDuration(DateUtils::DateDiff('s',$att->getTimeIn(), $cdttime));
   				$att->setCreatedBy('SMS Server');
   				$att->setModifiedBy('SMS Server');
   				$att->setDateModified(DateUtils::DUNow());
   				$att->save();
   				$sms->setIsUpdated('Y');
   				$sms->setUpdateRemark($message);
   				$sms->save();
   				SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    		}else{
    			$message = 'è«‹çš„æ™‚é–“ [1 <send>]\0x0ANo Time In Record.  Please time In';
    			$sms->setIsUpdated('Y');
	   			$sms->setUpdateRemark($message);
	   			$sms->save();
	   			SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
	   			return;    			
    		}
    	}else{
    		//----- invalid timeout
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark('Invalid date/time request');
		   	$sms->save();
    	}
    }
    
    public static function UpdateTimeIn($empData, $req, $sms)
    {
    	$sentDateTime = DateUtils::DUFormat('Y-m-d H:i:s', $sms->getSentTime());
    	$req = array($sentDateTime, $sentDateTime);
    	//---------- if no value return;
    	if (!  isset($req[1])) {
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark('Check the ",".  Request format Invalid');
		   	$sms->save();
    		return;	
    	}
    	
    	$cdttime = trim($req[1]);
    	//---------- if not valid return;    	
    	if (strlen($cdttime) < 5){
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark('Invalid date/time request.');
		   	$sms->save();
    		return;
    	}
    	
    	//----------- if update today's time
    	if (strlen($cdttime) == 5){
    		$cdttime = date('Y-m-d ') . $cdttime . ':00';
    		
    	}
    	
    	//----------- 'yyyy-mm-dd hh:ii'
    	if (strlen($cdttime) == 16){
    		$cdttime = DateUtils::DUDate('Y-m-d h:i:00');
    	}

    	//----------- 'yyyy-mm-dd hh:ii:ss'
    	if (strlen($cdttime) == 19){
    		$cddttime = DateUtils::DUDate('Y-m-d h:i:s', $cdttime);
    	}
    	
    	if ($cdttime) {
    		
     		$att = TkAttendancePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
     		if (! $att) {
    			$att = new TkAttendance();
    			$att->setCreatedBy('SMS Server');
    			$att->setEmployeeNo($empData->getEmployeeNo());
    			$att->setName($empData->getName());
    		}
    		if ($att) {
    			//------- mobile and employee no is not the same
    			if ( $att->getEmployeeNo() <> $empData->getEmployeeNo() ) 
    			{
    				//$sms->setIsUpdated('Y');
		   			$sms->setUpdateRemark('Employee mobile is not updated...');
		   			$sms->save();
		   			return;
    			}

    			if ( $att->getCreatedBy() <> 'SMS Server' ) 
    			{
    				$sms->setIsUpdated('Y');
		   			$sms->setUpdateRemark('è«‹ä½¿ç”¨æ‚¨çš„èº«ä»½è­‰æŽƒæ��å‡º\0x0AExisting Record is not Created by SMS. Invalid');
		   			$sms->save();
		   			return;
    			}
    			
    			$att->setEmployeeNo($empData->getEmployeeNo());
    			$att->setName($empData->getName());
    			if (!$att->getTimeIn()):
   					$att->setTimeIn($cdttime);
   					$message = 'åœ¨ä¿�å­˜æ™‚é–“\0x0A' . 'TimeIn Posted.' . $cdttime;
   				else:
   					$att->setTimeOut($cdttime);
   					$message = 'è¶…æ™‚ä¿�å­˜\0x0A' . 'TimeOut Posted.' . $cdttime;
   				endif;
   				$att->setDuration(DateUtils::DateDiff('s',$att->getTimeIn(), $cdttime));
   				$att->setModifiedBy('SMS Server');
   				$att->setDateModified(DateUtils::DUNow());
   				$att->setDateCreated(DateUtils::DUNow());
   				$att->save();
   				$sms->setIsUpdated('Y');
   				$sms->setUpdateRemark($message);
   				$sms->save();
   				SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    		}
    	}else{
    		//----- invalid timeout
		   	$sms->setIsUpdated('Y');
		   	$sms->setUpdateRemark('Invalid date/time request');
		   	$sms->save();
    	}
    }
    
    public static function UpdateTimeOutMultiple($empData, $req, $sms)
    {
    	$sentDateTime = DateUtils::DUFormat('Y-m-d H:i:s', $sms->getSentTime());
    	//$sentDateTime = $sms->getSentTime();
    	$req = array($sentDateTime, $sentDateTime);
    	//var_dump($sentDateTime);
    	//---------- if no value return;
    	$message = '';
    	if (!  isset($req[1])) {
    		$message = 'Check the ",".  Request format Invalid';
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark($message);
    		$sms->save();
    		SmsMessageout::SendMessage($message, $empData->getCellNo()); //send sms
    		return;
    	}
    	 
    	$cdttime = trim($req[1]); //? trim($req[1]) : DateUtils::DUNow() ;
    	//---------- if not valid return;
    	if (strlen($cdttime) < 5){
    		$message = 'Invalid date/time request.\0x0A Please use Full Military Time.';
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark('Invalid date/time request.');
    		$sms->save();
    		SmsMessageout::SendMessage($message, $empData->getCellNo()); //send sms
    		return;
    	}
    	 
    	//----------- if update today's time
    	if (strlen($cdttime) == 5){
    		$cdttime = date('Y-m-d ') . $cdttime . ':00';
    
    	}
    	 
    	//----------- 'yyyy-mm-dd hh:ii'
    	if (strlen($cdttime) == 16){
    		$cdttime = DateUtils::DUDate('Y-m-d h:i:00');
    	}
    
    	//----------- 'yyyy-mm-dd hh:ii:ss'
    	if (strlen($cdttime) == 19){
    		$cddttime = DateUtils::DUDate('Y-m-d h:i:s', $cdttime);
    	}
    	 
    	if ($cdttime) {
    		$att = TkAttendanceMultiplePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
    		//$att = TkAttendancePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
    		if ($att) {
    			//------- mobile and employee no is not the same
    			if ( $att->getEmployeeNo() <> $empData->getEmployeeNo() )
    			{
    				//$sms->setIsUpdated('Y');
    				$sms->setUpdateRemark('Employee mobile is not updated...');
    				$sms->save();
    				return;
    			}
    
    			if ( $att->getModifiedBy() <> 'SMS Server' )
    			{
    				$message = 'Employee Have \0x0ATime In record prior to SMS.\0x0ASMS invalid';
    				$sms->setIsUpdated('Y');
    				$sms->setUpdateRemark('Employee Have Time In record prior to SMS.  SMS invalid');
    				$sms->save();
    				//SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    				return;
    			}
    			 
    			$message = 'Attendance posted.';
    			$att->setEmployeeNo($empData->getEmployeeNo());
    			$att->setName($empData->getName());
    			if (!$att->getTimeIn()):
    			$att->setTimeIn($cdttime);
    			$message = 'åœ¨ä¿�å­˜æ™‚é–“\0x0A' . 'TimeIn Posted. ' . $cdttime ;
    			else:
    			$att->setTimeOut($cdttime);
    			$message = 'è¶…æ™‚ä¿�å­˜\0x0A' . 'TimeOut Posted. ' . $cdttime  ;
    			endif;
    			$att->setTimeout($cdttime);
    			$att->setDuration(DateUtils::DateDiff('s',$att->getTimeIn(), $cdttime));
    			$att->setCreatedBy('SMS Server');
    			$att->setModifiedBy('SMS Server');
    			$att->setDateModified(DateUtils::DUNow());
    			$att->save();
    			$sms->setIsUpdated('Y');
    			$sms->setUpdateRemark($message);
    			$sms->save();
    			SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    		}else{
    			$message = 'è«‹çš„æ™‚é–“ [1 <send>]\0x0ANo Time In Record.  Please time In';
    			$sms->setIsUpdated('Y');
    			$sms->setUpdateRemark($message);
    			$sms->save();
    			SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    			return;
    		}
    	}else{
    		//----- invalid timeout
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark('Invalid date/time request');
    		$sms->save();
    	}
    }
    
    public static function UpdateTimeInMultiple($empData, $req, $sms)
    {
    	$sentDateTime = DateUtils::DUFormat('Y-m-d H:i:s', $sms->getSentTime());
    	$req = array($sentDateTime, $sentDateTime);
    	//---------- if no value return;
    	if (!  isset($req[1])) {
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark('Check the ",".  Request format Invalid');
    		$sms->save();
    		return;
    	}
    	 
    	$cdttime = trim($req[1]);
    	//---------- if not valid return;
    	if (strlen($cdttime) < 5){
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark('Invalid date/time request.');
    		$sms->save();
    		return;
    	}
    	 
    	//----------- if update today's time
    	if (strlen($cdttime) == 5){
    		$cdttime = date('Y-m-d ') . $cdttime . ':00';
    
    	}
    	 
    	//----------- 'yyyy-mm-dd hh:ii'
    	if (strlen($cdttime) == 16){
    		$cdttime = DateUtils::DUDate('Y-m-d h:i:00');
    	}
    
    	//----------- 'yyyy-mm-dd hh:ii:ss'
    	if (strlen($cdttime) == 19){
    		$cddttime = DateUtils::DUDate('Y-m-d h:i:s', $cdttime);
    	}
    	 
    	if ($cdttime) {
    
    		//     		$att = TkAttendancePeer::GetDaily($empData->getEmployeeNo(), DateUtils::DUFormat('Y-m-d', $cdttime));
    		//     		if (! $att) {
    		$att = new TkAttendanceMultiple();
    		$att->setCreatedBy('SMS Server');
    		$att->setEmployeeNo($empData->getEmployeeNo());
    		$att->setName($empData->getName());
    		//   		}
    		if ($att) {
    			//------- mobile and employee no is not the same
    			if ( $att->getEmployeeNo() <> $empData->getEmployeeNo() )
    			{
    				//$sms->setIsUpdated('Y');
    				$sms->setUpdateRemark('Employee mobile is not updated...');
    				$sms->save();
    				return;
    			}
    
    			if ( $att->getCreatedBy() <> 'SMS Server' )
    			{
    				$sms->setIsUpdated('Y');
    				$sms->setUpdateRemark('è«‹ä½¿ç”¨æ‚¨çš„èº«ä»½è­‰æŽƒæ��å‡º\0x0AExisting Record is not Created by SMS. Invalid');
    				$sms->save();
    				return;
    			}
    			 
    			$att->setEmployeeNo($empData->getEmployeeNo());
    			$att->setName($empData->getName());
    			if (!$att->getTimeIn()):
    			$att->setTimeIn($cdttime);
    			$message = 'åœ¨ä¿�å­˜æ™‚é–“\0x0A' . 'TimeIn Posted.' . $cdttime;
    			else:
    			$att->setTimeOut($cdttime);
    			$message = 'è¶…æ™‚ä¿�å­˜\0x0A' . 'TimeOut Posted.' . $cdttime;
    			endif;
    			$att->setDuration(DateUtils::DateDiff('s',$att->getTimeIn(), $cdttime));
    			$att->setModifiedBy('SMS Server');
    			$att->setDateModified(DateUtils::DUNow());
    			$att->setDateCreated(DateUtils::DUNow());
    			$att->save();
    			$sms->setIsUpdated('Y');
    			$sms->setUpdateRemark($message);
    			$sms->save();
    			SmsMessageoutPeer::SendMessage($message, $empData->getCellNo()); //send sms
    		}
    	}else{
    		//----- invalid timeout
    		$sms->setIsUpdated('Y');
    		$sms->setUpdateRemark('Invalid date/time request');
    		$sms->save();
    	}
    }
    
}
