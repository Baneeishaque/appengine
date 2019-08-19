
<?php

error_reporting(0);
require_once 'config.php';
$uname = mysql_escape_string($_POST['uname']);
$pass = mysql_escape_string($_POST['pass']);
$result = mysql_query("SELECT `user_id`,`USERNAME`, `PASSWORD`, `Role` FROM `login` WHERE `USERNAME`='$uname' and `PASSWORD`='$pass' ");
$row = mysql_fetch_array($result);
$a = $row['USERNAME'];


if ($a == null) {
    //echo '<div class="alert alert-error">
    //<strong>Error!</strong> There is no person like that...
    //</div>';
    echo'login_error1';
} else {
    $a = $row['Role'];
    if ($a == 'user') {
        $uid = $row['user_id'];
        $result = mysql_query("SELECT status FROM `student` WHERE `StudentID`='$uid'");
        $row = mysql_fetch_array($result);
        $status = $row['status'];

        if ($status == 'Not OK') {

            //echo '<div class="alert alert-error">
            //<strong>Error!</strong> Not verified by the admin...
            //</div>';
            echo'login_error2';
        } else {
            echo 'login_success~' . $uid;
        }
    }
}

							