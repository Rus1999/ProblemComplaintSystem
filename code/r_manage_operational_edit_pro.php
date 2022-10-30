<?php
    include("./t_connect.php");

    $Operational_ID = $_POST['Operational_ID'];
    $Operational_title = $_POST['Operational_title'];
    $Operational_detail = $_POST['Operational_detail'];

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

    // echo $_FILES['Operational_picture']['size'];

    if ($_FILES['Operational_picture']['size']==0)
    {
        // Operational_picture is empty (and not an error)
        $sql = "update Problem set Problem_title='$Operational_title', Problem_detail='$Operational_detail', Employee_ID=$Employee_ID, Admin_ID=$Admin_ID where Problem_ID=$Operational_ID;";
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

        $sql = "update Problem set Problem_title='$Operational_title', Problem_detail='$Operational_detail', Problem_picture='$uploadfile_path', Employee_ID=$Employee_ID, Admin_ID=$Admin_ID where Problem_ID=$Operational_ID;";
    }

    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./r_manage_operational_show.php">