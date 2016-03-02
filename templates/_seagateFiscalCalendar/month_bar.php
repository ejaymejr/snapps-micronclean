<?php

$monthList = array();
$query_string = isset($query_string) ? $query_string : '';



$weeklyLink = '';
$quarterlyLink = '';
$fcal = new SeagateFiscalCalendar($selectYear);

$weekSN = $fcal->months[$selectMonthSN - 1]->weeks[sizeof($fcal->months[$selectMonthSN - 1]->weeks) - 1]->SN;
$ww = $selectYear . '-' . $weekSN;

if (isset($weeklyURL)) {
    $weeklyLink = link_to('Weekly', $weeklyURL . '?' . $query_string . '&ww=' . $ww);
}

$quarterSN = $fcal->findQuarterByMonthSN($selectMonthSN);
$qq = $selectYear . '-' . $quarterSN;
if (isset($quarterlyURL)) {
    $quarterlyLink = link_to('Quarterly', $quarterlyURL . '?' . $query_string . '&qq=' . $qq);
}




$prevLink = link_to('Go to ' . ($selectYear - 1), $url . '?' . $query_string . '&mm=' . ($selectYear - 1) . '-12');
    
for ($m = 1; $m <= 12; $m++) {  

    if ($selectMonthSN == $m) {
        $monthLink = '<b>' . SeagateFiscalCalendarUtils::GetMonthName($m) . '</b>';    
    } else {
        $monthLink = link_to(SeagateFiscalCalendarUtils::GetMonthName($m), $url . '?' . $query_string . '&mm=' . $selectYear . '-' . $m);   
    } 
    $monthList[] = $monthLink;

}
$nextLink = link_to('Go to ' . ($selectYear + 1), $url . '?' . $query_string . '&mm=' . ($selectYear + 1) . '-1');
    

$monthBar = '<ul>';
$monthBar .= '<li>' . $prevLink . '</li>';
if (sizeof($monthList)) {
    foreach ($monthList as $item) {
        $liClass = '';
        if (strpos($item, '<b>') !== false) {
            $liClass = 'current';
        }
        $monthBar .= '<li class="' . $liClass . '">' . $item . '</li>';
    }
}
$monthBar .= '<li>' . $nextLink . '</li>';
$monthBar .= '</ul>';
?>
<div class="monthbar">
<?php if ($weeklyLink != '' || $quarterlyLink != '') : ?>
<div class="alignRight" style="margin-right:20px; margin-top:6px;float:right;">Switch to <?php echo $weeklyLink; ?> | <?php echo $quarterlyLink; ?></div>
<?php endif; ?>
<?php echo $monthBar; ?>
</div>
<div class="clear">&nbsp;</div>