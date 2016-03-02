


Function.prototype.closure = function(obj)
{
  // Init object storage.
  if (!window.__objs)
    window.__objs = [];

  // Init closure storage.
  if (!this.__closureFuncs)
    this.__closureFuncs = [];

  // Make sure the object has an id and is stored in the object store.
  var objId = obj.__closureObjId;
  if (!objId)
    __objs[objId = obj.__closureObjId = __objs.length] = obj;

  // See if we previously created a closure for this object/function pair.
  var closureFunc = this.__closureFuncs[objId];
  if (closureFunc)
    return closureFunc;

  // Clear reference to keep the object out of the closure scope.
  obj = null;

  // Create the closure, store in cache and return result.
  var me = this;
  return this.__closureFuncs[objId] = function()
  {
    return me.apply(__objs[objId], arguments);
  };
};



// Simulates PHP's date function
Date.prototype.format = function(format) {
    var returnStr = '';
    var replace = Date.replaceChars;
    for (var i = 0; i < format.length; i++) {
        var curChar = format.charAt(i);
        if (replace[curChar])
            returnStr += replace[curChar].call(this);
        else
            returnStr += curChar;
    }
    return returnStr;
};
Date.replaceChars = {
    shortMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    longMonths: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    shortDays: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    longDays: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    
    // Day
    d: function() { return (this.getDate() < 10 ? '0' : '') + this.getDate(); },
    D: function() { return Date.replace.shortDays[this.getDay()]; },
    j: function() { return this.getDate(); },
    l: function() { return Date.replace.longDays[this.getDay()]; },
    N: function() { return this.getDay() + 1; },
    S: function() { return (this.getDate() % 10 == 1 && this.getDate() != 11 ? 'st' : (this.getDate() % 10 == 2 && this.getDate() != 12 ? 'nd' : (this.getDate() % 10 == 3 && this.getDate() != 13 ? 'rd' : 'th'))); },
    w: function() { return this.getDay(); },
    z: function() { return "Not Yet Supported"; },
    // Week
    W: function() { return "Not Yet Supported"; },
    // Month
    F: function() { return Date.replace.longMonths[this.getMonth()]; },
    m: function() { return (this.getMonth() < 11 ? '0' : '') + (this.getMonth() + 1); },
    M: function() { return Date.replace.shortMonths[this.getMonth()]; },
    n: function() { return this.getMonth() + 1; },
    t: function() { return "Not Yet Supported"; },
    // Year
    L: function() { return "Not Yet Supported"; },
    o: function() { return "Not Supported"; },
    Y: function() { return this.getFullYear(); },
    y: function() { return ('' + this.getFullYear()).substr(2); },
    // Time
    a: function() { return this.getHours() < 12 ? 'am' : 'pm'; },
    A: function() { return this.getHours() < 12 ? 'AM' : 'PM'; },
    B: function() { return "Not Yet Supported"; },
    g: function() { return this.getHours() == 0 ? 12 : (this.getHours() > 12 ? this.getHours() - 12 : this.getHours()); },
    G: function() { return this.getHours(); },
    h: function() { return (this.getHours() < 10 || (12 < this.getHours() < 22) ? '0' : '') + (this.getHours() < 10 ? this.getHours() + 1 : this.getHours() - 12); },
    H: function() { return (this.getHours() < 10 ? '0' : '') + this.getHours(); },
    i: function() { return (this.getMinutes() < 10 ? '0' : '') + this.getMinutes(); },
    s: function() { return (this.getSeconds() < 10 ? '0' : '') + this.getSeconds(); },
    // Timezone
    e: function() { return "Not Yet Supported"; },
    I: function() { return "Not Supported"; },
    O: function() { return (this.getTimezoneOffset() < 0 ? '-' : '+') + (this.getTimezoneOffset() / 60 < 10 ? '0' : '') + (this.getTimezoneOffset() / 60) + '00'; },
    T: function() { return "Not Yet Supported"; },
    Z: function() { return this.getTimezoneOffset() * 60; },
    // Full Date/Time
    c: function() { return "Not Yet Supported"; },
    r: function() { return this.toString(); },
    U: function() { return this.getTime() / 1000; }
}



function _esc(val) {
    return escape(val);
}


function constructDbObjectFields(objectType, fields) {
    
    var tmp = {};
    if (Snapps.dbObjectMaps[objectType] && Snapps.dbObjectMaps[objectType].length === fields.length) {
        for (var i = 0; i < Snapps.dbObjectMaps[objectType].length; i++) {
            tmp[Snapps.dbObjectMaps[objectType][i]] = fields[i];
        }
    }
    return tmp;
}

function populateTableRowCells(tr1, cells)
{
    var th;
    var tmpEl;
    
    var cell;
    var td;
    var contents;
    for (var i = 0; i < cells.length; i++) {
        cell = cells[i];
        
        td = document.createElement('td');
        if (cell['nowrap']) {
            td.noWrap = cell['nowrap'];        
        }
        if (cell['width']) {
            td.width = cell['width'];        
        }
        if (cell['colspan']) {
            td.colSpan = cell['colspan'];        
        }
        if (cell['class']) {
            td.className = cell['class'];        
        }     
        
        contents = false;
        if (cell['content'] instanceof Array) {
            contents = cell['content'];
        } else if (cell['content']) {        
            contents = [];
            contents.push(cell['content']);
        }
        if (contents) {
            for (var j = 0; j < contents.length; j++) {       
                if ( (typeof contents[j] == 'string' || typeof contents[j] == 'number') && contents[j] != '') {
                    td.appendChild(document.createTextNode(contents[j]));        
                } else if (contents[j]) {
                    td.appendChild(contents[j]);
                } else {
                    td.appendChild(document.createTextNode('x'));
                }
            }
        }
        tr1.appendChild(td);
         
    }
}




function getVPercent(v) {

    var raw = false;
    var parsed = false;
    
    if (!$(v)) {
        return;
    }
    
    $(v).removeClassName('formFieldErrorHighlight');
    raw = trim($F(v));      
        
    var tmp = { value: 0, percent: 0, amount: 0}
    
    tmp['value'] = raw;
    if (raw == '%') {
        $(v).addClassName('formFieldErrorHighlight');
    
    } else if (raw != '' && raw.indexOf("%") === (raw.length - 1)) {
        var percent = raw.substring(0, raw.length - 1);
        
        if (percent > 0 && IsNumeric(percent) ) {
            percent = (percent * 1.0) / 100.0;
                        
            tmp['percent'] = percent;
        }
        
        if (!IsNumeric(percent) || (percent < 0 || percent > 100)) {
            $(v).addClassName('formFieldErrorHighlight');
        }
        
    } else {        
        if (raw && !IsNumeric(raw)) {
            $(v).addClassName('formFieldErrorHighlight');
        
        } else {
            parsed = parseFloat(raw);
        }
        tmp['amount'] = parsed ? parsed : 0;
    }        
    return tmp;
}

function getV(v) {
    var raw = false;
    var parsed = false;
    
    if (!$(v)) {
        //alert('x' + v + 'x');
        return;
    }
    if ($(v)) {
    
        raw = trim($F(v));
        if (raw && !IsNumeric(raw)) {
            $(v).addClassName('formFieldErrorHighlight');
          
        } else {        
            parsed = parseFloat(raw);     
        }  
    }        
    return parsed;    
}

