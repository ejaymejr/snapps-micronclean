<?php
$disabled = sizeof(sfConfig::get('htopt_category')) > 1 ? '' : 'disabled= "disabled"';
echo select_tag('category', 
    options_for_select(sfConfig::get('htopt_category'), $sf_params->get('category')),
    $disabled
); 