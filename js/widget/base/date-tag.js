
Snapps.widget.base.DateTag = function(args, format) {
    Snapps.widget.base.Component.call();
    
    
    if (args == undefined) {
        var args = {};
    }
    if (format == undefined) {
        format = "%Y-%m-%d";
    }
    args.type = 'text';
    args.className = 'date-input';
    args.id = YAHOO.util.Dom.generateId();
    args.size = 11;
    
    this.format = format;
    
    this.input = createInputTag(args);
    
    this.pickAnchor = createImageTag('cal2.gif');
    this.pickAnchor.id = YAHOO.util.Dom.generateId();
    this.pickAnchor.className = 'date-input-anchor';
    
    Calendar.setup({
        inputField  : this.input,
        ifFormat    : this.format,
        button      : this.pickAnchor,
        align       : "BR",
        singleClick : true,
        weekNumbers : false,
        showOthers  : true    
    });
    
    
    this.element = document.createElement('div');
    this.element.className = 'date-input-container';
    this.element.appendChild(this.input);
    this.element.appendChild(this.pickAnchor);
    
    
};
JSDP.extend(Snapps.widget.base.DateTag, Snapps.widget.base.Component);

Snapps.widget.base.DateTag.prototype.getValue = function() {
    return this.input.value;
}
Snapps.widget.base.DateTag.prototype.setValue = function(value) {
    this.input.value = value;
}
Snapps.widget.base.DateTag.prototype.getSize = function() {
    return this.input.size;
}
Snapps.widget.base.DateTag.prototype.setSize = function(value) {
    this.input.size = value;
}
