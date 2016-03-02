<?php use_helper('Validation', 'Javascript') ?>
<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<script>
searchID = randomID();
function UpdateAndCloseEmployeeNo(empnumber)
{
	document.getElementById('employee_no').value = empnumber ;
	$.Dialog.close();
}

$(function(){
	$("#searchCAPA").on('click', function(){
		employeelist = '';
		seq = 1;
		var opts = $('#employee_no')[0].options;
		var array = $.map(opts, function( elem ) {
		    //employeelist = employeelist + (elem.value || elem.text) + "<br>";
		    if (elem.value > 0){
			    empnumber = elem.value;
			    empno = "<a href='#' onclick=UpdateAndCloseEmployeeNo(\'"+empnumber+"\'); >" + elem.value + "</a>";
			    employeelist += '{"seq":'+ seq++ +',"employee_no":"' + empno + '","name":"'+elem.text+'","company":""}, ';
		    };
		});
	    $.Dialog({
	        shadow: true,
	        overlay: false,
	        draggable: true,
	        icon: '<span class="icon-bus"></span>',
	        title: 'Draggable window',
	        width: 500,
	        padding: 10,
	        content: 'This Window is draggable by caption.',
	        onShow: function(){
	        	 var content = 
	        		'<div class="contentBox">' 
	        		+'<table class="table striped hovered dataTable" id="'+searchID+'">'
                		+'<thead>'
                		+'<tr><th class="text-left">seq</th><th class="text-left">employee_no</th><th class="text-left">name</th><th class="text-left">company</th></tr>'
                		+'</thead>'
                		+'<tbody></tbody>'
                		+'<tr><th class="text-left">seq</th><th class="text-left">employee_no</th><th class="text-left">name</th><th class="text-left">company</th></tr>'
                		+'<tr><td>&nbsp;</td></tr>'
                	+'</table>'	
		        	+'</div>'
			        +'<script>$(function(){'
			        	+'$("#'+searchID+'").dataTable( {'
			        		+'"bProcessing": true,'
			        		+'"aaData":['
			        		+ employeelist
			        		+ '],'
			        		+'"aoColumns": ['
			        			+'{ "mData": "seq" } ,{ "mData": "employee_no" } ,{ "mData": "name" } ,{ "mData": "company" }  ,'   		
			     			+']'
			        	+'} );'
			        +'});' 	
			        ;		        	 
	            $.Dialog.title("Search Employee");
	            $.Dialog.content(content);
	        }
	    });
	});
});
</script>

<?php 
$message = '';
$message .= '
<form name="supplierDocumentUpload" method="post" 
	action="'.url_for('documentChange/supplierDocumentUpload').'?id='.$sf_params->get('id').'" enctype="multipart/form-data">
	<h5>Click on the Folder icon</h5>
	<div class="input-control file ">
		<input id="uploadDoc" name="uploadDoc" type="file"  placeholder="click here to upload file"/>
		<button class="btn-file"></button>
	</div>
	<div class="input-control text">
		<input id="newfilename" name="newfilename" type="text" value="" placeholder="Enter New Filename"/>
		<button class="btn-clear"></button>
	</div>
	<br><button class="success">Save File</button>
</form>
';
?>
<?php echo HrLib::PopUpDialog('uploadFile', 'UPLOAD FILE', $message); ?>
<div class="contentBox">
<nav class="breadcrumbs">
<ul>
	<li><a href="<?php echo url_for('documentChange/supplierDocumentSearch') ?>">Supplier Document Search</a></li>
	<li><a href="<?php echo url_for('documentChange/supplierDocumentAdd') ?>">Add Supplier Document</a></li>
	<li class="active"><a href="<?php echo url_for('documentChange/supplierDocumentApproveSearch') ?>">Approve Document</a></li>
	<li></li>
</ul>
</nav>
<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('documentChange/supplierDocumentApprove').'?id=' . $sf_params->get('id') ?>"
	method="post">


		<table width="100%" class="table bordered" >
			<tr class="bg-orange"><td colspan="3">
			<h2 class="fg-white">SUPPLIER/VENDOR CHANGE CONTROL</h2>
			</td></tr>
			<tr>
				<td class="FORMcell-left FORMlabel span3" nowrap><label><a href="#" data-hint="Date Supplier has initiated change.">REVIEW DATE</a></label></td>
				<td class="FORMcell-right span5" nowrap>
				<?php
				echo HTMLLib::CreateDateInput('date_time', $sf_params->get('date_time'),'', 'Y-m-d') ;?>
				</td>
				<td class="FORMcell-right" colspan="3"></td>
			</tr>
			
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label>SCR NO</label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateInputText('document_no', $sf_params->get('document_no'));
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				
				</td>
			</tr>
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label>COMPANY</label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateSelect('company', $sf_params->get('company'), $customerList);
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr>
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label><a href="#" data-hint="Description in detail of type of Supplier changes.">DESCRIPTION</a></label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateInputText('document_title', $sf_params->get('document_title'));
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr><!--
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label>ORIGINAL REVISION #</label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateInputText('original_rev_no', $sf_params->get('original_rev_no'));
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr>
			
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label>NEW REVISION #</label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateInputText('mod_rev_no', $sf_params->get('mod_rev_no'));
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr>
			--><tr>
				<td class="FORMcell-left FORMlabel" nowrap><label><a href="#" data-hint="Can only close when all has been implemented and no outstanding CAPA.">SCR STATUS</a></label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateSelect('scr_status', $sf_params->get('scr_status'), array('OPEN'=>'OPEN', 'CLOSED'=>'CLOSED'));
				?></td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr>
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label>CAPA Case</label></td>
				<td class="FORMcell-right" nowrap>
				<?php
					echo HTMLLib::CreateSelect('capa_report_no', $sf_params->get('capa_report_no'), $capaList, 'span3');
				?>
				<a href="#" id="searchCAPA" class="button default">Get CAPA</a>
				</td>
				<td class="FORMcell-right alignLeft" colspan="3">
				</td>
			</tr>
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label><a href="#" data-hint="Quality Engineer to provide any comments on each stage of the changes if any (ie: change notification stage, evaluation stage and implementation stage).">COMMENTS FROM <br>QUALITY ENGINEER</a></label></td>
				<td class="FORMcell-right" colspan="2" nowrap>
				<?php
					echo HTMLLib::CreateTextArea('changes_requested', $sf_params->get('changes_requested'), 'span10');
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-left FORMlabel" nowrap><label></label></td>
				<td class="FORMcell-right" colspan="2" nowrap>
				<?php
					echo HTMLLib::CreateSubmitButton('approvedocument', 'Approve this Document');
				?></td>
			</tr>			
		</table>
		<?php if ($sf_params->get('id')):?>
		<table width="100%" class="table bordered" >
			<tr class="bg-orange"><td colspan="3">
			<h2 class="fg-white">DOWNLOAD/UPLOAD DOCUMENTS</h2>
			</td></tr>
			<tr>
				<td>
					<a href="#" id='uploadFile' class="button default"><i class="icon-cabinet on-left"></i>Upload File</a>
				</td>
			</tr>
			<tr>
				<td>
				<?php
					$c = new criteria(); 
					$c->add(SupplierDocumentFilesPeer::SUPPLIER_DOCUMENT_CHANGE_REVIEW_ID, $sf_params->get('id'));
					$pager = SupplierDocumentFilesPeer::doSelect($c);
				   	if (isset($pager)):
						$filename = PagerJson::SearchSupplierDocumentFile($pager);
						$cols = array('action', 'seq', 'date_time', 'filename','mime_type','size');
						echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
					endif;
				?>
				</td>
			</tr>
		</table>
		<?php endif;?>
</form>
</div>
