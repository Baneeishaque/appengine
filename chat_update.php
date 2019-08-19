<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once 'security_check.php';
require_once('dbconnect.php');
$uid = $_SESSION["user_id"];
db_connect();
$partner2 = $_GET["id"];
$sql_check="select * from chatreceiver where partner1=$uid";
$chat_receiver_result = mysql_query($sql_check);
//echo $sql_check;

$row = mysql_fetch_array($chat_receiver_result);
$a = $row['id'];
if ($a == null) {
    $sql = "INSERT INTO `chatreceiver`(`id`, `partner1`, `partner2`) VALUES (null,$uid,$partner2)";
}
else {
    $sql = "UPDATE `chatreceiver` SET `partner2`=$partner2 WHERE `partner1`=$uid";
}

mysql_query($sql);
echo '<script>window.location="teachchat.php?id='.$partner2.'"</script>';
