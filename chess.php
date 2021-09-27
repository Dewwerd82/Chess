<?php
include 'Class/IChessmen.php';
include 'Class/SessionIChessmen.php';
include 'Class/Board.php';
include 'Class/FileIChessmen.php';
include 'Class/MysqlIChessmen.php';

//$storage = new MysqlIChessmen('mysql:host=localhost;dbname=chess;charset=utf8', 'root', '');
//$storage = new SessionIChessmen('map');
$storage = new FileIChessmen('figures.txt');
$board = new Board($storage);


if (isset($_GET['newFigures']))
    echo $board->newFigures();


if (isset($_GET['getFigures']))
    echo $board->getFigures();

if (isset($_GET['moveFigure']))
{
    echo $board->moveFigure($_GET['frCoord'], $_GET['toCoord']);
} 
    
?>