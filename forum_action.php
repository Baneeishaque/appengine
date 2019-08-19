<?php

session_start();

include_once 'config.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $forum_id = $_GET['forum_id'];
    $uid = $_SESSION["user_id"];
    

    switch ($action) {
        case 'like_plus' : echo 'like+';
            mysql_query("INSERT INTO `liked`(`forum_id`, `user_id`) VALUES ($forum_id,$uid)");
            header("Location: student_home.php"); /* Redirect browser */
            exit();
            break;
        case 'like_minus' : echo 'like-';
            mysql_query("DELETE FROM `liked` WHERE `forum_id`=$forum_id AND `user_id`=$uid");
            header("Location: student_home.php"); /* Redirect browser */
            exit();
            break;
        case 'dislike_plus' : echo 'dislike+';
            mysql_query("INSERT INTO `disliked`(`forum_id`, `user_id`) VALUES ($forum_id,$uid)")or die('Query failed: ' . mysql_error());
            header("Location: student_home.php"); /* Redirect browser */
            exit();
            break;
        case 'dislike_minus' : echo 'dislike-';
            mysql_query("DELETE FROM `disliked` WHERE `forum_id`=$forum_id AND `user_id`=$uid");
            header("Location: student_home.php"); /* Redirect browser */
            exit();
    }
}