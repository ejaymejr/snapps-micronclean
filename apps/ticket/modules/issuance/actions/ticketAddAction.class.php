<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class ticketAddAction extends SnappsAction
{
	var $preCount = 0;

	public function preExecute()
	{
		if (!$this->preCount)
		{
			sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; DESIGN DELIVERY TEMPLATE');
			$this->preCount++;
		}

// 		$id= $this->_G('id');
// 		$this->record = TicketDeliveryRecordPeer::retrieveByPK($id);
// 		if (!$this->record)
// 		{
// 			$this->record = new TicketDeliveryRecord();
// 			$this->record->setDateCreated(DateUtils::DUNow());
// 			$this->record->setCreatedBy($this->_U());
// 		}
// 		if ($this->getRequest()->getMethod() != sfRequest::POST )
// 		{
// 			$this->_S('remark', 'Please put some reminders here...');

// 		}
		//$this->setLayout('layout_noheading');
	}

	public function execute()
	{

		
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$isFound = false;
			$ticketID = TicketDeliveryRecordPeer::GenerateDeliveryTicketId();
			foreach($_POST as $vars=>$vals):
				if ( strpos($vars, 'totalinput') !== false && $vals > 0):
					$var = explode('_', $vars) ;
					$garment = str_replace('@', ' ', $var[1]);
					$component = str_replace('@', ' ', $var[2]);
					$value = str_replace('@', ' ', $var[3]);
					$detailID = substr($var[0], 10);
					$detailDet = TicketDesignDetailPeer::retrieveByPK($detailID);
					$headerID = '';
					if ($detailDet):
						$headerID = $detailDet->getTicketDesignHeaderId();
					endif;
					if (! $this->_G('ticketID') )
					{
						$this->record = new TicketDeliveryRecord();
						$this->record->setDateCreated(DateUtils::DUNow());
						$this->record->setCreatedBy($this->_U());
					}else{
						$ticketID = $this->_G('ticketID');
						$this->record = TicketDeliveryRecordPeer::GetDataByGarmentComponentValue($garment, $component, $value, $ticketID );
					}
					if ($this->record):
						$this->record->setTransDate(DateUtils::DUNow());
						$this->record->setTicketDesignHeaderId($headerID);
						$this->record->setTicketDesignDetailId($detailID);
						$this->record->setGarment($garment);
						$this->record->setComponent($component);
						$this->record->setValue($value);
						$this->record->setQuantity($vals);
						$this->record->setDateModified(DateUtils::DUNow());
						$this->record->setModifiedBy($this->_U());
						$this->record->setDeliveryTicketId($ticketID);
						$this->record->save();
					endif;
				endif;
			endforeach;

			$this->redirect('issuance/ticketSearch?hIDs[]=' . $this->record->getId());
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
