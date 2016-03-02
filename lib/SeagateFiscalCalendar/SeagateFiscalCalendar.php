<?php
// $Source$
// $Id$

include_once 'SeagateFiscalQuarter.php';
include_once 'SeagateFiscalMonth.php';
include_once 'SeagateFiscalWeek.php';


class SeagateFiscalCalendar
{
    var $year;
    var $monthStart;
    var $dateStart;
    var $quarterMarks;
    var $monthMarks;
    
    var $weeks;
    var $months;
    var $quarters;
    
    function SeagateFiscalCalendar(
            $yyyy, 
            $qm = array(1, 4, 7, 10), 
            $mm = array(1, 5, 9, 14, 18, 22, 27, 31, 35, 40, 44, 48))
    {
        $this->year = $yyyy;
        $this->monthStart = SeagateFiscalCalendarUtils::GetStartMonth($this->year);
        $this->dateStart = SeagateFiscalCalendarUtils::GetStartDate($this->year);
        $this->quarterMarks = $qm;
        $this->monthMarks = $mm;
        
        $this->populateComponents();
    }
    
    function populateComponents()
    {
        $this->populateWeeks();
        $this->populateMonths();
        $this->populateQuarters();
    }
    
    function populateWeeks()
    {                
        $tmpWeeks = array();
        $startDate = $this->dateStart;
        for ($i = 1; $i <= 52; $i++) {
            
            $startYYYY = substr($startDate, 0, 4);
            $startMM = substr($startDate, 5, 2);
            $startDD = substr($startDate, 8, 2);
            
            $endDate = date('Y-m-d', mktime(1, 1, 1, $startMM, $startDD + 6, $startYYYY));
            
            $week = new SeagateFiscalWeek($i, $startDate, $endDate);
            $tmpWeeks[] = $week;
            
            $startDate = date('Y-m-d', mktime(1, 1, 1, $startMM, $startDD + 7, $startYYYY));
        }
        
        $this->weeks = $tmpWeeks;
    }
    
    function populateMonths()
    {
        $totalMonths = sizeof($this->monthMarks);
        
        $tmpMonths = array();
        
        for ($i = 0; $i < $totalMonths; $i++) {
            
            $ws = $this->monthMarks[$i] - 1;
            $we = sizeof($this->weeks) - 1;
            if ($i < ($totalMonths - 1)) $we =  $this->monthMarks[$i + 1] - 2;            
            $tmpMonths[] = new SeagateFiscalMonth(($i + 1), $this->weeks, $ws, $we);                     
        }        
        $this->months = $tmpMonths;
    }
    
    function populateQuarters()
    {
        $totalQuarters = sizeof($this->quarterMarks);
        $tmpQuarters = array();
        
        for ($i = 0; $i < $totalQuarters; $i++) {
            
            $ms = $this->quarterMarks[$i] - 1;
            $me = sizeof($this->months) - 1;
            if ($i < ($totalQuarters - 1)) $me =  $this->quarterMarks[$i + 1] - 2;            
            $tmpQuarters[] = new SeagateFiscalQuarter(($i + 1), $this->months, $ms, $me);                     
        }        
        $this->quarters = $tmpQuarters;
    }
    
    function findQuarter($month)
    {
        $q = false;
        
        // var_dump($this->quarters);
        foreach ($this->quarters as $quarter) {
            
            foreach ($quarter->months as $m) {
                
                // var_dump($m->SN);
                if ($m->SN == $month->SN) {
                    $q = $quarter->SN;         
                }
            }
        }
        
        return $q;
    }
    function findQuarterByMonthSN($monthSN)
    {
        $q = false;
        
        // var_dump($this->quarters);
        foreach ($this->quarters as $quarter) {
            
            foreach ($quarter->months as $m) {
                
                // var_dump($m->SN);
                if ($m->SN == $monthSN) {
                    $q = $quarter->SN;         
                }
            }
        }        
        return $q;
        
    }

    function findMonthByWeekSN($weekSN)
    {
        $m = false;
        
        foreach ($this->months as $month) {
            
            foreach ($month->weeks as $w) {
                if ($w->SN == $weekSN) {
                    $m = $month->SN;         
                }
            }
        }
        
        return $m;
    }
    
    function findWeek($date)
    {
        $w = false;
        
        foreach ($this->weeks as $week) {
            
            foreach ($week->dates as $d) {
                
                if ($d == $date) {
                    $w = $week->SN;         
                }
            }
        }
        
        return $w;
    }

    function FindQuarterByDate($date)
    {
        foreach ($this->quarters as $quarter) {
            foreach ($quarter->months as $month) {
                
                foreach ($month->weeks as $week) {
                    foreach ($week->dates as $d) {
                        
                        if ($d == $date) {
                            return $quarter->SN;        
                        }
                    }
                }
            }
        }

        return false;
    }

    function FindQuarterStartDate($qt)
    {
        $date = '';
        
        $quarter = false;
        foreach ($this->quarters as $tmpQt) {
            if ($tmpQt->SN == $qt) $quarter = $tmpQt;
        }
        if ($quarter) {
            $month = $quarter->months[0];
            $week = $month->weeks[0];            
            $date = $week->dates[0];
        }

        return $date;
    }

    

    function FindQuarterEndDate($qt)
    {
        $date = '';
        
        $quarter = false;
        foreach ($this->quarters as $tmpQt) {
            if ($tmpQt->SN == $qt) $quarter = $tmpQt;
        }
        if ($quarter) {
            $month = $quarter->months[sizeof($quarter->months) - 1];
            $week = $month->weeks[sizeof($month->weeks) - 1];            
            $date = $week->dates[sizeof($week->dates) - 1];
        }

        return $date;
    }

}
?>
