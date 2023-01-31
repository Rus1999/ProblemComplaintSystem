<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Complaint System</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body bgcolor="#5C374C">
        <?php
            if ($_SESSION['lang'] == "en")
            {
        ?>
        <table border="0" align="center" width="77%">
        <!-- header -->
        <tr>
            <td valign="center" colspan="2" bgcolor="#EF626C">
                <?php
                    echo '<h1 align="center" style="color: #A64D5C; padding: 20px;">Problem Complaint System</h1>';
                ?>
            </td>
        </tr>
        <tr>
            <!-- menu -->
            <td valign="top" width="17%" height="777px" bgcolor="#5F7367">
                <h4 style="padding: 10px 0px 0px 10px;">
                    Language 
                    <a href="index_pro.php?lng=th">TH</a>
                    /
                    <a>EN</a>
                </h4>

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
            <td valign="top" height="777px" bgcolor="#EED5C2" class="table-content">

        <?php
            }
            else if ($_SESSION['lang'] == "th")
            {
        ?>
        <table border="0" align="center" width="77%">
        <!-- header -->
        <tr>
            <td valign="center" colspan="2" bgcolor="#EF626C">
                <?php
                    echo '<h1 align="center" style="color: #A64D5C; padding: 20px;">ระบบร้องเรียนปัญหา</h1>';
                ?>
            </td>
        </tr>
        <tr>
            <!-- menu -->
            <td valign="top" width="17%" height="777px" bgcolor="#5F7367">
                <h4 style="padding: 10px 0px 0px 10px;">
                    ภาษา 
                    <a>ไทย</a>
                    /
                    <a href="index_pro.php?lng=en">อังกฤษ</a>
                </h4>

                <h4 style="padding: 10px 0px 0px 10px;">เมนู:</h4>
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
                                <li><a href=\"./r_info_show.php\">ข้อมูลส่วนบุคคล</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">จัดการคำร้องเรียน</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">ออกจากระบบ</a></li>
                            </ul>
                            ";
                        } // employee 
                        else if($_SESSION['status']==2)
                        {
                            echo "
                            <ul>
                                <li><a href=\"./r_info_show.php\">ข้อมูลส่วนบุคคล</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">จัดการคำร้องเรียน</a></li>
                                <li><a href=\"./r_manage_operational_show.php\">จัดการผลการดำเนินงาน</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">ออกจากระบบ</a></li>
                            </ul>
                            ";
                        }
                        else if($_SESSION['status']==3)
                        {
                            echo "
                            <ul>
                                <li><a href=\"./r_info_show.php\">ข้อมูลส่วนบุคคล</a></li>
                                <li><a href=\"./r_manage_complaint_show.php\">จัดการคำร้องเรียน</a></li>
                                <li><a href=\"./r_manage_operational_show.php\">จัดการผลการดำเนินงาน</a></li>
                                <li><a href=\"./r_manage_admin_show.php\">จัดการผู้ดูแลระบบ</a></li>
                                <li><a href=\"./r_manage_user_rights_show.php\">จัดการสิทธิ์ผู้ใช้งาน</a></li>
                            </ul>
                            <hr>
                            <ul>    
                                <li><a href=\"./r_logout.php\">ออกจากระบบ</a></li>
                            </ul>
                            ";
                        }
                    } // not login
                    else
                    {
                        echo "
                        <ul>
                            <li><a href=\"./r_signup.php\">สมัครสมาชิก</a></li>
                            <li><a href=\"./r_login.php\">เข้าสู่ระบบ</a></li>
                        </ul>
                    ";
                }
                ?>
            </td>
            <!-- content -->
            <td valign="top" height="777px" bgcolor="#EED5C2" class="table-content">

        <?php
            }
        ?>
