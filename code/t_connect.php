<?php
    session_start();
    
    // initialize connection
    $conn = new mysqli("localhost", "root", "", "problemcomplaintsystem");
    if($conn->connect_error)
    {
        echo "Fail to connect database".$conn->connect_errno;
    }
    $conn->query("set names utf8");
    date_default_timezone_set("Asia/Bangkok");
?>