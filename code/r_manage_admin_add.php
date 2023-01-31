<?php
    include("./t_connect.php");
    include("./t_headmenu.php");
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <table class="table-content">
        <form action="./r_manage_admin_add_pro.php" method="post">
            <tr>
                <td>
                    <h3>Add admin</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_fname" placeholder="first name">
                </td>
                <td>
                    <input type="text" name="Admin_lname" placeholder="last name">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_phonenumber" placeholder="phone number">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="Admin_email" placeholder="email@example.com">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="Admin_username" placeholder="username">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Admin_password" placeholder="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Add admin">
                    <input type="reset" value="clear">
                </td>
            </tr>
        </form>
    </table>
<?php
    }
    else if ($_SESSION['lang'] == "th")
    {
?>
    <table class="table-content">
        <form action="./r_manage_admin_add_pro.php" method="post">
            <tr>
                <td>
                    <h3>เพิ่มข้อมูลผู้ดูแลระบบ</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_fname" placeholder="ชื่อจริง">
                </td>
                <td>
                    <input type="text" name="Admin_lname" placeholder="นามสกุล">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_phonenumber" placeholder="เบอร์โทรศัพท์">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="Admin_email" placeholder="อีเมล์">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="Admin_username" placeholder="ชื่อผู้ใช้งาน">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Admin_password" placeholder="รหัสผ่าน">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="เพิ่มข้อมูล">
                    <input type="reset" value="ล้าง">
                </td>
            </tr>
        </form>
    </table>
<?php
    }
?>



<?php
    include("./t_foot.php");
?>