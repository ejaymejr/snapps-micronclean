<?php

/**
 * mgtReview actions.
 *
 * @package    snapps
 * @subpackage mgtReview
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class mgtReviewActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    //$this->forward('default', 'module');
     $this->redirect('mgtReview/reviewSearch');
  }
  
    public function executeReviewSearch()
    {
        $c = new ManagementReviewCriteria();
        $this->pager = ManagementReviewPeer::GetPager($c);
        
    }
    
    public function executeReviewEdit()
    {
        $id = $this->_G('id');
        $rec = ManagementReviewPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date', $rec->getDate());
            $this->_S('venue', $rec->getVenue());
            $this->_S('chair_person', $rec->getChairPerson());
            $this->_S('discussion', $rec->getDiscussion());
            $this->_S('prop_action', $rec->getPropAction());
            $this->_S('action_date', $rec->getActionDate());
            $this->_S('conclusion', $rec->getConclusion());
            $this->_S('secretary', $rec->getSecretary());
            $this->_S('review_by', $rec->getReviewBy());
            $this->_S('verify_by', $rec->getVerifyBy());
            $this->setTemplate('reviewAdd');
        }
        
        $this->memList = ManagementReviewMembersPeer::getMembersListByReviewId($id);
        $this->preList = ManagementReviewPresenteesPeer::GetPresenteeListByReviewId($id);
        $this->absList = ManagementReviewAbsenteesPeer::GetAbsenteesListByReviewId($id);

    }
    
    public function executeReviewDelete()
    {
        $id = $this->_G('id');
        $this->record = ManagementReviewPeer::retrieveByPK($id);
        $rec = $this->record->getDate();
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('mgtReview/reviewSearch');
    }    
}

