<?php

/**
 * diwater actions.
 *
 * @package    snapps
 * @subpackage diwater
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class diwaterActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
    
    public function executeMelvin()
    {
        
    }
    
  public function executeIndex()
  {
   	 // $cr = new CreateMaintenance('inspection_field_list', sfContext::getInstance()->getModuleName() );
  	 $this->redirect('diwater/dailyInspectionSearch');  
  }
  
  public function executeDailyInspectionSearch()
  {
    $c = new InspectionRecordCriteria();
    $this->pager = InspectionRecordPeer::GetPager($c);
  }
  
  public function executeDailyInspectionEdit()
  {
  	 $id = $this->_G('id'); 
  	 $this->record = InspectionRecordPeer::retrieveByPK($id);
  	 if (! $this->record)
  	 {
  	 	return sfView::SUCCESS;	
  	 }
  	 $this->_S('inspection_date', $this->record->getInspectionDate());
  	 $this->_S('checked_by', $this->record->getCheckedBy());
  	 
  	 //$this->recItem = InspectionRecordItemPeer::get

  	 $this->info = InspectionFieldListPeer::GetFieldList();
  	 
     foreach( $this->info['id'] as $fIndex=>$fldId)
     {
        $iId = $this->record->getId();
        $this->recItem = InspectionRecordItemPeer::GetItemByIdFldName($iId, $fldId);
        if ($this->recItem)
        {
        	//echo $fldName . '<br>';
        	$this->_S('field'.$fldId, $this->recItem->getFieldValue());
        }
     }
  	 $this->setTemplate('dailyInspectionAdd');  	
  }

  public function executeDailyInspectionDelete()
  {
  	 $id = $this->_G('id');
  	 $this->rec    = InspectionRecordItemPeer::DeleteItemByInspectionRecordId($id);
  	 
  	 $this->record = InspectionRecordPeer::retrieveByPK($id);
  	 $info = $this->record->getInspectionDate();
  	 $this->record->delete();
  	   	 
  	 
  	 $this->_SUF($info.'has been deleted Successfuly.');
  	 $this->redirect('diwater/dailyInspectionSearch');  	
  }
  
  public function executeWeeklyInspectionSearch()
  {
        
  }
  
  public function executeMonthlyInspectionSearch()
  {
        
  }  
  
  
  public function executeDailyInspectionTrend()
  {
    $this->_S('tie', date('Y-m-d'));
    $this->_S('tis', DateUtils::AddDate($this->_G('tie'), -1));
    $c = new InspectionRecordCriteria();
    $c->clearOrderByColumns();
    $c->addAscendingOrderByColumn(InspectionRecordPeer::INSPECTION_DATE);
    $this->pager = InspectionRecordPeer::GetPager($c, 1000000);
    
  }
  
}
