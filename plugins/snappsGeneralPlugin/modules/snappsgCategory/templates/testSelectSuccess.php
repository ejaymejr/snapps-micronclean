<?php
echo input_tag('category');
echo link_to(image_tag('icons/lookup.png'), '#', array('onclick' => "Element.show('DIVlookupCategory');return false;"));
?>

<div id="DIVlookupCategory" style="display:none;" class="div-lookup">
<h2 id="divLookupHandle">Select Account/Category</h2>
<span style="float:right"><a class="close" href="#" onclick="new Effect.Fade($('DIVlookupCategory'), {duration: 0.25}); return false;">X Close</a></span>
<?php include_partial('search_form'); ?>
<?php echo observe_field('q', 
    array('url' => 'snappsgCategory/ajaxSearch', 
        'with' => "'q=' + escape(\$F('q'))",
        'update' => 'DIVlist',
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'type'      => 'synchronous',
        'frequency' => 1)); ?>

<div id="DIVlist">
<?php include_partial('list', array('pager' => $pager, 'totalRecord' => $totalRecord)); ?>
</div>
</div>

<?php echo javascript_tag("
new Draggable('DIVlookupCategory',{revert:false,handle:'divLookupHandle'});        
new Resizeable('DIVlookupCategory');
EventCategorySelected.subscribe(categorySelected);
function categorySelected(type, args, self)
{
    //alert('category selected '+ args[0]['id'] + ' ' + args[0]['name'] + ' ' + args[0]['account_no']);
    $('category').value = args[0]['name'];
    new Effect.Fade($('DIVlookupCategory'), {duration: 0.10}); return false;
    stop_remote_pager();
}
");
?>
