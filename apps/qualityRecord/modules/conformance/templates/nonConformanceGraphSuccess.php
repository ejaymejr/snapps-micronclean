<?php

//$coList = NonConformancePartPeer::GetCompanyList();
//var_dump($coList);
//exit();
//include_partial('airGraph', array('pager'=>$pager,'filterArea'=>'3F'));
$coList = array('QUANTITY', 'COST');
foreach($coList as $co):
	include_partial('nonConformanceGraph', array('pager'=>$pager,'columns'=>$co));
endforeach;        