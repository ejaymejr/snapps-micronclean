<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class supplierCapaAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Quality Alert Notice');
        	sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NON CONFORMING MATERIAL REPORT / PREVENTIVE ACTION</h2></span>');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = SupplierCapaPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new SupplierCapa();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('reported_by',   strtoupper($this->_U()));
            $this->_S('keyed_in_date', Date('Y-m-d'));
            $this->_S('initiated_by',   'VELU');
            $this->_S('assigned_to',   'TERENCE');
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	if ($this->_G('save')):
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
	           	$this->record->setModifiedBy($this->_U());
	           	$this->record->setDateModified(DateUtils::DUNow());
	           	$this->record->save();
	           	$this->_SUF('Record <b>' . $data . '</b> saved.');
	           	$this->redirect('capa/supplierCapaSearch?hIDs[]=' . $this->record->getId());
	        endif;
	        if ($this->_G('emailButton')):
	        	$url = explode('?', $_SERVER['HTTP_REFERER']);
	        	$tokenID = HrLib::randomID(10);
	        	HrLib::EmailSupplierCapa($this->_G('email_to'), $url[0], $tokenID);
	        	$this->_SUC('Email sent to: '. $this->_G('email_to') );
	        	$this->record = new SupplierCapa();
	        	$this->record->setToken($tokenID);
	        	$this->record->setTokenExpiry(DateUtils::AddDate(date('Y-m-d'), 30));
	        	$this->record->save();
	        endif;
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
