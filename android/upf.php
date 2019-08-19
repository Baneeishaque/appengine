
<?php

$uploaddir = '../notes/';
$uploadfile = $uploaddir . basename($_FILES['note']['name']);
$image_name = $_FILES['note']['name'];



if (!(move_uploaded_file($_FILES['note']['tmp_name'], $uploadfile))) {
    echo 'Failure';
} else {
    echo 'Success';
}
                       