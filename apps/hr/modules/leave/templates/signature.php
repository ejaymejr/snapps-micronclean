
<?php use_helper('Validation', 'Javascript') ?>
<table border=0 cellpadding='3' cellspacing='2'>
  <tr>
    <th>
    <?php 	    	
		echo $cal->LeaveDisplayCalendar($xdate, $empNo, 1);
	 ?></th>
    <th>
    	<?php 
    		echo image_tag('employee/'.$empDetail->getPhoto(),'size="150x200"'); 
    	?>
    	<br>Applicant<h3><?php echo $empDetail->getName() ?></h3>
    	<br><br><div>Leave Type: <h3><?php echo $leaveID->getLeaveType() ?></h3></div>
    	<br><br><div>Date From: <h3><?php echo DateUtils::DUFormat('Y-m-d', $leaveID->getInclusiveDateFrom()) ?></div>
    	<div>Date To: <h3><?php echo DateUtils::DUFormat('Y-m-d', $leaveID->getInclusiveDateFrom()) ?></div>
    	<br><div>Half Day: <?php echo $leaveID->getHalfDay()?></div>
    	
    </th>
  </tr>
  <?php $data = HrEmployeeLeaveSignaturePeer::GetDataByHrEmployeeLeaveId($sf_params->get('id') ); ?>
  <?php if (!$data) : ?>
  <tr>
  	<td><div id="signature"></div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lucy Ang
  	<div id="tools"></div>
		<div><p>Display Area:</p><div id="displayarea"></div></div>
  	</td>
  </tr>
  <?php else: ?>
  	<tr><td>
  		<img src="<?php echo $data->getSignature(); ?>" />
  		<br>______________________________
  		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lucy Ang
  	</td></tr>
  <?php endif;?>
</table>
</span>
<script>
//	var $sigdiv = $("#signature")
//	$sigdiv.jSignature() // inits the jSignature widget.
//	// after some doodling...
//	$sigdiv.jSignature("reset") // clears the canvas and rerenders the decor on it.

	
//	// Getting signature as SVG and rendering the SVG within the browser. 
//	// (!!! inline SVG rendering from IMG element does not work in all browsers !!!)
//	// this export plugin returns an array of [mimetype, base64-encoded string of SVG of the signature strokes]
//	var datapair = $sigdiv.jSignature("getData", "svgbase64") 
//	var i = new Image()
//	i.src = "data:" + datapair[0] + "," + datapair[1] 
//	$(i).appendTo($("#someelement") // append the image (SVG) to DOM.
//	
//	// Getting signature as "base30" data pair
//	// array of [mimetype, string of jSIgnature"s custom Base30-compressed format]
//	datapair = $sigdiv.jSignature("getData","base30") 
//	// reimporting the data into jSignature.
//	// import plugins understand data-url-formatted strings like "data:mime;encoding,data"
//	$sigdiv.jSignature("setData", "data:" + datapair.join(","))     

//function saveViaAJAX()
//{
//	var testCanvas = document.getElementById("canvasID");
//	var canvasData = testCanvas.toDataURL("image/png");
//	var postData = "canvasData="+canvasData;
//	var debugConsole= document.getElementById("debugConsole");
//	debugConsole.value=canvasData;
//
//	//alert("canvasData ="+canvasData );
//	var ajax = new XMLHttpRequest();
//	//ajax.open("POST",'testSave.php',true);
//	ajax.open("POST","<?php echo url_for('leave/saveLeaveFormToPng') ?>",false);
//	ajax.setRequestHeader('Content-Type', 'canvas/upload');
//	//ajax.setRequestHeader('Content-TypeLength', postData.length);
//
//
//	ajax.onreadystatechange=function()
//  	{
//		if (ajax.readyState == 4)
//		{
//			//alert(ajax.responseText);
//			// Write out the filename.
//    			document.getElementById("debugFilenameConsole").innerHTML="Saved as<br><a target='_blank' href='"+ajax.responseText+"'>"+ajax.responseText+"</a><br>Reload this page to generate new image or click the filename to open the image file.";
//		}
//  	}
//
//	ajax.send(postData);
//}
//   
//$(function() { 
//    $("#btnSave").click(function() { 
//        html2canvas(document.body, {
//            onrendered: function(canvas) {
//        	   canvas.setAttribute("id", "canvasID");
//               document.body.appendChild(canvas);
//                
//            }
//        });
//        
//        $("#upload").click(function() { 
//			saveViaAJAX();
//			alert('saved.');
//        });
//    }); 
//}); 
    
</script>
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
	var $sigdiv = $("#signature").jSignature({'UndoButton':true})
	
	// All the code below is just code driving the demo. 
	, $tools = $('#tools')
	, $extraarea = $('#displayarea')
	, pubsubprefix = 'jSignature.demo.'
	
//	var export_plugins = $sigdiv.jSignature('listPlugins','export')
//	, chops = ['<select>','<option value="">svgbase64</option>']
//	, name
//	for(var i in export_plugins){
//		if (export_plugins.hasOwnProperty(i)){
//			name = export_plugins[i]
//			if (name == 'svgbase64'){
//				chops.push('<option value="' + name + '">' + name + '</option>')
//			}
//		}
//	}
//	chops.push('</select><span><b> or: </b></span>')
//	
//	$(chops.join('')).bind('change', function(e){
//		alert(e.target.value);
//		if (e.target.value !== ''){
//			var data = $sigdiv.jSignature('getData', e.target.value)
//			$.publish(pubsubprefix + 'formatchanged')
//			if (typeof data === 'string'){
//				$('textarea', $tools).val(data)
//			} else if($.isArray(data) && data.length === 2){
//				$('textarea', $tools).val(data.join(','))
//				$.publish(pubsubprefix + data[0], data);
//			} else {
//				try {
//					$('textarea', $tools).val(JSON.stringify(data))
//				} catch (ex) {
//					$('textarea', $tools).val('Not sure how to stringify this, likely binary, format.')
//				}
//			}
//		}
//	}).appendTo($tools)

	$('<input type="button" value="Save" id="saveImage">').bind('click', function(e){
			var data = $sigdiv.jSignature('getData', 'svgbase64')
			$.publish(pubsubprefix + 'formatchanged')
			if($.isArray(data) && data.length === 2){
				$('textarea', $tools).val(data.join(','))
				$.publish(pubsubprefix + data[0], data);
			}
			var urlData = encodeURIComponent(data);
			var postData = "<?php echo url_for('leave/saveLeaveFormToPng') ?>?data="+urlData+"&id="+<?php echo $sf_params->get('id')?>;
			var ajax = new XMLHttpRequest();
			ajax.open("POST",postData,true);
			ajax.send();
		
	}).appendTo($tools)
	
	$('<input type="button" value="Reset">').bind('click', function(e){
		$sigdiv.jSignature('reset')
	}).appendTo($tools)
	

	
//	$('<div><textarea style="width:100%;height:7em;"></textarea></div>').appendTo($tools)
//	
//	$.subscribe(pubsubprefix + 'formatchanged', function(){
//		$extraarea.html('')
//	})
//
//	$.subscribe(pubsubprefix + 'image/svg+xml;base64', function(data) {
//		var i = new Image()
//		i.src = 'data:' + data[0] + ',' + data[1]
//		$(i).appendTo($extraarea)
//		
//		var message = [
//			"If you don't see an image immediately above, it means your browser is unable to display in-line (data-url-formatted) SVG."
//			, "This is NOT an issue with jSignature, as we can export proper SVG document regardless of browser's ability to display it."
//			, "Try this page in a modern browser to see the SVG on the page, or export data as plain SVG, save to disk as text file and view in any SVG-capabale viewer."
//           ]
//		$( "<div>" + message.join("<br/>") + "</div>" ).appendTo( $extraarea )
//	});
//	
//	$.subscribe(pubsubprefix + 'image/png;base64', function(data) {
//		var i = new Image()
//		i.src = 'data:' + data[0] + ',' + data[1]
//		$('<span><b>As you can see, one of the problems of "image" extraction (besides not working on some old Androids, elsewhere) is that it extracts A LOT OF DATA and includes all the decoration that is not part of the signature.</b></span>').appendTo($extraarea)
//		$(i).appendTo($extraarea)
//	});
//	
//	$.subscribe(pubsubprefix + 'image/jsignature;base30', function(data) {
//		$('<span><b>This is a vector format not natively render-able by browsers. Format is a compressed "movement coordinates arrays" structure tuned for use server-side. The bonus of this format is its tiny storage footprint and ease of deriving rendering instructions in programmatic, iterative manner.</b></span>').appendTo($extraarea)
//	});

	if (Modernizr.touch){
		$('#scrollgrabber').height($('#content').height())		
	}
	
})
</script>