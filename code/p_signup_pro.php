<?php
    include("./tem_connect.php");
    $Person_fname = $_POST['Person_fname'];
    $Person_lname = $_POST['Person_lname'];
    $Person_phonenumber = $_POST['Person_phonenumber'];
    $Person_email = $_POST['Person_email'];
    $Person_username = $_POST['Person_username'];
    $Person_password = $_POST['Person_password'];
    $Person_status = $_POST['Person_status'];

    $sql = "
        insert into Person values (null, '$Person_fname', '$Person_lname', '$Person_phonenumber', '$Person_email', '$Person_username', '$Person_password', $Person_status);
    ";
    // echo "$sql";
    $conn->query($sql);
    // close connection
    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./index.php">