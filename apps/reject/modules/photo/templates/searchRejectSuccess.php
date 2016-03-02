<?php use_helper('Validation', 'Javascript') ?>
<?php $customerList = ''; ?>
<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="upload">Search</a></li>
		</ul>
	</nav>
<form name="FORMupload" method="post" action="<?php echo url_for('photo/searchReject') ?>" enctype="multipart/form-data">
	<?php 
		include_partial('search_reject', array('customerList'=>$customerList,'deptList'=>$deptList, 'shiftList'=>$shiftList)) ?>
</form>
<div id="DIVFilterSearchReject" ></div>
	<div class="contentBox">
        <?php 
			if ($pager):
				$filename = PagerJson::SearchReject_Pager($pager);
				$cols = array('action', 'seq', 'date', 'company', 'department','shift', 'garment', 'color', 'size');
				echo PagerJson::TableHeaderFooter($cols, $filename); //create the table
			endif;
		?>
	</div>
</div>
		