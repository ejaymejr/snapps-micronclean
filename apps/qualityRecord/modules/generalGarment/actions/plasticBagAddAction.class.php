<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class plasticBagAddAction extends SnappsAction
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
        $this->record = PlasticBagPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new PlasticBag();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('by_who', strtoupper($this->_U()));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTypeOfPlastic($this->_G('type_of_plastic'));
            $this->record->setByWho($this->_G('by_who'));
            $this->record->setSurfaceArea($this->_G('surface_area'));
            $this->record->setVolInMl($this->_G('vol_in_ml'));
            $this->record->setLpcBlankInMl($this->_G('lpc_blank_in_ml'));
            $this->record->setLpcPlasticInMl($this->_G('lpc_plastic_in_ml'));
            $this->record->setLpcPlasticInCm($this->_G('lpc_plastic_in_cm'));
            $this->record->setDateTime($this->_G('date_time')? $this->_G('date_time') : null);
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('plasticBag/plasticBagSearch?hIDs[]=' . $this->record->getId());
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
