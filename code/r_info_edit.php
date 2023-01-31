<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $sql = "select * from Person where Person_ID=".$_SESSION['id'].";";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Person_ID = $row['Person_ID'];
    $Person_fname = $row['Person_fname'];
    $Person_lname = $row['Person_lname'];
    $Person_phonenumber = $row['Person_phonenumber'];
    $Person_email = $row['Person_email'];
    $Person_username = $row['Person_username'];
    $Person_password = $row['Person_password'];
    $Person_status = $row['Person_status'];

    $str1 = "";
    $str2 = "";
    if($_SESSION['status']==1){
        $str1 = "checked";
    }
    else if($_SESSION['status']==2){
        $str2 = "checked";
    }

?>
        <?php
            if ($_SESSION['lang'] == "en")
            {
        ?>
            <table>
                <form action="./r_info_edit_pro.php" method="post">
                    <tr>
                        <td>
                            First name: 
                        </td>
                        <td>
                            <input type="text" name="Person_fname" value="<?php echo $Person_fname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last name: 
                        </td>
                        <td>
                            <input type="text" name="Person_lname" value="<?php echo $Person_lname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone number: 
                        </td>
                        <td>
                            <input type="text" name="Person_phonenumber" value="<?php echo $Person_phonenumber ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email: 
                        </td>
                        <td>
                            <input type="email" name="Person_email" value="<?php echo $Person_email ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username: 
                        </td>
                        <td>
                            <input type="text" name="Person_username" value="<?php echo $Person_username ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password: 
                        </td>
                        <td>
                            <input type="text" name="Person_password" value="<?php echo $Person_password ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Status: 
                        </td>
                        <td>
                            <input type="radio" name="Person_status" value="1" <?php echo $str1; ?>>member
                            <input type="radio" name="Person_status" value="2" <?php echo $str2; ?>>employee
                            <?php
                                if($_SESSION['status']==3)
                                {
                                    echo "<input type=\"radio\" name=\"Person_status\" value=\"3\" checked>admin";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Save">
                            <input type="button" value="back" onclick="history.back()">
                        </td>
                    </tr>
                </form>
            </table>
        <?php
            }
            else if ($_SESSION['lang'] == "th")
            {
        ?>
            <table>
                <form action="./r_info_edit_pro.php" method="post">
                    <tr>
                        <td>
                            ชื่อจริง: 
                        </td>
                        <td>
                            <input type="text" name="Person_fname" value="<?php echo $Person_fname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            นามสกุล: 
                        </td>
                        <td>
                            <input type="text" name="Person_lname" value="<?php echo $Person_lname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            เบอร์โทรศัพท์: 
                        </td>
                        <td>
                            <input type="text" name="Person_phonenumber" value="<?php echo $Person_phonenumber ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            อีเมล์: 
                        </td>
                        <td>
                            <input type="email" name="Person_email" value="<?php echo $Person_email ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ชื่อผู้ใช้งาน: 
                        </td>
                        <td>
                            <input type="text" name="Person_username" value="<?php echo $Person_username ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            รหัสผ่าน: 
                        </td>
                        <td>
                            <input type="text" name="Person_password" value="<?php echo $Person_password ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            สถานะ: 
                        </td>
                        <td>
                            <input type="radio" name="Person_status" value="1" <?php echo $str1; ?>>สมาชิก
                            <input type="radio" name="Person_status" value="2" <?php echo $str2; ?>>พนักงาน
                            <?php
                                if($_SESSION['status']==3)
                                {
                                    echo "<input type=\"radio\" name=\"Person_status\" value=\"3\" checked>ผู้ดูแลระบบ";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="บันทึก">
                            <input type="button" value="กลับ" onclick="history.back()">
                        </td>
                    </tr>
                </form>
            </table>
        <?php
            }
        ?>


<?php
    $conn->close();
    include("./t_foot.php");
?>