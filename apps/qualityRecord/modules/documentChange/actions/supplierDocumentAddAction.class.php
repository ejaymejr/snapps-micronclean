<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class supplierDocumentAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Quality Alert Notice');
            $this->preCount++;
        }
		$this->customerList = RejectCustomerAttrPeer::GetCustomerList();
		$this->capaList = SeagateCaPaReportPeer::GetCapaList();
        $id= $this->_G('id');
        $this->record = SupplierDocumentChangeReviewPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new SupplierDocumentChangeReview();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setCompany($this->_G('company'));
            $this->record->setDocumentNo($this->_G('document_no'));
            $this->record->setDocumentTitle($this->_G('document_title'));
            $this->record->setOriginalRevNo($this->_G('original_rev_no'));
            $this->record->setModRevNo($this->_G('mod_rev_no'));
            $this->record->setChangesRequested($this->_G('changes_requested'));
            $this->record->setCapaReportNo($this->_G('capa_report_no'));
            $this->record->setReviewBy($this->_U());
           	$this->record->setModifiedBy($this->_U());
           	$this->record->setDateModified(DateUtils::DUNow());
           	$this->record->save();
         	$this->_SUF('Record <b>' . $data . '</b> saved.');
           	$this->redirect('documentChange/supplierDocumentEdit?id=' . $this->record->getId());
        }
    }

    public function validateFieldListAdd()
    {
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


}
