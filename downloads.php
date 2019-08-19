
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
                print_nav('Down');
                ?>
                <div class="content">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>Study Note Downloads</h3>

                                </div>
                                <div class="box-content box-nomargin">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <?php
                                            require_once 'config.php';

                                            $department = $_GET['department'];

                                            $result2 = mysql_query("SELECT DISTINCT `Type` FROM `deptfiles` where department='$department' AND status='OK'");
                                            while ($row2 = mysql_fetch_array($result2)) {

                                                echo "<table class='table table-striped table-bordered'>
											<thead>
												<tr>
													<th>" . $row2['Type'] . " Files</th>
													
												</tr>
											</thead>
											<thead>
												<tr>
													<th>File Name</th>
													<th>Provider</th>
													<th></th>
													
												</tr>
											</thead>
											<tbody>";
                                                $ty = $row2['Type'];
                                                $result = mysql_query("SELECT `Faculty_ID`, `FileName` FROM `deptfiles` where department='$department' AND status='OK' AND `Type`='$ty'");
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo" <tr>
													<td>" . $row['FileName'] . "</td>
													<td>" . $row['Faculty_ID'] . "</td>
													<td><a href=\"notes/" . $row['FileName'] . "\"><button class=\"btn btn-large btn-round\">Download It...</button></a></td>
													
												</tr>";
                                                }
                                                echo '                                                        </table>'
                                                . '<br/><br/>';
                                            }
                                            echo "</tbody>
										</table>";
                                            ?>

                                        </div>

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