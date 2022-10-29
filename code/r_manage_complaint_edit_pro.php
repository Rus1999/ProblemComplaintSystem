<?php
    include("./t_connect.php");

    $Complaint_ID = $_POST['Complaint_ID'];
    $Complaint_title = $_POST['Complaint_title'];
    $Complaint_detail = $_POST['Complaint_detail'];

    $Employee_ID = "null";
    $Admin_ID = "null";

    if ($_SESSION['status']==2)
    {
        $Employee_ID = $_SESSION['id'];
    }
    else if ($_SESSION['status']==3)
    {
        $Admin_ID = $_SESSION['id'];
    }

    // echo $_FILES['Complaint_picture']['size'];

    if ($_FILES['Complaint_picture']['size']==0)
    {
        // Complaint_picture is empty (and not an error)
        $sql = "update Problem set Problem_title='$Complaint_title', Problem_detail='$Complaint_detail', Employee_ID=$Employee_ID, Admin_ID=$Admin_ID where Problem_ID=$Complaint_ID;";
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

        $sql = "update Problem set Problem_title='$Complaint_title', Problem_detail='$Complaint_detail', Problem_picture='$uploadfile_path', Employee_ID=$Employee_ID, Admin_ID=$Admin_ID where Problem_ID=$Complaint_ID;";
    }

    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_complaint_show.php">