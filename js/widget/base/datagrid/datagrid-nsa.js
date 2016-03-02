
// NSA  = Not So Automatic


Snapps.widget.base.datagrid.DataGridNSA = function(id) {
    this._nsa = true;
    Snapps.widget.base.datagrid.DataGrid.call(this, id);    
}
JSDP.extend(Snapps.widget.base.datagrid.DataGridNSA, Snapps.widget.base.datagrid.DataGrid);
