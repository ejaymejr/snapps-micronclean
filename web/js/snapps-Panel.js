
if (typeof Snapps == 'undefined') var Snapps = {};


Snapps.PanelDragResize = function(divID, contextSettings, minWidth, minHeight, modal, fixedCenter, x, y) {
    
    x = (x == null ? 20 : x);
    y = (y == null ? 20 : y);
    minWidth = (minWidth == null ? 300 : minWidth);
    minHeight = (minHeight == null ? 400 : minHeight);
    fixedCenter = (fixedCenter == null ? false : fixedCenter);
    
    var IE_QUIRKS = (YAHOO.env.ua.ie && document.compatMode == "BackCompat");
    var IE_SYNC = (YAHOO.env.ua.ie == 6 || (YAHOO.env.ua.ie == 7 && IE_QUIRKS));
    var PANEL_BODY_PADDING = (10*2) // 10px top/bottom padding applied to Panel body element. The top/bottom border width is 0

    this.panel = new YAHOO.widget.Panel(
           divID,  
            { 
                fixedcenter: fixedCenter, 
                close: true, 
                draggable: true, 
                zindex:1000,
                modal: modal,
                visible: false,
                x:x,
                y:y,
                context:contextSettings
                // context: ["logo1", "tl", "bl"] 
            }  );  
    this.panel.render(document.body);  
    
    var resize = new YAHOO.util.Resize(divID, {
         handles: ['br'],
         autoRatio: false,
         minWidth: minWidth,
         minHeight: minHeight,
         status: false
    });
         
    // to resize
    resize.on('resize', function(args) {

        var panelHeight = args.height;
            
        var headerHeight = this.header.offsetHeight; // Content + Padding + Border
        var footerHeight = this.footer.offsetHeight; // Content + Padding + Border
    
        var bodyHeight = (panelHeight - headerHeight - footerHeight);
        var bodyContentHeight = (IE_QUIRKS) ? bodyHeight : bodyHeight - PANEL_BODY_PADDING;
    
        YAHOO.util.Dom.setStyle(this.body, 'height', bodyContentHeight + 'px');
            
        if (IE_SYNC) {
    
            // Keep the underlay and iframe size in sync.
    
            // You could also set the width property, to achieve the
            // same results, if you wanted to keep the panel's internal
            // width property in sync with the DOM width.
    
            this.sizeUnderlay();
    
            // Syncing the iframe can be expensive. Disable iframe if you
            // don't need it.
    
            this.syncIframe();
        }
    }, this.panel, true);    
    
    return this.panel;
}