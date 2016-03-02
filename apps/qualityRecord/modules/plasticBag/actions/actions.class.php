<?php

/**
 * plasticBag actions.
 *
 * @package    snapps
 * @subpackage plasticBag
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class plasticBagActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('plasticBag/plasticBagSearch');
    }

    public function executePlasticBagSearch()
    {
        $c = new PlasticBagCriteria();
        $this->pager = PlasticBagPeer::GetPager($c);
    }
    
    public function executePlasticBagEdit()
    {
        $id = $this->_G('id');
        $rec = PlasticBagPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('type_of_plastic', $rec->getTypeOfPlastic());
            $this->_S('by_who', $rec->getByWho());
            $this->_S('surface_area', $rec->getSurfaceArea());
            $this->_S('vol_in_ml', $rec->getVolInMl());
            $this->_S('lpc_blank_in_ml', $rec->getLpcBlankInMl());
            $this->_S('lpc_plastic_in_ml', $rec->getLpcPlasticInMl());
            $this->_S('lpc_plastic_in_cm', $rec->getLpcPlasticInCm());
            $this->_S('vendor', $rec->getVendor());
            
            $this->_S('ic_cl_in_cm', $rec->getIcClInCm());
            $this->_S('ic_no_in_cm', $rec->getIcNoInCm());
            $this->_S('ic_so_in_cm', $rec->getIcSoInCm());
            
            $this->_S('date_time', $rec->getDateTime());
       }
        $this->setTemplate('plasticBagAdd');        
    }    
    
    public function executePlasticBagDelete()
    {
        $id = $this->_G('id');
        $this->record = PlasticBagPeer::retrieveByPK($id);
        $rec = $this->record->getByWho().'('.$this->record->getTypeOfPlastic().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('plasticBag/plasticBagSearch');
    }

    public function executePlasticBagGraph()
    {
	    //$this->_S('tie', date('Y-m-d'));
	    $edate =PlasticBagPeer::GetLatestDate();
	    $this->_S('tie', $edate);
	    $this->_S('tis', DateUtils::AddDate($this->_G('tie'), -365));
	    $c = new Criteria();
	    $c->add(PlasticBagPeer::DATE_TIME, "date(".PlasticBagPeer::DATE_TIME.") >= '".$this->_G('tis')."' &&  date(".PlasticBagPeer::DATE_TIME.") <= '".$this->_G('tie')."'", 'CUSTOM'  );
	    $this->pager = PlasticBagPeer::doSelect($c);
    }      

}
