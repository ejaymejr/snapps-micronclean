<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#sendCheckEmail').click(function(e) {
			$('#emailRejectPhoto').submit();
		});
	});
	</script>
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="#">Search</a></li>
			<li><a href="#" id="sendCheckEmail" >Send All Checked Items</a></li>
		</ul>
	</nav>
<form name="FORMupload" method="post" id="emailRejectPhoto"
		action="<?php echo url_for('photo/emailRejectPhoto') ?>"
		enctype="multipart/form-data">
<!-- 		<div class="contentBox"> -->
		        <?php 
					if ($pager):
						$filename = PagerJson::EmailReject($pager);
						$cols = array('seq', 'action', 'date', 'company', 'department','shift', 'garment','sent');
						echo PagerJson::TableHeaderFooter($cols, $filename); //create the table
					endif;
				?>
<!-- 		</div> -->
</form>
	
<!-- 	<button id="createWindow" class="button">Create Window</button> 
	<script> 
    $("#createWindow").on("click", function(){
        $.Dialog({
            shadow: true,
            overlay: false,
            icon: "<span class='icon-rocket'></span>",
            title: "Title",
            width: 500,
            padding: 10,
            content: "Window content here"
        });
    });
	</script> -->