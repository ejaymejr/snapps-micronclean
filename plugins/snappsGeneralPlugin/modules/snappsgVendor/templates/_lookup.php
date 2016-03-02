<?php

$pager = snappsVendorPeer::GetPager();
$totalRecord = snappsVendorPeer::GetTotalRecord();


$ids = array();
$ids['container'] = 'DIVlookupVendor';
$ids['handle'] = XIDX::next();
$ids['content'] = 'DIVlookupVendorList';
$ids['keyword'] = sfConfig::get('snappsg_q_vendor', 'q');

$jsQueryString = "'" . $ids['keyword'] . "=' + escape(\$F('" . $ids['keyword'] . "'))";
?>
<div id="<?php echo $ids['container'] ?>" style="display:none;" class="div-lookup">
<h2 id="<?php echo $ids['handle'] ?>" class="lookup-handle">Select Vendor</h2>



<?php
/*
 * The keyword part
 * This serve as AJAX search, the observe_field() will call the remote function to
 * update the item list based on keyword
 */
?>
<span style="float:right"><a class="close" href="#" onclick="new Effect.Fade($('<?php echo $ids['container'] ?>'), {duration: 0.10}); return false;">X Close</a></span>
<?php include_partial('snappsgVendor/search_form', array('keywordField' => $ids['keyword'])); ?>
<?php echo observe_field($ids['keyword'], 
    array('url' => 'snappsgVendor/ajaxSearch', 
        'with' => $jsQueryString,
        'update' => $ids['content'],
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'before'   => 'showLoader();',
        'complete'  => 'hideLoader();',
        'type'      => 'synchronous',
        'frequency' => 1)); ?>





<?php
/*
 * The LIST part
 */
?>
<div id="<?php echo $ids['content'] ?>">
<?php include_partial('snappsgVendor/list', array('keywordField' => $ids['keyword'], 'pager' => $pager, 'totalRecord' => $totalRecord)); ?>
</div>

</div> <!--  end of container -->





<?php
/*
 * The Javascript Handler
 */
?>
<?php echo javascript_tag("
new Draggable('" . $ids['container'] . "',{revert:false,handle:'" . $ids['handle'] . "'});        
new Resizeable('" . $ids['container'] . "');

document.onkeypress = stopRKey;
");


// where we handle the 'selection', that is, when user click on a row item
if (isset($subscribers)) {
    foreach ($subscribers as $sub) {
        echo javascript_tag("EventVendorSelected.subscribe($sub);");
    }
} else {
    echo javascript_tag("
    EventVendorSelected.subscribe(vendorSelected);
    var vendorField = false;
    var currencyField = false;
    var currencyRateField = false;
    var paymentTermsField = false;
    function vendorSelected(type, args, self)
    {
        if (vendorField && $(vendorField)) {
            $(vendorField).value = args[0]['name'];
        }
        
        if (currencyField &&(currencyField)) {
            setSelectedOptionByValue(currencyField, args[0]['currency']);
        }
        
        if (currencyRateField &&(currencyRateField)) {
            $(currencyRateField).value = args[0]['currency_rate'];
        }    
        
        if (paymentTermsField &&(paymentTermsField)) {
            setSelectedOptionByValue(paymentTermsField, args[0]['terms']);
        }    
        
        new Element.hide($('" . $ids['container'] . "')); return false;
        //stop_remote_pager();
    }
    ");
}
