

Snapps.widget.base.Select = function() {
    Snapps.widget.base.Component.call();
    
    this.selectedValue = false;
    
    this.element = document.createElement('select');
};
JSDP.extend(Snapps.widget.base.Select, Snapps.widget.base.Component);

Snapps.widget.base.Select.prototype.setOptions = function(options) {
    
    this.element.length = 0;

    for (var i in options) {
        this.element.options[this.element.options.length] = new Option(options[i], i);
        if (this.selectedValue == i) {
            this.element.options[this.element.options.length - 1].selected = true;
        }
    }
}
Snapps.widget.base.Select.prototype.getValue = function() {    
    return this.element.options[this.element.selectedIndex].value;
}
Snapps.widget.base.Select.prototype.select = function(selected) {
    
    this.selectedValue = selected;
    
    for (var i = 0; i < this.element.options.length; i++) {
        if (selected != undefined && this.element.options[i].value.toString().toLowerCase() == selected.toString().toLowerCase()) {
            this.element.options[i].selected = true;
        } else {
            this.element.options[i].selected = false;
        }
    }
}
Snapps.widget.base.Select.prototype.simpleClone = function() {
    
    try {
        var tmp = new Snapps.widget.base.Select();
        
        tmp.element = document.createElement('select');
        tmp.element.length = 0;
        for (var i = 0; i < this.element.options.length; i++) {
            tmp.element.options[i] = new Option(this.element.options[i].text, this.element.options[i].value);
            tmp.element.options[i].selected = this.element.options[i].selected;
        }        
        
        return tmp;
    }
    catch (ex) {
        alert(ex.message);
    }
}
