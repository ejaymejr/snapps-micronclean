<?php use_helper('Javascript'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:fb="http://app.microncleansingapore.com">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">

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
<header class="bg-dark" >
<?php include_partial('global/menu'); ?>
</header>
<div class="topBannerSeparator bg-amber"></div>
<div>
<?php echo $sf_data->getRaw('sf_content') ?>
</div>
		<div class="page-footer-content">
			<div id="footerPageTitle">&nbsp;</div>
			<div id="footerSubMenu">&nbsp;</div>
			<div id="footerMenu">&nbsp;</div>

			<?php if ($sf_user->isAuthenticated()): ?>
			<div
				style="clear: both; text-align: left; margin-top: 10px; padding-left: 20px;">
				Quality and Procedures:
				<?php echo link_to('Document Master List', '#'); ?>
				|
				<?php echo link_to('Working Instructions', '#'); ?>
				|
				<?php echo link_to('Quality Manual and Procedures', '#'); ?>
			</div>
			
			<?php include_partial('global/quality_policy_portfolio'); ?>
			<?php endif;?>
			<div id="footer">
				Trust in the Lord with all your heart
				<br> Styled with <a style="font-size: 8px;"
					href="http://metroui.org.ua">Metro UI CSS</a>
			</div>
		</div>
<br>                    
</body>

</html>