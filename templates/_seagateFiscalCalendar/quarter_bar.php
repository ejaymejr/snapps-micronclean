<?php


$quarterList = array();
$query_string = isset($query_string) ? $query_string : '';



$weeklyLink = '';
$monthlyLink = '';
$fcal = new SeagateFiscalCalendar($selectYear);

$monthSN = $fcal->quarters[$selectQuarterSN - 1]->months[sizeof($fcal->quarters[$selectQuarterSN - 1]->months) - 1]->SN;
$mm = $selectYear . '-' . $monthSN;

if (isset($monthlyURL)) {
    $monthlyLink = link_to('Monthly', $monthlyURL . '?' . $query_string . '&mm=' . $mm);
}

$weekSN = $fcal->months[$monthSN - 1]->weeks[sizeof($fcal->months[$monthSN - 1]->weeks) - 1]->SN;
$ww = $selectYear . '-' . $weekSN;

if (isset($weeklyURL)) {
    $weeklyLink = link_to('Weekly', $weeklyURL . '?' . $query_string . '&ww=' . $ww);
}



$prevLink = link_to('Go to ' . ($selectYear - 1), $url . '?' . $query_string . '&qq=' . ($selectYear - 1) . '-4');
    
for ($m = 1; $m <= 4; $m++) {  

    if ($selectQuarterSN == $m) {
        $quarterLink = '<b>Q' . $m . '</b>';    
    } else {
        $quarterLink = link_to('Q' . $m, $url . '?' . $query_string . '&qq=' . $selectYear . '-' . $m);   
    } 
    $quarterList[] = $quarterLink;

}
$nextLink = link_to('Go to ' . ($selectYear + 1), $url . '?' . $query_string . '&qq=' . ($selectYear + 1) . '-1');
    

$quarterBar = '<ul>';
$quarterBar .= '<li>' . $prevLink . '</li>';
if (sizeof($quarterList)) {
    foreach ($quarterList as $item) {
        $liClass = '';
        if (strpos($item, '<b>') !== false) {
            $liClass = 'current';
        }
        $quarterBar .= '<li class="' . $liClass . '">' . $item . '</li>';
    }
}
$quarterBar .= '<li>' . $nextLink . '</li>';
$quarterBar .= '</ul>';
?>
<div class="quarterbar">
<?php if ($weeklyLink != '' || $monthlyLink != '') : ?>
<div class="alignRight" style="margin-right:20px; margin-top:6px;float:right;">Switch to <?php echo $weeklyLink; ?> | <?php echo $monthlyLink; ?></div>
<?php endif; ?>

<?php echo $quarterBar; ?>
</div>
<div class="clear">&nbsp;</div>