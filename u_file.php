
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
				<a href="g_notification.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Forum
					
				</a>
			</li>
			
			<li>
				<a href="g_notification.php" class='light'>
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
						
						<div class="box-content">
						
						<?php
						
        if (isset($_GET['Title'])) {
                                // Action to be performed
                                require('config.php');


                                
                                $Title = mysql_escape_string($_GET['Title']);
                                $Message = mysql_escape_string($_GET['Message']);

                                mysql_query("INSERT INTO `feedback`(`Title`, `Message`) VALUES ('$Title','$Message')")or die(mysql_error());
					
                                echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';
                            }
        ?>
		
							
							<form action="g_feedback.php" method="get" class="form-horizontal">
							<legend>Feedy</legend>
									
									
									
			
									<div class="control-group">
										<label for="basic" class="control-label">Title</label>
										<div class="controls">
											<input type="text" name="Title" id="basic" class='input-square'>
										</div>
									</div>
									<div class="control-group">
										<label for="basictext" class="control-label">Message</label>
										<div class="controls">
											<textarea name="Message" id="basictext" class='span9 input-square' rows="6"></textarea>
										</div>
									</div>
									
									
									<div class="form-actions">
										<button class="btn btn-primary" type="submit">Post</button>
										
									</div>
							</form>
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