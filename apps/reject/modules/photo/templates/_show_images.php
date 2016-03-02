<?php 
$fileLoc = "/micronclean/images/" . $filename;
$fileID = str_replace('.', '_', $file);

?>
<?php //echo $fileID ; return;?>
<div class="contentBox">

	
<div class="tile-group ">

	<div class="tile double image double-vertical" id="DIVGarmentPhoto_<?php echo $fileID ?>">
		<a href="<?php echo $fileLoc; ?>" data-target="flare"
			data-flare-scale="fitmax"> <img src="<?php echo $fileLoc; ?>" height="500" width="400" class="polaroid shadow" />
		</a>
		<?php //echo $fileLoc; ?>
		<div class="brand bg-orange ">
			<p class="text" id="Description_<?php echo $fileID?>">
        			<input type="checkbox" id="CheckBox_<?php echo $fileID; ?>" name="CheckBox_<?php echo $fileID; ?>" value="<?php echo $file; ?>" class="garmentChkbox">
        			<span class="helper"><?php echo $file; ?></span>
        			<span class="check"></span>
			</p>
			<div class="badge">10</div>
		</div>
	</div>

	<div class="tile bg-green" data-role="tile-slider"
		data-param-period="5000" id="Sendmailto_<?php echo $fileID ?>">

		<div class="tile-content bg-blue ">
			<div 
				class="attachmentIcon icon-mail"
				style="font-size: 70px; left-padding: 10px;"
				id="EmailAttachmentIcon_<?php echo $fileID ?>" ></div>
		</div>
		<div class="brand">
			<span class="name">Mail</span>
			<div class="badge">
				<i class="icon-mail"></i>
			</div>
		</div>
	</div>


	<div class="tile icon ">
		<div class="tile-content bg-orange" id="DeletePhoto_<?php echo $fileID ?>">
			<div 
				class="attachmentIcon icon-remove "
				style="font-size: 70px; left-padding: 10px;"
				id="DeletePhotoIcon_<?php echo $fileID ?>" ></div>
		</div>
		<div class="brand">
			<span class="name">Delete</span>
			<div class="badge">
				<i class="icon-cancel-2"></i>
			</div>
		</div>
	</div>

	<br>

	<div class="tile icon ">
		<div class="tile-content bg-red" id="SelectAll_<?php echo $fileID ?>">
			<div 
				class="attachmentIcon icon-list "
				style="font-size: 70px; left-padding: 10px;"
				id="SelectAllIcon_<?php echo $fileID ?>" ></div>
		</div>
		<div class="brand">
			<span class="name">(Un)Select All</span>
			<div class="badge">
				<i class="icon-checkbox"></i>
			</div>
		</div>
	</div>
		<?php echo checkbox_tag('donotsend_'.$fileID.'', 'YES', $sf_params->get('email_send'),'id="13123123123123123123" type="hidden"' ); ?>
	<br>
	<div class="input-control checkbox fg-red">	
	<label>
	
		<?php
			//echo $fileDetail->getSendEmail();
			echo checkbox_tag('donotsend_'.$fileID.'', 'NO', $sf_params->get('donotsend_'.$fileID) );
		?>
		<span class="check"></span>
		DO NOT SEND THIS FILE FOR EMAIL. 
		<i class="icon-copy on-right on-left"
		style="background: #B7E2FB;
		color: white;
		padding: 10px;
		border-radius: 50%"></i> 
		Keeping for record purpose only.
	</label>
	</div>
	
	
	</div>
	
</div>

	<div class="contentBox ">
		<div class="panel" data-role="panel">
			<div class="panel-header  bg-darkRed fg-white">
			Description
			</div>
			<div class="panel-content">
				<div class="input-control textarea">
				   <?php 
			    		echo textarea_tag('dsc_'. $fileID, $sf_params->get('dsc_' . $fileID)) ;
			    	?>
			    </div>
			</div>
			&nbsp;
			<button value="saveDescription" type="submit" name="saveDescription" id="saveDescription" class="success" ><i class="icon-drawer"></i> Save Description </button>
			<div>&nbsp;</div>
		</div>
	</div>
	
 <script type="text/javascript">

		$('#EditDescription_<?php echo $fileID ?>').click(function(e) {
			$.Dialog({
				'title'      : 'DESCRIPTION',
				'content'    : 'Description<br /><?php echo textarea_tag('description_text_'.$fileID, $description, '200x3, onclick=this.select()') ?>',
				'draggable'  : true,
				'closeButton': true,
				'buttonsAlign': 'right',
				'buttons'    : {
					'Ok'    : {
						'action': function() { 
								  <?php echo AjaxLib::SaveDescriptionAjax($file, array('FullDescription_') ); ?>
								  }
								 
					},
				}
			});
		});

		$('#Sendmailto_<?php echo $fileID ?>').click(function(e) { 
					var divID = '#EmailAttachmentIcon_<?php echo $fileID ?>';
					var checkBoxID = '#CheckBox_<?php echo $fileID ?>';
					var garmentDivID = '#DIVGarmentPhoto_<?php echo $fileID ?>';
					if ($(divID).hasClass('icon-attachment')){
						$(divID).removeClass('icon-attachment');
						$(checkBoxID).prop('checked', false);
						$(garmentDivID).removeClass('selected');
						var selected_files = $("#selected_files").val();
						selected_files.replace("<?php echo $fileID ?>", "");
						$("#selected_files").val(selected_files);
					}else{
						$(divID).addClass('icon-attachment');
						$(checkBoxID).prop('checked', true);
						$(garmentDivID).addClass('selected');
						$("#selected_files").val($("#selected_files").val() + ", <?php echo $fileID ?>");
					}
					//alert(checkBoxID);
			 });
		 
		$('#DeletePhoto_<?php echo $fileID ?>').click(function(e) { 
			var divID = '#DeletePhotoIcon_<?php echo $fileID ?>';
			var checkBoxID = '#CheckBox_<?php echo $fileID ?>';
			var garmentDivID = '#DIVGarmentPhoto_<?php echo $fileID ?>';
			if ($(divID).hasClass('icon-cancel-2')){
				$(divID).removeClass('icon-cancel-2');
				$(checkBoxID).prop('checked', false);
				$(garmentDivID).removeClass('selected');
			}else{
				$(divID).addClass('icon-cancel-2');
				$(checkBoxID).prop('checked', true);
				$(garmentDivID).addClass('selected');
			}
			//alert(checkBoxID);
	 	});
	 	
		$('#CheckBox_<?php echo $fileID ?>').click(function(e) { 
			var divID = '#CheckBox_<?php echo $fileID ?>';
			var emailID = '#EmailAttachmentIcon_<?php echo $fileID ?>';
			var deleteID = '#DeletePhotoIcon_<?php echo $fileID ?>';
			var checkBoxID = '#CheckBox_<?php echo $fileID ?>';
			var garmentDivID = '#DIVGarmentPhoto_<?php echo $fileID ?>';
			if ($(divID).prop("checked") ){
				$(garmentDivID).addClass('selected');
			}else{
				$(garmentDivID).removeClass('selected');
			}
			//alert(checkBoxID);
	 	});

		$('#SelectAll_<?php echo $fileID ?>').click(function(e) { 
		        var checkboxes = $('.garmentChkbox');
		        var garment = $('.triple-vertical');
		        if (! checkboxes.prop("checked") ) {
		            checkboxes.prop("checked" , true);
		            garment.addClass('selected');
		            $("#selected_files").val("SELECTED ALL");
		        } else {
		            checkboxes.prop( "checked" , false );
		            garment.removeClass('selected');
		            $("#selected_files").val("");
		        }
		});

</script>

 <?php //var_dump($_SERVER)?>
                   
