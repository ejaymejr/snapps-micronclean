<?php
// $Source$
// $Id$


class SnappsDataGridColumn
{    
    function __construct($id, $title = false, $display = true, $sortable = false, $sqlField = false, $width = false,
            $cfHeader = false, $cfSearch = false, $cfData = false)
    {
        $this->setId($id);
        $this->setTitle($title);
        if (!$this->getTitle()) {
            $this->setTitle(ucfirst($this->getId()));
        }
        $this->display = $display;
        $this->setSortable($sortable);
        $this->setSqlField($sqlField);
        $this->setWidth($width);
        
        $defaultConfig = SnappsDataGridCellConfig::getTemplate();
        $this->cfHeader = $cfHeader ? $cfHeader : $defaultConfig;
        $this->cfSearch = $cfSearch ? $cfSearch : $defaultConfig;
        $this->cfData   = $cfData ? $cfData : $defaultConfig;
    }        

    protected $id;
    public function getId() {
        return $this->id;
    }
    public function setId($v) {
        $this->id = $v;
    }
    protected $title;
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($v) {
        $this->title = $v;
    }
    
    protected $SN;
    public function getSN() {
    	return $this->SN;
    }
    public function setSN($v) {
    	$this->SN = $v;
    }
    protected $display;
    public function getDisplay() {
    	return $this->display;
    }
    public function setDisplay($v) {
    	$this->display = $v;
    }

    protected $width;
    public function getWidth() {
        return $this->width;
    }
    public function setWidth($v) {
        $this->width = $v;
    }
    protected $sortable;
    public function getSortable() {
        return $this->sortable;
    }
    public function setSortable($v) {
        $this->sortable = $v;
    }
    
    protected $sqlField;
    public function getSqlField() {
        return $this->sqlField;
    }
    public function setSqlField($v) {
        $this->sqlField = $v;
    }   
    
    
    
    
    protected $cfHeader;
    public function getCfHeader() {
    	return $this->cfHeader;
    }
    public function setCfHeader($v) {
    	$this->cfHeader = $v;
    }
    
    protected $cfSearch;
    public function getCfSearch() {
    	return $this->cfSearch;
    }
    public function setCfSearch($v) {
    	$this->cfSearch = $v;
    }
    protected $cfData;
    public function getCfData() {
    	return $this->cfData;
    }
    public function setCfData($v) {
    	$this->cfData = $v;
    }
}