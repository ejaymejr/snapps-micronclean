

Snapps.widget.base.datatable.Cell = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('td');
};
JSDP.extend(Snapps.widget.base.datatable.Cell, Snapps.widget.base.ElementWrapper);