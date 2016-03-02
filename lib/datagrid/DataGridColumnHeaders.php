<?php
// $Source$
// $Id$


class DataGridColumnHeaders
{
    
    function __construct()
    {
        $this->headers = array();
    }
    
    
    public function getSQLField()
    {
        if ($this->headers && sizeof($this->headers)) {
            foreach ($this->headers as $h) {
                if (strtoupper($h->getId()) == strtoupper($this->getSortBy())) {
                    return $h->getSqlField();
                }
            }
        }        
        return false;
    }
    
    
    
    public function addHeader($v)
    {
        if (is_array($v)) {            
            $h = new DataGridColumnHeader(
                    $v[0],
                    (sizeof($v) > 1) ? $v[1] : false,
                    (sizeof($v) > 2) ? $v[2] : false,
                    (sizeof($v) > 3) ? $v[3] : false,
                    (sizeof($v) > 4) ? $v[4] : false,
                    (sizeof($v) > 5) ? $v[5] : false,
                    (sizeof($v) > 6) ? $v[6] : false
                    );            
        } else {
            $h = $v;
        }
        if ($h instanceof DataGridColumnHeader) {
            $this->headers[] = $h;
        }        
    }
    
    protected $sortBy;
    public function getSortBy() {
    	return $this->sortBy;
    }
    public function setSortBy($v) {
    	$this->sortBy = $v;
    }
    protected $sortOrder;
    public function getSortOrder() {
    	return $this->sortOrder;
    }
    public function setSortOrder($v) {
        $v = strtoupper($v);
        if (in_array($v, array('ASC', 'DESC'))) {
    	   $this->sortOrder = $v;
        }
    }
    protected $headers;
    public function getHeaders() {
    	return $this->headers;
    }
    public function setHeaders($v) {
    	$this->headers = $v;
    }
}
