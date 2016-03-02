<?php


// $area = QrLocationPeer::GetFilterListNoSelect();
// //include_partial('airGraph', array('pager'=>$pager,'filterArea'=>'3F'));
// foreach($area as $fArea):
// 	include_partial('bacteriaGraph', array('pager'=>$pager,'filterArea'=>$fArea));
// endforeach;       
$customers = array(); 
$customers = GarmentBacteriaCountPeer::GetCustomerList();
foreach($customers as $customer):
	$spec = 30;
	$spec =  strpos(strtolower($customer), 'seagate') !== false ? 50 : $spec;
	include_partial('bacteriaGraph', array('pager'=>$pager,'customer'=>$customer, 'spec'=>$spec));
endforeach;