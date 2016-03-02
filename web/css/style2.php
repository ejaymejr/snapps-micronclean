<?php

error_reporting(4095);
ini_set('display_errors', true);

$yahooFiles = array('../js/yahoo/assets/skins/sam/skin.css');
$calendarFiles = array('calendar/skins/aqua/theme.css');
//$files = array('html', 'grid', 'menu',  'global_dashboard', 'layout', 'auxiliary_panel'
//,'calendar', 'bigtable', 'sortabletable', 'yui', 'customer');
//               ,'class3','grid3','html3','main_layout3', 'rating');

include '../../config/config.php';
$prototypeDir = $sf_symfony_data_dir . '/web/sf/prototype/css/';
$prototypes = array('input_auto_complete_tag');



$css = '';
foreach ($yahooFiles as $f) {
    $tmp = file_get_contents($f);
    
    $tmp = str_replace('url( ', 'url(', $tmp);
    $tmp = str_replace('url(', 'url(../js/yahoo/assets/skins/sam/', $tmp);
    $css .= $tmp;
}
foreach ($calendarFiles as $f) {
    $tmp = file_get_contents($f);
    
    $tmp = str_replace('url("', 'url("calendar/skins/aqua/', $tmp);
    $css .= $tmp;
}

foreach ($prototypes as $f) {
    $tmp = file_get_contents($prototypeDir . $f . '.css');
    $css .= $tmp;
}
foreach ($files as $f) {
    $css .= file_get_contents($f . '.css');
}


ob_start ("ob_gzhandler");
header( 'Expires: Mon, 26 Jul 2010 05:00:00 GMT' );
header( 'Last-Modified:  Mon, 26 Jul 2000 05:00:00 GMT' );
//header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
//header( 'Cache-Control: no-store, no-cache, must-revalidate' );
//header( 'Cache-Control: post-check=0, pre-check=0', false );
//header( 'Pragma: no-cache' );
header('Content-type: text/css');
echo compress($css);



function compress($buffer) {
    // remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    // remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}
