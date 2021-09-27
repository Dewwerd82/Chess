<?php

class MysqlIChessmen implements IChessmen
{
    var $PDO;
    function __construct($dns, $user, $pass) 
    {
        $this->pdo = new PDO($dns, $user, $pass);
       
    }

    function  save($figures)
    {
        $this->pdo
            ->prepare('UPDATE board SET figures = ?')
            ->execute(array($figures));
            return $this->load();
    }

    function load(){
       return $this->pdo
            ->query("SELECT figures FROM board")
            ->fetch()[0];
    }
}
?>