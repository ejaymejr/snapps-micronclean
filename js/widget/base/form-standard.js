
Snapps.widget.base.Form = function(record, id, method, action) {      
    
    this.debugSubmit = false;
    
    this.form = document.createElement('form');
    this.form.className = 'ajax-form';
    this.form.id = id || YAHOO.util.Dom.generateId();
    this.form.method = method || 'post';
    this.form.action = action || '';
    
    this.validateJs = true;
    this.ajaxSubmissionHandler = new Snapps.widget.base.Form.AjaxHandlerProxy(this);

    this.panels = {
        'successMessage'   : false,
        'errorMessage'   : false,
        'form'      : false,
        'submit'    : false,
        'progressIndicator' : false,
        'toolbar'   : false,
        'recordNavigator' : false
    };
   
    this.record = record;
    this.inputs_meta = {};
    this.inputs = {};    
    this.messageContainers = {};    
    this.formParams = ''; 
    this.tooltips = {};
    this.localError = 0;
    this.msg = '';   
    
    if (this.formParamsPrefix == undefined) {
        this.formParamsPrefix = 'record';
    }
    
    this.init();
}


Snapps.widget.base.Form.prototype.init = function() {
    this.setupPanels();   
    this.setupInputs();
    this.setupTooltips();
    this.setupInputListeners();
}

Snapps.widget.base.Form.prototype.setupPanels = function() {
    
    this.panels.toolbar = document.createElement('div');
    this.panels.toolbar.className = 'afp-toolbar';
    
    this.panels.recordNavigator = document.createElement('div');
    this.panels.recordNavigator.className = 'afp-record-navigator';
    
    this.panels.errorMessage = document.createElement('div');   
    this.panels.errorMessage.className = 'afp-error-message';  
    this.panels.errorMessage.style.display = 'none';
    
    this.panels.successMessage = document.createElement('div');   
    this.panels.successMessage.className = 'afp-message';  
    this.panels.successMessage.style.display = 'none';
    
    this.panels.form = document.createElement('div');
    this.panels.form.className = 'afp-form';
    this.panels.form.style.display = '';
    
    this.panels.submit = document.createElement('div');
    this.panels.submit.className = 'afp-panel-submit';
    this.panels.submit.style.display = '';
    
    this.panels.progressIndicator = document.createElement('div');
    //this.panels.progressIndicator.className = 'afp-progress-indicator'; 
    this.panels.progressIndicator.style.display = 'none';
    
    this.progressImage = createImageTag('ajax-loader.gif');
    this.panels.progressIndicator.appendChild(this.progressImage);   
} 

Snapps.widget.base.Form.prototype.setupInputs = function() {    
    
    this.inputs.submit = createSubmitTag({'value':'Save Changes'});
    this.inputs.submit.onclick = function() {};
    
    
    try {
        
        for (var i in this.inputs_meta) {
            this.inputs[i] = false;
        }
        
        for (var i in this.inputs_meta) {
            if (this.inputs_meta[i].type == 'text') {
                
                this.inputs[i] = createTextTag();
                this.inputs[i].size = 30;
                if (this.inputs_meta[i].size) {
                    this.inputs[i].size = this.inputs_meta[i].size;
                }
                if (this.record && this.record.fields[i]) {
                    this.inputs[i].value = this.record.fields[i];
                }
            } else if (this.inputs_meta[i].type == 'number') {
                this.inputs[i] = createTextTag();
                this.inputs[i].size = 10;
                $(this.inputs[i]).addClassName('alignRight');
                if (this.inputs_meta[i].size) {
                    this.inputs[i].size = this.inputs_meta[i].size;
                }
                if (this.record && this.record.fields[i]) {
                    this.inputs[i].value = this.record.fields[i];
                }  
            }  else if (this.inputs_meta[i].type == 'date') {
                this.inputs[i] = new Snapps.widget.base.DateTag();
                this.inputs[i].setSize(12);
                if (this.inputs_meta[i].size) {
                    this.inputs[i].setSize(this.inputs_meta[i].size);
                }
                if (this.record && this.record.fields[i]) {
                    this.inputs[i].setValue(this.record.fields[i]);
                }  
            }
             else if (this.inputs_meta[i].type == 'placeholder') {
                this.inputs[i] = new Snapps.widget.base.PlaceHolder();
                if (this.inputs_meta[i].className) {
                    this.inputs[i].element.className = 'placeholder ' + this.inputs_meta[i].className;
                } else {
                    this.inputs[i].element.className = 'placeholder placeholder-number';
                }
                if (this.record && this.record.fields[i]) {
                    this.inputs[i].setValue(this.record.fields[i]);
                } 
                
            }            
        }
    }
    catch (ex) { alert(ex.message); };
    
    
    
    
    for (var field in this.inputs) {
        this.messageContainers[field] = document.createElement('div');
        this.messageContainers[field].className = 'form_error';
    }
}
Snapps.widget.base.Form.prototype.setupInputListeners = function() {   
    YEvent.addListener(this.inputs.submit, 'click', this.onSubmitClicked, this, true);
}


Snapps.widget.base.Form.prototype.setupTooltips = function() {
    
}
    
Snapps.widget.base.Form.prototype.showProgressPanel = function() {
    this.panels.progressIndicator.style.display = '';
}
Snapps.widget.base.Form.prototype.hideProgressPanel = function() {
    this.panels.progressIndicator.style.display = 'none';
}
Snapps.widget.base.Form.prototype.showFormPanel = function() {
    this.panels.form.style.display = '';
}
Snapps.widget.base.Form.prototype.hideFormPanel = function() {
    this.panels.form.style.display = 'none';
}
Snapps.widget.base.Form.prototype.showSubmit = function() {
    this.inputs.submit.style.display = '';
}
Snapps.widget.base.Form.prototype.hideSubmit = function() {
    this.inputs.submit.style.display = 'none';
}


Snapps.widget.base.Form.prototype.onSelectOtherRecordChanged = function(type, args) {

    if (args[0] && args[0].fields.id) {
        showLoader();
        window.location = this.url.view + 'id=' + args[0].fields.id;
    }
}

Snapps.widget.base.Form.prototype.onSubmitClicked = function(type, args) {  
    
    
    if (this.validate()) {
        this.submitAjax();
    }
    YEvent.preventDefault(type);
    
}


Snapps.widget.base.Form.prototype.render = function(parent) {
    
    $(parent).appendChild(this.panels.form);
    $(parent).appendChild(this.panels.submit);
    
    this.panels.form.appendChild(this.form);    
    this.panels.form.appendChild(this.panels.toolbar);
    this.panels.form.appendChild(this.panels.recordNavigator);
    
       
    var tbl = document.createElement('table');
    var tbody = document.createElement('tbody');
    var tr = document.createElement('tr');
    
    
    
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    td1.style.width = '100%';
    td2.style.verticalAlign = 'top';
    
    td1.appendChild(this.panels.successMessage);
    td1.appendChild(this.panels.errorMessage);
    
    td2.appendChild(this.panels.progressIndicator); 
    td2.appendChild(this.inputs.submit);   
    
    tbl.appendChild(tbody);
    tbody.appendChild(tr);
    tr.appendChild(td1);
    tr.appendChild(td2);
    this.panels.submit.appendChild(tbl);
}


Snapps.widget.base.Form.prototype.appendStandardInputColumn = function(input, tr, cellClasses) {
    
    if (!this.inputs_meta[input]) {
        return;
    }
    var td1, td2;
    td1 = document.createElement('td');
    td1.style.whiteSpace = 'nowrap';
    
    var label = document.createTextNode(input);
    if (this.inputs_meta[input].nicename) {
        label = document.createTextNode(this.inputs_meta[input].nicename);        
    }
    if (cellClasses && cellClasses[0]) {        
        td1.className = cellClasses[0];
    } else {
        td1.className = 'FORMcell-left FORMlabel';
    }
    td1.appendChild(label);
    
    td2 = document.createElement('td');
    if (this.messageContainers[input]) {
        td2.appendChild(this.messageContainers[input]);
    }
    if (this.inputs[input].element) {        
        td2.appendChild(this.inputs[input].element);
    } else if (this.inputs[input]) {
        td2.appendChild(this.inputs[input]);
    }
    if (cellClasses && cellClasses[1]) {        
        td2.className = cellClasses[1];
    } else {
        td2.className = 'FORMcell-right';
    }
    
    
    tr.appendChild(td1);
    tr.appendChild(td2);
}

Snapps.widget.base.Form.prototype.appendStandardLabelColumn = function(input, tr) {
    
    if (!this.inputs_meta[input]) {
        return;
    }
    var td1, td2;
    td1 = document.createElement('td');
    td1.style.whiteSpace = 'nowrap';
    
    var label = document.createTextNode(input);
    if (this.inputs_meta[input].nicename) {
        label = document.createTextNode(this.inputs_meta[input].nicename);        
    }
    td1.className = 'FORMcell-left FORMlabel';
    td1.appendChild(label);
    tr.appendChild(td1);
}

Snapps.widget.base.Form.prototype.submitAjax = function() {
    
    if (!this.form.action) {
        alert("I can't remember the address. Hmm...");
        return false;
    }
    
    try {
            
        var url = this.form.action;
        
        this.buildFormParams();
        
        
        
        if (this.debugSubmit) {
            this.simulatePostDebug();
            return;
        } else if (this.noAjaxSubmit) {
            this.simulatePostNoAjax();
        } else {
            //this.hideFormPanel();
            this.hideSubmit();
            this.showProgressPanel();
            var request = YAHOO.util.Connect.asyncRequest('POST', url, this.ajaxSubmissionHandler, this.formParams);
        } 
    }
    catch (ex) { alert(ex.message); }
};


Snapps.widget.base.Form.prototype.simulatePostDebug = function() {
    this.simulatePost('_blank');
}
Snapps.widget.base.Form.prototype.simulatePostNoAjax = function() {
    this.simulatePost('_self');    
}

Snapps.widget.base.Form.prototype.simulatePost = function(target) {
    var f = document.createElement('form');
    document.body.appendChild(f);
    
    f.style.display = 'none';
    f.action = this.form.action;
    f.method = 'POST';
    f.target = target || '_blank';
    
    
    var tmp = this.formParams.toQueryParams();
    
    var input = false
    for (var i in tmp) {
        input = document.createElement('input');
        input.type = 'text';
        input.name = i;
        input.value = tmp[i];
        f.appendChild(input);
    }
    var txt = document.createElement('textarea');
    txt.value = this.formParams;
    txt.name = 'params';
    f.appendChild(txt);
    f.submit();
    
    return;
}

Snapps.widget.base.Form.prototype.buildFormParams = function() {
    
    this.formParams = '';
    
    if (this.record && this.record.fields) {
        this.formParams += this.formParamsPrefix + '[id]=' + _esc(this.record.fields.id);
    }
    for (var i in this.inputs_meta) {
        if (this.inputs_meta[i].type == 'text' || this.inputs_meta[i].type == 'number') {                
            this.formParams += '&' + this.formParamsPrefix + '[' + i + ']=' + _esc(this.inputs[i].value);
        } else if (this.inputs_meta[i].type == 'date') {           
            this.formParams += '&' + this.formParamsPrefix + '[' + i + ']=' + _esc(this.inputs[i].getValue());
        }             
    }    
    
    return true;
}
Snapps.widget.base.Form.prototype.getFormParams = function() {
    
    this.buildFormParams();
    return this.formParams;
}



Snapps.widget.base.Form.prototype.clearErrors = function() {
    
    
    try {
        for (var i in this.inputs) {
            
            if(this.inputs[i].element && $(this.inputs[i].element).removeClassName) {
                $(this.inputs[i].element).removeClassName('formFieldErrorHighlight');
                
            }
            if (this.inputs[i].input) {
                $(this.inputs[i].input).removeClassName('formFieldErrorHighlight');
                
            }
            
            if(this.inputs[i] && $(this.inputs[i]).removeClassName) {
                $(this.inputs[i]).removeClassName('formFieldErrorHighlight');
            }
            
            if (this.messageContainers[i]) {
                this.messageContainers[i].innerHTML = '';
                this.messageContainers[i].style.display = 'none';
            }
        }
        this.panels.errorMessage.innerHTML = '';
        this.panels.errorMessage.style.display = 'none';
        this.panels.successMessage.innerHTML = '';
        this.panels.successMessage.style.display = 'none';
        
    } catch (ex) { alert(ex.message); }
    
}

Snapps.widget.base.Form.prototype.validate = function(suspendMsg) {
    
    //alert('Snapps.widget.base.Form.prototype.validate');
    
    this.clearErrors();
    this.localError = 0;
    this.msg = ''; 
    
    var suspendMsg = suspendMsg || false;
    
    if (!this.validateJs) {
        return true;
    }
      
    
    for (var i in this.inputs_meta) {
        
        var niceName = this.inputs_meta[i].nicename || i;
                
                
        if (    (this.inputs_meta[i].type == 'text' || 
                this.inputs_meta[i].type == 'number')
                
                 && this.inputs_meta[i].required &&  this.inputs_meta[i].required === true) {
            
            if (trim(this.inputs[i].value) == '') {
                
                this.localError++;
                if (this.inputs[i]) {
                    $(this.inputs[i]).addClassName('formFieldErrorHighlight');
                }
                this.msg += niceName + ' required.\n';                
            }
        } else if (    (this.inputs_meta[i].type == 'date') && this.inputs_meta[i].required &&  this.inputs_meta[i].required === true) {
            
            if (trim(this.inputs[i].getValue()) == '') {
                
                this.localError++;
                if (this.inputs[i].input) {
                    $(this.inputs[i].input).addClassName('formFieldErrorHighlight');
                }
                this.msg += niceName + ' required.\n';                
            }
        }        
        
        
        if (this.inputs_meta[i].type == 'number' && trim(this.inputs[i].value) != '' && !IsNumeric(this.inputs[i].value)) {
            
            this.localError++;
            if (this.inputs[i]) {
                $(this.inputs[i]).addClassName('formFieldErrorHighlight');
            }
            this.msg += niceName + ' must be number.\n';   
        }
        
        
    }
    
    if (suspendMsg && this.msg != '') {
        alert(this.msg);
    }
    if (this.localError > 0) {
        return false;
    } else {
        return true;
    }    
}


Snapps.widget.base.Form.prototype.ajaxSubmissionProcessor = {
    
    success : function (type, args) {
        var messages = [];
        try {            
            messages = YAHOO.lang.JSON.parse(args[0].responseText);            
            args[0].argument[0].parseAjaxResponse(messages);           
            
            args[0].argument[0].showSubmit();
            args[0].argument[0].hideProgressPanel();
        }
        catch (x) {
            alert('Error: ' + x.message);
            return;
        }
    }
};




Snapps.widget.base.Form.prototype.parseAjaxResponse = function(messages) {
            
    if (messages.success) {
        
        if (messages.success.global) {
            
            $(this.panels.successMessage).innerHTML = messages.success.global;
            $(this.panels.successMessage).style.display = '';
            Effect.Pulsate(this.panels.successMessage, {pulses: 2, duration:1});
        }
    }
    
    var alertMsg = '';
    if (messages.error) {        
        if (messages.error.record) {
            for (var field in messages.error.record) {                
                this.highlightError(field, messages.error.record[field]);
                alertMsg += messages.error.record[field] + '\n';
            }
        }        
        if (messages.error.global) {
            
            $(this.panels.errorMessage).innerHTML = messages.error.global;
            $(this.panels.errorMessage).style.display = '';
            Effect.Pulsate(this.panels.errorMessage, {pulses: 2, duration:1});
        }
    }
    if (alertMsg != '') {
        alert(alertMsg);
    }
    //this.showFormPanel();
    
    
    if (messages.redirect) {
        window.location = messages.redirect;
        return;
    }
}


Snapps.widget.base.Form.prototype.highlightError = function(field, msg) {
    
    if (!this.inputs[field]) {
        return;
    }
    
    if (this.inputs[field].input) {
        $(this.inputs[field].input).addClassName('formFieldErrorHighlight');
    }  
    else if (this.inputs[field].element) {
        $(this.inputs[field].element).addClassName('formFieldErrorHighlight');
        
    } else if (this.inputs[field] && $(this.inputs[field]).addClassName) {
        $(this.inputs[field]).addClassName('formFieldErrorHighlight');
    }
    if (this.messageContainers[field]) {
        //$(this.messageContainers[field]).innerHTML = messages.error[field];
        //$(this.messageContainers[field]).style.display = '';
    }
}
            


Snapps.widget.base.Form.AjaxHandlerProxy = function(parent) {
    this.parent = parent;
    
    this.customevents = {
        
        //onStart : this.parent.showLoader,
        //onComplete : this.parent.hideLoader,
        onSuccess: this.parent.ajaxSubmissionProcessor.success
    };    
    this.argument = [this.parent];
};
