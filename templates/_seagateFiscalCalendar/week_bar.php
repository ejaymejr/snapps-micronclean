<?php


$weekList = array();
$query_string = isset($query_string) ? $query_string : '';


$monthlyLink = '';
$quarterlyLink = '';
$fcal = new SeagateFiscalCalendar($selectYear);

$monthSN = $fcal->findMonthByWeekSN($selectWeekSN);
$mm = $selectYear . '-' . $monthSN;

if (isset($monthlyURL)) {
    $monthlyLink = link_to('Monthly', $monthlyURL . '?' . $query_string . '&mm=' . $mm);
}

$quarterSN = $fcal->findQuarterByMonthSN($monthSN);
$qq = $selectYear . '-' . $quarterSN;
if (isset($quarterlyURL)) {
    $quarterlyLink = link_to('Quarterly', $quarterlyURL . '?' . $query_string . '&qq=' . $qq);
}




$prevLink = link_to('Go to ' . ($selectYear - 1), $url . '?' . $query_string . '&ww=' . ($selectYear - 1) . '-52');
    
for ($w = 1; $w <= 52; $w++) {  

    if ($selectWeekSN == $w) {
        $weekLink = '<b>' . $w . '</b>';    
    } else {
        $title = 'WW #' . $w;
        $title .= "\n" . 'Start: ' . HTMLText::DateNice($fcal->weeks[$w-1]->dateStart);
        $title .= "\n" . 'End: ' . HTMLText::DateNice($fcal->weeks[$w-1]->dateEnd);
        
        $weekLink = link_to($w, $url . '?' . $query_string . '&ww=' . $selectYear . '-' . $w, array('alt' => $title, 'title' => $title));   
    } 
    $weekList[] = $weekLink;

}
$nextLink = link_to('Go to ' . ($selectYear + 1), $url . '?' . $query_string . '&ww=' . ($selectYear + 1) . '-1');
    

$list1 = array_slice($weekList, 0, 26);
$list2 = array_slice($weekList, 26);

$weekBar = '<ul>';
if (sizeof($weekList)) {
    foreach ($weekList as $item) {
        $liClass = '';
        if (strpos($item, '<b>') !== false) {
            $liClass = 'current';
        }
        $weekBar .= '<li class="' . $liClass . '">' . $item . '</li>';
    }
}
$weekBar .= '</ul>';

$weekBar1 = '<ul>';
if (sizeof($list1)) {
    $weekBar1 .= '<li style="width:70px;">' . $prevLink . '</li>';
    foreach ($list1 as $item) {
        $liClass = '';
        if (strpos($item, '<b>') !== false) {
            $liClass = 'current';
        }
        $weekBar1 .= '<li class="' . $liClass . '">' . $item . '</li>';
    }
    $weekBar1 .= '<li style="width:70px;">' . $prevLink . '</li>';
}
$weekBar1 .= '</ul>';

$weekBar2 = '<ul>';
if (sizeof($list2)) {
    $weekBar2 .= '<li style="width:70px;">' . $nextLink . '</li>';
    foreach ($list2 as $item) {
        $liClass = '';
        if (strpos($item, '<b>') !== false) {
            $liClass = 'current';
        }
        $weekBar2 .= '<li class="' . $liClass . '">' . $item . '</li>';
    }
    $weekBar2 .= '<li style="width:70px;">' . $nextLink . '</li>';
}
$weekBar2 .= '</ul>';
?>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
<tr>
    <td class="alignCenter">
        <div class="weekbar"><?php echo $weekBar1; ?></div>
        <div class="clear">&nbsp;</div>
        <div class="weekbar"><?php echo $weekBar2; ?></div>
    </td>
</table>
<div class="clear">&nbsp;</div>
<?php if ($monthlyLink != '' || $quarterlyLink != '') : ?>
<div class="alignRight" style="margin-right:20px; margin-top:6px;float:right;">Switch to <?php echo $monthlyLink; ?> | <?php echo $quarterlyLink; ?></div>
<?php endif; ?>