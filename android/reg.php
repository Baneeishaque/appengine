<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$email = $_POST['email1'];

$pass1 = $_POST['pass1'];
$name = mysql_escape_string($_POST['name']);
$date = mysql_escape_string($_POST['date']);
$gender = mysql_escape_string($_POST['sex']);
$branch = mysql_escape_string($_POST['branch']);
$address = mysql_escape_string($_POST['address']);

$phone = mysql_escape_string($_POST['phone']);
$image_name = $_POST['image'];

$uname = mysql_escape_string($_POST['uname']);
if (mysql_query("INSERT INTO `student`(`StudentID`, `NAME`, `DOB`, `SEX`, `BRANCH`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `Image_Name`) VALUES "
                . "(null,'$name','$date','$gender','$branch','$address','','','','$email','$phone','$image_name')")) {
    $result = mysql_query("SELECT * FROM `student` WHERE `StudentID`=(SELECT max(StudentID) from student)");

    $row = mysql_fetch_array($result);
    $u = $row['StudentID'];
    if (mysql_query("INSERT INTO `login`(`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES (null,'$uname','$pass1','user','$u')")) {
        echo 'Success';
    } else {
        echo 'Failure';
    }
} else {
    echo 'Failure';
}