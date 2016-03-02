
Snapps.widget.base.datatable.DataHeader = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('tbody');
    
    this.row = new Snapps.widget.base.datatable.Row();
    this.row.element.className = Snapps.widget.base.datatable._classnames['row-header'];
    this.element.appendChild(this.row.getElement());
    
};
JSDP.extend(Snapps.widget.base.datatable.DataHeader, Snapps.widget.base.ElementWrapper);


Snapps.widget.base.datatable.DataHeader.prototype.addChild = function(child) {
    this.row.addChild(child);
}
Snapps.widget.base.datatable.DataHeader.prototype.removeChild = function(child) {
    this.row.removeChild(child);  
};

Snapps.widget.base.datatable.DataHeader.prototype.clear = function() {    
    this.row.clear();
}
