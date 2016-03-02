
Snapps.widget.base.Criteria = function() {

    this.params = {};
    this.params.page = 1;
    this.params.sortBy = false;
    this.params.sortOrder = 'ASC';

}
Snapps.widget.base.Criteria.prototype = {

    set: function(n, val) {
        this.params[n] = val;
    },
    
    
    get : function(n) {    
        if (this.params[n]) {
            return this.params[n];
        } else return false;    
    },

    reset: function() {
        this.params = {};
    },
    dump: function() {
    
        var tmp = '';
        for (var i in this.params) {
            tmp += '&' + i + '=' + this.params[i];
        }
        return tmp;
    }
}