
Snapps.widget.base.PanelDragResize = function(divID, contextSettings, minWidth, minHeight, modal, fixedCenter, x, y) {
    
    this._m_container = divID;
    
    this._m_x = x || '20px';
    this._m_y = y || '20px';
    this._m_minWidth = minWidth || '300px';
    this._m_minHeight = minHeight || '500px';
    this._m_fixedCenter = fixedCenter || false;
    
    this._m_contextSettings = contextSettings || false;
    
    var params = 
        { 
            fixedcenter: this._m_fixedCenter, 
            close: true, 
            draggable: true, 
            zindex:500,
            modal: false,
            visible: false,
            x:this._m_x,
            y:this._m_y,
            autofillheight: "body", 
            constraintoviewport: true
        };
    if (this._m_contextSettings !== false) {
        params.context = this._m_contextSettings;
    }
    Snapps.widget.base.PanelDragResize.superclass.constructor.call(this, divID, params);


    // this part is the ESC key to close the panel
    var kl = new YAHOO.util.KeyListener(document, { keys:27 },                              
                                                  { fn:this.hide,
                                                    scope:this,
                                                    correctScope:true } );    
    this.cfg.queueProperty("keylisteners", kl);
    
    
    this.render();

    var resize = new YAHOO.util.Resize(divID, {
         handles: ['br'],
         autoRatio: false,
         minWidth: this._m_minWidth,
         minHeight: this._m_minHeight,
         status: false
    });
         
    // to resize
    resize.on('resize', function(args) {
        var panelHeight = args.height; 
        this.cfg.setProperty("height", panelHeight + "px"); 
    }, this, true);    
    
    // Setup startResize handler, to constrain the resize width/height
    // if the constraintoviewport configuration property is enabled.
    resize.on('startResize', function(args) {
    
        if (this.cfg.getProperty("constraintoviewport")) {
            var D = YAHOO.util.Dom;
    
            var clientRegion = D.getClientRegion();
            var elRegion = D.getRegion(this.element);
    
            resize.set("maxWidth", clientRegion.right - elRegion.left - YAHOO.widget.Overlay.VIEWPORT_OFFSET);
            resize.set("maxHeight", clientRegion.bottom - elRegion.top - YAHOO.widget.Overlay.VIEWPORT_OFFSET);
        } else {
            resize.set("maxWidth", null);
            resize.set("maxHeight", null);
        }
    }, this, true);

    
    this.toggle = function() {
        if (this.cfg.getConfig().visible) this.hide();
        else this.show();
    }

}
JSDP.extend(Snapps.widget.base.PanelDragResize, YAHOO.widget.Panel);



/*

Snapps.widget.base.PanelDragResize = function(divID, contextSettings, minWidth, minHeight, modal, fixedCenter, x, y) {
    
    this.x = x || 20;
    this.y = y || 20;
    this.minWidth = minWidth || 300;
    this.minHeight = minHeight || 400;
    this.fixedCenter = fixedCenter || false;
    
	this.panel = new YAHOO.widget.Panel(
	       divID,  
            { 
				fixedcenter: this.fixedCenter, 
				close: true, 
				draggable: true, 
				zindex:500,
				modal: false,
				visible: false,
				x:this.x,
				y:this.y,
                autofillheight: "body", 
                constraintoviewport: true, 
				context:contextSettings
            }  );  
            
    
    
	this.panel.render();  

	var resize = new YAHOO.util.Resize(divID, {
	     handles: ['br'],
	     autoRatio: false,
	     minWidth: this.minWidth,
	     minHeight: this.minHeight,
	     status: false
	});
		 
    // to resize
    resize.on('resize', function(args) {
        var panelHeight = args.height; 
        this.cfg.setProperty("height", panelHeight + "px"); 
    }, this.panel, true);    
    
    // Setup startResize handler, to constrain the resize width/height
    // if the constraintoviewport configuration property is enabled.
    resize.on('startResize', function(args) {
    
        if (this.cfg.getProperty("constraintoviewport")) {
            var D = YAHOO.util.Dom;
    
            var clientRegion = D.getClientRegion();
            var elRegion = D.getRegion(this.element);
    
            resize.set("maxWidth", clientRegion.right - elRegion.left - YAHOO.widget.Overlay.VIEWPORT_OFFSET);
            resize.set("maxHeight", clientRegion.bottom - elRegion.top - YAHOO.widget.Overlay.VIEWPORT_OFFSET);
        } else {
            resize.set("maxWidth", null);
            resize.set("maxHeight", null);
        }
    }, this.panel, true);

    
    
    return this.panel;
}

*/