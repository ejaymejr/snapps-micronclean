        
<?php 
if ( $_GET['pdf'] ) :
	header ("Location: welcome/pdfDemo" );
endif;
?>

<?php include("header.php")?>
    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>PDF<small>demo</small></h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
                        <div class="span10">

                        
<h2>PHP Code</h2>
<div class="progress-bar">
<div class="bar" style="width: 100%;"></div>
</div>
<pre class="prettyprint linenums">
	$pdf = new PdfLibrary();
	$pdf->addPage();
	$pdf->printTCKhooHeader();
	$pdf->printLn( 5, 10, 'test', 'Arial', 10);
	$pdf->closePDF('testing.pdf');
	return sfView::NONE;
	exit();
</pre>
<a href="generatePdf.php?pdf=true" target="_BLANK">Preview PDF</a>
</div></div></div></div></div></div>

<?php include("footer.php")?>
