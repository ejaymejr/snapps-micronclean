function var_dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }

    alert(out);

    // or, if you wanted to avoid alerts...

    var pre = document.createElement('pre');
    pre.innerHTML = out;
    document.body.appendChild(pre)
}

function ShowLog(title, logid, modified, datemodified, created, datecreated) //modified, datemodified, created, datecreated
{
  msg = '<table class="table bordered">'+
  			'<tr>'+
  				'<td class="bg-clearBlue alignRight">Modified By:</td><td>'+ modified +'</td>'+
  				'<td class="bg-clearBlue alignRight">Date Modified</td><td>'+ datemodified +'</td>'+
  			'</tr>'+
  			'<tr>'+
  				'<td class="bg-clearBlue alignRight">Created By:</td><td>'+ created +'</td>'+
  				'<td class="bg-clearBlue alignRight">DateCreated</td><td>'+ datecreated +'</td>'+
  			'</tr>'+
  		'</table>';
  ;
  $(document).ready(function() {
      $('#' + logid).on('click', function(){
        $.Dialog({
             shadow: true,
             overlay: true,
             icon: '<span class="icon-book fg-white" ></span>',
             title: title,
             width: 500,
             height: 100,
             padding: 10,
             content: msg
        });
      });
     });
}

function save(Url, particle, airflow){
	part = $("#"+particle).val();
	air = $("#"+airflow).val();
	extra = "&"+particle+"="+part+"&"+airflow+"="+air;
	$.ajax({type: "POST", url: Url + extra});
	//alert("lol");
	return true;
}
function AddWearerInfo() {
	totalUploadRow = 1;
    var lastRow = document.getElementById('attachment_row_' + totalUploadRow);

    var newRow = document.createElement('TR');
    
    newRow.id = 'attachment_row_' + totalUploadRow;    
    newRow.className = 'dataGridRow' + (totalUploadRow % 2 == 0 ? 'Even' : 'Odd');
    
    var td = document.createElement('TD');
    newRow.appendChild(td);

    var divinput = document.createElement('DIV');
    divinput.className = 'input-control file';
    td.appendChild(divinput);

    
    var file = document.createElement('INPUT');
    file.type = 'file';
    divinput.appendChild(file);
    file.name = 'upload_' + totalUploadRow;
    file.onchange = function() { addUploadRow(); };
    file.size = 50;
    
    var btn = document.createElement('BUTTON');
    btn.className = 'btn-file';
    divinput.appendChild(btn);
    
    
    var td = document.createElement('TD');
    newRow.appendChild(td);

    var ta = document.createElement('TEXTAREA');
    td.appendChild(ta);
    ta.name = 'description_' + totalUploadRow;
    ta.value = '';
    ta.onclick = ta.select();
    ta.cols = 50;
    ta.rows = 2;



    var td = document.createElement('TD');
    td.appendChild(document.createTextNode(' '));
    newRow.appendChild(td);

    

    //add a row to the rows collection and get a reference to the newly added row
    lastRow.parentNode.insertBefore(newRow, lastRow.nextSibling);
       
}


function GetScreenWidth()
{
	$(document).ready(function(){
		width = $(window).width() - 20;
		alert ( width );
	});	
}

function SearchHeaderAjax(submitID, Url, paramVar, updateID)
{
//	$(document).ready(function(){			
//		{loadUrl: Url 
//		, param: paramVar
//		, update: updateID
//		, extraparams: 'isAjax=true'
//		}, doAjax);
//	});
}

function PopupConversation(fileID)
{
	$(document).ready(function(){
            $.Dialog({
                'title'      : 'Filename: ' + fileID,
                'content'    : 'What do you want to do?',
                'draggable'  : true,
                'closeButton': true,
                'position'   : {
                    'zone'   : 'center'
                },
                'buttons'    : {
                    'Open Conversation'    : {
                        'action': function() { window.open('fileView?file='+fileID, 'Reject Conversation', 'window settings'); }
                    },
                    
                    'Close'     : {
                        'action': function() {}
                    }
                }
            });
	    });
}
function selectAll(selectBox,selectAll) { 
	//onclick="selectAll(document.getElementById('selectbox2'),true)
    // have we been passed an ID 
    if (typeof selectBox == "string") { 
        selectBox = document.getElementById(selectBox);
    } 
    // is the select box a multiple select box? 
    if (selectBox.type == "select-multiple") { 
        for (var i = 0; i < selectBox.options.length; i++) { 
             selectBox.options[i].selected = selectAll; 
        } 
    }
}
function randomID() {
	length = 10;
    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');

    if (! length) {
        length = Math.floor(Math.random() * chars.length);
    }

    var str = '';
    for (var i = 0; i < length; i++) {
        str += chars[Math.floor(Math.random() * chars.length)];
    }
    return str;
}

function checkAllGridCheckboxes(obj)
{
	markit = (obj.checked);
	$(':checkbox').each(function() {
        this.checked = markit;                        
    });
//    $("#checkAll").click(function () {
//	markit = $("#checkAll").is(":checked");
//        $(':checkbox').each(function() {
//            this.checked = markit;                        
//        });
//    });
}

function addUploadRow() {
    
    var lastRow = document.getElementById('attachment_row_' + totalUploadRow);

    var newRow = document.createElement('TR');
    
    totalUploadRow++;
    newRow.id = 'attachment_row_' + totalUploadRow;    
    newRow.className = 'dataGridRow' + (totalUploadRow % 2 == 0 ? 'Even' : 'Odd');
    
    var td = document.createElement('TD');
    newRow.appendChild(td);

    var divinput = document.createElement('DIV');
    divinput.className = 'input-control file';
    td.appendChild(divinput);

    
    var file = document.createElement('INPUT');
    file.type = 'file';
    divinput.appendChild(file);
    file.name = 'upload_' + totalUploadRow;
    file.onchange = function() { addUploadRow(); };
    file.size = 50;
    
    var btn = document.createElement('BUTTON');
    btn.className = 'btn-file';
    divinput.appendChild(btn);
    
    
    var td = document.createElement('TD');
    newRow.appendChild(td);

    var ta = document.createElement('TEXTAREA');
    td.appendChild(ta);
    ta.name = 'description_' + totalUploadRow;
    ta.value = '';
    ta.onclick = ta.select();
    ta.cols = 50;
    ta.rows = 2;



    var td = document.createElement('TD');
    td.appendChild(document.createTextNode(' '));
    newRow.appendChild(td);

    

    //add a row to the rows collection and get a reference to the newly added row
    lastRow.parentNode.insertBefore(newRow, lastRow.nextSibling);
       
}

function addSendTo()
{
	elist = $('#email_list').val();
	sendto = $('#send_to').val();
	document.getElementById('send_to').value = elist + ', ' + sendto; 
	//alert(elist);
}

function positionView()
{
  return (window.pageYOffset) ?
    window.pageYOffset :
    (document.documentElement.scrollTop) ?
      document.documentElement.scrollTop :
      document.body.scrollTop;
}

function setPosition(object)
{
  object.style.top = positionView() + "px";
}

	function doAjax(event){
		$.ajaxSetup ({  
	        cache: true  
	    });
		var length = 0;
		var params = '';
		if (typeof  event.data.param != 'undefined'){
			var myarr = event.data.param.split(",");
			var length = myarr.length;
		}
		
		if (event.data.extraparams){
			params = event.data.extraparams + '&';
			
		}
		for(var x=0; x< length; x++){
			//console.log(myarr[x]);
			//if (x <> 0) { 
			//	params += '&'; 
			//	}
			var origText = $.trim(myarr[x]);
			var assigned=origText.indexOf("=");
			if (assigned > 0){
				params += $.trim(myarr[x]);
				params += '&';
			}else{
				var textvalue = '#' + $.trim(myarr[x]);
				var textval = (($(textvalue)).val());   //jquery get Value from input text
				if (textvalue) {
					params += trim(myarr[x]) +'='+ textval;  //jquery make a url format ("customer=seagate&building=w2")
					params += '&';
				}
			}
		}
		var ajax_load = '<div id=\"showloader\"></div>';  
    	var loadUrl = event.data.loadUrl;
		$(event.data.update).html(ajax_load).load(loadUrl, params );
		return false;
	} 
					
	function overlay() {
		el = document.getElementById("overlay");
		el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
	}

	function showhideDIV(id) {
	    var e = document.getElementById(id);
	    if (e.style.visibility == 'visible') e.style.visibility = 'hidden';
	    else e.style.visibility = 'visible';
	}
	
	function showhideRow(id) {
		$(document).ready(function(){ 
			$('#'+id).toggle(500);
		});
	}


	function appendQuantity(inputID)
	{
		qty = parseInt(document.getElementById(inputID).value);
		if (isNaN(qty) ){
			return;
		} 
		
 		current = parseInt(document.getElementById('total' + inputID ).value) ;
		document.getElementById('DIVPreviousValue' + inputID).innerHTML= qty;
 		document.getElementById('total' + inputID).value = qty + current;
 		document.getElementById('prev' + inputID ).value = qty;
 		document.getElementById('DIVQuantityCount' + inputID ).innerHTML = qty + current;
 		document.getElementById(inputID).value = '';
	}

	function AddQuantity()
	{
		alert($(event.srcElement).attr('id'));
		qty = parseInt(document.getElementById('defaultKeypad').value);
		current = parseInt(document.getElementById('prev').value) ;
		document.getElementById('DIVPreviousValue').innerHTML= qty;
		document.getElementById('total').value = qty + current;
		document.getElementById('prev').value = qty;
		document.getElementById('DIVQuantityCount').innerHTML = qty + current;
		document.getElementById('defaultKeypad').value = '';
	}

	function uniqueid(){
	    // always start with a letter (for DOM friendlyness)
	    var idstr=String.fromCharCode(Math.floor((Math.random()*25)+65));
	    do {                
	        // between numbers and characters (48 is 0 and 90 is Z (42-48 = 90)
	        var ascicode=Math.floor((Math.random()*42)+48);
	        if (ascicode<58 || ascicode>64){
	            // exclude all chars between : (58) and @ (64)
	            idstr+=String.fromCharCode(ascicode);    
	        }                
	    } while (idstr.length<32);
	
	    return (idstr);
	}


	function AddRowTemplateDesignAdd(colCount)
	{
		
		var table=document.getElementById("AddTemplateTable");
		var row=table.insertRow(table.rows.length);
		//var id = uniqueid();
		var id = '';

		seq = document.getElementById('seq_no').value;
		seq = parseInt(seq) + 1;
		document.getElementById('seq_no').value =  seq;
		
		row.style = "height: 23px";
		row.className = "dataGridRowEven ";
		row.id= seq;

		var cell = new Array();
		for (cnt=0; cnt <= colCount; cnt++){
			cell[cnt]=row.insertCell(cnt);
			nID = '"' + seq + '"';
			//comID = '"com_' + seq + '_' + id + '"';
			recID = '"rec_' + seq +  '"';		//record ID
			garID = '"gar_' + seq +  '"';
			comID = '"com_' + seq +  '"';
			lisID = '"lis_' + seq +  '"';
			remID = '"rem_' + seq +  '"';
			seqID = '"seq_' + seq +  '"';
			switch(cnt){
				case 0:
					cell[cnt].innerHTML=" <a href='#' onclick='javascript: TemplateDesignDeleteRowByID( " + nID + " )'><span class='icon-minus fg-color-redLight'></span></a>";	
					break;
				case 1:
					cell[cnt].innerHTML= seq;
					break;
				case 2:
					cell[cnt].innerHTML= '<input type="text" value="" id=' + garID + ' name=' + garID + ' size="25"><input value="0" id=' + recID + ' name=' + recID + ' size="25" type="hidden">';
					break;
				case 3:
					cell[cnt].innerHTML= '<input type="text" value="" id=' + comID + ' name=' + comID + ' size="25">';
					break;
				case 4:
					cell[cnt].innerHTML= '<input type="text" value="" id=' + lisID + ' name=' + lisID + ' size="25">';
					break;
				case 5:
					cell[cnt].innerHTML= '<input type="text" value="" id=' + remID + ' name=' + remID + ' size="25">';
					break;
				case 6:
					cell[cnt].innerHTML= '<input type="text" value="" id=' + seqID + ' name=' + seqID + ' size="10">';
					break;
				default:
					break;
			} //switch
		}//for
	}	

	function TemplateDesignDeleteRow() {
	    var table = document.getElementById("AddTemplateTable");
	    var rowCount = table.rows.length;
	    table.deleteRow(rowCount -1);
	}

	function TemplateDesignDeleteRowByID(id){
		var el = document.getElementById(id);
		el.parentNode.removeChild(el);
		return false;
	}
	
	
	