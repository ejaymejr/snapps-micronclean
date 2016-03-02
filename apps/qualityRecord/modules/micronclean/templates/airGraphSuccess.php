<?php


$area = QrLocationPeer::GetFilterListNoSelect();
//include_partial('airGraph', array('pager'=>$pager,'filterArea'=>'3F'));
foreach($area as $fArea):
	include_partial('airGraph', array('pager'=>$pager,'filterArea'=>$fArea));
endforeach;        