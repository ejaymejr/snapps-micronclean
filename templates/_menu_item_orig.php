<?php
$menuItemClass = '';
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
?>
<li class="<?php echo $menuItemClass; ?>"><?php echo link_to($menu[0], $menu[1]); ?></li>
