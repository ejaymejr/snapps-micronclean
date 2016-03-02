<?php

/**
 * evaluation actions.
 *
 * @package    snapps
 * @subpackage evaluation
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class evaluationActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        //new myUser
        $this->redirect('evaluation/eenSearch');
    }

    public function executeEenSearch()
    {
        $c = new EnggEvalNoticeCriteria();
        $this->pager = EnggEvalNoticePeer::GetPager($c);
    }

    public function executeEenEdit()
    {
        $id = $this->_G('id');
        $rec = EnggEvalNoticePeer::retrieveByPK($id);
        if ($rec){
            $this->_S('een_no',$rec->getEenNo());
            $this->_S('proposed_action',$rec->getProposedAction());
            $this->_S('initiator',$rec->getInitiator());
            $this->_S('customer',$rec->getCustomer());
            $this->_S('problem_description',$rec->getProblemDescription());
            $this->_S('initiated_by',$rec->getInitiatedBy());
            $this->_S('keyed_in_by',strtoupper($rec->getKeyedInBy()));
            $this->_S('assigned_to',$rec->getAssignedTo());
            $this->_S('eight_d_form',$rec->getEightDForm());
            $this->_S('flow_description',$rec->getFlowDescription());
            $this->_S('data_collection',$rec->getDataCollection());
            $this->_S('qty_for_run',$rec->getQtyForRun());
            
            $this->_S('submitted_by',$rec->getSubmittedBy());
           	$this->_S('approve_comment',$rec->getApproveComment());
           	$this->_S('approved_by',$rec->getApprovedBy());
           	$this->_S('follow_up_by',$rec->getFollowUpBy());
           	$this->_S('follow_up_date',$rec->getFollowUpDate());
           	$this->_S('is_effective',$rec->getIsEffective());
           	$this->_S('evidence',$rec->getEvidence());
           	$this->_S('data_completion_date',$rec->getDataCompletionDate());
           	
           	$this->_S('initiated_date',$rec->getInitiatedDate());
           	
           	$this->_S('closed_out_date',$rec->getClosedOutDate());
           	$this->_S('assigned_date',$rec->getAssignedDate());
           	$this->_S('keyed_in_date',$rec->getKeyedInDate());
           	$this->_S('action_plan_date',$rec->getActionPlanDate());
           	$this->_S('run_plan_date',$rec->getRunPlanDate());
           	$this->_S('run_completion_date',$rec->getRunCompletionDate());
           	$this->_S('additional_sheet',$rec->getAdditionalSheet());
           	$this->_S('disposition_of_material',$rec->getDispositionOfMaterial());
           	
           	$this->setTemplate('eenAdd');
        }
    }

    public function executeEenDelete()
    {
        $id = $this->_G('id');
        $this->record = EnggEvalNoticePeer::retrieveByPK($id);
        $rec = $this->record->getEenNo().'('.$this->record->getInitiatedDate().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('evaluation/eenSearch');
    }
}
