<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php
 
$width = "400px"; 
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if($browser){ 
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.1, maximum-scale=1.1" /> ';
} ?>

	<script type="text/javascript">
		  jQuery(function($){
              $('a[data-target="flare"]').peFlareLightbox();
          });
	</script>

<div class="ScreenContainer" >  

<form name="FORMupload" method="post" action="<?php echo url_for('satisfactionIndex') ?>" enctype="multipart/form-data">

    <table width="100%" cellpadding="0" cellspacing="0" border="1" class="bordered" id="DIVScreenContainer">
    <tr class="bg-color-orangeDark">
        <td colspan="10" class="alignCenter fg-color-white" nowrap><h2 style="color: #fff;"></h2></td>
    </tr>
    <tr class="">
        <td colspan="4" class="bg-color-white alignCenter alignMiddle" nowrap>
        <p class="prettyprint">Micronclean Camera Viewer  <br>
        If you cannot view the video, try to click refresh button or press <bold>F5</bold>.
        <br>
        <p>
        </p>
       	</td>
    </tr>
    <tr class="dataGridRowOdd span1"  >
        <td class="dataGridTableHeaderColumn" nowrap>
			 <div class="row-fluid">
				<!--thumb 1-->
				<div class="span1">
				  <div class="portfolioItem">
					<a
						href="img/content/si01lb.jpg"
						data-target="flare"
						data-flare-scale="fit"
						>
					  <img src="http://10.10.1.235/video2.mjpg" alt="camera1" width="384px" height="288px"/>
					</a>
				  </div>
				  <h5>Camera Incomming</h5>
				</div>
        </td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
			 <div class="row-fluid alignCenter">
				<!--thumb 1-->
				<div class="span1">
				  <div class="portfolioItem">
					<a
						href="img/content/si01lb.jpg"
						data-target="flare"
						data-flare-scale="fit"
						>
					  <img src="http://10.10.1.236/video2.mjpg" alt="camera1" width="384px" height="288px"/>
					</a>
				  </div>
				  <h5>Camera Washing</h5>
				</div>
        </td>
        <td class="dataGridTableHeaderColumn" nowrap>
			 <div class="row-fluid" >
				<!--thumb 1-->
				<div class="span1">
				  <div class="portfolioItem">
					<a
						href="img/content/si01lb.jpg"
						data-target="flare"
						data-flare-scale="fit"
						>
					  <img src="http://10.10.1.238/video/mjpg.cgi" alt="camera1" width="384px" height="288px"/>
					</a>
				  </div>
				  <h5>Camera Shoe Packing</h5>
				</div>
        </td>


</table>


    

			 