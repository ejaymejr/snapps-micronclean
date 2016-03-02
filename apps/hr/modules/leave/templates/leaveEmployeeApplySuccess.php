<?php //sfConfig::set('app_page_heading', 'Leave Request Forms'); ?>
<?php use_helper('Validation', 'Javascript') ?>
<?php //sfConfig::set('app_page_heading', 'Leave Request Form');
//var_dump($sf_params->get('ctab'));
sfConfig::set('app_page_heading', 'test');
echo  '<h2>&nbsp;&nbsp;GOTO SCAN IN '. link_to('Click Here', 'dtr/scanIn') . '</h2>';
?>

<table width="100%" class="FORMtable" border="0" cellpadding="4"
	cellspacing="0">
	<tr>
		<td>&nbsp;</td>

		<td colspan="2" class="FORMcell-right" nowrap>


		<div class="sales-form-container">
		<div class="afp-form">
		<div id="tab_employeeadd" class="yui-navset tab-group">
		<ul class="yui-nav">
			<li class="<?php echo currentTab($sf_params->get('ctab'), 2); ?>"><a href="#annual"><em>Annual Leave</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 6); ?>"><a href="#unpaid"><em>Unpaid Leave</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 1); ?>"><a href="#mc"><em>Medical Leave</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 8); ?>"><a href="#ns"><em>National Service</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 13); ?>"><a href="#hospitalization"><em>Hospitalization</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 12); ?>"><a href="#maternity"><em>Maternity</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 7); ?>"><a href="#child"><em>Child Care</em></a></li>
			<li class="<?php echo currentTab($sf_params->get('ctab'), 11); ?>"><a href="#compassionate"><em>Compassionate</em></a></li>
		</ul>
		<div class="yui-content">
		<div id="annual">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>2,'reason'=>'Holiday', 'cal'=>$cal)) ?></div>
		</div>
		<div id="unpaid">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>6,'reason'=>'Emergency Leave', 'cal'=>$cal)) ?></div>
		</div>
		<div id="mc">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>1,'reason'=>'Sick', 'cal'=>$cal)) ?></div>
		</div>

		<div id="ns">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>8,'reason'=>'National Service', 'cal'=>$cal)) ?></div>
		</div>

		<div id="hospitalization">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>13,'reason'=>'Hospitalized', 'cal'=>$cal)) ?></div>
		</div>

		<div id="maternity">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>12,'reason'=>'Maternity', 'cal'=>$cal)) ?></div>
		</div>

		<div id="child">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>7,'reason'=>'Child Care', 'cal'=>$cal)) ?></div></div>
		
		<div id="compassionate">
		<div class="tab-body"><?php include_partial('leave_employee_apply', array('leaveID'=>11,'reason'=>'', 'cal'=>$cal)) ?></div></div>

		
		</div>
		</div>
		</div>
		</div>
		
		</td>
	</tr>
</table>
<script language="Javascript">
var cv_tabView = new YAHOO.widget.TabView('tab_employeeadd'); 
var url = location.href.split('#');
if (url[1]) {
    //We have a hash
    var tabHash = url[1];
    var tabs = cv_tabView.get('tabs');
    for (var i = 0; i < tabs.length; i++) {
        if (tabs[i].get('href') == '#' + tabHash) {
            cv_tabView.set('activeIndex', i);
            break;
        }
    }    
    window.setTimeout('scrollTop()', 500);
}

</script>

<?php
function currentTab($ctab, $tabs)
{
	$ctab = $ctab ? $ctab : '2';
	return ( ($ctab == $tabs)? 'selected' : '');
	
}
 ?>