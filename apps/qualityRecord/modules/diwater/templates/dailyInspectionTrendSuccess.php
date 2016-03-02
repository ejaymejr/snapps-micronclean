<?php

sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>DI TEMPERATURE AND HUMIDITY GRAPH</h2></span>');


$chartID = XIDX::getInstance()->next();
        
$TITLE = isset($chartTitle) ? $chartTitle : 'Temperature and Humidity Graph';
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
                'modules' . DIRECTORY_SEPARATOR . 
                'diwater' . DIRECTORY_SEPARATOR . 
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
        

$columns = array('TEMPERATURE', 'HUMIDITY REF');

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
foreach ($pager->getResults() as $record) {
    
    $tickLabels[] = $record->getInspectionDate('M j');
    $ballonLabels[] = '';
    
    $plotDatas["Spec"]['values'][] = 1;
    
    $items = $record->getInspectionRecordItems();
//    var_dump($items);
//    exit();
    foreach ($plots as $pl) {
        if ($pl == 'Spec') continue;
        
        $col = $pl;
        
        $val = 0;
        foreach ($items as $item) {
            if ($item->getFieldName() == $col) {
                $val = $item->getFieldValue();
            }
        }
        $val = str_replace('%', '', $val);
            
        
        $plotDatas["$pl"]['values'][] = $val;
    }
}



$lineWidths = array();
foreach ($plots as $pl => $key) {
    $lineWidths["$pl"] = 1;
}
$lineWidths['Spec'] = 2;


  
        
        
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
    if ($name == 'Spec') $displayName = 'Spec : 1 ppb';
    
    if ($name != 'Spec') {
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
      

        