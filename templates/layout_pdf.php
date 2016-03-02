<?php use_helper('Javascript'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:fb="http://app.microncleansingapore.com">
<head>
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
<header class="bg-dark" >
<?php include_partial('global/menu'); ?>
</header>
<div id="topBannerSeparator"></div>
<?php include_partial('global/subsubmenu'); ?>
<?php include_partial('global/message', array('sf_request' => $sf_request)); //Message Bar?>	
<!--  main -->
<div class="container"><br>
	<?php
		$client = new PdfCrowd("dotaleavers", "33fa0366703d54359b6e89a590724a8b");
		$pdf = $client->convertHtml($sf_data->getRaw('sf_content')); 
		header("Content-Type: application/pdf");
	    header("Cache-Control: max-age=0");
	    header("Accept-Ranges: none");
	    header("Content-Disposition: attachment; filename=\"test.pdf\"");
	    // send the generated PDF 
	    echo $pdf;
	?>
</div> 
<br>
</body>
</html>