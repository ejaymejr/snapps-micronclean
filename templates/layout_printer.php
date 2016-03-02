<?php use_helper('Javascript'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:fb="http://app.microncleansingapore.com">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php print_r(include_metas()); ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="metro" >
<header class="bg-dark" >
<div class="container"><br>
		<?php echo $sf_data->getRaw('sf_content') ?>
</div> 
<br>
</body>
</html>