<?php

/**
 * contractMgt actions.
 *
 * @package    snapps
 * @subpackage contractMgt
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class contractMgtActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('contractMgt/contractSearch');
    }

    public function executeContractSearch()
    {
        $c = new ContractCriteria();
        $this->pager = ContractManagementLogPeer::GetPager($c);

    }

    public function executeContractEdit()
    {
        $id = $this->_G('id');
        $rec = ContractManagementLogPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('customer', $rec->getCustomer());
            $this->_S('contract_no', $rec->getContractNo());
            $this->_S('contact_person', $rec->getContactPerson());
            $this->_S('contact_no', $rec->getContactNo());
            $this->_S('contract_initiator', $rec->getContractInitiator());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('start_date', $rec->getStartDate());
            $this->_S('end_date', $rec->getEndDate());
        }
        $this->setTemplate('contractAdd');        
    }
    
    public function executeContractDelete()
    {
        $id = $this->_G('id');
        $this->record = ContractManagementLogPeer::retrieveByPK($id);
        $rec = $this->record->getCustomer().'('.$this->record->getContractNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('contractMgt/contractSearch');
    }    
}
