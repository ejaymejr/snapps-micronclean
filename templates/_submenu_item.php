<?php
$menuItemClass = '';

$anchor = $menu[0];
$url = $menu[1];

$module = sizeof($menu) >= 3 ? $menu[2] : false;    
$action = sizeof($menu) >= 4 ? $menu[3] : false;
$params = sizeof($menu) >= 5 ? $menu[4] : false;
$icon = sizeof($menu) >= 6 ? $menu[5] : false;

if (sizeof($menu) >= 3) {
    
    if (!is_array($menu[2]) && $sf_request->getParameter('module') == $menu[2]) {
        
        if (sizeof($menu) >= 4) {
            if (!is_array($menu[3]) && $sf_request->getParameter('action') == $menu[3]) {
                $menuItemClass = 'current';        
            } else if (is_array($menu[3]) && in_array($sf_request->getParameter('action'), $menu[3])) {
                $menuItemClass = 'current';                
            }
        } else if (sizeof($menu) == 3 && !is_array($menu[2]) && $sf_request->getParameter('module') == $menu[2]) {
            $menuItemClass = 'current';                    
        } else if (sizeof($menu) == 3 && is_array($menu[2]) && in_array($sf_request->getParameter('module'), $menu[2])) {
            $menuItemClass = 'current';
        }
    }
    else if (is_array($menu[2]) && in_array($sf_request->getParameter('module'),  $menu[2])) {
        $menuItemClass = 'current';        
    }
}

if ($icon !== false) {
    $anchor = image_tag('icons/' . $icon);
    $menuItemClass .= ' iconized';
}

?>
<li class="<?php echo $menuItemClass; ?>"><?php echo link_to($anchor, $url); ?></li>
