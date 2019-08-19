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
        include_once 'topbar.php';
        ?>

        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'navi.php';
                print_nav('Home');
                ?>
                <div class="content">

                    <div class="row-fluid no-margin">
                        <div class="span12">

                            <ul class="quicktasks">
                                <li>
                                    <a href="#">
                                        <img src="img/icons/essen/32/order-149.png" alt="">
                                        <span>Check orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icons/essen/32/calendar.png" alt="">
                                        <span>Upcoming events</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icons/essen/32/basket.png" alt="">
                                        <span>New product</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icons/essen/32/communication.png" alt="">
                                        <span>Support tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icons/essen/32/hire-me.png" alt="">
                                        <span>Approve user</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="row-fluid force-margin">
                                <div class="span12">
                                    <div class="box">
                                        <div class="box-head tabs">
                                            <h3>Tabs</h3>

                                        </div>
                                        <div class="box-content">
                                            <ul class="gallery">
                                                <?php
                                                include 'connection.php';
                                                            $sql = "SELECT * FROM forum LIMIT 0,8";
                                                            $result = $conn->query($sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo '<li>
                                                                <a href="forum/' . $row["image"] . '" class="preview fancy"><img src="forum/' . $row["image"] . '" width="100px" height="100px" alt=""></a>
                                                            </li>';
                                                            }
                                                ?>
                                                
                                               

                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="span6">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>Tabs</h3>

                                </div>
                                <div class="box-content">
                                    <?php
                                                    include_once 'marquee.php';
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                
                                <div class="box-head">
							<h3>Fugue icons in head</h3>
							
						</div>
						<div class="box-content">
							All head buttons use fugue icons - you have more than 3100+ icons for choice!
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