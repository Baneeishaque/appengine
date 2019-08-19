
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
						<div class="box-head tabs">
							<h3>Feedbacks</h3>
							
						</div>
						<div class="box-content box-nomargin">
							<div class="tab-content">
									<div class="tab-pane active" id="basic">
									
										<table class='table table-striped table-bordered'>
											<thead>
												<tr>
													<th>Title</th>
													<th>Message</th>
													<th>Replay</th>
													
												</tr>
											</thead>
											<tbody>
											
											<?php
                                            
                                            require_once 'config.php';
                                           
                                            $result = mysql_query("SELECT * FROM `feedback` ");
                                            while ($row = mysql_fetch_array($result)) {

                                              
															
															echo "<tr>
													<td>". $row['Title']."</td>
													<td>".$row['Message']."</td>
													<td><a href=\"replay.php?id=".$row['FeedBackID']."\"><button class=\"btn\">Replay It...</button></a></td>
													
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