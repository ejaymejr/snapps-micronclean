<?php

$chartID = XIDX::getInstance()->next();
        
$TITLE = $chartTitle;
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
$settingFile = 'amline_settings2.xml';
//$strs = file(   
//                sfConfig::get('sf_plugins_dir') . DIRECTORY_SEPARATOR .
//                'amline' . DIRECTORY_SEPARATOR .
//                'config' . DIRECTORY_SEPARATOR . $settingFile);
                
$strs = file(   
                SF_ROOT_DIR . DIRECTORY_SEPARATOR .
                'apps' . DIRECTORY_SEPARATOR .
                SF_APP . DIRECTORY_SEPARATOR .
                'modules' . DIRECTORY_SEPARATOR .
                $sf_params->get('module') . DIRECTORY_SEPARATOR .
                'config' . DIRECTORY_SEPARATOR .
                'amcolumn' . DIRECTORY_SEPARATOR . $settingFile);                

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
        





$tickLabels = array();
$ballonLabels = array();
$colTotals = array();
$plotDatas = array();
foreach ($plots as $pl) {
    $plotDatas["$pl"] = array();
    $plotDatas["$pl"]['total'] = 0;
    $plotDatas["$pl"]['values'] = array();
    
}
foreach ($statsData as $record) {
    foreach ($record['point'] as $rejectType => $tmp) {
        if (array_key_exists($rejectType, $plotDatas)) {
            $plotDatas["$rejectType"]['values'][] = $tmp['total'];
            $plotDatas["$rejectType"]['total'] += $tmp['total'];
        }
    }
}



for ($i = 0; $i < sizeof($statsData); $i++) {
    $label = $Xs[$i];
    $label = str_replace("\n", '\\n', $label);
    $label = str_replace("\r", '', $label);    
    $tickLabels[] = $label;
    $ballonLabels[] = '';
    
    $colTotals[$i] = 0;
    foreach ($plotDatas as $rejectType => $tmp) {
        $colTotals[$i] += $tmp['values'][$i];
    }
}
       
        
        
$chartData = '<chart>';
// populate axis
$chartData .= '<xaxis>';
for ($i = 0; $i < sizeof($tickLabels); $i++) {
    $chartData .= '<value xid=\'' . $i . '\'>' . $tickLabels[$i] . '</value>';
}
$chartData .= '</xaxis>';

// populate graphs
$chartData .= '<graphs>';

foreach ($plotDatas as $rejectType => $tmp) {    
    $chartData .= '<graph balloon_text=\'{description}    {value}\' title=\'' . $rejectType . '\'>';       
    for ($i = 0; $i < sizeof($tickLabels); $i++) {
        $chartData .= '<value xid=\'' . $i . '\' description=\'' . $ballonLabels[$i] . '\' >' . $tmp['values'][$i] . '</value>';
    }
    $chartData .= '</graph>';
}
$chartData .= '</graphs>';
$chartData .= '</chart>';
if (sizeof($tickLabels) <= 30){
    $widt = 800;
}else{
    $widt = 600 + (sizeof($tickLabels) * 2);
}
?>
<div id="<?php echo $chartID; ?>">
    <strong>You need to upgrade your Flash Player</strong>

</div>

<script type="text/javascript">
    // <![CDATA[    
    var so = new SWFObject("<?php echo sfConfig::get('app_amline_public_swf'); ?>", "amline", <?php echo $widt ?>, "400", "8", "#FFFFFF");
    so.addVariable("path", "<?php echo sfConfig::get('app_amline_public_path'); ?>");
    so.addVariable("chart_data", "<?php echo $chartData; ?>");
    so.addVariable("chart_settings", <?php echo $settingString; ?>);
    so.addVariable("preloader_color", "#000000");
    so.write("<?php echo $chartID; ?>");
    // ]]>
</script>
      
<?php
$IDunderlyingData = $chartID . '_udata';
?>  
<div style="text-align:left; padding:5px; margin-bottom:10px;">
<a href="#" onclick="showHideElement('<?php echo $IDunderlyingData; ?>'); return false;">Show/Hide underlying data...</a>
<div id="<?php echo $IDunderlyingData; ?>" style="display:none;">
<table width="100%" class="quantity-table" style="clear:both;" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td width="100" class="section-header">&nbsp;</td>
    <?php foreach ($Xs as $col) : ?>
    <td class="section-subheader alignCenter"><?php echo nl2br($col); ?></td>
    <?php endforeach; ?>
    <td class="section-header alignRight">Total</td>
</tr>
<?php foreach ($plotDatas as $rejectType => $tmp) : ?>
<tr>
    <td width="200" class="section-subheader" nowrap wrap="off"><?php echo $rejectType; ?></td>
    <?php foreach ($tmp['values'] as $val) : ?>
    <td class="alignRight"><?php echo HTMLText::FormatCellNumber($val); ?></td>
    <?php endforeach; ?> 
    <td class="section-header alignRight"><?php echo HTMLText::FormatCellNumber($tmp['total']); ?></td>    
</tr>
<?php endforeach; ?> 
<tr>
    <td width="100" class="section-header alignRight">Total</td>
    <?php foreach ($colTotals as $val) : ?>
    <td class="section-subheader alignRight"><?php echo HTMLText::FormatCellNumber($val); ?></td>
    <?php endforeach; ?>
    <td class="section-header alignRight"><?php echo HTMLText::FormatCellNumber(0); ?></td>
</tr>
</table>

</div>
</div>

        