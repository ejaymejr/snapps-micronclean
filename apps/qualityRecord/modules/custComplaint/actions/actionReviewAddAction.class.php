<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class actionReviewAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Customer Complaint Form');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = CustomerManagementActionReviewPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new CustomerManagementActionReview();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time')? $this->_G('date_time') : null);
            $this->record->setCaseAction($this->_G('case_action'));
            $this->record->setReviewedBy($this->_G('reviewed_by'));
            $this->record->setReviewDate($this->_G('review_date'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('case_action');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('custComplaint/actionReviewSearch?hIDs[]=' . $this->record->getId());
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
