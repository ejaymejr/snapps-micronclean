<?php use_helper('Javascript'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>
<?php print_r(include_metas()); ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>

<?php 

// <!--
// <script type="text/javascript" src="../js/metroui/assets/jquery-1.9.0.min.js"></script>
// <script type="text/javascript" src="../js/metroui/assets/jquery.mousewheel.min.js"></script>
// <script type="text/javascript" src="../js/metroui/assets/moment.js"></script>
// <script type="text/javascript" src="../js/metroui/assets/moment_langs.js"></script>


// <link href="../css/metroui-modern.css" rel="stylesheet">
// <link href="../css/metroui-modern-responsive.css" rel="stylesheet">
// <link href="../css/metroui-site.css" rel="stylesheet" type="text/css">
// <link href="../css/metroui-prettify.css" rel="stylesheet" type="text/css">
// <link href="../css/layout.css" rel="stylesheet">

// <script type="text/javascript" src="../js/metroui/modern/dropdown.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/accordion.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/buttonset.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/carousel.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/input-control.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/pagecontrol.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/rating.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/slider.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/tile-slider.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/tile-drag.js"></script>
// <script type="text/javascript" src="../js/metroui/modern/calendar.js"></script>
// -->
// if($browser):
// 	echo '<body class=" yui-skin-sam" style="width:1024">';
// else:
// 	echo '<body class=" yui-skin-sam" style="width:1024">';
// endif;
echo '<body class="metrouicss yui-skin-sam" onload="prettyPrint()">';
?>
<?php //echo javascript_tag("YAHOO.namespace('example.container');"); ?>
<div class="page secondary fixed-header">
    <div class="page-header ">
        <div class="page-header-content">
<div id="userinfo-box">
	<h1><?php //echo '&nbsp; IP ADDRESS: ' . ($_SERVER['HTTP_X_FORWARDED_FOR']) ?></h1>
    <?php if ($sf_user->isAuthenticated()): ?>
    <?php echo $_SERVER['HTTP_X_FORWARDED_FOR'] ?> |
    <?php echo $sf_user->getUsername() ?> |
    <?php echo link_to('My Account', sfConfig::get('http_intranet') . 'my') ?> |
    <?php echo link_to('Sign Out', 'logout') ?> |
    <?php echo link_to('Employee Feedback / Support Request', sfConfig::get('http_intranet') . 'support') ?>
    <?php else: ?>
    <?php echo link_to('Sign In', 'login') ?>
    <?php endif ?> 
    <?php echo '<br><span style="font-size: 18px;" ><strong>'.sfConfig::get('app_apps_name').'</strong></span>'; ?>
</div>

<div id="topBanner">
    <?php echo link_to(image_tag('micronclean', 'id="logo1"'), 'http://app.micronclean/sym'); ?>   
</div>

<div id="menu" style="bgcolor: bg-color-blueDark;" >
<?php include_partial('global/menu'); ?></div>
<div id="submenu"><?php include_partial('global/submenu'); ?></div>
<?php include_partial('global/subsubmenu'); ?>
<div id="pageTitle">
<?php include_partial('global/page_heading_select')  ?>
<?php echo sfConfig::get('app_page_heading'); ?>
<?php include_partial('global/page_heading_changedate'); ?>
</div>
<?php include_partial('global/message', array('sf_request' => $sf_request)); ?>
</div>
</div>
</div>
<div id="main">
<?php echo $sf_data->getRaw('sf_content') ?>
</div>

<div class="page secondary fixed-footer">
    <div class="page-footer ">
        <div class="page-footer-content">
<div id="footerPageTitle">&nbsp;</div>
<div id="footerSubMenu">&nbsp;</div>
<div id="footerMenu">&nbsp;</div>


<div style="clear:both; text-align:left; margin-top:10px;padding-left:20px;">
Quick Links: 
<?php echo link_to('Document Master List', 'http://app.micronclean/sym/isodoc/dmi'); ?> |
<?php echo link_to('Working Instructions', 'http://app.micronclean/sym/isodoc/wi/Micronclean'); ?> |
<?php echo link_to('Quality Manual and Procedures', 'http://app.micronclean/sym/isodoc/qmqp'); ?>
</div>

<?php include_partial('global/quality_policy'); ?>

<div id="footer">
    Total programmers harmed in the process of producing this page: <?php echo rand(1, 9); ?>
    <br />
    (certified by FBMI; federal bureau of misleading information)
    <br />
    <br />
    NB: Actual and official content of this footer is in progress.
    <br>
    Styled with <a href="http://metroui.org.ua" >Metro UI CSS</a> 
</div>
</div>
</div>

</div>


<?php

// include_partial('global/help');
// if (SF_APP != 'dashboard') { include_partial('global/dashboard_menu'); }
// if (SF_APP != 'user') { echo javascript_tag("formatFormStyle();"); }
// include_partial('global/yui_auxiliary_panels'); 
?>

</body>
</html>

