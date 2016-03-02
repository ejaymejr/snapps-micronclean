<?php use_helper('Text', 'Number', 'Form', 'Javascript', 'PagerNavigation'); ?>


<?php 
//var_dump($pager);
$SN = 1;
$rowCount = 0;
$SN = $pager->getFirstIndice();
foreach ($pager->getResults() as $record): ?>
<?php
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'sq_' . $record->getId();  

if ($sf_params->get('hIDs') && is_array($sf_params->get('hIDs')) && in_array($record->getId(), $sf_params->get('hIDs'))) {
    $rowClass .= ' highlightRow';
}



$desc = $record->getName();

//$garmentList = GarmentinformationPeer::GetGarmentListByCustomer($record->getName(), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));

//$emailStatus = FileDetailPeer::GetSentEmailStatus($garmentList);

$emailStatus = FileDetailPeer::GetEmailStatus($record->getBatchId());
$sent = $emailStatus['sent']. '/' . $emailStatus['total'];
$unsent = $emailStatus['unsent']  . '/' . $emailStatus['total'];

$jsViewParm = "'customer=". $record->getName() . "'" 
	 ;
$ajaxViewCustomer = array(
        'update'    => 'DIVShowCustomerPhoto',
		'with'    	=> $jsViewParm,
        'url'       => 'photo/ajaxViewPhotoDetail',
        'type'      => 'synchronous',
        'loading'   => 'stop_remote_pager();',
        'script'    => true   
);					
$viewLink = link_to('View', '', array('onclick' => remote_function($ajaxViewCustomer) . ';return false;' ) );

$checkBoxID = 'gridCheckBox_item_' . $record->getId();


?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php echo $viewLink ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getName(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo DateUtils::DUFormat('M d, Y', $record->getTransDate()) ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $sent; ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $unsent; ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getFilename() ?></td>    
    <td width = "20%" class="alignCenter alignTop" nowrap >    <?php
        $link = "http://orion.micronclean/cityhall/hr/hrLog.php?modBy=".$record->getModifiedBy().'&modDt='.$record->getDateModified().'&crBy='.$record->getCreatedBy().'&crDt='.$record->getDateCreated();
//         echo ("
//             <a href='' onClick=\"myRef = window.open(
//             '".$link."'
//             ,'mywin',
//             'left=500,top=200,width=500,height=160,toolbar=0,resizable=0, status=0, location=0, directories=0');
//             myRef.focus()\">Show Log</a>
//             ");
    ?>  
</td>
</tr>

    
<?php $SN++; $rowCount++; endforeach ?>


