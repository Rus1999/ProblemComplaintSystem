<?php
    include("./t_connect.php");
    include("./t_headmenu.php");
?>

<?php
        if ($_SESSION['lang'] == "en")
            {
        ?>
            <table class="table-content">
                <form action="./r_signup_pro.php" method="post">
                    <tr>
                        <td>
                            <h3>Sign Up</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Person_fname" placeholder="first name">
                        </td>
                        <td>
                            <input type="text" name="Person_lname" placeholder="last name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Person_phonenumber" placeholder="phone number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" name="Person_email" placeholder="email@example.com">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="tel" name="Person_username" placeholder="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="Person_password" placeholder="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Person_status" value="1">Member
                            <input type="radio" name="Person_status" value="2">Employee
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Sign Up">
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
                <form action="./r_signup_pro.php" method="post">
                    <tr>
                        <td>
                            <h3>สมัครสมาชิก</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Person_fname" placeholder="ชื่อจริง">
                        </td>
                        <td>
                            <input type="text" name="Person_lname" placeholder="นามสกุล">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Person_phonenumber" placeholder="เบอร์โทรศัพท์">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" name="Person_email" placeholder="อีเมล์">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="tel" name="Person_username" placeholder="ชื่อผู้ใช้งาน">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="Person_password" placeholder="รหัสผ่าน">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Person_status" value="1">สมาชิก
                            <input type="radio" name="Person_status" value="2">พนักงาน
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="สมัครสมาชิก">
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