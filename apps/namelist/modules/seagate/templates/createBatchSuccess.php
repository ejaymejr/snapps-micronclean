<?php use_helper('Validation', 'Javascript') ?>
	<?php 
		$depts1 = array(2,9,10,11,12,13,14);
		$depts2 = array(1,3,4,15);
		$depts3 = array(5,6,8,7);
	?>
<script>
  $(function(){
    $('#all_ma').on('click', function() {
           	prop = $('#all_ma').is(':checked');
       		$('#dept_1').attr('checked',prop);
       		$('#dept_3').attr('checked',prop);
       		$('#dept_4').attr('checked',prop);
       		$('#dept_15').attr('checked',prop);
    });
    
    $('#all_maint').on('click', function() {
       	prop = $('#all_maint').is(':checked');
   		$('#dept_5').attr('checked',prop);
   		$('#dept_6').attr('checked',prop);
   		$('#dept_7').attr('checked',prop);
   		$('#dept_8').attr('checked',prop);
	});

    $('#all_cell').on('click', function() {
       	prop = $('#all_cell').is(':checked');
   		$('#cell_1').attr('checked',prop);
   		$('#cell_2').attr('checked',prop);
   		$('#cell_3').attr('checked',prop);
   		$('#cell_4').attr('checked',prop);
   		$('#cell_6').attr('checked',prop);
	});

    $('#all_team').on('click', function() {
       	prop = $('#all_team').is(':checked');
   		$('#team_1').attr('checked',prop);
   		$('#team_2').attr('checked',prop);
   		$('#team_3').attr('checked',prop);
   		$('#team_4').attr('checked',prop);
   		$('#team_5').attr('checked',prop);
	});

    $('#save').on('click', function() {
        if ($('#description').val().length > 0) {
        	$('#formAdd').submit();
        }else{
        	alert('Please provide a Description');
        }        
        
    });
    
  });
</script>
<div class="contentBox">
<form id="formAdd" name="formAdd" method="post">
<table class="table ">
<tr>
	<td colspan="3" >
		<nav class="breadcrumbs">
			<ul>
			<li><a href="#">RESET THIS FILTER</a></li>
			<li class="active"><a id="save" href="#">SAVE THIS FILTER</a></li>
			</ul>
		</nav>
		<div class="input-control text">
			<input type="text" id="description" name="description" placeholder="Description here">
			<button class="btn-clear"></button>
		</div>	
	</td>
</tr>

<tr>
	<td>
	<div class="panel">
	<div class="panel-header bg-lightBlue fg-white">
	CELLS
	</div>
	<div class="panel-content">
	<?php foreach($cells as $cellID=>$cell): ?>
		<div class="input-control checkbox">
	    <label>
	        <input type="checkbox" id="<?php echo 'cell_'.$cellID ?>" name="<?php echo 'cell_'.$cellID ?>"/>
	        <span class="check"></span>
	        <?php echo $cell ?>
	    </label>
		</div><br>
	<?php endforeach; ?>
			<div class="input-control checkbox">
			<label>
	        <input type="checkbox" id="all_cell" name="all_cell"/>
	        <span class="check"></span>
	       	ALL CELLS
			</label>
			</div>
	</div>
	</div>
	</td>
	
	<td>

	
	<div class="panel">
	<div class="panel-header bg-lightBlue fg-white">
	GENERAL DEPARTMENT
	</div>
	<div class="panel-content">
		<?php foreach($depts1 as $deptkey): 
			$deptID = 'dept_' . $deptkey;
			$dept =  $departments[$deptkey];
		?>
		<div class="input-control checkbox">
	    <label>
	        <input type="checkbox" id="<?php echo $deptID ?>" name="<?php echo $deptID ?>"/>
	        <span class="check"></span>
	        <?php echo $dept ?>
	    </label>
		</div><br>
		<?php endforeach; ?>
	</div>
	</div>
	<br>
	
	<div class="panel">
	<div class="panel-header bg-lightBlue fg-white">
	MA DEPARTMENT	
	</div>
	<div class="panel-content">
		<?php foreach($depts2 as $deptkey): 
			$deptID = 'dept_' . $deptkey;
			$dept =  $departments[$deptkey];
		?>
		<div class="input-control checkbox">
	    <label>
	        <input type="checkbox" id="<?php echo $deptID ?>" name="<?php echo $deptID ?>"/>
	        <span class="check"></span>
	        <?php echo $dept ?>
	    </label>
		</div><br>
		<?php endforeach; ?>
			<div class="input-control checkbox">
			<label>
	        <input type="checkbox" id="all_ma" name="all_ma"/>
	        <span class="check"></span>
	       	ALL MA DEPARTMENT
			</label>
			</div>
	</div>
	</div>
	<br>
	
	<div class="panel">
	<div class="panel-header bg-lightBlue fg-white">
	MAINT DEPARTMENT
	</div>
	<div class="panel-content">
		<?php foreach($depts3 as $deptkey): 
			$deptID = 'dept_' . $deptkey;
			$dept =  $departments[$deptkey];
		?>
		<div class="input-control checkbox">
	    <label>
	        <input type="checkbox" id="<?php echo $deptID ?>" name="<?php echo $deptID ?>"/>
	        <span class="check"></span>
	        <?php echo $dept ?>
	    </label>
		</div><br>
		<?php endforeach; ?>
			<div class="input-control checkbox">
			<label>
	        <input type="checkbox" id="all_maint" name="all_maint"/>
	        <span class="check"></span>
	       	ALL MAINT DEPARTMENT
			</label>
			</div>
	</div>
	</div>
	<br>
	</td>
	
	<td>
	<div class="panel">
	<div class="panel-header bg-lightBlue fg-white">
	TEAM
	</div>
	<div class="panel-content">
		<?php foreach($teams as $teamID=>$team): ?>
		<div class="input-control checkbox">
	    <label>
	        <input type="checkbox" id="<?php echo 'team_' . $teamID ?>" name="<?php echo 'team_' . $teamID ?>"/>
	        <span class="check"></span>
	        <?php echo $team ?>
	    </label>
		</div><br>
		<?php endforeach; ?>
			<div class="input-control checkbox">
			<label>
	        <input type="checkbox" id="all_team" name="all_team"/>
	        <span class="check"></span>
	       	ALL TEAM
			</label>
			</div>
	</div>
	</div>
	</td>
	
</tr>

</table>
</form>
</div>