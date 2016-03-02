<?php

/**
 * issuance actions.
 *
 * @package    qualityRecords
 * @subpackage issuance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class issuanceActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    //$this->forward('default', 'module');
  }
  
  public function executeDesignSearch()
  {
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(TicketDesignHeaderPeer::DATE_CREATED);
	$pager = TicketDesignHeaderPeer::GetPager($c, 20);
	$this->gridVarsDelivery = self::CreateGridVars($pager, 'dt_header_search', 'dt_pager_list', 'DIVTagSearch', sfConfig::get('app_dt_grid_headers'));
  }
  
  public function executeTemplateDesignEdit()
  {
  	$id = $this->_G('id');
  	$record = TicketDesignHeaderPeer::retrieveByPK($id);
  	if (!$record):
  		$this->redirect404();
  	endif;
  	$this->_S('name', $record->getName());
  	$this->_S('company', $record->getCompany());
  	$this->_S('department', $record->getDepartment());
  	$this->_S('seq_no', 1);
	  	
  	//$this->setTemplate('templateDesignAdd');
  }
  
  public function executeTicketSearch()
  {
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(TicketDeliveryRecordPeer::TRANS_DATE);
  	$c->addGroupByColumn(TicketDeliveryRecordPeer::DELIVERY_TICKET_ID);
  	$pager = TicketDeliveryRecordPeer::GetPager($c, 20);
  	$this->gridVarsDelivery = self::CreateGridVars($pager, 'td_header_record_search', 'td_record_pager_list', 'DIVTagSearch', sfConfig::get('app_td_record_grid_headers'));
  }
  
  public function executeIssueByDesignSearch()
  {
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(TicketDesignHeaderPeer::DATE_CREATED);
  	$pager = TicketDesignHeaderPeer::GetPager($c, 20);
  	$this->gridVarsDelivery = self::CreateGridVars($pager, 'issuebydesign_header_search', 'issuebydesign_pager_list', 'DIVTagSearch', sfConfig::get('app_dt_grid_headers'));
  }
  
  public function executeTicketEdit()
  {
  	$ticketID = $this->_G('ticketID');
  	$ticketData = TicketDeliveryRecordPeer::GetDataByTicketID($ticketID);
  	foreach($ticketData as $record):
  		$inputID = TicketDeliveryRecordPeer::GenerateInputID($record->getTicketDesignDetailId(), $record->getGarment(), $record->getComponent(), $record->getValue());
  		$this->_S('total'.$inputID, $record->getQuantity());
  		$this->_S('tID', $record->getTicketDesignHeaderId() );
  		//$this->_S('ticketID', $ticketID);
  		//echo 'total'.$inputID .' ' . $record->getQuantity() .'<br>';
  	endforeach;
  	
  	$this->setTemplate('ticketAdd');
  }
  
  public function executeTicketSummary()
  {
  	$id = $this->_G('id');
  	$this->deliveryRecordData = TicketDeliveryRecordPeer::retrieveByPK($id);
//   	$this->headerID = $deliveryRecordData->getTicketDesignHeaderId(); 
//   	$this->ticketID = $deliveryRecordData->getDeliveryTicketId(); 
  	$this->garmentList  = TicketDesignDetailPeer::GetGarmentByHeaderID($this->deliveryRecordData->getTicketDesignHeaderId()); 
  	
  }
  
  public function executeTicketSummaryXLS()
  {
  	$id = $this->_G('id');
  	$deliveryRecordData = TicketDeliveryRecordPeer::retrieveByPK($id);
  	$headerID = $deliveryRecordData->getTicketDesignHeaderId();
  	$ticketID = $deliveryRecordData->getDeliveryTicketId();
  	$garmentList  = TicketDesignDetailPeer::GetGarmentByHeaderID($headerID);
  	$sep = "\t";
  	$brk = "\r\n";
  	$csvContent = '';
 	foreach($garmentList as $garment):
	  	$sizes = TicketDesignDetailPeer::GetValueByHeaderIDandGarment($headerID, $garment);
	  	$colors = TicketDesignDetailPeer::GetComponentByHeaderIDandGarment($headerID, $garment);
	  	$colorTotal = array();
	  	$grandTotal = 0;
	  	$rowCount = 1;
	  	
	  	$headers = array('Seq', 'Color');
	  	foreach($sizes as $size):
	  		$colorTotal[$size] = 0 ;
	  		$headers[] = $size;
	  	endforeach;
	  	$headers[] = "Total";
	  	$csvContent .= $garment . $brk;
	  	$csvContent .= implode("\t", $headers);
	  	$csvContent .= "\r\n";
	  	foreach($colors as $color):
	  		$csvContent .= $rowCount++ ."\t". $color ."\t" ;
	  		$totalPerColor = 0;
		  	foreach($sizes as $size):
			  	$tagTotal = 0;
			  	$tDeliveryRecord = TicketDeliveryRecordPeer::GetQuantityByGarmentComponentValueTicketID($garment, $color, $size, $ticketID);
			  	$tagTotal = $tDeliveryRecord ;
			  	$csvContent .= $tagTotal . "\t";
			  	$totalPerColor += $tagTotal;
			  	$colorTotal[$size] += $tagTotal;
		  	endforeach;
		  	$csvContent .= $totalPerColor . $sep;
		  	$csvContent .= "\r\n";
	  	endforeach;
	  	$csvContent .= "".$sep."Total".$sep;
	  	foreach($sizes as $size):
	  		$csvContent .= $colorTotal[$size] . $sep;
	  		$grandTotal += $colorTotal[$size];
	  	endforeach;
	  	$csvContent .= $grandTotal. $brk. $brk . $brk ;
  	endforeach;
  	$this->_SaveXLS('ticketSummary_' . $deliveryRecordData->getDeliveryTicketId().'.xls', $csvContent);
  }
  
}
