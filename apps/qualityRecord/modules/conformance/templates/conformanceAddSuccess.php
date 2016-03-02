<?php use_helper('Validation', 'Javascript') ?>
<?php
    
    //$garmentList  = sfConfig::get('garment_type');
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $departmentList     = array(''=>' -SELECT COMPANY- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
    $initialsList = array(''=>' - INITIALS - ', 'JAYAKUMAR'=>'JAYAKUMAR', 'TERENCE'=>'TERENCE', 'OTHERS'=>'OTHERS');
    $productList     = array(''=>' -SELECT COMPANY- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('conformance/conformanceAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="20%" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100%" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date', $sf_params->get('date', date('Y-m-d')), 'date', XIDX::next(), ' size="12" '); ?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap><B>COMPANY</B></td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
                $qParams = "'company=' + \$F('company')";

                $ajaxOption = array(
                    'url'      => 'conformance/showInfo?id='.$sf_params->get('id'),
                    'with'     => $qParams,
                    'update'   => 'DIVShowInfo',
                    'script'   => true,
                    'loading'  => 'stop_remote_pager();',
                    'before'   => 'showLoader();',
                    'complete' => 'hideLoader();formatFormStyle();',
                    'type'     => 'synchronous',
                );		
		        echo select_tag('company',
				options_for_select($departmentList,
				$sf_params->get('company') ),  array('onchange'=>remote_function($ajaxOption) . ';clearField(this.form);return false; ') );				
				?></td>
			</tr>

		   	</table>
		   	<div id="DIVShowInfo">
		   	<?php
              $param = array(
              'company'=>$sf_params->get('company')
              );
              include_partial('add_info', $param);
            ?>
		</div>
	</tr>
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #048 & 049</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs:   WI004rev001   WI016rev001   WI020rev003   WI024rev001   MCS-QP-OPS-03rev001' ?></td>
	</tr>
</table>
</div>



