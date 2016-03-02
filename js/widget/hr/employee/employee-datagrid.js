

Snapps.widget.hr.employee.DataGrid = function() {
	
	
   Snapps.widget.base.datagrid.DataGridNSA.call(this, id);    
    
}
JSDP.extend(Snapps.widget.hr.employee.DataGrid, Snapps.widget.base.datagrid.DataGridNSA);



Snapps.widget.hr.employee.DataGrid.prototype.constructRecordsFromAjaxRawData = function (records) {

    for (var i = 0; i < records.length; i++) {
        var tmp = constructDbObjectFields('hr_employee', records[i]._dbobject_raw);
        records[i]._dbobject = tmp;
    }
    return records;
}
