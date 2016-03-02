<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class capaAddAction extends SnappsAction
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
        $this->record = SeagateCaPaReportPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new SeagateCaPaReport();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('reported_by',   strtoupper($this->_U()));
            $this->_S('keyed_in_date', Date('Y-m-d'));
            $this->_S('initiated_by',   'JAYAKUMAR');
            $this->_S('assigned_to',   'JAYAKUMAR');
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {

            $this->record->setReportNo($this->_G('report_no'));
            $this->record->setTitle($this->_G('title'));
            $this->record->setIssueDate($this->_G('issue_date')? $this->_G('issue_date') : null);
            $this->record->setResponseDate($this->_G('response_date')? $this->_G('response_date') : null);
            $this->record->setFindings($this->_G('findings'));
            $this->record->setRootCauseAnalysis($this->_G('root_cause_analysis'));
            $this->record->setContainmentPlan($this->_G('containment_plan'));
            $this->record->setPreventivePlan($this->_G('preventive_plan'));
            $this->record->setVerificationOfCaPa($this->_G('verification_of_ca_pa'));
            $this->record->setReportedBy($this->_G('reported_by'));
            $this->record->setCarName($this->_G('car_name'));
            $this->record->setCarFollowupRequired($this->_G('car_followup_required'));
            $this->record->setCarFollowupDate($this->_G('car_followup_date'));
            $this->record->setCarCaStatus($this->_G('car_ca_status'));
            $this->record->setCarTitle($this->_G('car_title'));
            $this->record->setCarPlanEffective($this->_G('car_plan_effective'));
           	$this->record->setCarVerifiedBy($this->_G('car_verified_by'));
           	$this->record->setCarClosureDate($this->_G('car_closure_date')? $this->_G('car_closure_date'): null);
            $this->record->setSymptom($this->_G('symptom'));
            $this->record->setEraDescription($this->_G('era_description'));
            $this->record->setEraEffectivity($this->_G('era_effectivity'));
           	$this->record->setEraImplemented($this->_G('era_implemented'));
           	$this->record->setEraCompleted($this->_G('era_completed'));
           	$this->record->setTeam($this->_G('team'));
            $this->record->setContEffectivity($this->_G('cont_effectivity'));
            $this->record->setContImplemented($this->_G('cont_implemented'));
           	$this->record->setContCompleted($this->_G('cont_completed'));
           	$this->record->setChosenPermCa($this->_G('chosen_perm_ca'));
            $this->record->setChosenPermEffectivity($this->_G('chosen_perm_effectivity'));
            $this->record->setChosenPermImplemented($this->_G('chosen_perm_implemented'));
            $this->record->setChosenPermCompleted($this->_G('chosen_perm_completed'));
           	$this->record->setImplementedPermCa($this->_G('implemented_perm_ca'));
           	$this->record->setImplementedPermEffectivity($this->_G('implemented_perm_effectivity'));
           	$this->record->setImplementedPermImplemented($this->_G('implemented_perm_implemented'));
           	$this->record->setImplementedPermCompleted($this->_G('implemented_perm_completed'));
           	 

//           	$this->record->setImplementedDate($this->_G('implemented_date')? $this->_G('implemented_date') : null);
//           	$this->record->setInitiatedDate($this->_G('initiated_date')? $this->_G('initiated_date'): null);
//           	$this->record->setClosedOutDate($this->_G('closed_out_date')? $this->_G('closed_out_date'): null);
//           	$this->record->setAssignedDate($this->_G('assigned_date')? $this->_G('assigned_date') : null);
//           	$this->record->setKeyedInDate($this->_G('keyed_in_date')? $this->_G('keyed_in_date') : null);
//           	$this->record->setActionPlanDate($this->_G('action_plan_date')? $this->_G('action_plan_date') : null);
//           	$this->record->setRunPlanDate($this->_G('run_plan_date')? $this->_G('run_plan_date') : null);
//           	$this->record->setPlanCompletionDate($this->_G('plan_completion_date')? $this->_G('plan_completion_date') : null);
//           	$this->record->setInitialCompletionDate($this->_G('initial_completion_date')? $this->_G('initial_completion_date') : null);
//           	$this->record->setFollowUpDate($this->_G('follow_up_date')? $this->_G('follow_up_date') : null);

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
           	$this->redirect('capa/capaSearch?hIDs[]=' . $this->record->getId());
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
