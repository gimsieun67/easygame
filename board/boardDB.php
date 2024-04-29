<?php
session_start();

//한글 꺠짐 방지를 할라면 utf-8을 사용
header('Content-Type: text/html; charser=utf-8');

$db = new mysqli("localhost", "root", "1234", "board_board");
$db-> set_charsert("utf8");

function query($query)
{
    global $db;
    return $db-> query($query);
}

?>