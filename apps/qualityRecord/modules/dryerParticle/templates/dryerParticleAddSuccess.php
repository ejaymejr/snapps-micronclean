<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = CustomerAttrPeer::GetCustomerListName();
    //$garmentList  = sfConfig::get('garment_type');
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
    $initialsList = array(''=>' - INITIALS - ', 'JAYAKUMAR'=>'JAYAKUMAR', 'TERENCE'=>'TERENCE', 'OTHERS'=>'OTHERS');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('dryerParticle/dryerParticleAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DRYER NO<br />(unloaded)</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo input_tag('dryer_no', $sf_params->get('dryer_no'), 'size="20"')
			
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PARTICLE COUNT @ 0.3um</td>
				<td class="FORMcell-right" nowrap><?php
                echo input_tag('particle_count', $sf_params->get('particle_count'), 'size="20"')				
				?></td>
				<td colspan="2" class="FORMcell-right" nowrap>
				<span class="negative"><?php echo "Spec < 100 @ 0.3um, else inform manager" ?></span>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TEMPERATURE</td>
				<td class="FORMcell-right" nowrap><?php
                echo input_tag('temperature', $sf_params->get('temperature'), 'size="20"')				
				?>
				</td>
				<td colspan="2" class="FORMcell-right" nowrap>
				<span class="negative"><?php echo "Spec 55 - 65" ?>&deg;C</span>
				</td>
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>NAME</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
//		        echo select_tag('name',
//				options_for_select($initialsList,
//				$sf_params->get('name') ) );
                echo input_tag('name', $sf_params->get('name'), 'size="20" type="hidden"');
                echo 	$sf_params->get('name');
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap>
			</td>
			</tr>
		</table>
	</tr>
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #077</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: MCWI014, MCWI200' ?></td>
	</tr>
</table>
</div>

