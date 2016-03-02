<?php include("header.php")?>
	<script type="text/javascript" src="../flare/js/jquery.js"></script>
    <link href="../flare/js/pe.flare/jquery.pixelentity.flare.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="../flare/js/pe.flare/jquery.pixelentity.flare.min.js"></script>

    <script type="text/javascript">
		jQuery(function($){
		$('a[data-target="flare"]').peFlareLightbox(); });
	</script>	

            <div class="page secondary">
        	<div class="page-header">
           		<div class="page-header-content">
			  		<h1>Gallery</h1>
			  	</div>
				        <div class="page-region">
            <div class="page-region-content">
				
				<!--thumb 1-->
				   <div class="grid">
						<a href="images/1.jpg"
							data-flare-video="http://vimeo.com/6206789"
							data-target="flare"
							data-flare-gallery="gallery1"
							>
						  <img src="images/1.jpg" alt="project" height="100px" height="100px" />
						</a>
						
				  
				
				<!--thumb 2-->
					<a
						href="images/2.jpg"
						data-target="flare"
						data-flare-scale="fillmax"
						data-flare-video="http://www.youtube.com/watch?v=d9NF2edxy-M"
						data-flare-gallery="gallery1"
						>
					  <img src="images/2.jpg" alt="project" height="100px" height="100px" />
					</a>
				  
				
				<!--thumb 3-->
				
				  
					<a
						href="images/3.jpg"
						data-target="flare"
						data-flare-scale="fit"
						data-flare-video="http://vid.ly/5u4h3e"
						data-flare-gallery="gallery1"
						>
					  <img src="images/3.jpg" alt="project" height="100px" height="100px" />
					</a>
				  
				
				<!--thumb 4-->
				
				  
					<a
						href="images/4.jpg"
						data-target="flare"
						data-flare-scale="fillmax"
						data-flare-gallery="gallery1"
						>
					  <img src="images/4.jpg" alt="project" height="100px" height="100px" />
					</a>
	 
	  
	  	</div></div></div></div></div>
    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>FLARE<small>demo</small></h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
                        <div class="span10">

                        
<h2>Javascript Include</h2>
<div class="progress-bar">
<div class="bar" style="width: 100%;"></div>
</div>
<pre class="prettyprint linenums">
    &lt;link rel="shortcut icon" href="favicon.jpg" /&gt;
    &lt;script type="text/javascript" src="js/jquery.js"&gt;&lt;/script&gt;
    &lt;link href="js/pe.flare/jquery.pixelentity.flare.min.css" rel="stylesheet"/&gt;
    &lt;script type="text/javascript" src="js/pe.flare/jquery.pixelentity.flare.min.js"&gt;&lt;/script&gt;
</pre>

<h2>Jquery Calls</h2>
<div class="progress-bar">
<div class="bar bg-color-pink" style="width: 100%;"></div>
</div>
<pre class="prettyprint linenums">
&lt;script type="text/javascript"&gt;
	jQuery(function($){
	$('a[data-target="flare"]').peFlareLightbox();
	});
&lt;/script&gt;							
</pre>

<h2>HTML Calls</h2>
<div class="progress-bar">
<div class="bar bg-color-green" style="width: 100%;"></div>
</div>
<pre class="prettyprint linenums">
	  &lt;div class="portfolioItem"&gt;
		&lt;a href="img/content/si01lb.jpg"
			data-target="flare"
			data-flare-scale="fit"
			&gt;
		  &lt;img src="img/content/port24.jpg" alt="project" /&gt;
		&lt;/a&gt;
	  &lt;/div&gt;
	  
	Style: 
	data-flare-scale="fitmax"
	data-flare-scale="fill"
	
	Gallery: example: Gallery Groups named "gallery1" "gallery2"
	data-flare-gallery="gallery1"
	
			
</pre>
							
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php")?>
