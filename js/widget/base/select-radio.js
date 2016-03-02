



Snapps.widget.base.RadioGroup = function(nbColumn) {
    Snapps.widget.base.Component.call();
    
    this.INFINITE_COLUMN = 0;
    
    this.selectedValueChangedEvent = new YAHOO.util.CustomEvent('SelectedValueChangedEvent');
    
    this.options = [];
    this.members = [];
    this.labels = [];
    this.selectedIds = [];
    this.groupName = YAHOO.util.Dom.generateId();
    
    this.nbColumn = nbColumn || this.INFINITE_COLUMN;
    this.element = document.createElement('div');
    
    this.optionsContainer = document.createElement('div');
    this.element.appendChild(this.optionsContainer);
};
JSDP.extend(Snapps.widget.base.RadioGroup, Snapps.widget.base.Component);

Snapps.widget.base.RadioGroup.prototype.setOptions = function(options) {
    
    this.options = options;
    this.members = [];
    this.labels = [];
    this.values = [];

    for (var i in options) {
        var cb = createRadioTag({'name' : this.groupName, 'value' : i});
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
    
    this.constructDom();
}

Snapps.widget.base.RadioGroup.prototype.onValueChanged = function(type, args) {

    var unchecked = false;
    var checked = false;
    if (args[0].checked) {
        checked = args[1];
    } else {
        unchecked = args[1];
    }
    
    this.selectedValueChangedEvent.fire({'checked' : checked, 'unchecked' : unchecked, 'values' : this.getValues()});
        
}


Snapps.widget.base.RadioGroup.prototype.select = function(value) {  
    
    this.selectedIds = [value];
    
            
    for (var i = 0; i < this.members.length; i++) {
        
        if (value == this.values[i]) {
            this.members[i].selected = true;
            this.selectedValueChangedEvent.fire({'checked' : value, 'unchecked' : false, 'values' : this.getValues()});
        }
    }    
}
Snapps.widget.base.RadioGroup.prototype.unselect = function(value) {  
    
    
    for(var i = 0, len = this.selectedIds.length; i < len; i++) {
        if(this.selectedIds[i] === value) {
            
            this.selectedIds = [];
            break;
        }
    }
            
    for (var i = 0; i < this.members.length; i++) {
        if (value == this.values[i]) {
            this.members[i].selected = false;
            this.selectedValueChangedEvent.fire({'unchecked' : value, 'checked' : false, 'values' : this.getValues()}); 
        }
    }    
}


Snapps.widget.base.RadioGroup.prototype.getValues = function() {  
    var values = [];
    for (var i = 0; i < this.members.length; i++) {
        if (this.members[i].selected) {
            values.push(this.values[i]);
        }
    }
    return values;
}
Snapps.widget.base.RadioGroup.prototype.constructDom = function() {   
     
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


Snapps.widget.base.RadioGroup.prototype.simpleClone = function() {
    
    try {
        var tmp = new Snapps.widget.base.RadioGroup();
        
        tmp.setOptions(this.options);      
        
        return tmp;
    }
    catch (ex) {
        alert(ex.message);
    }
}

