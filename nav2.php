<?php

function print_nav($active_tab) {
    echo '<div class="navi">
    <ul class=\'main-nav\'>

<li ';
    if ($active_tab == 'Home') {
        echo 'class=\'active\'';
    }
    echo '>
    <a href="student_home.php" class=\'light\'>
                <div class="ico"><i class="icon-home icon-white"></i></div>
                Home

            </a>
        </li>
        
<li ';
    if ($active_tab == 'Chat') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="chat_update.php?id=0" class=\'light\'>
                <div class="ico"><i class="icon-inbox icon-white"></i></div>
                Chat

            </a>
        </li>
        
<li ';
    if ($active_tab == 'Forum') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="blogaddteach.php" class=\'light\'>
                <div class="ico"><i class="icon-edit icon-white"></i></div>
                Share Thoughts

            </a>
        </li>

       

        <li ';
    if ($active_tab == 'Up') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="Uploadfile.php" class=\'light\'>
                <div class="ico"><i class="icon-upload icon-white"></i></div>
                Upload File

            </a>
        </li>
        
<li ';
    if ($active_tab == 'File') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="dfile.php" class=\'light\'>
                <div class="ico"><i class="icon-comment icon-white"></i></div>
                My Files

            </a>
        </li>
        
<li ';
    if ($active_tab == 'Mem') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="teachfriendlist.php" class=\'light\'>
                <div class="ico"><i class="icon-user icon-white"></i></div>
                Members

            </a>
        </li>
        
        <li ';
    if ($active_tab == 'Pro') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="teachprofile.php" class=\'light\'>
                <div class="ico"><i class="icon-user icon-white"></i></div>
                Profile

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
                    <a href="sdownloads.php?department=General">
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
                    <a href="sdownloads.php?department=Computer">
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
                    <a href="sdownloads.php?department=Civil">
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
                    <a href="sdownloads.php?department=Automobile">
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
                    <a href="sdownloads.php?department=Mechanical">
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
                    <a href="sdownloads.php?department=Electrical">
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
                    <a href="sdownloads.php?department=Electronics">
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
            <a href="snotif.php" class=\'light\'>
                <div class="ico"><i class="icon-info-sign icon-white"></i></div>
                Notifications

            </a>
        </li>
        
<li ';
    
    
    if ($active_tab == 'Block') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="blockedlist.php" class=\'light\'>
                <div class="ico"><i class="icon-comment icon-white"></i></div>
                Blocked Contacts

            </a>
        </li>
        
 <li ';
    if ($active_tab == 'Feed') {
        echo 'class=\'active\'';
    }
    echo '>
            <a href="g_feedback.php" class=\'light\'>
                <div class="ico"><i class="icon-comment icon-white"></i></div>
                Give Feedback

            </a>
        </li>
        


    </ul>
</div>';
}
?>
