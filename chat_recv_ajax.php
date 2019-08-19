<?php

session_start();
require_once('dbconnect.php');

require_once('config.php');
$uid = $_SESSION["user_id"];
$sqlcheck="select * from chatreceiver where partner1=$uid";

//echo $sqlcheck;
$chat_receiver_result = mysql_query($sqlcheck)or die('Query1 failed: ' . mysql_error());
$row = mysql_fetch_array($chat_receiver_result);
$receiver = $row["partner2"];
//echo $receiver;
db_connect();
//echo $uid;

if ($receiver == 0) {
    $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat  where reciever=0 order by ID desc limit 200";
} else {
    $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat where (reciever=$receiver and sender= $uid) OR (reciever=$uid and sender= $receiver)order by ID desc limit 200";
}
$sql = "SELECT * FROM (" . $sql . ") as ch order by ID DESC";

//echo $sql;

$result = mysql_query($sql) or die('Query1 failed: ' . mysql_error());

// Update Row Information
$msg = "<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $sql = "select NAME from student where StudentID=" . $line["sender"];

    //echo $sql;
    $result2 = mysql_query($sql) or die('Query2 failed: ' . mysql_error());
    $line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
    $sender_name = $line2["NAME"];
    
    
    
    if ($line["sender"] == $uid) {
        $msg = $msg . '<li class="user1">
									 
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>You</strong> says:
											</span>
											<span class="time">' . $line["chatdate"] . '</span>
										</div>
										<div class="message">
											<p>' . $line["msg"] . '</p>
										</div>
									</div>
								</li>';
    } else {

        $msg = $msg . '<li class="user2">
								
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>' . $sender_name . '</strong> says:
											</span>
											<span class="time">' . $line["chatdate"] . '</span>
										</div>
										<div class="message">
											<p>' . $line["msg"] . '</p>
										</div>
									</div>
								</li>';
    }
}

echo $msg;
?>





