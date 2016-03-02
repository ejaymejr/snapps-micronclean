<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>


<body>

<div id="pageTitle"><?php echo sfConfig::get('app_page_heading'); ?></div>
<?php include_partial('global/message', array('sf_request' => $sf_request)); ?>

<div id="main">


<?php echo $sf_data->getRaw('sf_content') ?>


</div>


<script language="javascript" type="text/javascript">
formatFormStyle();
</script>
</body>
</html>

