<?php
session_start();
error_reporting(0);
?>

<!doctype html>
<html lang="en">

    <!-- Mirrored from www.eakroko.de/neat/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:24 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Chat</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/uniform.default.css">
        <link rel="stylesheet" href="css/style.css">

        <script type="text/javascript">

            var t = setInterval(function () {
                get_chat_msg()
            }, 5000);


            //
            // General Ajax Call
            //

            var oxmlHttp;
            var oxmlHttpSend;

            function get_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttp = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttp == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;

                }
                var url = "chat_recv_ajax.php";
                var strname = "noname";
                if (document.getElementById("txtname") != null)
                {

                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));

                    document.getElementById("txtname").readOnly = true;
                }
                url = url + "?re=" + strname;
                //window.location=url;
                oxmlHttp.onreadystatechange = get_chat_msg_result;
                oxmlHttp.open("GET", "chat_recv_ajax.php", true);
                oxmlHttp.send(null);
            }

            function get_chat_msg_result()
            {
                if (oxmlHttp.readyState == 4 || oxmlHttp.readyState == "complete")
                {
                    if (document.getElementById("DIV_CHAT") != null)
                    {
                        document.getElementById("DIV_CHAT").innerHTML = oxmlHttp.responseText;
                        oxmlHttp = null;
                    }
                    var scrollDiv = document.getElementById("DIV_CHAT");
                    scrollDiv.scrollTop = scrollDiv.scrollHeight;
                }
            }


            function set_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttpSend = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttpSend == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;
                }

                var url = "chat_send_ajax.php";
                var strname = "noname";
                var strmsg = "";
                if (document.getElementById("txtname") != null)
                {
                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));
                    document.getElementById("txtname").readOnly = true;
                }
                if (document.getElementById("txtmsg") != null)
                {
                    strmsg = document.getElementById("txtmsg").value;
                    document.getElementById("txtmsg").value = "";
                }

                url += "?receiver=" + strname + "&msg=" + strmsg;

                oxmlHttpSend.open("GET", url, true);
                oxmlHttpSend.send(null);
            }

            function reset_chat_msg()
            {


                document.getElementById("txtmsg").value = "";
            }



        </script>
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
				<a href="chat.php?id=0" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Chat
					
				</a>
			</li>
			
			
		</ul>
	</div>

                <div class="navi">
                    <ul class='main-nav'>
                        <li class='active'>
                            <a href="chat.php" class='light'>
                                <div class="ico"><i class=""></i></div>
                                Users

                            </a>
                        </li>


                        <?php
                        $u = $_SESSION["user_id"];
                        require_once 'config.php';
                        $result = mysql_query("SELECT * FROM `student` WHERE StudentID!=$u AND `Status`='OK'");
                       
                        while ($row = mysql_fetch_array($result)) {

							
							echo ' <li> <a href="chat.php?id='.$row['StudentID'].'" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>' . $row['NAME'] . ' </a>  </li>';
                        }
                        if ($u != 0) {

                            echo ' <li> <a href="chat.php?id=0" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>General </a>  </li>';
                        }
                        ?>





                    </ul>
                </div>

                <div class="content">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Messages</h3>
                                </div>
                                <div class="box-content">
                                    <ul class="messages" id="DIV_CHAT"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">

                                <div class="box-content">



<?php
require_once 'config.php';
$receiver = $_GET['id'];
echo ' <td style="width: 100px"><input id="txtname" style="width: 150px" type="text" name="name" maxlength="15" value="';
if ($receiver == 0) {
    echo $receiver . ' : General';
} else {
    $result = mysql_query("SELECT * FROM `student` WHERE `StudentID`='$receiver'");
    $row = mysql_fetch_array($result);
    echo $receiver . ' : ' . $row['NAME'];
}
echo '" disabled/></td>';
?>
                                    <input id="txtmsg" style="width: 350px" type="text" name="msg" /></td>

                                    <input type="button" class="btn btn-success" value="Send" onclick="set_chat_msg()"/></td>
                                    <input type="button" class="btn btn-danger" value="Reset" onclick="reset_chat_msg()"/></td>



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
        <script src="js/jquery.uniform.min.js"></script>
        <script src="js/bootstrap.timepicker.js"></script>
        <script src="js/bootstrap.datepicker.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/plupload/plupload.full.js"></script>
        <script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
        <script src="js/jquery.cleditor.min.js"></script>
        <script src="js/jquery.inputmask.min.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.textareaCounter.plugin.js"></script>
        <script src="js/ui.spinner.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/jquery.dataTables.bootstrap.js"></script>
        <script src="js/jquery.color.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.orderBars.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/custom.js"></script><script src="js/demo.js"></script>
    </body>

    <!-- Mirrored from www.eakroko.de/neat/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:24 GMT -->
</html>