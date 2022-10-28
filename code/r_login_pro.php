<?php
    include("./t_connect.php");

    // post login username password
    $loginUsername = $_POST['login_username'];
    $loginPassword = $_POST['login_password'];

    $sql = "select * from person where person_username='$loginUsername';";
    $result = $conn->query($sql);

    // fetch person data from login username
    if ($row = $result->fetch_assoc())
    {
        $Person_ID = $row['Person_ID'];
        $Person_fname = $row['Person_fname'];
        $Person_lname = $row['Person_lname'];
        $Person_password = $row['Person_password'];
        $Person_status = $row['Person_status'];

        // check if password is match then store user in session variable
        if($loginPassword==$Person_password){
            $_SESSION['id'] = $Person_ID;
            $_SESSION['fname'] = $Person_fname;
            $_SESSION['lname'] = $Person_lname;
            $_SESSION['status'] = $Person_status;
            echo "<meta http-equiv=\"refresh\" content=\"0; url=./index.php\"> ";
        } // password incorrect
        else
        {
            echo "<meta http-equiv=\"refresh\" content=\"0; url=./r_login.php?error=passwordIncorrect\">";
        }
    } // user not found
    else
    {
        echo "<meta http-equiv=\"refresh\" content=\"0; url=./r_login.php?error=userNotFound\">";
    }
?>