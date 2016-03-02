<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class pms1232DailyAddAction extends SnappsAction
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
        $this->record = Pms1232abPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new Pms1232ab();
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
            $this->record->setWashFlowRate($this->_G('wash_flow_rate'));
            $this->record->setRinseFlowRate($this->_G('rinse_flow_rate'));
            $this->record->setCham1($this->_G('cham_1'));
            $this->record->setCham2($this->_G('cham_2'));
            $this->record->setPanelInspect($this->_G('panel_inspect'));
            $this->record->setExitInspect($this->_G('exit_inspect'));
            $this->record->setSwitchControl($this->_G('switch_control'));
            $this->record->setInitial($this->_G('initial'));
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('machine_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/daily1232Search?hIDs[]=' . $this->record->getId());
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

