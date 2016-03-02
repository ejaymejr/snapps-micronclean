<?php

class SnappsGlobalResponse extends sfWebResponse
{
    
    public function outputCsv($csvContent, $exportFilename)
    {            
        $this->clearHttpHeaders();
        $this->addCacheControlHttpHeader("Cache-control","private");
        $this->setHttpHeader("Content-Description","File Transfer");
        $this->setContentType('application/octet-stream',TRUE);
        $this->setHttpHeader("Content-Length",(string) strlen($csvContent), TRUE);
        $this->setHttpHeader('content-transfer-encoding', 'binary', TRUE);
        $this->setHttpHeader("Content-Disposition","attachment; filename=\"".$exportFilename."\"", TRUE);
        $this->sendHttpHeaders();
        echo $csvContent;
        exit();
    }
}