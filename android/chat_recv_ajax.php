<?php

session_start();
error_reporting(0);
require_once('dbconnect.php');
require_once('config.php');

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

mysql_query($sql);

$msg="";

$sqlcheck="select * from chatreceiver where partner1=$uid";

//echo $sqlcheck;
$chat_receiver_result = mysql_query($sqlcheck)or die('Query1 failed: ' . mysql_error());
$row = mysql_fetch_array($chat_receiver_result);
$receiver = $row["partner2"];
//echo $receiver;
db_connect();
//echo $uid;

if ($receiver == 0) {
    $sql = "SELECT *, date_format(chatdate,'%M %d, %Y~%H:%i') as cdt from chat  where reciever=0 order by ID limit 200";
} else {
    $sql = "SELECT *, date_format(chatdate,'%M %d, %Y~%H:%i') as cdt from chat where (reciever=$receiver and sender= $uid) OR (reciever=$uid and sender= $receiver)order by ID limit 200";
}
$sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
//echo $sql;
$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $sql = "select * from student where StudentID=" . $line["sender"];

    //echo $sql;
    $result2 = mysql_query($sql) or die('Query2 failed: ' . mysql_error());
    $line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
    
    
    
   $msg = $msg . "" . $line["cdt"] . "~"
            . $line2['NAME'] . "~"
			 . $line2['StudentID'] . "~"
            . $line["msg"] . "~"
            . $line["id"] . "`";
}

echo $msg;







