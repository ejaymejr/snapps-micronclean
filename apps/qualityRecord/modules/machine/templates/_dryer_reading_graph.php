<?php
//$filterArea = isset($washer)? $washer : "1";
//sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>DRYER PARTICLE AND TEMPERATURE GRAPH FROM '.DateUtils::DUFormat('F-d, Y', $sf_params->get('tis')).' TO '.DateUtils::DUFormat('F-d, Y', $sf_params->get('tie')).'</h2></span>');


$chartID = XIDX::getInstance()->next();
        
$TITLE = 'Dryer Temperature Reading';

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
foreach ($pager as $record) {
	$columns = array( $record->getDateTime() );
}

$plots = array();
$plots['Spec'] = 'Spec';
$plots['Up-Limit'] = 'Up-Limit';
$plots['Low-Limit'] = 'Low-Limit';
foreach ($columns as $col) {
    $plots[$col] = $col;
}

$plotDatas = array();
foreach ($plots as $pl => $key) {
    $plotDatas["$pl"] = array();
    $plotDatas["$pl"]['values'] = array();
}

//var_dump($plots);
$tickLabels = array();
//xaxis
$tickLabels=array('8am','9am','10am','11am','12nn', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm');
$ballonLabels = array();

foreach ($pager as $record) {
    for($x=0; $x<15; $x++) $ballonLabels[] = '';
    
    
    foreach ($plots as $pl) {
        if ($pl == 'Spec') :
        	for($x=0; $x<15; $x++) $plotDatas["Spec"]['values'][] = 85;
        	continue;
        endif;
         if ($pl == 'Up-Limit') :
        	for($x=0; $x<15; $x++) $plotDatas["Up-Limit"]['values'][] = 90;
        	continue;
        endif;
        if ($pl == 'Low-Limit') :
        	for($x=0; $x<15; $x++) $plotDatas["Low-Limit"]['values'][] = 80;
        	continue;
        endif;
        
        
        $val = 0;
        $plotDatas["$pl"]['values'][] = $record->getAm8();
        $plotDatas["$pl"]['values'][] = $record->getAm9();
        $plotDatas["$pl"]['values'][] = $record->getAm10();
        $plotDatas["$pl"]['values'][] = $record->getAm11();
        $plotDatas["$pl"]['values'][] = $record->getNn12();
        $plotDatas["$pl"]['values'][] = $record->getPm1();
        $plotDatas["$pl"]['values'][] = $record->getPm2();
        $plotDatas["$pl"]['values'][] = $record->getPm3();
        $plotDatas["$pl"]['values'][] = $record->getPm4();
        $plotDatas["$pl"]['values'][] = $record->getPm5();
        $plotDatas["$pl"]['values'][] = $record->getPm6();
        $plotDatas["$pl"]['values'][] = $record->getPm7();
        $plotDatas["$pl"]['values'][] = $record->getPm8();
        $plotDatas["$pl"]['values'][] = $record->getPm9();
        $plotDatas["$pl"]['values'][] = $record->getPm10();
    }
}
//var_dump($plotDatas);
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
//var_dump($plotDatas);
//exit();
foreach ($plotDatas as $name => $tmp) {
	   
    $displayName = $name;
    
    if ($name == 'Spec') {    
    	$displayName = "SPEC: 85&deg;C";
    }
    if ($name == 'Up-Limit') {    
    	$displayName = "Upper Limit: 90&deg;C";
    }
    if ($name == 'Low-Limit') {    
    	$displayName = "Lower Limit: 85&deg;C";
    }
    
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
    var so = new SWFObject("<?php echo sfConfig::get('app_amline_public_swf'); ?>", "amline", "850", "500", "8", "#FFFFFF");
    so.addVariable("path", "<?php echo sfConfig::get('app_amline_public_path'); ?>");
    so.addVariable("chart_data", "<?php echo $chartData; ?>");
    so.addVariable("chart_settings", <?php echo $settingString; ?>);
    so.addVariable("preloader_color", "#000000");
    so.addVariable("additional_chart_settings", "<settings></settings>");
    so.write("<?php echo $chartID; ?>");
    // ]]>
</script>

<div id="<?php echo $IDunderlyingData; ?>">
<table class="table bordered ">
<tr>
    <td class="bg-teal fg-white alignCenter">Date</td>
    <?php foreach ($tickLabels as $col) : ?>
    <td class="bg-teal fg-white alignCenter"><?php echo nl2br($col); ?></td>
    <?php endforeach; ?>
</tr>
<?php 
	$pos = 0;
	foreach($plotDatas as $data=>$val):
		if ($data <> 'Up-Limit' && $data <> 'Low-Limit' && $data <> 'Spec'): ?>
			<tr>
				<td class="bg-hover-blue"><?php echo $columns[$pos++] ?></td>
				<?php for($x=0; $x<15; $x++): ?>
				<td class="bg-hover-blue fg-hover-white"><?php echo $val['values'][$x]?></td>
				<?php endfor;?>
			</tr>
<?php 
		endif;
	endforeach;?>
</table>

</div>
     

        