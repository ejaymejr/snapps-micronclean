<?php
// $Source$
// $Id$


class DataGridColumnHeader
{    
    function __construct($id, $title = false, $sortable = false, $sqlField = false, $width = false, $classNames = false, $extraHTML = false)
    {
        $this->setId($id);
        $this->setTitle($title);
        if (!$this->getTitle()) {
            $this->setTitle(ucfirst($this->getId()));
        }
        $this->setSortable($sortable);
        $this->setSqlField($sqlField);
        $this->setClassNames($classNames);
        $this->setExtraHTML($extraHTML);
        $this->setWidth($width);        
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
    
    
    protected $width;
    public function getWidth() {
    	return $this->width;
    }
    public function setWidth($v) {
    	$this->width = $v;
    }
    protected $classNames;
    public function getClassNames() {
    	return $this->classNames;
    }
    public function setClassNames($v) {
    	$this->classNames = $v;
    }
    protected $extraHTML;
    public function getExtraHTML() {
    	return $this->extraHTML;
    }
    public function setExtraHTML($v) {
    	$this->extraHTML = $v;
    }
    
}