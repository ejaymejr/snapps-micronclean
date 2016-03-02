<?php
	$fldName = 'field'.$fldId;
	$onOff   = array('ON'=>'- ON -', 'OFF'=>'- OFF -');
	switch($fldType)
	{
		case 'NUMERIC':
			echo input_tag(  $fldName,  $sf_params->get( $fldName ) , 'size="20"');
			break;			
		case 'ON/OFF':
	    	echo select_tag($fldName, 
	             options_for_select($onOff, 
	             $sf_params->get($fldName) ) );         
			break;
		default: 
			echo input_tag(  $fldName,  $sf_params->get( $fldName ) , 'size="20"');
			break;
	}