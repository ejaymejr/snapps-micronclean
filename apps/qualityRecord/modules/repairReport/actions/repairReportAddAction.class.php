<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class repairReportAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Repair Report');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = RepairReportSummaryPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new RepairReportSummary();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
        $this->ieAlert = 'Must Use Internet Explorer to Run this program';
        $this->ieAlert = '';
        if ($this->getRequest()->getMethod()!= sfRequest::POST)
        {
        	$this->_S('quantity', 1);
        	$this->_S('initials', 'SOOYEN');
        	$this->_S('pcs_or_pairs', 'PC(S)');
        }
//        $this->_S('keyed_in_by',   $this->_U());
//        $this->_S('keyed_in_date', Date('Y-m-d'));
//        $this->_S('initiated_by',   'JAYAKUMAR');
//        $this->_S('assigned_to',   'JAYAKUMAR');
   }

    public function execute()
    {
    	//------------------- populate data
    	if ($this->getRequest()->getMethod() == sfRequest::POST && $this->_G('verify_data') )
    	{
    		$garmentList  = array(
    				1=>'JUMPSUIT',
    				2=>'BOOTIES',
    				3=>'HOOD',
    				4=>'SAFETY BOOTIES'
    		);
    		$repairTypes = array('HEAT PATCH', 'SEAMS REPAIR', 'SNAP REPLACEMENT', 'ZIP');
    		$customerList = HrLib::GetMercuryCustomerList();
    		$today = Date('2013-02-04');
    		for ($x=0; $x<=90; $x++):
    			$cdate = DateUtils::AddDate($today, ($x * -1) );
    			$garment = $garmentList[rand(1, 4)];
    			foreach($customerList as $customer):
    				$customerCount = rand(1, 20);
	    			$sql = "select * from garmentInformation where customer='".$customer."' order by inserted_date desc";
	    			$res = HrLib::ExecuteMercurySQL('', $sql);
	    			$gcode = array();
	    			$gtype = array();
					while ($res->next()):
						$gcode[] = $res->getString('garment_code');
						$gtype[] = $res->getString('type');
					endwhile;
    				for($y=0; $y<=$customerCount; $y++):
						$rand_gcode = rand(0, sizeof($gcode) - 1);
    					$garmentCode = $gcode[$rand_gcode];
    					$garmentType = $gtype[$rand_gcode];
    					$repairType  = $repairTypes[rand(0, 3)];
    					$temperature = 0;
    					$pressure = 0;
    					if ($repairType == 'HEAT PATCH'):
    						$temperature = rand(190, 210);
    						$pressure = rand(135, 155);
    					endif;
    					$pcs_pairs = 'PC(S)';
    					if ($garmentType == "BOOTIES" || $garmentType == "SAFETY BOOTIES"):
    						$pcs_pairs = "PAIR";
    					endif;
    					$quantity = '1';
						$initials = 'SOOYEN';
    					echo $cdate . $customer. $garmentCode . $garmentType .  $repairType . $temperature . $pressure . $pcs_pairs . '<br>';
    					
    					$this->record = new RepairReportSummary();
    					$this->record->setDateCreated(DateUtils::DUNow());
    					$this->record->setCreatedBy($this->_U());
    					$this->record->setCustomer($customer);
    					$this->record->setGarmentCode($garmentCode);
    					$this->record->setGarmentType($garmentType);
    					$this->record->setRepairType($repairType);
    					$this->record->setTemperature($temperature);
    					$this->record->setPressure($pressure);
    					$this->record->setQuantity($quantity);
    					$this->record->setPcsOrPairs($pcs_pairs);
    					$this->record->setInitials($initials);
    					$this->record->setRemarks('Done');
    					$this->record->setDepartment($this->_G('department'));
    					$this->record->setRepairDate($this->_G('repair_date')? $this->_G('repair_date') : null);
    					$this->record->setModifiedBy($this->_U());
    					$this->record->setDateModified(DateUtils::DUNow());
    					$this->record->save();
    				endfor;
    			endforeach;
    		endfor;
    		
    		return;
    	}
    	
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
        	$this->ieAlert = "";
           
        	$this->record->setCustomer($this->_G('customer'));
        	$this->record->setGarmentCode($this->_G('garmentCodeTxt'));
        	$this->record->setGarmentType($this->_G('garment_type'));
        	$this->record->setRepairType($this->_G('repair_type'));
        	$this->record->setTemperature($this->_G('temperature'));
        	$this->record->setPressure($this->_G('pressure'));
        	$this->record->setQuantity($this->_G('quantity'));
        	$this->record->setPcsOrPairs($this->_G('pcs_or_pairs'));
        	$this->record->setInitials($this->_G('initials'));
        	$this->record->setRemarks($this->_G('remarks'));
        	$this->record->setDepartment($this->_G('department'));
        	$this->record->setRepairDate($this->_G('repair_date')? $this->_G('repair_date') : null);
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_S('garmentCodeTxt','');
            $this->_SUC('Record <b>' . $data . '</b> saved.');
            //$this->redirect('repairReport/repairReportSearch?hIDs[]=' . $this->record->getId());
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
