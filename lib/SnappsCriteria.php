<?php
// $Source$
// $Id$


class SnappsCriteria extends Criteria
{
    protected $critJoin = 'AND';
    
    protected $columns;
    protected $sortBy;
    protected $sortOrder;
    
    protected $exactSearchFields;
    protected $multipleValueSearchFields;
    protected $textSearchFields;
    protected $textAsColumnSearchFields;
    protected $rangeSearchFields;
    protected $havingSearchFields;
    
    protected $defaultSortings;
    
    protected $criterions;
    protected $havings;
    
    function __construct($columns, $sortBy, $sortOrder)
    {
        $this->columns = $columns;  
        $this->sortBy = $sortBy;
        $this->sortOrder = $sortOrder;      
        
        $this->setIgnoreCase(true);
        
        
        $this->criterions = array();
        
        $this->init();
        
        $this->addSearchExact();
        $this->addSearchMultipleValue();
        $this->addSearchText();
        $this->addSearchTextAsColumn();
        $this->addSearchRange();
                
        if (sizeof($this->criterions)) {
            
            $this->add($this->criterions[0]);
            for ($i = 1; $i < sizeof($this->criterions); $i++) {
                if ($this->critJoin == 'AND') {
                    $this->addAnd($this->criterions[$i]);
                } else {
                    $this->addOr($this->criterions[$i]);                    
                }
            }
        }
        
        $this->addSearchHaving();        
        $this->addSorting();        
    }
    
    
    protected function init()
    {
        
    }

    protected function addSearchExact()
    {
        if (!$this->exactSearchFields || !sizeof($this->exactSearchFields)) {
            return;
        }
        $req = sfContext::getInstance()->getRequest();
        foreach ($this->exactSearchFields as $f) {
            foreach ($this->columns as $column) {
                
                $cfSearch = $column->getCfSearch();
                if ($cfSearch && $cfSearch['search_enabled'] && $column->getId() == $f && $column->getSqlField()) {
                
                    
                    $fieldCrit = false;
                    $fieldCrits = array();
                    
                    $str = $req->getParameter($f, '');
                    
                    if ($str != '' && $str != '-1') {
                    
                        $isAnd = false;
                        $isOr = false;
                        
                        $tmpAnds = explode('&&', $str);
                        $tmpOrs = explode('||', $str);
                        
                        if (sizeof($tmpAnds) > 1 || (sizeof($tmpAnds) <= 1 && sizeof($tmpOrs) <= 1))  {
                            foreach ($tmpAnds as $str) {
                                
                                $str = trim($str);
                            
                                if ($str != '' && $str != '-1') {
                                    $str = mysql_real_escape_string($str);
                                    
                                    if (in_array(strtoupper($str), array('\"NA\"', 'N/A'))) {
                                        $fieldCrits[] = $this->getNewCriterion($column->getSqlField(), '', self::EQUAL);
                                        
                                    } else {
                                        $fieldCrits[] = $this->getNewCriterion($column->getSqlField(), $str);
                                    }
                                }                            
                            }                        
                            for ($i = 0; $i < sizeof($fieldCrits); $i++) {
                                if ($i == 0) {
                                    $fieldCrit = $fieldCrits[$i];
                                } else {
                                    $fieldCrit->addAnd($fieldCrits[$i]);
                                }
                            }
                        } else if (sizeof($tmpOrs)) {
                            foreach ($tmpOrs as $str) {
                                
                                $str = trim($str);
                            
                                if ($str != '' && $str != '-1') {
                                    $str = mysql_real_escape_string($str);
                                    
                                    if (in_array(strtoupper($str), array('\"NA\"', 'N/A'))) {
                                        $fieldCrits[] = $this->getNewCriterion($column->getSqlField(), '', self::EQUAL);
                                        
                                    } else {
                                        $fieldCrits[] = $this->getNewCriterion($column->getSqlField(), $str);
                                    }
                                }                            
                            }                        
                            for ($i = 0; $i < sizeof($fieldCrits); $i++) {
                                if ($i == 0) {
                                    $fieldCrit = $fieldCrits[$i];
                                } else {
                                    $fieldCrit->addOr($fieldCrits[$i]);
                                }
                            }
                        }
                        
                        if ($fieldCrit !== false) {
                            $this->criterions[] = $fieldCrit;
                        }
                    }
                }
            }
        }
    }
    protected function addSearchMultipleValue()
    {
        if (!$this->multipleValueSearchFields || !sizeof($this->multipleValueSearchFields)) {
            return;
        }
        $req = sfContext::getInstance()->getRequest();
        foreach ($this->multipleValueSearchFields as $f) {
            foreach ($this->columns as $column) {
                
                $cfSearch = $column->getCfSearch();
                if ($cfSearch && $cfSearch['search_enabled'] && $column->getId() == $f && $column->getSqlField()) {
                
                    $str = $req->getParameter($f, false);
                    
                    $values = array();
                    if (!is_array($str) && $str != '') {
                        
                        $str = mysql_real_escape_string($str);
                        $values[] = $str;
                    } else if (is_array($str) && sizeof($str)) {
                        foreach ($str as $s) {
                            $s = mysql_real_escape_string($s);
                            $values[] = $s;
                        }
                    }
                     
                    if (sizeof($values) > 0) {
                        
                        $this->criterions[] = $this->getNewCriterion($column->getSqlField(), $values, self::IN);
                            
                    }
                }
            }
        }
    }
    protected function addSearchText()
    {
        if (!$this->textSearchFields || !sizeof($this->textSearchFields)) {
            return;
        }
        $req = sfContext::getInstance()->getRequest();
        foreach ($this->textSearchFields as $f) {
            foreach ($this->columns as $column) {
                
                $cfSearch = $column->getCfSearch();
                if ($cfSearch && $cfSearch['search_enabled'] && $column->getId() == $f && $column->getSqlField()) {
                
                    $str = $req->getParameter($f, '');
                    $str = mysql_real_escape_string($str);
                    if ($str != '') {
                        
                        if (in_array(strtoupper($str), array('\"NA\"', 'N/A'))) {
                            $this->criterions[] = $this->getNewCriterion($column->getSqlField(), '', self::EQUAL);
                            
                        } else {
                            $this->criterions[] = $this->getNewCriterion($column->getSqlField(), "%$str%", self::LIKE);
                        }
                    }
                }
            }
        }
    }
    
    protected function addSearchTextAsColumn()
    {
        
    }
    
    
    
    protected function addSearchRange()
    {
        if (!$this->rangeSearchFields || !sizeof($this->rangeSearchFields)) {
            return;
        }
        $req = sfContext::getInstance()->getRequest();
        foreach ($this->rangeSearchFields as $f => $ranges) {
            foreach ($this->columns as $column) {
                $cfSearch = $column->getCfSearch();
                
                if ($cfSearch && $cfSearch['search_enabled'] && $column->getId() == $f && $column->getSqlField()) {
                                        
                    $min = mysql_real_escape_string($req->getParameter($ranges[0], ''));
                    $max = mysql_real_escape_string($req->getParameter($ranges[1], ''));
                    
                    $searchType = 'standard';
                    foreach ($cfSearch['search_fields'] as $key => $params) {
                        $searchType = $params['type'];
                    }
                    
                    // normalize max                    
                    if ($max != '' && $searchType == 'datetime') {
                        // echo $max . ' ';
                        if (strlen($max) == 10) $max .= ' 23:59:59';
                        if (strlen($max) == 13) $max .= ':59:59';
                        if (strlen($max) == 16) $max .= ':59';
                        // echo $max;
                    }
                    
                    
                    $pxCrit = false;
                    if ($min != '') {
                        if ($searchType == 'date') {                            
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), 'DATE(' . $column->getSqlField() . ') >= \'' . $min . '\'', self::CUSTOM);
                        } else {
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), $min, self::GREATER_EQUAL);
                        }
                    }
                    if ($max != '') {
                        if ($searchType == 'date') {
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), 'DATE(' . $column->getSqlField() . ') <= \'' . $max . '\'', self::CUSTOM);
                        } else {
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), $max, self::LESS_EQUAL);
                        }
                    }
                    if ($min != '' && $max != '') {
                        if ($min > $max) {
                            $dtmp = $min;
                            $min = $max;
                            $max = $dtmp;
                        }           
                        if ($searchType == 'date') {
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), 'DATE(' . $column->getSqlField() . ') >= \'' . $min . '\' AND DATE(' . $column->getSqlField() . ') <= \'' . $max . '\'', self::CUSTOM);
                        } else { 
                            $pxCrit = $this->getNewCriterion($column->getSqlField(), $min, self::GREATER_EQUAL);
                            $pxCrit->addAnd($this->getNewCriterion($column->getSqlField(), $max, self::LESS_EQUAL));
                        }
                    }
                    if ($pxCrit) {
                        $this->criterions[] = $pxCrit;
                    }                    
                }
            }
        }
        
    }
    
    protected function addSearchHaving()
    {
        $this->prepareSearchHaving();
        if (sizeof($this->havings)) {
            $havingCrit = $this->havings[0];
            for ($i = 1; $i < sizeof($this->havings); $i++) {
                if ($this->critJoin == 'AND') {
                    $havingCrit->addAnd($this->havings[$i]);
                } else {
                    $havingCrit->addOr($this->havings[$i]);                    
                }
            }            
            $this->addHaving($havingCrit);            
        }   
        
    }
    protected function prepareSearchHaving()
    {
        
    }
    
    protected function addSorting()
    {    
        $sqlField = false;        
        foreach ($this->columns as $column) {
            if ($column->getId() == $this->sortBy) {
                $sqlField = $column->getSqlField();
            }
        }
        $sortOrder = $this->sortOrder;
        if ($sqlField) {
            if ($sortOrder == 'ASC') {
                $this->addAscendingOrderByColumn($sqlField);
            } else {
                $this->addDescendingOrderByColumn($sqlField);                
            }
        }
    
        if (!$this->defaultSortings || !sizeof($this->defaultSortings)) {
            return;
        }
        foreach ($this->defaultSortings as $key => $order) {
            if ($sqlField != $key) {
                if ($order == 'DESC') {
                    $this->addDescendingOrderByColumn($key);
                } else {
                    $this->addAscendingOrderByColumn($key);
                }
            }
        }
    }
}