<marquee scrolldelay="200" behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="185">
    <?php
    require_once 'config.php';


    $result = mysql_query("SELECT * FROM `Notification` where Dept='General'");

    while ($row = mysql_fetch_array($result)) {



        echo $row['Message'];


        echo '<br> <br/>';
    }
    ?>
</marquee>