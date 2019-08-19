<?php

function print_nav($active_tab) {
    
    echo '<div class="navi">
    <ul class=\'main-nav\'>


        <li ';
    if ($active_tab == 'Home') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="index.php" class=\'light\'>
                <div class="ico"><i class="icon-home icon-white"></i></div>
                Home

            </a>
        </li>
        <li ';
    if ($active_tab == 'Down') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="#" class=\'light toggle-collapsed\'>
                <div class="ico"><i class="icon-download icon-white"></i></div>
                Downloads
                <img src="img/toggle-subnav-down.png" alt="">
            </a>
            <ul class=\'collapsed-nav closed\'>
                <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'General') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=General">
                        General
                    </a>
                </li>
                <li';
    if (isset($_GET['department'])) {
        
        if ($_GET['department'] == 'Computer') {
            
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Computer">
                        Computer
                    </a>
                </li>
                <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'Civil') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Civil">
                        Civil
                    </a>
                </li>
                <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'Automobile') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Automobile">
                        Automobile
                    </a>
                </li>
                <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'Mechanical') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Mechanical">
                        Mechanical
                    </a>
                </li>
                <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'Electrical') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Electrical">
                        Electrical
                    </a>
                </li>
               <li';
    if (isset($_GET['department'])) {
        if ($_GET['department'] == 'Electronics') {
            echo ' class=\'active\'';
        }
    }
    echo '>
                    <a href="downloads.php?department=Electronics">
                        Electronics
                    </a>
                </li>
            </ul>
        </li>



        <li ';
    if ($active_tab == 'Notify') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="notif.php" class=\'light\'>
                <div class="ico"><i class="icon-info-sign icon-white"></i></div>
                Notifications

            </a>
        </li>




        <li ';
    if ($active_tab == 'Register') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="registration.php" class=\'light\'>
                <div class="ico"><i class="icon-user icon-white"></i></div>
                Registration

            </a>
        </li>

        <li ';
    if ($active_tab == 'Login') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="login.php" class=\'light\'>
                <div class="ico"><i class="icon-user icon-white"></i></div>
                Login

            </a>
        </li>

        <li ';
    if ($active_tab == 'About') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="" class=\'light\'>
                <div class="ico"><i class="icon-map-marker icon-white"></i></div>
                About Us

            </a>
        </li>
        <li ';
    if ($active_tab == 'Contact') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="" class=\'light\'>
                <div class="ico"><i class="icon-comment icon-white"></i></div>
                Contact Us

            </a>
        </li>



    </ul>
</div>';
}

?>
