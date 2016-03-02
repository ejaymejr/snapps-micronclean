

var Snapps = {};

Snapps.dbObjectMaps = {};

YAHOO.namespace('example.container');
YAHOO.namespace('snapps.lookup');
YAHOO.namespace('snapps.loader');
YAHOO.namespace('snapps.datagrid');
YAHOO.namespace('snapps.form');


Snapps.url = {};
Snapps.url.root = 'http://orion.micronclean/cityhall/';



YDom = YAHOO.util.Dom;
YEvent = YAHOO.util.Event;




Snapps.DomReadyRegister = new function() {
    this.members = [];
    
    this.register = function(obj) {
        var isPresent = false;
        for (var i = 0; i < this.members.length; i++) {
            if (this.members[i] == obj) {
                isPresent = true;
            }
        }
        if (!isPresent) {
            this.members.push(obj);
        }
    }
}
