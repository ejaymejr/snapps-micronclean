<?php
class PdfLibrary extends FPDI_Protection
{

    const ml = 15;
    const mt = 12;
    const mr = 25;
    
        
    function __construct($paper = 'A4')
    {
        $this->pdf = new FPDI_Protection('P','mm',$paper);
        $this->pdf->SetAutoPageBreak(true);
        $this->pdf->SetMargins(30, 18, 25);
        $this->pdf->AliasNbPages();
        $this->orientation = 'P';
        
    }

    public function addPage($font = 'Arial', $size = 10, $orient = 'P', $linespacing = 2)
    {
        $this->nxtln = $size / $linespacing ;
        $this->pdf->AddPage($orient);
        $this->pdf->SetXY(01, 01);
        $this->setMyFont($font,'', $size);
        $this->orientation = $orient;
    }

    public function printLn($x, $y, $mess, $font = null, $fontsize = null)
    {
        $this->setMyFont('');
        if ($font)
        {
            $this->setMyFont($font,'',$fontsize);
        }
        $this->pdf->SetXY($x, $y*$this->nxtln);
        $this->pdf->Cell(1, 1, $mess);
        //        $pdf->SetXY(01, 01);
        //        $pdf->setMyFont('Arial','',7);
        //$pdf->Cell(40,0,"Page $pageNumber of $pageTotal", 0, 0, 'R');
        //        $pdf->Cell(5, 1,"T.C. KHOO & CO. (PTE) LTD.                     PAYSLIP FOR THE MONTH OF JUNE 2008");
        //        $pdf->Cell(5, 1,"NRIC: 9922         NAME:  EMMANUEL L. JAYME JR.             EMPLOYMENT: SUB-CON");
    }
    
    public function printLnBox($x, $y, $mess, $width, $bg, $font = null, $fontsize = null )
    {
    	//P 177 width
    	//L 185 width
    	$ht = $fontsize? $fontsize/2 : 5;
        $this->setMyFont('');
        if ($font)
        {
            $this->setMyFont($font,'',$fontsize);
        }
        $this->pdf->SetXY($x, $y*$this->nxtln);
        $this->Box($this->pdf->GetX()-17, $this->pdf->GetY()-14, $width, $ht, 0, $bg);
        $this->pdf->Cell(1, 1, $mess);
    }
    

    public function printBoldLn($x, $y, $mess, $font = null, $fontsize = null)
    {
        if ($font)
        {
            $this->setMyFont($font,'B', $fontsize);
        }
        $this->pdf->SetXY($x, $y*$this->nxtln);
        $this->pdf->Cell(1, 1, $mess);
    }

    public function myimage($file, $x, $y, $w=null, $h=null)
    {
//    	var_dump($file);
//    	exit();
    	$w = ($w)? $w : 207;
    	$h = ($h)? $h : 300;
    	$this->pdf->Cell(0, 0, $this->pdf->image($file, $x, $y, $w, $h));
    }

    public function printHeader()
    {
        $this->setMyFont('Arial', 'B', 18);
        $this->pdf->SetXY(13, 2);
        $this->pdf->Cell(1, 15, 'MICRONCLEAN SINGAPORE Pte Ltd');
        $this->setMyFont('Arial', 'I', 12);
        $this->pdf->SetXY( 30, 14);
        $this->pdf->Cell(1, 1, 'cleanroom contamination control');
        $this->setMyFont('Arial', '', 8);
        $this->pdf->SetXY( 150, 8);
        $this->pdf->Cell(1, 1, '35 Senoko Way Woodlands East,');
        $this->pdf->SetXY( 150, 11);
        $this->pdf->Cell(1, 1, 'Singapore 758751');
        $this->pdf->SetXY( 150, 14);
        $this->pdf->Cell(1, 1, 'Tel: 67582119 Fax: 67532978');
        $this->pdf->SetXY( 150, 17);
        $this->pdf->Cell(1, 1, 'RCB Reg No: 199602547W');
        $this->pdf->SetXY( 12 , 19);
        $this->pdf->Cell(1, 1, '================================================================================');
        return 19;
    }
    
    public function printTCKhooHeader($y=13, $withline = FALSE)
    {
//     	var_dump($this->orientation);
//     	exit();
    	if ( $this->orientation == 'L' ) :
    		$y = 280;
    	else:
    		$y = 200;
    	endif;    	
        $this->setMyFont('Arial', 'B', 18);
        $this->pdf->SetXY($y, 2);
        $this->pdf->Cell(1, 15, 'T.C. KHOO & CO. (PTE) LTD.',0,1,'R');
        $this->setMyFont('Arial', '', 10);
        $this->pdf->SetXY( $y, 14);
        $this->pdf->Cell(1, 1, '35 Senoko Way Woodlands East,',0,1,'R');
        $this->pdf->SetXY( $y, 18);
        $this->pdf->Cell(1, 1, 'Singapore 758051',0,1,'R');
        $this->pdf->SetXY( $y, 22);
        $this->pdf->Cell(1, 1, 'Tel: 67582119 Fax: 67532978',0,1,'R');
        $this->pdf->SetXY( $y, 26);
        $this->pdf->Cell(1, 1, 'RCB Reg No: 199602547W',0,1,'R');
        if ($withline) $this->MyLine(0, 4, $y-15, .5);
        return 19;
    }
    
    public function printTCKhooHeaderRight($y=280)
    {
    	if ( $this->orientation == 'L' ) :
    		$y = 280;
    	else:
    		$y = 180;
    	endif;
        $this->setMyFont('Arial', 'B', 18);
        $this->pdf->SetXY($y, 2);
        $this->pdf->Cell(1, 15, 'T.C. KHOO & CO. (PTE) LTD.',1,1,'R');
        $this->setMyFont('Arial', '', 10);
        $this->pdf->SetXY( $y, 14);
        $this->pdf->Cell(1, 1, '35 Senoko Way Woodlands East,',1,1,'R');
        $this->pdf->SetXY( $y, 18);
        $this->pdf->Cell(1, 1, 'Singapore 758051',1,1,'R');
        $this->pdf->SetXY( $y, 22);
        $this->pdf->Cell(1, 1, 'Tel: 67582119 Fax: 67532978',1,1,'R');
        $this->pdf->SetXY( $y, 26);
        $this->pdf->Cell(1, 1, 'RCB Reg No: 199602547W',1,1,'R');
        return 19;
    }
    

    public function printKelstarHeader($y=13)
    {
        $this->setMyFont('Arial', 'B', 18);
        $this->pdf->SetXY($y, 2);
        $this->pdf->Cell(1, 15, 'KELSTAR TECHNOLOGIES Pte. Ltd.');
//        $this->setMyFont('Arial', 'I', 12);
//        $this->pdf->SetXY( 30, 14);
//        $this->pdf->Cell(1, 1, 'cleanroom contamination control');
        $this->setMyFont('Arial', '', 8);
        $this->pdf->SetXY( 150, 8);
        $this->pdf->Cell(1, 1, '35 Senoko Way Woodlands East,');
        $this->pdf->SetXY( 150, 11);
        $this->pdf->Cell(1, 1, 'Singapore 758751');
        $this->pdf->SetXY( 150, 14);
        $this->pdf->Cell(1, 1, 'Tel: 67582119 Fax: 67532978');
        $this->pdf->SetXY( 150, 17);
        $this->pdf->Cell(1, 1, 'RCB Reg No: 199602547W');
        $this->pdf->SetXY( $y , 19);
        $this->pdf->Cell(1, 1, '================================================================================');
        return 19;
    }    
//    public function printNanoHeader($y=13)
//    {
//        $this->setMyFont('Arial', 'B', 18);
//        $this->pdf->SetXY($y, 2);
//        $this->pdf->image('/web/images/nanocleanLetterhead.jpg');
//        $this->pdf->Cell(1, 1, '================================================================================');
//        return 19;
//    }    
    public function printTCKhooHeaderVer2($y=13)
    {
    	if ( $this->orientation == 'L' ) :
    		$y = 280;
    	else:
    		$y = 200;
    	endif;    	
        $this->setMyFont('Arial', 'B', 18);
        $this->pdf->SetXY($y, 2);
        $this->pdf->Cell(1, 15, 'T.C. KHOO & CO. (PTE) LTD.',0,1,'R');
        $this->setMyFont('Arial', '', 10);
        $this->pdf->SetXY( $y, 14);
        $this->pdf->Cell(1, 1, '35 Senoko Way Woodlands East,',0,1,'R');
        $this->pdf->SetXY( $y, 18);
        $this->pdf->Cell(1, 1, 'Singapore 758051',0,1,'R');
        $this->pdf->SetXY( $y, 22);
        $this->pdf->Cell(1, 1, 'Tel: 67582119 Fax: 67532978',0,1,'R');
        $this->pdf->SetXY( $y, 26);
        $this->pdf->Cell(1, 1, 'RCB Reg No: 199602547W',0,1,'R');
        $this->MyLine(1, 4, 185, .5);
        return 19;
    }    
    public function closePDF($fname, $target = null, $allowprint = null, $password = null)
    {
    	$user = sfContext::getInstance()->getUser()->getUsername() ;
    	$target = $target? $target : 'I';
    	$password = $password? $password : '';

//     	if ( ($user <> 'emmanuel' && ! $allowprint) 
//     	  || ! ($user == 'kathy' && $allowprint)
//     	  || ! ($user == 'hr_super' && $allowprint)
//     	) :
//     		$this->pdf->SetProtection(array(), $password);
//     	endif;

    	if ( ($user) == 'emmanuel' || ($user) == 'hr_super'):
    		$this->pdf->Output($fname, $target);
    		return;
    	endif;
    	if ( (! ($user == 'hr_super' && $allowprint) ) && ( ! ($user == 'kathy' && $allowprint)) ):
    		$this->pdf->SetProtection(array(), $password);
    		$this->pdf->Output($fname, $target);
    		return;
    	endif;

    	
//     	$this->pdf->Output($destFile, 'F');
        
    }

    public function setMyFont($font = 'Arial', $style = '', $size = 10)
    {
    	$font = $font? $font : 'Arial';
    	$style = $style? $style : '';
    	$size = $size? $size : 10;
        $this->pdf->SetFont($font, $style, $size);
    }

    public function GetPageNo()
    {
        return $this->pdf->PageNo().'/'.$this->AliasNbPages();
    }

    function Footer($seq = 'Page ')
    {
        //Position at 1.5 cm from bottom
        $user = (sfContext::getInstance()->getUser()->getUsername());
        $user = $user? $user : 'NOT LOGGED IN';
        //$printModule =  sfContext::getInstance()->getModuleName() .'/'. sfContext::getInstance()->getActionName();
        $this->pdf->SetY(-15);
        //$this->pdf->SetX(0);
        $this->pdf->SetFont('Arial','I',6);
		$this->pdf->Cell(-10,10,$user, 0,0,'C');
		
        $this->pdf->SetY(-15);
        $this->pdf->SetFont('Arial','I',8);
        $this->pdf->Cell(0,10,($seq  <> '') ? $seq. ' '.$this->pdf->PageNo().' / '.'{nb}' : '                  ', 0,0,'C');
        $this->pdf->SetFont('Arial','I',6);
        $this->pdf->Cell(0,12,Date('Y-m-d H:i:s'),0,0,'C');
		HrLib::LogThis($user, 'PRINTING', '', sfContext::getInstance()->getModuleName().'/'.sfContext::getInstance()->getActionName() );
        return;
    }

    public function MyLine($x, $y, $w, $t=null){
        $t = $t? $t : .2;
        $this->pdf->setLineWidth($t);
        $this->pdf->Line($x+self::ml, (($y*$this->nxtln) + self::mt - 2), $w+self::ml, (($y*$this->nxtln) + self::mt - 2));
    }

    public function Box($x, $y, $w, $h, $style, $bg){
    	if ($bg):
    		$this->pdf->setFillColor($bg[0], $bg[1], $bg[2]);
    	endif;
        $this->pdf->setLineWidth(.4);
        $this->pdf->rect($x+self::ml, $y+self::mt, $w, $h, $style);
    }
    
    function MyMultiCell($x, $y, $mess, $w, $h)
    {
    	$this->pdf->setY($y*$this->nxtln);
		$this->pdf->setX($x);
    	$this->pdf->SetFont('Arial','',10);
    	$this->pdf->MultiCell( $w, $h, $mess, 0, 'J' );
    }
    
    
    public function closePDFProtect($fname, $target = null, $allowprint = null, $password = null)
    {
    	$user = sfContext::getInstance()->getUser()->getUsername() ;
    	$target = $target? $target : 'I';
    	$password = $password? $password : '';
    	$this->pdf->SetProtection(array(), 'allowed');
    	$this->pdf->Output($fname, $target);
    	return;
    }
}
?>
