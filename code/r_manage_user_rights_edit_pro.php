<?php
    include("./t_connect.php");

    $Person_ID = $_POST['Person_ID'];
    $Person_rights = $_POST['Person_rights'];

    $sql = "update Person set Person_rights=$Person_rights where Person_ID=$Person_ID;";
    echo $sql;
    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_user_rights_show.php">