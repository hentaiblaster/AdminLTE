<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == '' || $password == '') {
    echo "<script>
    alert('กรุณากรอก Username หรือ password');
    location.href='login.php';
    </script>";
} else {

    require 'connect.php';

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $num = $result->num_rows;
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    if ($num == 0) {
        echo "<script>alert('Username or password invalid');
    location.href='login.php'
    </script>";
    } else {
        $_SESSION['username'] = $row['username'];
        $_SESSION['fullname'] = $row['fullname'];
        header('location:dist/');
    }
}
