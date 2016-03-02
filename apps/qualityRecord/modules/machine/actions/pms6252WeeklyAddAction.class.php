<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class pms6252WeeklyAddAction extends SnappsAction
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
        $this->record = Pms6252WeeklyPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new Pms6252Weekly();
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
            $this->record->setSensorDiagnostic($this->_G('sensor_diagnostic'));
            $this->record->setActuatorDiagnostic($this->_G('actuator_diagnostic'));
            $this->record->setBasketInspect($this->_G('basket_inspect'));
            $this->record->setChamberClean($this->_G('chamber_clean'));
            $this->record->setNozzleInspect($this->_G('nozzle_inspect'));
            $this->record->setPlumbingInspect($this->_G('plumbing_inspect'));
            $this->record->setDriveRoller($this->_G('drive_roller'));
            $this->record->setDriveBelt($this->_G('drive_belt'));
            $this->record->setChainTention($this->_G('chain_tention'));
            $this->record->setInitial($this->_G('initial'));
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('machine_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/weekly6252Search?hIDs[]=' . $this->record->getId());
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

