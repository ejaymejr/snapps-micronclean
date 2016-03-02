<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://app.microncleansingapore.com/micronclean/survey/satisfactionIndex", "_blank", "");
		');
?>

<div class="alignCenter">
<?php
echo image_tag('quality.jpg');
?>
</div>