
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
					<div class="box-head">
						<h3>Profile</h3>
					</div>
					<div class="box-content">
					 <?php
        session_start();
        require_once 'config.php';
        $u = $_SESSION["user_id"];
      

        $result = mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");

        $row = mysql_fetch_array($result);
		echo'
						<div class="cl">
							<div class="pull-left">
								<h3>'.$row['NAME'].'</h3>
								<img src="profile_images/'.$row['Image_Name'].'" alt="">
							</div>
							
						</div>
						<br/>
						<table class="table table-striped table-detail">
									<tr>
										<th>Username: </th>
										<td>username</td>
									</tr>
									<tr>
										<th>DOB:</th>
										<td>
											'.$row['DOB'].'
										</td>
									</tr>
									<tr>
										<th>Sex:</th>
										<td>
											'.$row['SEX'].'
										</td>
									</tr>
									<tr>
										<th>Branch:</th>
										<td>
											'.$row['BRANCH'].'
										</td>
									</tr>
									<tr>
										<th>Address:</th>
										<td>
											'.$row['ADDRESS'].'
										</td>
									</tr>
									<tr>
										<th>City:</th>
										<td>
											'.$row['CITY'].'
										</td>
									</tr>
									<tr>
										<th>State:</th>
										<td>
											'.$row['STATE'].'
										</td>
									</tr>
									<tr>
										<th>Pin:</th>
										<td>
											'.$row['PIN'].'
										</td>
									</tr>
									<tr>
										<th>Email:</th>
										<td>
											'.$row['EMAIL'].'
										</td>
									</tr>
									<tr>
										<th>Phone:</th>
										<td>
											'.$row['PHNNO'].'
										</td>
									</tr>
									
									
								</table>';
						?>
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