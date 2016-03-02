<?php

/**
 * category actions.
 *
 * @package    snapps
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class snappsgCategoryActions extends sfActions
{
    public function preExecute()
    {        
        sfConfig::set('app_page_heading', 'Account List');
    }

    
    
    public function executeIndex()
    {
        $this->forward('default', 'module');
    }

    public function executeTestSelect()
    {
        $this->pager = $this->getPager();        
    }
    public function executeAjaxUpdateOptions()
    {
        $options = array('-1' => '- Select Company first -');
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $keyword = $this->getRequestParameter('company');
            if (snappsCompanyPeer::IsValidCompany($keyword)) {
                $options = AccountCategoryPeer::GetCategoryOptionsByCompany($keyword);
            }
        }
        sfConfig::set('htopt_category', $options);
        return sfView::SUCCESS;
    }

    public function executeListSelect()
    {
        $this->data = array();
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $keyword = $this->getRequestParameter('company');
            if (snappsCompanyPeer::IsValidCompany($keyword)) {
                $this->data = AccountCategoryPeer::SelectByKeyword($keyword);
            }
        }
        return sfView::SUCCESS;
    }

    public function executeCount()
    {
        $c = new Criteria();        
        $q = $this->getRequestParameter(sfConfig::get('snappsg_q_category', 'q'));
        if ($q != '') {
            $c->add(AccountCategoryPeer::CATEGORY, '%' . $q . '%', Criteria::LIKE);
        }
        $count = AccountCategoryPeer::doCount($c);
        echo $q . " : " . $count;
        $this->setLayout(false);
        return sfView::NONE;
    }
    
    public function executeList()
    {
        $this->pager = $this->getPager();
    }
    
    public function executeAjaxSearch()
    {
        $this->pager = $this->getPager();
    }

    public function executeAjaxList()
    {
        $this->pager = $this->getPager();
    }

    private function getPager()
    {
        $c = new Criteria();
        $c->add(AccountCategoryPeer::IN_OR_OUT, 'OUT');
        $c->addAscendingOrderByColumn(AccountCategoryPeer::COMPANY);
        
        
        $sortAccNo = $this->getRequestParameter('sort_acc_no') == '1' ? true : false;
        if ($sortAccNo) {
            $c->addAscendingOrderByColumn(AccountCategoryPeer::ACCOUNT_NO);            
        } else {
            $c->addAscendingOrderByColumn(AccountCategoryPeer::SORT_ORDER);
            $c->addAscendingOrderByColumn(AccountCategoryPeer::CATEGORY);
        }
        
        $q = $this->getRequestParameter(sfConfig::get('snappsg_q_category', 'q'));
        if ($q != '') {
            $crit = $c->getNewCriterion(AccountCategoryPeer::CATEGORY, '%' . $q . '%', Criteria::LIKE);
            $crit->addOr($c->getNewCriterion(AccountCategoryPeer::ACCOUNT_NO, '%' . $q . '%', Criteria::LIKE));
            $c->add($crit);
        }
        $co = $this->getRequestParameter('co');
        if ($co != '' && snappsCompanyPeer::IsValidCompany($co)) {
            $c->add(AccountCategoryPeer::COMPANY, $co);
        }      
        
        $this->totalRecord = AccountCategoryPeer::doCount($c);
        
        $pager = new sfPropelPager('AccountCategory', 10);
        $pager->setCriteria($c);
        $pager->setPage($this->getRequestParameter('page', 1));
        $pager->init();
        return $pager;
    }
}
