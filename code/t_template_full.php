<?php
    session_start();
    // initialize connection
    $conn = new mysqli("localhost", "root", "", "problemcomplaintsystem");
    if($conn->connect_error)
    {
        echo "Fail to connect database".$conn->connect_errno;
    }
    $conn->query("set names utf8");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Complaint System</title>
</head>
<body bgcolor="#5C374C">
    <table border="0" align="center" width="77%">
        <!-- header -->
        <tr>
            <td valign="top" colspan="2" bgcolor="#EF626C">
                <h1 align="center">Header</h1>
            </td>
        </tr>
        <tr>
            <!-- menu -->
            <td valign="top" width="17%" bgcolor="#5F7367">
                <h4 style="padding: 10px 0px 0px 10px;">Menu:</h4>
                <?php
                    // status: 1:member, 2:employee, 3:admin
                    // if login then
                    if(isset($_SESSION['status']))
                    {
                        echo $_SESSION['fname']." ".$_SESSION['lname'];
                        // display menu according to user
                        // member
                        if($_SESSION['status']==1)
                        {
                            echo "
                            <ul>
                                <li><a href=\"./r_signup.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint.php\">Manage Complaint</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">Logout</a></li>
                            </ul>
                            ";
                        } // employee 
                        else if($_SESSION['status']==2)
                        {
                            echo "
                            <ul>
                                <li><a href=\"./r_signup.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint.php\">Manage Complaint</a></li>
                                <li><a href=\"./r_manage_operational.php\">Manage Operational</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">Logout</a></li>
                            </ul>
                            ";
                        }
                        else if($_SESSION['status']==3)
                        {
                            echo "
                            <ul>
                                <li><a href=\"./r_signup.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint.php\">Manage Complaint</a></li>
                                <li><a href=\"./r_manage_operational.php\">Manage Operational</a></li>
                                <li><a href=\"./r_manage_admin.php\">Manage Admin</a></li>
                                <li><a href=\"./r_manage_user.php\">Manage user</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">Logout</a></li>
                            </ul>
                            ";
                        }
                    } // not login
                    else
                    {
                        echo "
                        <ul>
                            <li><a href=\"./r_signup.php\">Sign Up</a></li>
                            <li><a href=\"./r_login.php\">Login</a></li>
                        </ul>
                    ";
                }
                ?>
            </td>
            <!-- content -->
            <td valign="top" bgcolor="#EED5C2">
                
            </td>
        </tr>
    </table>
</body>
</html>