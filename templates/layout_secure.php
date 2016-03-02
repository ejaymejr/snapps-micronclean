<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>


<body class=" yui-skin-sam">
<?php include_partial('global/help'); ?>

<?php echo javascript_tag("YAHOO.namespace('example.container');"); ?>
<div id="userinfo-box">
    <?php if ($sf_user->isAuthenticated()): ?>
    <?php echo $sf_user ?> |
    <?php echo link_to('My Account', sfConfig::get('http_intranet') . 'my') ?> |
    <?php echo link_to('Sign Out', 'logout') ?> |
    <?php echo link_to('Employee Feedback / Support Request', sfConfig::get('http_intranet') . 'support') ?>
    <?php else: ?>
    <?php echo link_to('Sign In', 'login') ?>
    <?php endif ?> |
    <a href="#" onclick="new Effect.BlindDown($('DIVcontextHelp'), {duration: 0.5}); return false;">Quick Help</a>
</div>

<div id="topBanner">
    <a href="<?php echo sfConfig::get('http_intranet'); ?>"><?php echo image_tag('micronclean', 'id="logo1"'); ?></a>
    <div id="modHead"><?php echo sfConfig::get('app_apps_name', 'General'); ?></div>   
</div>


<div id="menu">
<?php if ($sf_user->isAuthenticated()): ?>
<?php $menus = sfConfig::get('app_menu_items'); ?>
<?php if (is_array($menus) && sizeof($menus) > 0) : ?>
<ul>
    <?php foreach ($menus as $menu) : ?>
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
    <li class="<?php echo $menuItemClass; ?>")><?php echo link_to($menu[0], $menu[1]); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif ?>
<?php endif ?>
</div>

<div id="submenu">
<?php if ($sf_user->isAuthenticated()): ?>
<?php $smenus = sfConfig::get('app_submenu_items'); ?>
<?php if (is_array($smenus) && sizeof($smenus) > 0) : ?>
<ul>
    <?php foreach ($smenus as $menu) : ?>
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
    <li class="<?php echo $menuItemClass; ?>")><?php echo link_to($menu[0], $menu[1]); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif ?>
<?php endif ?>
</div>
<div id="pageTitle"><?php echo sfConfig::get('app_page_heading'); ?></div>
<?php include_partial('global/message', array('sf_request' => $sf_request)); ?>

<div id="main">


<?php echo $sf_data->getRaw('sf_content') ?>


</div>




<div id="footerPageTitle">&nbsp;</div>
<div id="footerSubMenu">&nbsp;</div>
<div id="footerMenu">&nbsp;</div>


<div style="clear:both; text-align:left; margin-top:10px;padding-left:20px;">
Quick Links: 
<?php echo link_to('Document Master List', sfConfig::get('http_intranet') . 'isodoc/dmi'); ?> |
<?php echo link_to('Working Instructions', sfConfig::get('http_intranet') . 'isodoc/wi'); ?> |
<?php echo link_to('Quality Manual and Procedures', sfConfig::get('http_intranet') . 'isodoc/qmqp'); ?>
</div>

<?php include_partial('global/quality_policy'); ?>


<div id="footer">
    Total programmers harmed in the process of producing this page: <?php echo rand(1, 9); ?>
    <br />
    (certified by FBMI; federal bureau of misleading information)
    <br />
    <br />
    NB: Actual and official content of this footer is in progress.
</div>
<?php 

if (SF_APP != 'user') { 
echo javascript_tag("
formatFormStyle();
new Draggable('DIVcontextHelp',{revert:false,handle:'DIVcontextHelpHandle'});        
new Resizeable('DIVcontextHelp');
");
} else {
echo javascript_tag("
new Draggable('DIVcontextHelp',{revert:false,handle:'DIVcontextHelpHandle'});        
new Resizeable('DIVcontextHelp');
");
    
}
?>



<script language="Javascript">
function waitInit() {
    if (!YAHOO.example.container.wait) {
        // Initialize the temporary Panel to display while waiting for external content to load
        YAHOO.example.container.wait = 
                new YAHOO.widget.Panel("wait",  
                                                { width: "240px", 
                                                  fixedcenter: true, 
                                                  close: true, 
                                                  draggable: true, 
                                                  zindex:1000,
                                                  modal: true,
                                                  visible: false
                                                } 
                                            );

        YAHOO.example.container.wait.setHeader("Loading, please wait...");
        YAHOO.example.container.wait.setBody("<?php echo addslashes(image_tag('yahoo/rel_interstitial_loading.gif')); ?>");
        YAHOO.example.container.wait.render(document.body);
    }    
    // YAHOO.example.container.wait.show();
}    
waitInit();
</script>

</body>
</html>

