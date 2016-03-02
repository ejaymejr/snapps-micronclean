<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class machineParameterAddAction extends SnappsAction
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
        $this->record = MachineParameterPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new MachineParameter();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('checked_by', strtoupper($this->_U()));
            $this->_S('density','1.01');
            $this->_S('pump_model','Blackstone BL5');
            $this->_S('eq_flow_rate','83.33ml / min +/- 2ml');
            $this->_S('frequency','once per month');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTransDate(DateUtils::DUFormat('Y-m-d',$this->_G('trans_date')) );
            $this->record->setTransTime(DateUtils::DUFormat('h:i:s',$this->_G('trans_date')));
            $this->record->setMachineNo($this->_G('machine_no'));
            $this->record->setDiWater($this->_G('di_water'));
            $this->record->setCda1($this->_G('cda1'));
            $this->record->setCda2($this->_G('cda2'));
            $this->record->setCdaDiff($this->_G('cda_diff'));
            $this->record->setSumptank($this->_G('sumptank'));
            $this->record->setUltraTank($this->_G('ultra_tank'));
            $this->record->setWaterTemp($this->_G('water_temp'));
            $this->record->setRinseTemp($this->_G('rinse_temp'));
            $this->record->setCheckedBy($this->_G('checked_by'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('reading');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/machineParameterSearch?hIDs[]=' . $this->record->getId());
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

