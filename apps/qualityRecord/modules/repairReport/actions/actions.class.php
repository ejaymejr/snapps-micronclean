<?php

/**
 * repairReport actions.
 *
 * @package    snapps
 * @subpackage repairReport
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class repairReportActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('repairReport/repairReportSearch');
    }

    public function executeRepairReportSearch()
    {
        $c = new RepairReportSummaryCriteria();
        $this->pager = RepairReportSummaryPeer::GetPager($c);

    }

    public function executeRepairReportEdit()
    {
        $id = $this->_G('id');
        $rec = RepairReportSummaryPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('customer', $rec->getCustomer());
            $this->_S('garmentCodeTxt', $rec->getGarmentCode());
            $this->_S('garment_type', $rec->getGarmentType());
            $this->_S('repair_type', $rec->getRepairType());
            $this->_S('temperature', $rec->getTemperature());
            $this->_S('pressure', $rec->getPressure());
            $this->_S('quantity', $rec->getQuantity());
            $this->_S('pcs_or_pairs', $rec->getPcsOrPairs());
            $this->_S('initials', $rec->getInitials());
            $this->_S('remarks', $rec->getRemarks());
            $this->_S('department', $rec->getDepartment());
            $this->_S('repair_date', $rec->getRepairDate());
            $this->setTemplate('repairReportAdd');
        }
    }

    public function executeRepairReportDelete()
    {
        $id = $this->_G('id');
        $this->record = RepairReportSummaryPeer::retrieveByPK($id);
        $rec = $this->record->getCustomer().'('.$this->record->getRepairType().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('repairReport/repairReportSearch');
    }
    
	public function executeAjaxGarmentInformation()
	{
		$this->garmentCode = $this->_G('garment_code');
		$this->customer = $this->_G('customer');
		$sql = "select * from garmentInformation where garment_code = '".$this->garmentCode."' and customer='".$this->customer."' order by inserted_date desc";
		//$sql = "select * from garmentInformation where garment_code = '".$this->garmentCode."'  order by inserted_date desc";
		$res = HrLib::ExecuteMercurySQL('', $sql);
		$gtype = '';
		$gsize = '';
		$gcolor= '';
		$gcustomer = '';
		$xwash = 0;
		while ($res->next()):
			//$garments[ $res->getString('garment_code') ] = $res->getString('customer') .'_' . $res->getString('type') .'_' .$res->getString('size') .'_' .$res->getString('color') ;
			$gtype     = $res->getString('type');
			$gsize     = $res->getString('size');
			$gcolor    = $res->getString('color');
			$gcustomer = $res->getString('customer');
			$xwash     = $res->getInt('no_of_times_wash');
		endwhile;
		$this->_S('garment', $gtype);
		$this->_S('size', $gsize);
		$this->_S('color', $gcolor);
		$this->_S('customer', $gcustomer);
		$this->_S('no_of_times_wash', $xwash);
		if ($this->_G('garment') && ! $this->_G('id')):
            $this->record = new RepairReportSummary();
            $this->record->setDateCreated(DateUtils::DUNow());
			$this->record->setCreatedBy($this->_U());		
		    $this->record->setCustomer($this->_G('customer'));
        	$this->record->setGarmentCode($this->_G('garment_code'));
        	$this->record->setGarmentType($gtype);
        	$this->record->setRepairType($this->_G('repair_type'));
        	$this->record->setQuantity($this->_G('quantity'));
        	$this->record->setPcsOrPairs($this->_G('pcs_or_pairs'));
        	$this->record->setInitials($this->_G('initials'));
        	$this->record->setRemarks($this->_G('remarks'));
        	$this->record->setDepartment($this->_G('department'));
        	$this->record->setRepairDate($this->_G('repair_date')? $this->_G('repair_date') : null);
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
        	echo '<h2>' . $this->_G('garment_code') . ' saved. </h2>'  ;
        endif;
	}    
}
