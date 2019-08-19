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
include_once 'topbar3.php';
?>

<div class="main">
	<div class="container-fluid">
				<?php
include_once 'nav3.php';
?>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						
						<div class="box-content">
						
						<?php
						
        if (isset($_GET['Dept'])) {
                                // Action to be performed
                                require('config.php');


                                $Dept = mysql_escape_string($_GET['Dept']);

                                $Title = mysql_escape_string($_GET['Title']);
                                $Message = mysql_escape_string($_GET['Message']);

                                mysql_query("INSERT INTO `notification`(`NotificationID`,  `Dept`, `Title`, `Message`) VALUES (NULL,'$Dept','$Title','$Message')")or die(mysql_error());

                                echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';
                            }
        ?>
		
							
							<form action="g_notification.php" method="get" class="form-horizontal">
							<legend>Notify</legend>
									
									
									
									
									<div class="control-group">
										<label for="select" class="control-label">Branch</label>
										<div class="controls">
											<select name="Dept" id="select">
											<option value="General">General</option>
												<option value="Automobile">Automobile Engineering</option>
                                            <option value="Civil">Civil Engineering</option>

                                            <option value="Computer">Computer Engineering</option>
                                            <option value="Elactrical">Electrical Engineering</option>
                                            <option value="Electronics">Electronics Engineering</option>
                                            <option value="Mechanical">Mechanical Engineering</option>
											</select>
										</div>
									</div>
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