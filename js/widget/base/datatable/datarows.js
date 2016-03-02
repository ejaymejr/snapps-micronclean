



Snapps.widget.base.datatable.DataRows = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('tbody');
    
    this.childs = [];
};
JSDP.extend(Snapps.widget.base.datatable.DataRows, Snapps.widget.base.ElementWrapper);

Snapps.widget.base.datatable.DataRows.prototype.addChild = function(child) {
    this.childs.push(child);
    this.element.appendChild(child.getElement());
}
Snapps.widget.base.datatable.DataRows.prototype.removeChild = function(child) {
    for(var i = 0, len = this.childs.length; i < len; i++) {
        if(this.childs[i] === child) {
            this.element.removeChild(child.getElement());  
            this.childs.splice(i, 1); // Remove one element from the array at 
                                              // position i.
                                              
            break;
        }
    }
};
Snapps.widget.base.datatable.DataRows.prototype.clear = function() {
    
    for (var i = 0; i < this.childs.length; i++) {  
        this.element.removeChild(this.childs[i].getElement()); 
        this.childs[i].clear();
    }
    this.childs = [];
}
