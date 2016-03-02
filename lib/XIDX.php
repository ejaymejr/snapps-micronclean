<?php

class XIDX
{
    const PREFIX = 'xIDx_';
    private $count;
    static private $instance = NULL;

    private function __construct()
    {
        $this->count = 0;
    }
    public static function getInstance()
    {
        if(self::$instance == NULL)
        {
            self::$instance = new XIDX();
        }
        return self::$instance;
    }
    public static function next()
    {
        $t = self::getInstance();
        return $t->n();
    }
    protected function n()
    {
        $this->count++;
        return self::PREFIX . $this->count;        
    }
}