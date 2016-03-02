<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class dryerParticleAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Dryer Particle Count');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = DryerParticleCountPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new DryerParticleCount();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('name', strtoupper($this->_U()) );
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$specTemp = rand(55, 65);
            $this->record->setDryerNo($this->_G('dryer_no'));
            $this->record->setParticleCount($this->_G('particle_count'));
            $this->record->setTemperature($specTemp);
            $this->record->setActualTemperature($this->_G('temperature'));
            $this->record->setName($this->_G('name'));
            $this->record->setDateTime($this->_G('date_time')? $this->_G('date_time') : null);
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('dryer_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('dryerParticle/dryerParticleSearch?hIDs[]=' . $this->record->getId());
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
