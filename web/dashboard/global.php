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

    <div class="page">

        <div class="page-region">
            <div class="page-region-content">
                <h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Global<small class="on-right">styles</small>
                </h1>

                <p>
                    Metro UI CSS provides any additional global routines classes for creating and styling elements such as:
                    color classes, positioning classes, columns and much more.
                </p>

                <p class="description bg-grayLighter padding20">
                    <strong>Reset styles: </strong> In Metro UI CSS used modified <a class="fg-cyan fg-hover-cobalt" href="http://github.com/necolas/normalize.css">Normalize.css</a> by <a class="fg-cyan fg-hover-cobalt" href="http://nicolasgallagher.com/">Nicolas Gallaher</a>.
                </p>

                <h2 id="_colors">Colors</h2>
                <p class="description">
                    Metro UI CSS provides access to the main colors used in Windows 8. You can sets: <strong>background</strong>, <strong>foreground</strong>, <strong>outline</strong>, <strong>border</strong> color for any elements.
                </p>
                <ul class="unstyled three-columns color-stack">
                    <li><span class="square10 inline-block bg-black on-left"></span>*-black</li>
                    <li><span class="square10 inline-block bg-white on-left"></span>*-white</li>
                    <li><span class="square10 inline-block bg-lime on-left"></span>*-lime</li>
                    <li><span class="square10 inline-block bg-green on-left"></span>*-green</li>
                    <li><span class="square10 inline-block bg-emerald on-left"></span>*-emerald</li>
                    <li><span class="square10 inline-block bg-teal on-left"></span>*-teal</li>
                    <li><span class="square10 inline-block bg-cyan on-left"></span>*-cyan</li>
                    <li><span class="square10 inline-block bg-cobalt on-left"></span>*-cobalt</li>
                    <li><span class="square10 inline-block bg-indigo on-left"></span>*-indigo</li>
                    <li><span class="square10 inline-block bg-violet on-left"></span>*-violet</li>
                    <li><span class="square10 inline-block bg-pink on-left"></span>*-pink</li>
                    <li><span class="square10 inline-block bg-magenta on-left"></span>*-magenta</li>
                    <li><span class="square10 inline-block bg-crimson on-left"></span>*-crimson</li>
                    <li><span class="square10 inline-block bg-red on-left"></span>*-red</li>
                    <li><span class="square10 inline-block bg-orange on-left"></span>*-orange</li>
                    <li><span class="square10 inline-block bg-amber on-left"></span>*-amber</li>
                    <li><span class="square10 inline-block bg-yellow on-left"></span>*-yellow</li>
                    <li><span class="square10 inline-block bg-brown on-left"></span>*-brown</li>
                    <li><span class="square10 inline-block bg-olive on-left"></span>*-olive</li>
                    <li><span class="square10 inline-block bg-steel on-left"></span>*-steel</li>
                    <li><span class="square10 inline-block bg-mauve on-left"></span>*-mauve</li>
                    <li><span class="square10 inline-block bg-taupe on-left"></span>*-taupe</li>
                    <li><span class="square10 inline-block bg-gray on-left"></span>*-gray</li>
                    <li><span class="square10 inline-block bg-dark on-left"></span>*-dark</li>
                    <li><span class="square10 inline-block bg-darker on-left"></span>*-darker</li>
                    <li><span class="square10 inline-block bg-transparent on-left"></span>*-transparent</li>
                    <li><span class="square10 inline-block bg-darkBrown on-left"></span>*-darkBrown</li>
                    <li><span class="square10 inline-block bg-darkCrimson on-left"></span>*-darkCrimson</li>
                    <li><span class="square10 inline-block bg-darkMagenta on-left"></span>*-darkMagenta</li>
                    <li><span class="square10 inline-block bg-darkIndigo on-left"></span>*-darkIndigo</li>
                    <li><span class="square10 inline-block bg-darkCyan on-left"></span>*-darkCyan</li>
                    <li><span class="square10 inline-block bg-darkCobalt on-left"></span>*-darkCobalt</li>
                    <li><span class="square10 inline-block bg-darkTeal on-left"></span>*-darkTeal</li>
                    <li><span class="square10 inline-block bg-darkEmerald on-left"></span>*-darkEmerald</li>
                    <li><span class="square10 inline-block bg-darkGreen on-left"></span>*-darkGreen</li>
                    <li><span class="square10 inline-block bg-darkOrange on-left"></span>*-darkOrange</li>
                    <li><span class="square10 inline-block bg-darkRed on-left"></span>*-darkRed</li>
                    <li><span class="square10 inline-block bg-darkPink on-left"></span>*-darkPink</li>
                    <li><span class="square10 inline-block bg-darkViolet on-left"></span>*-darkViolet</li>
                    <li><span class="square10 inline-block bg-darkBlue on-left"></span>*-darkBlue</li>
                    <li><span class="square10 inline-block bg-lightBlue on-left"></span>*-lightBlue</li>
                    <li><span class="square10 inline-block bg-lightTeal on-left"></span>*-lightTeal</li>
                    <li><span class="square10 inline-block bg-lightOlive on-left"></span>*-lightOlive</li>
                    <li><span class="square10 inline-block bg-lightOrange on-left"></span>*-lightOrange</li>
                    <li><span class="square10 inline-block bg-lightPink on-left"></span>*-lightPink</li>
                    <li><span class="square10 inline-block bg-lightRed on-left"></span>*-lightRed</li>
                    <li><span class="square10 inline-block bg-lightGreen on-left"></span>*-lightGreen</li>
                </ul>
                <p class="description">
                    To set background color: use prefix <code>bg</code>, to set foreground color: use prefix <code>fg</code>, to set outline color: use prefix <code>ol</code>, to set border color: use prefix <code>bd</code>.
                    Also you can set <strong>active, hover</strong> and <strong>focus</strong> colors with classes <code>bg(fg)-hover-*</code>, <code>bg(fg)-active-*</code> and <code>bg(fg)-focus-*</code>.
                </p>
<pre class="prettyprint linenums">
&lt;div class="bg-darkPink"&gt;...&lt;/div&gt;
&lt;span class="fg-white"&gt;...&lt;/span&gt;
&lt;div class="tile ol-white"&gt;...&lt;/div&gt;
&lt;a class="fg-cyan fg-hover-cobalt"&gt;...&lt;/a&gt;
</pre>

                <h4>Ribbed mixin</h4>
                <div class="example">
                    <div class="margin5 padding10 ribbed-amber"></div>
                    <div class="margin5 padding10 ribbed-cyan"></div>
                </div>
                <p>To create ribbed background use prefix <code>ribbed</code></p>
<pre class="prettyprint linenums">
&lt;div class="ribbed-amber"&gt;...&lt;/div&gt;
&lt;div class="ribbed-cyan"&gt;...&lt;/div&gt;
</pre>

                <h2 id="_position">Mixin classes</h2>
            </div>
        </div>

        <div class="page-footer">
            <div class="page-footer-content">
                <!--<div data-load="header.html"></div>-->
            </div>
        </div>
    </div>

    <script src="js/hitua.js"></script>

</body>
</html>