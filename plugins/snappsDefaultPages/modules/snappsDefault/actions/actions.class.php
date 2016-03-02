<?php

class snappsDefaultActions extends sfActions
{
    public function executeModule()
    {
        return sfView::SUCCESS;
    }
    public function executeError404()
    {
        return sfView::SUCCESS;
    }
    public function executeSecure()
    {
        return sfView::SUCCESS;
    }
}