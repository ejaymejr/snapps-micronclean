<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
$questionaireData = HrEmployeeSatisfactionQuestionairePeer::GetQuestionaireDataByGroup($group);
//var_dump($questionaireData);
$title = ''; 
foreach($questionaireData as $r):
	 $title = $title? $title : $r->getHeader();
endforeach;
$seq = 1;
?>
	<tr class="">
        <td width="5%" colspan="4" class="bg-color-teal alignCenter alignMiddle" nowrap>
        	<strong><h4 style="color: #fff;"><?php echo $title ?></h4></strong>
       	</td>
    </tr>
    <tr class="">
        <td width="5%" class="bg-color-blueLight alignCenter alignMiddle" nowrap>SEQ</td>
        <td width="30%" class="bg-color-blueLight alignCenter alignMiddle" nowrap>STATEMENT</td>
        <td width="10%" class="bg-color-blueLight alignCenter alignMiddle" nowrap>RATING</td>
        <td width="35%" class="bg-color-blueLight alignCenter alignMiddle" nowrap></td>
    </tr>
	<?php 
		foreach($questionaireData as $r): 
			$avgQuestionaire = HrEmployeeSatisfactionSurveyPeer::GetAverageByQuestionaireID($r->getId());
		
	?>
    <tr>
        <td class="bg-color-blueLight alignRight alignMiddle" nowrap><?php echo $seq++ ?></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
			<?php echo $r->getQuestion() ?> 
        </td>
        <td class=" alignCenter " nowrap>
        	<div id="rating_<?php echo $r->getId() ?>" name="rating_<?php echo $r->getId() ?>" class="rating " data-role="rating" data-param-vote="off"  data-param-rating="<?php echo $avgQuestionaire['avg']; ?>" data-param-stars="5">
    		
    		</div>
			<?php echo $avgQuestionaire['avg'] . ' (' . $avgQuestionaire['total'] .'/' . $avgQuestionaire['count'] .')'  ; ?>
        </td>
        <td width="25%" class=" alignLeft alignMiddle" nowrap>
        	<?php //echo input_tag('recommend_' . $r->getId() , $sf_params->get('recommend_' . $r->getId()), "size=40" )?>
        </td>
    </tr>
    <?php  endforeach; ?>