<?php
$menuItemClass = '';

$anchor = $menu[0];
$url = $menu[1];

$module = sizeof($menu) >= 3 ? $menu[2] : false;    
$action = sizeof($menu) >= 4 ? $menu[3] : false;
$params = sizeof($menu) >= 5 ? $menu[4] : false;
$icon = sizeof($menu) >= 6 ? $menu[5] : false;

if ($sf_request->getParameter('module') == $module) {
    
    if ($action && $sf_request->getParameter('action') == $action) {
        $menuItemClass = 'current';
    } else if ($module && !$action) {
        $menuItemClass = 'current';             
    }
}

if ($icon !== false) {
    $anchor = image_tag('icons/' . $icon);
    $menuItemClass .= ' iconized';
}

?>
<li class="<?php echo $menuItemClass; ?>"><?php echo link_to($anchor, $url); ?></li>
