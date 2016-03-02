<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($browser){
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.1, maximum-scale=1.1" /> ';
} ?>


		<div class="ScreenContainer">
		<div id="DIVPager">
			<?php
			if (isset($pager)):
				include_partial('global/datagrid/container', $gridVars);
			endif;
		?>
		</div>
		</div>


