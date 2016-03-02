<?php

$searchMenuOptions = array(
    '0' => '- Shortcuts -',
    '4' => '-----------------',
    '1' => '- RELATED FUNCTIONS -',
    sfConfig::get('http_intranet') . 'vendor/' => 'Manage Vendors',
    sfConfig::get('http_intranet') . 'purchasing/po' => 'Search Purchase Orders'
);

echo select_tag('searchSelect', options_for_select($searchMenuOptions, url_for($sf_request->getModuleAction())), 
    array(  'id'        => 'MAINsearchSelect', 
            'onchange'  => 'jumpToPage(\'MAINsearchSelect\');')
    );
