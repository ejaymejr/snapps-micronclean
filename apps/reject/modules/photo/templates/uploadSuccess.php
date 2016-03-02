<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#sendCheckEmail').click(function(e) {
			$('#emailRejectPhoto').submit();
		});
	});
	</script>
<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="#">Search</a></li>
			<li><a href="uploader">Upload New Reject Photo</a></li>
			<li><a href="#" id="sendCheckEmail" >Send All Checked Items</a></li>
		</ul>
	</nav>
	<form name="FORMupload" method="post" id="emailRejectPhoto"
		action="<?php echo url_for('photo/emailRejectPhoto') ?>"
		enctype="multipart/form-data">
        <?php 
			if ($pager):
				$filename = PagerJson::EmailReject($pager);
				$cols = array( 'seq', 'action', 'date', 'company', 'department','shift', 'garment', 'sent');
				echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
			endif;
		?>
	</form>
</div>