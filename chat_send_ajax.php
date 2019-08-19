<?php

    session_start();
    require_once('dbconnect.php');

    db_connect();

    $msg = $_GET["msg"];
    $receiver = $_GET["receiver"];
    $dt = date("Y-m-d H:i:s");
    $uid = $_SESSION["user_id"];


    $sql = "INSERT INTO chat(`sender`, `reciever`,`chatdate`, `msg`) " .
            "values(" . quote($uid) . "," . quote($receiver) . "," . quote($dt) . "," . quote($msg) . ");";

    
    mysql_query($sql);
?>





