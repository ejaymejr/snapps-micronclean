<?php

/**
 * internalAudit actions.
 *
 * @package    snapps
 * @subpackage internalAudit
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class internalAuditActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        $this->redirect('internalAudit/auditSearch');
    }

    public function executeAuditSearch()
    {
        $c = new InternalAuditCriteria();
        $this->pager = InternalAuditReportSummaryPeer::GetPager($c);
    }
    
    public function executeAuditEdit()
    {
        $id = $this->_G('id');
        $rec = InternalAuditReportSummaryPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('auditor',$rec->getAuditor());
            $this->_S('area_audited',$rec->getAreaAudited());
            $this->_S('nc',$rec->getNc());
            $this->_S('observation',$rec->getObservation());
            $this->_S('findings_summary',$rec->getFindingsSummary());
            $this->_S('other_observation',$rec->getOtherObservation());
            $this->_S('recommendation',$rec->getRecommendation());
            $this->_S('corrective_preventive_action_report_no',$rec->getCorrectivePreventiveActionReportNo());
            $this->_S('prepared_by',$rec->getPreparedBy());
            $this->_S('prepared_date',$rec->getPreparedDate());
            $this->_S('audited_date',$rec->getAuditedDate());
            $clause = InternalAuditIsoClausePeer::getDataBySummaryId($id);
            if ($clause)
            {
                foreach($clause as $cl)
                {
                    switch($cl->getIsoClause()){
                        case 'Clause 4 Qns Requirements':
                            $this->_S('cla_1', true);
                            break;
                        case 'Clause 5 Management Responsibility':
                            $this->_S('cla_2', true);
                            break;
                        case 'Clause 6 Resource Management':
                            $this->_S('cla_3', true);
                            break;
                        case 'Product Realization':
                            $this->_S('cla_4', true);
                            break;
                        case 'Measurement, Analysis and Improvement':
                            $this->_S('cla_5', true);
                            break;
                    }
                }
            }
           	$this->setTemplate('auditAdd');
        }
    }

    public function executeAuditDelete()
    {
        $id = $this->_G('id');
        $this->record = InternalAuditReportSummaryPeer::retrieveByPK($id);
        $rec = $this->record->getAuditor().'('.$this->record->getAreaAudited().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('internalAudit/auditSearch');
    }

    public function executeAuditSchedule()
    {
        //$path  = SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'pdf' .DIRECTORY_SEPARATOR;
        $path = sfConfig::get('app_path_iso9000');
//        var_dump($path);
//        exit();
        //$fname = $path. 'Micronclean Audit Schedule.pdf';
//        var_dump($path);
//        exit();
        $fname = 'Micronclean Audit Schedule.pdf';
        $this->setLayout(false);
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->addCacheControlHttpHeader("Cache-control","private");
        $this->getResponse()->setHttpHeader("Content-Description","File Transfer");
        $this->getResponse()->setContentType('application/octet-stream',TRUE);
        $this->getResponse()->setHttpHeader("Content-Length",(string) 1000000, TRUE);
        $this->getResponse()->setHttpHeader('content-transfer-encoding', 'binary', TRUE);
        $this->getResponse()->setHttpHeader("Content-Disposition","attachment; filename=\"$fname\"", TRUE);
        $this->getResponse()->sendHttpHeaders();
        // readfile($filePath);
        set_time_limit(0);
        // readfile($filePath);
        $fd = fopen($path.$fname,'rb');
        while(!feof($fd)) {
            print fread($fd, 40*1024);
        }
        fclose($fd);
        
        exit();
        return sfView::NONE;        
    }
    
    
    public function executeAuditCheckList()
    {
        //$path  = SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'pdf' .DIRECTORY_SEPARATOR;
        //$fname = $path. 'Micronclean Audit Schedule.pdf';
        $path = sfConfig::get('app_path_iso9000');
        $fname = 'Process Audit Checklist.pdf';
        $this->setLayout(false);
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->addCacheControlHttpHeader("Cache-control","private");
        $this->getResponse()->setHttpHeader("Content-Description","File Transfer");
        $this->getResponse()->setContentType('application/octet-stream',TRUE);
        $this->getResponse()->setHttpHeader("Content-Length",(string) 1000000, TRUE);
        $this->getResponse()->setHttpHeader('content-transfer-encoding', 'binary', TRUE);
        $this->getResponse()->setHttpHeader("Content-Disposition","attachment; filename=\"$fname\"", TRUE);
        $this->getResponse()->sendHttpHeaders();
        // readfile($filePath);
        set_time_limit(0);
        // readfile($filePath);
        $fd = fopen($path.$fname,'rb');
        while(!feof($fd)) {
            print fread($fd, 40*1024);
        }
        fclose($fd);
        
        exit();
        return sfView::NONE;        
    }    
}
