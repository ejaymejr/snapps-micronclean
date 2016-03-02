<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class complaintAddAction extends SnappsAction
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
        $this->record = CustomerManagementComplaintFormPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new CustomerManagementComplaintForm();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
//        $this->_S('keyed_in_by',   $this->_U());
//        $this->_S('keyed_in_date', Date('Y-m-d'));
//        $this->_S('initiated_by',   'JAYAKUMAR');
//        $this->_S('assigned_to',   'JAYAKUMAR');
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setComplainDateTime($this->_G('complain_date_time')? $this->_G('complain_date_time') : null);
            $this->record->setCompanyName($this->_G('company_name'));
            $this->record->setCustomerNumber($this->_G('customer_number'));
            $this->record->setComplaineeName($this->_G('complainee_name'));
            $this->record->setComplaineeDesignation($this->_G('complainee_designation'));
            $this->record->setComplaineeDepartment($this->_G('complainee_department'));
            $this->record->setComplaineeContactNo($this->_G('complainee_contact_no'));
            $this->record->setComplaineeEmail($this->_G('complainee_email'));
            $this->record->setComplainDescription($this->_G('complain_description'));
            $this->record->setReceivedByName($this->_G('received_by_name'));
            $this->record->setReceivedByDesignation($this->_G('received_by_designation'));
            $this->record->setReceivedByDepartment($this->_G('received_by_department'));
            $this->record->setChannel($this->_G('channel'));
            $this->record->setUndertakenBy($this->_G('undertaken_by'));
            $this->record->setUndertakenByDate($this->_G('undertaken_by_date')? $this->_G('undertaken_by_date') : null);
            $this->record->setUndertakenByDesignation($this->_G('undertaken_by_designation'));
            $this->record->setUndertakenByDepartment($this->_G('undertaken_by_department'));
            $this->record->setUndertakenByInitials($this->_G('undertaken_by_initials'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            $this->record->setVerifiedByDate($this->_G('verified_by_date')? $this->_G('verified_by_date') : null);
            $this->record->setVerifiedByDesignation($this->_G('verified_by_designation'));
            $this->record->setVerifiedByDepartment($this->_G('verified_by_department'));
            $this->record->setVerifiedByInitials($this->_G('verified_by_initials'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->setCorrectionActionTaken($this->_G('correction_action_taken'));
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('custComplaint/complaintSearch?hIDs[]=' . $this->record->getId());
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
