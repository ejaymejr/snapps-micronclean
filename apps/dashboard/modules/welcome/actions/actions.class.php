<?php

/**
 * welcome actions.
 *
 * @package    snapps
 * @subpackage welcome
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class welcomeActions extends SnappsActions
{
    /**
     * Executes index action
     *
     */
    public function executeIndex()
    {
    	//if ( $this->_U() == 'emmanuel') $this->redirect('reject/photo');
    }
    
    public function executeMain()
    {
    	$this->setLayout('layout_clean');
    }
    
    public function executeFramework()
    {
    	//if ( $this->_U() == 'emmanuel') $this->redirect('reject/photo');
    }
    
    public function executePdfDemo()
    {
		$pdf = new PdfLibrary();
		$pdf->addPage();
    	$pdf->printTCKhooHeader();
    	$pdf->printLn( 5, 10, 'test', 'Arial', 10);
    	$pdf->closePDF('testing.pdf');
    	return sfView::NONE;
    	exit();
    }
}
