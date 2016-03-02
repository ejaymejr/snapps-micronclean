<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
 

$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($browser){ 
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.1, maximum-scale=1.1" /> ';
} ?>


<div class="ScreenContainer" >  

<form name="FORMupload" method="post" action="<?php echo url_for('satisfactionIndex') ?>" enctype="multipart/form-data">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="striped" id="DIVScreenContainer">
    <tr class="bg-color-orangeDark">
        <td colspan="10" class="alignCenter fg-color-white" nowrap><h2 style="color: #fff;">EMPLOYEE SATISFACTION INDEX SUMMARY</h2></td>
    </tr>
    <tr class="">
        <td colspan="4" class="bg-color-white alignCenter alignMiddle" nowrap>
        <p class="prettyprint">INSTRUCTIONS <br>
        <p>Star Legend:
             (1) - N/A | <b>(2) - Disagree</b> | (3) Partially Agree | <b>(4) Agree</b> | (5) Fully Agree</p>
        </p>
       	</td>
    </tr>
    </table>
	<?php 
		$groupList = array(1,2,3,4,5);
		foreach($groupList as $k=>$group):
			include_partial('questionaire_group_summary', array('group' => $group) ) ;
		endforeach;
	?>

</form></div>
