<?php

/**
 * dryerParticle actions.
 *
 * @package    snapps
 * @subpackage dryerParticle
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class dryerParticleActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
        //    $this->forward('default', 'module');
        $this->redirect('dryerParticle/dryerParticleSearch');
    }

    public function executeDryerParticleSearch()
    {
        $c = new DryerParticleCountCriteria();
        $this->pager = DryerParticleCountPeer::GetPager($c);
    }

    public function executeDryerParticleEdit()
    {
        $id = $this->_G('id');
        $rec = DryerParticleCountPeer::retrieveByPK($id);
        if ($rec){
            $this->_S('dryer_no', $rec->getDryerNo());
            $this->_S('particle_count', $rec->getParticleCount());
            $this->_S('temperature', $rec->getTemperature());
            $this->_S('name', $rec->getName());
            $this->_S('date_time', $rec->getDateTime());
        }
        $this->setTemplate('dryerParticleAdd');
    }

    public function executeDryerParticleDelete()
    {
        $id = $this->_G('id');
        $this->record = DryerParticleCountPeer::retrieveByPK($id);
        $rec = $this->record->getDryerNo().'('.$this->record->getName().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('dryerParticle/dryerParticleSearch');
    }         
    
    public function executeDryerParticleGraph()
    {
	    //$this->_S('tie', date('Y-m-d'));
	    $edate =DryerParticleCountPeer::GetLatestDate();
	    $this->_S('tie', $edate);
	    $this->_S('tis', DateUtils::AddDate($this->_G('tie'), -365));
	    $c = new Criteria();
	    $c->add(DryerParticleCountPeer::DATE_TIME, "date(".DryerParticleCountPeer::DATE_TIME.") >= '".$this->_G('tis')."' &&  date(".DryerParticleCountPeer::DATE_TIME.") <= '".$this->_G('tie')."'", 'CUSTOM'  );
	    $this->pager = DryerParticleCountPeer::doSelect($c);
    }    
}
