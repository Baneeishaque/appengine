<?php
session_start();
include_once 'security_check.php';
?>
<html lang="en">

    <!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:11:59 GMT -->
    <head>
        <meta charset="utf-8">
        <?php
        include_once 'title.php';
        ?>

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php
   
        include_once 'topbar2.php';
        ?>
        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'nav2.php';
                print_nav('File');
                ?>
                <div class="content">
                    <br>		









                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>My Files</h3>

                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <table class='table table-striped table-bordered'>
                                                <thead>
                                                    <tr>
                                                        <th>File name</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <?php
                                                    include 'connection.php';


                                                    $uid = $_SESSION["user_id"];
                                                    $sql = "SELECT * FROM files where provider=$uid and status=1 order by id desc ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo'<tr>
													<td>';
                                                        echo $row["filename"];
                                                        echo '</td>
													<td> <a href="uploads/';
                                                        echo $row["filename"];
                                                        echo'"> <button class="btn btn-success" >Download</button></a>  &nbsp <a href="fdelete.php?id='.$row["id"].'"> <button class="btn btn-danger">Delete</button> </a> &nbsp  &nbsp';
                                                        //<select name="department">
//                                                                                <option>Only me</option>
//                                                                                <option>Friends only</option>
//                                                                                <option>Public</option></td>
//													
                                                        echo '</tr>';
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box">





                                        </div>	
                                    </div>

                                </div>                                            
                                <script src="js/jquery.js"></script>
                                <script src="js/less.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                <script src="js/jquery.peity.js"></script>
                                <script src="js/jquery.fancybox.js"></script>
                                <script src="js/jquery.flot.js"></script>
                                <script src="js/jquery.color.js"></script>
                                <script src="js/jquery.flot.resize.js"></script>
                                <script src="js/jquery.cookie.js"></script>
                                <script src="js/jquery.cookie.js"></script>
                                <script src="js/custom.js"></script><script src="js/demo.js"></script>
                                </body>

                                <!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
                                </html><!DOCTYPE html>
                                <!--
                                To change this license header, choose License Headers in Project Properties.
                                To change this template file, choose Tools | Templates
                                and open the template in the editor.
                                -->
                                <html>
                                    <head>
                                        <title>TODO supply a title</title>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    </head>

                                </html>
