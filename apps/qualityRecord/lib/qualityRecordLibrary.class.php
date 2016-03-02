<?php

class qualityRecordLibrary
{
	public static function Loaders()
	{
		return sfLoader::loadHelpers(array('Url', 'Text', 'Tag'));
	}
	public static function EmailProcessLog($sendTo = null, $name = null, $url = null, $checkedBy = null)
	{
		$name = $name? $name : 'Team';
		$url = $url ? $url : '';
		$checkedBy = $checkedBy? $checkedBy : '';
		$content = '';
		$content = $content.'
		
				Dear '.$name.',

				Machine Process & Machine Repair Event Log has new entry that requires your attention.

				url: '. $url .'

				Email Sent by: '. $checkedBy .'
				
				Thank you, 
				
				';
		
		$subject = 'PROCESS REPAIR LOG';
		$requestorEmail = 'mcslogger@gmail.com';
		$recipients =  array($sendTo,  $requestorEmail);
		$mail = EmailUtils::GD_SMTPMail(
				$recipients, $subject, $content, true, false, array());
//		var_dump($mail);
//		exit();
	}
}
