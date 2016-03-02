<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
	<div class="panel" data-role="panel">
	<div class="panel-header bg-darkOrange fg-white">
	<?php 
		$photoDetail = PhotoDetailPeer::retrieveByPK($photoID);
		echo $photoDetail->getName() .' | '. $photoDetail->getDepartment() .' | '. $photoDetail->getShift() .' ( '. $photoDetail->getReason() .' / <strong>'. $photoDetail->getGarmentAction() .'</strong> )';
	?>
	</div>
	<div class="panel-content">
		<div class="drawBox">

<?php 
	foreach($files as $file):
		$filename = ''; 
		$filename = RejectLib::GetWebLocation($file->getPath()) . $file->getFileName();
		$alt =  $file->getFileName();
		$fileID = str_replace('.', '_', $file->getFileName() );
		if (file_exists($file->getPath() . $file->getFilename())):
			$photoDetail = PhotoDetailPeer::GetDataByBatchId($file->getBatchId());
			if (!$photoDetail):
				return;
			endif;
			if  ( $photoDetail->getId() == $photoID ):
			
			
?>

 	<div class="tile double double-vertical bg-steel" id="DIVGarmentPhoto_<?php echo $fileID ?>">
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
<?php 
			endif; //( $photoDetail->getId() == $photoID ):
		endif; 
	endforeach; 
?>	
		</div>
	</div>
</div>