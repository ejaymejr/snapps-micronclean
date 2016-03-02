
Snapps.widget.base.ElementWrapper = function(id) {   
    
    this.id = id || YAHOO.util.Dom.generateId(this); 
    this.element;
}

Snapps.widget.base.ElementWrapper.prototype.setElement = function(el) {
    this.element = el;
}
Snapps.widget.base.ElementWrapper.prototype.getElement = function(el) {
    return this.element;
}
