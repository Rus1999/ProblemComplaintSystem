<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Complaint_ID = $_GET['Complaint_ID'];

    $sql = "select * from Problem where Problem_ID=$Complaint_ID;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Complaint_title = $row['Problem_title'];
    $Complaint_detail = $row['Problem_detail'];
    $Complaint_picture = $row['Problem_picture'];
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <h3>Edit Complaint</h3>
    <table>
        <form action="./r_manage_complaint_edit_pro.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>
                    Title
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Complaint_title" size="50" value="<?php echo $Complaint_title; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Details
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="Complaint_detail" cols="41" rows="10"><?php echo $Complaint_detail; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    new picture
                    <input type="file" name="Complaint_picture">
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
                    <input type="hidden" name="Complaint_ID" value="<?php echo $Complaint_ID; ?>">
                </td>
            </tr>
        </form>
    </table>
<?php
    }
    else if ($_SESSION['lang'] == "th")
    {
?>
    <h3>แก้ไข คำร้องเรียน</h3>
    <table>
        <form action="./r_manage_complaint_edit_pro.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>
                    หัวข้อคำร้องเรียน
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Complaint_title" size="50" value="<?php echo $Complaint_title; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    รายละเอียด
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="Complaint_detail" cols="41" rows="10"><?php echo $Complaint_detail; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    รูปภาพใหม่
                    <input type="file" name="Complaint_picture">
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
                    <input type="hidden" name="Complaint_ID" value="<?php echo $Complaint_ID; ?>">
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