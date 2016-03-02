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
<div class="grid-toolbar-2">                       
<?php
	echo input_tag('token', $sf_params->get('token'), 'type=hidden'); 
	echo input_tag('customer', $sf_params->get('customer'), 'type=hidden'); 
	echo input_tag('garment_code', $sf_params->get('garment_code'), 'type=hidden'); 

?>
<!-- <button id="EmailPhoto" class="default"><i class="icon-bookmark"></i>Show Email Photo</button> -->
<!-- <button id="EmailPhotoCustomer" class="default"><i class="icon-bookmark"></i>Show Customer Photo</button> -->
</div>  
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="upload">Search</a></li>
			<li><?php echo link_to('Show Email Photo','photo/view?token=' . $sf_params->get('token') )?> </li>
			<li><a href="<?php echo url_for('photo/view') . '?customer=' . $sf_params->get('customer')  .'&token='.$sf_params->get('token').'&show=customer' ?>">Show Customer Photo</a></li>
		</ul>
	</nav>
<div class="contentBox">

<table class="table bordered" cellpadding="10px">
<?php 
	foreach($files as $file):
		$filename = ''; 
		$filename = RejectLib::GetWebLocation($file->getPath()) . $file->getFileName();
		$alt =  $file->getFileName();
		$fileID = str_replace('.', '_', $file->getFileName() );
		if (file_exists($file->getPath() . $file->getFilename())):
			$photoDetail = PhotoDetailPeer::GetDataByBatchId($file->getBatchId());
			if (!$photoDetail):
				echo 'Photo Not available or has been deleted';
				echo '</table>';
				return;
			endif;
?>
<tr><td class="bg-clearBlue" width="10%" >
   <div class="balloon ">
   <div data-hint="Garment Information|<?php echo $photoDetail->getGarment() . ' , ' . $photoDetail->getSize() . ' , ' . $photoDetail->getColor() ?>" data-hint-position="right" class="text-center padding10 border">
 	<div class="tile triple double-vertical bg-steel" id="DIVGarmentPhoto_<?php echo $fileID ?>">
		<div class="tile-content image">
		
			<a href="<?php echo $filename; ?>" 
				data-target="flare"
				data-flare-scale="fit"
				data-flare-gallery="gallery1"
				data-flare-plugin="shutter"
				data-flare-thumb="<?php echo $filename; ?>"
				data-flare-bw="<?php echo $filename; ?>"				
				target="_BLANK"> <img src="<?php echo $filename; ?>" height="400" width="400px" class="shadow "/>
			</a>
		
		</div>
		<div class="brand bg-dark">
		<span class="label fg-white"><?php echo $fileID; ?></span>
		<span class="badge bg-orange"><i class="icon-camera"></i></span>
		</div>
	</div>
	  
   <div class="tab-control padding10 " data-role="tab-control">
       <p class="place-right tertiary-text "><button class="default "><i class="icon-comments"></i> Save Comment</button></p>
       <ul class="tabs">
           <li class=""><a href="#write_<?php echo $fileID; ?>" class="">Write</a></li>
           <li class="active"><a href="#info_<?php echo $fileID; ?>" class="">Info</a></li>
       </ul>

       <div class="frames">
	       <div id="write_<?php echo $fileID; ?>" name="write_<?php echo $fileID; ?>" class="frame bg-clearBlue" >
	            <textarea id="textarea_<?php echo $fileID; ?>" data-transform="input-control" placeholder="Write Conversation"></textarea>
	       </div>
       </div>
       <div class="frames">
       <div id="info_<?php echo $fileID; ?>" name="info_<?php echo $fileID; ?>" class="frame bg-clearBlue" >
       		<dl class="horizontal">
       			<dt>Emailed</dt>
       			<dt>Action</dt>
       			<dt>Garment</dt>
       			<dt>Size</dt>
       			<dt>Color</dt>
       			<dd class="alignLeft" ><span class="fg-blue"><?php echo EmailHistoryPeer::GetEmailDateByTokenFileID($sf_params->get('token'), $file->getFileName());?></span> </dd>
	       		<dd class="alignLeft" ><span class="fg-blue"><?php echo $photoDetail->getGarmentAction() ?></span> </dd>
	       		<dd class="alignLeft" ><span class="fg-blue"><?php echo $photoDetail->getGarment() ?></span> </dd>
	       		<dd class="alignLeft" ><span class="fg-blue"><?php echo $photoDetail->getSize() ?></span> </dd>
	       		<dd class="alignLeft" ><span class="fg-blue"><?php echo $photoDetail->getColor() ?></span> </dd>
       		</dl>      
       </div>
   	   </div> <!-- frames -->
   </div>
</div>
</div>  <!-- tooltip-->
</td>
<td > 

<div class="panel " data-role="panel">
<div class="panel-header collapsed">
CONVERSATION
</div>
<div class="panel-content" style="display: block;">
      	<div class="notice span5">
			<?php echo image_tag('micronclean-chat.gif') ?>
		</div>
		<div>&nbsp;</div>
		
		<div class="notice marker-on-right span5 bg-amber">
			<?php echo image_tag('micronclean-chat.gif') ?>
		</div>
		<div>&nbsp;</div>
		<button class="bg-color-white"><i class="icon-comments-4"></i>Expand Comments</button>
		      
</div>
</div>
                    
 
</td>

</tr>
<?php endif; endforeach; ?>

</table>
</div>
