<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class leaveCreditAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; New Leave Application');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = HrEmployeeLeavePeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new HrEmployeeLeave();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
            $this->_S('inclusive_datefrom', Date('Y-m-d'));
            $this->_S('inclusive_dateto', Date('Y-m-d'));
            //$this->_S('date_hol',  Date('Y-m-d'));
            // init something here
        }

    }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $req  = new PayComputeExtra();  //request object computecredits
            //---------------- update old and accumulate all. need to ask cathy if i should accumulate all
            //$oData = $req->computecredits($this->_G('employee_no'), HrFiscalYearPeer::getPreviousYear(sfConfig::get('fiscal_year')), $this->_U());
            $data = $req->computecredits($this->_G('employee_no'), sfConfig::get('fiscal_year'), $this->_U());
            $this->_SUF('Compute '.$this->_G('employee_no').' leave credits done.');
            $this->redirect('leave/leaveCreditSearch?hIDs[]=' . $this->record->getId());
        }
    }

    public function validateBasicPayAdd()
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

