<?php

/**
 * Subclass for performing query and update operations on the 'particle_data' table.
 *
 *
 *
 * @package lib.model.particle
 */
class ParticleDataPeer extends BaseParticleDataPeer
{
    const CUSTOM = "CUSTOM";
    
    public static function GetPager($cd)
    {
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 20);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }

        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1);

        $c = clone($cd);
        $pager = new sfPropelPager('ParticleData', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }
    
    public static function GetDataByDate($sdt, $edt, $cust=null, $dept=null, $gtype=null)
    {
        $c = new Criteria();
        $c->add(self::DATE_TIME,  'DATE(' . self::DATE_TIME . ') >= \'' . $sdt . '\' AND DATE(' . self::DATE_TIME . ') <= \'' . $edt . '\'', self::CUSTOM);
        $c->add(self::CUSTOMER, $cust);
        if ($dept) $c->add(self::DEPARTMENT, $dept);
        switch($gtype){
            case '10':
                $c->add(self::TYPE, '%class 10%', criteria::LIKE);
                break;
            case '100':
                $c->add(self::TYPE, '%class 100%', criteria::LIKE);
                break;
        }
        $c->addAscendingOrderByColumn(self::DATE_TIME);
        $rs = self::doSelect($c);
        return $rs;
    }
}


