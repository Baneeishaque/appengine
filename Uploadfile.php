<?php
session_start();
include_once 'security_check.php';
?>
<html lang="en">

<!-- Mirrored from www.eakroko.de/neat/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
<head>
<meta charset="utf-8">
<?php
        include_once 'title.php';
        ?>

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/uniform.default.css">
<link rel="stylesheet" href="css/bootstrap.datepicker.css">
<link rel="stylesheet" href="css/jquery.cleditor.css">
<link rel="stylesheet" href="css/jquery.plupload.queue.css">
<link rel="stylesheet" href="css/jquery.tagsinput.css">
<link rel="stylesheet" href="css/jquery.ui.plupload.css">
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="css/jquery.jgrowl.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>


 <?php
        include_once 'topbar2.php';
        ?>
</div><div class="main">
	<div class="container-fluid">
	<?php
                include_once 'nav2.php';
                print_nav('Up');
                ?>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head">
							<h3>Upload files</h3>
						</div>
						<div class="box-content">
							
							<form enctype="multipart/form-data" action="fileupload.php" method="POST" class="form-horizontal">
									
                                                                        
									<div class="control-group">
										<label for="basic" class="control-label">Tittle</label>
										<div class="controls">
											<input type="text" name="basic" id="basic" class='input-square' required="Enter Title">
										</div>
									</div>
									<div class="control-group">
										<label for="basicround" class="control-label">Date</label>
                                                                                <label for="basicround" class="control-label"><?php echo date("d/m/Y"); ?></label>
									</div>
                                                                        <div class="control-group">
								
                                                                            <label for="file2" class="control-label">File upload</label>
								
                                                                                <div class="controls"> <input type="file" 
                                                                                                              name="file" id="file2" class='uniform' required="Select File">
                                                                                </div>
                                                                            <br>
                                                                           <!-- <div class="control-group">
										<label for="basic" class="control-label">Upload permission</label>
										<div class="controls">
											<select name="type">
                            
                                                                        <option>Public</option>
                                                                        <option>Private</option>
                                                                        <option>Friends</option>
                                                                        
                                                                </select>       
										</div>
									</div> -->
                                                                        </div>
                                                                        <div class="form-actions">
										<button class="btn btn-primary" type="submit">Send</button>
										<input type="reset" class='btn btn-danger' value="reset">
									</div>
                                                            
				
								
			
									
									
							</form>
						</div>
					</div>
				</div>
			</div>
			
	</div>
</div>	
<script src="js/jquery.js"></script>
<script src="js/less.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/bootstrap.timepicker.js"></script>
<script src="js/bootstrap.datepicker.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/plupload/plupload.full.js"></script>
<script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.textareaCounter.plugin.js"></script>
<script src="js/ui.spinner.js"></script>
<script src="js/jquery.jgrowl_minimized.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bbq.js"></script>
<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
<script src="js/jquery.form.wizard-min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/custom.js"></script><script src="js/demo.js"></script>
</body>

<!-- Mirrored from www.eakroko.de/neat/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:20 GMT -->
</html>