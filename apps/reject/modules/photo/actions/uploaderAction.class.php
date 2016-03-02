<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class uploaderAction extends SnappsAction
{
	var $preCount = 0;

	public function preExecute()
	{
		if (!$this->preCount)
		{
			sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; ');
			$this->preCount++;
		}
//		$id= $this->_G('id');
//		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
		if ($this->getRequest()->getMethod() != sfRequest::POST )
		{
			//$this->_S('batch_id', $photoDetail->GetBatchId() );
			$this->images = array();
			//$this->customerList = CustomerAttrPeer::GetCustomerListName();
			$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
			$this->garmentList = RejectTypeAttrPeer::GetTypeByCustomer();
			$this->colorList = RejectColorAttrPeer::GetColorByCustomer();
			$this->sizeList = RejectSizeAttrPeer::GetSize();
			$this->reasonList = RejectRejectAttrPeer::GetReasonByCustomer();
			$this->deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer();
			$this->shiftList = RejectShiftAttrPeer::GetShiftByCustomer();
		}
	}

	public function execute()
	{	
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
		    $id= $this->_G('id');
		    $emailDate = DateUtils::DUNow();
			$photoDetail = PhotoDetailPeer::retrieveByPK($id);			
			//if ($this->_G('upload')):
				$totalUploaded = 0;
				$mess = '';
				$messerr='';
				$cntr = 0;

				if ( ! $this->_G('customer')):
					$this->_ERF('Please Provide the garment Information First!');
					$this->redirect('photo/uploader' );
				endif;
				
				$dir = RejectLib::LocateTheFile($this->_G('customer'));
				$this->images = array();
				$mkdir = RejectLib::Rmkdir($dir);
				$totalUploaded = 0;
				if (!$dir) :
		            $this->_ERR('Unable to find upload directory');
		            return;
			    endif;

			    if (!$photoDetail):
			    	$photoDetail = new PhotoDetail();
			    	if ($this->_G('garment_code')) :
			    		$batchID = $this->_G('garment_code') .'|'. Date('Ymd');
			    	else:
			    		$batchID = Date('Ymdhis');
			    	endif;
			    else:
			    	$batchID = $photoDetail->getBatchId();
			    endif;
			    $batchID = $batchID ? $batchID : Date('Ymd');
				foreach ($_FILES as $fileFieldKey => $f) :
					$cntr++;
				    if ($f['name'] <> '') :
// 				    	var_dump($origFileName);
// 				    	echo 'why?';
// 				    	exit;
					    if (file_exists($dir . $f["name"])):
				      		$messerr = $messerr . $f["name"] . " already exists.  File Ignored " . '<br>';
						else:
							$origFileName = SQLUtils::FormatValue(trim(stripslashes($f['name']))); //'file_' . $cntr;
				      		$fileDet = new FileDetail();
				      		$fileDet->setBatchId($batchID);
				      		$fileDet->setGarmentCode($this->_G('garment_code','NOGARMENTCODE'));
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
				      		$fileDet->setPath($dir);
				      		$fileDet->save();
				      		move_uploaded_file($f["tmp_name"], $dir . $newFileName);
				      		$mess = $mess .  "Stored in: " . "uploadedImages/" . $newFileName . '<br>';
				      		$this->images[] = $newFileName;
				      		$totalUploaded++;
				      	endif;			 
				    endif;
				endforeach;
// 				echo $this->_G('department');
// 				exit();
				//if ($totalUploaded > 0):
					$custID = '';
					$custName = '';
					$photoDetail->setTransDate(DateUtils::DUNow());
					$photoDetail->setBatchID($batchID);
					$photoDetail->setFilelink('');
					$photoDetail->setFilename('');
					$photoDetail->setName($this->_G('customer'));
					
					$photoDetail->setColor($this->_G('color'));
					$photoDetail->setGarment($this->_G('garment'));
					$photoDetail->setSize($this->_G('size'));
					$photoDetail->setDepartment($this->_G('department'));
					$photoDetail->setShift($this->_G('shift'));
					$photoDetail->setGarmentAction($this->_G('rejectAction'));
					$photoDetail->setNoOfTimesWash($this->_G('no_of_times_wash'));
					
					$photoDetail->setGarmentCode($this->_G('garment_code'));
					$photoDetail->setReason($this->_G('reason'));
					$photoDetail->setDateModified(DateUtils::DUNow());
					$photoDetail->setDateCreated(DateUtils::DUNow());
					$photoDetail->save();
				//endif;
				if ($messerr) $this->_ERF( $messerr );
				if ($mess) $this->_SUF( $mess );		
			//endif; upload
			if ($this->_G('delete')):
				$fnameList = array();
				foreach($_POST as $var => $val):
					if (substr($var, 0, 9) == 'CheckBox_'):
						RejectLib::DeleteFile($val);
					endif;
				endforeach;
			endif;
			if ($this->_G('email')):
				$fnameList = array();
				$token = DateUtils::DUFormat('Ymdhis', DateUtils::DUNow());
				foreach($_POST as $var => $val):
					if (substr($var, 0, 9) == 'CheckBox_'):
						$fnameList[] = $val;
						$fileDet = FileDetailPeer::GetDataByFilename($val);
 						$emailDate = DateUtils::DUNow() ;
						if ($fileDet):
							$emailHistory = new EmailHistory();
							$emailHistory->setFileDetailId($fileDet->getId());
							$emailHistory->setEmailAddress($this->_G('send_to'));
							$emailHistory->setEmailDate($emailDate);
							$emailHistory->setEmailToken($token);
							$emailHistory->setDateCreated(DateUtils::DUNow());
							$emailHistory->setCreatedBy($this->_U());
							$emailHistory->setDateModified(DateUtils::DUNow());
							$emailHistory->setModifiedBy($this->_U());
							$emailHistory->save();
						endif;
					endif;
				endforeach;
				if ($fnameList):
					RejectLib::EmailPhotos($fnameList, $this->_G('send_to'), $emailDate, $token);
				endif;
				$this->_SUF('Email Has been successfully Sent.');
			endif;  //email
			
			//if ($this->_G('saveDescription')):
				$fileNumber = '';
				foreach($_POST as $var => $val):
					if (substr($var, 0, 4) == 'dsc_' ):
						$fileNumber = str_replace('dsc_', '', $var);
						$fileNumber = str_replace('_jpeg', '.jpeg', $fileNumber);
						$fileDet = FileDetailPeer::GetDataByFilename($fileNumber);
						if ($fileDet):
							$fileDet->setDescription($this->_G($var));
							$fileDet->save();
						endif;
					endif;

					if (substr($var, 0, 10) == 'donotsend_' ):
						$fileNumber = str_replace('donotsend_', '', $var);
						$fileNumber = str_replace('_jpeg', '.jpeg', $fileNumber);
						$fileDet = FileDetailPeer::GetDataByFilename($fileNumber);
						if ($fileDet):
							$fileDet->setSendEmail($this->_G($var));
							$fileDet->save();
						endif;
					endif;
				endforeach;
			//endif;
			
			
			
			$this->redirect('photo/uploadEdit?id=' . $photoDetail->getId() .'&send_to=' );	
		}
	}

	public function validateUploader()
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

	public function handleErrorUploader()
	{
		return sfView::SUCCESS;
	}

}
