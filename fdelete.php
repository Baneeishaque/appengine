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
$id = $_GET["id"];

$sql = "DELETE FROM `files` WHERE `id`=$id";

mysql_query($sql);
echo '<script>window.location="dfile.php"</script>';
