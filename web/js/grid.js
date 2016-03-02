




function reorderGridSN(tableID)
{
    table = document.getElementById(tableID);
    if (table)
    {
        rows = table.getElementsByTagName("tr");
        totalRows = rows.length;
        
        // find out SN colums
        var headersRow = rows[0];
        var SNcol = -1;
        var cells = headersRow.getElementsByTagName('TD');
        for (var j = 0; j < cells.length; j++)
        {
            if (cells[j].innerHTML == 'SN')
            {
                SNcol = j;
            }
        }
        for (var i = 1; i < totalRows; i++)
        {
            rows[i].className = i % 2 == 0 ? 'dataGridRowEven' : 'dataGridRowOdd';
            
            cells = rows[i].getElementsByTagName('TD');
            for (var j = 0; j < cells.length; j++)
            {
                if (j == SNcol)
                {
                    cells[j].innerHTML = i;
                }
            }
        }

    }
}

function checkGridSelection()
{
	// alert('start');

	var	form = document.forms["FORMgrid"];
	if(!form) {
		alert('Form object not found.');
		return false;
	}
	return checkGridSelectionEngine(form, 'FORMselectID[]');

}
function checkGridSelection2(formName) {
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}
	return checkGridSelectionEngine(form, 'FORMselectID[]');
}

function checkGridSelectionEngine(formObj, selectVar) {
	var form = formObj;
	var length = form.length;
	var checkedCount = 0;
	for(var i = 0; i < length; i++) {
		
		if(form[i].name == selectVar) {
			
			if(form[i].checked) {
				checkedCount++;
			}
		}
	}
	if(checkedCount < 1) {
		alert('Please indicate your selection.');
		return false;
	} else {
		return true;
	}
}

function toggleAllGridRows(formName, rowPrefix, cbPrefix)
{
    var form = document.forms[formName];
    if(!form) {
        alert('Form object not found.');
        return false;
    }

    var selected = 0;
    var unselected = 0;
    var rows = document.getElementsByTagName('tr');
    if(rows.length > 0) {
        for(var i = 0; i < rows.length; i++) {
            if(rows[i].id.indexOf(rowPrefix) > -1 ) {                
                if(rows[i].className.indexOf(' clicked') > -1) {
                    selected++;
                } else {
                    unselected++;
                }
            }
        }
    }
    
    var newState = true;
    if (selected > 0 && unselected == 0) newState = false;
    else if (unselected > 0 && selected == 0) newState = true;
    else newState = true;
    
    
    
    selectAllGridSelectionEngineByVars(formName, rowPrefix, cbPrefix, newState);
    

    return true;
}


function selectAllSelection(formName, fieldName, select)
{
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}

	var length = form.length;
	var selectVar = fieldName;
	for(var i = 0; i < length; i++) {		
		if(form[i].name == selectVar) {			
			form[i].checked = select;
		}
	}

	return true;
}

function selectAllGridSelectionEngineByVars(formName, rowIdentifier, checkboxIdentifier, select)
{
    var form = document.forms[formName];
    if(!form) {
        alert('Form object not found.');
        return false;
    }   
    var id;
    var rowID;
    var checkboxID;
    var checkbox;

    var rows = document.getElementsByTagName('tr');
    if(rows.length > 0) {
        for(var i = 0; i < rows.length; i++) {
            if(rows[i].id.indexOf(rowIdentifier) > -1 ) {
                
                id = rows[i].id.substring(rowIdentifier.length, rows[i].id.length);
                rowID = rowIdentifier + id;
                checkboxID = checkboxIdentifier + id;
                checkbox = document.getElementById(checkboxID);             
                if(checkbox) {

                    // select all?
                    if(select && !checkbox.checked) {
                        rowClicked(rowID, checkboxID);
                    }
                    // select none?                 
                    else if(!select && checkbox.checked) {
                        rowClicked(rowID, checkboxID);                      
                    }
                } else {
                    //alert(checkboxID + ' not found.');
                }
            }
        }
    }
    return false;
}


function selectAllGridSelectionEngine(formName, selectVar, select)
{
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}	

	var rowIdentifier = 'gridRow_';
	var checkboxIdentifier = 'gridCheckBox_';
	var id;
	var rowID;
	var checkboxID;
	var checkbox;

	var rows = document.getElementsByTagName('tr');
	if(rows.length > 0) {
		for(var i = 0; i < rows.length; i++) {
			if(rows[i].id.indexOf(rowIdentifier) > -1 ) {
				
				id = rows[i].id.substring(rowIdentifier.length, rows[i].id.length);
				rowID = rowIdentifier + id;
				checkboxID = checkboxIdentifier + id;
				checkbox = document.getElementById(checkboxID);				
				if(checkbox) {

					// select all?
					if(select && !checkbox.checked) {
						rowClicked(rowID, checkboxID);
					}
					// select none?					
					else if(!select && checkbox.checked) {
						rowClicked(rowID, checkboxID);						
					}
				} else {
					alert(checkboxID + ' not found.');
				}
			}
		}
	}
	return false;
}
function selectAllGridSelection(select)
{
	return selectAllGridSelectionEngine('FORMgrid', 'FORMselectID[]', select);
}


function rowHovered(rowID) {
	var obj = document.getElementById(rowID);
	if(obj) {
		hover(obj);
	} // else alert('Object not found.');
}
function rowUnhovered(rowID) {
	var obj = document.getElementById(rowID);
	if(obj) {
		unhover(obj);
	} // else alert('Object not found.');
}

function rowSelected(rowID, checkBoxID) {
	var obj = document.getElementById(rowID);
	var checkbox = document.getElementById(checkBoxID);
	if(obj) {
		if(obj.className.indexOf(' clicked') > -1) {
			if(checkbox) checkbox.checked = true;
		} else if(obj.className.indexOf(' unclicked') > -1) {
			obj.className = obj.className.replace(/unclicked/, 'clicked');
			if(checkbox) checkbox.checked = true;
		} else {
			obj.className += ' clicked';
			if(checkbox) checkbox.checked = true;
		}
	}
}

function rowClicked(rowID, checkBoxID) {
	var obj = document.getElementById(rowID);
	var checkbox = document.getElementById(checkBoxID);

	if(obj) {
		if(obj.className.indexOf(' clicked') > -1) {
			obj.className = obj.className.replace(/clicked/, 'unclicked');
			if(checkbox) checkbox.checked = false;
		} else if(obj.className.indexOf(' unclicked') > -1) {
			obj.className = obj.className.replace(/unclicked/, 'clicked');
			if(checkbox) checkbox.checked = true;
		} else {
			obj.className += ' clicked';	
			if(checkbox) checkbox.checked = true;
		}
	}
	
	if (!checkbox)
	{
		// alert('cant find object');
	}
}

function hover(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' unhover') > -1) {
			obj.className = obj.className.replace(/unhover/, 'hover');
		} else {
			obj.className += ' hover';
		}
	}
}
function unhover(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' hover') > -1) {
			obj.className = obj.className.replace(/hover/, 'unhover');
		} else {
			obj.className += ' unhover';
		}
	}
}

