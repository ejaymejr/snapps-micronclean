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
 <table  class="table bordered striped" id="DIVScreenContainer">
	<tr class="">
        <td width="5%" colspan="4" class="bg-teal alignCenter alignMiddle" nowrap>
        	<strong><h4 style="color: #fff;"><?php echo $title ?></h4></strong>
       	</td>
    </tr>
    <tr class="">
        <td width="" class="bg-lightBlue alignCenter alignMiddle" nowrap>SEQ</td>
        <td width="" class="bg-lightBlue alignCenter alignMiddle" nowrap>STATEMENT</td>
        <td width="" class="bg-lightBlue alignCenter alignMiddle" nowrap>RATING</td>
    </tr>
	<?php 
		foreach($questionaireData as $r): 
			$avgQuestionaire = HrEmployeeSatisfactionSurveyPeer::GetAverageByQuestionaireID($r->getId());
		
	?>
    <tr>
        <td class="bg-lightBlue alignRight alignMiddle" nowrap><?php echo $seq++ ?></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
			<?php echo $r->getQuestion() ?> 
        </td>
        <td class=" alignCenter " nowrap>
        	<div id="rating_<?php echo $r->getId() ?>" name="rating_<?php echo $r->getId() ?>" class="rating " data-role="rating" data-param-vote="off"  data-param-rating="<?php echo $avgQuestionaire['avg']; ?>" data-param-stars="5">
    		
    		</div>
			test<small><?php echo $avgQuestionaire['avg'] . ' (' . $avgQuestionaire['count'] .') '  ; ?></small>
        </td>
    </tr>
    <?php  endforeach; ?>
    </table>