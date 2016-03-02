<?php if ($sf_user->isAuthenticated() || (SF_APP == 'isodoc' && in_array($sf_request->getParameter('module'), array('dmi', 'qmqp', 'wi')))): ?>
<?php 
$shortcutMenus = sfConfig::get('app_shortcut_items'); 
$smenus = sfConfig::get('app_submenu_items'); 
?>

<?php if (is_array($shortcutMenus) && sizeof($shortcutMenus) > 0) : ?>
<ul id="shortcutmenu" class="shortcutmenu">
    <?php foreach ($shortcutMenus as $menu) : ?>
    <?php
        $menuItemClass = '';
        if (sizeof($menu) >= 3) {
            
            if ($sf_request->getParameter('module') == $menu[2]) {
                
                if (sizeof($menu) >= 4 && $sf_request->getParameter('action') == $menu[3]) {
                    $menuItemClass = 'current';
                } else if (sizeof($menu) == 3) {
                    $menuItemClass = 'current';                    
                }
            }
        }
    ?>
    <li class="<?php echo $menuItemClass; ?>"><?php echo link_to($menu[0], $menu[1]); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif ?>




<?php if (is_array($smenus) && sizeof($smenus) > 0) : ?>
<ul>
    <?php foreach ($smenus as $menu) : ?>
    <?php include_partial('global/submenu_item', array('menu' => $menu)); ?>
    <?php endforeach; ?>
</ul>
<?php endif ?>
<?php endif ?>