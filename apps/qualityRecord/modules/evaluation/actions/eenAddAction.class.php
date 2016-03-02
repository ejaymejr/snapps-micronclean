<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class eenAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Engineering Evaulation Notice');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = EnggEvalNoticePeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new EnggEvalNotice();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('keyed_in_by',   strtoupper($this->_U()));
            $this->_S('keyed_in_date', Date('Y-m-d'));
            $this->_S('initiated_by',   'JAYAKUMAR');
            $this->_S('assigned_to',   'JAYAKUMAR');
        }
        
   
    }
   

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$this->record->setEenNo($this->_G('een_no'));
        	$this->record->setProposedAction($this->_G('proposed_action'));
        	$this->record->setInitiator($this->_G('initiator'));
        	$this->record->setCustomer($this->_G('customer'));
        	$this->record->setProblemDescription($this->_G('problem_description'));
        	$this->record->setInitiatedBy($this->_G('initiated_by'));
        	$this->record->setKeyedInBy($this->_G('keyed_in_by'));
        	$this->record->setAssignedTo($this->_G('assigned_to'));
        	$this->record->setEightDForm($this->_G('eight_d_form'));
        	$this->record->setFlowDescription($this->_G('flow_description'));
        	$this->record->setDataCollection($this->_G('data_collection'));
        	$this->record->setQtyForRun($this->_G('qty_for_run'));
        	$this->record->setSubmittedBy($this->_G('submitted_by'));
           	$this->record->setApproveComment($this->_G('approve_comment'));
        	$this->record->setApprovedBy($this->_G('approved_by'));
           	$this->record->setFollowUpBy($this->_G('follow_up_by'));
        	$this->record->setIsEffective($this->_G('is_effective'));
        	$this->record->setEvidence($this->_G('evidence'));
        	$this->record->setAdditionalSheet($this->_G('additional_sheet'));
        	$this->record->setDispositionOfMaterial($this->_G('disposition_of_material'));
        	

        	$this->record->setDataCompletionDate($this->_G('data_completion_date')? $this->_G('data_completion_date') : null);        	
        	$this->record->setInitiatedDate($this->_G('initiated_date')? $this->_G('initiated_date'): null);
        	$this->record->setClosedOutDate($this->_G('closed_out_date')? $this->_G('closed_out_date'): null);
        	$this->record->setAssignedDate($this->_G('assigned_date')? $this->_G('assigned_date') : null);
        	$this->record->setKeyedInDate($this->_G('keyed_in_date')? $this->_G('keyed_in_date') : null);
        	$this->record->setActionPlanDate($this->_G('action_plan_date')? $this->_G('action_plan_date') : null);        	
        	$this->record->setRunPlanDate($this->_G('run_plan_date')? $this->_G('run_plan_date') : null);        	
        	$this->record->setRunCompletionDate($this->_G('run_completion_date')? $this->_G('run_completion_date') : null);        	
        	$this->record->setFollowUpDate($this->_G('follow_up_date')? $this->_G('follow_up_date') : null);        	
//        	var_dump($this->_G('follow_up_date'));
//        	exit();
        	
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();

            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('evaluation/eenSearch?hIDs[]=' . $this->record->getId());
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
