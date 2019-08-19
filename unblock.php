<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
require_once('dbconnect.php');
$uid = $_SESSION["user_id"];
db_connect();
$partner2 = $_GET["id"];

$sql = "DELETE FROM `block` WHERE `partner1`=$uid AND `partner2`=$partner2";

mysql_query($sql);
echo '<script>window.location="blockedlist.php"</script>';
