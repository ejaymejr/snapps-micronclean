<?php
class PayComputeBasic
{
    var $workDays = 0;
    var $reqHour  = 212;    //--------- no hours required | conflict with Tk_worktemplate_detail
    var $dHour    = 8;      //--------- no hours required per day | conflict with Tk_worktemplate_detail
    var $reqWeek  = 4;      //--------- no of weeks
    var $dtr;               //--------- dtr summary Data
    var $mbasic   = 0;      //--------- basic per month

    function _construct()
    {
        
    }
    
    function _destruct()
    {
        
    }    
    
    public function SetNoWeeksWork($week)
    {
        $this->reqWeek = $week;
    }

    public function SetWorkingDays($wday)
    {
        $this->workDays = $wday;
    }
    
    public function SetRequiredHour($hmon)
    {
        $this->reqHour = $hmon;
    }
    
    public function SetDtrComputation($dtr)
    {
        $this->dtr = $dtr;
    }
    
    public function SetSalary($salary)
    {
        $this->mbasic = $salary;
    }
    
    public function GetHoursPerDay()
    {
        //-------< (212hrs / 4weeks) / no of working days 
        return (($this->reqHour/$reqWeek) / $this->workDays); 
    }
    
    public function GetMinutesPerDay()
    {
        return ($this->GetHoursPerDay * 60);
    }
        
    public function GetSecondsPerDay()
    {
        return ($this->GetMinutesPerDay * 60);
    }    
    
    
    

    protected function computePerDaySalary(){
        return ($this->mbasic/$this->reqHour) * $this->dHour ;    
    }    

    protected function computePerHourSalary(){
        return ($this->mbasic/$this->reqHour);    
    }
    
    protected function computePerMinuteSalary(){
        return ($this->mbasic/$this->reqHour) / 60;    
    }    

    public function DoCompute()
    {
        
    }
    
}
?>