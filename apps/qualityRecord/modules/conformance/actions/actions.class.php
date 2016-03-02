<?php

/**
 * conformance actions.
 *
 * @package    snapps
 * @subpackage conformance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class conformanceActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //$this->forward('default', 'module');
        $this->redirect('conformance/conformanceSearch');
    }

    public function executeConformanceSearch()
    {
        $c = new NonConformanceCriteria();
        $this->pager = NonConformancePartPeer::GetPager($c);
    }
    
    public function executeConformanceEdit()
    {
        $id = $this->_G('id');
        $rec = NonConformancePartPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date', $rec->getDate());
            $this->_S('company', $rec->getCompany());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('product_type', $rec->getProductType());
            $this->_S('particle_count', $rec->getParticleCount());
            
            $this->_S('after_drying', $rec->getAfterDrying());
            $this->_S('ddi', $rec->getDdi());
            $this->_S('missing_part', $rec->getMissingPart());
            $this->_S('stain', $rec->getStain());
            $this->_S('torn_broken', $rec->getTornBroken());
            
            $this->_S('adhesive_top', $rec->getAdhesiveTop());
            $this->_S('adhesive_body', $rec->getAdhesiveBody()); 
            $this->_S('adhesive_bottom', $rec->getAdhesiveBottom());
            $this->_S('over_date_top', $rec->getOverDateTop());
            $this->_S('over_date_body', $rec->getOverDateBody());
            $this->_S('over_date_bottom', $rec->getOverDateBottom());
            $this->_S('over_punch_top', $rec->getOverPunchTop());
            $this->_S('over_punch_body', $rec->getOverPunchBody());
            $this->_S('over_punch_bottom', $rec->getOverPunchBottom());
            $this->_S('mixed_part_top', $rec->getMixedPartTop());
            $this->_S('mixed_part_body', $rec->getMixedPartBody());
            $this->_S('mixed_part_bottom', $rec->getMixedPartBottom());
            $this->_S('crack_top', $rec->getCrackTop());
            $this->_S('crack_body', $rec->getCrackBody());
            $this->_S('crack_bottom', $rec->getCrackBottom());
            $this->_S('scratches_top', $rec->getScratchesTop());
            $this->_S('scratches_body', $rec->getScratchesBody());
            $this->_S('scratches_bottom', $rec->getScratchesBottom());
            $this->_S('worpage_top', $rec->getWorpageTop());
            $this->_S('worpage_body', $rec->getWorpageBody());
            $this->_S('worpage_bottom', $rec->getWorpageBottom());
            $this->_S('stain_top', $rec->getStainTop());
            $this->_S('stain_body', $rec->getStainBody());
            $this->_S('stain_bottom', $rec->getStainBottom());
            $this->_S('sticker_top', $rec->getStickerTop());
            $this->_S('sticker_body', $rec->getStickerBody());
            $this->_S('sticker_bottom', $rec->getStickerBottom());
            $this->_S('moulding_defect_top', $rec->getMouldingDefectTop());
            $this->_S('moulding_defect_body', $rec->getMouldingDefectBody());
            $this->_S('moulding_defect_bottom', $rec->getMouldingDefectBottom());
            $this->_S('chips_top', $rec->getChipsTop());
            $this->_S('chips_body', $rec->getChipsBody());
            $this->_S('chips_bottom', $rec->getChipsBottom());
            $this->_S('hk_drum_fail', $rec->getHkDrumFail());
            $this->_S('cost', $rec->getCost());
            $this->_S('vpc', $rec->getVpc());
            
            $this->_S('dryer_1_temp', $rec->getDryer1Temperature());
            $this->_S('dryer_1_part', $rec->getDryer2Particle());
            $this->_S('dryer_2_temp', $rec->getDryer2Temperature());
            $this->_S('dryer_2_part', $rec->getDryer2Particle());
       }
        $this->setTemplate('conformanceAdd');        
    }

    public function executeConformanceView()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {
            $this->redirect('conformance/conformanceSearch');        
        }
        
        $id = $this->_G('id');
        $rec = NonConformancePartPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('date', $rec->getDate());
            $this->_S('company', $rec->getCompany());
            $this->_S('customer', $rec->getCustomer());
            $this->_S('product_type', $rec->getProductType());
            $this->_S('particle_count', $rec->getParticleCount());
            
            $this->_S('after_drying', $rec->getAfterDrying());
            $this->_S('ddi', $rec->getDdi());
            $this->_S('missing_part', $rec->getMissingPart());
            $this->_S('stain', $rec->getStain());
            $this->_S('torn_broken', $rec->getTornBroken());
            
            $this->_S('adhesive_top', $rec->getAdhesiveTop());
            $this->_S('adhesive_body', $rec->getAdhesiveBody()); 
            $this->_S('adhesive_bottom', $rec->getAdhesiveBottom());
            $this->_S('over_date_top', $rec->getOverDateTop());
            $this->_S('over_date_body', $rec->getOverDateBody());
            $this->_S('over_date_bottom', $rec->getOverDateBottom());
            $this->_S('over_punch_top', $rec->getOverPunchTop());
            $this->_S('over_punch_body', $rec->getOverPunchBody());
            $this->_S('over_punch_bottom', $rec->getOverPunchBottom());
            $this->_S('mixed_part_top', $rec->getMixedPartTop());
            $this->_S('mixed_part_body', $rec->getMixedPartBody());
            $this->_S('mixed_part_bottom', $rec->getMixedPartBottom());
            $this->_S('crack_top', $rec->getCrackTop());
            $this->_S('crack_body', $rec->getCrackBody());
            $this->_S('crack_bottom', $rec->getCrackBottom());
            $this->_S('scratches_top', $rec->getScratchesTop());
            $this->_S('scratches_body', $rec->getScratchesBody());
            $this->_S('scratches_bottom', $rec->getScratchesBottom());
            $this->_S('worpage_top', $rec->getWorpageTop());
            $this->_S('worpage_body', $rec->getWorpageBody());
            $this->_S('worpage_bottom', $rec->getWorpageBottom());
            $this->_S('stain_top', $rec->getStainTop());
            $this->_S('stain_body', $rec->getStainBody());
            $this->_S('stain_bottom', $rec->getStainBottom());
            $this->_S('sticker_top', $rec->getStickerTop());
            $this->_S('sticker_body', $rec->getStickerBody());
            $this->_S('sticker_bottom', $rec->getStickerBottom());
            $this->_S('moulding_defect_top', $rec->getMouldingDefectTop());
            $this->_S('moulding_defect_body', $rec->getMouldingDefectBody());
            $this->_S('moulding_defect_bottom', $rec->getMouldingDefectBottom());
            $this->_S('chips_top', $rec->getChipsTop());
            $this->_S('chips_body', $rec->getChipsBody());
            $this->_S('chips_bottom', $rec->getChipsBottom());
            $this->_S('cost', $rec->getCost());
            $this->_S('vpc', $rec->getVpc());
            
            $this->_S('dryer_1_temp', $rec->getDryer1Temperature());
            $this->_S('dryer_1_part', $rec->getDryer2Particle());
            $this->_S('dryer_2_temp', $rec->getDryer2Temperature());
            $this->_S('dryer_2_part', $rec->getDryer2Particle());
       }
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
    
    public function executeShowInfo()
    {
        $this->id = $this->_G('id');
        $this->company = $this->_G('company');
    }
    
    
    public function executeNonConformanceHandlingCostSummary()
    {
        $this->monthlyCosts = NonConformancePartPeer::GetMonthlyCostSummary();
        
    }
    
    
    public function executeNonConformanceGraph()
    {
	    //$this->_S('tie', date('Y-m-d'));
	    $edate =NonConformancePartPeer::GetLatestDate();
	    $this->_S('tie', $edate);
	    $this->_S('tis', DateUtils::AddDate($this->_G('tie'), -365));
	    $c = new Criteria();
	    $c->add(NonConformancePartPeer::DATE, "date(".NonConformancePartPeer::DATE.") >= '".$this->_G('tis')."' &&  date(".NonConformancePartPeer::DATE.") <= '".$this->_G('tie')."'", 'CUSTOM'  );
	    $this->pager = NonConformancePartPeer::doSelect($c);
    }    
}





