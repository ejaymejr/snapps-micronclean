<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class acroNanoTrainingAddAction extends SnappsAction
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
        $this->record = HrAcroNanoTrainingRecordPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new HrAcroNanoTrainingRecord();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());

        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('no_hrs', 12);
        }
    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $empData = HrEmployeeMasterPeer::GetEmployeeData($this->_G('employee_no'));
            
            $this->record->setEmployeeNo($this->_G('employee_no'));
            $this->record->setName($empData? $empData->getName(): '');
            $this->record->setCompany($empData? $empData->getCompany(): '');
            $this->record->setDateFrom($this->_G('date_from'));
            $this->record->setDateTo($this->_G('date_to'));
            $this->record->setVerify($this->_G('verify'));
            $this->record->setNoHrs($this->_G('no_hrs'));
            $this->record->setRemarks($this->_G('remarks'));

            $this->record->setInitialInspection($this->_G('initial_inspection', 'NO') );
            $this->record->setdelabelingJellyRemoval($this->_G('delabeling_jelly_removal', 'NO') );
            $this->record->setPreWash($this->_G('pre_wash', 'NO') );
            $this->record->setLoading($this->_G('loading', 'NO') );
            $this->record->setMachineWash($this->_G('machine_wash', 'NO') );
            $this->record->setUnloading($this->_G('unloading', 'NO') );

            $this->record->setInprocessVisualInspection($this->_G('inprocess_visual_inspection', 'NO') );
            $this->record->setLpc($this->_G('lpc', 'NO') );
            $this->record->setIc($this->_G('ic', 'NO') );
            
            $this->record->setPharmagWasher($this->_G('pharmag_washer', 'NO') );
            $this->record->setPvaVmi($this->_G('pva_vmi', 'NO') );
            $this->record->setPreWashLoading($this->_G('pre_wash_loading', 'NO') );
            $this->record->setPreWashUnloading($this->_G('pre_wash_unloading', 'NO') );
            $this->record->setSoakingLoading($this->_G('soaking_loading', 'NO') );
            $this->record->setSoakingUnloading($this->_G('soaking_unloading', 'NO') );

            $this->record->setQualityPolicy($this->_G('quality_policy', 'NO') );
            $this->record->setSpcAwareness($this->_G('spc_awareness', 'NO') );
            $this->record->setVisualInspection($this->_G('visual_inspection', 'NO') );
            
            
            $this->record->setNvr($this->_G('nvr', 'NO') );
            $this->record->setQaSampleInspection($this->_G('qa_sample_inspection', 'NO') );
            $this->record->setPacking($this->_G('packing', 'NO') );
            $this->record->setPurgingMachine($this->_G('purging_machine', 'NO') );
            $this->record->setModifiedBy($this->_U());
            $this->record->setDateModified(DateUtils::DUNow());
            
            $this->record->save();
            $data = $this->_G('employee_no');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('training/acroNanoTrainingSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorAirAdd()
    {
        return sfView::SUCCESS;
    }


}

