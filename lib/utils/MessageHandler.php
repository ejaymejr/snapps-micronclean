<?php
// $Source$
// $Id$

class MessageHandler
{
    
    var $msg = array();

    function MessageHandler()
    {
        $this->msg = array();
    }

    function addMsg($text)
    {
        $this->msg[] = $text;
    }

    function printMsg()
    {
        echo $this->getMsg();
    }
    function getMsg()
    {
        $tmp = '';
        if(sizeof($this->msg)) {
            $tmp .= '<ul>';
            foreach($this->msg as $msg) {
                $tmp .= '<li>' . $msg . '</li>';
            }
            $tmp .= '</ul>';
        }
        return $tmp;
    }
    function mergeMsg($msgHandler)
    {
        if (sizeof($this->msg) || sizeof($msgHandler->msg)) {
            $this->msg = array_merge($this->msg, $msgHandler->msg);
        }
    }
}

?>