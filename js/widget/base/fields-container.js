
Snapps.widget.base.FieldsContainer = function(record) {        
    
    this.validateJs = true;
    this.ajaxSubmissionHandler = new Snapps.widget.base.FieldsContainer.AjaxHandlerProxy(this);

    this.panels = {
        'successMessage'   : false,
        'errorMessage'   : false,
        'form'      : false,
        'submit'    : false,
        'progressIndicator' : false
    };
   
    this.record = record || false;
    this.inputs_meta = {};
    this.inputs = {};    
    this.readOnly = false;
    this.messageContainers = {};    
    this.formParams = ''; 
    
    this.localError = 0;
    this.msg = '';   
    
    if (this.formParamsPrefix == undefined) {
        this.formParamsPrefix = 'record';
    }
    this.init();
}


Snapps.widget.base.FieldsContainer.prototype = {
    
    init: function() {
        this.setupInputs();
        this.setupPanels();   
    },


    setRecord: function(record) {
    
        var isChanged = false;
        
        if (this.record && this.record.fields.id == record.fields.id) {
            isChanged = true;
        }
        if (isChanged) {
            this.record = record;
            this.setupInputs();
        }
    },

    setReadOnly: function(flag) {
    
        var isChanged = false;
        
        if (this.readOnly != flag) {
            isChanged = true;
        }
        if (isChanged) {
            this.readOnly = flag;        
            this.updateReadOnlyState();
        }
    },

    updateReadOnlyState: function(flag) {
    
        for (var i in this.inputs_meta) {
            if (this.inputs_meta[i].type == 'text' || this.inputs_meta[i].type == 'date') {
                this.inputs[i].readOnly = this.readOnly;
                
                if (this.readOnly) {
                    $(this.inputs[i]).addClassName('readonly');
                } else {
                    $(this.inputs[i]).removeClassName('readonly');
                    
                }
            } else {
                
                if (this.inputs[i].setReadOnly) {
                    this.inputs[i].setReadOnly(this.readOnly);
                }
            }      
        }    
    },



    setupPanels: function() {
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
        this.panels.progressIndicator.style.padding = '20px';
        
        this.progressImage = createImageTag('ajax-loader.gif');
        this.panels.progressIndicator.appendChild(this.progressImage);   
        this.panels.progressIndicator.appendChild(document.createElement('br'));
        this.panels.progressIndicator.appendChild(document.createTextNode('Retrieving data...')); 
    },
    

    setupInputs: function() {    
    
        try {
            
            for (var i in this.inputs_meta) {
                this.inputs[i] = false;
            }
            
            for (var i in this.inputs_meta) {
                if (this.inputs_meta[i].type == 'text') {
                    
                    this.inputs[i] = createTextTag(i);
                    this.inputs[i].size = 30;
                    if (this.inputs_meta[i].size) {
                        this.inputs[i].size = this.inputs_meta[i].size;
                    }
                    if (this.record && this.record.fields[i]) {
                        this.inputs[i].value = this.record.fields[i];
                    }
                } else if (this.inputs_meta[i].type == 'date') {
                    this.inputs[i] = createDateTag();
                    this.inputs[i].size = 12;
                    if (this.inputs_meta[i].size) {
                        this.inputs[i].size = this.inputs_meta[i].size;
                    }
                    if (this.record && this.record.fields[i]) {
                        this.inputs[i].value = this.record.fields[i];
                    }  
                }             
            }
        }
        catch (ex) { alert(ex.message); };
        
        this.inputs.submit = createSubmitTag({'value':'Save Changes'});
        this.inputs.submit.onclick = function() {};
        
        
        
        
        for (var field in this.inputs) {
            this.messageContainers[field] = document.createElement('div');
            this.messageContainers[field].className = 'form_error';
        }
    },

    showFormPanel: function() {
        this.panels.form.style.display = '';
    },
    hideFormPanel: function() {
        this.panels.form.style.display = 'none';
    },

    showProgressPanel: function() {
        this.panels.progressIndicator.style.display = '';
    },
    hideProgressPanel: function() {
        this.panels.progressIndicator.style.display = 'none';
    },



    render: function(parent) {
        
        try {
            $(parent).appendChild(this.panels.form);
            $(parent).appendChild(this.panels.progressIndicator);
            $(parent).appendChild(this.panels.successMessage);
            $(parent).appendChild(this.panels.errorMessage);   
            
        } catch (ex) { alert(ex.message); }
    },

    
    appendStandardInputColumn: function(input, tr) {
        
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
        
        td2 = document.createElement('td');
        td2.appendChild(this.messageContainers[input]);
        td2.appendChild(this.inputs[input]);
        td2.className = 'FORMcell-right';
        
        tr.appendChild(td1);
        tr.appendChild(td2);
    },
    
    appendStandardLabelColumn: function(input, tr) {
        
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
    },
    
    
    buildFormParams: function() {
        
        this.formParams = '';
        
        if (this.record && this.record.fields) {
            this.formParams += '&' + this.formParamsPrefix + '[id]=' + this.record.fields.id;
        }
        for (var i in this.inputs_meta) {
            if (this.inputs_meta[i].type == 'text') {                
                this.formParams += '&' + this.formParamsPrefix + '[' + i + ']=' + _esc(this.inputs[i].value);
            }                    
        }
        return true;
    },
    getFormParams: function() {
        
        this.buildFormParams();
        return this.formParams;
    },
    
    
    clearErrors: function() {
        
        
        try {
            for (var i in this.inputs) {
                
                if(this.inputs[i].element) {
                    $(this.inputs[i].element).removeClassName('formFieldErrorHighlight');
                } else if(this.inputs[i]) {
                    $(this.inputs[i]).removeClassName('formFieldErrorHighlight');
                }
                this.messageContainers[i].innerHTML = '';
                this.messageContainers[i].style.display = 'none';
            }
            this.panels.errorMessage.innerHTML = '';
            this.panels.errorMessage.style.display = 'none';
            this.panels.successMessage.innerHTML = '';
            this.panels.successMessage.style.display = 'none';
            
        } catch (ex) { alert(ex.message); }
        
    },
    
    validate: function(suspendMsg) {
        
        this.clearErrors();
        this.localError = 0;
        this.msg = ''; 
        
        var suspendMsg = suspendMsg || false;
        
        if (!this.validateJs) {
            return true;
        }
          
        
        for (var i in this.inputs_meta) {
            if (this.inputs_meta[i].type == 'text' && this.inputs_meta[i].required &&  this.inputs_meta[i].required === true) {
                
                if (trim(this.inputs[i].value) == '') {
                    var niceName = this.inputs_meta[i].nicename || i;
                    
                    this.localError++;
                    if (this.inputs[i]) {
                        $(this.inputs[i]).addClassName('formFieldErrorHighlight');
                    }
                    this.msg += 'Address: ' + niceName + ' required.\n';                
                }
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
    },
    
    
    
    
    
    ajaxSubmissionProcessor: {
        
        // Successful XHR response handler
        success : function (type, args) {
            
        }
    }
}
    
Snapps.widget.base.FieldsContainer.AjaxHandlerProxy = function(parent) {
    this.parent = parent;
    
    this.customevents = {
        
        //onStart : this.parent.showLoader,
        //onComplete : this.parent.hideLoader,
        onSuccess: this.parent.ajaxSubmissionProcessor.success
    };    
    this.argument = [this.parent];
};
