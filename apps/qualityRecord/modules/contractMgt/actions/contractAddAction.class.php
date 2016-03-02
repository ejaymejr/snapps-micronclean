<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class contractAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Contract');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = ContractManagementLogPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new ContractManagementLog();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->record->setCustomer($this->_G('customer'));
            $this->record->setContractNo($this->_G('contract_no'));
            $this->record->setContactPerson($this->_G('contact_person'));
            $this->record->setContactNo($this->_G('contact_no'));
            $this->record->setContractInitiator($this->_G('contract_initiator'));
            $this->record->setRemarks($this->_G('remarks'));
            $this->record->setStartDate($this->_G('start_date')? $this->_G('start_date') : null);
            $this->record->setEndDate($this->_G('end_date')? $this->_G('end_date') : null);
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('contractMgt/contractSearch?hIDs[]=' . $this->record->getId());
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
