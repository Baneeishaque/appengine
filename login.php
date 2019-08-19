<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php
        include_once 'title.php';
        ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/login.css">
</head>
<body class='login_body'>
	
<div class="wrap"> 
  <h2>Engine App</h2>
  <h4>Welcome to the login page</h4>
  <form action="login.php" method="post" class="validate">
    <?php
		require_once 'config.php';
                            if (isset($_POST['submit'])) {
                                $uname = mysql_escape_string($_POST['uname']);
                                $pass = mysql_escape_string($_POST['pass']);
                                $result = mysql_query("SELECT `user_id`,`USERNAME`, `PASSWORD`, `Role` FROM `login` WHERE `USERNAME`='$uname' and `PASSWORD`='$pass' ");
                                
								$row = mysql_fetch_array($result);
                                $a = $row['USERNAME'];
                                if ($a == null) {

                                    echo '<div class="alert alert-error">
			<strong>Error!</strong> There is no person like that
		</div>';
                                } else {
                                    $a = $row['Role'];
                                    if ($a == 'user') {
                                        $uid=$row['user_id'];
                                        $result = mysql_query("SELECT status FROM `student` WHERE `StudentID`='$uid'");
                                     
										$row = mysql_fetch_array($result);
                                        $status = $row['status'];
                                        
                                        if($status=='Not OK')
                                        {
                                           
									echo '<div class="alert alert-error">
			<strong>Error!</strong> Not verified by the admin...
		</div>';
                                        }
                                        else
                                        {
                                        session_start();
                                        $_SESSION["user_id"] = $uid;
                                        
                                         
                                         
                                        header("Location: student_home.php"); /* Redirect browser */
                                        exit();
                                        }
                                    } 
                                         else {
                                            if ($a == 'admin') {
                                                session_start();
                                                $_SESSION["user_id"] = $row['user_id'];
                                                header("Location: admin_view_feedback.php"); /* Redirect browser */
                                                exit();
                                            } else {
                                               
												echo '<div class="alert alert-error">
			<strong>Error!</strong> Try Again...<br/>Reason : '.mysql_error().'
		</div>';
												
                                            }
                                        }
                                    
                                }
                            }
		?>
    <div class="login"> 
      <div class="email"> 
        <label for="user">Username</label>
        <div class="email-input">
          <div class="control-group">
            <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
              <input type="text" id="user" name="uname" class="{required:true}">
            </div>
          </div>
        </div>
      </div>
      <div class="pw"> 
        <label for="pw">Passcode</label>
        <div class="pw-input">
          <div class="control-group">
            <div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span>
              <input type="password" id="pw" name="pass" class='{required:true}'>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="submit"> 
      <button class="btn btn-red5" type="submit" name="submit">Login</button>
    </div>
  </form>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/error.js"></script>
</body>


</html>