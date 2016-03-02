<?php if ($sf_user->isAuthenticated()): ?>
<?php 
$subsubmenus = sfConfig::get('app_subsubmenu_items', false); 
?>


<?php if (is_array($subsubmenus) && sizeof($subsubmenus) > 0) : ?>
<div id="subsubmenu">
<ul>
    <?php foreach ($subsubmenus as $menu) : ?>
    <?php include_partial('global/subsubmenu_item', array('menu' => $menu)); ?>
    <?php endforeach; ?>
</ul>
</div>
<?php endif ?>
<?php endif ?>