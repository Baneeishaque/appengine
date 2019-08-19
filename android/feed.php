
<?php

//error_reporting(0);
require_once 'config.php';
$Title = mysql_escape_string($_POST['title']);
$Message = mysql_escape_string($_POST['message']);
$a = mysql_query("INSERT INTO `feedback`(`Title`, `Message`) VALUES ('$Title','$Message')")or die(mysql_error());



if ($a) {

    echo'Success';
} else {

    echo 'Failure';
}

							