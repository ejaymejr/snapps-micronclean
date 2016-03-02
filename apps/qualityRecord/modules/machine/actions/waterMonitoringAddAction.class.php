<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class waterMonitoringAddAction extends SnappsAction
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
        $this->record = WaterMonitoringPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new WaterMonitoring();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
        	$this->_S('date_time', Date('Y-m-d'));
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$data = $this->_G('machine_no') . ' | ' . $this->_G('date_time') ;
            $this->record->setDateTime($this->_G('date_time'));
            $this->record->setMachineNo(strtoupper($this->_G('machine_no')) );
            $this->record->setAm8($this->_G('am_8'));
            $this->record->setAm9($this->_G('am_9'));
            $this->record->setAm10($this->_G('am_10'));
            $this->record->setAm11($this->_G('am_11'));
            $this->record->setNn12($this->_G('nn_12'));
            $this->record->setPm1($this->_G('pm_1'));
            $this->record->setPm2($this->_G('pm_2'));
            $this->record->setPm3($this->_G('pm_3'));
            $this->record->setPm4($this->_G('pm_4'));
            $this->record->setPm5($this->_G('pm_5'));
            $this->record->setPm6($this->_G('pm_6'));
            $this->record->setPm7($this->_G('pm_7'));
            $this->record->setPm8($this->_G('pm_8'));
            $this->record->setPm9($this->_G('pm_9'));
            $this->record->setPm10($this->_G('pm_10'));
            $this->record->setTester($this->_U());
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/waterMonitoringSearch?HID[]=' . $this->record->getId());
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

