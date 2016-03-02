<?php use_helper('Validation', 'Javascript') ?>
<div class="contentBox">
<script>
$(document).ready(function() {
	$('#search').bind('click', function(e){
		window.location.href = "<?php echo url_for('leave/leaveApprovalSearch') ?>";
	});
});
</script>
<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('leave/leaveApplyDatePrintVerify'). '?id=' . $sf_params->get('id');?>" method="post">
<table border=1 cellpadding='3' cellspacing='2' class="table bg-clearGray">
  <tr>
  	<th colspan="2" class="bg-clearBlue" >
  	<H1>LEAVE FORM (Verification)</H1>
  	</th>
  </tr>
  <tr>
    <td>
    <?php 	    	
		echo $cal->LeaveDisplayCalendar($xdate, $empNo, 1);
	 ?></td>
    <th>
    	
    	<br>Applicant<h3><?php echo $empDetail->getName() ?></h3>
    	<br><br><div>Leave Type: <h3><?php echo $leaveID->getLeaveType() ?></h3></div>
    	<br><br><div>Date<h3>
    		<?php 
    		$sdate = DateUtils::DUFormat('Y-m-d', $leaveID->getInclusiveDateFrom());
    		$edate = DateUtils::DUFormat('Y-m-d', $leaveID->getInclusiveDateTo());
    		//$sdate = '2014-10-01';
    		//$edate = '2014-10-31';
    		$cdate = $sdate;
			$isHoliday = false;
			$isOnleave = false;
			$isWorking = false;
			$workTemp = TkDtrmasterPeer::GetWorkSchedulebyEmployeeNo($empDetail->getEmployeeNo());
    		for($x=1; $cdate <= $edate; $x++):
    			$leaveDetail = HrEmployeeLeavePeer::GetLeaveDetail($empDetail->getEmployeeNo(), $cdate);
    			$isOnLeave = false;
    			$isApprove = false;
    			if ($leaveDetail):
    				$isOnLeave =  $leaveDetail->getLeaveType();
    				$isApprove =  $leaveDetail->getDateApproved()? 'approved' : '';
    			endif;
				if ($isOnLeave):
					$isWorking = TkWorktemplateDetailPeer::IsWorkingThisDay($cdate, $workTemp); 
					$isHalfDay = $leaveID->getHalfDay() == 'none'? '' : '| '.$leaveID->getHalfDay();
					if ($isWorking):
						echo $cdate .' | '. $isWorking .'hrs '. $isHalfDay . '   '. $isApprove. '<br>';
					endif;
				endif;
				$cdate = DateUtils::AddDate($sdate, $x);
			endfor;
    		?></div>
    	
    </th>
  </tr>
  <?php   	
  	$data = HrEmployeeLeaveSignaturePeer::GetDataByHrEmployeeLeaveId($sf_params->get('id') ); 
  	$needToSign = true;
  	if ($data) :
  		if ($data->getVerified() ):
  			$needToSign = false;
  		endif; 
  	endif;?>
  <?php if ($needToSign) : ?>
  <tr >
  	<td class="alignCenter bg-clearBlue" ><div  class="alignCenter">
	  	<div id="signature" ></div><br><h2><?php echo HrLeaveApproverPeer::GetVerifier($empDetail->getEmployeeNo()) ?></h2>
	  	<div id="tools"><?php echo input_tag('signature_data', $sf_params->get('signature_data'),'type=hidden');?></div>
		</div>
  	</td>
  	<td class="alignCenter"><?php 
    		echo image_tag('employee/'.$empDetail->getPhoto(),'size="150x200"'); 
    	?>
  	</td>
  </tr>
  <?php else: ?>
  	<tr><td class="alignCenter"  >
  		<img src="<?php echo $data->getVerified(); ?>" height=150px width=200px />
  		<br>____________________________________________________________
  		<br><h2><?php echo HrLeaveApproverPeer::GetVerifier($empDetail->getEmployeeNo()) ?></h2>
  	</td>
  	<td class="alignCenter"  >
  	<?php 
    		echo image_tag('employee/'.$empDetail->getPhoto(),'size="150x200"'); 
    	?>
  	</td>
  	</tr>
  <?php endif;?>
  <tr><td></td><td><input type="button" value="Goto Search" id="search"></td></tr>
</table>
</span>
<script>
/*  @preserve
jQuery pub/sub plugin by Peter Higgins (dante@dojotoolkit.org)
Loosely based on Dojo publish/subscribe API, limited in scope. Rewritten blindly.
Original is (c) Dojo Foundation 2004-2010. Released under either AFL or new BSD, see:
http://dojofoundation.org/license for more information.
*/
(function($) {
	var topics = {};
	$.publish = function(topic, args) {
	    if (topics[topic]) {
	        var currentTopic = topics[topic],
	        args = args || {};
	
	        for (var i = 0, j = currentTopic.length; i < j; i++) {
	            currentTopic[i].call($, args);
	        }
	    }
	};
	$.subscribe = function(topic, callback) {
	    if (!topics[topic]) {
	        topics[topic] = [];
	    }
	    topics[topic].push(callback);
	    return {
	        "topic": topic,
	        "callback": callback
	    };
	};
	$.unsubscribe = function(handle) {
	    var topic = handle.topic;
	    if (topics[topic]) {
	        var currentTopic = topics[topic];
	
	        for (var i = 0, j = currentTopic.length; i < j; i++) {
	            if (currentTopic[i] === handle.callback) {
	                currentTopic.splice(i, 1);
	            }
	        }
	    }
	};
})(jQuery);

$(document).ready(function() {
	
	// This is the part where jSignature is initialized.
	var $sigdiv = $("#signature").jSignature({'UndoButton':true, height: '200', width: '500'})
	
	// All the code below is just code driving the demo. 
	, $tools = $('#tools')
	, $extraarea = $('#displayarea')
	, pubsubprefix = 'jSignature.demo.'
	

	$('<input type="button" value="Save" id="saveImage">').bind('click', function(e){
			var data = $sigdiv.jSignature('getData', 'svgbase64')
			$.publish(pubsubprefix + 'formatchanged')
			if($.isArray(data) && data.length === 2){
				$('textarea', $tools).val(data.join(','))
				$('#signature_data').val(data.join(','))
				$.publish(pubsubprefix + data[0], data);
			}
			document.FORMadd.submit();
//			var urlData = encodeURIComponent(data);
//			var postData = "<?php echo url_for('leave/saveLeaveFormToPng') ?>?data="+urlData+"&id="+<?php echo $sf_params->get('id')?>;
//			var ajax = new XMLHttpRequest();
//			ajax.open("POST",postData,true);
//			ajax.send();
		
	}).appendTo($tools)
	
	$('<input type="button" value="Reset">').bind('click', function(e){
		$sigdiv.jSignature('reset')
	}).appendTo($tools)
	
	
	if (Modernizr.touch){
		$('#scrollgrabber').height($('#content').height())		
	}
	
})
</script>
</form>
</div>