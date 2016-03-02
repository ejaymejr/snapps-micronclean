
Snapps.widget.base.datatable._classnames = {
        'table' : 'dataGridTable defaultGrid',
        'row-header' : 'dataGridTableHeader header_row',
        'row-footer' : 'ft',
        'row-data'   : 'dt',
        'row-search' : 'dgts search'
};
Snapps.widget.base.datatable.Table = function(id) {
    Snapps.widget.base.ElementWrapper.call(this, id);    
    this.element = document.createElement('table');
    this.element.className = Snapps.widget.base.datatable._classnames['table'];
    this.element.width = '100%';
    
    this.header;
    this.footer;
    this.search;
    this.dataRows;
    
    
    this.selector = createCheckboxTag();
    YEvent.addListener(this.selector, 'click', this.onSelectorClicked, this, true);
    
};
JSDP.extend(Snapps.widget.base.datatable.Table, Snapps.widget.base.ElementWrapper);

Snapps.widget.base.datatable.Table.prototype.getSelectedData = function() {
    
    if (!this.dataRows) {
        return false;
    }
    
    var selected = [];
    for (var i = 0; i < this.dataRows.childs.length; i++) {
        
        if (this.dataRows.childs[i].isSelected) {
            selected.push(this.dataRows.childs[i].data);
        }
    }
    
    return selected;
}

Snapps.widget.base.datatable.Table.prototype.selectAll = function() {   
    this.selector.checked  = true;    
    for (var i = 0; i < this.dataRows.childs.length; i++) {
        this.dataRows.childs[i].select();
    }
}
Snapps.widget.base.datatable.Table.prototype.deselectAll = function() { 
    this.selector.checked  = false;   
    for (var i = 0; i < this.dataRows.childs.length; i++) {
        this.dataRows.childs[i].deselect();
    }
}

Snapps.widget.base.datatable.Table.prototype.toggleSelectAll = function(state) {
    if (state) this.selectAll();
    else this.deselectAll();
}
Snapps.widget.base.datatable.Table.prototype.onSelectorClicked = function() {
    this.toggleSelectAll(this.selector.checked);
}

