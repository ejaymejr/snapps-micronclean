<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class popBacteriaAddAction extends SnappsAction
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
        $this->record = GarmentBacteriaCountPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new GarmentBacteriaCount();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
            
        }
        if ($this->getRequest()->getMethod() != sfRequest::POST){
            $this->_S('tester', strtoupper($this->_U()));
            $this->_S('point_5_spec', 'TBD');
            $this->_S('point_3_spec', 'TBD');
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST && $this->_G('customer'))
        {
        	$from = GarmentBacteriaCountPeer::GetLastDateByCustomer($this->_G('customer'));
        	$sql = 'select * from particle_data where customer = "'.$this->_G('customer').'" 
        			and date_time >= "'.$from.'" and date(date_time) <= "'.$this->_G('date_time').'"
        			order by date_time desc ';
//        	        	var_dump($from);
//        	   	var_dump($sql);
//        	exit();
		    $res = HrLib::ExecuteMercurySQL('mercury_particle', $sql );
			while ($res->next()):
				$gId = QrTypePeer::GetIdByType($res->getString('customer'), $res->getString('type'));
				//echo $gId . ': ' .$res->getString('customer') .'_' . $res->getString('department') .'_' .$res->getString('type') .'_' .$res->getString('date_time') . '<br>' ;
				$record = GarmentBacteriaCountPeer::GetDuplicate($res->getString('customer'), $res->getString('type'), $res->getString('date_time'));
				if (!$record):
				    $this->record = new GarmentBacteriaCount();
		            $this->record->setDateCreated(DateUtils::DUNow());
		            $this->record->setCreatedBy($this->_U());
					$this->record->setDateTime($res->getString('date_time'));
		            $this->record->setCustomer($this->_G('customer'));
		            $this->record->setDepartment($res->getString('department'));
		            $this->record->setGarmentCode($gId);
		            $this->record->setType($res->getString('type'));
		            $this->record->setTester($this->_G('tester') );
		            $this->record->setBacteriaCount( 0 );
		            $this->record->setWasher( 'n/a' );
		            $this->record->setDryer( 'n/a' );
		            $this->record->save();
	           	endif;
			endwhile;
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('micronclean/garmentBacteriaSearch?hIDs[]=' . $this->record->getId());
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

    public function handleErrorGarmentBacteriaAdd()
    {
        return sfView::SUCCESS;
    }


}

