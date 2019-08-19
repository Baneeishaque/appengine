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
        print_nav('Feed');
        ?>
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
$sql="INSERT INTO `feedback`(`Title`, `Message`) VALUES ('$Title','$Message')";
//echo $sql;
                                mysql_query($sql)or die(mysql_error());
					
                                echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';
                            }
        ?>
		
							
							<form action="g_feedback.php" method="get" class="form-horizontal">
							<legend>Feedy</legend>
									
									
									
			
									<div class="control-group">
										<label for="select" class="control-label">Title</label>
										<div class="controls">
                                                                                    <input name="Title" id="basictext" class='span9 input-square' rows="6" type="text">
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