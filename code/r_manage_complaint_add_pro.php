<?php
    include("./t_connect.php");

    $Complaint_ID = "null";
    $Complaint_date = date("Y-m-d");
    $Complaint_time = date("H:i:s");
    $Complaint_title = $_POST['Complaint_title'];
    $Complaint_detail = $_POST['Complaint_detail'];
    $Employee_ID = "null";
    $Admin_ID = "null";
    $Operational_ID = "null";
    $Problem_status = 1;

    if ($_FILES['Complaint_picture']['size']==0)
    {
        $uploadfile_path = null;
    }
    else
    {
        // file
        $Complaint_picture_name = $_FILES['Complaint_picture']['name'];
        $Complaint_picture_type = $_FILES['Complaint_picture']['type'];
        $Complaint_picture_size = $_FILES['Complaint_picture']['size'];
        $Complaint_picture_name_temp = $_FILES['Complaint_picture']['tmp_name'];
        $Complaint_picture_error = $_FILES['Complaint_picture']['error'];

        // echo "
        //     $Complaint_picture_name <br>
        //     $Complaint_picture_type <br>
        //     $Complaint_picture_size <br>
        //     $Complaint_picture_name_temp <br>
        //     $Complaint_picture_error <br>
        // ";

        // move file
        $uploaddir = 'complaintPic/';
        $uploadfile_path = $uploaddir . basename($Complaint_picture_name);
        move_uploaded_file($Complaint_picture_name_temp, $uploadfile_path);
    }

    if ($_SESSION['status']==1)
    {
        $Create_Person_ID = $_SESSION['id'];
    }
    else if ($_SESSION['status']==2)
    {
        $Create_Person_ID = $_SESSION['id'];
    }
    else if ($_SESSION['status']==3)
    {
        $Create_Person_ID = $_SESSION['id'];
    }

    $sql = "insert into Problem values($Complaint_ID, '$Complaint_date',
    '$Complaint_time', '$Complaint_title', '$Complaint_detail', 
    '$uploadfile_path', $Create_Person_ID, $Employee_ID, $Admin_ID, 
    $Operational_ID, $Problem_status);";

    $conn->query($sql);
    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_complaint_show.php">