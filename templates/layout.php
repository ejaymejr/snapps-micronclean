<?php use_helper('Javascript'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:fb="http://app.microncleansingapore.com">
<head>
<!--     <link href="../css/metro-bootstrap.css" rel="stylesheet"> -->
<!--     <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet"> -->
<!--     <link href="../css/iconFont.css" rel="stylesheet"> -->
<!--     <link href="../css/docs.css" rel="stylesheet"> -->
<!--     <link href="../js/metroui/prettify/prettify.css" rel="stylesheet"> -->

    <!-- Load JavaScript Libraries -->
<!--     <script src="../js/metroui/jquery/jquery.min.js"></script> -->
<!--     <script src="../js/metroui/jquery/jquery.widget.min.js"></script> -->
<!--     <script src="../js/metroui/jquery/jquery.mousewheel.js"></script> -->
<!--     <script src="../js/metroui/prettify/prettify.js"></script> -->

    <!-- Metro UI CSS JavaScript plugins -->
<!--     <script src="../js/metroui/metro.min.js"></script> -->

    <!-- Local JavaScript -->
<!--     <script src="../js/metroui/docs.js"></script> -->
<!--     <script src="../js/metroui/github.info.js"></script> -->

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>
<?php print_r(include_metas()); ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<script type="text/javascript"> 
		   $(function($){
              $('a[data-target="flare"]').peFlareLightbox();
              $(window).load(function() { $("#showloader").fadeOut("slow"); })
          }); 
</script>
<body class="metro" >
<div id="topBanner">
	<?php //echo link_to(image_tag('micronclean', 'id="logo1"'), 'http://app.micronclean/sym'); ?>
	<?php echo link_to(image_tag('logo.jpg', 'id="logo1"'), 'http://app.micronclean/sym'); ?>
	<?php //echo link_to(image_tag('muIcon.gif', 'id="logo1" class="" '), 'http://app.micronclean/sym'); ?>
</div>

<?php include_partial('global/menu'); ?>
<div id="topBannerSeparator"></div>
<?php include_partial('global/subsubmenu'); ?>
<?php include_partial('global/message', array('sf_request' => $sf_request)); //Message Bar?>	
<!--  main -->
<div class="container"><br>
		<?php echo $sf_data->getRaw('sf_content') ?>
</div> <!-- main -->
		<div class="page-footer-content">
			<div id="footerPageTitle">&nbsp;</div>
			<div id="footerSubMenu">&nbsp;</div>
			<div id="footerMenu">&nbsp;</div>

			<?php if ($sf_user->isAuthenticated()): ?>
			<div
				style="clear: both; text-align: left; margin-top: 10px; padding-left: 20px;">
				Quick Links:
				<?php echo link_to('Document Master List', 'http://app.micronclean/sym/isodoc/dmi'); ?>
				|
				<?php echo link_to('Working Instructions', 'http://app.micronclean/sym/isodoc/wi/Micronclean'); ?>
				|
				<?php echo link_to('Quality Manual and Procedures', 'http://app.micronclean/sym/isodoc/qmqp'); ?>
			</div>
			
			<?php include_partial('global/quality_policy'); ?>
			<?php endif;?>
			<div id="footer">
				Total programmers harmed in the process of producing this page:
				<?php echo rand(1, 9); ?>
				<br /> (certified by FBMI; federal bureau of misleading information)
				<br /> <br /> NB: Actual and official content of this footer is in
				progress. <br> Styled with <a style="font-size: 8px;"
					href="http://metroui.org.ua">Metro UI CSS</a>
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
<br>
</body>
</html>