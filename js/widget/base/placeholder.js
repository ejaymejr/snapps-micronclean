
Snapps.widget.base.PlaceHolder = function(args) {
    Snapps.widget.base.Component.call();
    
    this.value = '';
    
    this.element = document.createElement('div');
    this.element.style.width = '100%';
    
};
JSDP.extend(Snapps.widget.base.PlaceHolder, Snapps.widget.base.Component);

Snapps.widget.base.PlaceHolder.prototype.getValue = function() {
    return this.value;
}
Snapps.widget.base.PlaceHolder.prototype.setValue = function(value) {
    if (value == 0) value = ' ';
    this.value = value;
    this.element.innerHTML = this.value;
}
