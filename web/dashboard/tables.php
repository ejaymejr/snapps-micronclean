<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="../css/metro-bootstrap.css" rel="stylesheet">
    <link href="../css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/iconFont.css" rel="stylesheet">
    <link href="../css/docs.css" rel="stylesheet">
    <link href="../js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/jquery/jquery.widget.min.js"></script>
    <script src="../js/jquery/jquery.mousewheel.js"></script>
    <script src="../js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="../js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="../js/docs.js"></script>
    <script src="../js/github.info.js"></script>

    <title>Metro UI CSS : Metro Bootstrap CSS Library</title>
</head>
<body class="metro">
    <header class="bg-dark" data-load="header.html"></header>
    <div class="container">
                <h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Tables<small class="on-right">definition</small>
                </h1>

                <h3 id="_default">Default table styles</h3>
                <p class="description">
                    All tables has default styles: width <code>100%</code>, cell padding <code>10px</code> and text align <code>left</code>.
                </p>

                <div class="example">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
<pre class="prettyprint linenums">
&lt;table&gt;...&lt;/table&gt;
</pre>

                <h3 id="_striped">Striped rows</h3>
                <p class="description">
                    Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> with class <code>.striped</code>.
                </p>

                <div class="example">
                    <table class="table striped3n">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>domain</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>desc</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
                <div class="example">
                    <table class="table striped">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
<pre class="prettyprint linenums">
&lt;table class="striped"&gt;...&lt;/table&gt;
</pre>

                <h3 id="_bordered">Bordered table</h3>
                <p class="description">
                    Adds borders to any table with class <code>.bordered</code>.
                </p>

                <div class="example">
                    <table class="table bordered">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
<pre class="prettyprint linenums">
&lt;table class="bordered"&gt;...&lt;/table&gt;
</pre>


                <h3 id="_hovered">Hovered table</h3>
                <p class="description">
                    Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                </p>

                <div class="example">
                    <table class="table hovered">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
<pre class="prettyprint linenums">
&lt;table class="hovered"&gt;...&lt;/table&gt;
</pre>

                <h3 id="_optional">Optional row classes</h3>
                <p class="description">
                    For displaying optional rows you must add one of next classes for <code>&lt;tr&gt;</code>:
                </p>

                <ul>
                    <li class="fg-red">error</li>
                    <li class="fg-green">success</li>
                    <li class="fg-orange">warning</li>
                    <li class="fg-lightBlue">info</li>
                    <li>selected</li>
                </ul>

                <div class="example">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Time CP</th>
                            <th class="text-left">Network</th>
                            <th class="text-left">Traffic</th>
                            <th class="text-left">Tiles update</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="error"><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr class="success"><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr class="warning"><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr class="info"><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        <tr class="selected"><td>Weather</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
<pre class="prettyprint linenums">
&lt;table&gt;
    &lt;tr class="error"&gt;...&lt;/tr&gt;
&lt;/table&gt;
</pre>


                <h3 id="_control">TableControl.js</h3>
                <p class="description">This component in progress...</p>
                <div class="example">
                    <div id="table1"></div>
                    <script>
                        function checkRow(el){
                            $(el).parents("tr").toggleClass("selected");
                        }

                        function checkAll(el){
                            var state = el.checked;
                            $(el).parents("table").find("tbody [type=checkbox]").each(function(index){
                                $(this).prop("checked", state);
                                if (state) {
                                    $(this).parents("tr").addClass("selected");
                                } else {
                                    $(this).parents("tr").removeClass("selected");
                                }
                            });

                        }

                        var table, table_data;

                        table_data = [
                            {_check:"<input type='checkbox' name='chk[]' value='1' onclick='checkRow(this)'>",id:"1",invdate:"2007-10-01",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='2' onclick='checkRow(this)'>",id:"2",invdate:"2007-10-02",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='3' onclick='checkRow(this)'>",id:"3",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='4' onclick='checkRow(this)'>",id:"4",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='5' onclick='checkRow(this)'>",id:"5",invdate:"2007-10-05",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='6' onclick='checkRow(this)'>",id:"6",invdate:"2007-09-06",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='7' onclick='checkRow(this)'>",id:"7",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='8' onclick='checkRow(this)'>",id:"8",invdate:"2007-10-03",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
                            {_check:"<input type='checkbox' name='chk[]' value='9' onclick='checkRow(this)'>",id:"9",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"}
                        ];

                        $(function(){
                            table = $("#table1").tablecontrol({
                                cls: 'table hovered border myClass',
                                checkRow: true,
                                colModel: [
                                    //{field: '_check', caption: "<input type='checkbox' onclick='checkAll(this)'>", width: 32, sortable: false, cls: 'text-center', hcls: "text-center"},
                                    {field: 'id', caption: 'No', width: 50, sortable: false, cls: 'text-center', hcls: ""},
                                    {field: 'invdate', caption: 'Date', width: 120, sortable: false, cls: 'text-center', hcls: ""},
                                    {field: 'name', caption: 'Client', width: '', sortable: false, cls: 'text-left', hcls: "text-left"},
                                    {field: 'amount', caption: 'Amount', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
                                    {field: 'tax', caption: 'Tax', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
                                    {field: 'total', caption: 'Total', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
                                    {field: 'note', caption: 'Notes', width: '', sortable: false, cls: 'span1', hcls: ""}
                                ],

                                data: table_data
                            });
                        });

                    </script>
                </div>
<pre class="prettyprint linenums no-tablet-portrait">
var table, table_data;

table_data = [
    {id:"1",invdate:"2007-04-02",name:"test",note:"note",amount:"100.00",tax:"10.00",total:"120.00"},
    {id:"2",invdate:"2007-10-02",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
    {id:"3",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
    {id:"4",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
    {id:"5",invdate:"2007-10-05",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
    {id:"6",invdate:"2007-09-06",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"},
    {id:"7",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"},
    {id:"8",invdate:"2007-10-03",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"},
    {id:"9",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"}
];

$(function(){
    table = $("#table1").tablecontrol({
        cls: 'table hovered border myClass',
        colModel: [
            {field: 'id', caption: 'No', width: 50, sortable: false, cls: 'text-center', hcls: ""},
            {field: 'invdate', caption: 'Date', width: 120, sortable: false, cls: 'text-center', hcls: ""},
            {field: 'name', caption: 'Client', width: '', sortable: false, cls: 'text-left', hcls: "text-left"},
            {field: 'amount', caption: 'Amount', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
            {field: 'tax', caption: 'Tax', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
            {field: 'total', caption: 'Total', width: '80', sortable: false, cls: 'text-right', hcls: "text-right"},
            {field: 'note', caption: 'Notes', width: '', sortable: false, cls: 'span1', hcls: ""}
        ],

        data: table_data
    });
});
</pre>


    </div>

    <script src="js/hitua.js"></script>

</body>
</html>