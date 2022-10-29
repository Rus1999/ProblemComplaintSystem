<?php
    include("./t_connect.php");

    $Admin_ID = "null";
    $Admin_fname = $_POST['Admin_fname'];
    $Admin_lname = $_POST['Admin_lname'];
    $Admin_phonenumber = $_POST['Admin_phonenumber'];
    $Admin_email = $_POST['Admin_email'];
    $Admin_username = $_POST['Admin_username'];
    $Admin_password = $_POST['Admin_password'];
    $Admin_status = 3;
    $Admin_rights = 1;

    $sql = "insert into Person values($Admin_ID, '$Admin_fname', '$Admin_lname', 
    '$Admin_phonenumber', '$Admin_email', '$Admin_username', '$Admin_password', $Admin_status, $Admin_rights);";
    $conn->query($sql);
    
    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_admin_show.php">