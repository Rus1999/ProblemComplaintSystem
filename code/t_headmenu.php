<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Complaint System</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body bgcolor="#5C374C">
    <table border="0" align="center" width="77%">
        <!-- header -->
        <tr>
            <td valign="center" colspan="2" bgcolor="#EF626C">
                <h1 align="center" style="color: #A64D5C; padding: 20px;">Problem Complaint System</h1>
            </td>
        </tr>
        <tr>
            <!-- menu -->
            <td valign="top" width="17%" height="420px" bgcolor="#5F7367">
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
                                <li><a href=\"./r_info_show.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">Manage Complaint</a></li>
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
                                <li><a href=\"./r_info_show.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">Manage Complaint</a></li>
                                <li><a href=\"./r_manage_operational_show.php\">Manage Operational</a></li>
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
                                <li><a href=\"./r_info_show.php\">Personal Information</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">Manage Complaint</a></li>
                                <li><a href=\"./r_manage_operational_show.php\">Manage Operational</a></li>
                                <li><a href=\"./r_manage_admin_show.php\">Manage Admin</a></li>
                                <li><a href=\"./r_manage_user_rights_show.php\">Manage User Rights</a></li>
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
            <td valign="top" height="420px" bgcolor="#EED5C2" class="table-content">