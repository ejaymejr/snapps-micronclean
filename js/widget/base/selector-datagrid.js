

Snapps.widget.base.SelectorDataGrid = function(record, enabled) {
    
    if (this.defaultText == undefined) {
        this.defaultText = 'Click arrow to select';
    }
    this.enabled = enabled || true;
    
    this.lookupDataGrid = {'panel': false, 'grid': false};
    this.lookupClickedEvent = new YAHOO.util.CustomEvent('LookupClickedEvent');
    
    this.selectedRecordChangedEvent = new YAHOO.util.CustomEvent('SelectedRecordChangedEvent');
    
    this.selectedRecord = false;   
    
    this.draw();
    
    if (record) {
        this.setSelectedRecord(record);
    }
    
    
    
};


Snapps.widget.base.SelectorDataGrid.prototype.draw = function() {
    
    if (this.enabled) {
        this.lookupIcon          = createImageTag('icons/lookup.png'); 
        this.lookupIcon.className    = 'lookup lookup-enabled';
        YEvent.addListener(this.lookupIcon, 'click', this.onLookupClicked, this, true);
    } else {
        this.lookupIcon          = createImageTag('icons/lookup-disabled.png'); 
        this.lookupIcon.className    = 'lookup lookup-disabled';
        YEvent.addListener(this.lookupIcon, 'click', this.onLookupClickedDisabled, this, true);
    }
    
    this.element = document.createElement('div');
    this.element.className = 'lookup-selector';
    this.display = document.createElement('div');
    this.display.className = 'lookup-selected-display';  
    
    this.displayText = document.createTextNode(this.defaultText);    
    this.display.appendChild(this.displayText);
    
    
    this.panels = {};
    this.panels.progressIndicator = document.createElement('div');
    //this.panels.progressIndicator.className = 'afp-progress-indicator'; 
    this.panels.progressIndicator.style.display = 'none';
    
    this.progressImage = createImageTag('ajax-loader.gif');
    this.panels.progressIndicator.appendChild(this.progressImage);  
    this.display.appendChild(this.panels.progressIndicator);    
      
    this.element.appendChild(this.display);
    this.element.appendChild(this.lookupIcon);
    
    this.updateSelectionDisplay();
}
    
    
Snapps.widget.base.SelectorDataGrid.prototype.setLookupDataGrid = function(lookupDg) {
    this.lookupDataGrid = lookupDg;
    this.lookupDataGrid.grid.selectionConfirmedEvent.subscribe(this.onLookupSelectionConfirmed, this, true);
};
Snapps.widget.base.SelectorDataGrid.prototype.setSelectedRecord = function(record) {
    
    var isChanged = false;
    
    if (!this.selectedRecord || (this.selectedRecord && this.selectedRecord.fields.id != record.fields.id)) {
        isChanged = true;   
    }
    
    if (isChanged) {
        this.selectedRecord = record;
        this.updateSelectionDisplay();
        this.selectedRecordChangedEvent.fire(record);
    }
};
Snapps.widget.base.SelectorDataGrid.prototype.getSelectedRecord = function() {
    return this.selectedRecord;
}
Snapps.widget.base.SelectorDataGrid.prototype.getSelectedRecordId = function() {
    var id = false;
    if (this.selectedRecord) {
        id = this.selectedRecord.fields.id;
    }
    return id;
}
Snapps.widget.base.SelectorDataGrid.prototype.setIsEnabled = function(state) {
    this.enabled = state;
    this.draw();
}


Snapps.widget.base.SelectorDataGrid.prototype.onLookupClicked = function(type, args) {
    this.lookupClickedEvent.fire(this);        
    this.showLookup();
};
Snapps.widget.base.SelectorDataGrid.prototype.onLookupClickedDisabled = function(type, args) {
    alert('Could not change this field.\nThe record might be used for default value of something else, I\'m not sure.');
};
Snapps.widget.base.SelectorDataGrid.prototype.showLookup = function() {
        
    this.lookupDataGrid.panel.show();
    this.lookupDataGrid.grid.showSearch();
}
Snapps.widget.base.SelectorDataGrid.prototype.onLookupSelectionConfirmed = function(type, args) {
    this.lookupDataGrid.panel.hide();
    this.setSelectedRecord(args[0]);
}

Snapps.widget.base.SelectorDataGrid.prototype.render = function(parent) {   
    $(parent).appendChild(this.element);
    
}
Snapps.widget.base.SelectorDataGrid.prototype.updateSelectionDisplay = function() {
    try {
        if (this.selectedRecord) {
            this.display.removeChild(this.displayText);
            this.displayText = document.createTextNode('Selected'); 
            this.display.appendChild(this.displayText); 
        }
    } catch(ex) { alert(ex.message); };
}


Snapps.widget.base.SelectorDataGrid.prototype.showProgress = function() {   
    this.display.removeChild(this.displayText);
    this.panels.progressIndicator.style.display = '';
}
Snapps.widget.base.SelectorDataGrid.prototype.hideProgress = function() {   
    this.display.appendChild(this.displayText);
    this.panels.progressIndicator.style.display = 'none';
}


