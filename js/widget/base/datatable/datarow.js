
Snapps.widget.base.datatable.DataRow = function(id) {
    Snapps.widget.base.datatable.Row.call(this, id);
    
    this.data = false;
    
    this.isDisabled = false;
    this.isSelectable = true;    
    this.isSelected = false;
    this.isHighlighted = false;
    
    this.selector = createCheckboxTag();
    YEvent.addListener(this.selector, 'click', this.onSelectorClicked);
    
    this.rowSelectedEvent = new YAHOO.util.CustomEvent('rowSelectedEvent');
    this.rowUnselectedEvent = new YAHOO.util.CustomEvent('rowUnselectedEvent');
    
    this.element.className = Snapps.widget.base.datatable._classnames['row-data'];
    
    YEvent.addListener(this.element, 'mouseover', rowHovered2, this.element);
    YEvent.addListener(this.element, 'mouseout', rowUnhovered2, this.element);
    YEvent.addListener(this.element, 'mousedown', this.onClick, this, true);
};
JSDP.extend(Snapps.widget.base.datatable.DataRow, Snapps.widget.base.datatable.Row);

Snapps.widget.base.datatable.DataRow.prototype.onSelectorClicked = function(e) {
    if (e.preventDefault) e.preventDefault();
    return false;
}

Snapps.widget.base.datatable.DataRow.prototype.onClick = function(e) {
    this.toggle();  
}
Snapps.widget.base.datatable.DataRow.prototype.disable = function() {
    this.selector.style.display = 'none';
    $(this.element).addClassName('dataGridRowDisabled');
    this.isDisabled = true;
}
Snapps.widget.base.datatable.DataRow.prototype.enable = function() {
    this.selector.style.display = '';
    $(this.element).removeClassName('dataGridRowDisabled');
    this.isDisabled = false;
}


Snapps.widget.base.datatable.DataRow.prototype.toggle = function() {
    if (this.isSelected) this.deselect();
    else this.select();
}

Snapps.widget.base.datatable.DataRow.prototype.select = function() {   
    $(this.element).removeClassName('unclicked'); 
    if (!this.isSelected && !this.isDisabled) {
	    $(this.element).addClassName('clicked');
	    
        this.selector.checked = true;    
        this.isSelected = true; 
        
        this.rowSelectedEvent.fire(this.data);
    }
}
Snapps.widget.base.datatable.DataRow.prototype.deselect = function() {  
    $(this.element).removeClassName('clicked');  
    if (this.isSelected) {
        $(this.element).addClassName('unclicked');
        this.selector.checked = false;    
        this.isSelected = false; 
        
        this.rowUnselectedEvent.fire(this.data);
    }
}