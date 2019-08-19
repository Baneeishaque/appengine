
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
        include_once 'topbar.php';
        ?>

        <div class="main">
            <div class="container-fluid">

                <div class="content">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">

                                <div class="box-content">




                                    <?php
//echo $_POST['name'];
//$image_name = $_FILES['image']['name'];
//echo $image_name;

                                    if (isset($_POST['name'])) {
                                        require_once 'config.php';
                                        $email = $_POST['email1'];
                                        $email2 = $_POST['email2'];
                                        $pass1 = $_POST['pass1'];
                                        $pass2 = $_POST['pass2'];

                                        if ($email == $email2) {

                                            if ($pass1 == $pass2) {
                                                $name = mysql_escape_string($_POST['name']);
                                                $date = mysql_escape_string($_POST['date']);
                                                $gender = mysql_escape_string($_POST['sex']);
                                                $branch = mysql_escape_string($_POST['branch']);
                                                $address = mysql_escape_string($_POST['address']);
                                                $state = mysql_escape_string($_POST['state']);
                                                $city = mysql_escape_string($_POST['city']);
                                                $pin = mysql_escape_string($_POST['pin']);
                                                $phone = mysql_escape_string($_POST['phone']);
                                                $image_name = $_FILES['image']['name'];

                                                $uname = mysql_escape_string($_POST['uname']);






                                                $uploaddir = 'profile_images/';
                                                $uploadfile = $uploaddir . basename($_FILES['image']['name']);

                                                if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
                                                    echo '<div class="alert alert-info alert-block">
              <a class="close" data-dismiss="alert" href="">×</a>
              <h4 class="alert-heading">Information!</h4>
              Upload Failure...</div>
              ';
                                                } else {

                                                    if (mysql_query("INSERT INTO `student`(`StudentID`, `NAME`, `DOB`, `SEX`, `BRANCH`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `Image_Name`) VALUES "
                                                                    . "(null,'$name','$date','$gender','$branch','$address','$state','$city','$pin','$email','$phone','$image_name')")) {
                                                        $result = mysql_query("SELECT * FROM `student` WHERE `StudentID`=(SELECT max(StudentID) from student)");

                                                        $row = mysql_fetch_array($result);
                                                        $u = $row['StudentID'];
                                                        if (mysql_query("INSERT INTO `login`(`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES (null,'$uname','$pass1','user','$u')")) {
                                                            echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								Success...
							</div>
				';
                                                        } else {
                                                            echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								DB Insertion Failure...</div>
				';
                                                        }
                                                    } else {
                                                        echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								DB Insertion Failure...</div>
				';
                                                    }
                                                }
                                            } else {
                                                echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								Unmatched Passcodes...</div>
				';
                                            }
                                        } else {

                                            echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								Unmatched Emails...</div>
				';
                                        }
                                    }
                                    ?>


                                    <form action="registration.php" enctype="multipart/form-data" method="POST" class="form-horizontal">
                                        <legend>Registration</legend>

                                        <div class="control-group">
                                            <label for="basic" class="control-label">Name</label>
                                            <div class="controls">
                                                <input type="text" name="name" id="basic" class='input-square'>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">Date</label>
                                            <div class="controls">
                                                <input type="text" name="date" id="basicround">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="select" class="control-label">Sex</label>
                                            <div class="controls">
                                                <select name="sex" id="select">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="select" class="control-label">Branch</label>
                                            <div class="controls">
                                                <select name="branch" id="select">
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
                                            <label for="basictext" class="control-label">Address</label>
                                            <div class="controls">
                                                <textarea name="address" id="basictext" class='span9 input-square' rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basic" class="control-label">City</label>
                                            <div class="controls">
                                                <input type="text" name="city" id="basic" class='input-square'>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">State</label>
                                            <div class="controls">
                                                <input type="text" name="state" id="basicround">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basic" class="control-label">Pin</label>
                                            <div class="controls">
                                                <input type="text" name="pin" id="basic" class='input-square'>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">Email</label>
                                            <div class="controls">
                                                <input type="text" name="email1" id="basicround">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basic" class="control-label">Confirm Email</label>
                                            <div class="controls">
                                                <input type="text" name="email2" id="basic" class='input-square'>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">Phone</label>
                                            <div class="controls">
                                                <input type="text" name="phone" id="basicround">
                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label for="file" class="control-label">Photograph</label>
                                            <div class="controls">
                                                <input type="file" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">Username</label>
                                            <div class="controls">
                                                <input type="text" name="uname" id="basicround">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basic" class="control-label">Passcode</label>
                                            <div class="controls">
                                                <input type="text" name="pass1" id="basic" class='input-square'>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="basicround" class="control-label">Confirm Passcode</label>
                                            <div class="controls">
                                                <input type="text" name="pass2" id="basicround">
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button class="btn btn-primary" type="submit">Submit</button>

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
</html>