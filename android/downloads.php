
<?php

$msg = "";
require_once 'config.php';
$department = $_GET['department'];
$result = mysql_query("SELECT `FileName` FROM `deptfiles` where department='$department' AND status='OK'") or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
    $msg = $msg.$row['FileName']. "~";
}
echo $msg;
