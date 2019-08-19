<?php
session_start();
include_once 'security_check.php';
    ?>
<html lang="en">

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
        print_nav('Home');
        ?>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">

                            <div class="content">
                                <div class="row-fluid">
                                    <div class="span12">

                                        <?php
                                        include 'connection.php';
                                        $sql = "SELECT * FROM forum  order by id desc";

                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            //$fid= $row['id'];
                                            echo '<div class="box">
					<div class="box-head">';
                                            echo'<h3>';
                                            echo $row['date'];
                                            echo" : ";
                                            echo '</h3>';
                                            
                                            //echo $ptype;
                                            
                                                $provider = $row['provider'];
                                                //echo $provider;
                                                $sqlpr = "SELECT NAME from student where StudentID=$provider";
                                                //echo $sqlpr;
                                                $resultpr = $conn->query($sqlpr);
                                                $rowpr = $resultpr->fetch_assoc();

                                                echo '<h3>';
                                                echo $rowpr['NAME'];
                                                echo '</h3>';
                                           

                                            echo'</div>
					<div class="box-content">
						<img src="forum/';
                                            echo $row["image"];
                                            echo'" alt="">
                                                ';
                                            echo $row["description"];
                                            echo'
                                                
                                                
					</div>';

                                            $uid = $_SESSION["user_id"];

                                            include 'config.php';
                                            $sqllike = "SELECT `id` FROM `liked` WHERE `forum_id`=" . $row['id'] . " AND `user_id`=$uid";
                                            $resultlike = mysql_query($sqllike) or die('Query failed: ' . mysql_error());
                                            $rowlike = mysql_fetch_array($resultlike);
                                            $a = $rowlike['id'];
                                            if ($a == null) {


                                                echo '&nbsp&nbsp&nbsp&nbsp<a href="forum_action.php?action=like_plus&forum_id=';
                                                echo $row['id'];
                                                echo '">Like</a> ';
                                            } else {


                                                echo '&nbsp&nbsp&nbsp&nbsp<a href="forum_action.php?action=like_minus&forum_id=';
                                                echo $row['id'];
                                                echo '">Liked</a> ';
                                            }



                                            $sqllikecount = "select count(id) from liked where forum_id=" . $row["id"];
                                            //echo $sqllikecount;
                                            $resultlikecount = mysql_query($sqllikecount) or die('Query failed: ' . mysql_error());
                                            while ($linelikecount = mysql_fetch_array($resultlikecount, MYSQL_ASSOC)) {
                                                echo $linelikecount["count(id)"];
                                            } //echo '33';
                                            

                                            $sqldislike = "SELECT `id` FROM `disliked` WHERE `forum_id`=" . $row['id'] . " AND `user_id`=$uid";
                                            //echo $sqldislike;
                                            $resultdislike = mysql_query($sqldislike) or die('Query failed: ' . mysql_error());
                                            $rowdislike = mysql_fetch_array($resultdislike);
                                            $a = $rowdislike['id'];

                                            if ($a == null) {


                                                echo '&nbsp&nbsp&nbsp<a href="forum_action.php?action=dislike_plus&forum_id=';
                                                echo $row['id'];
                                                echo '">DisLike</a> ';
                                            } else {


                                                echo '&nbsp&nbsp&nbsp<a href="forum_action.php?action=dislike_minus&forum_id=';
                                                echo $row['id'];
                                                echo '">DisLiked</a> ';
                                            }

                                            include 'config.php';
                                            $sqldislikecount = "select count(id) from disliked where forum_id=" . $row["id"];
                                            //echo $sqllikecount;
                                            $resultdislikecount = mysql_query($sqldislikecount) or die('Query failed: ' . mysql_error());
                                            while ($linedislikecount = mysql_fetch_array($resultdislikecount, MYSQL_ASSOC)) {
                                                echo $linedislikecount["count(id)"];
                                            }
                                            //echo '33';
                                            // <a href=""><b>Comment</a>  2
				echo'</div>';
                                        }
                                        ?>

                                    </div>
                                </div>

                            </div>

                        </div>
				</div>
			</div>
			
			
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
</html>