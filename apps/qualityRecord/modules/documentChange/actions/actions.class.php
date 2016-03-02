<?php

/**
 * documentChange actions.
 *
 * @package    qualityRecords
 * @subpackage documentChange
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class documentChangeActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    //$this->forward('default', 'module');
  }
  
  public function executeSupplierDocumentSearch()
  {
    $c = new Criteria();
	$c->addDescendingOrderByColumn(SupplierDocumentChangeReviewPeer::DATE_TIME);
	$this->pager = SupplierDocumentChangeReviewPeer::doSelect($c);
  }
  
  public function executeSupplierDocumentEdit()
  {
  	$id = $this->_G('id');
    $supplierData = SupplierDocumentChangeReviewPeer::retrieveByPK($id);
    $this->customerList = RejectCustomerAttrPeer::GetCustomerList();
	$this->capaList = SeagateCaPaReportPeer::GetCapaList();
    if ($supplierData):
    	$this->_S('date_time', $supplierData->getDateTime());
    	$this->_S('company', $supplierData->getCompany());
    	$this->_S('document_no', $supplierData->getDocumentNo() );
    	$this->_S('document_title', $supplierData->getDocumentTitle());
    	$this->_S('original_rev_no', $supplierData->getOriginalRevNo());
    	$this->_S('mod_rev_no', $supplierData->getModRevNo());
    	$this->_S('capa_report_no', $supplierData->getCapaReportNo());
    	$this->_S('changes_requested', $supplierData->getChangesRequested());
    endif;
    $this->setTemplate('supplierDocumentAdd');
  }
  
  public function executeSupplierDocumentDelete()
  {
  	$id = $this->_G('id');
    $supplierData = SupplierDocumentChangeReviewPeer::retrieveByPK($id);
    $this->customerList = RejectCustomerAttrPeer::GetCustomerList();
    if ($supplierData):
    	$supplierData->delete();
    endif;
    $this->redirect('documentChange/supplierDocumentSearch');
  }
    
  public function executeSupplierDocumentFileDelete()
  {
  	$id = $this->_G('id');
    $file = SupplierDocumentFilesPeer::retrieveByPK($id);
    if ($file):
    	$docId = $file->getSupplierDocumentChangeReviewId();
    	$desc = $file->getFilename();
    	$file->delete();
    endif;
    $this->_SUF($desc. ' File Has been deleted.');
    $this->redirect('documentChange/supplierDocumentEdit?id=' . $docId);
  }
  public function executeSupplierDocumentUpload()
  {
  	$id = $this->_G('id');
  	$fname = $this->_G('newfilename');
  	$path = '../uploadIsoFile/';
   	if ($this->getRequest()->getMethod() == sfRequest::POST):
   		if (isset($_FILES)):
			foreach($_FILES as $k=>$file):
				$fname = $fname ? $fname : $file['name'];
				$nfile = new SupplierDocumentFiles();
				$nfile->setDateTime(DateUtils::DUNow());
				$nfile->setFilename($fname);
				$nfile->setSupplierDocumentChangeReviewId($id);
				$nfile->setpath($path);
				$nfile->setMimeType($file['type']);
				$nfile->setSize($file['size']);
				$nfile->setDateCreated(DateUtils::DUNow());
				$nfile->setDateModified(DateUtils::DUNow());
				$nfile->setCreatedBy($this->_U());
				$nfile->setModifiedBy($this->_U());
				$nfile->save();
				move_uploaded_file($file['tmp_name'], $path.$fname);
			endforeach;
		endif;
   	endif;
   	$this->redirect('documentChange/supplierDocumentEdit?id='. $id);
  }
  
  public function executeDownload()
  {
	$filename = '../uploadIsoFile/'.$this->_G('path');
	// required for IE, otherwise Content-disposition is ignored
	if(ini_get('zlib.output_compression'))
	  ini_set('zlib.output_compression', 'Off');
	
	// addition by Jorg Weske
	$file_extension = strtolower(substr(strrchr($filename,"."),1));
	
	if( $filename == "" ) 
	{
	  echo "<html><title>Download Script</title><body>ERROR: download file NOT SPECIFIED. USE force-download.php?file=filepath</body></html>";
	  exit;
	} elseif ( ! file_exists( $filename ) ) 
	{
	  echo "<html><title>Download Script</title><body>ERROR: File not found. USE force-download.php?file=filepath</body></html>";
	  exit;
	};
	switch( $file_extension )
	{
	  case "pdf": $ctype="application/pdf"; break;
	  case "exe": $ctype="application/octet-stream"; break;
	  case "zip": $ctype="application/zip"; break;
	  case "doc": $ctype="application/msword"; break;
	  case "xls": $ctype="application/vnd.ms-excel"; break;
	  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
	  case "gif": $ctype="image/gif"; break;
	  case "png": $ctype="image/png"; break;
	  case "jpeg":
	  case "jpg": $ctype="image/jpg"; break;
	  default: $ctype="application/force-download";
	}
	header("Pragma: public"); // required
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: private",false); // required for certain browsers 
	header("Content-Type: $ctype");
	// change, added quotes to allow spaces in filenames, by Rajkumar Singh
	header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($filename));
	readfile("$filename");
	exit();
  }
  
  public function executeSupplierDocumentApproveSearch()
  {
    $c = new Criteria();
    $c1 = $c->getNewCriterion(SupplierDocumentChangeReviewPeer::APPROVED, null, Criteria::ISNULL);
	$c2 = $c->getNewCriterion(SupplierDocumentChangeReviewPeer::APPROVED, '');
	$c1->addOr($c2);
	$c->addAnd($c1);
	$c->addDescendingOrderByColumn(SupplierDocumentChangeReviewPeer::DATE_TIME);
	$this->pager = SupplierDocumentChangeReviewPeer::doSelect($c);
  }
  
  public function executeSupplierDocumentApprove()
  {
  	$id = $this->_G('id');
    $supplierData = SupplierDocumentChangeReviewPeer::retrieveByPK($id);
    $this->customerList = RejectCustomerAttrPeer::GetCustomerList();
    $this->capaList = SeagateCaPaReportPeer::GetCapaList();
    if ($this->getRequest()->getMethod() == sfRequest::POST){
    	if ($supplierData):
    		$supplierData->setApproved($this->_U());
    		$supplierData->setApprovedDate(DateUtils::DUNow());
    		$supplierData->save();
    	endif;
    }else{
	    if ($supplierData):
	    	$this->_S('date_time', $supplierData->getDateTime());
	    	$this->_S('company', $supplierData->getCompany());
	    	$this->_S('document_no', $supplierData->getDocumentNo() );
	    	$this->_S('document_title', $supplierData->getDocumentTitle());
	    	$this->_S('original_rev_no', $supplierData->getOriginalRevNo());
	    	$this->_S('mod_rev_no', $supplierData->getModRevNo());
	    	$this->_S('changes_requested', $supplierData->getChangesRequested());
	    endif;
    }
  } 
}
