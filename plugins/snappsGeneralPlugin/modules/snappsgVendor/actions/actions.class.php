<?php

class snappsgVendorActions extends sfActions
{
    public function executeAutocomplete()
    {
        $this->options = array();
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $k = $this->getRequestParameter('k', 'vendor');
            $keyword = $this->getRequestParameter($k);
            if ($keyword != '') {                
                $this->options = snappsVendorPeer::GetKeyword($keyword);
            }
        }
        
        $this->options = array_unique($this->options);
        // limit options
        $total = sizeof($this->options);
        if ($total > 10) {
            $this->options = array_slice($this->options, 0, 10);
            $this->options[] = '<b><i>.. too many records (' . $total . ')</i></b>';
        }
        return sfView::SUCCESS;
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
        $c->addAscendingOrderByColumn(snappsVendorPeer::VENDOR);
        
        $q = $this->getRequestParameter(sfConfig::get('snappsg_q_vendor', 'q'));
        if ($q != '') {
            $c->add(snappsVendorPeer::VENDOR, '%' . $q . '%', Criteria::LIKE);
        }
        
        $this->totalRecord = snappsVendorPeer::doCount($c);
        
        $pager = new sfPropelPager('snappsVendor', 10);
        $pager->setCriteria($c);
        $pager->setPage($this->getRequestParameter('page', 1));
        $pager->init();
        return $pager;
    }
}
