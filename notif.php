
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
                print_nav('Notify');
                ?>
                <div class="content">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Accordion inline</h3>
                                </div>
                                <div class="box-content box-nomargin">
                                    <div class="accordion" id="accordion2">

                                        <?php
                                        require_once 'config.php';

                                        $i = 0;
                                        $result = mysql_query("SELECT * FROM Notification WHERE Dept='General' ORDER BY NotificationID DESC");

                                        while ($row = mysql_fetch_array($result)) {
                                            if($i==0)
                                            {
                                            echo '<div class="accordion-group">
					              <div class="accordion-heading">
					                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse' . $i . '">
					                  ' . $row['Title'] . '
					                </a>
					              </div>
					              <div id="collapse' . $i . '" class="accordion-body collapse in">
					                <div class="accordion-inner">
					                  ' . $row['Message'] . ' </div>
					              </div>
					            </div>';
                                            }
 else {
     echo '<div class="accordion-group">
					              <div class="accordion-heading">
					                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse' . $i . '">
					                  ' . $row['Title'] . '
					                </a>
					              </div>
					              <div id="collapse' . $i . '" class="accordion-body collapse">
					                <div class="accordion-inner">
					                  ' . $row['Message'] . ' </div>
					              </div>
					            </div>';
 }
                                        $i++;
                                        
                                        }
                                        
                                        ?>



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