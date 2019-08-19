
<?php

$msg = "";




require_once 'config.php';


$result = mysql_query("SELECT * FROM Notification WHERE Dept='General' ORDER BY NotificationID DESC");

while ($row = mysql_fetch_array($result)) {
    $msg = $msg . $row['Title'] . " : " . $row['Message'] . "~";
}
echo $msg;
