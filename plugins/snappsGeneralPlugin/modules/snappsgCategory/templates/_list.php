<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php echo javascript_tag("
var EventCategorySelected = new YAHOO.util.CustomEvent('Event for Category Selected');
var EventCategoryData = new Array();
");

$ids = array();
$ids['ajax_pager'] = XIDX::next();
$ids['loading'] = XIDX::next();

$keywordField = sfConfig::get('snappsg_q_category', 'q');


$pagerNavigationAjaxOptions = array(
        'url'       => 'snappsgCategory/ajaxSearch', 
        'with'      => "'${keywordField}=" . $sf_params->get($keywordField) . "&co=" . $sf_params->get('co') . "&sort_acc_no=" . $sf_params->get('sort_acc_no') . "'",
        'update'    => 'DIVlookupCategoryList',
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'before'    => 'showLoader();',
        'complete'  => 'hideLoader();',
        'type'      => 'synchronous');
?>
<div id="DIVdataGridContainerCategory" class="defaultGrid dataGridContainer " style="width:100%">
    <div class="dataGridContent LightHeader">
    <table class="dataGridTable" style="width:100%;" cellpadding="4" cellspacing="2" border="0">
    <tr class="dataGridTableHeader">
        <td width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle">No</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle">Type</td>
        <td width="70" class="dataGridTableHeaderColumn alignCenter alignMiddle" nowrap>Account No</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle">Category</td>
        <td width="200" class="dataGridTableHeaderColumn alignLeft alignMiddle">Company</td>
    </tr>    
    <?php include_partial('snappsgCategory/pager_list', array('pager' => $pager)) ?>
    </table>
    </div>    
    <div class="dataGridHeader">
    <div class="dataGridPagination">    
    <?php 
        // ajax pagination (but not the remote_pager)
        echo pager_navigation_remote($pager, $pagerNavigationAjaxOptions);
        
        // normal pagination
        // echo pager_navigation($pager, '@snappsgCategoryList', array('query_string' => $keywordField . '=' . $sf_params->get($keywordField) . '&co=' . $sf_params->get('co'))); 
    ?>
    </div>
    Total: <?php echo $totalRecord; ?> record(s) - click the line to select</div>
</div>

<?php 
/*
echo remote_pager(array(
  'url'      => '@snappsgCategoryAjaxList',
  'with' => "'$keywordField=' + escape(\$F('" . $keywordField . "'))",
  'update'   => $ids['ajax_pager'],    
  'loading'  => "Element.show('" . $ids['loading'] . "')",
  'complete' => "Element.hide('" . $ids['loading'] . "')",
  'script'  => true
), $pager)
<noscript>
  <?php // echo pager_navigation($pager, $sf_request->getModuleAction()) ?>
</noscript>
*/
?>


