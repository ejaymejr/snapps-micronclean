<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="T.C. Khoo Pte Ltd">
    <meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">

    <link href="../../../css/metroui-modern.css" rel="stylesheet">
    <link href="../css/metroui-modern-responsive.css" rel="stylesheet">
    <link href="../css/metroui-site.css" rel="stylesheet" type="text/css">
    <link href="../js/metroui-google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="../js/metroui/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../js/metroui/assets/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="../js/metroui/assets/moment.js"></script>
    <script type="text/javascript" src="../js/metroui/assets/moment_langs.js"></script>

    <script type="text/javascript" src="../js/metroui/modern/dropdown.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/accordion.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/buttonset.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/carousel.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/input-control.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/rating.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/slider.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/tile-slider.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/tile-drag.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/calendar.js"></script>
    <script type="text/javascript" src="../js/metroui/modern/dialog.js"></script>

    <title>Metro UI CSS kebot</title>
</head>
<body class="metrouicss" onload="prettyPrint()">

<?php include("navigation.php")?>



    <title>Sample Charts</title>
</head>
<body class="metrouicss" onload="prettyPrint()">

<div class="page">
<div class="nav-bar">
    <div class="nav-bar-inner padding10">
        <span class="pull-menu"></span>

        <a href="/"><span class="element brand">
            <img class="place-left" src="images/logo32.png" style="height: 20px"/>
            T.C. Khoo & Co. Pte Ltd <small><?= include("version.phtml")?></small>
        </span></a>
</div>
</div>


    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Sample Charts</h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <h2>AM CHARTS</h2>
                    <?php
						$location = '.';
						$ignorefileList = array('.', '..', 'js', 'css', 'index.php', 'footer.php', 'philipshanger', 'philipshangerV1', 'index', 'images', 'sym');
						 if ($handle = opendir($location)) {
						   //var_dump($handle);
						   while (false !== ($file = readdir($handle))) {
						          if (!  in_array($file, $ignorefileList) ) {						            
										//$thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
										$fnameList[] = $file; 

						          }
						       }
						  closedir($handle);
						  }
						  
						  asort($fnameList);
						  echo '<div>';
						  foreach($fnameList as $file):
							  echo '
                                	<a href="'.$file.'"><button><i class="icon-home left"></i>'.$file.'</button></a>
                            		';
						  endforeach;
						  echo '<br></div>';
					?>
					</div>
					</div>
					</div>
					</div>
					

<?php
// $location = '/opt/sites/ext/app.microncleansingapore.com/symfony/snapps-servicing/web/privateFiles/';
//  if ($handle = opendir('.')) {
//    while (false !== ($file = readdir($handle))) {
//           if ($file != "." && $file != "..") {
//             $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
//           }
//        }
//   closedir($handle);
//   }
?>
<ul><?php //echo $thelist; ?></ul>

<?php include("footer.php")?>
