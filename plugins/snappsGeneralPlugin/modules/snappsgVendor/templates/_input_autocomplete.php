<?php
$name = isset($name) ? $name : 'vendor';
$value = isset($value) ? $value : $sf_params->get($name);
echo input_auto_complete_tag(
        $name, 
        $value,
        'snappsgVendor/autocomplete?k=' . $name,
        array('autocomplete' => 'on', 'size' => '70'),
        array('use_style' => true)
        );