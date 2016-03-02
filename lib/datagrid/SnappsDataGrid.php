<?php
// $Source$
// $Id$


class SnappsDataGrid
{    
    protected $configPath;
    protected $tplPath;
    protected $tplPathContainer;
    protected $tplPathHeader;
    protected $tplPathSearch;
    protected $tplPathSearchFilter;
    protected $tplPathRows;
    protected $tplPathNavigation;
    
    
    function __construct($configFile = false, $pager = false, $criteria = false)
    {
        $req = sfContext::getInstance()->getRequest();
        
        if ($pager !== false) {
            $this->pager = $pager;
        }
        if ($criteria) {
            $this->criteria = $criteria;
        }
        if ($configFile) {
            
            $configPath = $configFile;
            if (strpos($configFile, '.yml') === false) {
                $configPath = SF_ROOT_DIR . DIRECTORY_SEPARATOR . 
                                'apps' . DIRECTORY_SEPARATOR . 
                                SF_APP . DIRECTORY_SEPARATOR . 
                                'modules' . DIRECTORY_SEPARATOR . 
                                $req->getParameter('module') . DIRECTORY_SEPARATOR . 
                                'config' . DIRECTORY_SEPARATOR . 
                                $configFile . '.yml';
            }
            $this->configPath = $configPath;
            if (!file_exists($this->configPath) || is_dir($this->configPath)) {
                throw new sfFileException($this->configPath . ' not found.');
            }
            $configArray = sfYaml::load($configPath);
            
            if ($configArray && is_array($configArray) && sizeof($configArray)) {                
                $this->parseConfig($configArray);
            }
        }
        
        $this->tplPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
        $this->tplPathContainer = $this->tplPath . 'container.php';
        $this->tplPathHeader = $this->tplPath . 'header.php';
        $this->tplPathSearch = $this->tplPath . 'search.php';
        $this->tplPathSearchFilter = $this->tplPath . 'filter/';
        $this->tplPathRows = $this->tplPath . 'rows.php';
        $this->tplPathNavigation = $this->tplPath . 'navigation.php';
          
        
        $this->constructJsObjectId();
    }
    
    
    public function HTML()
    {
        $html = '';        
        
        ob_start();
        include $this->tplPathContainer;
        $html .= ob_get_contents();
        ob_end_clean();
        
        return $html;
    }
    
    
    public function getSQLField()
    {
        if ($this->columns && sizeof($this->columns)) {
            foreach ($this->columns as $c) {
                if (strtoupper($c->getId()) == strtoupper($this->getSortBy())) {
                    return $c->getSqlField();
                }
            }
        }        
        return false;
    }
    
    
    

    protected $sortBy;
    public function getSortBy() {
        return $this->sortBy;
    }
    public function setSortBy($v) {
        foreach ($this->columns as $column) {
            if ($column->getId() == $v) {
                $this->sortBy = $v;
            }
        }
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
    
    
    public function getConfigPath() {
    	return $this->configPath;
    }
    public function setConfigPath($v) {
    	$this->configPath = $v;
    }
    
    
    
    
    protected $htmlId;
    public function getHtmlId() {
    	return $this->htmlId;
    }
    public function setHtmlId($v) {
    	$this->htmlId = $v;
    	$this->constructJsObjectId();
    }
    protected $htmlClass;
    public function getHtmlClass() {
    	return $this->htmlClass;
    }
    public function setHtmlClass($v) {
    	$this->htmlClass = $v;
    }
    
    protected $width;
    public function getWidth() {
    	return $this->width;
    }
    public function setWidth($v) {
    	$this->width = $v;
    }
    
    protected $columns;
    public function getColumns() {
    	return $this->columns;
    }
    public function setColumns($v) {
    	$this->columns = $v;
    }
    protected $columnGroups;
    public function getColumnGroups() {
        return $this->columnGroups;
    }
    public function setColumnGroups($v) {
        $this->columnGroups = $v;
    }
    
    
    protected $rows;
    public function getRows() {
    	return $this->rows;
    }
    public function setRows($v) {
    	$this->rows = $v;
    }
    protected $rowGroups;
    public function getRowGroups() {
    	return $this->rowGroups;
    }
    public function setRowGroups($v) {
    	$this->rowGroups = $v;
    }
    
    protected $header;
    public function getHeader() {
    	return $this->header;
    }
    public function setHeader($v) {
    	$this->header = $v;
    }
    
    protected $baseURL;
    public function getBaseURL() {
    	return $this->baseURL;
    }
    public function setBaseURL($v) {
    	$this->baseURL = $v;
    }
    
    

    protected $criteria;
    public function getCriteria() {
        return $this->criteria;
    }
    public function setCriteria($v) {
        $this->criteria = $v;
    }
    
    protected $pager;
    public function getPager() {
    	return $this->pager;
    }
    public function setPager($v) {
    	$this->pager = $v;
    }
    
    protected $isAjax;
    public function getIsAjax() {
    	return $this->isAjax;
    }
    public function setIsAjax($v) {
    	$this->isAjax = $v;
    }
    protected $ajaxContainerId;
    public function getAjaxContainerId() {
    	return $this->ajaxContainerId;
    }
    public function setAjaxContainerId($v) {
    	$this->ajaxContainerId = $v;
    }
    
    protected $jsObject;
    public function getJsObject() {
    	return $this->jsObject;
    }
    public function setJsObject($v) {
    	$this->jsObject = $v;
    }
    
    protected function constructJsObjectId()
    {        
        $this->jsObject = 'YAHOO.snapps.datagrid.' . $this->getHtmlId();
    }
    
    
    public function processRow()
    {
        
    }
    
    protected function parseConfig($cArr)
    {
        //print_r($cArr);
        
        $c = array();
        foreach ($cArr as $id => $c) {
            // do nothing;
        }
        
        $plainKeys = array(
            'base_url' => 'baseURL',
            'html_id' => 'htmlId',
            'html_class' => 'htmlClass',
            'sort_by' => 'sortBy',
            'sort_order' => 'sortOrder');
        
        $colPlainKeys = array(
            'title' => 'setTitle',
            'display' => 'setDisplay',
            'sortable' => 'setSortable',
            'sql_field' => 'setSqlField',
            'width'     => 'setWidth'
        );
        
        $colConfigPlainKeys = array(
            'class_name', 'extra_html', 'search_enabled', 'search_fields', 'truncate_length', 'truncate_text'
        );
        
        
        $defaultColConfig = SnappsDataGridCellConfig::getTemplate();
        $defaultCfHeader = $defaultColConfig;
        $defaultCfSearch = $defaultColConfig;
        $defaultCfData = $defaultColConfig;        
        
        
        foreach ($plainKeys as $key => $m) {        
            if (array_key_exists($key, $c)) {
                $this->$m = $c["$key"];
            }
        }
        
        
        if (array_key_exists('columns', $c)) {
            $cols = $c['columns'];
            if ($cols && is_array($cols) && sizeof($cols)) { 
                
                $colObjs = array();
                foreach ($cols as $colId => $cf) {
                    $tmp = new SnappsDataGridColumn($colId);
                    
                    foreach ($colPlainKeys as $key => $m) {                    
                        if (array_key_exists($key, $cf)) {
                            $tmp->$m($cf["$key"]);
                        }
                    }
                    
                    $cfHeader = $defaultCfHeader;
                    if (array_key_exists('header', $cf)) {
                        if (is_array($cf['header'])) {                            
                            foreach ($colConfigPlainKeys as $key) {                    
                                if (array_key_exists($key, $cf['header'])) {
                                    $cfHeader["$key"] = $cf['header']["$key"];
                                }
                            }
                        }
                    }
                    $cfSearch = $defaultCfSearch;
                    if (array_key_exists('search', $cf)) {
                        if (is_array($cf['search'])) {                            
                            foreach ($colConfigPlainKeys as $key) {                    
                                if (array_key_exists($key, $cf['search'])) {
                                    $cfSearch["$key"] = $cf['search']["$key"];
                                }
                            }
                        }
                    }
                    $cfData = $defaultCfData;
                    if (array_key_exists('data', $cf)) {
                        if (is_array($cf['data'])) {                            
                            foreach ($colConfigPlainKeys as $key) {                    
                                if (array_key_exists($key, $cf['data'])) {
                                    $cfData["$key"] = $cf['data']["$key"];
                                }
                            }
                        }
                    }
                    
                    $tmp->setCfHeader($cfHeader);
                    $tmp->setCfSearch($cfSearch);
                    $tmp->setCfData($cfData);
                    
                    $colObjs[] = $tmp;                
                }                
                $this->setColumns($colObjs);
            }
        }        
    }
}