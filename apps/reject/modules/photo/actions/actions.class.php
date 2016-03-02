<?php

/**
 * photo actions.
 *
 * @package    qualityRecords
 * @subpackage photo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class photoActions extends SnappsActions
{
	/**
	 * Executes index action
	 *
	 */
	public function executeIndex()
	{
		$this->redirect('photo/upload');
		//$imgs = new GetImage();
		//echo $imgs->GetSiteImages('http://i.imgur.com/T74Rh.jpg'');
	}
	
	public function executeNotFound()
	{
		
	}

	public function executeUpload()
	{
		$c = new PhotoDetailLikeCriteria();
		$c->addDescendingOrderByColumn(PhotoDetailPeer::DATE_CREATED);
		//$c->add(PhotoDetailPeer::CREATED_BY, '&& || &&', Criteria::CUSTOM);
		$this->pager = PhotoDetailPeer::doSelect($c);
		$pager = PhotoDetailPeer::GetPager($c);
 		$this->gridVars = self::CreateGridVars($pager, 'search_photo_header', 'search_photo_list', 'DIVPager',  sfConfig::get('app_photo_grid_headers') );			
	}
	
	public function executeUploadDelete()
	{
		$id = $this->_G('id');
		$this->images = array();
		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
		if ($photoDetail):
			$photoDetail->delete();
		endif;
		$this->_SUF('Record Has been Deleted Successfuly');
		$this->redirect('photo/upload');
		
	}
	
	public function executeUploadEdit()
	{
		$id = $this->_G('id');
		$this->images = array();
		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
		$fileID = array();
		$files = FileDetailPeer::GetDataByBatchId($photoDetail->getBatchId());
		$fileName = '';
		foreach ($files as $f):
			$this->images[$f->getFileName()] = $f->getDescription();
			$fileID[] = $f->getId();
			$fileName = 'dsc_'. str_replace('.jpeg', '_jpeg', $f->getFileName());
			$this->_S($fileName, $f->getDescription());
		endforeach;
		if ($this->getRequest()->getMethod() != sfRequest::POST )
		{
			$this->_S('batch_id', $photoDetail->GetBatchId());
			$this->_S('garment_code', $photoDetail->GetGarmentCode());
			$this->_S('garment', $photoDetail->getGarment());
			$this->_S('size', $photoDetail->getSize());
			$this->_S('color', $photoDetail->getColor());
			$this->_S('reason', $photoDetail->getReason());
			$this->_S('customer', $photoDetail->getName());
			$this->_S('department', $photoDetail->getDepartment());
			$this->_S('shift', $photoDetail->getShift());
			$this->_S('garment_action', $photoDetail->getGarmentAction());
			$this->_S('no_of_times_wash', $photoDetail->getNoOfTimesWash());
			
		}
		$customer = $photoDetail->getName();
		$c = new EmailHistoryCriteria();
		$c->add(EmailHistoryPeer::FILE_DETAIL_ID, $fileID, Criteria::IN);
		//$c->setLimit(2);
		$this->pager = EmailHistoryPeer::doSelect($c); //EmailHistoryPeer::GetPager($c);
		
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer($customer);
		$this->colorList = RejectColorAttrPeer::GetColorByCustomer($customer);
		$this->sizeList = RejectSizeAttrPeer::GetSize($customer);
		$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer($customer);
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
		$this->gridVars = self::CreateGridVars($this->pager, 'search_email_header', 'search_email_list', 'DIVPager',  sfConfig::get('app_email_search_headers') );
		$this->setTemplate('uploader');
	}
	
	public function executeEmailSearchPager()
	{
		$id = $this->_G('id');
		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
		$fileID = array();
		$files = FileDetailPeer::GetDataByBatchId($photoDetail->getBatchId());
		$fileName = '';
		foreach ($files as $f):
			$this->images[$f->getFileName()] = $f->getDescription();
			$fileID[] = $f->getId();
			$fileName = 'dsc_'. str_replace('.jpeg', '_jpeg', $f->getFileName());
			$this->_S($fileName, $f->getDescription());
		endforeach;
		$c = new EmailHistoryCriteria();
		$c->add(EmailHistoryPeer::FILE_DETAIL_ID, $fileID, Criteria::IN);
		$this->pager = EmailHistoryPeer::GetPager($c);
		$this->gridVars = self::CreateGridVars($this->pager, 'search_email_header', 'search_email_list', 'DIVPager',  sfConfig::get('app_email_search_headers') );
	}
	
	public function executeSaveto()
	{
		//	$uploader=new PhpUploader();
		//	$mvcfile=$uploader->GetValidatingFile();
		//
		//	if($mvcfile->FileName=="accord.bmp")
		//	{
		//		$uploader->WriteValidationError("My custom error : Invalid file name. ");
		//		exit(200);
		//	}
		//
		//	//USER CODE:
		//
		//	$targetfilepath= "savefiles/myprefix_" . $mvcfile->FileName;
		//	if( is_file ($targetfilepath) )
		//		unlink($targetfilepath);
		//	$mvcfile->MoveTo( $targetfilepath );
		//
		//	$uploader->WriteValidationOK();
	}

	public function executeTest()
	{
		 
	}

	public function executePreviewPhoto()
	{
		 
	}

	public function executeUploaderOrig()
	{
		$totalUploaded = 0;
		$mess = '';
		$messerr='';
		$cntr = 0;
		$dir = sfConfig::get('sf_upload_dir') .'/';
		$this->images = array();
		RejectLib::Rmkdir($dir);
		$totalUploaded = 0;
		if (!$dir) :
            $this->_ERR('Unable to find upload directory');
            return;
	    endif;
	    $batchID = Date('Y-m-d_H_i');
		foreach ($_FILES as $fileFieldKey => $f) :
			$cntr++;
		    if ($f['name'] != '') :
			    if (file_exists($dir . $f["name"])):
		      		$messerr = $messerr . $f["name"] . " already exists.  File Ignored " . '<br>';
				else:
					$origFileName = SQLUtils::FormatValue(trim(stripslashes($f['name']))); //'file_' . $cntr;
		      		$fileDet = new FileDetail();
		      		$fileDet->setBatchId($batchID);
		      		$fileDet->setFileNameOriginal($origFileName);
		      		$fileDet->setMimeType($f["type"]);
		      		$fileDet->setSize($f["size"]);
		      		$fileDet->setDescription($this->_G('description_'. $cntr));
		      		$fileDet->setDateCreated(DateUtils::DUNow());
		      		$fileDet->setCreatedBy($this->_U());
		      		$fileDet->setDateModified(DateUtils::DUNow());
		      		$fileDet->setModifiedBy($this->_U());
		      		$fileDet->save();
		      		$extension = explode('/', $f["type"]);
		      		$newFileName = 'FILE_' . $fileDet->getId() .'.'. $extension[1];
		      		$fileDet->setFileName($newFileName);
		      		$fileDet->save();
		      		move_uploaded_file($f["tmp_name"], $dir . $newFileName);
		      		$mess = $mess .  "Stored in: " . "upload/" . $newFileName . '<br>';
		      		$this->images[] = $newFileName;
		      		$totalUploaded++;
		      	endif;			 
		    endif;
		endforeach;
		if ($totalUploaded > 0):
			$rec = new PhotoDetail();
			$rec->setTransDate(DateUtils::DUNow());
			$rec->setBatchID($batchID);
			$rec->setFilelink('');
			$rec->setFilename('');
			$rec->setDateModified(DateUtils::DUNow());
			$rec->setDateCreated(DateUtils::DUNow());
			$rec->save();
		endif;
		if ($messerr) $this->_ERR( $messerr );
		if ($mess) $this->_SUC( $mess );
	}

	public function executeDeleteFile()
	{
		$file = $this->_G('file');
		$id = $this->_G('id');
		$id = 12;
		$fileDet = FileDetailPeer::DeleteFile($file);
		$this->redirect('photo/uploadEdit?id=' . $id );
	}
	public function executeDeletePhoto()
	{
		$id = $this->_G('id');
		$fileDet = PhotoDetailPeer::retrieveByPK($id);
		if ($fileDet):
			$fileDet->delete();
		endif;
		$this->redirect('photo/upload' );
	}
	
	public function executeShowImage()
	{
		$this->image = $this->_G('fname');
	}
	
	public function executeAjaxEditDescription()
	{
		$fname = $this->_G('fname');
		$this->photoNumber = preg_replace("/\\.[^.\\s]{3,4}$/", "", $fname);
 		$fDetail =FileDetailPeer::GetDataByFilename($fname);
		if ($fDetail):
			$this->_S('description_'.$this->photoNumber, $fDetail->getDescription());
			$this->_S('file_name_'.$this->photoNumber, $fDetail->getFileName());
		endif;
	}
	
	public function executeAjaxSaveDescription()
	{
// 		var_dump($this->_g('description'));
// 		exit();
		$fDetail =FileDetailPeer::GetDataByFilename($this->_G('fname'));
		if ($this->_G('description')):
			$fDetail->setDescription($this->_G('description'));
			$fDetail->save();
		endif;
		echo $this->_g('description');
		exit();
// 		$this->desc = $fDetail->getDescription();
	}
	
	/* This function is not compatible with the garmentinformation customer data
	 * because the customer name doesnt have the PTE LTD
	 */
	public function executeAjaxGarmentInformation()
	{
// 		var_dump('test');
// 		exit();
		$this->garmentCode = $this->_G('garment_code');
		$sql = "select * from garmentInformation where garment_code = '".$this->garmentCode."' order by inserted_date desc";
		//$res = GarmentinformationPeer::ExecuteSQL('', $sql);
		$res = RejectLib::ExecuteMercurySQL('', $sql);
		$gtype = '';
		$gsize = '';
		$gcolor= '';
		$gcustomer = '';
		$gdepartment = '';
		$gshift = '';
		$xwash = 0;
		while ($res->next()):
			//$garments[ $res->getString('garment_code') ] = $res->getString('customer') .'_' . $res->getString('type') .'_' .$res->getString('size') .'_' .$res->getString('color') ;
			$gtype     = $res->getString('type');
			$gsize     = $res->getString('size');
			$gcolor    = $res->getString('color');
			$gcustomer = $res->getString('customer');
			$gdepartment = $res->getString('department');
			$gshift = $res->getString('shift');
			$xwash     = $res->getInt('no_of_times_wash');
		endwhile;
		$this->_S('garment', $gtype);
		$this->_S('size', $gsize);
		$this->_S('color', $gcolor);
		$this->_S('customer', $gcustomer);
		$this->_S('no_of_times_wash', $xwash);	
		$this->_S('department', $gdepartment );
		$this->_S('shift', $gshift );
		$customer = $this->_G('customer');
		
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		//$this->customerList = CustomerAttrPeer::GetCustomerListName();
		$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer($customer);
		$this->colorList = RejectColorAttrPeer::GetColorByCustomer($customer);
		$this->sizeList = RejectSizeAttrPeer::GetSize($customer);
		$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer($customer);
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
		$this->setTemplate('refreshGarmentInformation');
	}
	
	public function executeSearchCriteria()
	{
		$c = new PhotoDetailCriteria();
		$c->addDescendingOrderByColumn(PhotoDetailPeer::TRANS_DATE);
		$this->pager = PhotoDetailPeer::GetPager($c);
		
	}
	
	public function executeAjaxViewPhotoDetail()
	{
		
		//$garmentList = explode(';', $this->_G('garmentList'));
		$customer = $this->_G('customer');
		$c = new Criteria();
		$c->add(PhotoDetailPeer::NAME, $customer);
// 		$c->add(PhotoDetailPeer::ID, '&& || &&', Criteria::CUSTOM);
		$this->pager = PhotoDetailPeer::GetPager($c);
	}
	
	public function executeView()
	{
		$show = $this->_G('show');
		$token = $this->_G('token');
		$customer = $this->_G('customer');
		$garment_code = $this->_G('garment_code');
		$email = $this->_G('eID');
		$isValid = EmailHistoryPeer::isValid($token, $email);
//		if (!$isValid):
//			$this->redirect('photo/notFound');
//		endif;
		$this->images = array();
		switch($show):
			case 'customer':
				$files = FileDetailPeer::GetDataByCustomerList($customer);
				break;
			case 'garment':
				$files = FileDetailPeer::GetDataByGarmentCode($garment_code);
				break;
			case 'email':
				$files = FileDetailPeer::GetDataByEmail($email);
				break;
			default:
				$files = FileDetailPeer::GetDataByToken($token);
				break;
		endswitch;

		$this->photoIDs = array();
		if ($files):
			foreach ($files as $f):
				$this->images[$f->getFileName()] = $f->getDescription();
				$photoDetail = PhotoDetailPeer::GetDataByBatchId($f->getBatchId());
				$this->photoIDs[$photoDetail->getId()] = $photoDetail->getId();
			endforeach;		
			if ($photoDetail):
				//echo $photoDetail->getBatchId();
				$this->_S('token', $token);
				$this->_S('customer', $photoDetail->getName());
				$this->_S('garment_code', $photoDetail->getGarmentCode());
			endif;
		endif;
		
		$this->files = $files;
		//$this->setLayout('layout_noheading');
		//$this->photoDetail = $photoDetail;
		//var_dump($files);
		//exit();

	}
	
	public function executeFileView()
	{
		$fileDetail = FileDetailPeer::GetDataByFilename($this->_G('file'));
		if ($fileDetail):
			$photoDetail = PhotoDetailPeer::GetDataByBatchId($fileDetail->getBatchId());
			if ($photoDetail):
				$this->_S('customer', $photoDetail->getName());
				$this->_S('garment_code', $photoDetail->getGarmentCode());
			endif;
		endif;
		$this->files = array($fileDetail);
	}
	
	public function executeUpdateGarmentInformation()
	{
		RejectLib::UpdateGarmentInformation();
		$this->_SUC('Update Completed');
		//$this->setTemplate(sfView::NONE);
		$this->redirect('photo/upload');
	}
	
	public function executeViewCustomerReject()
	{
		$customer = str_replace("'", "", $this->_G('customer'));
		$this->images = array();
		$files = FileDetailPeer::GetDataByCustomer($customer);
		if ($files):
			foreach ($files as $f):
				$this->images[$f->getFileName()] = $f->getDescription();
				$photoDetail = PhotoDetailPeer::GetDataByGarmentCode($f->getGarmentCode());
			endforeach;		
		endif;
	}
	
	public function executeAjaxSearchEmail()
	{
// 		$id = $this->_G('id');
// 		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
// 		$fileID = array();
// 		$files = FileDetailPeer::GetDataByBatchId($photoDetail->getBatchId());
// 		foreach ($files as $f):
// 			$fileID[] = $f->getId();
// 		endforeach;
// 		$c = new EmailHistoryCriteria();
// 		$c->add(EmailHistoryPeer::FILE_DETAIL_ID, $fileID, Criteria::IN);
// 		$this->pager = EmailHistoryPeer::GetPager($c);
	}
	
	public function executeAjaxSendEmail()
	{
		$fnameList = array();
		$emailTo = array();
		$this->emailList = $this->_G('email_list');
		$emailTo = explode(', ', $this->_G('email_list'));
		$fnameList = explode(', ', $this->_G('filename'));
		if ($this->_G('email_list')):
			$this->_ERR('Pls provide a valid email address');
		endif;
		if ($this->_G('email_list')):
		$token = DateUtils::DUFormat('Ymdhis', DateUtils::DUNow());
		foreach($fnameList as $fname):
			$fileDet = FileDetailPeer::GetDataByFilename($fname);
			$emailDate = DateUtils::DUNow() ;
			if ($fileDet):
				$emailHistory = new EmailHistory();
				$emailHistory->setFileDetailId($fileDet->getId());
				$emailHistory->setEmailAddress($this->_G('email_list'));
				$emailHistory->setEmailDate($emailDate);
				$emailHistory->setEmailToken($token);
				$emailHistory->setDateCreated(DateUtils::DUNow());
				$emailHistory->setCreatedBy($this->_U());
				$emailHistory->setDateModified(DateUtils::DUNow());
				$emailHistory->setModifiedBy($this->_U());
				$emailHistory->save();
			endif;
		endforeach;
		if ($fnameList):
			RejectLib::EmailPhotos($fnameList, $this->_G('email_list'), $emailDate, $token);
		endif;
		endif;
	
	}
	
	public function executeAjaxGetRejectType()
	{
		//var_dump($this->_G('customer'));
		$this->reasonList = HrLib::GetRejectAttrByCompany($this->_G('customer'));
	}
	
	public function executeShowHarddiskPhoto()
	{
		//var_dump($this->_G('customer'));
	}
	
	public function executeRefreshGarmentInformation()
	{
		$customer = $this->_G('customer');
		$this->customerList = CustomerAttrPeer::GetCustomerListName();
		$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer($customer);
		$this->colorList = RejectColorAttrPeer::GetColorByCustomer($customer);
		$this->sizeList = RejectSizeAttrPeer::GetSize($customer);
		$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer($customer);
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
	}
	
	public function executeAjaxSaveNewInfo( )
	{
		$customer = strtoupper($this->_G('customer'));
		$ncustomer = strtoupper($this->_G('new_customer'));
		$ngarment  = strtoupper($this->_G('new_garment'));
		$ncolor  = strtoupper($this->_G('new_color'));
		$nsize  = strtoupper($this->_G('new_size'));
		$nreason  = strtoupper($this->_G('new_reason'));
		$ndepartment  = strtoupper($this->_G('new_department'));
		$nshift  = strtoupper($this->_G('new_shift'));
		$templateName = $this->_G('template_name');
		if ($ncustomer):
			$record = RejectCustomerAttrPeer::GetDataByCustomer($ncustomer);
			if (!$record):
				$record = new RejectCustomerAttr();
				$record->setCustomer($ncustomer);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_customer', '');
			endif;
		endif;
		
		if ($ngarment):
			$record = RejectTypeAttrPeer::GetDataByCustomerByType($customer, $ngarment);
			if (!$record):
				$record = new RejectTypeAttr();
				$record->setCustomer($customer);
				$record->setType($ngarment);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_garment', '');
			endif;
		endif;
		
		if ($ncolor):
			$record = RejectColorAttrPeer::GetDataByCustomerByColor($customer, $ncolor);
			if (!$record):
				$record = new RejectColorAttr();
				$record->setCustomer($customer);
				$record->setColor($ncolor);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_color', '');
			endif;
		endif;
		
		if ($nsize):
			$record = RejectSizeAttrPeer::GetDataByCustomerBySize($customer, $nsize);
			if (!$record):
				$record = new RejectSizeAttr();
				//$record->setCustomer($customer);
				$record->setSize($nsize);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_size', '');
			endif;
		endif;
		
		if ($nreason):
			$record = RejectRejectAttrPeer::GetDataByCustomerByReason($customer, $nreason);
			if (!$record):
				$record = new RejectRejectAttr();
				$record->setCustomer($customer);
				$record->setReason($nreason);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_reason', '');
			endif;
		endif;
		
		if ($ndepartment):
		$record = RejectDepartmentAttrPeer::GetDataByCustomerByDepartment($customer, $ndepartment);
			if (!$record):
				$record = new RejectDepartmentAttr();
				$record->setCustomer($customer);
				$record->setDepartment($ndepartment);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_department', '');
			endif;
		endif;		
		
		if ($nshift):
		$record = RejectShiftAttrPeer::GetDataByCustomerByShift($customer, $nshift);
			if (!$record):
				$record = new RejectShiftAttr();
				$record->setCustomer($customer);
				$record->setShift($nshift);
				$record->setDateCreated(DateUtils::DUNow());
				$record->setDateModified(DateUtils::DUNow());
				$record->setCreatedBy($this->_U());
				$record->setModifiedBy($this->_U());
				$record->save();
				$this->_S('new_shift', '');
			endif;
		endif;		
		//,color,size,reason,department,shift
		//$this->_S('garment', $this->_G('garment'));
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer($customer);
		$this->colorList = RejectColorAttrPeer::GetColorByCustomer($customer);
		$this->sizeList = RejectSizeAttrPeer::GetSize($customer);
		$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer($customer);
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
		if (! $templateName):
			$this->setTemplate('refreshGarmentInformation');
		else:
			$this->setTemplate($templateName);
		endif;
		
	}
	
	public function executeEmailManager()
	{

		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$email = $this->_G('cemail_address');
			$emailContact = EmailContactPeer::GetDataByEmail($email);
			$id = 0;
			if (!$emailContact):
				$emailContact = new EmailContact();
				$id = self::SaveNewEmail($emailContact, $this->_G('customer'), $this->_G('cdepartment'), $this->_G('cshift'), $this->_G('cname'), $this->_G('cwebsite'), $this->_G('cemail_address'));
				$emailListing += '<'.$emailContact->getEmailAddress() . '> ';
				$message =  $this->_G('cemail_address') . ' Email has been saved';
			else:
				$id = self::SaveNewEmail($emailContact, $this->_G('customer'), $this->_G('cdepartment'), $this->_G('cshift'), $this->_G('cname'), $this->_G('cwebsite'), $this->_G('cemail_address'));
				$message =  $this->_G('cemail_address') . ' Email has been updated';
			endif;
			$this->_SUF($message);
			$this->redirect('photo/emailManagerEdit?id='.$id);
		}
		$customer = $this->_G('customer');
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerNoBlank($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerNoBlank($customer);
		$c = new Criteria(); 
		$c->addGroupByColumn(EmailContactPeer::EMAIL_ADDRESS);
		$c->addAscendingOrderByColumn(EmailContactPeer::EMAIL_ADDRESS);
		$this->pager = EmailContactPeer::doSelect($c);
	}
	
	public function SaveNewEmail($emailContact, $customer, $dept, $shift, $name, $website, $email)
	{
		$emailContact->setName($name);
		$emailContact->setEmailAddress($email);
		$emailContact->setWebsite($website);
		$emailContact->setDateModified(DateUtils::DUNow());
		$emailContact->setModifiedBy($this->_U());
		$emailContact->save();
		$id = $emailContact->getId();
		return $id;
	}
	
	public function SaveEmail($emailContact, $customer, $dept, $shift, $name, $website, $email)
	{
		self::SaveNewEmail($emailContact, $customer, $dept, $shift, $name, $website, $email);
		$emailToDept = EmailToDeptPeer::GetDataByEmailCustomerDeptShift($email, $customer, $dept, $shift);
		if (!$emailToDept):
			$emailToDept = new EmailToDept();
			$emailToDept->setEmailAddress($email);
			$emailToDept->setCompany($customer);
			$emailToDept->setDepartment($dept);
			$emailToDept->setShift($shift);
			$emailToDept->setCreatedBy($this->_U());
			$emailToDept->setModifiedBy($this->_U());
			$emailToDept->setDateCreated(DateUtils::DUNow());
			$emailToDept->setDateModified(DateUtils::DUNow());
			$emailToDept->save();
		else:
			$emailToDept->delete();
		endif;
	}
	
	public function executeEmailManagerEdit()
	{
		$id = $this->_G('id');
		$emailContact = EmailContactPeer::retrieveByPK($id);
		if ($emailContact):
			$this->_S('cname', $emailContact->getName());
			$this->_S('cemail_address', $emailContact->getEmailAddress());
			$this->_S('cwebsite', $emailContact->getWebsite());
			$this->_S('customer', EmailToDeptPeer::GetCompanyByEmail($emailContact->getEmailAddress()));
		endif;
		$customer = $this->_G('customer');
 		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerNoBlank($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerNoBlank($customer);
		//var_dump($this->shiftList);
		$c = new Criteria();
		$c->addAscendingOrderByColumn(EmailContactPeer::EMAIL_ADDRESS);
		$c->addGroupByColumn(EmailContactPeer::EMAIL_ADDRESS);
		$this->pager = EmailContactPeer::doSelect($c);
		$this->setTemplate('emailManager');
	}
	
	public function executeAjaxUpdateDepartmentShift()
	{
		$customer = $this->_G('customer');
 		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerNoBlank($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerNoBlank($customer);
	}
	

	public function executeAjaxRefreshCustomerInfo()
	{
		$customer = $this->_G('customer');
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
	}
	
	public function executeAjaxRefreshEmailSendTo()
	{
// 		$this->co = $this->_G('customer');
// 		$this->dept = $this->_G('dept');
// 		$this->shift = $this->_G('shift');
// 		echo 'here';
// 		exit();
	}
	
	public function executeSearchReject()
	{
		$custList = $this->_G('customer_list');
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerList();
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerList();
		$c = new PhotoDetailLikeCriteria();
		if ($custList) $c->add(PhotoDetailPeer::NAME, $custList, Criteria::IN);
		$c->addDescendingOrderByColumn(PhotoDetailPeer::DATE_CREATED);
		//$c->add(PhotoDetailPeer::ID, '&& || &&', Criteria::CUSTOM);
		$this->pager = PhotoDetailPeer::doSelect($c);
	}
	
	public function executeAjaxSearchReject()
	{
		$custList = explode(',', str_replace("'", "",  $this->_G('customer_list') ) );
		$this->customerList =  str_replace("'", "",  $this->_G('customer_list') );
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerList($custList);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerList($custList);
	
	}
	
	public function executeAjaxFilterSearch()
	{
		
		$custList = trim($this->_G('customer_list')) ;
		$deptList = trim($this->_G('department_list')) ;
		$shiftList =  trim($this->_G('shift_list')) ;
		$custList =  $custList <> '' && $custList <> 'null' ? explode(',', str_replace("'", "",  $custList ) ) : '';
		$deptList =  $deptList <> '' && $deptList <> 'null' ? explode(',', str_replace("'", "",  $deptList ) ) : '';
		$shiftList = $shiftList <> '' && $shiftList <> 'null' ? explode(',', str_replace("'", "",  $shiftList ) ) : '';
		$photoDetailIDs = PhotoDetailPeer::GetDataByCustomerByDepartmentByList($custList, $deptList, $shiftList);
		$c = new  PhotoDetailCriteria();
		if ($custList) $c->add(PhotoDetailPeer::NAME, $custList, Criteria::IN);
		if ($deptList) $c->add(PhotoDetailPeer::DEPARTMENT, $deptList, Criteria::IN);
		if ($shiftList) $c->add(PhotoDetailPeer::SHIFT, $shiftList, Criteria::IN);
		$c->addDescendingOrderByColumn(PhotoDetailPeer::TRANS_DATE);
		//$c->add(PhotoDetailPeer::CREATED_BY, '&& || &&', Criteria::CUSTOM);
		$pager = PhotoDetailPeer::GetPager($c);
		$this->photoPager = self::CreateGridVars($pager, 'search_photodetail_header', 'search_photodetail_list', 'DIVFilterSearchReject',  sfConfig::get('app_photodetail_search_headers') );
	}
	
	public function executeRefreshEmailInformation()
	{
		$customer = $this->_G('customer');
		$this->customerList = CustomerAttrPeer::GetCustomerListName();
		$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer($customer);
		$this->colorList = RejectColorAttrPeer::GetColorByCustomer($customer);
		$this->sizeList = RejectSizeAttrPeer::GetSize($customer);
		$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer($customer);
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer($customer);
	}
	
	public function executeAjaxUpdateEmail()
	{
		$customer = $this->_G('customer');
		$email = $this->_G('cemail_address');
		$deptID = $this->_G('dept');
		$shiftID = $this->_G('shift');
		$name = $this->_G('cname');
		$website = $this->_G('cwebsite');
		$deptName  = RejectDepartmentAttrPeer::GetDepartmentById($deptID);
		$shiftName = RejectShiftAttrPeer::GetShiftById($shiftID);
		if ($this->_G('shift') == 'ALL') $shiftName = 'ALL';
		$emailContact = EmailContactPeer::GetDataByCompanyDepartmentShift($email);
		if (!$emailContact):
			$emailContact = new EmailContact();
		endif;
		self::SaveEmail($emailContact, $customer, $deptName, $shiftName, $name, $website, $email);
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomerNoBlank($customer);
		$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomerNoBlank($customer);
	}
	
	public function executeEmailRejectPhoto()
	{
		$c = new Criteria();
		$c->addDescendingOrderByColumn(PhotoDetailPeer::DATE_CREATED);
		$this->pager = PhotoDetailPeer::doSelect($c);
		$message = '';
 		if ($this->getRequest()->getMethod() == sfRequest::POST )
		{
			$fileList = array();
			foreach($_POST as $k => $val):
				$photoDetailID = 0;
				$batchID = '';
				$photoDetail ='';
				if (substr($k, 0, 7) == 'chkbox_'):
					$photoDetailID = str_replace('chkbox_', '', $k);
					$photoDetail = PhotoDetailPeer::retrieveByPK($photoDetailID);
					if ($photoDetail):
						$batchID  = $photoDetail->getBatchId();
						$message .= $photoDetail->getName() . ' : ' . $photoDetail->getDepartment() .'<br>';
						$emailTxt = EmailToDeptPeer::GetEmailAddress($photoDetail->getName(), $photoDetail->getDepartment(), $photoDetail->getShift());
						//$emailTxt = 'ejaymejr@gmail.com';
					endif;					
					if ($batchID):
						$fileList = array_merge($fileList, FileDetailPeer::GetFilenameForEmailByBatchID($batchID) );
					endif;
				self::sendMail($emailTxt, $fileList);
				endif;
			endforeach;
			if ($message):
				$this->_SUC('Email has been sent.');
			endif;
		}
		$this->redirect('photo/upload');
		
	}
	
	public function executeSendEmail()
	{
		foreach($_POST as $file => $whatever):
			$fnameList[] = str_replace('_jpeg', '.jpeg', $file );
		endforeach;
		$emailList = 'ejaymejr@gmail.com';
		self::sendMail($emailList, $fnameList);
  		$this->redirect('photo/upload');
	}
	
	public function sendMail($emailTxt, $files)
	{
		$fnameList = array();
		foreach($files as $file ):
			$fnameList[] = str_replace('_jpeg', '.jpeg', $file );
		endforeach;
		$emailList = array_unique(explode(',', $emailTxt) );
		foreach($emailList as $email):
			$token = HrLib::randomID(10);
			foreach($fnameList as $file):
				$fileDetailData = FileDetailPeer::GetDataByFilename($file);
				if ($fileDetailData):
					$emailHistory = new EmailHistory();
					$emailHistory->setFileDetailId($fileDetailData->getId());
					$emailHistory->setEmailAddress($email);
					$emailHistory->setEmailDate(DateUtils::DUNow());
					$emailHistory->setEmailToken($token);
					$emailHistory->setDateCreated(DateUtils::DUNow());
					$emailHistory->setCreatedBy($this->_U());
					$emailHistory->setDateModified(DateUtils::DUNow());
					$emailHistory->setModifiedBy($this->_U());
					$emailHistory->save();
				endif;
			endforeach;
			RejectLib::EmailPhotos($fnameList, $email, '', $token);
		endforeach;
	}
	
}
