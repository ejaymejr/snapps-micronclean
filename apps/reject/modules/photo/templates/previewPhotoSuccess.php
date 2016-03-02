	<?php use_helper('Validation', 'Javascript') ?>
	<?php
		$simpleviewerjs = sfConfig::get("http_intranet") . "reject/svcore/js/simpleviewer.js";
		$swfobjectjs = sfConfig::get("http_intranet") . "reject/svcore/js/swfobject.js";
		$simpleviewerswf = sfConfig::get("http_intranet") . "reject/svcore/swf/simpleviewer.swf";
		$simpleviewercss = sfConfig::get("http_intranet") . "reject/svcore/css/simpleviewer.css";
		//echo $simpleviewercss;
		
	?>
	<?php //echo $swfobjectjs ?>

<?php
	$picList = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg');
  	$fp = fopen('../uploadedImages/test.xml', 'w');
  	fwrite($fp, '<?xml version="1.0" encoding="UTF-8"?>');
	fwrite($fp, '<simpleviewergallery title="Sample Micronclean Reject Garment">');
	foreach ($picList as $p):
		fwrite($fp, '<image imageURL="../../uploadedImages/'.$p.'" thumbURL="" linkURL="" linkTarget="" >');
		fwrite($fp, '<caption><![CDATA[Welcome tos <u><a href="http://www.simpleviewer.net/simpleviewer/pro" target="_blank">SimpleViewer-Pro</a></u>.]]></caption>');
		fwrite($fp, '</image>');
	endforeach;
	fwrite($fp, '</simpleviewergallery>');
	fclose($fp);
  ?> 
	<script type="text/css" src="<?php echo $simpleviewercss ?>"></script>
	
		
	<!--START SIMPLEVIEWER EMBED.-->
	<script type="text/javascript" src="<?php echo $simpleviewerjs ?>"></script>
	<script type="text/javascript">
	simpleviewer.ready(function () {
	var flashvars = {};
		flashvars.galleryURL = "../../uploadedImages/test.xml";
		//simpleviewer.load('sv-container', '100%', '100%', '222222', true);
		simpleviewer.load('sv-container', '100%', '100%', '222222', true, flashvars);
	});
	</script>
	<div id="sv-container"></div>
	<!-- END SIMPLEVIEWER EMBED -->