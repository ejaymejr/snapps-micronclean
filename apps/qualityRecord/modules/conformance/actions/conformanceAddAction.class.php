<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class conformanceAddAction extends SnappsAction
{
    var $preCount = 0;

    public function preExecute()
    {
        if (!$this->preCount)
        {
            //sfConfig::set('app_page_heading', sfConfig::get('app_page_heading') . ' &raquo; Add Non-Conformance Info');
            $this->preCount++;
        }

        $id= $this->_G('id');
        $this->record = NonConformancePartPeer::retrieveByPK($id);
        if (!$this->record)
        {
            $this->record = new NonConformancePart();
            $this->record->setDateCreated(DateUtils::DUNow());
            $this->record->setCreatedBy($this->_U());
        }
   }

    public function execute()
    {
        if ($this->getRequest()->getMethod() == sfRequest::POST)
        {

            $this->record->setCompany($this->_G('company'));
            $this->record->setCustomer($this->_G('customer'));
            $this->record->setParticleCount($this->_G('particle_count'));
            $this->record->setAfterDrying($this->_G('after_drying'));
            $this->record->setDdi($this->_G('ddi'));
            $this->record->setMissingPart($this->_G('missing_part'));
            $this->record->setStain($this->_G('stain'));
            $this->record->setTornBroken($this->_G('torn_broken'));
            $this->record->setProductType($this->_G('product_type'));
            $this->record->setDate($this->_G('date')? $this->_G('date') : null);
            
            $this->record->setOverDateTop($this->_G('over_date_top'));
            $this->record->setOverDateBody($this->_G('over_date_body'));
            $this->record->setOverDateBottom($this->_G('over_date_bottom'));
            $this->record->setOverPunchTop($this->_G('over_punch_top'));
            $this->record->setOverPunchBody($this->_G('over_punch_body'));
            $this->record->setOverPunchBottom($this->_G('over_punch_bottom'));
            $this->record->setMixedPartTop($this->_G('mixed_part_top'));
            $this->record->setMixedPartBody($this->_G('mixed_part_body'));
            $this->record->setMixedPartBottom($this->_G('mixed_part_bottom'));
            $this->record->setCrackTop($this->_G('crack_top'));
            $this->record->setCrackBody($this->_G('crack_body'));
            $this->record->setCrackBottom($this->_G('crack_bottom'));
            $this->record->setScratchesTop($this->_G('scratches_top'));
            $this->record->setScratchesBody($this->_G('scratches_body'));
            $this->record->setScratchesBottom($this->_G('scratches_bottom'));
            $this->record->setWorpageTop($this->_G('worpage_top'));
            $this->record->setWorpageBody($this->_G('worpage_body'));
            $this->record->setWorpageBottom($this->_G('worpage_bottom'));
            $this->record->setStainTop($this->_G('stain_top'));
            $this->record->setStainBody($this->_G('stain_body'));
            $this->record->setStainBottom($this->_G('stain_bottom'));
            $this->record->setStickerTop($this->_G('sticker_top'));
            $this->record->setStickerBody($this->_G('sticker_body'));
            $this->record->setStickerBottom($this->_G('sticker_bottom'));
            $this->record->setAdhesiveTop($this->_G('adhesive_top'));
            $this->record->setAdhesiveBody($this->_G('adhesive_body'));
            $this->record->setAdhesiveBottom($this->_G('adhesive_bottom'));
            $this->record->setMouldingDefectTop($this->_G('moulding_defect_top'));
            $this->record->setMouldingDefectBody($this->_G('moulding_defect_body'));
            $this->record->setMouldingDefectBottom($this->_G('moulding_defect_bottom'));
            $this->record->setChipsTop($this->_G('chips_top'));
            $this->record->setChipsBody($this->_G('chips_body'));
            $this->record->setChipsBottom($this->_G('chips_bottom'));
            $this->record->setHkDrumFail($this->_G('hk_drum_fail'));
            
            $this->record->setDryer1Temperature($this->_G('dryer_1_temp'));
            $this->record->setDryer1Particle($this->_G('dryer_1_part'));
            $this->record->setDryer2Temperature($this->_G('dryer_2_temp'));
            $this->record->setDryer2Particle($this->_G('dryer_2_part'));
            
            
            $cost  = 0;
            $vpc   = 0;
            $tvpc  = 0;
            $tqty  = 0;
            $tqty = 
            + intval($this->_G('over_date_top'))
            + intval($this->_G('over_date_body'))
            + intval($this->_G('over_date_bottom'))
            + intval($this->_G('over_punch_top'))
            + intval($this->_G('over_punch_body'))
            + intval($this->_G('over_punch_bottom'))
            + intval($this->_G('mixed_part_top'))
            + intval($this->_G('mixed_part_body'))
            + intval($this->_G('mixed_part_bottom'))
            + intval($this->_G('crack_top'))
            + intval($this->_G('crack_body'))
            + intval($this->_G('crack_bottom'))
            + intval($this->_G('scratches_top'))
            + intval($this->_G('scratches_body'))
            + intval($this->_G('scratches_bottom'))
            + intval($this->_G('worpage_top'))
            + intval($this->_G('worpage_body'))
            + intval($this->_G('worpage_bottom'))
            + intval($this->_G('stain_top'))
            + intval($this->_G('stain_body'))
            + intval($this->_G('stain_bottom'))
            + intval($this->_G('sticker_top'))
            + intval($this->_G('sticker_body'))
            + intval($this->_G('sticker_bottom'))
            + intval($this->_G('adhesive_top'))
            + intval($this->_G('adhesive_body'))
            + intval($this->_G('adhesive_bottom'))
            + intval($this->_G('moulding_defect_top'))
            + intval($this->_G('moulding_defect_body'))
            + intval($this->_G('moulding_defect_bottom'))
            + intval($this->_G('chips_top'))
            + intval($this->_G('chips_body'))
            + intval($this->_G('chips_bottom'));
            
            $tvpc = 
            + intval($this->_G('over_date_body'))
            + intval($this->_G('over_punch_body'))
            + intval($this->_G('mixed_part_body'))
            + intval($this->_G('crack_body'))
            + intval($this->_G('scratches_body'))
            + intval($this->_G('worpage_body'))
            + intval($this->_G('stain_body'))
            + intval($this->_G('sticker_body'))
            + intval($this->_G('adhesive_body'))
            + intval($this->_G('moulding_defect_body'))
            + intval($this->_G('chips_body'));
            
            $this->record->setQuantity($tqty);
            $this->record->setCost($tqty * .056);
            $this->record->setVpc($tvpc * .002);
            
        	$this->record->setModifiedBy($this->_U());
        	$this->record->setDateModified(DateUtils::DUNow());
        	$this->record->save();
            $data = $this->_G('customer');
            $this->_SUF('Record <b>' . $data . '</b> saved.');
            $this->redirect('conformance/conformanceEdit?id=' . $this->record->getId());
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

