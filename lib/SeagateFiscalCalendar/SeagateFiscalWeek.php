<?php
// $Source$
// $Id$


class SeagateFiscalWeek
{
    var $SN;
    var $dateStart;
    var $dateEnd;
    
    var $dates;
    
    function SeagateFiscalWeek($SN, $ds, $de)
    {
        $this->SN = $SN;
        $this->dateStart = $ds;
        $this->dateEnd = $de;       
        
        $this->dates = array();
        
        $curDate = $ds;
        while ($curDate <= $de) {
            $this->dates[] = $curDate;
            
            
            $startYYYY = substr($curDate, 0, 4);
            $startMM = substr($curDate, 5, 2);
            $startDD = substr($curDate, 8, 2);
            
            $curDate = date('Y-m-d', mktime(1, 1, 1, $startMM, $startDD + 1, $startYYYY));          
            
        }
    }
}
?>
