<?php
    include("./t_connect.php");

    $Operational_ID = "null";
    $Operational_date = date("Y-m-d");
    $Operational_time = date("H:i:s");
    $Operational_title = $_POST['Operational_title'];
    $Operational_detail = $_POST['Operational_detail'];
    $Employee_ID = "null";
    $Admin_ID = "null";
    $Problem_status = 2;

    if ($_FILES['Operational_picture']['size']==0)
    {
        $uploadfile_path = null;
    }
    else
    {
        // file
        $Operational_picture_name = $_FILES['Operational_picture']['name'];
        $Operational_picture_type = $_FILES['Operational_picture']['type'];
        $Operational_picture_size = $_FILES['Operational_picture']['size'];
        $Operational_picture_name_temp = $_FILES['Operational_picture']['tmp_name'];
        $Operational_picture_error = $_FILES['Operational_picture']['error'];

        // echo "
        //     $Operational_picture_name <br>
        //     $Operational_picture_type <br>
        //     $Operational_picture_size <br>
        //     $Operational_picture_name_temp <br>
        //     $Operational_picture_error <br>
        // ";

        // move file
        $uploaddir = 'operationalPic/';
        $uploadfile_path = $uploaddir . basename($Operational_picture_name);
        move_uploaded_file($Operational_picture_name_temp, $uploadfile_path);
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

    $sql = "insert into Problem values($Operational_ID, '$Operational_date',
    '$Operational_time', '$Operational_title', '$Operational_detail', 
    '$uploadfile_path', $Create_Person_ID, $Employee_ID, $Admin_ID, 
    $Operational_ID, $Problem_status);";
    $conn->query($sql);

    // fetch last operational_ID
    $sql = "select max(Problem_ID) as Operational_ID from Problem where Problem_status=2;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Operational_ID = $row['Operational_ID'];

    // add operational id to selected complaint id 
    $Complaint_ID = $_POST['Complaint_ID'];
    // add manager id to selected complaint id
    if ($_SESSION['status']==2)
    {
        $Employee_ID = $_SESSION['id'];
    }
    else if ($_SESSION['status']==3)
    {
        $Admin_ID = $_SESSION['id'];
    }
    $sql = "update Problem set Operational_ID=$Operational_ID, Employee_ID=$Employee_ID, Admin_ID=$Admin_ID where Problem_ID=$Complaint_ID";

    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_operational_show.php">