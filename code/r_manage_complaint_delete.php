<?php
    include("./t_connect.php");
    
    $Complaint_ID = $_GET['Complaint_ID'];

    $sql = "delete from Problem where Problem_ID=$Complaint_ID;";
    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_complaint_show.php">