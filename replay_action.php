<?php
session_start();

$id=$_SESSION["feedback_id"];;
$message=$_GET['message'];
require_once 'config.php';
if(mysql_query("INSERT INTO `replay`( `message`, `feedbackID`) VALUES ('$message',$id)"))
{
	echo 'inserted';
	  echo '<script>

					alert("Your Data Was Uploaded");
					window.location="admin_view_feedback.php";

				</script>
				';
	//header("Location: admin_view_feedback.php"); /* Redirect browser */
      //                                         exit();
}
else
{
	echo 'error';
}
?>