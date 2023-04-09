<?php
    include 'server/connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_telepon = $_POST['no_telepon'];

    $query = "INSERT INTO admin VALUES ('','$username','$email','$password','$no_telepon')";
    mysqli_query($conn, $query);
    header("location: register.html");
?>