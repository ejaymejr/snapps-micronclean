<?php

/**
 * seagate actions.
 *
 * @package    qualityRecords
 * @subpackage seagate
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class seagateActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
   
  }
  
  public function executeCreateBatch()
  {
  	$this->cells = hgasCellPeer::GetCellList();
  	$this->departments = hgasDepartmentPeer::GetDeptList();
  	$this->teams = hgasTeamPeer::GetTeamList();
  	if ($this->getRequest()->getMethod() == sfRequest::POST ):
  		$cells = array();
  		$depts = array();
  		$teams = array();
  		foreach($_POST as $k => $val):
  			if (substr($k, 0, 4) == 'cell' ) $cells[] = str_replace('cell_', '', $k);
  			if (substr($k, 0, 4) == 'dept' ) $depts[] = str_replace('dept_', '', $k);
  			if (substr($k, 0, 4) == 'team' ) $teams[] = str_replace('team_', '', $k);
  		endforeach;
  		$company = 'SEAGATE';
  		$record = new NamelistHeader();
  		$record->setCompany($company);
  		$record->setDescription(strtoupper($this->_G('description')) );
  		$record->setCell(implode(',', $cells));
  		$record->setDepartment(implode(',', $depts));
  		$record->setTeam(implode(',', $teams));
  		$record->setCreatedBy($this->_U());
  		$record->setDateCreated(DateUtils::DUNow());
  		$record->setModifiedBy($this->_U());
  		$record->setDateModified(DateUtils::DUNow());
  		$record->save();
  		$this->_SUC(strtoupper($this->_G('description')). " has been saved.");
  	endif;
  }
  
  public function executeSearchBatch()
  {
   	  $c = new Criteria(); 
	  $c->addAscendingOrderByColumn(NamelistHeaderPeer::DATE_MODIFIED);
	  $this->pager = NamelistHeaderPeer::doSelect($c);
  }
  
  public function executeCreateNamelist()
  {
  	  $id = $this->_G('id');
  	  $nameListData = NamelistHeaderPeer::retrieveByPK($id);
  	  $tags = '';
  	  if ($nameListData):
  	  	$cells = $nameListData->getCell();
  	  	$depts = $nameListData->getDepartment();
  	  	$teams = $nameListData->getTeam();
  	  	$activeTags = hgasHangerSlotPeer::GetTagsForAllActiveSlots($cells, $depts, $teams);
  	  	$this->tags = hgasTagPeer::retrieveByPKs($activeTags);
  	  endif;
  	  
  }
  
}
