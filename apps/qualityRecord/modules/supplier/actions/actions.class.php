<?php

/**
 * capa actions.
 *
 * @package    snapps
 * @subpackage capa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class capaActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        //new myUser
        //CustomerAttrPeer::getcustomerlistname()
        $this->redirect('capa/capaSearch');
    }

    public function executeQanSearch()
    {
        $c = new IsoCapaCriteria();
        $this->pager = IsoCapaPeer::GetPager($c);
    }

    public function executeQanEdit()
    {
        $id = $this->_G('id');
        $rec = IsoCapaPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('qan_no',$rec->getQanNo());
            $this->_S('proposed_action',$rec->getProposedAction());
            $this->_S('initiator',$rec->getInitiator());
            $this->_S('customer',$rec->getCustomer());
            $this->_S('cust_comment',$rec->getCustComment());
            $this->_S('problem_description',$rec->getProblemDescription());
            $this->_S('initiated_by',$rec->getInitiatedBy());
            $this->_S('keyed_in_by',$rec->getKeyedInBy());
            $this->_S('assigned_to',$rec->getAssignedTo());
            $this->_S('eight_d_form',$rec->getEightDForm());
            $this->_S('recommended_action',$rec->getRecommendedAction());
            $this->_S('data_collection',$rec->getDataCollection());
            $this->_S('affected_parts',$rec->getAffectedParts());
            $this->_S('submitted_by',$rec->getSubmittedBy());
           	$this->_S('approve_comment',$rec->getApproveComment());
           	$this->_S('approved_by',$rec->getApprovedBy());
           	$this->_S('follow_up_by',$rec->getFollowUpBy());
           	$this->_S('follow_up_date',$rec->getFollowUpDate());
           	$this->_S('is_effective',$rec->getIsEffective());
           	$this->_S('effectivity_comment',$rec->getEffectivityComment());
           	$this->_S('implemented_date',$rec->getImplementedDate());
           	$this->_S('initiated_date',$rec->getInitiatedDate());
           	$this->_S('closed_out_date',$rec->getClosedOutDate());
           	$this->_S('assigned_date',$rec->getAssignedDate());
           	$this->_S('keyed_in_date',$rec->getKeyedInDate());
           	$this->_S('action_plan_date',$rec->getActionPlanDate());
           	$this->_S('run_plan_date',$rec->getRunPlanDate());
           	$this->_S('plan_completion_date',$rec->getPlanCompletionDate());
           	$this->_S('initial_completion_date',$rec->getInitialCompletionDate());
           	$this->_S('additional_sheet',$rec->getAdditionalSheet());
           	$this->setTemplate('qanAdd');
        }
    }

    public function executeQanDelete()
    {
        $id = $this->_G('id');
        $this->record = IsoCapaPeer::retrieveByPK($id);
        $rec = $this->record->getQanNo().'('.$this->record->getInitiatedDate().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('capa/qanSearch');
    }
    

    public function executeQanPDF()
    {
        $id = $this->_G('id');
        $rec = IsoCapaPeer::retrieveByPK($id);
        if (! $rec){
            exit();
        }
        $footer = 'MC Record Sheet #46, Revision: 001 Date: 02/09/2004';
        $pdf = new PdfLibrary();
        
        //----------------------------------------- page 1
        $pdf->addPage();
        $m = 2;
        $t = 0;
        $pdf->Box(1, 4 + $t, 180, 269, '');
        $pdf->printBoldLn( $m, 2+ $t, 'QUALITY ALERT NOTICE (QAN)', 'Arial', 10);
        $pdf->printBoldLn( 140, 2+ $t, 'QAN No', 'Arial', 10);
        $pdf->printLn( 160, 2+ $t, $rec->getQanNo(), 'Arial', 10);
        $pdf->Line($m, 3+ $t, 180, .4 );
        $pdf->printLn( $m, 4+ $t, 'Action:', 'Arial', 10);
        $pdf->printLn( $m+15, 4+ $t, $rec->getProposedAction(), 'Arial', 10);
        $pdf->printLn( $m + 100, 4+ $t, 'Initiator:', 'Arial', 10);
        $pdf->printLn( $m + 114, 4+ $t, $rec->getInitiator(), 'Arial', 10);
        $pdf->Line($m, 4.5+ $t, 180, .2 );
        $pdf->printBoldLn( $m , 5+ $t, 'Comments:', 'Arial', 10);
        $pdf->SetXY( $m+4 , 5.5 + $t);
        $pdf->MultiLinePrint(170, 3.5, $rec->getCustComment());
        //$pdf->printLn( $m + 4 , 6+ $t, $rec->getCustComment(), 'Arial', 10);
        $pdf->Line($m, 8+ $t, 180, .4 );
        $pdf->printBoldLn( $m , 9, 'DESCRIPTION OF ACTUAL/POTENTIAL PROBLEM OR OPPORTUNITY', 'Arial', 10);
        $pdf->SetXY( $m+4 , 9.5 + $t);
        $pdf->MultiLinePrint(170, 3.5, $rec->getProblemDescription());
        $pdf->Line($m, 14+ $t, 180, .2 );
        $pdf->printLn( $m , 15+ $t,  'Initiated By:', 'Arial', 10);
        $pdf->printLn( $m + 25 , 15+ $t,  $rec->getInitiatedBy(), 'Arial', 10);
        $pdf->printLn( $m + 120, 15+ $t, 'Date Initiated:', 'Arial', 10);
        $pdf->printLn( $m + 145, 15+ $t, $rec->getInitiatedDate(), 'Arial', 10);
        $pdf->Line($m, 16+ $t, 180, .2 );
        $pdf->printLn( $m , 17+ $t, 'Recieved and Entered Into Intranet System By:', 'Arial', 10);        
        $pdf->printLn( $m + 80 , 17+ $t, strtoupper($rec->getKeyedInBy()), 'Arial', 10);
        $pdf->printLn( $m + 120, 17+ $t, 'Date:', 'Arial', 10);
        $pdf->printLn( $m + 145, 17+ $t, $rec->getKeyedInDate(), 'Arial', 10);
        $pdf->Line($m, 18+ $t, 180, .2 );
        $pdf->printLn( $m , 19+ $t, 'Assigned to:', 'Arial', 10);        
        $pdf->printLn( $m + 25, 19+ $t, $rec->getAssignedTo(), 'Arial', 10);
        $pdf->printLn( $m + 120, 19+ $t, 'Date Assigned:', 'Arial', 10);
        $pdf->printLn( $m + 145, 19+ $t, $rec->getAssignedDate(), 'Arial', 10);
        $pdf->Line($m, 20+ $t, 180, .4 );
        $pdf->printLn( $m , 21, '8D Problem Solving Form Required:', 'Arial', 10);
        $pdf->printBoldLn( $m + 80, 21, $rec->getEightDForm(), 'Arial', 10);
        $pdf->Line($m, 22+ $t, 180, .4 );
        $pdf->printBoldLn( $m , 23, 'RECOMMENDED IMMEDIATE ACTION', 'Arial', 10);
        $pdf->SetXY( $m+4 , 23.5 + $t);
        $pdf->MultiLinePrint(170, 4, $rec->getRecommendedAction());
        $pdf->Line($m, 40+ $t, 180, .4 );
        $pdf->printBoldLn( $m , 41, 'DATA COLLECTION AND MONITORING', 'Arial', 10);
        $pdf->SetXY( $m+4 , 41.5 + $t);
        $pdf->MultiLinePrint(170, 4, $rec->getDataCollection());
        $pdf->Line($m, 53+ $t, 180, .2 );
        $pdf->printLn( $m + 100, 54+ $t, 'Start Implementation Date:', 'Arial', 10);
        $pdf->printLn( $m + 145, 54+ $t, $rec->getImplementedDate(), 'Arial', 10);
        $pdf->Footer('Page',$footer);
        
        //----------------------------------------- page 2        
        $pdf->addPage();
        $pdf->Box(1, 4 + $t, 180, 269, '');
        $pdf->Footer('Page',$footer);        
        $pdf->printBoldLn( $m, 2+ $t, 'AFFECTED GARMENTS / PARTS', 'Arial', 10);
        $pdf->SetXY( $m+4 , 2.5 + $t);
        $pdf->MultiLinePrint(170, 4, $rec->getAffectedParts());
        $pdf->Line($m, 11+ $t, 180, .2 );
        $pdf->printLn( $m , 12, 'Initial Implementation Date:', 'Arial', 10);
        $pdf->printLn( $m + 50, 12, $rec->getInitialCompletionDate(), 'Arial', 10);
        $pdf->printLn( $m+100 , 12, 'Planned Completion Date:', 'Arial', 10);
        $pdf->printLn( $m+145 , 12, $rec->getPlanCompletionDate(), 'Arial', 10);
        $pdf->Line($m, 13+ $t, 180, .2 );
        $pdf->printLn( $m , 14, 'Submitted By:', 'Arial', 10);
        $pdf->printLn( $m + 25 , 14, strtoupper($rec->getSubmittedBy()), 'Arial', 10);
        $pdf->printLn( $m+117 , 14, 'Date Submitted:', 'Arial', 10);
        $pdf->printLn( $m+145 , 14, $rec->getRunPlanDate(), 'Arial', 10);
        $pdf->Line($m, 15+ $t, 180, .4 );
        $pdf->printBoldLn( $m, 16+ $t, 'COMMENTS FROM APPROVAL AUTHORITY', 'Arial', 10);
        $pdf->SetXY( $m+4 , 16.5 + $t);
        $pdf->MultiLinePrint(170, 4, $rec->getApproveComment());
        $pdf->Line($m, 25+ $t, 180, .2 );
        $pdf->printLn( $m , 26, 'Approved By:', 'Arial', 10);
        $pdf->printLn( $m + 25, 26, strtoupper($rec->getApprovedBy()), 'Arial', 10);
        $pdf->printLn( $m+100 , 26, 'Date Action Plan Approved:', 'Arial', 10);
        $pdf->printLn( $m+145 , 26, $rec->getActionPlanDate(), 'Arial', 10);
        $pdf->Line($m, 27+ $t, 180, .2 );
        $pdf->printLn( $m , 28, 'Followed Up Review By:', 'Arial', 10);
        $pdf->printLn( $m + 40, 28, strtoupper($rec->getFollowUpBy()), 'Arial', 10);
        $pdf->printLn( $m+114 , 28, 'Date of Follow Up:', 'Arial', 10);
        $pdf->printLn( $m+145 , 28, $rec->getFollowUpDate(), 'Arial', 10);        
        $pdf->Line($m, 29+ $t, 180, .4 );
        $pdf->printLn( $m , 30, 'Is Effective:', 'Arial', 10);
        $pdf->printBoldLn( $m + 25, 30, $rec->getIsEffective(), 'Arial', 10);
        $pdf->Line($m, 31+ $t, 180, .2 );
        $pdf->printBoldLn( $m , 32, 'EFFECTIVITY COMMENT', 'Arial', 10);
        $pdf->SetXY( $m+4 , 32.5 + $t);
        $pdf->MultiLinePrint(170, 4, $rec->getEffectivityComment());
        $pdf->Line($m, 41+ $t, 180, .4 );
        $pdf->printBoldLn( $m , 42, 'CLOSED OUT DATE', 'Arial', 10);
        $pdf->printLn( $m + 40, 42, strtoupper($rec->getClosedOutDate()), 'Arial', 10);
                
        
        //----------------------------------------- page 2
        $apHead = 'ADDITIONAL SHEET
        Purgin Procedure for Silicon Oil Contamination - Addendum A';
        $apBody = $rec->getAdditionalSheet();     
        
        $pdf->addPage();
        //$pdf->Box(1, 4 + $t, 180, 269, '');
        $pdf->Footer('Page',$footer);        
        //$pdf->printBoldLn( $m, 2+ $t, 'ADDITIONAL SHEET', 'Arial', 10);
        $pdf->SetXY( $m+4 , 2.5 + $t);
        $pdf->HeaderLabel(170, 4, $apHead);
        $pdf->SetXY( $m+4 , 4.5 + $t);
        $pdf->MultiLinePrint(170, 4, $apBody);
        
        $pdf->closePDF('testing.pdf');
        
        return sfView::NONE;
        
        
    }
    
    public function executeCapaSearch()
    {
        $c = new SeagateCapaCriteria();
        $this->pager = SeagateCaPaReportPeer::GetPager($c);
    }    

    public function executeCapaEdit()
    {
        $id = $this->_G('id');
        $rec = SeagateCaPaReportPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('report_no',$rec->getReportNo());
            $this->_S('title',$rec->getTitle());
            $this->_S('issue_date',$rec->getIssueDate());
            $this->_S('response_date',$rec->getResponseDate());
            $this->_S('findings',$rec->getFindings());
            $this->_S('root_cause_analysis',$rec->getRootCauseAnalysis());
            $this->_S('containment_plan',$rec->getContainmentPlan());
            $this->_S('preventive_plan',$rec->getPreventivePlan());
            $this->_S('verification_of_ca_pa',$rec->getVerificationOfCaPa());
            $this->_S('reported_by', $rec->getReportedBy()? $rec->getReportedBy(): strtoupper($this->_U()));
            $this->_S('car_name',$rec->getCarName());
            $this->_S('car_followup_required',$rec->getCarFollowupRequired());
            $this->_S('car_followup_date',$rec->getCarFollowupDate());
            
            $this->_S('car_ca_status',$rec->getCarCaStatus());
            $this->_S('car_title',$rec->getCarTitle());
            $this->_S('car_plan_effective',$rec->getCarPlanEffective());
           	$this->_S('car_verified_by',$rec->getCarVerifiedBy());
           	$this->_S('car_closure_date',$rec->getCarClosureDate());
           	
            $this->_S('symptom',$rec->getSymptom());
            $this->_S('era_description',$rec->getEraDescription());
            $this->_S('era_effectivity',$rec->getEraEffectivity());
           	$this->_S('era_implemented',$rec->getEraImplemented());
           	$this->_S('era_completed',$rec->getEraCompleted());
            
           	$this->_S('team',$rec->getTeam());
            $this->_S('cont_effectivity',$rec->getContEffectivity());
            $this->_S('cont_implemented',$rec->getContImplemented());
           	$this->_S('cont_completed',$rec->getContCompleted());
           	$this->_S('chosen_perm_ca',$rec->getChosenPermCa());
            $this->_S('chosen_perm_effectivity',$rec->getChosenPermEffectivity());
            $this->_S('chosen_perm_implemented',$rec->getChosenPermImplemented());
            $this->_S('chosen_perm_completed',$rec->getChosenPermCompleted());
            
           	$this->_S('implemented_perm_ca',$rec->getImplementedPermCa());
           	$this->_S('implemented_perm_effectivity',$rec->getImplementedPermEffectivity());
           	$this->_S('implemented_perm_implemented',$rec->getImplementedPermImplemented());
           	$this->_S('implemented_perm_completed',$rec->getImplementedPermCompleted());
           	
           	
           	$this->setTemplate('capaAdd');
        }
    }    
    
    public function executeCapaDelete()
    {
        $id = $this->_G('id');
        $this->record = SeagateCaPaReportPeer::retrieveByPK($id);
        $rec = $this->record->getReportNo().'('.$this->record->getTitle().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('capa/capaSearch');
    }    
}
