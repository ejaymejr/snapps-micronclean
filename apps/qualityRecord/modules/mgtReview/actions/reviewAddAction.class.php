<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class reviewAddAction extends SnappsAction
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
        $this->record = ManagementReviewPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new ManagementReview();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        
//        if ($this->getRequest()->getMethod() != sfRequest::POST){
//            $this->_S('prepared_by',   $this->_U());
//        }

         
    }
     

    public function execute()
    {
        $this->memList = array();
        $this->preList = array();
        $this->absList = array();
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDate($this->_G('date'));
            $this->record->setVenue($this->_G('venue'));
            $this->record->setChairPerson($this->_G('chair_person'));
            $this->record->setDiscussion($this->_G('discussion'));
            $this->record->setPropAction($this->_G('prop_action'));
            $this->record->setActionDate($this->_G('action_date'));
            $this->record->setConclusion($this->_G('conclusion'));
            $this->record->setSecretary($this->_G('secretary'));
            $this->record->setReviewBy($this->_G('review_by'));
            $this->record->setVerifyBy($this->_G('verify_by'));
            $this->record->setModifiedBy($this->_U());
            $this->record->setDateModified(DateUtils::DUNow());            
            $this->record->save();
            $users = ManagementReviewMembersPeer::getMembersList();
            $this->UpdateMembersList($users, $this->record->getId());
            $this->UpdatePresenteeList($users, $this->record->getId());
            $this->UpdateAbsenteeList($users, $this->record->getId());
             
//
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('mgtReview/reviewSearch?hIDs[]=' . $this->record->getId());
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

    protected function UpdateMembersList($users, $id){
        ManagementReviewMembersPeer::DeleteListByReviewId($id);
        if ($users){
            foreach($users as $k=>$name){
                if ($this->_G('mem_'.str_replace(' ','_', $name) ) ){
                    $rec = new ManagementReviewMembers();
                    $rec->setManagementReviewId($id);
                    $rec->setName($name);
                    $rec->setDateCreated(DateUtils::DUNow());
                    $rec->setCreatedBy($this->_U());
                    $rec->setModifiedBy($this->_U());
                    $rec->setDateModified(DateUtils::DUNow());
                    $rec->save();            
                }
            }
        }
    }
    
    protected function UpdatePresenteeList($users, $id){
        ManagementReviewPresenteesPeer::DeleteListByReviewId($id);
        if ($users){
            foreach($users as $k=>$name){
                if ($this->_G('pre_'.str_replace(' ','_', $name) ) ){
                    $rec = new ManagementReviewPresentees();
                    $rec->setManagementReviewId($id);
                    $rec->setName($name);
                    $rec->setDateCreated(DateUtils::DUNow());
                    $rec->setCreatedBy($this->_U());
                    $rec->setModifiedBy($this->_U());
                    $rec->setDateModified(DateUtils::DUNow());
                    $rec->save();            
                }
            }
        }
    }    
    
    protected function UpdateAbsenteeList($users, $id){
        ManagementReviewAbsenteesPeer::DeleteListByReviewId($id);
        if ($users){
            foreach($users as $k=>$name){
                if ($this->_G('abs_'.str_replace(' ','_', $name) ) ){
                    $rec = new ManagementReviewAbsentees();
                    $rec->setManagementReviewId($id);
                    $rec->setName($name);
                    $rec->setDateCreated(DateUtils::DUNow());
                    $rec->setCreatedBy($this->_U());
                    $rec->setModifiedBy($this->_U());
                    $rec->setDateModified(DateUtils::DUNow());
                    $rec->save();            
                }
            }
        }
    }    

}
