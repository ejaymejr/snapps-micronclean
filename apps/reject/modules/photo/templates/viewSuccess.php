<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#EmailPhoto').click(function(e) {
			window.location = '<?php echo url_for('photo/view') . '?token=' . $sf_params->get('token') ?>';
		});
		$('#EmailPhotoCustomer').click(function(e) {
			window.location = '<?php echo url_for('photo/view') . '?customer=' . $sf_params->get('customer')  .'&token='.$sf_params->get('token').'&show=customer' ?>';
		});
	    $('.tab-control').tabcontrol({
	        effect: 'fade' 
	        });
	});
</script>
       
<?php
	//echo $sf_params->get('eID');
	echo input_tag('eID', $sf_params->get('eID'), 'type=hidden'); 
	echo input_tag('token', $sf_params->get('token'), 'type=hidden'); 
	echo input_tag('customer', $sf_params->get('customer'), 'type=hidden'); 
	echo input_tag('garment_code', $sf_params->get('garment_code'), 'type=hidden'); 
?>
<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="#">&nbsp;</a></li>
			<li><a href="<?php echo url_for('photo/view') . '?token=' . $sf_params->get('token').'&eID='.$sf_params->get('eID') ?>">Show Email</a> </li>
			<li><a href="<?php echo url_for('photo/view') . '?customer=' . $sf_params->get('customer')  .'&token='.$sf_params->get('token').'&eID='.$sf_params->get('eID').'&show=email' ?>">Show Emailed Photo History</a></li>
		</ul>
	</nav>
<table class="table bordered striped" cellpadding="10px">
	<?php foreach($photoIDs as $photoID): ?>
	<tr>
		<td class="" >
			<?php include_partial('view', array('files'=>$files, 'photoID'=>$photoID));?>
		</td>
	</tr>
	<?php endforeach;?>
</table>
</div>