<?php
// $Source$
// $Id$

class SeagateFiscalMonth
{
    var $SN;
    var $weeks;
    var $dateStart;
    var $dateEnd;
    
    function SeagateFiscalMonth($SN, $weeks, $start, $end)
    {
        $this->SN = $SN;
        $this->weeks = array();
        
        for ($i = $start; $i <= $end; $i++) {
            $this->weeks[] = $weeks[$i];   
        }
        
        $this->dateStart = $this->weeks[0]->dateStart;
        $this->dateEnd = $this->weeks[sizeof($this->weeks) - 1]->dateEnd;
        
    }
}
?>
