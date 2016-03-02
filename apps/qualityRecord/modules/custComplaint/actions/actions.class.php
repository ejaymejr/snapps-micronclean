<?php

/**
 * custComplaint actions.
 *
 * @package    snapps
 * @subpackage custComplaint
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class custComplaintActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('custComplaint/complaintSearch');
    }


    public function executeComplaintSearch()
    {
        $c = new ComplainCriteria();
        $this->pager = CustomerManagementComplaintFormPeer::GetPager($c);
    }

    public function executeComplaintEdit()
    {
        $id = $this->_G('id');
        $rec = CustomerManagementComplaintFormPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('complain_date_time', $rec->getComplainDateTime());
            $this->_S('company_name', $rec->getCompanyName());
            $this->_S('customer_number', $rec->getCustomerNumber());
            $this->_S('complainee_name', $rec->getComplaineeName());
            $this->_S('complainee_designation', $rec->getComplaineeDesignation());
            $this->_S('complainee_department', $rec->getComplaineeDepartment());
            $this->_S('complainee_contact_no', $rec->getComplaineeContactNo());
            $this->_S('complainee_email', $rec->getComplaineeEmail());
            $this->_S('complain_description', $rec->getComplainDescription());
            $this->_S('received_by_name', $rec->getReceivedByName());
            $this->_S('received_by_designation', $rec->getReceivedByDesignation());
            $this->_S('received_by_department', $rec->getReceivedByDepartment());
            $this->_S('received_by_department', $rec->getreceivedByDepartment());
            $this->_S('channel', $rec->getChannel());
            $this->_S('undertaken_by', $rec->getUndertakenBy());
            $this->_S('undertaken_by_date', $rec->getUndertakenByDate());
            $this->_S('undertaken_by_designation', $rec->getundertakenByDesignation());
            $this->_S('undertaken_by_department', $rec->getundertakenByDepartment());
            $this->_S('undertaken_by_initials', $rec->getundertakenByInitials());
            $this->_S('verified_by', $rec->getverifiedBy());
            $this->_S('verified_by_date', $rec->getverifiedByDate());
            $this->_S('verified_by_designation', $rec->getverifiedByDesignation());
            $this->_S('verified_by_department', $rec->getverifiedByDepartment());
            $this->_S('verified_by_initials', $rec->getverifiedByInitials());
            $this->_S('correction_action_taken', $rec->getCorrectionActionTaken());
            
            $this->setTemplate('complaintAdd');
        }
    }

    public function executeComplaintDelete()
    {
        $id = $this->_G('id');
        $this->record = CustomerManagementComplaintFormPeer::retrieveByPK($id);
        $rec = $this->record->getCompanyName().'('.$this->record->getComplainDateTime().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('custComplaint/complaintSearch');
    }
    
    public function executeActionReviewSearch()
    {
        $c = new CustomerManagementActionReviewCriteria();
        $this->pager = CustomerManagementActionReviewPeer::GetPager($c);
    }
    
    public function executeActionReviewEdit()
    {
        $id = $this->_G('id');
        $rec = CustomerManagementActionReviewPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date_time', $rec->getDateTime());
            $this->_S('case_action', $rec->getCaseAction());
            $this->_S('reviewed_by', $rec->getReviewedBy());
            $this->_S('review_date', $rec->getReviewDate());
            $this->setTemplate('actionReviewAdd');
        }
    }    
    
    public function executeActionReviewDelete()
    {
        $id = $this->_G('id');
        $this->record = CustomerManagementActionReviewPeer::retrieveByPK($id);
        $rec = $this->record->getDateTime().'('.$this->record->getReviewedBy().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('custComplaint/actionReviewSearch');
    }
    
    public function executeSurveyAdd()
    {
    }    
    
    public function executeComplaintChart()
    {
        //$data = CustomerManagementComplaintFormPeer::GetComplaint();
        $xdays = 395;
        $bdt = DateUtils::AddDate(date('Y-m-d'), -$xdays);
        $rs = 0;
        $this->complaint = array();
        for($x=0; $x <= 13; $x++){
            $cdt = dateUtils::AddDate($bdt, $x*30);
            $sdt = DateUtils::DUFormat('Y-m-01', $cdt);
            $edt = DateUtils::GetLastDate($cdt);
            $cnt = CustomerManagementComplaintFormPeer::GetComplaintByDate($sdt, $edt);
            $this->complaint[DateUtils::DUFormat('M-Y', $sdt)] = $cnt;
//            echo $sdt .'-'. $edt .'-' . $cnt . '<br>';
        }
    }
    
        
}
