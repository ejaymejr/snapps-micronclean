
function createPtElement(t)
{
    var e = document.createElement(t);
    //Element.extend(e);    
    return e;
}

function createPlaceHolderTag(args)
{
    if (args == undefined) {
        var args = {};
        args.readOnly = true;
        args.className = 'readonly';
    }
    args.type = 'text';
    
    if (!args.size) {
        args.size = 10;
    }
    
    return createInputTag(args);
}

function createTextTag(args)
{
    if (args == undefined) {
        var args = {};
    }
    args.type = 'text';
    
    return createInputTag(args);
}
function createNumeralTextTag(args)
{
    if (args == undefined) {
        var args = {};
    }
    args.type = 'text';
    args.className += ' alignRight';
    
    return createInputTag(args);
}

function createDateTag(args)
{    
    return createGeneralDateTag(args);
}
function createDateTimeTag(args)
{    
    return createGeneralDateTag(args, "%Y-%m-%d %H:%M:%S");
}

function createGeneralDateTag(args, format)
{
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
    
    var input = createInputTag(args);
    
    var pickAnchor = createImageTag('cal2.gif');
    pickAnchor.id = YAHOO.util.Dom.generateId();
    pickAnchor.className = 'date-input-anchor';
    
    Calendar.setup({
        inputField  : input,
        ifFormat    : format,
        button      : pickAnchor,
        align       : "BR",
        singleClick : true,
        weekNumbers : false,
        showOthers  : true    
    });
    
    
    var el = document.createElement('div');
    el.className = 'date-input-container';
    el.appendChild(input);
    el.appendChild(pickAnchor);
    
    return el;    
}



function createSubmitTag(args)
{
    if (args == undefined) {
        var args = {};
    }
    if (!args.value) args.value = 'Submit';
    
    args.type = 'button';
    args.className = 'submit-button';
    
    return createInputTag(args);
}
function createCheckboxTag(args)
{
    if (args == undefined) {
        var args = {};
    }
    args.type = 'checkbox';
    args.className = 'checkbox';
    
    return createInputTag(args);
}
function createRadioTag(args)
{
    if (args == undefined) {
        var args = {};
    }
    args.type = 'radio';
    args.className = 'radio';
    
    return createInputTag(args);
}

function createInputTag(args)
{
    if (!args) {
        return;
    }    
    e = document.createElement('input');
    for (var i in args) {
        e[i] = args[i];
    }
    hookEvent(e, 'focus', inputFocus);
    hookEvent(e, 'blur', inputBlur);
    return e;
}


function createTextAreaTag(args)
{
    if (!args) {
        args = {};
    }    
    e = document.createElement('textarea');
    for (var i in args) {
        e[i] = args[i];
    }    
    hookEvent(e, 'focus', inputFocus);
    hookEvent(e, 'blur', inputBlur);
    return e;
}

function createImageTag(args)
{  
    img = document.createElement('img');
    img.src = Snapps.url.root + 'images/' + args; 
    return img;
}


function createYuiButtonInput(args)
{
    var label = 'Btn';
    var container = args.container;
    if (args.label) label = args.label;
    
    return new YAHOO.widget.Button({ 
                            label: label, 
                            container: container });

    
}
