
Snapps.widget.base.datagrid.Pager = function() {

    this.totalRecord = 0;
    this.totalPages = 0;
    
    this.currentRecord = 1;
    this.currentPage = 1;
    
    this.maxDisplay = 10;
    
    
    this.pageSelectedEvent = new YAHOO.util.CustomEvent('pagerPageSelected');
}

Snapps.widget.base.datagrid.Pager.prototype.render = function(parent) {
    
    
    
    var list = document.createElement('ul');
    
    
    var firstHalf = false;
    var secondHalf = false;
        
    firstHalf = [];
    secondHalf = [];
    
    var count = 0;
    var L;
    var R;
    var LL = false;
    var RR = false;
    
    var offset = 3;
    if (this.currentPage == 1 || this.currentPage == this.totalPages) {
        offset--;
    }
    firstHalf.push(this.currentPage);
    
    for (var i = 1; count < this.maxDisplay - offset && !(LL && RR); i++) {
        
        L = this.currentPage - i;
        if (L > 1) {
            firstHalf.push(L);
            count++;
        } else LL = true;
        
        if (count < this.maxDisplay - offset) {
	        R = this.currentPage + i;
	        if (R <= this.totalPages - 1) {
	            secondHalf.push(R);
	            count++;
	        } else RR = true;
        }
    }
    
    var item;
    firstHalf.reverse();
    
    var isInsert1 = false;
    if (firstHalf.length > 0 && (firstHalf[0] > 2)) {
        isInsert1 = true;
        firstHalf = firstHalf.slice(1);
    }
    var isInsert2 = false;
    if (secondHalf.length > 0 && (secondHalf[secondHalf.length - 1] < this.totalPages - 1)) {
        isInsert2 = true;
        secondHalf = secondHalf.slice(0, secondHalf.length - 1);    
    }
    
    
    
    if (this.currentPage != 1) {
        this.appendItem(1, list);
    }
    if (isInsert1) {
        this.appendItem('..', list, 'trim');
    }    
    for (var i = 0; i < firstHalf.length; i++) {    
        this.appendItem(firstHalf[i], list);
    }
    for (var i = 0; i < secondHalf.length; i++) {   
        this.appendItem(secondHalf[i], list);
    }    
    if (isInsert2) {
        this.appendItem('..', list, 'trim');
    }
    if (this.currentPage != this.totalPages) {
        this.appendItem(this.totalPages, list);
    }    
    
    var first = createImageTag('icons/first-disabled.gif');
    first.className = 'inline-img';
    
    var prev = createImageTag('icons/previous-disabled.gif');
    prev.className = 'inline-img';
    
    if (this.currentPage > 1) {
        first = createImageTag('icons/first.gif');
        first.className = 'inline-img active';
        YEvent.addListener(first, 'click', this.onPageSelected, [this, 1]);        
        
        var prev = createImageTag('icons/previous.gif');
        prev.className = 'inline-img active';
        YEvent.addListener(prev, 'click', this.onPageSelected, [this, this.currentPage - 1]);
    }
    
    
    var last = createImageTag('icons/last-disabled.gif');
    last.className = 'inline-img';
    
    var next = createImageTag('icons/next-disabled.gif');
    next.className = 'inline-img';
    
    if (this.currentPage < this.totalPages) {
        last = createImageTag('icons/last.gif');
        last.className = 'inline-img active';
        YEvent.addListener(last, 'click', this.onPageSelected, [this, this.totalPages]);        
        
        var next = createImageTag('icons/next.gif');
        next.className = 'inline-img active';
        YEvent.addListener(next, 'click', this.onPageSelected, [this, this.currentPage + 1]);
    }
    
    
    //var container = document.createElement('div');
    
    var tbl = document.createElement('table');
    var tbody = document.createElement('tbody');
    var tr = document.createElement('tr');
    var td = document.createElement('td');
    container = td;
    container.className = 'dg-pager-container';
    
    if (parent.hasChildNodes() ) {
	    while ( parent.childNodes.length >= 1 )
	    {
	        parent.removeChild(parent.firstChild );       
	    } 
	}	
    
    parent.appendChild(container);
    var clearance = document.createElement('div');
    clearance.className = 'clear';
    parent.appendChild(clearance);
    
    var summaryText;
    if (this.totalRecords > 1) {
        summaryText = formatNumber(this.totalRecords) + ' records';
    } else if (this.totalRecords == 1) {
        summaryText = 'One record';
    } else {
        summaryText = 'No record';
    }
    var summary = document.createElement('div');
    summary.className = 'summary';
    summary.appendChild(document.createTextNode(summaryText));
    
    
    
    var manualPageInput = createTextTag({'size':'3', 'className':'alignRight'});
    manualPageInput.value = this.currentPage;
    
    var manualPageSubmitInput = document.createElement('a');
    manualPageSubmitInput.style.cursor = 'pointer';
    manualPageSubmitInput.appendChild(document.createTextNode('Go'));
    
    //manualPageSubmitInput = createInputTag({'type':'button','value':'Go', 'onclick':' '});
    YEvent.addListener(manualPageSubmitInput, 'click', this.onManualPageSubmitted, [this, manualPageInput], this);
    
    
    
    container.appendChild(summary);
    
    
    if (this.totalPages > 1) {
        container.appendChild(list);
        
        manualPageInput.disabled = false;
        $(manualPageInput).removeClassName('readonly');
        manualPageSubmitInput.disabled = false;
        $(manualPageSubmitInput).removeClassName('submit-button-disabled');
    } else {
        manualPageInput.disabled = true;
        $(manualPageInput).addClassName('readonly');
        manualPageSubmitInput.disabled = true;
        $(manualPageSubmitInput).addClassName('submit-button-disabled');
    }
    container.appendChild(first);
    container.appendChild(prev);
    container.appendChild(next);
    container.appendChild(last);
    container.appendChild(manualPageInput);
    container.appendChild(manualPageSubmitInput);
}
Snapps.widget.base.datagrid.Pager.prototype.appendItem = function(n, list, mode) {

	var item = document.createElement('li');
	item.appendChild(document.createTextNode(n));
	
	if (mode == 'trim') {
	   item.className = 'trim';
	} else {	
		if (n == this.currentPage) {
		    item.className = 'current';
		} else {
		    YEvent.addListener(item, 'click', this.onPageSelected, [this, n]);
		}
	}
	list.appendChild(item);
}

Snapps.widget.base.datagrid.Pager.prototype.onManualPageSubmitted = function (type, args) {
    
    var p = args[1].value;
    if (IsNumeric(p) && p > 0 && p <= args[0].totalPages && p != args[0].currentPage) {
        p = parseInt(p);
        args[0].pageSelectedEvent.fire(p);        
    }
    return false;
}

Snapps.widget.base.datagrid.Pager.prototype.onPageSelected = function (e, args) {
    args[0].pageSelectedEvent.fire(args[1]);
}

