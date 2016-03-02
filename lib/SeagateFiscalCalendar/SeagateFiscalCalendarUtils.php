<?php
// $Source$
// $Id$


class SeagateFiscalCalendarUtils
{
    
    function SeagateFiscalCalendarUtils()
    {
    }
    
    public static function IsValidYear($yyyy)
    {
        $calYears = sfConfig::get('app_seagate_calendar_years');
        
        foreach ($calYears as $year => $start) {
            if ($year == $yyyy) return true;   
        }
        
        return false;
    }
    
    public static function GetStartMonth($yyyy)
    {
        $calYears = sfConfig::get('app_seagate_calendar_years');
        
        $date = false;
        
        foreach ($calYears as $year => $start) {
            if ($year == $yyyy) $date = $start[0];   
        }
        
        return $date;
    }
    public static function GetStartDate($yyyy)
    {
        $calYears = sfConfig::get('app_seagate_calendar_years');
        
        $date = false;
        
        foreach ($calYears as $year => $start) {
            if ($year == $yyyy) $date = $start[1];   
        }
        
        return $date;
    }
    
    public static function FindSeagateFiscalYear($date)
    {
        $calYears = sfConfig::get('app_seagate_calendar_years');
        
        $year = false;
        
        foreach ($calYears as $yyyy => $start) {
            if ($date >= $start[1]) $year = $yyyy;   
        }
        
        return $year;
    }
    
    public static function GetMonthName($m)
    {
        $gregMonth = $m + 6;
        if ($gregMonth > 12) $gregMonth = $gregMonth - 12;
        
        return date('M', mktime(1,1,1,$gregMonth,1,2000));
    }
    public static function GetMonthYearName($m, $y)
    {
        $y = $y - 1;
        $gregMonth = $m + 6;
        if ($gregMonth > 12) {
            $gregMonth = $gregMonth - 12;
            $y = $y + 1;
        }
        
        return date('M Y', mktime(1,1,1,$gregMonth,1,$y));
    }
}
?>
