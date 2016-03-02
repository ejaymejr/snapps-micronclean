
Snapps.widget.base.datatable.DataFooter = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('tbody');
    
    this.row = new Snapps.widget.base.datatable.Row();
    this.row.element.className = Snapps.widget.base.datatable._classnames['row-footer'];
    this.element.appendChild(this.row.getElement());
    
};
JSDP.extend(Snapps.widget.base.datatable.DataFooter, Snapps.widget.base.ElementWrapper);


Snapps.widget.base.datatable.DataFooter.prototype.addChild = function(child) {
    this.row.addChild(child);
}
Snapps.widget.base.datatable.DataFooter.prototype.removeChild = function(child) {
    this.row.removeChild(child);  
};
