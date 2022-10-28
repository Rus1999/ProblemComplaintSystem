<?php
    include("./t_connect.php");

    $Person_ID = $_SESSION['id'];
    $Person_fname = $_POST['Person_fname'];
    $Person_lname = $_POST['Person_lname'];
    $Person_phonenumber = $_POST['Person_phonenumber'];
    $Person_email = $_POST['Person_email'];
    $Person_username = $_POST['Person_username'];
    $Person_password = $_POST['Person_password'];
    $Person_status = $_POST['Person_status'];
    
    $sql = "update Person set Person_fname='$Person_fname', Person_lname='$Person_lname', Person_phonenumber='$Person_phonenumber',
    Person_email='$Person_email', Person_username='$Person_username', Person_password='$Person_password', Person_status=$Person_status 
    where Person_ID=$Person_ID;";
    
    $conn->query($sql);
    
    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_info_show.php">