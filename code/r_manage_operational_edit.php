<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Operational_ID = $_GET['Operational_ID'];

    $sql = "select * from Problem where Problem_ID=$Operational_ID;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Operational_title = $row['Problem_title'];
    $Operational_detail = $row['Problem_detail'];
    $Operational_picture = $row['Problem_picture'];
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <h3>Edit Operational</h3>
    <table>
        <form action="./r_manage_operational_edit_pro.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>
                    Title
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Operational_title" size="50" value="<?php echo $Operational_title; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Details
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="Operational_detail" cols="41" rows="10"><?php echo $Operational_detail; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    new picture
                    <input type="file" name="Operational_picture">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="button" value="back" onclick="history.back()">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="Operational_ID" value="<?php echo $Operational_ID; ?>">
                </td>
            </tr>
        </form>
    </table>
<?php
    }
    else if ($_SESSION['lang'] == "th")
    {
?>
    <h3>แก้ไขผลการดำเนินงาน</h3>
    <table>
        <form action="./r_manage_operational_edit_pro.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>
                    หัวข้อ
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Operational_title" size="50" value="<?php echo $Operational_title; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    รายละเอียด
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="Operational_detail" cols="41" rows="10"><?php echo $Operational_detail; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    รูปภาพใหม่
                    <input type="file" name="Operational_picture">
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
                    <input type="hidden" name="Operational_ID" value="<?php echo $Operational_ID; ?>">
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