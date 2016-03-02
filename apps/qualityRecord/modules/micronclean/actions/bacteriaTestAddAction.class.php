<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class bacteriaTestAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Plastic Bag');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = BacteriaTestPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new BacteriaTest();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('checked_by', strtoupper($this->_U()));
            $this->_S('verified_by', 'Huiping');
        }
   }

    public function execute()
    {
    	//---------------------- populate Data
    	if ($this->getRequest()->getMethod() == sfRequest::POST && $this->_G('verify')):
    		$cdate = Date('Y-m-d');
    		for($x=0; $x<= 360; $x++):
    			$curDt = DateUtils::AddDate($cdate, ( $x * -1 ) ); 
		    	$this->record = new BacteriaTest();
		    	$this->record->setDateCreated(DateUtils::DUNow());
		    	$this->record->setCreatedBy($this->_U());
	    		$this->record->setTransDate($curDt);
	    		$this->record->setModifiedBy($this->_U());
	    		$this->record->setDateModified(DateUtils::DUNow());
	    		$this->record->setCleanroom($this->_G('cleanroom'));
	    		$this->record->setAreaA(0);
	    		$this->record->setAreaB(0);
	    		$this->record->setFoldingTableA(0);
	    		$this->record->setFoldingTableB(0);
	    		$this->record->setCustomer($this->_G('customer'));
	    		$this->record->setGarment('JUMPSUIT');
	    		$this->record->setCheckedBy('Huiping');
	    		$this->record->setVerifiedBy('Adeline');
	    		$this->record->setRemark('');
	    		$this->record->save();
	    		//echo $curDt . '<br>';
	    	endfor;
	    	//exit();
    	endif;
    	
        if ($this->getRequest()->getMethod() == sfRequest::POST && ! $this->_G('verify'))
        {
            $this->record->setTransDate($this->_G('trans_date'));
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->setCleanroom($this->_G('cleanroom'));
        	$this->record->setAreaA($this->_G('area_a') ? $this->_G('area_a_value') : '');
        	$this->record->setAreaB($this->_G('area_b') ? $this->_G('area_b_value') : '');
        	$this->record->setFoldingTableA($this->_G('folding_table_a')? $this->_G('folding_table_a_value') : '');
        	$this->record->setFoldingTableB($this->_G('folding_table_b')? $this->_G('folding_table_b_value') : '');
        	$this->record->setCustomer($this->_G('customer'));
        	$this->record->setGarment($this->_G('garment'));
        	$this->record->setCheckedBy($this->_G('checked_by'));
        	$this->record->setVerifiedBy($this->_G('verified_by'));
        	$this->record->setRemark($this->_G('remark'));
        	$this->record->save();
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/bacteriaTestSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorBacteriaTestAdd()
    {
        return sfView::SUCCESS;
    }


}

