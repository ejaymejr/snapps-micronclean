<?php

class ConveyorBatchPdf
{
    const COMPANY_NAME = 'NANOCLEAN (S) PTE LTD';
    const ROW_PER_PAGE = 6;
    var $data;
    
    public function __construct(ConveyorBatch $batch, $pdfTitle = 'PDFPrint', $saveFilePath = '')
    {        
        $conveyors = $batch->getConveyors();
        
        $pageData  = array_chunk($conveyors, self::ROW_PER_PAGE);
                
        $pdf = new PDF('P','mm','A4');
        $pdf->SetAutoPageBreak(true);
        $pdf->SetMargins(30, 18, 25);
        $pdf->SetTitle($pdfTitle);
        
        $pageNumber = 1;
        $pageTotal = sizeof($pageData);
        
        $startSN = 1;
        foreach ($pageData as $rows) {
            $this->single($pdf, $batch, $startSN, $rows, $pageNumber, $pageTotal);
            $pageNumber++;
            $startSN += sizeof($rows);
        }
        
        if ($saveFilePath != '') {
            $result = $pdf->Output($saveFilePath, 'F');
            echo $result;
        } else {
            $fileName = $pdfTitle . '.pdf';
            $pdf->Output($fileName, 'I');
        }
        return sfView::NONE;
    }
    
    protected function single($pdf, ConveyorBatch $batch, $startSN, $rows, $pageNumber, $pageTotal) 
    {
        sfLoader::loadHelpers(array('Text', 'Url', 'Number', 'I18N'));
        
        $pdf->AddPage();
        $pdf->SetXY(155, 36);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(40,0,"Page $pageNumber of $pageTotal", 0, 0, 'R');   
                
        $co = self::COMPANY_NAME;
        $company = snappsCompanyPeer::GetCompanyByName($co);
        $this->setCompanyHeader($pdf, $company);
        
        $this->setPageHeader($pdf);       
        
        
        $pdf->SetXY(20,30);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Batch Number: ', 0, 0, 'L');   
        $pdf->SetXY(50,30);
        $pdf->Cell(30,0,$batch->getBatchNumber(), 0, 0, 'L');  
        
        $pdf->SetXY(20,33);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Batch Date: ', 0, 0, 'L');   
        $pdf->SetXY(50,33);
        $pdf->Cell(30,0,$batch->getBatchDate('j M Y'), 0, 0, 'L');  
        
        $pdf->SetXY(20,36);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Completion Date: ', 0, 0, 'L');   
        $pdf->SetXY(50,36);
        $pdf->Cell(30,0,$batch->getDateCompleted('j M Y'), 0, 0, 'L');  
        
        
        $pdf->SetXY(80,30);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Machine Number: ', 0, 0, 'L');   
        $pdf->SetXY(110,30);
        $pdf->Cell(30,0,$batch->getMachineNumber(), 0, 0, 'L'); 
        
        $pdf->SetXY(80,33);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'MSR Number: ', 0, 0, 'L');   
        $pdf->SetXY(110,33);
        $pdf->Cell(30,0,$batch->getMsrNumber(), 0, 0, 'L'); 
        
        
        $pdf->SetXY(140,30);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Total Conveyors: ', 0, 0, 'L');   
        $pdf->SetXY(170,30);
        $pdf->Cell(30,0,$batch->getTotalConveyor(), 0, 0, 'L');  
        $pdf->SetXY(140,33);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(30,0,'Total Idlers: ', 0, 0, 'L');   
        $pdf->SetXY(170,33);
        $pdf->Cell(30,0,$batch->getTotalIdler(), 0, 0, 'L'); 
        
        
        $conveyorHeight = 33;
        $currentX = 20;
        $currentY = 40;
        $conveyorSN = $startSN;
        foreach ($rows as $conveyor) {
            $this->printConveyor($pdf, $conveyorSN, $conveyor, $currentX, $currentY);
            
            $currentY += $conveyorHeight + 5;
            $conveyorSN++;
        }
        
        
    }
    
    protected function printConveyor($pdf, $conveyorSN, $conveyor, $startX, $startY)
    {
        $pdf->SetLineWidth(0.5);  
        $pdf->Rect($startX, $startY, 175, 33);
        
        $pdf->SetFillColor(0xe2, 0xe8, 0xf6);
        $pdf->Rect($startX + 1, $startY + 1, 10, 31, 'F');
        
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY($startX + 2,$startY + 7);
        $pdf->Cell(8,0,$conveyorSN, 0, 0, 'C'); 
        
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 4);
        $pdf->Cell(20,0,'Conveyor No.:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY($startX + 31,$startY + 4);
        $pdf->Cell(30,0,$conveyor->getConveyorNumber(), 0, 0, 'L');    
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 8);
        $pdf->Cell(20,0,'Date Out:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 31,$startY + 8);
        $pdf->Cell(30,0,$conveyor->getConveyorBatch()->getBatchDate('j M Y'), 0, 0, 'L');    
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 12);
        $pdf->Cell(20,0,'Machine No.:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 31,$startY + 12);
        $pdf->Cell(30,0,$conveyor->getMachineNumber(), 0, 0, 'L');     
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 16);
        $pdf->Cell(20,0,'Station No.:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 31,$startY + 16);
        $pdf->Cell(30,0,$conveyor->getStationNumber(), 0, 0, 'L');    
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 20);
        $pdf->Cell(20,0,'Date of Svc:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 31,$startY + 20);
        $pdf->Cell(30,0,$conveyor->getConveyorBatch()->getDateCompleted('j M Y'), 0, 0, 'L');  
        
        
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 25);
        $pdf->Cell(20,0,'Tyre Batch No.:', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 40,$startY + 25);
        $pdf->Cell(30,0,$conveyor->getConveyorBatch()->getTyreBatchNumberForDrives(), 0, 0, 'L'); 
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 11,$startY + 29);
        $pdf->Cell(20,0,'Leak Test Reading', 0, 0, 'L'); 
        
        $pdf->SetXY($startX + 36,$startY + 29);
        $pdf->Cell(10,0,'(e', 0, 0, 'L'); 
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($startX + 40,$startY + 28);
        $pdf->Cell(10,0,'-9', 0, 0, 'L');        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 42,$startY + 29);
        $pdf->Cell(10,0,') : ', 0, 0, 'L'); 
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($startX + 50,$startY + 29);
        $pdf->Cell(30,0,$conveyor->getLeakTestRead(), 0, 0, 'L'); 
        
        
        
        
        
        
        
        
        $AXSTART = $startX + 73;
        $BXSTART = $startX + 124;
        $AWIDTH = $BWIDTH = 50;
        $AHEIGHT = $BHEIGHT = 24;
        
        $COLWIDTH = 15;
        
        $pdf->SetXY($AXSTART,$startY + 3);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,0,'After Used: ', 0, 0, 'L'); 
        
        $pdf->SetXY($BXSTART,$startY + 3);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,0,'After Serviced: ', 0, 0, 'L'); 
        
        
        $pdf->SetLineWidth(0.1); 
        $pdf->Rect($AXSTART, $startY + 5, $AWIDTH, $AHEIGHT);
        $pdf->Rect($BXSTART, $startY + 5, $BWIDTH, $BHEIGHT);
        
        $tmpY = $startY + 5 + 6;
        for ($i = 1; $i <= 4; $i++) {
            $pdf->Line($AXSTART, $tmpY, $AXSTART + $AWIDTH, $tmpY);
            $pdf->Line($BXSTART, $tmpY, $BXSTART + $AWIDTH, $tmpY);
            $tmpY += 6;
        }
        
        $pdf->Line($AXSTART + 6, $startY + 5, $AXSTART + 6, $startY + 5 + $AHEIGHT);        
        $tmpX = $AXSTART + 5 + $COLWIDTH;
        for ($i = 1; $i <= 2; $i++) {
            $pdf->Line($tmpX, $startY + 5, $tmpX, $startY + 5 + $AHEIGHT);            
            $tmpX += $COLWIDTH;
        }
        $pdf->Line($BXSTART + 6, $startY + 5, $BXSTART + 6, $startY + 5 + $BHEIGHT);        
        $tmpX = $BXSTART + 5 + $COLWIDTH;
        for ($i = 1; $i <= 2; $i++) {
            $pdf->Line($tmpX, $startY + 5, $tmpX, $startY + 5 + $BHEIGHT);            
            $tmpX += $COLWIDTH;
        }
        
        
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY($AXSTART,$startY + 14);
        $pdf->Cell(5,0,'D1', 0, 0, 'L'); 
        $pdf->SetXY($AXSTART,$startY + 20);
        $pdf->Cell(5,0,'D2', 0, 0, 'L'); 
        $pdf->SetXY($AXSTART,$startY + 26);
        $pdf->Cell(5,0,'D3', 0, 0, 'L'); 
        $pdf->SetXY($BXSTART,$startY + 14);
        $pdf->Cell(5,0,'D1', 0, 0, 'L'); 
        $pdf->SetXY($BXSTART,$startY + 20);
        $pdf->Cell(5,0,'D2', 0, 0, 'L'); 
        $pdf->SetXY($BXSTART,$startY + 26);
        $pdf->Cell(5,0,'D3', 0, 0, 'L'); 
        
        
        $pdf->SetXY($AXSTART + 5,$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Tyre Dia', 0, 0, 'C'); 
        $pdf->SetXY($AXSTART + 5 + $COLWIDTH,$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Height', 0, 0, 'C'); 
        $pdf->SetXY($AXSTART + 5 + (2 * $COLWIDTH),$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Runout', 0, 0, 'C'); 
        $pdf->SetXY($BXSTART + 5,$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Tyre Dia', 0, 0, 'C'); 
        $pdf->SetXY($BXSTART + 5 + $COLWIDTH,$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Height', 0, 0, 'C'); 
        $pdf->SetXY($BXSTART + 5 + (2 * $COLWIDTH),$startY + 8);
        $pdf->Cell($COLWIDTH,0,'Runout', 0, 0, 'C'); 
        
        
        $pdf->SetXY($AXSTART + 5 + $COLWIDTH, $startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD1Height(), 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5 + $COLWIDTH, $startY + 20);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD2Height(), 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5 + $COLWIDTH, $startY + 26);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD3Height(), 0, 0, 'R'); 
        
        $pdf->SetXY($AXSTART + 5 + (2 * $COLWIDTH), $startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD1Runout(), 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5 + (2 * $COLWIDTH), $startY + 20);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD2Runout(), 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5 + (2 * $COLWIDTH), $startY + 26); 
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getBeforeD3Runout(), 0, 0, 'R'); 
        
    
        $tmpNumber1 = $conveyor->getBeforeD1TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber1 = number_format($tmpNumber1, 3);
        }        
        if ($tmpNumber1 == 0) {
            $tmpNumber1 = '';
        }
    
        $tmpNumber2 = $conveyor->getBeforeD2TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber2 = number_format($tmpNumber2, 3);
        }        
        if ($tmpNumber2 == 0) {
            $tmpNumber2 = '';
        }
        $tmpNumber3 = $conveyor->getBeforeD3TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber3 = number_format($tmpNumber3, 3);
        }        
        if ($tmpNumber3 == 0) {
            $tmpNumber3 = '';
        }
        
        $pdf->SetXY($AXSTART + 5,$startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber1, 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5,$startY + 20);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber2, 0, 0, 'R'); 
        $pdf->SetXY($AXSTART + 5,$startY + 26);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber3, 0, 0, 'R');
        
        
        $pdf->SetXY($BXSTART + 5 + $COLWIDTH, $startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD1Height(), 0, 0, 'R'); 
        $pdf->SetXY($BXSTART + 5 + $COLWIDTH, $startY + 20);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD2Height(), 0, 0, 'R'); 
        $pdf->SetXY($BXSTART + 5 + $COLWIDTH, $startY + 26);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD3Height(), 0, 0, 'R');
        
        $pdf->SetXY($BXSTART + 5 + (2 * $COLWIDTH), $startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD1Runout(), 0, 0, 'R'); 
        $pdf->SetXY($BXSTART + 5 + (2 * $COLWIDTH), $startY + 20); 
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD2Runout(), 0, 0, 'R'); 
        $pdf->SetXY($BXSTART + 5 + (2 * $COLWIDTH), $startY + 26);
        $pdf->Cell($COLWIDTH - 1,0,$conveyor->getAfterD3Runout(), 0, 0, 'R'); 
        
        
    
        $tmpNumber1 = $conveyor->getAfterD1TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber1 = number_format($tmpNumber1, 3);
        }        
        if ($tmpNumber1 == 0) {
            $tmpNumber1 = '';
        }
    
        $tmpNumber2 = $conveyor->getAfterD2TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber2 = number_format($tmpNumber2, 3);
        }        
        if ($tmpNumber2 == 0) {
            $tmpNumber2 = '';
        }
        $tmpNumber3 = $conveyor->getAfterD3TyreDiameter();
        if (strpos($f, 'tyre_diameter') !== false) {
            $tmpNumber3 = number_format($tmpNumber3, 3);
        }        
        if ($tmpNumber3 == 0) {
            $tmpNumber3 = '';
        }
        
        
        $pdf->SetXY($BXSTART + 5,$startY + 14);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber1, 0, 0, 'R'); 
        $pdf->SetXY($BXSTART + 5,$startY + 20);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber2, 0, 0, 'R');
        $pdf->SetXY($BXSTART + 5,$startY + 26);
        $pdf->Cell($COLWIDTH - 1,0,$tmpNumber3, 0, 0, 'R'); 
        
    }
    
    protected function setPageHeader($pdf)
    {        
        $pdf->SetXY(20,16);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,0,'Conveyors Service', 0, 0, 'L');   
        $pdf->SetXY(20,22);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(30,0,'Batch Report', 0, 0, 'L');  
    }

    protected function setCompanyHeader($pdf, $company)
    {

        $logoPath =
        sfConfig::get('sf_web_dir') . DIRECTORY_SEPARATOR .
            'images' . DIRECTORY_SEPARATOR . 'pdf' . DIRECTORY_SEPARATOR;
        
        if ($company->getLogoFilename() != '') {
            $pdf->Image($logoPath . $company->getLogoFilename(), 5, 6);
        }

        $pdf->SetXY(110,10);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(100,0,$company->getCompany(), 0, 0, 'L');

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(110,14);
        $pdf->Cell(100,0, $company->getAddressLine1() . ' ' . $company->getAddressLine2());
        $pdf->SetXY(110,18);
        $pdf->Cell(100,0, 'Tel: ' . $company->getPhone() . '    Fax: ' . $company->getFax(), 0, 0, 'L');
        $pdf->SetXY(110,22);
        $pdf->Cell(100,0,'Website: ' . $company->getWebsite(), 0, 0, 'L');

        //$pdf->Line(20, 27, 190, 27);
    }
}