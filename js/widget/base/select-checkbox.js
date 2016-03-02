



Snapps.widget.base.CheckboxGroup = function(nbColumn) {
    Snapps.widget.base.Component.call();
    
    this.INFINITE_COLUMN = 0;
    
    this.selectedValueChangedEvent = new YAHOO.util.CustomEvent('SelectedValueChangedEvent');
    
    this.options = [];
    this.members = [];
    this.labels = [];
    this.selectedIds = [];
    this.groupName = YAHOO.util.Dom.generateId();
    
    this.disabledNotInValues = [];
    this.disabledValues = [];
    
    this.nbColumn = nbColumn || this.INFINITE_COLUMN;
    this.element = document.createElement('div');
    
    this.optionsContainer = document.createElement('div');
    this.element.appendChild(this.optionsContainer);
};
JSDP.extend(Snapps.widget.base.CheckboxGroup, Snapps.widget.base.Component);

Snapps.widget.base.CheckboxGroup.prototype.setOptions = function(options) {
    
    this.options = options;
    this.members = [];
    this.labels = [];
    this.values = [];

    for (var i in options) {
        var cb = createCheckboxTag({'name' : this.groupName + '[]', 'value' : i});
        YEvent.addListener(cb, 'click', this.onValueChanged, [cb, i], this);  
        var label = document.createElement('span');
        label.appendChild(document.createTextNode(options[i]));
        label.className = 'checkbox-label';
        
        this.members.push(cb);
        this.values.push(i);
        this.labels.push(label);
    }
    
    
    for(var i = 0, len = this.selectedIds.length; i < len; i++) {
        this.select(this.selectedIds[i]);
    }
    
    this.disableOptionsNotInValues(this.disabledNotInValues);
    
    this.constructDom();
}

Snapps.widget.base.CheckboxGroup.prototype.removeFromOptions = function(values) {
    
    for (var i = 0; i < values.length; i++) {
        values[i] = values[i].toString();
    }
    var newOptions = {};
    for (var i in this.options) {
        if (values.indexOf(i) === -1) {
            newOptions[i] = this.options[i];
        }
    }
    this.setOptions(newOptions);
}
Snapps.widget.base.CheckboxGroup.prototype.removeFromOptionsNotInValues = function(values) {
    
    var newOptions = {};
    for (var i in this.options) {
        if (values.indexOf(i) !== -1) {
            newOptions[i] = this.options[i];
        }
    }
    this.setOptions(newOptions);
}

Snapps.widget.base.CheckboxGroup.prototype.disableOptionsNotInValues = function(values) {

    this.disabledNotInValues = values;
    
    try{
        for (var i = 0; i < this.members.length; i++) {
            
            if (values && values.length > 0 && values.indexOf(parseInt(this.values[i])) === -1) {
                //alert(this.values[i] + ' ' + 'disabled');
                this.members[i].checked = false;
                this.members[i].disabled = true;             
            } else {
                this.members[i].disabled = false; 
                
            }
        }   
    } catch (ex) { alert(ex.message); };
}


Snapps.widget.base.CheckboxGroup.prototype.disableOptionByValues = function(values) {

    
    try{
        for (var i = 0; i < this.members.length; i++) {
            
            if (values && values.length > 0 && values.indexOf(parseInt(this.values[i])) !== -1) {
                //alert(this.values[i] + ' ' + 'disabled');
                this.members[i].checked = false;
                this.members[i].disabled = true;             
            } else {
                this.members[i].disabled = false; 
                
            }
        }   
    } catch (ex) { alert(ex.message); };
}

Snapps.widget.base.CheckboxGroup.prototype.onValueChanged = function(type, args) {

    var unchecked = false;
    var checked = false;
    if (args[0].checked) {
        checked = args[1];
    } else {
        unchecked = args[1];
    }
    
    this.selectedValueChangedEvent.fire({'checked' : checked, 'unchecked' : unchecked, 'values' : this.getValues()});
        
}


Snapps.widget.base.CheckboxGroup.prototype.select = function(value) {  
    
    
    if (this.selectedIds.indexOf(value) === -1) {
        this.selectedIds.push(value);
    }
    
            
    for (var i = 0; i < this.members.length; i++) {
        
        if (value == this.values[i]) {
            this.members[i].checked = true;
            this.selectedValueChangedEvent.fire({'checked' : value, 'unchecked' : false, 'values' : this.getValues()});
        }
    }    
}
Snapps.widget.base.CheckboxGroup.prototype.unselect = function(value) {  
    
    
    for(var i = 0, len = this.selectedIds.length; i < len; i++) {
        if(this.selectedIds[i] === value) {
            this.selectedIds.splice(i, 1);
            break;
        }
    }
            
    for (var i = 0; i < this.members.length; i++) {
        if (value == this.values[i]) {
            this.members[i].checked = false;
            this.selectedValueChangedEvent.fire({'unchecked' : value, 'checked' : false, 'values' : this.getValues()}); 
        }
    }    
}


Snapps.widget.base.CheckboxGroup.prototype.getValues = function() {  
    var values = [];
    for (var i = 0; i < this.members.length; i++) {
        if (this.members[i].checked) {
            values.push(this.values[i]);
        }
    }
    return values;
}
Snapps.widget.base.CheckboxGroup.prototype.constructDom = function() {   
     
    while (this.optionsContainer.hasChildNodes())
    {
        this.optionsContainer.removeChild(this.optionsContainer.firstChild);
    }
    
    
    if (this.members.length < 1) {
        this.optionsContainer.appendChild(document.createTextNode('No Options available'));
        return;
    }
    
    
    var tbl = document.createElement('table');
    tbl.className = 'tbl-checkbox-group';
    
    var tbody = document.createElement('tbody');
    
    this.optionsContainer.appendChild(tbl);
    tbl.appendChild(tbody);
    
    var tr;
    tr = document.createElement('tr');
    tr.className = 'row-checkbox-group';
    
    tbody.appendChild(tr);
    
    var colCount = 0;
    
    
    try {
        for (var i = 0; i < this.members.length; i++) {
            
            if (this.nbColumn != this.INFINITE_COLUMN && colCount >= this.nbColumn) {
                tr = document.createElement('tr');
                tr.className = 'row-checkbox-group';
                tbody.appendChild(tr);
            }
            
            td1 = document.createElement('td');
            td1.className = 'cell-checkbox';
            tr.appendChild(td1);        
            
            td1.appendChild(this.members[i]);        
            
            td2 = document.createElement('td');
            td2.className = 'cell-checkbox-label';
            tr.appendChild(td2);
            
            td2.appendChild(this.labels[i]);   
            
            colCount++;
        }    
    }
    catch (ex) {alert(ex.message); }
}


Snapps.widget.base.CheckboxGroup.prototype.simpleClone = function() {
    
    try {
        var tmp = new Snapps.widget.base.CheckboxGroup();
        
        tmp.setOptions(this.options);      
        
        return tmp;
    }
    catch (ex) {
        alert(ex.message);
    }
}

