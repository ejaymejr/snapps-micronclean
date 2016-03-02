<?php use_helper('Validation', 'Javascript') ?>
<?php
	echo select_tag('reason', options_for_select($reasonList, $sf_params->get('reason') ) ) ;