    <div class="container">
        <h1>
            <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            DataTables<small class="on-right">plugin</small>
        </h1>

        <p class="padding20 bg-grayLighter">
            DataTables is a plug-in for the jQuery Javascript library written by <a href="http://www.sprymedia.co.uk/">SpryMedia</a>. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table.
        </p>

        <p class="description">
            Metro UI CSS provides style support for DataTables.
        </p>

        <div class="example">
            <table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                	<th class="text-left">Action</th>
                    <th class="text-left">Engine</th>
                    <th class="text-left">Browser</th>
                    <th class="text-left">Platform</th>
                    <th class="text-left">Version</th>
                    <th class="text-left">CSS grade</th>
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                	<th class="text-left">Action</th>
                    <th class="text-left">Engine</th>
                    <th class="text-left">Browser</th>
                    <th class="text-left">Platform</th>
                    <th class="text-left">Version</th>
                    <th class="text-left">CSS grade</th>
                </tr>
                </tfoot>
            </table>

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "../../json/dataTables-objects.txt",
                        "aoColumns": [
							{ "mData": "action" } ,
                            { "mData": "engine" },
                            { "mData": "browser" },
                            { "mData": "platform" },
                            { "mData": "version" },
                            { "mData": "grade" }
                        ]
                    } );
                });
            </script>
        </div>
    </div>