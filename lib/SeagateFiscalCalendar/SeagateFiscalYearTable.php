<?php
// $Source$
// $Id$


class SeagateFiscalYearTable
{
    var $fcal;
    var $dateURL;
    var $weekURL;
    var $monthURL;
    var $dateMarks;
    
    function SeagateFiscalYearTable($fcal, $dateURL = '', $weekURL = '', $monthURL = '')
    {
        $this->fcal = $fcal;
        $this->dateURL = $dateURL;
        $this->weekURL = $weekURL;
        $this->monthURL = $monthURL;
        $this->dateMarks = array();
    }
    
    function setDateMarks($marks)
    {
        $this->dateMarks = $marks;
    }
}
?>
