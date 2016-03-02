
Snapps.widget.base.datatable.DataSearch = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('tbody');
    
    this.row = new Snapps.widget.base.datatable.Row();
    this.row.element.className = Snapps.widget.base.datatable._classnames['row-search'];
    this.element.appendChild(this.row.getElement());
    
};
JSDP.extend(Snapps.widget.base.datatable.DataSearch, Snapps.widget.base.ElementWrapper);

Snapps.widget.base.datatable.DataSearch.prototype.addChild = function(child) {
    this.row.addChild(child);
}
Snapps.widget.base.datatable.DataSearch.prototype.removeChild = function(child) {
    this.row.removeChild(child);  
};

Snapps.widget.base.datatable.DataSearch.prototype.clear = function() {    
    this.row.clear();
}

Snapps.widget.base.datatable.DataSearch.prototype.toggle = function() {    
    this.element.style.display == 'none' ? this.show() : this.hide();
}

Snapps.widget.base.datatable.DataSearch.prototype.show = function() {    
    this.element.style.display = '';
}

Snapps.widget.base.datatable.DataSearch.prototype.hide = function() {     
    this.element.style.display = 'none';
}

Snapps.widget.base.datatable.DataSearch.prototype.highlightSearchInProgress = function() {     
    $(this.row.element).addClassName('row-search-highlight');
}
Snapps.widget.base.datatable.DataSearch.prototype.unhighlightSearchInProgress = function() {      
    $(this.row.element).removeClassName('row-search-highlight');
}
