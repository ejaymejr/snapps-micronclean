
Snapps.widget.base.AjaxProxyHandler = function(parent) {    
    this.parent = parent;
    
    
    this.customevents = {
        
        //onStart : this.parent.showLoader,
        //onComplete : this.parent.hideLoader,
        onSuccess: this.parent.ajaxDataProcessor.success
    };    
    this.argument = [this.parent];
};