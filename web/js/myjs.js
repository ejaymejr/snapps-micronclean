
    YAHOO.util.Event.onDOMReady(

        function() {

            // Create a panel Instance, from the 'resizablepanel' DIV standard module markup
            var panel = new YAHOO.widget.Panel("resizablepanel", {
                draggable: true,
                width: "400px",
                height: "80px",
                autofillheight: "body", // default value, specified here to highlight its use in the example
                constraintoviewport:true,
                context: ["showbtn", "tl", "bl"]
            });
           var resize = new YAHOO.util.Resize("resizablepanel", {
                handles: ["br"],
                autoRatio: false,
                minWidth: 300,
                minHeight: 100,
                status: false 
            });
            resize.on("startResize", function(args) {

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

            }, panel, true);
            resize.on("resize", function(args) {
                var panelHeight = args.height;
                this.cfg.setProperty("height", panelHeight + "px");
            }, panel, true);

           //YAHOO.util.Event.on("showbtn1", "click", panel.show, panel, false);
           panel.render();
         }
    );
    panel.show();
