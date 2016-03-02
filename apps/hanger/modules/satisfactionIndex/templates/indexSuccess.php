<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
 

$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($browser){ 
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.1, maximum-scale=1.1" /> ';
} ?>


<div class="ScreenContainer" >  
<div class="contentBox">
<form name="FORMupload" method="post" action="<?php echo url_for('satisfactionIndex') ?>" enctype="multipart/form-data">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="bordered" >
    <tr class="bg-darkOrange">
        <td colspan="10" class="alignCenter fg-white" nowrap><h2 style="color: #fff;">EMPLOYEE SATISFACTION SURVEY</h2></td>
    </tr>
    <tr class="">
        <td colspan="4" class="bg-white alignCenter alignMiddle" nowrap>
        <p class="prettyprint">INSTRUCTIONS <br>
        In the following list there are some points related  to the culture and environement of your organisation. Each point have five possible responses. <br>
        Tick the response you feel most appropriate in our organisation. Your free and frank response will be appreciated. <br>
        Your point of view will be kept confidential and     willbe used for general analysis. <br>
        <p>Star Legend:
             (1) - N/A | <b>(2) - Disagree</b> | (3) Partially Agree | <b>(4) Agree</b> | (5) Fully Agree</p>
        </p>
        <?php if ($sf_params->get('batch')):?>
        <button class="large bg-darkRed fg-white">New Survey</button>
        <?php endif;?>
       	</td>
    </tr>
    <tr class=""><td>&nbsp;</td>
    </tr>
	<?php 
		$groupList = array(1,2,3,4,5);
		foreach($groupList as $k=>$group):
			include_partial('questionaire_group', array('group' => $group) ) ;
		endforeach;
	?>
    <tr class="dataGridRowOdd">
        <td class="bg-lightBlue alignRight alignMiddle" nowrap></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" colspan="2" nowrap>
			<button type="submit" name="submit_survey" class="default" id="submit_survey" ><i class="icon-mail"></i> Submit This Survey </button>
        </td>
    </tr>
    
</table>
</form>
</div>
</div>
