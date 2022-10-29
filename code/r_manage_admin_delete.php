<?php
    include("./t_connect.php");
    
    $Admin_ID = $_GET['Admin_ID'];

    $sql = "delete from Person where Person_ID=$Admin_ID;";
    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_admin_show.php">