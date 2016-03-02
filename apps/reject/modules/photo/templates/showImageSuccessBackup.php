<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div id="resizablepanel" style="z-index: 900">
            <div class="hd">IMAGE PREVIEW</div>
            <div class="bd">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="50px" class="label">
					<?php 
						//$filename = '../uploadedImages/'.$sf_params->get('customer') . '/'.$image;
						echo image_tag($image, 'width=auto; height=500px'); 
					?></td>
			</tr>
			</table>
            </div>
            <div class="ft"></div>
</div>

<link
	rel="stylesheet" type="text/css" href="../../build/fonts/fonts-min.css" />
<link
	rel="stylesheet" type="text/css"
	href="../../build/container/assets/skins/sam/container.css" />

<link
	rel="stylesheet" type="text/css"
	href="../../build/resize/assets/skins/sam/resize.css" />
<script
	type="text/javascript" src="../../build/utilities/utilities.js"></script>
<script
	type="text/javascript" src="../../build/container/container.js"></script>
<script
	type="text/javascript" src="../../build/resize/resize.js"></script>


<script type="text/javascript">
    YAHOO.util.Event.onDOMReady(

        function() {

            // Create a panel Instance, from the 'resizablepanel' DIV standard module markup
            var panel = new YAHOO.widget.Panel("resizablepanel", {
                draggable: true,
                width: "auto",
                height: "auto",
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

    

</script>