<?php
require_once('dbconnect.php');
error_reporting(0);
$uid = $_GET["user"];
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

if(mysql_query($sql))
{
	echo 'success';
}


