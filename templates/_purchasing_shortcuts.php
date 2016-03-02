<?php

$searchMenuOptions = array(
    '0' => '- Shortcuts -',
    '4' => '-----------------',
    '1' => '- RELATED FUNCTIONS -',
    sfConfig::get('http_intranet') . 'vendor/' => 'Manage Vendors',
    sfConfig::get('http_intranet') . 'finance/ap/add' => 'Add Accounts Payable',
    sfConfig::get('http_intranet') . 'finance/ap/search' => 'Search Accounts Payable',
    sfConfig::get('http_intranet') . 'finance/cash/add' => 'Add Cash Transaction',
    sfConfig::get('http_intranet') . 'finance/cash/search' => 'Search Cash Transaction',
    sfConfig::get('http_intranet') . 'finance/voucher' => 'Search Payment Vouchers'
);

echo select_tag('searchSelect', options_for_select($searchMenuOptions, url_for($sf_request->getModuleAction())), 
    array(  'id'        => 'MAINsearchSelect', 
            'onchange'  => 'jumpToPage(\'MAINsearchSelect\');')
    );
