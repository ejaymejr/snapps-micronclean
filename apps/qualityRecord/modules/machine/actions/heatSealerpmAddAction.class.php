<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class heatSealerpmAddAction extends SnappsAction
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
        $this->record = HeatSealerPmPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new HeatSealerPm();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('performed_by', strtoupper($this->_U()));
            $this->_S('verified_by', 'HUIPING');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setTransDate($this->_G('trans_date'));
            $this->record->setMachineType($this->_G('machine_type'));
            $this->record->setAirRegulator($this->_G('air_regulator'));
            $this->record->setHeat($this->_G('heat'));
            $this->record->setThermopatch($this->_G('thermopatch'));
            $this->record->setDwell($this->_G('dwell'));
            $this->record->setPiston($this->_G('piston'));
            $this->record->setPerformedBy($this->_G('performed_by'));
            $this->record->setVerifyDate($this->_G('verify_date'));
            $this->record->setVerifiedBy($this->_G('verified_by'));
            $this->record->setRemark($this->_G('remark'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('machine_type');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('machine/heatSealerPmSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorHeatSealerPmAdd()
    {
        return sfView::SUCCESS;
    }


}

