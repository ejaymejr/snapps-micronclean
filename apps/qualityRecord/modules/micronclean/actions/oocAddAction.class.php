<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class oocAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Plastic Bag');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = OutOfControlPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new OutOfControl();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            //$this->_S('tester', strtoupper($this->_U()));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setObservation($this->_G('observation'));
            $this->record->setInvestigateBy($this->_G('investigate_by'));
            $this->record->setPropAction($this->_G('prop_action'));
            $this->record->setReviewBy($this->_G('review_by'));
        	$this->record->save();
            $data = $this->_G('investigate_by');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/oocSearch?hIDs[]=' . $this->record->getId());
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

