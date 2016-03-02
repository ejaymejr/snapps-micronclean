<?php

$pager = AccountCategoryPeer::GetPager();
$totalRecord = AccountCategoryPeer::GetTotalRecord();


$ids = array();
$ids['container'] = 'DIVlookupCategory';
$ids['handle'] = XIDX::next();
$ids['content'] = 'DIVlookupCategoryList';
$ids['keyword'] = sfConfig::get('snappsg_q_category', 'q');
$ids['company'] = 'company';
$ids['sort_acc_no'] = 'sort_acc_no';

$jsQueryString = "'" . $ids['keyword'] . "=' + escape(\$F('" . $ids['keyword'] . "')) + '&co=' + escape(\$F('" . $ids['company'] . "')) + '&sort_acc_no=' + escape(\$F('" . $ids['sort_acc_no'] . "'))";
?>
<div id="<?php echo $ids['container'] ?>" style="display:none;" class="div-lookup">
<h2 id="<?php echo $ids['handle'] ?>" class="lookup-handle">Select Account Category</h2>



<?php
/*
 * The keyword part
 * This serve as AJAX search, the observe_field() will call the remote function to
 * update the item list based on keyword
 */
?>
<span style="float:right"><a class="close" href="#" onclick="new Effect.Fade($('<?php echo $ids['container'] ?>'), {duration: 0.10}); return false;">X Close</a></span>
<?php include_partial('snappsgCategory/search_form', array('keywordField' => $ids['keyword'])); ?>
<?php echo observe_field($ids['keyword'], 
    array('url' => 'snappsgCategory/ajaxSearch', 
        'with' => $jsQueryString,
        'update' => $ids['content'],
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'before'   => 'showLoader();',
        'complete'  => 'hideLoader();',
        'type'      => 'synchronous',
        'frequency' => 1)); ?>
        
<?php echo observe_field($ids['sort_acc_no'], 
    array('url' => 'snappsgCategory/ajaxSearch', 
        'with' => $jsQueryString,
        'update' => $ids['content'],
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'before'   => 'showLoader();',
        'complete'  => 'hideLoader();',
        'type'      => 'synchronous',
        'frequency' => 0.05)); ?>
        
<?php echo observe_field($ids['company'], 
    array('url' => 'snappsgCategory/ajaxSearch', 
        'with' => $jsQueryString,
        'update' => $ids['content'],
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        //'before'   => 'showLoader();',
        //'complete'  => 'hideLoader();',
        'type'      => 'synchronous',
        'frequency' => 1)); ?>





<?php
/*
 * The LIST part
 */
?>
<div id="<?php echo $ids['content'] ?>">
<?php include_partial('snappsgCategory/list', array('keywordField' => $ids['keyword'], 'pager' => $pager, 'totalRecord' => $totalRecord)); ?>
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
    EventCategorySelected.subscribe(categorySelected);
    var categoryField = '';
    function categorySelected(type, args, self)
    {
        //alert('category selected '+ args[0]['id'] + ' ' + args[0]['name'] + ' ' + args[0]['account_no']);
        if (categoryField && $(categoryField)) {
            $(categoryField).value = args[0]['name'];
        }
        new Element.hide($('" . $ids['container'] . "')); return false;
        //stop_remote_pager();
    }
    ");
    
}
