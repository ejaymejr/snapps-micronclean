<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://app.microncleansingapore.com/micronclean/survey/satisfactionIndex/surveySummary", "_blank", "");
		');
?>