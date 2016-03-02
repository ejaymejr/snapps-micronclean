<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://app.micronclean/cityhall/maintenance/expenses/powerConsumptionSearch", "_blank", "");
		');
?>

<div class="alignCenter">
<?php
echo image_tag('quality.jpg');
?>
</div>