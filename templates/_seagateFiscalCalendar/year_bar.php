<?php

$yearList = array();

$yearStart = 2007;
$yearEnd = date('Y') + 1;

$query_string = isset($query_string) ? $query_string : '';
foreach (sfConfig::get('app_seagate_calendar_years') as $year => $startDate) {   
    
    if ($year >= $yearStart && $year <= $yearEnd) {
        $yearText = $year;
        if ($year == $selectYear) $yearText = '<b>' . $year . '</b>';    
        $yearLink = link_to($yearText, $url . '?' . $query_string . '&year=' . $year);    
        $yearList[] = $yearLink;
    }
}
$yearBar = implode(' | ', $yearList);

?>
<div id="calendar-year-bar"><?php echo $yearBar; ?></div>