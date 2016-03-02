<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#EmailPhoto').click(function(e) {
			window.location = '<?php echo url_for('photo/view') . '?token=' . $sf_params->get('token') ?>';
		});
		$('#EmailPhotoCustomer').click(function(e) {
			window.location = '<?php echo url_for('photo/view') . '?customer=' . $sf_params->get('customer')  .'&token='.$sf_params->get('token').'&show=customer' ?>';
		});
	});
</script>
<div class="grid-toolbar-2">                       
<?php
	echo input_tag('token', $sf_params->get('token'), 'type=hidden'); 
	echo input_tag('customer', $sf_params->get('customer'), 'type=hidden'); 
	echo input_tag('garment_code', $sf_params->get('garment_code'), 'type=hidden'); 
?>
</div>  

<div id="DIVUploadMainScreen" style="padding: 10px;" >
<table class="striped" cellpadding="10px">
<?php 
	foreach($files as $file):
		$filename = ''; 
		$filename = RejectLib::GetWebLocation($file->getPath()) . $file->getFileName();
		$alt =  $file->getFileName();
		$fileID = str_replace('.', '_', $file->getFileName() );
		
		if (file_exists($file->getPath() . $file->getFilename())):
			$photoDetail = PhotoDetailPeer::GetDataByBatchId($file->getBatchId());
?>
<tr><td width="10%">

	<div class="tile double image double-vertical" id="DIVGarmentPhoto_<?php echo $fileID ?>">
		<div class="tile-content bg-color-orangeDark">
		<p>&nbsp;&nbsp;&nbsp;
         <?php echo $file->getDescription() . '<br>' . '&nbsp;' ?></p>
        <div class="span2">
			<a href="<?php echo $filename; ?>" 
				data-target="flare"
				data-flare-scale="fit"
				data-flare-gallery="gallery1"
				data-flare-plugin="shutter"
				data-flare-thumb="<?php echo $filename; ?>"
				data-flare-bw="<?php echo $filename; ?>"				
				> <img src="<?php echo $filename; ?>" />
			</a>
			<?php echo $filename; ?>
		</div>
        </div>
		<div class="brand bg-color-orange">
			<p class="text" id="Description_<?php echo $fileID?>">
				<?php echo $alt ?>
			</p>
			<div class="badge"><i class="icon-camera"></i></div>
		</div>
	</div>
</div>
<br>
</td>

<td width="70%"> 
    <div class="notices">
        <div class="bg-color-blueLight">
            <a href="#" class="close"></a>
            <div class="notice-icon"> <i class="icon-info"></i></div>
            <div class="notice-image"><?php echo image_tag('info.png')?></div>
            <div class="notice-header"> Garment Details: </div>
            <div class="notice-text fg-color-darken">
            	<ul>
            		<li><?php echo $photoDetail->getGarment() . ' , ' . $photoDetail->getSize() . ' , ' . $photoDetail->getColor() ?></li>
            	
            	</ul>
            </div>
        </div>
    </div>
    	
    	<!-- this is where conversation start -->
	   <ul class="replies">
        <li class="bg-color-teal">
            <b class="sticker sticker-left sticker-color-teal"></b>
            <div class="avatar"><?php echo image_tag('micronclean-chat.gif') ?></div>
            <div class="reply">
                <div class="date"><?php echo $file->getDateModified() ?></div>
                <div class="author">micronclean</div>
                <div class="text"><?php echo $file->getDescription() ?></div>
            </div>
        </li>
    	</ul>
    	
    	<ul class="replies">
        <li class="bg-color-greenLight">
            <b class="sticker sticker-right sticker-color-greenLight"></b>
            <div class="avatar"><img/></div>
            <div class="reply">
                <div class="date"><?php echo Date('Y-m-d H:i:s'); ?></div>
                <div class="author">customer</div>
                <div class="text">Comments will be available soon...</div>
            </div>
        </li>
    </ul>
     <button class="bg-color-white"><i class="icon-comments-4"></i>Expand Comments</button>
</td>

</tr>
<?php endif; endforeach; ?>

</table>
</div>
