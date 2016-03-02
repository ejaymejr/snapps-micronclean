<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class auditAddAction extends SnappsAction
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
        $this->record = InternalAuditReportSummaryPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new InternalAuditReportSummary();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('prepared_by',   $this->_U());
        }

         
    }
     

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setAuditor($this->_G('auditor'));
            $this->record->setAreaAudited($this->_G('area_audited'));
            $this->record->setNc($this->_G('nc'));
            $this->record->setObservation($this->_G('observation'));
            $this->record->setFindingsSummary($this->_G('findings_summary'));
            $this->record->setOtherObservation($this->_G('other_observation'));
            $this->record->setRecommendation($this->_G('recommendation'));
            $this->record->setCorrectivePreventiveActionReportNo($this->_G('corrective_preventive_action_report_no'));
            $this->record->setPreparedBy($this->_G('prepared_by'));
            $this->record->setPreparedDate($this->_G('prepared_date')? $this->_G('prepared_date') : null);
            $this->record->setAuditedDate($this->_G('audited_date')? $this->_G('audited_date'): null);
            $this->record->setModifiedBy($this->_U());
            $this->record->setDateModified(DateUtils::DUNow());
            $this->record->save();
             
            InternalAuditIsoClausePeer::DeleteBySummaryId($this->record->getId());
            $this->UpdateClause($this->record->getId(), $this->_G('cl_4'));
            $this->UpdateClause($this->record->getId(), $this->_G('cl_5'));
            $this->UpdateClause($this->record->getId(), $this->_G('cl_6'));
            $this->UpdateClause($this->record->getId(), $this->_G('pr'));
            $this->UpdateClause($this->record->getId(), $this->_G('ma'));

            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('internalAudit/auditSearch?hIDs[]=' . $this->record->getId());
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

    protected function UpdateClause($id, $info){
        if ($info){
            $clause = InternalAuditIsoClausePeer::GetDataBySummaryIdAndClause($id, $info);
            if (!$clause){
                $clause = new InternalAuditIsoClause();
                $clause->setDateCreated(DateUtils::DUNow());
                $clause->setCreatedBy($this->_U());
                 
            }
            $clause->setSummaryId($id);
            $clause->setIsoClause($info);
            $clause->setModifiedBy($this->_U());
            $clause->setDateModified(DateUtils::DUNow());
            $clause->save();

        }
    }

}
