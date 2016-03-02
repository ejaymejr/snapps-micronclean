<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class RejectLib
{
	public static function GetEmailList($co = null)
	{
		$c = new Criteria();
		if ($co):
		$c->add(sfGuardUserProfilePeer::COMPANY, $co, Criteria::LIKE);
		endif;
		$c->addAscendingOrderByColumn(sfGuardUserProfilePeer::EMAIL);
		$rs = sfGuardUserProfilePeer::doSelect($c);
		$list = array(''=>' -Select Email- ', 'ejaymejr@gmail.com'=>'ejaymejr@gmail.com');
		//$list = array(''=> ' -ALL-');
		foreach($rs as $r):
		$list[$r->getEmail()] = $r->getEmail();
		endforeach;
		return $list;
	}

	public static function LocateTheFile( $company = null, $file = null)
	{
		$company = $company ? $company . '/' : '';
		if (sfConfig::get('http_intranet') == 'http://orion.micronclean/') :
			$dir = "/opt/httpd/htdocs_i/symfony/snapps-micronclean/web/uploadedImages/" . $company;
		else:
			$dir = "/opt/sites/ext/app.microncleansingapore.com/symfony/snapps-micronclean/web/uploadedImages/" . $company;
		endif;
		$dir = $dir . $file;
		return $dir;
	}
	
	public static function GetWebLocation( $path )
	{
		$fileLoc = sfConfig::get('http_intranet') .'micronclean/';
		//$fileLoc = "/micronclean/images/../" ;
		//$fileLoc = url_for('');
		$pos = strpos($path, 'web');
		$path = substr($path, $pos + 4);
		$path = $fileLoc . $path;
		return $path;
	}

	public static function Rmkdir($path, $mode = 0777, $company = null) {
		$company = $company ? $company . '/' : '';
		$path = $path.'/'.$company;
		$path = rtrim(preg_replace(array("/\\\\/", "/\/{2,}/"), "/", $path), "/");
		$e = explode("/", ltrim($path, "/"));
		if(substr($path, 0, 1) == "/") {
			$e[0] = "/".$e[0];
		}
		$c = count($e);
		$cp = $e[0];
		for($i = 1; $i < $c; $i++) {
			if(!is_dir($cp) && !@mkdir($cp, $mode)) {
				return false;
			}
			$cp .= "/".$e[$i];
		}
		return @mkdir($path, $mode);
	}


	public static function DeleteFile($fname)
	{
		$fileDet = FileDetailPeer::GetDataByFilename($fname);
		if ($fileDet):
			$fileDet->delete();
		endif;
		return;
	}
	
	
	public static function EmailPhotos($fnameList, $sendTo = null, $emailDate = null, $emailToken)
	{
		$content = '';
		$content = $content.'
				Dear Customer,

				Attached are the photos of reject article.
				 
				LEGEND/DESCRIPTION:
				';
		$flist = array();
		$dir = sfConfig::get('sf_upload_dir') .'/';
		$garment = '';

		foreach($fnameList as $fname):

		$fileDet = FileDetailPeer::GetDataByFilename($fname);
		if ($fileDet):
		$content = $content . '
				';
		$content =  $content. $fileDet->getFileName().': ' . $fileDet->getDescription() ;
		$content = $content . '
				';
		$flist[] = $fileDet->getPath() . $fname;

		if (! $garment) $garment = GarmentinformationPeer::GetGarmentTextDetailByGarmentCode($fileDet->getGarmentCode());
		endif;
		endforeach;

		$flist = array(); //do not send the file just give them the link <disable this line to send the photo>
		sfLoader::loadHelpers(array('Url', 'Text', 'Tag'));
		$displayLocation = (sfConfig::get('http_intranet') . substr(url_for('photo/view'), 1 ) );
		$displayLocation .= '?token=' . $emailToken.'&eID='. urlencode(trim($sendTo) );
		$displayLocation = str_replace('reject_dev.php/', '', $displayLocation);
		$content =  $content.'

				'. $displayLocation .'

						Thank you,
							
						';

		//$sendTo = 'ejaymejr@gmail.com';
		$sendTo = $sendTo? $sendTo : 'mcslogger@gmail.com';
		$subject = 'REJECT ARTICLE : ' . $garment;
		$from = 'mcslogger@gmail.com';
		$requestorEmail = 'mcslogger@yahoo.com';
		$recipients =  array($sendTo,  $requestorEmail);
		$mail = EmailUtils::GD_SMTPMail(
				$recipients, $subject, $content, true, $from, $flist);
	}

	public static function ChangePasswordMail()
	{

		$requestorEmail = 'mcslogger@gmail.com';


		$subject = 'Test';
			
		$content = '
				Dear Test,

				This is Test
				';

		$from = 'ejaymejr@gmail.com';

		$recipients =  array('mcslogger@gmail.com', $requestorEmail, 'mcslogger@yahoo.com');
		//$recipients =  array($requestorEmail, 'mcslogger@gmail.com', 'emmanuel@micronclean.com.sg');
		$mail = EmailUtils::GD_SMTPMail(
				$recipients, $subject, $content, true, $from);
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

	public static function UpdateGarmentInformation()
	{
		//clear the old data
		$delete = GarmentinformationPeer::ClearEntry();
		$sql = 'SELECT * FROM garmentInformation where inserted_date >= "2011-01-01"  order by inserted_date';
		$rs = self::ExecuteMercurySQL('', $sql);
		$detail = '';
		$record = false;
		while($rs->next()):
		//$record = GarmentinformationPeer::CheckGarmentRecord($rs->getString('garment_code'), $rs->getString('customer'), $rs->getString('inserted_date'));
		//if (!$record):
		$record = new Garmentinformation();
		$record->setGarmentCode($rs->getString('garment_code'));
		$record->setType($rs->getString('type'));
		$record->setSize($rs->getString('size'));
		$record->setColor($rs->getString('color'));
		$record->setCustomer($rs->getString('customer'));
		$record->setNoOfTimesWash($rs->getString('no_of_times_wash'));
		$record->setNumber($rs->getString('number'));
		$record->setHangerNo($rs->getString('hanger_no'));
		$idate = $rs->getString('inserted_date') == '0000-00-00 00:00:00' ? null : $rs->getString('inserted_date');
		$record->setInsertedDate( $idate );
		$record->setStatus($rs->getString('status'));
		//			var_dump($rs->getString('inserted_date'));
		//			echo ' - ';
		//			echo ($rs->getString('inserted_date') );
		//			echo  '<br>';
		$record->save();
		//endif;
		//$detail =  $rs->getString('customer') .' | '. $rs->getString('type') .' | '. $rs->getString('size') . ' | ' . $rs->getString('color');
		endwhile;
		return $detail;

	}


}
