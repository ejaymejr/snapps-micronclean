<?php

/**
 * recipient actions.
 *
 * @package    snapps
 * @subpackage recipient
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class snappsgNameActions extends sfActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        $this->forward('default', 'module');
    }

    public function executeAutocomplete()
    {
        $this->options = array();
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $keyword = $this->getRequestParameter('recipient');
            if ($keyword != '') {
                $this->options = snappsNameListPeer::GetNamesByKeyword($keyword);
                
                $tmpOptions = snappsVendorPeer::GetKeyword($keyword);
                $this->options = array_merge($this->options, $tmpOptions);
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
}
