<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($browser){
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.1, maximum-scale=1.1" /> ';
} ?>

<script language="JavaScript" type="text/javascript">
	var totalUploadRow = 1;
	function submitForm(){
		document.FORMupload.submit();
	}
</script>
	

<div class="contentBox">
	<nav class="breadcrumbs ">
		<ul>
			<li><a href="<?php echo url_for('photo/upload') ?>">Search</a></li>
		</ul>
	</nav>
	<form name="FORMupload" method="post"
		action="<?php echo url_for('photo/uploader') ?>"
		enctype="multipart/form-data">

		<table width="100%" cellpadding="0" cellspacing="0" border="1"
			class="table bordered">
			<tr class="bg-darkOrange">
				<td colspan="10" class="alignCenter fg-White" nowrap><h2
						style="color: #fff;">GARMENT CODE</h2></td>
			</tr>
			<tr class="dataGridRowOdd">
				<td width="20%" class="bg-clearBlue alignRight alignMiddle" nowrap>Batch
					ID</td>
				<td width="30%"
					class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><?php 
					echo input_tag('id', $sf_params->get('id'),'type=hidden');
					echo input_tag('batch_id', $sf_params->get('batch_id'),'size=25 type=hidden');
					echo $sf_params->get('batch_id') ? $sf_params->get('batch_id') : 'NEW';
					?>
				</td>
				<td width="50%"
					class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap></td>
			</tr>
			<tr class="dataGridRowOdd">
				<td class="bg-clearBlue alignRight alignMiddle" nowrap>Garment Code</td>
				<td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
					<?php
					if ($sf_params->get('batch_id')):
						echo $sf_params->get('garment_code');
						echo input_tag('garment_code', $sf_params->get('garment_code'), 'size=25, type=hidden');
					else:
						echo input_tag('garment_code', $sf_params->get('garment_code'), 'size= 25');
					endif; ?>
				</td>
				<td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
					<button type="button" name="email" class="default"
						id="garment_info">
						<i class="icon-mail"></i> Show Garment Information
					</button>
				</td>
			</tr>
		</table>

		<div id="DIVGarmentInformation" style="top: -100px;">
			<?php include_partial('garment_information', 
			array('garmentCode'=>$sf_params->get('garment_code')
			, 'customerList'=>$customerList
			, 'colorList'=>$colorList
			, 'garmentList'=>$garmentList
			, 'sizeList'=>$sizeList
			, 'reasonList'=>$reasonList
			, 'deptList'=>$deptList
			, 'shiftList'=>$shiftList

			)); ?>
		</div>

		<table id="tableUpload" width="100%" cellpadding="4" cellspacing="2"
			border="0" class="table bordered">
			<tr class="bg-darkOrange fg-White">
				<td colspan="10"
					class="dataGridTableHeaderColumn alignCenter alignMiddle" nowrap><h4
						style="color: #fff;">TAKE PHOTO OR USE EXISTING</h4></td>
			</tr class="">

			<tr class="bg-clearBlue">
				<td width="50%" class="alignCenter" nowrap>PHOTO</td>
				<td colspan="2" width="49%" class="alignCenter" nowrap>DESCRIPTION</td>
			</tr>

			<tr id="attachment_row_1">
				<td>
				
<!-- 				<div class="input-control file"> -->
<!-- 				<input type="file" name="upload_1" size="50" -->
<!-- 					onchange="addUploadRow();" /> -->
<!-- 				</div> -->
				
				<div class="input-control file">
					<input type="file" name="upload_1" onchange="addUploadRow()" />
					<button class="btn-file"></button>
				</div>
				</td>
				<td><textarea name="description_1" cols="50" rows="2"
						onclick=this.select()></textarea></td>
				<td>&nbsp;</td>
			</tr>
			<tr class="">
				<td width="50%" class="alignCenter" nowrap>
					<!--         <input type="submit" class="" name="upload" value=" Save Uploaded Photo" /> -->
					<button type="submit" name="upload" class="default"
						id="garment_info">
						<i class="icon-save"></i> Save Uploaded Photo
					</button>
				</td>
				<td colspan="2" width="49%" class="alignCenter" nowrap></td>
			</tr>
		</table>

					<div class="page-region-content tiles">

	
					
		<div class="tab-control" data-role="tab-control" data-effect="fade">
			<ul class="tabs ">
							
				<?php 
				$page = 0;
				//$images = array(1,2,3,4,5,6,7,8,9,10,11,12,131,2,3,4,5,6,7,8,9,10,11,12,131,2,3,4,5,6,7,8,9,10,11,12,13);
				foreach($images as $image => $desc):
					$page++;
					$tabName = strtolower(str_replace('.jpeg', '', $image));
					$tabName = str_replace('_', ' ', $tabName);
					echo '<li class=""><a class="" href="#_page_'.$page.'">'.$tabName.'</a></li>';
				endforeach; 
				?>
			</ul>

			<div class="frames">
				<?php 
				$page = 0;
				$cnt = 0;
				//echo '<div class="frame" id="_page_'.$page.'">';
				foreach($images as $image => $desc):
					$page++;
					$tabName = strtolower(str_replace('.jpeg', '', $image));
					
					echo '<div class="frame" id="_page_'.$page.'">';
								$descDIV = 'DIV'. $image;
								$filename = '../uploadedImages/'.$sf_params->get('customer') . '/'.$image;
								$cnt++;
								$fileDetail = FileDetailPeer::GetDataByFilename($image);
								$imageLink = link_to(image_tag($filename, 'height="270" width="203"'),'#', array('id'=>'previewImage') );
								$editLink = link_to('edit','#', array('id'=>'editDescription') );
								$deleteLink = link_to('delete','photo/deleteFile?file='.$image.'&id=' . $sf_params->get('id'),'onclick="return confirm(\'Are you sure you want to delete this File?\')"');
								$chkbox = checkbox_tag('chkbox_' . $cnt, $image, false );
								if ($fileDetail->getSendEmail() == 'NO'):
									$sf_params->set('donotsend_'.str_replace('.jpeg', '_jpeg', $image), true);
								else:
									$sf_params->set('donotsend_'.str_replace('.jpeg', '_jpeg', $image), false);
								endif;
								include_partial('show_images', array('filename'=>$filename, 'description'=>$desc, 'file'=>$image, 'fileDetail'=>$fileDetail) );
					echo '</div>';
				endforeach; 
				//echo '</div>';
				?>
				
			</div>
		</div>
						
		</div>
		<br>
		<div class="ScreenContainer" id="DIVEmailSendTo">
			<?php include_partial('email_send_to', array('co'=>'', 'dept'=>'', 'shift'=>''));?>
		</div>
		<div class="ScreenContainer">
		<div id="DIVPager">
			<?php
			if (isset($pager)):
				//include_partial('global/datagrid/container', $gridVars);
			endif;
		?>
		</div>
		</div>
		
		<div class="contentBox">
          <?php 
          	if (isset($pager)):
				$filename = PagerJson::UploadEdit_EmailPager($pager);
				$cols = array('action', 'seq', 'send_to', 'date_sent', 'sent_by','file#','token');
				echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
			endif;
			?>
		</div>

	</form>
</div>
