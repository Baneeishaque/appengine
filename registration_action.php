<?php
echo $_POST['name'];
$image_name = $_FILES['image']['name'];
echo $image_name;

if (isset($_GET['name'])) {
    require_once 'config.php';
    $email = $_GET['email1'];
    $email2 = $_GET['email2'];
    $pass1 = $_GET['pass1'];
    $pass2 = $_GET['pass2'];

    if ($email == $email2) {

        if ($pass1 == $pass2) {
            $name = mysql_escape_string($_GET['name']);
            $date = mysql_escape_string($_GET['date']);
            $gender = mysql_escape_string($_GET['sex']);
            $branch = mysql_escape_string($_GET['branch']);
            $address = mysql_escape_string($_GET['address']);
            $state = mysql_escape_string($_GET['state']);
            $city = mysql_escape_string($_GET['city']);
            $pin = mysql_escape_string($_GET['pin']);
            $phone = mysql_escape_string($_GET['phone']);
            $image_name = $_FILES['image']['name'];

            $uname = mysql_escape_string($_GET['uname']);






            $uploaddir = 'profile_images/';
            /* $uploadfile = $uploaddir . basename($_FILES['image']['name']);

              if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
              echo '<div class="alert alert-info alert-block">
              <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Information!</h4>
              The input-elements have square corners. Of course the bootstrap rounded-corners style is also available!
              </div>
              ';
              } else { */

            if (mysql_query("INSERT INTO `student`(`StudentID`, `NAME`, `DOB`, `SEX`, `BRANCH`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `Image_Name`) VALUES "
                            . "(null,'$name','$date','$gender','$branch','$address','$state','$city','$pin','$email','$phone','')")) {
                $result = mysql_query("SELECT * FROM `student` WHERE `StudentID`=(SELECT max(StudentID) from student)");

                $row = mysql_fetch_array($result);
                $u = $row['StudentID'];
                if (mysql_query("INSERT INTO `login`(`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES (null,'$uname','$pass1','user','$u')")) {
                    echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								Success...
							</div>
				';
                } else {
                    echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								The input-elements have square corners. Of course the bootstrap rounded-corners style is also available!
							</div>
				';
                }
            } else {
                echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								The input-elements have square corners. Of course the bootstrap rounded-corners style is also available!
							</div>
				';
            }
            // }
        } else {
            echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								The input-elements have square corners. Of course the bootstrap rounded-corners style is also available!
							</div>
				';
        }
    } else {

        echo '<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
  								<h4 class="alert-heading">Information!</h4>
  								The input-elements have square corners. Of course the bootstrap rounded-corners style is also available!
							</div>
				';
    }
}
?>