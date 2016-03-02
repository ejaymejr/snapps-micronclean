<?php


$washer = array('1', '2');
//include_partial('airGraph', array('pager'=>$pager,'filterArea'=>'3F'));
foreach($washer as $wash_no):
	include_partial('dryerParticleGraph', array('pager'=>$pager,'washer'=>$wash_no));
endforeach;        