
<?php

$msg = "";
require_once 'config.php';
$result = mysql_query("select Forum_ID,Subject,Question,Asker_ID from QForum order by Forum_ID DESC");

while ($row = mysql_fetch_array($result)) {
    $msg = $msg.$row['Question']." : ".$row['Subject']."~";
}
echo $msg;
