<?php

/**
 * Subclass for performing query and update operations on the 'process_event_notified' table.
 *
 * 
 *
 * @package lib.model.inspection
 */ 
class ProcessEventNotifiedPeer extends BaseProcessEventNotifiedPeer
{
	public static function GetNotifyByEventLogByPerson($eventID, $name)
	{
		$c = new Criteria();
		$c->add(self::PROCESS_EVENT_LOG_ID, $eventID);
		$c->add(self::NAME, $name);
		$rs = self::doSelectOne($c);
		return $rs;
	}
	
	public static function NotifyByEventLogByPerson($eventID, $name, $sms, $email)
	{
		$oSms = ''; 
		$oEmail = '';
		$c = new Criteria();
		$c->add(self::PROCESS_EVENT_LOG_ID, $eventID);
		$c->add(self::NAME, $name);
		$record = self::doSelectOne($c);
		$user = sfContext::getInstance()->getUser()->getUsername();
		if (!$record):
			$record = new ProcessEventNotified();
			$record->setProcessEventLogId($eventID);
			$record->setName($name);
			$record->setDateCreated(date('Y-m-d h:i:s'));
			$record->setCreatedBy($user);
		endif;
		$oEmail = $record->getEmail();
		$oSms = $record->getSms();
		$cell = '';
		$sendto = '';
		switch($name):
			case 'terence':
				$cell = HrEmployeePeer::GetMobileNoByEmployee('S7406059E');
				$sendto = 'terence@micronclean.com.sg';
				break;
			case 'adeline':
				$cell = HrEmployeePeer::GetMobileNoByEmployee('S7838275I');
				$sendto = 'adeline@micronclean.com.sg';
				break;
			case 'melvin':
				$cell = HrEmployeePeer::GetMobileNoByEmployee('S7932973H');
				$sendto = 'melvin@micronclean.com.sg';
				break;
			case 'rex':
				$cell = HrEmployeePeer::GetMobileNoByName('REX MIRANDA MASCARENAS');
				$sendto = 'ejaymejr@micronclean.com.sg';
				break;
			case 'lyeheng':
				$cell = HrEmployeePeer::GetMobileNoByEmployee('S1553425G');
				$sendto = 'lyeheng@nanoclean.com.sg';
				break;
			case 'velu':
				$cell = HrEmployeePeer::GetMobileNoByEmployee('S7863014J');
				$sendto = 'velu@micronclean.com.sg';
				break;
		endswitch;
		qualityRecordLibrary::Loaders();
		$url = url_for('machine/processEventLogEdit?id='. $record->getProcessEventLogId(), true);
		$mess = "Machine Process & Machine Repair requires your attention \n".$url." \nMachine Recipe->Process Repair Log";
//		$sendto = 'ejaymejr@gmail.com';
//		$cell = '93828689';
		if ($sms):
			$record->setSms('YES');
			if ($oSms <> 'YES'):
				SmsMessageoutPeer::SendMessage($mess, $cell);
			endif;
		else:
			$record->setSms('NO');
		endif;
		if ($email):
			$record->setEmail('YES');
			if ($oEmail <> 'YES'):
				qualityRecordLibrary::EmailProcessLog($sendto, $name, $url, $record->getModifiedBy());
			endif;
		else:
			$record->setEmail('NO');
		endif;
		$record->setDateModified(date('Y-m-d h:i:s'));
		$record->setModifiedBy($user);
		$record->save();
		return;
	}
}
