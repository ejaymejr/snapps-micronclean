<?php
// $Source$
// $Id$

class SeagateFiscalQuarter
{
    var $SN;
    var $months;
    var $dateStart;
    var $dateEnd;
    
    function SeagateFiscalQuarter($SN, $months, $start, $end)
    {
        $this->SN = $SN;
        $this->months = array();
        
        for ($i = $start; $i <= $end; $i++) {
            $this->months[] = $months[$i];   
        }
        $this->dateStart = $this->months[0]->dateStart;
        $this->dateEnd = $this->months[sizeof($this->months) - 1]->dateEnd;
    }
    
}
?>
