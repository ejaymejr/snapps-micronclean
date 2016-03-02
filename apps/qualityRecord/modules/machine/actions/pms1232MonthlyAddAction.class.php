<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class pms1232MonthlyAddAction extends SnappsAction
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
        $this->record = Pms1232abMonthlyPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new Pms1232abMonthly();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('initial', strtoupper($this->_U()));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setMachineNo($this->_G('machine_no'));
            $this->record->setDrainSystem($this->_G('drain_system'));
            $this->record->setElectricalSystem($this->_G('electrical_system'));
            $this->record->setHosesConnectors($this->_G('hoses_connectors'));
            $this->record->setInitial($this->_G('initial'));
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('machine_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/monthly1232Search?hIDs[]=' . $this->record->getId());
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

    public function handleErrorHelmkeAdd()
    {
        return sfView::SUCCESS;
    }


}

