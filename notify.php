<?php

require_once 'config.php';


$result = mysql_query("SELECT * FROM Notification WHERE Dept='General' ORDER BY NotificationID DESC");

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