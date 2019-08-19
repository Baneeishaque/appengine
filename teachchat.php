<?php
session_start();
include_once 'security_check.php';
?>
<!doctype html>
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


        <?php
        include_once 'topbar2.php';
        ?>


        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'nav2.php';
                print_nav('Chat');
                ?>


                <div class="navi">
                    <ul class='main-nav'>
                        <li class='active'>
                            <a class='light'>
                                <div class="ico"><i class=""></i></div>
                                Users

                            </a>
                        </li>


                        <?php
                        $u = $_SESSION["user_id"];
                        $receiver = $_GET["id"];
                        require_once 'config.php';

                        if ($receiver != 0) {

                            echo ' <li> <a href="chat_update.php?id=0" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>General </a>  </li>';
                        }

                        $result = mysql_query("SELECT * FROM `student` WHERE StudentID!=$u");
                        //echo "SELECT * FROM `student` WHERE `Status`='OK' AND StudentID!=$u";
                        while ($row = mysql_fetch_array($result)) {

                            $bsql = "SELECT * FROM `block` WHERE partner1=$u and partner2=" . $row['StudentID'];
                            $bresult = mysql_query($bsql);
                            $brow = mysql_fetch_array($bresult);
                            $bc = $brow["id"];
                            if ($bc == null) {
                                echo ' <li> <a href="chat_update.php?id=' . $row['StudentID'] . '" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                ' . $row['NAME'] . '

                                </a> </li>';
                            }
                        }
                        ?>





                    </ul>
                </div>

                <div class="content">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">

                                <div class="box-content">



<?php
require_once 'config.php';

$receiver = $_GET["id"];

echo ' <td style="width: 100px"><input id="txtname" style="width: 150px" type="text" name="name" maxlength="15" value="';
if ($receiver == 0) {
    echo $receiver . ' : General';
} else {
    $result = mysql_query("SELECT * FROM `student` WHERE `StudentID`='$receiver'");
    $row = mysql_fetch_array($result);
    $partner2 = $row['NAME'];

    echo $receiver . ' : ' . $partner2;
}
echo '" disabled/></td>';
?>
                                    <input id="txtmsg" style="width: 350px" type="text" name="msg" />

                                    <input type="button" class="btn btn-success" value="Send" onclick="set_chat_msg()"/>




                                </div>
                            </div>
                        </div>
                    </div>

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