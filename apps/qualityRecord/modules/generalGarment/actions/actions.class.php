<?php

/**
 * GeneralGarment actions.
 *
 * @package    snapps
 * @subpackage GeneralGarment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class GeneralGarmentActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('generalGarment/inscanSearch');
    }

    public function executeInscanSearch()
    {
        $c = new InscanCriteria();
        $this->pager = InscanPeer::GetPager($c);
    }
    
    public function executeOutscanSearch()
    {
        $c = new OutscanCriteria();
        $this->pager = OutscanPeer::GetPager($c);
    }

    public function executeWearerInfoSearch()
    {
        $c = new WearerInformationCriteria();
        $this->pager = WearerInformationPeer::GetPager($c);
    }    
    
    public function executeGarmentInfoSearch()
    {
        $c = new GarmentInfoCriteria();
        $this->pager = GarmentInformationPeer::GetPager($c);
    }

    public function executeRejectSearch()
    {
        $c = new RejectCriteria();
        $this->pager = RejectPeer::GetPager($c);
    }
    
    public function executeRepairSearch()
    {
        $c = new RepairCriteria();
        $this->pager = RepairPeer::GetPager($c);
    }
    
    public function executeScrapSearch()
    {
        $c = new ScrapCriteria();
        $this->pager = ScrapPeer::GetPager($c);
    }
    
    public function executeLogSearch()
    {
        $c = new LogReasonCriteria();
        $this->pager = LogReasonPeer::GetPager($c);
    }    
        
    public function executeConformanceEdit()
    {
        $id = $this->_G('id');
        $rec = NonConformancePartPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date', $rec->getDate());
            $this->_S('company', $rec->getCompany());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('adhesive', $rec->getAdhesive());
            $this->_S('particle_count', $rec->getParticleCount());
            $this->_S('crack', $rec->getCrack());
            $this->_S('after_drying', $rec->getAfterDrying());
            $this->_S('ddi', $rec->getDdi());
            $this->_S('missing_part', $rec->getMissingPart());
            $this->_S('over_date', $rec->getOverDate());
            $this->_S('over_punch', $rec->getOverPunch());
            $this->_S('stain', $rec->getStain());
            $this->_S('sticker', $rec->getSticker());
            $this->_S('torn_broken', $rec->getTornBroken());
       }
        $this->setTemplate('conformanceAdd');        
    }    
    
    public function executeConformanceDelete()
    {
        $id = $this->_G('id');
        $this->record = NonConformancePartPeer::retrieveByPK($id);
        $rec = $this->record->getCompany().'('.$this->record->getCustomer().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('conformance/conformanceSearch');
    }
}
