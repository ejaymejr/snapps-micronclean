<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class templateDesignAddAction extends SnappsAction
{
	var $preCount = 0;

	public function preExecute()
	{
		if (!$this->preCount)
		{
			sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; DESIGN DELIVERY TEMPLATE');
			$this->preCount++;
		}

		$id= $this->_G('id');
		$this->record = TicketDesignHeaderPeer::retrieveByPK($id);
		if (!$this->record)
		{
			$this->record = new TicketDesignHeader();
			$this->record->setDateCreated(DateUtils::DUNow());
			$this->record->setCreatedBy($this->_U());
		}
		$this->companyList    = HrLib::GetMercuryCustomerList();
		$this->departmentList = HrLib::GetMercuryDepartmentList();
		$this->garmentList    = HrLib::GetMercuryGarmentList($this->companyList);

		if ($this->getRequest()->getMethod() != sfRequest::POST )
		{
			$this->_S('remark', 'Please put some reminders here...');

		}
	}

	public function execute()
	{

		
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
// 			var_dump($_POST);
// 			exit();
			$isFound = false;
			foreach($_POST as $containers=>$vals):
				$container = substr($containers, 0, 4);
				if ( $container == 'com_'):
					$isFound = true;
				endif;
			endforeach;
// 			var_dump($this->_G('name'));
// 			exit();
			$this->record->setName($this->_G('name'));
			$this->record->setCompany($this->_G('company'));
			$this->record->setDepartment($this->_G('department'));
			$this->record->setModifiedBy($this->_U());
			$this->record->setDateModified(DateUtils::DUNow());
			$this->record->save();
			$ticketHeaderID = $this->record->getId();
			
			foreach($_POST as $containers=>$vals):
				$container = substr($containers, 0, 4);
				if ( $container == 'com_'):
					$suffix = substr($containers, 4);
					$garment  = $this->_G('gar_'.$suffix);
					$component = $this->_G('com_'.$suffix);
					$value = $this->_G('lis_'.$suffix);
					$remark = $this->_G('rem_'.$suffix);
					$order = $this->_G('seq_'.$suffix);
					$recID = $this->_G('rec_'.$suffix);
// 					var_dump($containers);
// 					var_dump($suffix);
// 					exit();
					//$ticketDetail = TicketDesignDetailPeer::GetDataByHeaderIDComponent($ticketHeaderID, $component);
					$ticketDetail = TicketDesignDetailPeer::retrieveByPK($recID);
					if (!$ticketDetail):
						$ticketDetail =  new TicketDesignDetail();
						$ticketDetail->setDateCreated(DateUtils::DUNow());
						$ticketDetail->setCreatedBy($this->_U());
					endif;
					$ticketDetail->setGarment($garment);
					$ticketDetail->setComponent($component);
					$ticketDetail->setValue($value);
					$ticketDetail->setRemark($remark);
					$ticketDetail->setSequence($order);
					$ticketDetail->setModifiedBy($this->_U());
					$ticketDetail->setDateModified(DateUtils::DUNow());
					$ticketDetail->setTicketDesignHeaderId($ticketHeaderID);
					$ticketDetail->save();
				endif;
			endforeach;
			//$this->redirect('formTemplate/templateDesignSearch?hID[]' );
			$this->redirect('issuance/designSearch?hIDs[]=' . $this->record->getId());
		}	
		
	}

	public function validateTemplateDesignAddAction()
	{
		$this->preExecute();
		if ($this->getRequest()->getMethod() != sfRequest::POST)
		{
			return true;
		}
		$localError = 0;
		return ($localError == 0);
	}

	public function handleErrorTemplateDesignAdd()
	{
		return sfView::SUCCESS;
	}
	




}
