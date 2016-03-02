<?php

$searchMenuOptions = array(
    '0' => '- Shortcuts -',

    '4' => '-----------------',
    '1' => '- CALENDAR -',
    url_for('good/calendar') => 'Calendar Good Inventory',
    url_for('purchase/calendar') => 'Calendar Purchase',
    url_for('transfer/calendar') => 'Calendar Transfer',
    url_for('reject/calendar') => 'Calendar Reject',
    url_for('rejectPending/calendar') => 'Calendar Reject Pending',
    url_for('scrap/calendar') => 'Calendar Scrap',
    url_for('scrapPending/calendar') => 'Calendar Scrap Pending',
    url_for('scrapComplete/calendar') => 'Calendar Scrap Complete',
    url_for('repair/calendar') => 'Calendar Repair',
    url_for('repairPending/calendar') => 'Calendar Repair Pending',
    url_for('repairSend/calendar') => 'Calendar Sent for Repair',
    url_for('repairIP/calendar') => 'Calendar Repair In Progress',
    url_for('repairReturn/calendar') => 'Calendar Returned Repair',
    url_for('downgrade/calendar') => 'Calendar Downgrade',
    
    '3' => '-----------------',
    '2' => '- SEARCH -',
    url_for('good/search') => 'Search Good Inventory',
    url_for('purchase/search') => 'Search Purchase',
    url_for('transfer/search') => 'Search Transfer',
    url_for('reject/search') => 'Search Reject',
    url_for('rejectPending/search') => 'Search Reject Pending',
    url_for('scrap/search') => 'Search Scrap',
    url_for('scrapPending/search') => 'Search Scrap Pending',
    url_for('scrapComplete/search') => 'Search Scrap Complete',
    url_for('repair/search') => 'Search Repair',
    url_for('repairPending/search') => 'Search Repair Pending',
    url_for('repairSend/search') => 'Search Sent for Repair',
    url_for('repairIP/search') => 'Search Repair In Progress',
    url_for('repairReturn/search') => 'Search Returned Repair',
    url_for('downgrade/search') => 'Search Downgrade',
    
    '9' => '-----------------',
    '10' => '- DATA ENTRY -',
    url_for('edit/initial') => 'Edit Initial Inventory',
    url_for('edit/purchase') => 'Edit Purchase',
    url_for('edit/transfer') => 'Edit Transfer',
    url_for('edit/reject') => 'Edit Reject',
    url_for('edit/followup') => 'Edit Followup',
    url_for('edit/scrapComplete') => 'Edit Scrap Cut Complete',
    url_for('edit/repairSend') => 'Edit Repair Send',
    url_for('edit/repairReturn') => 'Edit Repair Return'
);

echo select_tag('searchSelect', options_for_select($searchMenuOptions, url_for($sf_request->getModuleAction())), 
    array(  'id'        => 'MAINsearchSelect', 
            'onchange'  => 'jumpToPage(\'MAINsearchSelect\');')
    );
