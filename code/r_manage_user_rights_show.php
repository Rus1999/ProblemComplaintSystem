<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $sql = "select * from Person where Person_status != 3 ;";
    $result = $conn->query($sql);
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <h3>Manage User</h3>
    <table border="1">
        <tr>
            <td>Person_ID</td>
            <td>first name</td>
            <td>last name</td>
            <td>phonenumber</td>
            <td>email</td>
            <td>status</td>
            <td>Person_rights</td>
            <td>Mange Person's rights</td>
        </tr>
        <?php
            while($row = $result->fetch_assoc())
            {
                $Person_ID = $row['Person_ID'];
                $Person_fname = $row['Person_fname'];
                $Person_lname = $row['Person_lname'];
                $Person_phonenumber = $row['Person_phonenumber'];
                $Person_email = $row['Person_email'];
                $Person_status = $row['Person_status'];
                $Person_username = $row['Person_username'];
                $Person_rights = $row['Person_rights'];

                if ($Person_status==1)
                {
                    $status = "member";
                }
                else if ($Person_status==2)
                { 
                    $status = "employee";
                }
                else
                {
                    $status = "";
                }

                if ($Person_rights==1)
                {
                    $rights = "usable";
                }
                else if($Person_rights==0)
                {
                    $rights = "locked";
                }

                echo 
                "
                    <tr>
                        <td align=\"center\">$Person_ID</td>
                        <td>$Person_fname</td>
                        <td>$Person_lname</td>
                        <td>$Person_phonenumber</td>
                        <td>$Person_email</td>
                        <td align=\"center\">$status</td>
                        <td align=\"center\">$rights</td>
                        <td align=\"center\"><a href=\"./r_manage_user_rights_edit.php?Person_ID=$Person_ID\">manage</a></td>
                    </tr>
                ";
            }
        ?>
    </table>
<?php
    }
    else if ($_SESSION['lang'] == "th")
    {
?>
    <h3>จัดการสิทธิ์ของผู้ใช้งาน</h3>
    <table border="1">
        <tr>
            <td>รหัส</td>
            <td>ชื่อจริง</td>
            <td>นามสกุล</td>
            <td>เบอร์โทรศัพท์</td>
            <td>อีเมล์</td>
            <td>สถานะ</td>
            <td>สิทธิ์การใช้งาน</td>
            <td>จัดการสิทธิ์ของผู้ใช้งาน</td>
        </tr>
        <?php
            while($row = $result->fetch_assoc())
            {
                $Person_ID = $row['Person_ID'];
                $Person_fname = $row['Person_fname'];
                $Person_lname = $row['Person_lname'];
                $Person_phonenumber = $row['Person_phonenumber'];
                $Person_email = $row['Person_email'];
                $Person_status = $row['Person_status'];
                $Person_username = $row['Person_username'];
                $Person_rights = $row['Person_rights'];

                if ($Person_status==1)
                {
                    $status = "สมาชิก";
                }
                else if ($Person_status==2)
                { 
                    $status = "พนักงาน";
                }
                else
                {
                    $status = "";
                }

                if ($Person_rights==1)
                {
                    $rights = "สามารถใช้งานได้";
                }
                else if($Person_rights==0)
                {
                    $rights = "บัญชีถูกระงับ";
                }

                echo 
                "
                    <tr>
                        <td align=\"center\">$Person_ID</td>
                        <td>$Person_fname</td>
                        <td>$Person_lname</td>
                        <td>$Person_phonenumber</td>
                        <td>$Person_email</td>
                        <td align=\"center\">$status</td>
                        <td align=\"center\">$rights</td>
                        <td align=\"center\"><a href=\"./r_manage_user_rights_edit.php?Person_ID=$Person_ID\">จัดการ</a></td>
                    </tr>
                ";
            }
        ?>
    </table>
<?php
    }
?>




<?php
    $conn->close();
    include("./t_foot.php");
?>