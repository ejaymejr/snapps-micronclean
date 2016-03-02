<?php use_helper('Validation', 'Javascript') ?>
	<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="<?php echo url_for('seagate/searchBatch') ?>">Search Batch</a></li>
		</ul>
	</nav>
	
    <?php 
          if (isset($pager)):
			$filename = PagerJson::SearchNamelist($pager);
			$cols = array('action', 'seq', 'description', 'cell', 'department','team','date');
			echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
		endif;
		?>
	</div>
		 