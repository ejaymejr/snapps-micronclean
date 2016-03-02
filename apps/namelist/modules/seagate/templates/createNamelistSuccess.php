<?php use_helper('Validation', 'Javascript') ?>
<div class="contentBox">
<script>
  $(function(){
    $('#saveNamelist').on('click', function() {
           	alert("saveNamelist");
    });
  });
</script>
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="<?php echo url_for('seagate/searchBatch') ?>">Search Batch</a></li>
			<li><a id="saveNamelist" href="<?php echo url_for('seagate/saveNamelist') ?>">Save Namelist</a></li>
		</ul>
	</nav>
          <?php 
          	if (isset($tags)):
				$filename = PagerJson::SearchNameListing($tags);
				$cols = array('action', 'seq', 'name', 'gid', 'js_size','boot_size','cell','dept', 'shift', 'location');
				echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($tags)); //create the table
			endif;
			?>
</div>