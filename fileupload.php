<?php
session_start();
    include 'connection.php';
$uid = $_SESSION["user_id"];
    $tittle=$_POST['basic'];
    $date=date("d/m/Y");
    $file=$_FILES['file']['name'];
    
    
       $uploaddir = 'uploads/';
       $uploadfile = $uploaddir . basename($_FILES['file']['name']);
      
       if (!(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))) {
                                 echo '<script>

					alert("Upload Failure");

				</script>
				';
        }
        else{ 
            $sql="INSERT INTO `files`(`tittle`, `date`, `filename`,`provider`) VALUES ('$tittle','$date','$file',$uid)";
            $conn->query($sql);
          
		   echo '<script>alert("Congratulation...")</script> ';
 echo '<script>window.location="Uploadfile.php"</script>';
        }
       
       
     
?>  