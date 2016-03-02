
Snapps.widget.base.FilterElement = function(filterKey, config) {
    
    
    this.config = config;
    
    this.container = document.createElement('div');
    this.container.className = 'filter-element-container';
    
    
    var inputName = filterKey;
    
    var input = createTextTag({'size':'10'});
    if (this.config.value) {
        input.value = this.config.value;
    }
    var inputChangedEvent = new YAHOO.util.CustomEvent('inputChangedEvent');
    
    
    this.setCalendarValue = function(calendar, date) {     
        input.value = date;  
        if (calendar.dateClicked) {  
            calendar.callCloseHandler();
        }    
        inputChangedEvent.fire([inputName, date]);   
    }
    
    if (this.config.type == 'text') {        
           
        this.container.appendChild(input);
          
    } else if (this.config.type == 'date') {
        
        args = {};
        
        args.type = 'text';
        args.className = 'date-input';
        args.id = YAHOO.util.Dom.generateId();
        args.size = 11;
        
        if (this.config.value) {
            args.value = this.config.value;
        }
        
        var format = "%Y-%m-%d";
        
        input = createInputTag(args); 
        this.container.appendChild(input);
        
        var pickAnchor = createImageTag('cal2.gif');
        pickAnchor.id = YAHOO.util.Dom.generateId();
        pickAnchor.className = 'date-input-anchor'; 
        this.container.appendChild(pickAnchor);
        
        
        var calArgs = {
            inputField  : input,
            ifFormat    : format,
            button      : pickAnchor,
            align       : "BR",
            singleClick : true,
            weekNumbers : false,
            showOthers  : true,
            onSelect    : this.setCalendarValue
        };
        Calendar.setup(calArgs);    
    } else if (this.config.type == 'datetime') {
        
        args = {};
        
        args.type = 'text';
        args.className = 'date-time-input';
        args.id = YAHOO.util.Dom.generateId();
        args.size = 16;
        
        if (this.config.value) {
            args.value = this.config.value;
        }
        
        var format = "%Y-%m-%d %H:%M";
        
        input = createInputTag(args); 
        this.container.appendChild(input);
        
        var pickAnchor = createImageTag('cal2.gif');
        pickAnchor.id = YAHOO.util.Dom.generateId();
        pickAnchor.className = 'date-input-anchor'; 
        this.container.appendChild(pickAnchor);
        
        
        var calArgs = {
            inputField  : input,
            ifFormat    : format,
            button      : pickAnchor,
            align       : "BR",
            singleClick : true,
            weekNumbers : false,
            showOthers  : true,
            onSelect    : this.setCalendarValue,
            showsTime   : true
        };
        Calendar.setup(calArgs);    
    }
    
    var extraKeys = ['size', 'class'];
    var extras = [];
    for (var xk = 0; xk < extraKeys.length; xk++) {
        if (this.config[extraKeys[xk]]) {
            if (extraKeys[xk] == 'class') {
                input.className = this.config[extraKeys[xk]];
            }
            if (extraKeys[xk] == 'size') {
                input.size = this.config[extraKeys[xk]];
            }
        }
    }
    
    this.input = input;
    
    this.inputChangedEvent = inputChangedEvent;
    
}