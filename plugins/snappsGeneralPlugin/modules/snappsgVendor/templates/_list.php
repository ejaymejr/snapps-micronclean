<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php echo javascript_tag("
var EventVendorSelected = new YAHOO.util.CustomEvent('Event for Vendor Selected');
var EventVendorData = new Array();
");

$ids = array();
$ids['ajax_pager'] = XIDX::next();
$ids['loading'] = XIDX::next();

$keywordField = sfConfig::get('snappsg_q_vendor', 'q');


$pagerNavigationAjaxOptions = array(
        'url' => 'snappsgVendor/ajaxSearch', 
        'with' => "'${keywordField}=" . $sf_params->get($keywordField) . "&co=" . $sf_params->get('co') . "'",
        'update' => 'DIVlookupVendorList',
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'before'   => 'showLoader();',
        'complete'  => 'hideLoader();',
        'type'      => 'synchronous');
?>
<div id="DIVdataGridContainerVendor" class="defaultGrid dataGridContainer" style="width:100%">
    <div class="dataGridContent LightHeader">
    <table class="dataGridTable" style="width:100%;" cellpadding="4" cellspacing="2" border="0">
    <tr class="dataGridTableHeader">
        <td width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle">No</td>
        <td class="dataGridTableHeaderColumn alignCenter alignMiddle">Vendor</td>
    </tr>    
    <?php include_partial('snappsgVendor/pager_list', array('pager' => $pager)) ?>
    </table>
    </div>    
    <div class="dataGridHeader">
    <div class="dataGridPagination">    
    <?php echo pager_navigation_remote($pager, $pagerNavigationAjaxOptions); ?>
    </div>
    Total: <?php echo $totalRecord; ?> record(s) - click the line to select</div>
</div>



