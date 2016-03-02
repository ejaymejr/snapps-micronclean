<?php
// $Source$
// $Id$

use_helper('Javascript', 'SnappsGeneralForm');

$sf_params = sfContext::getInstance()->getRequest()->getParameterHolder();

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td>
        <?php echo submit_tag('search', 'width="100%" height="100%" id="' . $this->getHtmlId() . '_submitTag"') ?>
        <br />
        <?php 
        if ($this->isAjax) {
            $tmpAjaxOptions = $this->datagridAjaxOptions;
            unset($tmpAjaxOptions['with']);
            echo link_to_remote('Clear', $tmpAjaxOptions);
        } else {
            echo link_to('Clear', $this->getBaseUrl());        
        }
        ?>
        </td>        
    <?php if ($columns && is_array($columns) && sizeof($columns)) : ?>
    <?php foreach ($columns as $column) : ?>
    <?php if ($column->getDisplay()) : ?>
    <?php
    $hc = $column->getCfSearch();
    
    $tdClass = '';
    $tdClass .= ' ' . $hc['class_name'];
    
    
    $searchField = '&nbsp;';
    $searchFieldID = $this->getHtmlId() . '_' . $column->getId();
    
    if (array_key_exists('search_enabled', $hc) && $hc['search_enabled']) {
        
        if (!array_key_exists('search_fields', $hc) || !is_array($hc['search_fields'])) {
            $searchField = input_tag($column->getId(), $sf_params->get($column->getId()), 'size="10 id="' . $searchFieldID . '"');
        } else {
            $searchFields = array();
            foreach ($hc['search_fields'] as $fName => $params) {
                $searchFieldID .= $fName;
                
                $inlinePre = array_key_exists('inline_pre', $params) ? $params['inline_pre'] : '';
                
                $extras = array();
                $extraKeys = array('size', 'class');
                foreach ($extraKeys as $key) {
                    if (array_key_exists($key, $params)) {
                        $extras[] = $key . '= "' . $params["$key"] . '"';
                    }
                }
                if ($params['type'] == 'text') {                    
                    $searchFields[] = $inlinePre . input_tag($fName, $sf_params->get($fName), ' id="' . $searchFieldID . '" ' . implode(' ', $extras));
                }
                if ($params['type'] == 'date') {                    
                    $searchFields[] = $inlinePre . HTMLForm::DrawDateInput($fName, $sf_params->get($fName), $searchFieldID, XIDX::next() . $searchFieldID, implode(' ', $extras));
                }       
                if ($params['type'] == 'datetime') {                    
                    $searchFields[] = $inlinePre . HTMLForm::DrawDateTimeInput($fName, $sf_params->get($fName), $searchFieldID, XIDX::next() . $searchFieldID, implode(' ', $extras));
                }    
                
                $filterTemplatePath = $this->tplPathSearchFilter . $params['type'] . '.php';
                if (file_exists($filterTemplatePath)) {
                    include $filterTemplatePath;
                    $searchFields[] = $inlinePre . $filterTag;      
                } 
            }            
            $searchField = implode('<br />', $searchFields);
        }
    }    
    ?><td class="<?php echo $tdClass ?> alignLeft" <?php echo $hc['extra_html'] ? $hc['extra_html'] : '' ?>><?php echo $searchField ?></td>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php else: ?>
    <td width="100" nowrap class="dataGridTableHeaderColumn alignLeft">No column is defined.</td>
    <?php endif; ?>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?>
        <br />
        <?php echo link_to('Clear', $this->getBaseUrl()); ?>
        </td>
</tr>   