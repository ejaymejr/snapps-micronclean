<?php

class PaymentVoucherPdf
{
    var $pvs;
    
    public function __construct($pvs = false, $pdfTitle = 'PDFPrint', $saveFilePath = '')
    {
        
        $pdf = new PDF('P','mm','A4');
        $pdf->SetAutoPageBreak(true);
        $pdf->SetMargins(30, 18, 25);
        $pdf->SetTitle($pdfTitle);
        
        if (is_array($pvs)) {
            $this->pvs = $pvs;
        } else if ($pvs) {
            $this->pvs = array($pvs);
        } else {
            $pvs = array(new PaymentVoucher());
        }
        
        foreach ($pvs as $pv) {
            $this->single($pdf, $pv);
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
    
    
    protected function populateLines($pv)
    {        
        $lines = array();
        
        $t = array();
        $t['is_ap'] = false;
        $t['sn'] = 0;
        $t['description'] = '';
        $t['account_number'] = '';
        $t['invoice_number'] = '';
        $t['gst_rate'] = '';
        $t['gst_amount'] = '';
        $t['amount'] = '';
        
        
        $items = $pv->getPaymentVoucherToPayables();
        
    
        $sn = 0;
        foreach ($items as $item) {  
            $ap = snappsPayablePeer::retrieveByPK($item->getPayableId());
            if ($ap->getIsAp() == '1') {
                $sn++;
                $line = $t;
                $line['sn'] = $sn;
                $line['is_ap'] = true;
                $line['invoice_number'] = $ap->getReferenceNumber();
                $line['amount'] = format_currency($item->getAmount(), $ap->getCurrency());
                
                $line['description'] = 'Payment for Account';
                if (format_number($item->getAmount(), 2) != format_number($ap->getTotalPriceWithGst(), 2)) {
                    $line['description'] .= ' (Partial Payment of total ' . 
                    format_currency($ap->getTotalPriceWithGst(), $ap->getCurrency()) . ')';
                }
                $lines[] = $line;
            } else {
                $pis = $ap->getsnappsPayableItems();
                if ($pis && sizeof($pis)) {
                    foreach ($pis as $pi) {
                        $sn++;
                        $line = $t;
                        $line['sn'] = $sn;
                        $line['invoice_number'] = $ap->getReferenceNumber();
                        $line['account_number'] = $pi->getAccountNo();
                        $line['amount'] = format_currency($pi->getPrice(), $pi->getCurrency());
                        $line['gst_rate'] = $pi->getGstRate();
                        $line['gst_amount'] = $pi->getGstAmount();
                        
                        $particulars = '';
                        $particulars .= $pi->getItems();                
                        $particulars .= "\n";    
                        
                        $line['description'] = $particulars;
                
                        $lines[] = $line;
                    }
                }
            }
        }   
        
        if ($pv->getBankCharge() != 0) {
            $sn++;
            $line = $t;
            $line['sn'] = $sn;
            $line['invoice_number'] = '';
            $line['account_number'] = '';
            $line['amount'] = format_currency($pv->getBankCharge(), sfConfig::get('app_currency_symbol'));
            $line['gst_rate'] = '';
            $line['gst_amount'] = '';
            
            $particulars = '';
            $particulars .= 'Bank Charge';    
            
            $line['description'] = $particulars;
    
            $lines[] = $line;            
        }
        
        return $lines;
    }
    protected function single($pdf, $pv) 
    {
        sfLoader::loadHelpers(array('Text', 'Url', 'Number', 'I18N'));        
        
        $lines = $this->populateLines($pv);        
        
        $totalGst = 0;
        $gstRate = 0;
        $isAP = false;            
    
        if (sizeof($lines) > 0) {            
            foreach ($lines as $line) {                
                $totalGst += $line['gst_amount'];
                $gstRate = $line['gst_rate'] != 0 ? $line['gst_rate'] : $gstRate;  
            }
        }
               
        $singlePageLimit = 12;
        $firstPageLimit = 20;
        $lastPageLimit = 18;
        $normalPageLimit = 24;
        if (sizeof($lines) > $singlePageLimit) {            
            
            $pageData = array();
            $pageData[] = array_slice($lines, 0, $firstPageLimit);
            
            if ($firstPageLimit + $lastPageLimit <= sizeof($lines)) {
                $pageData[] = array_slice($lines, $firstPageLimit);
            } else {
                for ($offset = $firstPageLimit; $offset < sizeof($lines); $offset += $normalPageLimit) {
                    $pageData[] = array_slice($lines, $offset, $normalPageLimit);
                }
            }
            
            $pageTotal = sizeof($pageData);  
            if ($pageTotal == 1) {
                $pageTotal = 2;
                $pageData[] = array();
            }
            $pageNumber = 1;
            foreach ($pageData as $rows) {
                $this->page($pdf, $pageData[$pageNumber - 1], $pageNumber, $pageTotal, $pv); 
                $pageNumber++;
            }            
        } else {   
            $this->page($pdf, $lines, 1, 1, $pv);            
        }
        
        if (!$isAP) {
            $gstPercent = '';
            $gsts = sfConfig::get('app_gst_options');
            $gstPercent = $gstRate > 0 ? $gsts["$gstRate"] : '';
            
            
            $pdf->SetLineWidth(0.3);
            $pdf->Line(20, 190, 190, 190);     
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(140,194);
            $pdf->Cell(20,0,'GST: ' . $gstPercent, 0, 0, 'R');   
            $pdf->SetXY(160,194);
            $pdf->Cell(30,0,format_currency($totalGst, $pv->getCurrency()), 0, 0, 'R');
        }        
        
        $pvTotal = $pv->getAmount() + $pv->getBankCharge();
        
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(120,204);
        $pdf->Cell(30,0,'Total', 0, 0, 'R');   
        $pdf->SetXY(160,204);
        $pdf->Cell(30,0,format_currency($pvTotal, $pv->getCurrency()), 0, 0, 'R');
        
        
        $pdf->SetXY(20,220);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(30,0,'Paid The Sum Of:', 0, 0, 'L');
            
        $ret = MoneyUtils::Num2Word($pvTotal,2);
        $ret = $ret ? ucfirst($ret) : $pvTotal;
        
        $moneyName = snappsCurrencyPeer::GetNameByCode($pv->getCurrency());
        $ret = '(' . $moneyName . ') ' . $ret;
        
        $pdf->SetXY(20, 224);
        $pdf->SetFont('Arial','',9);
        $pdf->MultiCell(130,4, $ret , 0, 'L');
        
        
        /*
        $pdf->SetLineWidth(0.1);
        $pdf->Line(53, 220, 180, 220);  
        $pdf->Line(20, 227, 180, 227);   
        $pdf->Line(20, 234, 180, 234);        
        */
        
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(20,255);
        $pdf->Cell(30,0,'Signature:', 0, 0, 'L');
        $pdf->SetXY(20,260);
        $pdf->Cell(30,0,'Received By:', 0, 0, 'L');
        $pdf->SetXY(20,265);
        $pdf->Cell(30,0,'Date:', 0, 0, 'L'); 
        $pdf->SetLineWidth(0.1);
        $pdf->Line(20, 262, 100, 262);  
        
        
        
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(120,255);
        $pdf->Cell(30,0,'Signature:', 0, 0, 'L');
        $pdf->SetXY(120,260);
        $pdf->Cell(30,0,'Paid By:', 0, 0, 'L');
        $pdf->SetXY(120,265);
        $pdf->Cell(30,0,'Date:', 0, 0, 'L'); 
        $pdf->SetLineWidth(0.1);
        $pdf->Line(120, 262, 180, 262);  
        
        
        /*
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(130,260);
        $pdf->Cell(30,0,'Prepared By:', 0, 0, 'L');
        $pdf->SetXY(145,260);
        $pdf->Cell(30,0,UserTools::GetFullName($pv->getIssuedBy()), 0, 0, 'L');
        */
        

    }
    
    protected function page($pdf, $lines, $pageSN, $totalPage, $pv)
    {        
        $pdf->AddPage();
        $this->decoratePage($pdf);
        $co = $pv->getCompany();
        $company = snappsCompanyPeer::GetCompanyByName($co);
        $this->setCompanyHeader($pdf, $company);
        
        
            
        if ($pageSN == 1) {        
    
            $pdf->SetXY(20,32);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(30,0,'PAYMENT VOUCHER', 0, 0, 'L');             
            
            
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(120,32);
            $pdf->Cell(30,0,'Voucher No:', 0, 0, 'L');
            
            $pdf->SetXY(145,32);
            $pdf->Cell(40,0,$pv->getVoucherNumber(), 0, 0, 'L');
    
            $pdf->SetXY(120,36);
            $pdf->Cell(30,0,'Date:', 0, 0, 'L');
    
            $pdf->SetXY(145,36);
            $pdf->Cell(40,0,HTMLText::DateNice($pv->getDateIssued('Y-m-d')), 0, 0, 'L');
            
            
            $pdf->SetXY(120,40);
            $pdf->Cell(30,0,'Payment By:', 0, 0, 'L');
            
            $pdf->SetXY(145,40);
            $pdf->Cell(40,0,$pv->getPaymentMethod(), 0, 0, 'L');
            
            $pdf->SetXY(120,44);
            $pdf->Cell(30,0,'Cheque No:', 0, 0, 'L');
            
            $pdf->SetXY(145,44);
            $pdf->Cell(40,0,$pv->getReferenceNumber(), 0, 0, 'L');
            
    
    
            $pdf->SetXY(20,50);
            $pdf->Cell(30,0,'Pay To:', 0, 0, 'L');
            $pdf->SetXY(40,50);
            $pdf->Cell(100,0,$pv->getPayeeName(), 0, 0, 'L'); 
        }
        
        if ($pageSN == 1 && $totalPage > 1) {
            
            $this->detailTable($pdf, $lines, array(20,55), $end = array(190, 270), $pageSN, $totalPage);
        } else if ($pageSN == 1 && $totalPage == 1) {
            
            $this->detailTable($pdf, $lines, array(20,55), $end = array(190, 210), $pageSN, $totalPage);
        } else if ($pageSN < $totalPage) {    
            $this->detailTable($pdf, $lines, array(20,35), $end = array(190, 270), $pageSN, $totalPage);       
            
        } else if ($pageSN == $totalPage) { 
            $this->detailTable($pdf, $lines, array(20,35), $end = array(190, 210), $pageSN, $totalPage);          
            
        }
        
        
        
        if ($pageSN == 1) {
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(180,53);
            $pdf->Cell(10,0,"Page $pageSN of $totalPage", 0, 0, 'R');
            
        } else {
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(20,33);
            $pdf->Cell(30,0,'Voucher No:', 0, 0, 'L');
            
            $pdf->SetXY(40,33);
            $pdf->Cell(40,0,$pv->getVoucherNumber(), 0, 0, 'L');
    
            $pdf->SetXY(80,33);
            $pdf->Cell(30,0,'Date:', 0, 0, 'L');
    
            $pdf->SetXY(90,33);
            $pdf->Cell(40,0,HTMLText::DateNice($pv->getDateIssued('Y-m-d')), 0, 0, 'L');
            
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(180,33);
            $pdf->Cell(10,0,"Page $pageSN of $totalPage", 0, 0, 'R');
            
        }
        
    }
    protected function detailTable($pdf, $lines, $start = array(20,55), $end = array(190, 210), $pageSN, $totalPage)
    {
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY($start[0],$start[1] + 4);
        $pdf->Cell(10,0,'No', 0, 0, 'C'); 
        $pdf->SetXY($start[0] + 12,$start[1] + 4);
        $pdf->Cell(10,0,'A/C No', 0, 0, 'C'); 
        $pdf->SetXY($start[0] + 30,$start[1] + 4);
        $pdf->Cell(100,0,'Description', 0, 0, 'C'); 
        $pdf->SetXY($start[0] + 120,$start[1] + 4);
        $pdf->Cell(20,0,'Invoice', 0, 0, 'C'); 
        $pdf->SetXY($start[0] + 140,$start[1] + 4);
        $pdf->Cell(30,0,'Amount', 0, 0, 'R');      
        
        
        // horizontal lines
        $pdf->SetLineWidth(0.5);        
        // header lines
        $pdf->Line($start[0], $start[1], $end[0], $start[1]);
        $pdf->Line($start[0], $start[1] + 10, $end[0], $start[1] + 10);
        // bottom line
        $pdf->Line($start[0], $end[1], $end[0], $end[1]);  
        
        if ($pageSN == $totalPage) {
            // total line
            $pdf->Line($start[0], $end[1] - 10, $end[0], $end[1] - 10); 
        }      
        
        // vertical lines        
        $pdf->SetLineWidth(0.2);
        $pdf->Line($start[0] + 10, $start[1], $start[0] + 10, $end[1]);
        $pdf->Line($start[0] + 25, $start[1], $start[0] + 25, $end[1]);
        $pdf->Line($start[0] + 115, $start[1], $start[0] + 115, $end[1]);
        $pdf->Line($start[0] + 140, $start[1], $start[0] + 140, $end[1]);        
        
        
    
        if (sizeof($lines) > 0) {

            $currentY = $start[1] + 15;
            
            $count = 1;
            foreach ($lines as $line) {
                $rowHeight = 5;
                              
                if (strlen($line['invoice_number']) > 10) {                    
                    $line['description'] .= "\nInvoice: (" . $line['invoice_number'] . ')';
                    $line['invoice_number'] = '(See Desc)';                    
                }
                
                $pdf->SetXY(21, $currentY);
                $pdf->SetFont('Arial','',7);
                $pdf->Cell(10,0,$line['sn'], 0, 0, 'C');
                
                $pdf->SetXY(33, $currentY);
                $pdf->SetFont('Arial','',7);
                $pdf->Cell(10,0,$line['account_number'], 0, 0, 'C');
                
                
                $pdf->SetXY(45, $currentY - 2);
                $pdf->SetFont('Arial','',8);                
                if (strlen($line['description']) >= 60) {
                    $pdf->SetFont('Arial','',7);                    
                }
                $pdf->MultiCell(105,4, $line['description'] , 0, 'L');

                $pdf->SetXY(136, $currentY);
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(33,0,$line['invoice_number'], 0, 0, 'L');
                
                $pdf->SetXY(161, $currentY);
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(28,0,$line['amount'], 0, 0, 'R');
                 
                
                if (strlen($line['description']) > 70) {
                    $rowHeight = 5 * (((int)(strlen($line['description']) / 70)) + 1);
                }                
                $countNewLine = substr_count($line['description'], "\n");
                $rowHeight += (5 * $countNewLine);
                
                $currentY += $rowHeight;
                $count++;
            }
        }
        
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

        $pdf->Line(20, 27, 190, 27);
    }

    
    protected function decoratePage($pdf)
    {
        /*
        $width = 2;
        $height = 4;
        $distance = 0.5;
                
        for ($i = 0; $i < 208; $i += ($width + $distance)) {            
            $pdf->SetFillColor(0x66,0x99,0xff);
            $pdf->Rect($i, 0, $width, $height, 'F');
        }
        */
        $pdf->SetFont('Arial','B',15);
        $pdf->SetXY(194,0);          
        $pdf->SetFillColor(0x66,0x99,0xff);
        
        $pdf->SetTextColor(0xFF,0xFF,0xff);
        $pdf->Cell(16,40,"PV", 0, 0, 'C', 1); 
        
        
        
        $pdf->SetTextColor(0x00,0x00,0x00);      
    }
}
