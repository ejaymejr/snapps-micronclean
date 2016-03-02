<?php

ob_start ("ob_gzhandler");
header( 'Expires: Mon, 26 Jul 2010 05:00:00 GMT' );
header( 'Last-Modified:  Mon, 26 Jul 2000 05:00:00 GMT' );
//header( 'Cache-Control: no-store, no-cache, must-revalidate' );
//header( 'Cache-Control: post-check=0, pre-check=0', false );
//header( 'Pragma: no-cache' );
header('Content-type: text/javascript');

ini_set('error_reporting', 4095);
ini_set('display_errors', true);

$files1 = array(
		"emanjs",
		"form",
//		"ampie/swfobject",
 		"metroui/jquery/jquery.min",
  		"metroui/jquery/jquery.widget.min",
 		"metroui/jquery/jquery.mousewheel",
		"metroui/prettify/prettify",
//		"metroui/jquery/jquery.dataTables",
//		"metroui/github.info",
//		"metroui/metro/metro-loader",
		"metroui/metro.min",
		"metroui/docs",
		"../flare/js/pe.flare/jquery.pixelentity.flare.min",
		"../flare/js/jquery-migrate-1.2.1.min",		
		"metroui/jquery/jquery.dataTables",
		"/amcharts/amcharts",
		"/amcharts/serial",
		"/amcharts/pie",
		"/signature/flashcanvas",
		"/signature/modernizr",
		"/signature/jSignature.min",
		"/signature/jSignature.min.noconflict",
//		"html2canvas",
//		"searchdropdown",
//		"livefilter",
//		"jquery.qrcode",
//		"amcharts/amcharts",
//		"amcharts/serial",

		//"avgrund",

);

// $files3 = array(
// #    'form-min',
// 		'form',
// 		'grid-min',
// 		'tabs-min',
// 		'snapps-Panel',
// 		'yahoo/utilities/utilities',
// 		'yahoo/container/container-min',
// 		'yahoo/tabview/tabview-min',
// 		'yahoo/button/button-min',
// 		'yahoo/resize/resize-beta-min',
// 		'sortabletable/js/sortabletable-min',
// 		'ampie/swfobject'

// );

include '../../config/config.php';
$prototypeDir = $sf_symfony_data_dir . '/web/sf/prototype/js/';
$prototypes = array('prototype', 'effects', 'controls', 'dragdrop', 'slider', 'builder', 'sound', 'scriptaculous', 'resizable');
$prototypes = array('prototype-1.7.1');
$calendarDir = $sf_symfony_data_dir . '/web/sf/calendar/';
$calendars = array('calendar', 'calendar-setup', 'lang/calendar-en');

//echo realpath('./');

$fileList = array();
foreach ($files1 as $f) {
    $fileList[] = realpath('./') . '/' . $f . '.js';
}

// foreach ($prototypes as $f) {
//     $fileList[] = $prototypeDir . $f . '.js';
// }
// foreach ($calendars as $f) {
//     $fileList[] = $calendarDir . $f . '.js';
// }

// foreach ($files3 as $f) {
//     $fileList[] = realpath('./') . '/' . $f . '.js';
// }
// foreach ($files4 as $f) {
// 	$fileList[] = realpath('./') . '/' . $f . '.js';
// }

$content = '';

// foreach ($fileList as $f) {
//     //$content .= $f . "\n";
// }
foreach ($fileList as $f) {
    $content .= file_get_contents($f);
}


//echo compress($content);
echo $content;
  
function compress($buffer) {
    // remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    // remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}
