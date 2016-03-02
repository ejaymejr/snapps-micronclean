<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://www.micronclean/garmentSystem/addLog.php", "_blank", "");
		');
?>

<div class="alignCenter">
<?php
echo image_tag('quality.jpg');
?>
</div>