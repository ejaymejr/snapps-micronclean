<?php
// $Source$
// $Id$

class SeagateFiscalMonthTable
{
    var $month;
    var $dateURL;
    var $weekURL;
    var $dateMarks;
    
    var $maxWeeks = 5;
    
    function SeagateFiscalMonthTable($month, $dateURL = '', $weekURL = '', $marks = array())
    {
        $this->month = $month;
        $this->dateURL = $dateURL;
        $this->weekURL = $weekURL;
        $this->dateMarks = $marks;
        
    }
    
    function formatDateNumber($text)
    {
        return ltrim($text, '0');
    }
    
    function findMarkClass($date)
    {
        $markClass = '';
        
        $year = substr($date, 0, 4) * 1;
        $month = substr($date, 5, 2) * 1;
        $date = substr($date, 8, 2) * 1;
        
        if (sizeof($this->dateMarks) > 0) {
            
            if (array_key_exists($year, $this->dateMarks)
                && array_key_exists($month, $this->dateMarks["$year"])
                && array_key_exists($date, $this->dateMarks["$year"]["$month"])) {
                
                $markClass = $this->dateMarks["$year"]["$month"]["$date"][1];  
            }
        }
        
        return $markClass;
    }
}
?>
