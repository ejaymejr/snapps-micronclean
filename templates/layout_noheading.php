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
 	<link href="/micronclean/flare/js/pe.flare/jquery.pixelentity.flare.min.css" rel="stylesheet" type="text/css"/> 
    <script type="text/javascript" src="/micronclean/flare/js/pe.flare/jquery.pixelentity.flare.min.js"></script>		
	  <script type="text/javascript"> 
		  jQuery(function($){
              $('a[data-target="flare"]').peFlareLightbox();
              $(window).load(function() { $("#showloader").fadeOut("slow"); })
          });

		 
	  </script>	
<?php 
// <!--  	<script type="text/javascript" src="/micronclean/flare/js/jquery.js"></script> -->
// <!--  	<link href="/micronclean/flare/js/pe.flare/jquery.pixelentity.flare.min.css" rel="stylesheet" type="text/css"/>  -->
// <!--     <script type="text/javascript" src="/micronclean/flare/js/pe.flare/jquery.pixelentity.flare.min.js"></script>		 -->
// <script type="text/javascript">
// jQuery(function($){
// $('a[data-target="flare"]').peFlareLightbox();
// });
// </script>
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


echo '<body class="metrouicss " onload="prettyPrint()">';
?>
<?php //echo javascript_tag("YAHOO.namespace('example.container');"); ?>
<div class="page">

<div id="topBanner">
    <?php echo link_to(image_tag('micronclean', 'id="logo1"'), '#', 'onclick=javascript:alert("Thank you for using our site !!!")'); ?>   
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


<div id="main" class="page secondary fixed-header">
<?php echo $sf_data->getRaw('sf_content') ?>
</div>

<div class="page secondary fixed-footer"></div>


<div style="clear:both; text-align:left; margin-top:10px;padding-left:20px;"></div>


</body>
</html>

