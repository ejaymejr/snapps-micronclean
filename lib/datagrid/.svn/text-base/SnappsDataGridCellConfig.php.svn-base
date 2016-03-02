<?php
// $Source$
// $Id$


class SnappsDataGridCellConfig
{
    private $t = NULL;
    static private $instance = NULL;

    private function __construct()
    {
        $this->t = $this->populate();
    }
    public static function getInstance()
    {
        if(self::$instance == NULL)
        {
            self::$instance = new SnappsDataGridCellConfig();
        }
        return self::$instance;
    }
    public static function getTemplate()
    {
        $t = self::getInstance();
        return $t->t;
    }
    
    protected function populate()
    {
        return array(
            'class_name' => 'default',
            'extra_html' => '',
            'search_enabled' => false,
            'search_fields' => false,
            'truncate_length' => 0,
            'truncate_text' => '...'
        );
    }
}