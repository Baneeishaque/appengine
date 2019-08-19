
<?php

require_once 'config.php';
$user = $_POST['user'];
$depart = $_POST['Depart'];
$File = $_POST['File'];


$ext = end((explode(".", $File)));


if (mysql_query("INSERT INTO `deptfiles`(`File_ID`, `Faculty_ID`, `FileName`,`Department`,`Type`) VALUES (null,'$user','$File','$depart','$ext')")) {
    echo 'Success';
} else {
    echo 'Failure';
}

                       