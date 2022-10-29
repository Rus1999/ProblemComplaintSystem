<?php
    include("./t_connect.php");

    $Person_ID = "null";
    $Person_fname = $_POST['Person_fname'];
    $Person_lname = $_POST['Person_lname'];
    $Person_phonenumber = $_POST['Person_phonenumber'];
    $Person_email = $_POST['Person_email'];
    $Person_username = $_POST['Person_username'];
    $Person_password = $_POST['Person_password'];
    $Person_status = $_POST['Person_status'];
    $Person_rights = 1;

    $sql = "insert into person values($Person_ID, '$Person_fname', '$Person_lname', 
    '$Person_phonenumber', '$Person_email', '$Person_username', '$Person_password', $Person_status, $Person_rights);";
    $conn->query($sql);
    
    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_login.php">