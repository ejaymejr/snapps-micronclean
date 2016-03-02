<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://apps.micronclean/nano2/qualityRecord/diplant/trend/", "_blank", "");
		');
?>

<div class="alignCenter">
<?php
echo image_tag('quality.jpg');
?>
</div>