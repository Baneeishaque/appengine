
<html lang="en">

<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="topbar">
	<div class="container-fluid">
		<a href="index.php" class='company'>Engine App</a>
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		<ul class='mini'>
			
		
			<li class='dropdown messageContainer'>
				<a href="#" class='dropdown-toggle' data-toggle='dropdown'>
					<img src="img/icons/fugue/balloons-white.png" alt="">
					Notifications
					
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
				 <?php
      
        
        require_once 'config.php';
    

$result=mysql_query("SELECT * FROM Notification WHERE Dept='General' ORDER BY NotificationID DESC");

while ($row = mysql_fetch_array($result)) {

                                  echo '<li class="custom">
						<div class="title">
							';
							echo $row['Title'];
							echo '
							<span>';
							echo $row['Message'];
							echo '</span>
						</div>
						
					</li>';
                               
                                }
								?>
					
				</ul>
			</li>
			
			<li>
				<a href="index.php">
					<img src="img/icons/essen/16/business-contact.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="main">
	<div class="container-fluid">
	<div class="navi">
		<ul class='main-nav'>
			
			
			
			<li class='active'>
				<a href="g_feedback.php" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Give Feedback
					
				</a>
			</li>
			
			<li>
				<a href="admin_files.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Upload File
					
				</a>
			</li>
			<li>
				<a href="admin_users.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Profile
					
				</a>
			</li>
			<li>
				<a href="forum.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Forum
					
				</a>
			</li>
			
			<li>
				<a href="chat.php?id=0" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Chat
					
				</a>
			</li>
			
			
		</ul>
	</div>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head tabs">
							<h3>Feedbacks</h3>
							
						</div>
						<div class="box-content box-nomargin">
							<div class="tab-content">
									<div class="tab-pane active" id="basic">
									
										<table class='table table-striped table-bordered'>
											<thead>
												<tr>
												<th>Article</th>
                                        <th>Subject</th>

                                        <th>Author</th>

                                        <th ></th>
                                        <th ></th>
                                        <th ></th>
													
												</tr>
											</thead>
											<tbody>
											
											<?php
                                            
                                            require_once 'config.php';
											session_start();
                                           $u = $_SESSION["user_id"];
                                           $result = mysql_query("select Forum_ID,Subject,Question,Asker_ID from QForum order by Forum_ID DESC");

                                    while ($row = mysql_fetch_array($result)) {

                                              
															
															echo "<tr>
													<td>". $row['Question']."</td>
													<td>".$row['Subject']."</td>
													<td>".$row['Asker_ID']."</td>
													<td><a href=\"answer.php?id=".$row['Forum_ID']."\">Comment It...</a></td><td>";
													$sql = "select count(id) from liked where forum_id=" . $row['Forum_ID'];
                                        $result2 = mysql_query($sql) or die('Query failed: ' . mysql_error());
                                        while ($line2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
                                            echo $line2["count(id)"];
                                        }
                                        echo '&nbsp';
                                        $sql = "SELECT `id` FROM `liked` WHERE `forum_id`=" . $row['Forum_ID'] . " AND `user_id`=$u";
                                        $result3 = mysql_query($sql) or die('Query failed: ' . mysql_error());
                                        $row3 = mysql_fetch_array($result3);
                                        $a = $row3['id'];
                                        if ($a == null) {

                                            echo '<a href = "forum_action.php?action=like_plus&forum_id=';
                                            echo $row['Forum_ID'];
                                            echo '">Like</a>';
                                        } else {
                                            echo '<a href = "forum_action.php?action=like_minus&forum_id=';
                                            echo $row['Forum_ID'];
                                            echo '">Liked</a>';
                                        }

                                        echo '</td><td>';


                                        $sql = "select count(id) from disliked where forum_id=" . $row['Forum_ID'];
                                        $result2 = mysql_query($sql) or die('Query failed: ' . mysql_error());
                                        while ($line2 = mysql_fetch_array($result2, MYSQL_ASSOC)) {
                                            echo $line2["count(id)"];
                                        }
                                        echo '&nbsp';
                                        $sql = "SELECT `id` FROM `disliked` WHERE `forum_id`=" . $row['Forum_ID'] . " AND `user_id`=$u";
                                        $result3 = mysql_query($sql) or die('Query failed: ' . mysql_error());
                                        $row3 = mysql_fetch_array($result3);
                                        $a = $row3['id'];
                                        if ($a == null) {

                                            echo '<a href = "forum_action.php?action=dislike_plus&forum_id=';
                                            echo $row['Forum_ID'];
                                            echo '">Dislike</a>';
                                        } else {
                                            echo '<a href = "forum_action.php?action=dislike_minus&forum_id=';
                                            echo $row['Forum_ID'];
                                            echo '">Disliked</a>';
                                        }
                                        
                                        echo "</td>
													
													
												</tr>";
                                               
                                            }
											?>
												
												
											</tbody>
										</table>
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