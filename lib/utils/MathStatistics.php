<?php

class MathStatistics
{
    protected $usl;
    protected $vals;
    function __construct($vals, $usl)
    {
        $this->vals = $vals;
        $this->usl = $usl;
        
        if (!is_array($this->vals)) {
            return;
        }
        $this->compute();        
    }
    
    protected function compute()
    {
        $this->n = sizeof($this->vals);
        $this->total = 0;
        foreach ($this->vals as $v) {
            $this->total += $v;
        }
        
        $this->mean = (float)$this->total / (float)$this->n;
        
        
        if ($this->n < 2) {
            return;
        }
        // calculate standard deviation
        $sumOfDiffSqrs = 0;
        foreach ($this->vals as $v) {
            
            $diffSQR = ($v - $this->mean) * ($v - $this->mean);       
            $sumOfDiffSqrs += $diffSQR;
        }
        $this->std = sqrt($sumOfDiffSqrs / sizeof($this->vals));
        
        $this->UCL = $this->mean + (3 * $this->std);
        $this->LCL = $this->mean - (3 * $this->std);
        
        $this->cpku = ($this->usl - $this->mean) / (3 * $this->std);
        $this->cpk = $this->cpku;
        
    }
    
    protected $n = 0;
    public function getN() {
    	return $this->n;
    }
    protected $total = 0;
    public function getTotal() {
    	return $this->total;
    }
    protected $mean = 0;
    public function getMean() {
    	return $this->mean;
    }
    protected $median = 0;
    public function getMedian() {
    	return $this->median;
    }
    protected $std = 0;
    public function getStd() {
    	return $this->std;
    }
    protected $LCL = 0;
    public function getLCL() {
    	return $this->LCL;
    }
    protected $UCL = 0;
    public function getUCL() {
    	return $this->UCL;
    }    
    
    protected $cpkl = 0;
    public function getCpkl() {
    	return $this->cpkl;
    }
    protected $cpku = 0;
    public function getCpku() {
        return $this->cpku;
    }
    protected $cpk = 0;
    public function getCpk() {
        return $this->cpk;
    }
}