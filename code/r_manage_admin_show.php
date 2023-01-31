<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $sql = "select * from Person where Person_status=3;";
    $result = $conn->query($sql);
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <h3>Manage Admin</h3>
    <a href="./r_manage_admin_add.php">Add Admin</a>
    <table border="1">
        <tr>
            <td>Admin_ID</td>
            <td>first name</td>
            <td>last name</td>
            <td>phonenumber</td>
            <td>email</td>
            <td>username</td>
            <td>Admin's Rights</td>
            <td>manage</td>
        </tr>
        <?php
            while ($row = $result->fetch_assoc())
            {
                $Admin_ID = $row['Person_ID'];
                $Admin_fname = $row['Person_fname'];
                $Admin_lname = $row['Person_lname'];
                $Admin_phonenumber = $row['Person_phonenumber'];
                $Admin_email = $row['Person_email'];
                $Admin_username = $row['Person_username'];
                $Admin_rights = $row['Person_rights'];

                if ($Admin_rights==1)
                {
                    $rights = "usable";
                }
                else if ($Admin_rights==2)
                {
                    $rights = "locked";
                }

                echo "
                    <tr>
                    <td>$Admin_ID</td>
                    <td>$Admin_fname</td>
                    <td>$Admin_lname</td>
                    <td>$Admin_phonenumber</td>
                    <td>$Admin_email</td>
                    <td>$Admin_username</td>
                    <td>$rights</td>
                    <td>
                        <a href=\"./r_manage_admin_edit.php?Admin_ID=$Admin_ID\">Edit</a>
                        |
                        <a href=\"./r_manage_admin_delete.php?Admin_ID=$Admin_ID\">delete</a>
                    </td>
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
    <h3>จัดการข้อมูลผู้ดูแลระบบ</h3>
    <a href="./r_manage_admin_add.php">เพิ่มข้อมูลผู้ดูแลระบบ</a>
    <table border="1">
        <tr>
            <td>รหัส</td>
            <td>ชื่อจริง</td>
            <td>นามสกุล</td>
            <td>เบอร์โทรศัพท์</td>
            <td>อีเมล์</td>
            <td>ชื่อผู้ใช้งาน</td>
            <td>สิทธิ์การใช้งาน</td>
            <td>จัดการ</td>
        </tr>
        <?php
            while ($row = $result->fetch_assoc())
            {
                $Admin_ID = $row['Person_ID'];
                $Admin_fname = $row['Person_fname'];
                $Admin_lname = $row['Person_lname'];
                $Admin_phonenumber = $row['Person_phonenumber'];
                $Admin_email = $row['Person_email'];
                $Admin_username = $row['Person_username'];
                $Admin_rights = $row['Person_rights'];

                if ($Admin_rights==1)
                {
                    $rights = "สามารถใช้งานได้";
                }
                else if ($Admin_rights==2)
                {
                    $rights = "บัญชีถูกระงับ";
                }

                echo "
                    <tr>
                    <td>$Admin_ID</td>
                    <td>$Admin_fname</td>
                    <td>$Admin_lname</td>
                    <td>$Admin_phonenumber</td>
                    <td>$Admin_email</td>
                    <td>$Admin_username</td>
                    <td>$rights</td>
                    <td>
                        <a href=\"./r_manage_admin_edit.php?Admin_ID=$Admin_ID\">แก้ไข</a>
                        |
                        <a href=\"./r_manage_admin_delete.php?Admin_ID=$Admin_ID\">ลบ</a>
                    </td>
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