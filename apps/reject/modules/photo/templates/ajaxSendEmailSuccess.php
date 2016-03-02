<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php 
$alertEmailList = '"Email Sent to: ' . str_replace(', ', "\n", $emailList) .'"';
echo javascript_tag("
		alert( 'Email Sent'  );
		document.getElementById('send_to').value = '';
		");


?>
<span class="negative">Email Sent to: <?php echo $emailList; ?></span> 