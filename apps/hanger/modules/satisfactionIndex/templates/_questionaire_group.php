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
 <table class="table contentBox">
	<tr class="">
        <td width="5%" colspan="4" class="bg-teal alignCenter alignMiddle" nowrap>
        	<strong><h4 style="color: #fff;"><?php echo $title ?></h4></strong>
       	</td>
    </tr>
    <tr class="">
        <td width="5%" class="fg-white bg-cyan alignCenter alignMiddle" nowrap>SEQ</td>
        <td width="30%" class="fg-white bg-cyan alignCenter alignMiddle" nowrap>STATEMENT</td>
        <td width="15%" class="fg-white bg-cyan alignCenter alignMiddle" nowrap>RATING</td>
        <td width="30%" class="fg-white bg-cyan alignCenter alignMiddle" nowrap>RECOMMENDATION</td>
    </tr>
	<?php foreach($questionaireData as $r): ?>
    <tr>
        <td class="alignRight alignMiddle " nowrap><?php echo $seq++ ?></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
			<?php echo $r->getQuestion() ?>
        </td>
        <td class=" alignCenter " nowrap>
    		<div id="rating_<?php echo $r->getId() ?>" class="fg-green" data-score="<?php echo $sf_params->get('input_' . $r->getId()) ?>"></div>
    		<?php echo input_tag('input_' . $r->getId() , $sf_params->get('input_' . $r->getId()), "type=hidden" )?>
    		<script type="text/javascript">
                $(function(){
                    $("#rating_<?php echo $r->getId() ?>").rating({
                        static: false,
                        score: 0,
                        stars: 5,
                        showHint: true,
                        showScore: false,
                        hints: ['na', 'disagree', 'partially agree', 'agree', 'fully agree'],
                        scoreHint: "Current score: ",
                        click: function(value, rating){
                            rating.rate(value);
                            $('#input_<?php echo $r->getId() ?>').val( value ); 
                        }
                    });
                });
			</script>
        </td>
        <td width="25%" class=" alignLeft alignMiddle" nowrap>
        	<?php echo input_tag('recommend_' . $r->getId() , $sf_params->get('recommend_' . $r->getId()), "size=40" )?></td>
    </tr>
    <?php  endforeach; ?>
</table>