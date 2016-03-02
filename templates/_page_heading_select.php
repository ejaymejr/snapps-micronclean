<?php

$url        = sfConfig::get('htopt_page_heading_url', '');
$selected   = $sf_user->getAttribute(sfConfig::get('htopt_page_heading_param'));
$options    = sfConfig::get('htopt_page_heading_options', array());

if (sizeof($options)) {
    echo form_tag($url, array('method' => 'get'));
    echo select_tag(
        sfConfig::get('htopt_page_heading_param'), 
        options_for_select($options, $selected), 
        array(  'id'        => 'pageHeadingSelect', 
            'onchange'  => 'this.parentNode.submit();')
    );
    echo '</form>';
}
