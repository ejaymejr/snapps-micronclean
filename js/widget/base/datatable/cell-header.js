
Snapps.widget.base.datatable.CellHeader = function(id) {
    Snapps.widget.base.datatable.Cell.call(this, id);   
    
    this.element.className = 'dataGridTableHeaderColumn'; 
};
JSDP.extend(Snapps.widget.base.datatable.CellHeader, Snapps.widget.base.datatable.Cell);