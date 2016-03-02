<?php

class PaymentVoucherPdfBak
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
                        $particulars .= str_pad($pi->getAccountNo(), 8, ' ', STR_PAD_LEFT) . '     ' . $pi->getItems();                
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
        
        $pdf->AddPage();
        
        $lines = $this->populateLines($pv);
        
        $co = $pv->getCompany();
        $company = snappsCompanyPeer::GetCompanyByName($co);
        $this->setCompanyHeader($pdf, $company);


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
            

        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(20,59);
        $pdf->Cell(10,0,'No', 0, 0, 'C'); 
        $pdf->SetXY(40,59);
        $pdf->Cell(100,0,'Description', 0, 0, 'C'); 
        $pdf->SetXY(140,59);
        $pdf->Cell(20,0,'Invoice', 0, 0, 'C'); 
        $pdf->SetXY(160,59);
        $pdf->Cell(30,0,'Amount', 0, 0, 'R');      
        
        
        // horizontal lines
        $pdf->SetLineWidth(0.5);
        $pdf->Line(20, 55, 190, 55);
        $pdf->Line(20, 65, 190, 65);
        $pdf->Line(20, 200, 190, 200); 
        $pdf->Line(20, 210, 190, 210);   
         
        
        /*
        $pdf->SetLineWidth(0.001);
        $startY = 50;
        $h = 8;
        for ($i = 1; $i <= 15; $i++) {
            $pdf->Line(20, ($i * $h) + $startY, 190, ($i * $h) + $startY);            
        }
        */
        
        // vertical lines        
        $pdf->SetLineWidth(0.2);
        $pdf->Line(30, 55, 30, 210);
        $pdf->Line(135, 55, 135, 210);
        $pdf->Line(160, 55, 160, 210);

        
        
        $totalGst = 0;
        $gstRate = 0;
        $isAP = false;
            
    
        if (sizeof($lines) > 0) {

            $currentY = 70;
            
            foreach ($lines as $line) {
                $rowHeight = 5;
                
                if ($line['is_ap']) $isAP = true;
                
                $totalGst += $line['gst_amount'];
                $gstRate = $line['gst_rate'] != 0 ? $line['gst_rate'] : $gstRate;                
                
                $pdf->SetXY(21, $currentY);
                $pdf->SetFont('Arial','',7);
                $pdf->Cell(10,0,$line['sn'], 0, 0, 'C');
                
                $pdf->SetXY(33, $currentY - 2);
                $pdf->SetFont('Arial','',9);                
                if (strlen($line['description']) >= 60 && strlen($line['description']) < 65) {
                    $pdf->SetFont('Arial','',8);                    
                } else if (strlen($line['description']) >= 65) {
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

}
