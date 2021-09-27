<?php

class SessionIChessmen implements IChessmen
{
    var $name;

    function __construct($name) 
    {
        session_start();
        //$names = $name;
        $this->name = $name;
    }

    function  save($figures)
    {
        $name = $this->name;
        $_SESSION[$name] = $figures;
        //return $_SESSION[$name];
    }

    function load(){
        $name = $this->name;
        return $_SESSION[$name];
    }
}
?>