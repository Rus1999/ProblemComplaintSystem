<?php
    include("./t_connect.php");

    $Admin_ID = $_POST['Admin_ID'];
    $Admin_fname = $_POST['Admin_fname'];
    $Admin_lname = $_POST['Admin_lname'];
    $Admin_phonenumber = $_POST['Admin_phonenumber'];
    $Admin_email = $_POST['Admin_email'];
    $Admin_username = $_POST['Admin_username'];
    $Admin_password = $_POST['Admin_password'];
    $Admin_rights = $_POST['Admin_rights'];


    $sql = "update Person set Person_fname='$Admin_fname', Person_lname='$Admin_lname', Person_phonenumber='$Admin_phonenumber', Person_email='$Admin_email',
    Person_username='$Admin_username', Person_password='$Admin_password', Person_rights=$Admin_rights where Person_ID=$Admin_ID;";

    $conn->query($sql);

    $conn->close();
    include("./t_foot.php");
?>

<meta http-equiv="refresh" content="0; url=./r_manage_admin_show.php">