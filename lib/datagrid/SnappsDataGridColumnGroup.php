<?php
// $Source$
// $Id$


class SnappsDataGridColumnGroup
{
    
    function __construct()
    {
        
    }
    
    protected $htmlId;
    public function getHtmlId() {
        return $this->htmlId;
    }
    public function setHtmlId($v) {
        $this->htmlId = $v;
    }
    protected $htmlClass;
    public function getHtmlClass() {
        return $this->htmlClass;
    }
    public function setHtmlClass($v) {
        $this->htmlClass = $v;
    }
    

    protected $SN;
    public function getSN() {
        return $this->SN;
    }
    public function setSN($v) {
        $this->SN = $v;
    }
    
    protected $title;
    public function getTitle() {
    	return $this->title;
    }
    public function setTitle($v) {
    	$this->title = $v;
    }
    
    protected $columns;
    public function getColumns() {
        return $this->columns;
    }
    public function setColumns($v) {
        $this->columns = $v;
    }
}