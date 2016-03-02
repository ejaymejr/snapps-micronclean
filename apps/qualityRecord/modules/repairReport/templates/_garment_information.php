<?php use_helper('Validation', 'Javascript') ?>
<?php
//$sql = "select * from garmentInformation where garment_code = '".$garmentCode."' order by inserted_date desc";
////$res = RejectLib::ExecuteSQL('mercury_online_garment', $sql);
//$res = GarmentinformationPeer::ExecuteSQL('', $sql);
//$gtype = '';
//$gsize = '';
//$gcolor= '';
//$gcustomer = '';
//$xwash = 0;
//while ($res->next()):
//	//$garments[ $res->getString('garment_code') ] = $res->getString('customer') .'_' . $res->getString('type') .'_' .$res->getString('size') .'_' .$res->getString('color') ;
//	$gtype     = $res->getString('type');
//	$gsize     = $res->getString('size');
//	$gcolor    = $res->getString('color');
//	$gcustomer = $res->getString('customer');
//	$xwash     = $res->getInt('no_of_times_wash');
////	$cID       = $res->getInt('no_of_times_wash');
//endwhile;
$hidden = 'type=hidden';
//$hidden = '';
//$sf_params->set('customer', $gcustomer);
//echo $sf_params->get('customer');
	echo javascript_tag("
		document.getElementById('garment_type').value = '".$sf_params->get('garment')."'
		document.getElementById('DIVGarmentType').innerHTML = '".$sf_params->get('garment')."'
	");

if (! $sf_params->get('garment')):
	echo '<span class="tk-red"><h2>GARMENT NOT FOUND</h2></span>';
endif;
?>
<table id="tableUpload" width="100%" cellpadding="4" cellspacing="2"
	border="0">
	<tr class="dataGridRowOdd">
		<td colspan="5"
			class="dataGridTableHeaderColumn alignCenter alignMiddle" nowrap>
		<h3>Garment Information</h3>
		</td>
	</tr  >
	<tr class="dataGridRowEven">
        <td class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap>Customer</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><h2>
        <?php 
        	echo $sf_params->get('customer');
        	echo input_tag('customer', $sf_params->get('customer'), $hidden);
        ?></h2>
        </td>
         <td class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap>Color</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <?php 
        	echo $sf_params->get('color');
        	echo input_tag('color', $sf_params->get('color'), $hidden);
        ?>
        </td>
    </tr>
	<tr class="dataGridRowOdd">
        <td width="20%" class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap>Type</td>
        <td width="20%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <?php 
        	echo $sf_params->get('garment');
        	echo input_tag('garment', $sf_params->get('garment'), $hidden);
        ?>
        </td>
         <td width="20%" class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap>Size</td>
         <td width="20%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <?php 
        	echo $sf_params->get('size');
        	echo input_tag('size', $sf_params->get('size'), $hidden);
        ?>
        </td>
    </tr>

    <tr class="dataGridRowEven">
         <td class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap>Times Wash</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <?php 
        	echo $sf_params->get('no_of_times_wash');
        	echo input_tag('no_of_times_wash', $sf_params->get('no_of_times_wash'), $hidden);
        ?>
        </td>
        <td class="dataGridTableHeaderColumn alignRight alignMiddle" nowrap></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <?php 
        	//echo $xwash;
        ?>
        </td>
    </tr>
</table>
<?php 
echo input_tag('garment_type', $sf_params->get('garment_type'), 'type=hidden');
