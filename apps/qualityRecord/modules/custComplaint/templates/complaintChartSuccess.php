<?php
//var_dump($complaint);
//exit();

//$lab = array('label 1', 'label 2', 'label 3');
//$plot = array();
//$data = array(1.5, 2.5, 2);

$lab = array();
$plot = array();
$data = array();
$total = 0;

foreach ($complaint as $month=>$count){
    $lab[]  = $month;
    $plot[] = '';
    $data[] = $count;
    $total += $count;
}
include_partial('amline',
array(
            'Xs'            => $lab,
            'plots'    => $plot,
            'statsData' => $data, 
            'left_title'=> 'Total Complaint: ' .$total,
            'chartTitle' => 'CUSTOMER COMPLAINT FOR THE PAST THIRTEEN MONTHS'));

?>