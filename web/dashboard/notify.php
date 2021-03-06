<!DOCTYPE html>
<html>
<?php include_once('header.php'); ?>
<body class="metro">
    <header class="bg-dark" data-load="header.html"></header>
    <div class="container">
                <h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Notify<small class="on-right">plugin</small>
                </h1>

                <div class="example">
                    <button class="button primary" id="notify_btn_1">Notify</button>
                    <button class="button success" id="notify_btn_2">Notify many</button>
                    <script>
                        $(function(){
                            $('#notify_btn_1').on('click', function(){
                                $.Notify({
                                    shadow: true,
                                    position: 'bottom-right',
                                    content: "Metro UI CSS is awesome!!!"
                                });
                            });
                            $('#notify_btn_2').on('click', function(){
                                setTimeout(function(){
                                    $.Notify({style: {background: '#1ba1e2', color: 'white'}, caption: 'Info...', content: "Metro UI CSS is Simple!!!"});
                                }, 1000);
                                setTimeout(function(){
                                    $.Notify({style: {background: 'red', color: 'white'}, content: "Metro UI CSS is Sufficient!!!"});
                                }, 2000);
                                setTimeout(function(){
                                    $.Notify({style: {background: 'green', color: 'white'}, content: "Metro UI CSS is Responsive!!!"});
                                }, 3000);
                                setTimeout(function(){
                                    $.Notify({content: "Default style for notify"});
                                }, 4000);
                            });
                        });
                    </script>
                </div>
<pre class="prettyprint linenums">
// By setting parameters
$('#notify_btn_1').on('click', function(){
    var not = $.Notify({
    	caption: "Try it"
        content: "Metro UI CSS is awesome!!!",
        timeout: 10000 // 10 seconds
    });
});

// Alternatively with default parameters
$('#notify_btn_1').on('click', function(){
    var not2 = $.Notify.show("Metro UI CSS is awesome!!!");
    var not3 = $.Notify.show("Metro UI CSS is awesome!!!", "Info...");
});

// Cancel timeout
not.clear();

// Reset timeout
not.close(1000);

// Close the notification immediately
not.close();

// Close all notifications and open a new one
// Do not close notifications which have already been closed
not2.closeAll().init({caption:"Done", content:"Finally"});
</pre>
                <h3>Parameters:</h3>
                <table class="table border striped">
                    <tr>
                        <td>icon</td>
                        <td></td>
                        <td>Not yet implemented</td>
                    </tr>
                    <tr>
                        <td>caption</td>
                        <td>string</td>
                        <td>Notify title</td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>string</td>
                        <td>Notify message</td>
                    </tr>
                    <tr>
                        <td>shadow</td>
                        <td>boolean</td>
                        <td>Show or hide Notify shadow (default: true)</td>
                    </tr>
                    <tr>
                        <td>width</td>
                        <td>int</td>
                        <td>default 'auto', if value != auto min-width sets</td>
                    </tr>
                    <tr>
                        <td>height</td>
                        <td>int</td>
                        <td>default 'auto', if value != auto min-height sets</td>
                    </tr>
                    <tr>
                        <td>style</td>
                        <td>{background: 'value', color: 'value'} or false</td>
                        <td>default false, you can set background and font color</td>
                    </tr>
                    <tr>
                        <td>timeout</td>
                        <td>int</td>
                        <td>milliseconds to hide notify, default 3000, null to disable timeout</td>
                    </tr>
                </table>

    </div>

    <script src="js/hitua.js"></script>

</body>
</html>