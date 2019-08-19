<?php

error_reporting(0);
require_once('dbconnect.php');

db_connect();

$msg = $_POST["msg"];
$dt = date("Y-m-d H:i:s");
$user = $_POST["sender"];

$r = $_POST["r"];

$sql = "INSERT INTO chat(SENDER,CHATDATE,MSG,`reciever`) " .
        "values(" . $user . "," . quote($dt) . "," . quote($msg) . "," . $r . ");";


$result = mysql_query($sql);
if (!$result) {
    throw new Exception('Query failed: ' . mysql_error());
} else {
    echo 'send_chat_ok';
}







