<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class dailyInspectionAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Daily Inspection');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = InspectionRecordPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new InspectionRecord();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }

                
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
        	$this->_S('checked_by', 'REYNAN');
        }
        	$this->info = InspectionFieldListPeer::GetFieldList();
//        }
        
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$this->record->setInspectionType('DAILY');
        	$this->record->setInspectionDate($this->_G('inspection_date'));
        	$this->record->setCheckedBy($this->_G('checked_by'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
        	
        	$pos = 0;
        	foreach( $this->info['id'] as $fIndex=>$fldId)
        	{
		        $iId = $this->record->getId();
		        $this->recItem = InspectionRecordItemPeer::GetItemByIdFldName($iId, $fldId);
		        if (! $this->recItem)
		        {
		        		$this->recItem = new InspectionRecordItem();
		        		$this->recItem->setInspectionRecordId($iId);
		            	$this->recItem->setDateCreated(DateUtils::DUNow());
		            	$this->recItem->setCreatedBy($this->_U());
		        }
		        $this->recItem->setInspectionFieldListId($fldId);
        		$this->recItem->setModifiedBy($this->_U());
        		$this->recItem->setDateModified(DateUtils::DUNow());
        		$this->recItem->setFieldName($this->info['field_name'][$pos]);
        		$this->recItem->setFieldValue($this->_G('field'.$fldId));
        		$this->recItem->save();
        		$pos ++;
        	}
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('diwater/dailyInspectionSearch?hIDs[]=' . $this->record->getId());
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
