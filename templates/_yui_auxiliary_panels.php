<?php
// $Source$
// $Id$


?>
<script language="Javascript" type="text/javascript">

            // QUIRKS FLAG, FOR BOX MODEL
        var IE_QUIRKS = (YAHOO.env.ua.ie && document.compatMode == "BackCompat");

        // UNDERLAY/IFRAME SYNC REQUIRED
        var IE_SYNC = (YAHOO.env.ua.ie == 6 || (YAHOO.env.ua.ie == 7 && IE_QUIRKS));

        // PADDING USED FOR BODY ELEMENT (Hardcoded for example)
        var PANEL_BODY_PADDING = (10*2) // 10px top/bottom padding applied to Panel body element. The top/bottom border width is 0


YAHOO.example.container.quickHelpPanel = new YAHOO.widget.Panel("DIVcontextHelp",  
    { 
      fixedcenter: false, 
      close: true, 
      draggable: true, 
      zindex:1000,
      modal: false,
      visible: false,
      context: ["IDlinkQuickHelp", "tr", "br"] 
    }  );  
YAHOO.example.container.quickHelpPanel.render(document.body);  


var contextHelpResize = new YAHOO.util.Resize("DIVcontextHelp", {
     handles: ['br'],
     autoRatio: false,
     minWidth: 300,
     status: false
});

  contextHelpResize.on('resize', function(args) {

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
}, YAHOO.example.container.quickHelpPanel, true);



</script>
    
    
<?php if (SF_APP != 'dashboard') : ?>
    <script language="Javascript" type="text/javascript">
    
                // QUIRKS FLAG, FOR BOX MODEL
            var IE_QUIRKS = (YAHOO.env.ua.ie && document.compatMode == "BackCompat");

            // UNDERLAY/IFRAME SYNC REQUIRED
            var IE_SYNC = (YAHOO.env.ua.ie == 6 || (YAHOO.env.ua.ie == 7 && IE_QUIRKS));

            // PADDING USED FOR BODY ELEMENT (Hardcoded for example)
            var PANEL_BODY_PADDING = (10*2) // 10px top/bottom padding applied to Panel body element. The top/bottom border width is 0
    
    
    YAHOO.example.container.dashboardPanel = new YAHOO.widget.Panel("globalDashboard",  
        { 
          fixedcenter: false, 
          close: true, 
          draggable: true, 
          zindex:1000,
          modal: true,
          visible: false,
          x:20,
          y:20,
          context: ["logo1", "tl", "bl"] 
        }  );  
    YAHOO.example.container.dashboardPanel.render(document.body);  
    
    var resize = new YAHOO.util.Resize("globalDashboard", {
         handles: ['br'],
         autoRatio: false,
         minWidth: 700,
         status: false
   });
    
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
   }, YAHOO.example.container.dashboardPanel, true);
   
    </script>
<?php endif; ?>


<script language="Javascript">
function waitInit() {
    if (!YAHOO.example.container.wait) {
        // Initialize the temporary Panel to display while waiting for external content to load
        YAHOO.example.container.wait = 
                new YAHOO.widget.Panel("wait",  
                                                { width: "240px", 
                                                  fixedcenter: true, 
                                                  close: true, 
                                                  draggable: true, 
                                                  zindex:1000,
                                                  modal: true,
                                                  visible: false
                                                } 
                                            );

        YAHOO.example.container.wait.setHeader("Loading, please wait...");
        YAHOO.example.container.wait.setBody("<?php echo addslashes(image_tag('yahoo/rel_interstitial_loading.gif')); ?>");
        YAHOO.example.container.wait.render(document.body);
    }    
    // YAHOO.example.container.wait.show();
}    
waitInit();
</script>