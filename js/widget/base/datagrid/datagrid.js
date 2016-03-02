

Snapps.widget.base.datagrid.DataGrid = function(id) {
    this.id = id || YAHOO.util.Dom.generateId();
    
    if (this._nsa == undefined) this._nsa = false;
    if (this.enableLoaderIndicator == undefined) this.enableLoaderIndicator = false;
    
    
    this.config = [];
    this.useConfig = [];
    this.useConfigKey;
    this.rows = [];
    this.rowsDisabledIds = [];
    this.rowsDisabledIdsByParams = {};
    
    
    this.baseUrl = false;
    
    this.isFixedDimension = false;
    
    this.container = false;
    this.header = false;
    this.content = false;
    this.body = false;
    this.navigationTop = false;
    this.navigationBottom = false;
    this.loadingIndicator = false;
    
    this.totalRecords = 0;
    this.totalPages = 0;
    this.currentPage = 1;
    this.maxDisplay = 10;
    
    this.pager = false;
    
    this.sortBy = false;
    this.sortOrder = false;
    this.criteria = new Snapps.widget.base.datagrid.Criteria();
    
    this.dataTable = false;
    
    this.isRowSelectable = true;
    this.btnConfirmSelection = false;
    
    this.selectionConfirmedEvent = new YAHOO.util.CustomEvent('selectionConfirmed');
}

Snapps.widget.base.datagrid.DataGrid.prototype.setConfig = function(cfg) { 
    this.config = cfg; 
    
    };
Snapps.widget.base.datagrid.DataGrid.prototype.setRows = function(rows) { 
    this.rows = [];
    if (rows) {
        this.rows = rows;
    } 
};
Snapps.widget.base.datagrid.DataGrid.prototype.setSortBy = function(v) {
    this.sortBy = v;
    this.criteria.set('sortBy', v);
};
Snapps.widget.base.datagrid.DataGrid.prototype.setSortOrder = function(v) {
    this.sortOrder = v;
    this.criteria.set('sortOrder', v);
};


Snapps.widget.base.datagrid.DataGrid.prototype.render = function(parent) {
	
	this.parent = $(parent);
	if (!this.parent) {
	   alert('Parent parent');
	   return;
	}
	
	// select config
	if (!this.useConfigKey) {
	    for (var i in this.config) {
	        if (this.config.hasOwnProperty(i)) {	    
	           this.useConfigKey = i;
	       }
	    }
	}
	this.useConfig = false;
	if (this.useConfigKey) {
	   this.useConfig = this.config[this.useConfigKey];
    }
    
    if (this.useConfig.sort_by && this.sortBy == false) {
        this.setSortBy(this.useConfig.sort_by);
    }
    if (this.useConfig.sort_order && this.sortOrder == false) {
        this.setSortOrder(this.useConfig.sort_order);
    }
	
	this.container = document.createElement('div');
	this.container.className = 'dataGridContainer dg-ng';
	this.parent.appendChild(this.container);
	
	this.header = document.createElement('div');
	this.header.className = 'dataGridHeader';
	this.container.appendChild(this.header);
	
	
	var headerTable = document.createElement('table');
	//headerTable.width = '100%';
    headerTable.style.width = '100%';
	this.header.appendChild(headerTable);
	var headerTableTbody = document.createElement('tbody');
	headerTable.appendChild(headerTableTbody);
    var headerTableRow = document.createElement('tr');
    headerTableTbody.appendChild(headerTableRow);
    
    var td1;
    td1 = document.createElement('td');
    //td1.width = '50%';
    headerTableRow.appendChild(td1);
    
    this.searchAnchor = document.createElement('a');
    this.searchAnchor.appendChild(document.createTextNode('Search'));
    this.searchAnchor.style.cursor = 'pointer';
    YEvent.addListener(this.searchAnchor, 'click', this.onSearchAnchorClicked, this, true);
    if (!this._nsa) td1.appendChild(this.searchAnchor);
    
    //td1.appendChild(document.createTextNode(' | '));
    
    var clearSearchAnchor = document.createElement('a');
    clearSearchAnchor.appendChild(document.createTextNode('Reset'));
    clearSearchAnchor.style.cursor = 'pointer';
    YEvent.addListener(clearSearchAnchor, 'click', this.onClearSearchAnchorClicked, this, true);
    //td1.appendChild(clearSearchAnchor);    
    
    
    
    var td3;
    
    td3 = document.createElement('td');
    td3.style.width = '128px';
    td3.style.textAlign = 'right';
    headerTableRow.appendChild(td3);
    
    this.loadingIndicator = createImageTag('ajax-loader.gif');
    this.hideLoadingIndicator();
    td3.appendChild(this.loadingIndicator);
    
    
    var td2;
    
    td2 = document.createElement('td');
    td2.style.whiteSpace = 'nowrap';
    headerTableRow.appendChild(td2);
    
    
    this.navigationTop = document.createElement('div');
    this.navigationTop.style.whiteSpace = 'nowrap';
    this.navigationTop.className = 'dataGridHeader';
    td2.appendChild(this.navigationTop);
    
    
    var clearance = document.createElement('div');
    clearance.className = 'clear';
    this.header.appendChild(clearance);    
        
	
	this.content = document.createElement('div');
	this.content.className = 'dataGridContent LightHeader';
	if (this.isFixedDimension) {
	   $(this.content).addClassName('dataGridFixedDimension');
	}
	this.container.appendChild(this.content);
	
    this.navigationBottom = document.createElement('div');
    this.navigationBottom.className = 'dataGridHeader';
    this.container.appendChild(this.navigationBottom);  
    
	this.footer = document.createElement('div');
	this.footer.className = 'dataGridFooter';
	this.container.appendChild(this.footer);	
	
	this.btnConfirmSelectionContainer = document.createElement('div');
	this.btnConfirmSelection = createYuiButtonInput({'label':'Confirm Selection', 'container':this.btnConfirmSelectionContainer});
	this.disableBtnConfirmSelection();	
    
	if (this.isRowSelectable) this.footer.appendChild(this.btnConfirmSelectionContainer);
	
	
	this.dataTable = new Snapps.widget.base.datatable.Table();
    this.content.appendChild(this.dataTable.getElement());
	
	this.dataTable.header = new Snapps.widget.base.datatable.DataHeader();
    this.dataTable.footer = new Snapps.widget.base.datatable.DataFooter();
    this.dataTable.search = new Snapps.widget.base.datatable.DataSearch();
    this.dataTable.dataRows = new Snapps.widget.base.datatable.DataRows();
    
    this.dataTable.element.appendChild(this.dataTable.header.getElement());
    this.dataTable.element.appendChild(this.dataTable.search.getElement());
    this.dataTable.element.appendChild(this.dataTable.dataRows.getElement());
    this.dataTable.element.appendChild(this.dataTable.footer.getElement());
	
	this.renderTableHeader();
    this.renderSearch();
    this.hideSearch();
    this.renderRows();	
	
	this.pager = new Snapps.widget.base.datagrid.Pager();
    this.pager.pageSelectedEvent.subscribe(this.onPageSelected, this, true);    
	this.renderPager();
	
	
	
    this.test = new Snapps.widget.base.datagrid.DataGrid.AjaxProxyHandler(this);
    
};
Snapps.widget.base.datagrid.DataGrid.prototype.renderTableHeader = function() {
    this.dataTable.header.clear();
    
    var cell;   
    // headers
    
    if (this._nsa) {
        cell = new Snapps.widget.base.datatable.CellHeader();
        cell.element.width = 20;
        this.dataTable.header.addChild(cell);    
        
        cell.element.appendChild(this.searchAnchor);    
    }
    
    if (this.isRowSelectable) { 
        cell = new Snapps.widget.base.datatable.CellHeader();
        cell.element.width = 10;
        this.dataTable.header.addChild(cell);
        
        cell.element.appendChild(this.dataTable.selector);
    }
    
    for (var i in this.useConfig.columns) {
    
        if (this.useConfig.columns.hasOwnProperty(i)) {
        
	        if (this.useConfig.columns[i].display === false) {
	            continue;
	        }
	        cell = new Snapps.widget.base.datatable.CellHeader();
	        this.dataTable.header.addChild(cell);
	        
	        if (this.useConfig.columns[i].sortable) {
	            $(cell.element).addClassName('sortable-header');
	            
	            var newSortOrder = 'ASC';
	            var newSortBy = i;
	            
	            if (this.sortBy == i) {
	                $(cell.element).addClassName('current-sort');
	                $(cell.element).addClassName('current-sort-' + this.sortOrder);
	                
	                var span = document.createElement('span');
	                span.className = 'current-sort sort-' + this.sortOrder;
	                cell.element.appendChild(span);
	                
	                newSortOrder = (this.sortOrder == 'ASC') ? 'DESC' : 'ASC';
	            }
	            
	            YEvent.addListener(cell.element, 'click', this.onSortHeaderChanged, [this, newSortBy, newSortOrder], this);
	            
	        }
	        if (this.useConfig.columns[i].header && this.useConfig.columns[i].header.class_name) {
	            $(cell.element).addClassName(this.useConfig.columns[i].header.class_name);
	        }
	        if (this.useConfig.columns[i].width) {
	            cell.element.width = this.useConfig.columns[i].width;
	        }
	        if (this.useConfig.columns[i].title) {
	            cell.element.appendChild(document.createTextNode(this.useConfig.columns[i].title));
	        }
	        if (this.useConfig.columns[i].header && this.useConfig.columns[i].header.extra_html &&
	                this.useConfig.columns[i].header.extra_html.indexOf('nowrap') != -1) {
	            cell.element.noWrap = true;
	        }
        }
    }
    cell = new Snapps.widget.base.datatable.CellHeader();
    cell.element.width = "20%";
    this.dataTable.header.addChild(cell);
};

Snapps.widget.base.datagrid.DataGrid.prototype.renderRows = function() {
        
    this.dataTable.dataRows.clear();
    this.dataTable.deselectAll();
    
    // data part
    var trData;
    var rowCount = 0;
    for (var r = 0; r < this.rows.length; r++) {
        
        var isRowDisabled = false;
        if (this.rowsDisabledIds.indexOf(this.rows[r]._dbobject.id) >= 0) {
            isRowDisabled = true;
        }
        if (this.rowsDisabledIdsByParams) {
            for (var p in this.rowsDisabledIdsByParams) {
                
                if (this.rows[r]._dbobject[p] &&
                        this.rowsDisabledIdsByParams[p].indexOf(this.rows[r]._dbobject[p]) !== -1) {
                    
                    isRowDisabled = true;
                }                
            }
        }
        
        trData = new Snapps.widget.base.datatable.DataRow();
        trData.isDisabled = isRowDisabled;
        trData.data = this.rows[r];
        trData.rowSelectedEvent.subscribe(this.onRowSelected, this, true);
        trData.rowUnselectedEvent.subscribe(this.onRowUnselected, this, true);
        
        trData.element.className = (rowCount % 2 === 0) ? 'dataGridRowEven' : 'dataGridRowOdd';
        trData.id = YAHOO.util.Dom.generateId(trData);
        
        
        if (this._nsa) {
            cell = new Snapps.widget.base.datatable.Cell();
            trData.addChild(cell);   
            
            if (this.rows[r]['admin']) {
                cell.element.noWrap = true;
                cell.element.innerHTML = this.rows[r]['admin'][0];
            }
        }
        
        if (this.isRowSelectable) { 
            cell = new Snapps.widget.base.datatable.Cell();
            trData.addChild(cell);
            cell.element.appendChild(trData.selector);
        }
        
        if (isRowDisabled) {
            trData.disable();
        }
    
        for (var i in this.useConfig.columns) {
            
            if (this.useConfig.columns[i].display === false) {
                continue;
            }        
            cell = new Snapps.widget.base.datatable.Cell();            
            
            if (i === this.criteria.get('sortBy')) {
                $(cell.element).addClassName('sorted-column-' + this.criteria.get('sortOrder'));
            }
            
            trData.addChild(cell);
            
            if (this.rows[r][i]) {
                var cellContent = this.rows[r][i][0];
                if (this.useConfig.columns[i].data.truncate_length && this.useConfig.columns[i].data.truncate_length > 0) {
                    
                    var length1 = cellContent.length;
                    cellContent = cellContent.substring(0, this.useConfig.columns[i].data.truncate_length);
                    if (this.useConfig.columns[i].data.truncate_text && cell && length1 > this.useConfig.columns[i].data.truncate_length) {
                        cellContent += this.useConfig.columns[i].data.truncate_text;
                    }
                }
                // var contentDiv = document.createElement('div');
                // contentDiv.style.whiteSpace = 'nowrap';
                // contentDiv.style.overflow = 'hidden';
                // contentDiv.style.width = '100%';
                // contentDiv.innerHTML = cellContent;
                // cell.element.appendChild(contentDiv);
                cell.element.innerHTML = cellContent;
            }
            if (this.useConfig.columns[i].data && this.useConfig.columns[i].data.extra_html &&
                    this.useConfig.columns[i].data.extra_html.indexOf('nowrap') != -1) {
                cell.element.noWrap = true;
            }
            if (this.useConfig.columns[i].data && this.useConfig.columns[i].data.class_name) {
                $(cell.element).addClassName(this.useConfig.columns[i].data.class_name);
            }
        }
        cell = new Snapps.widget.base.datatable.Cell();
        trData.addChild(cell);
        rowCount++;
        
        this.dataTable.dataRows.addChild(trData);
    }
    if (this.rows.length == 1) {
        this.dataTable.selectAll();
    }
};


Snapps.widget.base.datagrid.DataGrid.prototype.disableRow = function(rowObjId) {
    
    if (this.rowsDisabledIds.indexOf(rowObjId) === -1) {
        this.rowsDisabledIds.push(rowObjId);
    }
    for (var i = 0, len = this.dataTable.dataRows.childs.length; i < len; i++) {
        if (this.dataTable.dataRows.childs[i].data._dbobject.id == rowObjId) {
            this.dataTable.dataRows.childs[i].disable();
        }
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.disableRowBySecondaryParam = function(param, val) {
    
    var id = false;
    
    if (!this.rowsDisabledIdsByParams[param]) {
      this.rowsDisabledIdsByParams[param] = [];
    }
    if (this.rowsDisabledIdsByParams[param].indexOf(val) === -1) {
        this.rowsDisabledIdsByParams[param].push(val);
    }
    
    for (var i = 0, len = this.dataTable.dataRows.childs.length; i < len; i++) {
        if (this.dataTable.dataRows.childs[i].data._dbobject[param] == val) {

            this.dataTable.dataRows.childs[i].disable();
            
            id = this.dataTable.dataRows.childs[i].data._dbobject.id;
		    if (id && this.rowsDisabledIds.indexOf(id) === -1) {
		        this.rowsDisabledIds.push(id);
		    }
		    
        }
    }
};



Snapps.widget.base.datagrid.DataGrid.prototype.enableRow = function(rowObjId) {
    for (var i = 0; i < this.rowsDisabledIds.length; i++) {
        if (this.rowsDisabledIds[i] == rowObjId) {
            this.rowsDisabledIds.splice(i, 1);        
        }
    }
    for (var i = 0, len = this.dataTable.dataRows.childs.length; i < len; i++) {
        if (this.dataTable.dataRows.childs[i].data._dbobject.id == rowObjId) {
            this.dataTable.dataRows.childs[i].enable();
        }
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.enableRowBySecondaryParam = function(param, val) {

    if (this.rowsDisabledIdsByParams[param]) {
		for (var i = 0; i < this.rowsDisabledIdsByParams[param].length; i++) {
		    if (this.rowsDisabledIdsByParams[param][i] == val) {
		        this.rowsDisabledIdsByParams[param].splice(i, 1);        
		    }
		}
    }    
    
    var id = false;
    for (var i = 0, len = this.dataTable.dataRows.childs.length; i < len; i++) {
        if (this.dataTable.dataRows.childs[i].data._dbobject[param] == val) {

            this.dataTable.dataRows.childs[i].enable();
            
            
            id = this.dataTable.dataRows.childs[i].data._dbobject.id;
            if (id && this.rowsDisabledIds.indexOf(id) !== -1) {
		        for (var i = 0; i < this.rowsDisabledIds.length; i++) {
		            if (this.rowsDisabledIds[i] == id) {
		                this.rowsDisabledIds.splice(i, 1);        
		            }
		        }
            }   
        }
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.clearDisabledRows = function() {
    this.rowsDisabledIds = [];
    for (var i = 0, len = this.dataTable.dataRows.childs.length; i < len; i++) {
        if (this.dataTable.dataRows.childs[i].data._dbobject.id == rowObjId) {
            this.dataTable.dataRows.childs[i].enable();
        }
    }
};


Snapps.widget.base.datagrid.DataGrid.prototype.renderSearch = function() {
    this.dataTable.search.clear();
    
    var cell;   
    // headers
    
    this.searchReturnKeyListener = new YAHOO.util.KeyListener(this.dataTable.search.element, { keys:[13] }, 
                                                   { fn:this.onSubmitSearchClicked, 
                                                     scope:this,
                                                     correctScope:true } );
    this.searchReturnKeyListener.enable(); 
        
    
    if (this._nsa) { 
        cell = new Snapps.widget.base.datatable.Cell();
        this.dataTable.search.addChild(cell);
        
        var submitSearch = createSubmitTag({'value':'Go'});
        YEvent.addListener(submitSearch, 'click', this.onSubmitSearchClicked, this, true);
        
        
        cell.element.appendChild(submitSearch);
        
        
    }
            
    if (this.isRowSelectable) { 
        cell = new Snapps.widget.base.datatable.Cell();
        this.dataTable.search.addChild(cell);
    }
    for (var i in this.useConfig.columns) {
        
        if (this.useConfig.columns[i].display === false) {
            continue;
        }
        cell = new Snapps.widget.base.datatable.Cell();
        cell.field_id = i;
        this.dataTable.search.addChild(cell);
        
        if (this.useConfig.columns[i].search && this.useConfig.columns[i].search.search_enabled &&
                (this.useConfig.columns[i].search.search_displayed == undefined || this.useConfig.columns[i].search.search_displayed == true)) {

            var searchFields = [];
	        var sfs = this.useConfig.columns[i].search.search_fields;
	        if (!sfs) {
	        
                var tmp = {};
                var args = {};
                tmp['pre'] = '';
                
                args.type = 'text';
                args.value = this.criteria.get(i);
                
                tmp['element'] = new Snapps.widget.base.FilterElement(i, args);     
                YEvent.addListener(tmp['element'].input, 'keyup', this.onSearchInputChanged, [this, i, tmp['element'].input], this);
                
                searchFields.push(tmp);   
                 
	        } else {
                for (var searchKey in sfs) {
	               
                    var tmp = {};
					tmp['pre'] = sfs[searchKey]['inline_pre'] ? sfs[searchKey]['inline_pre'] : '';				
					
                    sfs[searchKey].value = this.criteria.get(searchKey);
                        
					if (sfs[searchKey]['type'] == 'text') {        
					    
                        tmp['element'] = new Snapps.widget.base.FilterElement(searchKey, sfs[searchKey]);   
						YEvent.addListener(tmp['element'].input, 'keyup', this.onSearchInputChanged, [this, searchKey, tmp['element'].input], this);
				
					} else if (sfs[searchKey]['type'] == 'date') {   
                        tmp['element'] = new Snapps.widget.base.FilterElement(searchKey, sfs[searchKey]);
                        tmp['element'].inputChangedEvent.subscribe(this.onSearchInputCalendarSelectDate, this, true);
                        YEvent.addListener(tmp['element'].input, 'change', this.onSearchInputChanged, [this, searchKey, tmp['element'].input], this);
                    
                    } else if (sfs[searchKey]['type'] == 'datetime') {   
                        tmp['element'] = new Snapps.widget.base.FilterElement(searchKey, sfs[searchKey]);
                        tmp['element'].inputChangedEvent.subscribe(this.onSearchInputCalendarSelectDate, this, true);
                        YEvent.addListener(tmp['element'].input, 'change', this.onSearchInputChanged, [this, searchKey, tmp['element'].input], this);
                    
                    }
                    searchFields.push(tmp);
				}
	        }
	        
	        if (searchFields.length > 0) {	           
	           for (var tmpC = 0; tmpC < searchFields.length; tmpC++) {
	               if (searchFields[tmpC]['pre']) {
	                   cell.element.appendChild(document.createTextNode(searchFields[tmpC]['pre']));
	               }
                   if (searchFields[tmpC]['element']) {
                        cell.element.appendChild(searchFields[tmpC]['element'].container);
                   }
                   cell.element.appendChild(document.createElement('br'));
	           }
	        }
        }
        if (this.useConfig.columns[i].search && this.useConfig.columns[i].search.class_name) {
            $(cell.element).addClassName(this.useConfig.columns[i].search.class_name);
        }
        if (this.useConfig.columns[i].search && this.useConfig.columns[i].search.extra_html &&
                this.useConfig.columns[i].search.extra_html.indexOf('nowrap') != -1) {
            cell.element.noWrap = true;
        }
    }
    cell = new Snapps.widget.base.datatable.Cell();
    cell.element.width = "50%";
    this.dataTable.search.addChild(cell);

};

Snapps.widget.base.datagrid.DataGrid.prototype.activateSearchField = function(fieldName) {    
    
    if (!this.dataTable.search) return;    
    for (var i = 0; i < this.dataTable.search.row.childs.length; i++) {    
        if (this.dataTable.search.row.childs[i].field_id && this.dataTable.search.row.childs[i].field_id == fieldName) {
            
            var containers = $(this.dataTable.search.row.childs[i].element).getElementsByClassName('filter-element-container');
            
            if (containers.length) {
                for (var j = 0; j < containers[0].childNodes.length; j++) {
                  
                    var tagName = containers[0].childNodes[j].tagName.toLowerCase();
                    if (tagName == 'input') {
                        var itype = containers[0].childNodes[j].type.toLowerCase();
                        if (itype == 'text') {                    
                            containers[0].childNodes[j].focus();
                        }
                    }
                };
            }
            break;
        }
    }
}




Snapps.widget.base.datagrid.DataGrid.prototype.renderPager = function() {

     this.pager.totalRecords = this.totalRecords;
     this.pager.totalPages = this.totalPages;
     this.pager.currentPage = this.currentPage;
     this.pager.maxDisplay = 10;
     this.pager.render(this.navigationTop);
     //this.pager.render(this.navigationBottom);
};
Snapps.widget.base.datagrid.DataGrid.prototype.onPageSelected = function(type, args) {
    this.pager.currentPage = args[0];
    
    this.criteria.set('page', args[0]);
    this.requestAjaxData();
};

Snapps.widget.base.datagrid.DataGrid.prototype.onSortHeaderChanged = function(type, args) {
        
    args[0].sortBy = args[1];
    args[0].sortOrder = args[2];
    
    args[0].criteria.set('sortBy', args[1]);
    args[0].criteria.set('sortOrder', args[2]);
    
    args[0].requestAjaxData();
};

Snapps.widget.base.datagrid.DataGrid.prototype.onRowSelected = function() {
  
    var selected = this.dataTable.getSelectedData();
    if (selected.length > 0) {
        this.enableBtnConfirmSelection();
    } else {
        this.disableBtnConfirmSelection();    
    }
    if (selected.length == this.dataTable.dataRows.childs.length) {
        this.dataTable.selector.checked = true;
    } else {
        this.dataTable.selector.checked = false;        
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.onRowUnselected = function() {
  
    var selected = this.dataTable.getSelectedData();
    if (selected.length > 0) {
        this.enableBtnConfirmSelection();
    } else {
        this.disableBtnConfirmSelection();    
    }
    if (selected.length == this.dataTable.dataRows.childs.length) {
        this.dataTable.selector.checked = true;
    } else {
        this.dataTable.selector.checked = false;        
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.onBtnConfirmSelectionClicked = function(type, args) {

    if (!this.dataTable) {
        return;
    }    
    var selected = this.dataTable.getSelectedData();
    
    var msg = '';
    if (selected.length) {
        for (var i = 0; i < selected.length; i++) {
            msg += selected[i]._dbobject.reference_number + '\n';
        }
    }
    this.dataTable.deselectAll();
    this.selectionConfirmedEvent.fire(selected);
    return false;
};
Snapps.widget.base.datagrid.DataGrid.prototype.enableBtnConfirmSelection = function() {
    this.btnConfirmSelection.disabled = false;
    this.btnConfirmSelection.removeClass('yui-button-disabled');
    YEvent.removeListener(this.btnConfirmSelectionContainer, 'click');
    YEvent.addListener(this.btnConfirmSelectionContainer, 'click', this.onBtnConfirmSelectionClicked, this, true);
    

};
Snapps.widget.base.datagrid.DataGrid.prototype.disableBtnConfirmSelection = function() {
    this.btnConfirmSelection.disabled = true;
    this.btnConfirmSelection.addClass('yui-button-disabled');
    YEvent.removeListener(this.btnConfirmSelectionContainer, 'click');
};




Snapps.widget.base.datagrid.DataGrid.prototype.onSearchAnchorClicked = function() {
    this.toggleSearch();
};
Snapps.widget.base.datagrid.DataGrid.prototype.onClearSearchAnchorClicked = function() {
    this.criteria.reset();
    //this.setPersistentCriteriaParam();
    this.renderSearch();
    this.requestAjaxData();
};

Snapps.widget.base.datagrid.DataGrid.prototype.onSearchInputChanged = function(type, args) {
        
    args[0].criteria.set(args[1], args[2].value);  
    if (args[2].value == '' || args[2].value.length >= 3) {        
        if (!this._nsa) args[0].requestAjaxData();
    }
};


Snapps.widget.base.datagrid.DataGrid.prototype.onSearchInputCalendarSelectDate = function(type, args) {
    this.criteria.set(args[0][0], args[0][1]);    
    if (!this._nsa) this.requestAjaxData();
};

Snapps.widget.base.datagrid.DataGrid.prototype.onSubmitSearchClicked = function(type, args) {
    this.requestAjaxData();
};


Snapps.widget.base.datagrid.DataGrid.prototype.requestAjaxData = function() {
    
    if (!this.baseUrl) {
        alert("I can't remember the address. Hmm...");
        return false;
    }
    
    //if (this._nsa) { this.showLoadingIndicator(); };
    this.showLoadingIndicator();
        
    //var postData = 'page=' + page;
    //var request = YAHOO.util.Connect.asyncRequest('POST', this.baseUrl, this.test, postData); 
    var url = this.baseUrl;
    url += '?' + this.criteria.dump();
    
    if (this.ajaxRequestDataTransaction != undefined && YAHOO.util.Connect.isCallInProgress(this.ajaxRequestDataTransaction)) {
        YAHOO.util.Connect.abort(this.ajaxRequestDataTransaction);
    }
    //alert('dg req data');
    this.ajaxRequestDataTransaction = YAHOO.util.Connect.asyncRequest('GET', url, this.test); 
};

Snapps.widget.base.datagrid.DataGrid.prototype.ajaxDataProcessor = {
    
    // Successful XHR response handler
    success : function (type, args) {
        var messages = [];
        
        
        // Use the JSON Utility to parse the data returned from the server
        try {
            messages = YAHOO.lang.JSON.parse(args[0].responseText);
            
            args[0].argument[0].totalRecords = messages.totalRecords;
            args[0].argument[0].totalPages = messages.totalPages;
            args[0].argument[0].currentPage = messages.currentPage;
            args[0].argument[0].maxDisplay = messages.maxDisplay;
            
            args[0].argument[0].setRows(args[0].argument[0].constructRecordsFromAjaxRawData(messages.records)); 
            args[0].argument[0].setSortBy(messages.sortBy); 
            args[0].argument[0].setSortOrder(messages.sortOrder);
            
            args[0].argument[0].renderTableHeader();
            args[0].argument[0].renderRows();
            args[0].argument[0].renderPager();
        }
        catch (x) {
            alert('Error: ' + x.message + '\n\nPossibly because your login session has expired. Need to re-login');
            return;
        }
        
        //if (args[0].argument[0]._nsa) { args[0].argument[0].hideLoadingIndicator(); };
        args[0].argument[0].hideLoadingIndicator();
        
        if (YAHOO.example.container.dashboardPanel) { YAHOO.example.container.dashboardPanel.render(); };
    }
};

Snapps.widget.base.datagrid.DataGrid.prototype.constructRecordsFromAjaxRawData = function (records) {
    
    return records;
}

Snapps.widget.base.datagrid.DataGrid.prototype.showLoadingIndicator = function() {
    this.loadingIndicator.style.display = '';
    
    if (this.dataTable.search) this.dataTable.search.highlightSearchInProgress();
    
};
Snapps.widget.base.datagrid.DataGrid.prototype.hideLoadingIndicator = function() {
    this.loadingIndicator.style.display = 'none';
    if (this.dataTable.search) this.dataTable.search.unhighlightSearchInProgress();
};

Snapps.widget.base.datagrid.DataGrid.prototype.toggleSearch = function() {
    this.dataTable.search.toggle();
};
Snapps.widget.base.datagrid.DataGrid.prototype.showSearch = function() {
    this.dataTable.search.show();
};
Snapps.widget.base.datagrid.DataGrid.prototype.hideSearch = function() {
    this.dataTable.search.hide();
};



Snapps.widget.base.datagrid.DataGrid.prototype.showLoader = function() {
    if (this.enableLoaderIndicator) {
        this.showLoadingIndicator();
    }
};
Snapps.widget.base.datagrid.DataGrid.prototype.hideLoader = function() {
    if (this.enableLoaderIndicator) {
        this.hideLoadingIndicator();
    }
};





Snapps.widget.base.datagrid.DataGrid.prototype.setCriteriaParam = function(param, value, refreshData) {
    
    
    if (typeof refreshData == 'undefined') {
        var refreshData = true;
    }
    var test = this.criteria.get(param);
    if (test == value) {
        return;
    } else {
	    this.criteria.set(param, value);
	    
	    if (refreshData) this.requestAjaxData();
    }
};



Snapps.widget.base.datagrid.DataGrid.AjaxProxyHandler = function(parent) {    
    this.parent = parent;
    
    this.customevents = {
        
        //onStart : this.parent.showLoader,
        //onComplete : this.parent.hideLoader,
        onSuccess: this.parent.ajaxDataProcessor.success
    };    
    this.argument = [this.parent];
};


Snapps.widget.base.datagrid.DataGrid.prototype.dumpSelected = function() {
    
    if (!this.dataTable) {
        return;
    }    
    var selected = this.dataTable.getSelectedData();
    
    var msg = '';
    if (selected.length) {
        for (var i = 0; i < selected.length; i++) {
            msg += selected[i]._dbobject.reference_number + '\n';
        }
        alert(msg);
    } 
};

