<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class airBacteriaAddAction extends SnappsAction
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
        $this->record = AirBacteriaCountPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new AirBacteriaCount();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setTester($this->_G('tester'));
            $this->record->setRemarks($this->_G('remarks'));
            $this->record->setRh($this->_G('rh'));
            $this->record->setBacteriaCount($this->_G('bacteria_count'));
            $this->record->setXData($this->_G('x_data'));
            $this->record->setFilterArea($this->_G('filter_area'));
            $this->record->setTemperature($this->_G('temperature'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/airBacteriaSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorAirBacteriaAdd()
    {
        return sfView::SUCCESS;
    }


}

