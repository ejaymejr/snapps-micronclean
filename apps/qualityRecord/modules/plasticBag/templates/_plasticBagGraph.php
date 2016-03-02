<?php
//$filterArea = isset($washer)? $washer : "1";

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>DRYER PARTICLE AND TEMPERATURE GRAPH FROM '.DateUtils::DUFormat('F-d, Y', $sf_params->get('tis')).' TO '.DateUtils::DUFormat('F-d, Y', $sf_params->get('tie')).'</h2></span>');


$chartID = XIDX::getInstance()->next();
        


if ($tests == 'IC') {
	$TITLE = isset($chartTitle) ? $chartTitle : 'IC Test';
}else{
	$TITLE = isset($chartTitle) ? $chartTitle : 'LPC Test';
}	
	
$XDENSITY = 2;
$VERTGRID = 10;


$Y_AXIS_IS_FIX_HEIGHT = 'false';
$Y_AXIS_HEIGHT = '25000';
/*
if (isset($_GET['yfix'])) $Y_AXIS_IS_FIX_HEIGHT = trim(stripslashes($_GET['yfix']));
else if (isset($_SESSION['yfix'])) $Y_AXIS_IS_FIX_HEIGHT = trim(stripslashes($_SESSION['yfix']));

if (isset($_GET['yfixh'])) $Y_AXIS_HEIGHT = trim(stripslashes($_GET['yfixh']));
else if (isset($_SESSION['yfixh'])) $Y_AXIS_HEIGHT = trim(stripslashes($_SESSION['yfixh']));
*/
if ($Y_AXIS_IS_FIX_HEIGHT == 'false') $Y_AXIS_HEIGHT = '';

$_SESSION['yfix'] = $Y_AXIS_IS_FIX_HEIGHT;
$_SESSION['yfixh'] = $Y_AXIS_HEIGHT;
    
        
// get settings    
$settingFile = 'amline_settings.xml';
$strs = file(   
                SF_ROOT_DIR . DIRECTORY_SEPARATOR . 
                'apps' . DIRECTORY_SEPARATOR . 
                'qualityRecord' . DIRECTORY_SEPARATOR .
                'config' . DIRECTORY_SEPARATOR . 
                'amline' . DIRECTORY_SEPARATOR . $settingFile);

$settings = array();
foreach ($strs as $str) {

    if (strpos($str, '<!--') === false) {
        $str = trim($str);   
        // var_dump($str);   
        // $str = str_replace("\r", '', $str);
        $str = str_replace('$TITLE', $TITLE, $str);   
        $str = str_replace('$XDENSITY', $XDENSITY, $str);  
        $str = str_replace('$VERTGRID', $VERTGRID, $str);    
        
        $str = str_replace('$Y_AXIS_IS_FIX_HEIGHT', $Y_AXIS_IS_FIX_HEIGHT, $str);  
        $str = str_replace('$Y_AXIS_HEIGHT', $Y_AXIS_HEIGHT, $str);  
        
        if ($str != '') $settings[] .= '"' . $str . '"';  
    }
} 

$settingString = implode(' + ' . "\n", $settings);


// #################### end of settings
        
if ($tests == 'IC') {
	$columns = array( 'IC_CL_IN_CM', 'IC_NO_IN_CM', 'IC_SO_IN_CM');
}
if ($tests == 'LPC') {
	$columns = array( 'LPC_BLANK_IN_ML', 'LPC_PLASTIC_IN_ML', 'LPC_PLASTIC_IN_CM');
}	
//'LPC_BLANK_IN_ML', 'LPC_PLASTIC_IN_ML', 'LPC_PLASTIC_IN_CM',
$plots = array();
foreach ($columns as $col) {
    $plots[$col] = $col;
}
//$plots['Spec'] = 'Spec';


$plotDatas = array();
foreach ($plots as $pl => $key) {
    $plotDatas["$pl"] = array();
    $plotDatas["$pl"]['values'] = array();
}


$tickLabels = array();
$ballonLabels = array();
foreach ($pager as $record) {
    $tickLabels[] = $record->getDateTime('M j');
    $ballonLabels[] = '';
    
    if ($tests == 'IC') {    
    	$plotDatas["Spec"]['values'][] = .99;
    }else{
    	$plotDatas["Spec"]['values'][] = .05;   
    }


    foreach ($plots as $pl) {
        if ($pl == 'Spec') continue;
        
        $val = 0;
        if ($pl == 'LPC_BLANK_IN_ML') $val = $record->getLpcBlankInMl() ;
        if ($pl == 'LPC_PLASTIC_IN_ML') $val = $record->getLpcPlasticInMl() ;
        if ($pl == 'LPC_PLASTIC_IN_CM') $val = $record->getLpcPlasticInCm() ;
        if ($pl == 'IC_CL_IN_CM') $val = $record->getIcClInCm() ;
        if ($pl == 'IC_NO_IN_CM') $val = $record->getIcNoInCm() ;
        if ($pl == 'IC_SO_IN_CM') $val = $record->getIcSoInCm() ;
        $val = str_replace('%', '', $val);
        $plotDatas["$pl"]['values'][] = $val;
    }
}


$lineWidths = array();
foreach ($plots as $pl => $key) {
    $lineWidths["$pl"] = 1;
}
$lineWidths['Spec'] = 0;


  
//var_dump($plotDatas['Spec']);
//exit();        
        
$chartData = '<chart>';
// populate axis
$chartData .= '<xaxis>';
for ($i = 0; $i < sizeof($tickLabels); $i++) {
    $chartData .= '<value xid=\'' . $i . '\'>' . $tickLabels[$i] . '</value>';
}
$chartData .= '</xaxis>';

// populate graphs
$chartData .= '<graphs>';

foreach ($plotDatas as $name => $tmp) {
	   
    $displayName = $name;
    
    if ($tests == 'IC' && $name == 'Spec') {    
    	$displayName = "SPEC: IPC Spec isLess than 1";
    }
    
    if ($tests == 'LPC' && $name == 'Spec') {    
    	$displayName = "LPC Spec is 0.5um";
    }    
//    }else{
//    	$displayName = "LPC Spec is 0.5um";   
//    }
   
	    
    if (true) {
        $chartData .= '<graph line_width=\'' . $lineWidths["$name"] . '\' balloon_text=\'{description}    {value}\' title=\'' . $displayName . '\'>';       
        for ($i = 0; $i < sizeof($tickLabels); $i++) {
            $chartData .= '<value xid=\'' . $i . '\' description=\'' . $ballonLabels[$i] . ' ' . $displayName . '\' >' . $tmp['values'][$i] . '</value>';
        }
        $chartData .= '</graph>';
    }
}
$chartData .= '</graphs>';
$chartData .= '</chart>';


?>
<div id="<?php echo $chartID; ?>">
    <strong>You need to upgrade your Flash Player</strong>

</div>

<script type="text/javascript">
    // <![CDATA[        
    var so = new SWFObject("<?php echo sfConfig::get('app_amline_public_swf'); ?>", "amline", "850", "300", "8", "#FFFFFF");
    so.addVariable("path", "<?php echo sfConfig::get('app_amline_public_path'); ?>");
    so.addVariable("chart_data", "<?php echo $chartData; ?>");
    so.addVariable("chart_settings", <?php echo $settingString; ?>);
    so.addVariable("preloader_color", "#000000");
    so.addVariable("additional_chart_settings", "<settings></settings>");
    so.write("<?php echo $chartID; ?>");
    // ]]>
</script>
      

        