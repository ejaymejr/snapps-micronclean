<?php use_helper('Validation', 'Javascript') ?>
	<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="<?php echo url_for('photo/emailManager') ?>">Reset</a></li>
			<li class="active"><a href="<?php echo url_for('photo/emailManager') ?>">Add New Email</a></li>
		</ul>
	</nav>
	<div id="emailInfo">
	<form name="FORMupload" method="post" action="<?php echo url_for('photo/emailManager') ?>" enctype="multipart/form-data">
		<?php
			//echo include_partial('customer_email_info', array('customerList'=> $customerList , 'shiftList'=>$shiftList, 'deptList'=>$deptList) );
		echo include_partial('customer_email_info', array('customerList'=> $customerList , 'shiftList'=>$shiftList, 'deptList'=>$deptList) );
		?>
	</form>
	</div>
		<div class="contentBox">
          <?php 
          	if (isset($pager)):
				$filename = PagerJson::EmailManager_Pager($pager);
				$cols = array('action', 'seq', 'email', 'company', 'department','shift','website');
				echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
			endif;
			?>
		</div>
		 
	
