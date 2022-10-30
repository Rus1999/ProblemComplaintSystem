<?php
    include("./t_connect.php");

    $Operational_ID = $_GET['Operational_ID'];

    // delete operationa id in complaint id
    $sql = "update Problem set Operational_ID=NULL where Operational_ID=$Operational_ID;";
    $conn->query($sql);

    // delete operational
    $sql = "delete from Problem where Problem_ID=$Operational_ID;";
    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_operational_show.php">