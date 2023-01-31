<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Admin_ID = $_GET['Admin_ID'];
    $sql = "select * from Person where Person_ID=$Admin_ID;";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Admin_fname = $row['Person_fname'];
    $Admin_lname = $row['Person_lname'];
    $Admin_phonenumber = $row['Person_phonenumber'];
    $Admin_email = $row['Person_email'];
    $Admin_username = $row['Person_username'];
    $Admin_password = $row['Person_password'];
    $Admin_rights = $row['Person_rights'];

    $rights1 = "";
    $rights2 = "";

    if ($Admin_rights==1)
    {
        $rights = "usable";
        $rights1 = "checked";
    }
    else if ($Admin_rights==2)
    {
        $rights = "locked";
        $rights2 = "checked";
    }
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <table class="table-content">
        <form action="./r_manage_admin_edit_pro.php" method="post">
            <tr>
                <td>
                    <h3>Edit admin</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_fname" value=<?php echo $Admin_fname; ?>>
                </td>
                <td>
                    <input type="text" name="Admin_lname" value=<?php echo $Admin_lname; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_phonenumber" value=<?php echo $Admin_phonenumber; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="Admin_email" value=<?php echo $Admin_email; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="Admin_username" value=<?php echo $Admin_username; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Admin_password" value=<?php echo $Admin_password; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="Admin_rights" value="1" <?php echo $rights1; ?>>Usable account
                </td>
                <td>
                    <input type="radio" name="Admin_rights" value="2" <?php echo $rights2; ?>>Locked account
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save">
                    <input type="button" value="back" onclick="history.back()">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="Admin_ID" value=<?php echo $Admin_ID; ?>>
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
        <form action="./r_manage_admin_edit_pro.php" method="post">
            <tr>
                <td>
                    <h3>แก้ไขข้อมูลผู้ดูแลระบบ</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_fname" value=<?php echo $Admin_fname; ?>>
                </td>
                <td>
                    <input type="text" name="Admin_lname" value=<?php echo $Admin_lname; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Admin_phonenumber" value=<?php echo $Admin_phonenumber; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="Admin_email" value=<?php echo $Admin_email; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="Admin_username" value=<?php echo $Admin_username; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Admin_password" value=<?php echo $Admin_password; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="Admin_rights" value="1" <?php echo $rights1; ?>>สามารถใช้งานได้
                </td>
                <td>
                    <input type="radio" name="Admin_rights" value="2" <?php echo $rights2; ?>>ระงับบัญชี
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="บันทึก">
                    <input type="button" value="กลับ" onclick="history.back()">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="Admin_ID" value=<?php echo $Admin_ID; ?>>
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