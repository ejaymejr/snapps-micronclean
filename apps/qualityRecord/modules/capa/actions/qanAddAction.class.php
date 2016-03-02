<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class qanAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Quality Alert Notice');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = IsoCapaPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new IsoCapa();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('keyed_in_by',   $this->_U());
            $this->_S('keyed_in_date', Date('Y-m-d'));
            $this->_S('initiated_by',   'JAYAKUMAR');
            $this->_S('assigned_to',   'JAYAKUMAR');
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setQanNo($this->_G('qan_no'));
            $this->record->setProposedAction($this->_G('proposed_action'));
            $this->record->setInitiator($this->_G('initiator'));
            $this->record->setCustomer($this->_G('customer'));
            $this->record->setCustComment($this->_G('cust_comment'));
            $this->record->setProblemDescription($this->_G('problem_description'));
            $this->record->setInitiatedBy($this->_G('initiated_by'));
            $this->record->setKeyedInBy($this->_G('keyed_in_by'));
            $this->record->setAssignedTo($this->_G('assigned_to'));
            $this->record->setEightDForm($this->_G('eight_d_form'));
            $this->record->setRecommendedAction($this->_G('recommended_action'));
            $this->record->setDataCollection($this->_G('data_collection'));
            $this->record->setAffectedParts($this->_G('affected_parts'));
            $this->record->setSubmittedBy($this->_G('submitted_by'));
           	$this->record->setApproveComment($this->_G('approve_comment'));
           	$this->record->setApprovedBy($this->_G('approved_by'));
           	$this->record->setFollowUpBy($this->_G('follow_up_by'));
           	$this->record->setIsEffective($this->_G('is_effective'));
           	$this->record->setEffectivityComment($this->_G('effectivity_comment'));
           	$this->record->setAdditionalSheet($this->_G('additional_sheet'));
           	$this->record->setFileName($this->_G('file_name'));
           	 

           	$this->record->setImplementedDate($this->_G('implemented_date')? $this->_G('implemented_date') : null);
           	$this->record->setInitiatedDate($this->_G('initiated_date')? $this->_G('initiated_date'): null);
           	$this->record->setClosedOutDate($this->_G('closed_out_date')? $this->_G('closed_out_date'): null);
           	$this->record->setAssignedDate($this->_G('assigned_date')? $this->_G('assigned_date') : null);
           	$this->record->setKeyedInDate($this->_G('keyed_in_date')? $this->_G('keyed_in_date') : null);
           	$this->record->setActionPlanDate($this->_G('action_plan_date')? $this->_G('action_plan_date') : null);
           	$this->record->setRunPlanDate($this->_G('run_plan_date')? $this->_G('run_plan_date') : null);
           	$this->record->setPlanCompletionDate($this->_G('plan_completion_date')? $this->_G('plan_completion_date') : null);
           	$this->record->setInitialCompletionDate($this->_G('initial_completion_date')? $this->_G('initial_completion_date') : null);
           	$this->record->setFollowUpDate($this->_G('follow_up_date')? $this->_G('follow_up_date') : null);

           	$this->record->setModifiedBy($this->_U());
           	$this->record->setDateModified(DateUtils::DUNow());
           	$this->record->save();

           	//       	    $fileName = $this->getRequest()->getFileName('file_name');
           	//       	    $uploadDestination = SF_ROOT_DIR . "/var/capa/" . $fileName;
           	//       	    var_dump($fileName);
           	//       	    //        	exit();
           	//       	    $this->getRequest()->moveFile('file_name', $uploadDestination);
           	 
           	//   $fileName = $this->getRequest()->getFileName('file');
           	//   $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);
           	//   $this->redirect('media/show?filename='.$fileName);

           	$this->_SUF('Record <b>' . $data . '</b> saved.');
           	$this->redirect('capa/qanSearch?hIDs[]=' . $this->record->getId());
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
