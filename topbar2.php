<div class="topbar">
    <div class="container-fluid">
        <a href="student_home.php" class='company'>Engine App</a>
        
        <ul class='mini'>


            <li class='dropdown messageContainer'>
                <a href="#" class='dropdown-toggle' data-toggle='dropdown'>
                    <img src="img/icons/fugue/balloons-white.png" alt="">
                    Notifications

                </a>
                <ul class="dropdown-menu pull-right custom custom-dark">
                    <?php
                    include_once 'notify.php';
                    ?>

                </ul>
            </li>
            
            <li>
                <a href="logout.php">
                    <img src="img/icons/essen/16/business-contact.png" alt="">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>