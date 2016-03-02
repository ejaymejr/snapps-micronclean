
Snapps.widget.base.datagrid.Criteria = function() {

    this.params = {};
    this.params.page = 1;
    this.params.sortBy = false;
    this.params.sortOrder = 'ASC';

}
Snapps.widget.base.datagrid.Criteria.prototype.set = function(n, val) {
    this.params[n] = val;
}
Snapps.widget.base.datagrid.Criteria.prototype.get = function(n) {
    
    if (this.params[n]) {
        return this.params[n];
    } else return false;    
}

Snapps.widget.base.datagrid.Criteria.prototype.reset = function() {
    this.params = {};
}
Snapps.widget.base.datagrid.Criteria.prototype.dump = function() {
    
    var tmp = '';
    for (var i in this.params) {
        tmp += '&' + i + '=' + this.params[i];
    }
    return tmp;
}