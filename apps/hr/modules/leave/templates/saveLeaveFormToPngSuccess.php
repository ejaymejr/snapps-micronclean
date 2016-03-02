<?php use_helper('Validation', 'Javascript') ?>
<?php
	$img = explode(',', ($data ));
	$newImage = 'data:'.str_replace(' ', '+', $img[0]) .','. ($img[1]);	
?>

<img src="<?php echo $newImage; ?>">