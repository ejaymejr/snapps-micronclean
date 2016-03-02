<?php
class DryerParticleCountCriteria extends Criteria
{
    protected $critJoin = 'AND';

    function __construct()
    {
        $this->setIgnoreCase(true);
        $req = sfContext::getInstance()->getRequest();
        $criterions = array();
//        $ref = $req->getParameter('date_time', '');
//        if ($ref != '') {
//            $criterions[] = $this->getNewCriterion(DryerParticleCountPeer::DATE, "%$ref%", self::LIKE);
//        }
        $ref = $req->getParameter('dryer_no', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(DryerParticleCountPeer::DRYER_NO, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('particle_count', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(DryerParticleCountPeer::PARTICLE_COUNT, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('name', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(DryerParticleCountPeer::NAME, "%$ref%", self::LIKE);
        }
        $ref = $req->getParameter('temperature', '');
        if ($ref != '') {
            $criterions[] = $this->getNewCriterion(DryerParticleCountPeer::TEMPERATURE, "%$ref%", self::LIKE);
        }
        $tos = $req->getParameter('tos', '');
        $toe = $req->getParameter('toe', '');
        $toCrit = false;
        if ($tos != '') {
            $toCrit = $this->getNewCriterion(DryerParticleCountPeer::DATE_TIME, 'DATE(' . DryerParticleCountPeer::DATE_TIME . ') >= \'' . $tos . '\'', self::CUSTOM);
        }
        if ($toe != '') {
            $toCrit = $this->getNewCriterion(DryerParticleCountPeer::DATE_TIME, 'DATE(' . DryerParticleCountPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($tos != '' && $toe != '') {
            if ($tos > $toe) {
                $dtmp = $tos;
                $tos = $toe;
                $toe = $dtmp;
            }     
            $toCrit = $this->getNewCriterion(DryerParticleCountPeer::DATE_TIME, 'DATE(' . DryerParticleCountPeer::DATE_TIME . ') >= \'' . $tos . '\' AND DATE(' . DryerParticleCountPeer::DATE_TIME . ') <= \'' . $toe . '\'', self::CUSTOM);
        }
        if ($toCrit) {
            $criterions[] = $toCrit;
        }         
        if (sizeof($criterions)) {

            $this->add($criterions[0]);
            for ($i = 1; $i < sizeof($criterions); $i++) {
                if ($this->critJoin == 'AND') {
                    $this->addAnd($criterions[$i]);
                } else {
                    $this->addOr($criterions[$i]);
                }
            }
        }
        $hs = sfConfig::get('app_dp_grid_headers');
        $sqlField = $hs->getSqlField();
        $sortOrder = $hs->getSortOrder();
        $this->addDescendingOrderByColumn(DryerParticleCountPeer::DATE_TIME );
    }

}