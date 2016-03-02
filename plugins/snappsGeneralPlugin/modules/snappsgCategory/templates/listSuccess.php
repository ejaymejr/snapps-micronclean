<?php
$ids['keyword'] = sfConfig::get('snappsg_q_category', 'q');
?>

<?php include_partial('search_form'); ?>
<?php echo observe_field($ids['keyword'], 
    array('url' => 'snappsgCategory/ajaxSearch', 
        'with' => "'" . $ids['keyword'] . "=' + escape(\$F('" . $ids['keyword'] . "'))",
        'update' => 'DIVlist',
        'script'    => true,
        'loading'   => 'stop_remote_pager();',
        'type'      => 'synchronous',
        'frequency' => 1)); ?>

<div id="DIVlist">
<?php include_partial('list', array('pager' => $pager, 'totalRecord' => $totalRecord)); ?>
</div>
