<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'it68-2');
if (mysqli_connect_errno()) {
    echo "การเชื่อมต่อล้มเหลว: " . mysqli_connect_error();
    exit();
}
?>
