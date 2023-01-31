<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Complaint_ID = $_GET['Complaint_ID'];

    // fetch complaint data
    $sql = "select * from Problem where Problem_ID = $Complaint_ID;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Complaint_date = $row['Problem_date'];
    $Complaint_time = $row['Problem_time'];
    $Complaint_title = $row['Problem_title'];
    $Complaint_detail = $row['Problem_detail'];
    $Complaint_picture = $row['Problem_picture'];
    $Operational_ID = $row['Operational_ID'];

    if ($Complaint_picture==null)
    {
        $Complaint_picture = "./images/no-pictures.png";
    }
?>

<?php
    if ($_SESSION['lang'] == "en")
    {
?>
    <h3>Complaint Details</h3>
    <table>
        <tr>    
            <td colspan="2" align="right">
                <input type="button" value="back" onclick="history.back()">
            </td>
        </tr>
        <tr>
            <td>
                Create date:
            </td>
            <td>
                <?php echo $Complaint_date; ?>
            </td>
        </tr>
        <tr>
            <td>
                Create time:
            </td>
            <td>
                <?php echo $Complaint_time; ?>
            </td>
        </tr>
        <tr>
            <td>
                Title
            </td>
            <td>
                <?php echo $Complaint_title; ?>
            </td>
        </tr>
        <tr>
            <td>
                details
            </td>
            <td>
                <?php echo $Complaint_detail; ?>
            </td>
        </tr>
        <tr>
            <td>
                Picture
            </td>
            <td>
                <img src="./<?php echo $Complaint_picture; ?>" width="500px" alt="Complaint_Picture">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <?php
            // fetch operational data
            if ($row['Operational_ID']!=null)
            {
                $sql = "select * from Problem where Problem_ID = $Operational_ID;";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $Operational_date = $row['Problem_date'];
                $Operational_time = $row['Problem_time'];
                $Operational_title = $row['Problem_title'];
                $Operational_detail = $row['Problem_detail'];
                $Operational_picture = $row['Problem_picture'];

                echo "
                    <tr>
                        <td colspan=\"2\">
                            <h3>Operational details</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Create date:
                        </td>
                        <td>
                            $Operational_date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Create time:
                        </td>
                        <td>
                            $Operational_time
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            $Operational_title
                        </td>
                    </tr>
                    <tr>
                        <td>
                            details
                        </td>
                        <td>
                            $Operational_detail
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Picture
                        </td>
                        <td>
                            <img src=\"./$Operational_picture\" width=\"500px\" alt=\"Operational_Picture\">
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
    <h3>รายละเอียดคำร้องเรียน</h3>
    <table>
        <tr>    
            <td colspan="2" align="right">
                <input type="button" value="กลับ" onclick="history.back()">
            </td>
        </tr>
        <tr>
            <td>
                วันที่เพิ่ม:
            </td>
            <td>
                <?php echo $Complaint_date; ?>
            </td>
        </tr>
        <tr>
            <td>
                เวลาที่เพิ่ม:
            </td>
            <td>
                <?php echo $Complaint_time; ?>
            </td>
        </tr>
        <tr>
            <td>
                หัวข้อ
            </td>
            <td>
                <?php echo $Complaint_title; ?>
            </td>
        </tr>
        <tr>
            <td>
                รายละเอียดคำร้องเรียน
            </td>
            <td>
                <?php echo $Complaint_detail; ?>
            </td>
        </tr>
        <tr>
            <td>
                รูปภาพ
            </td>
            <td>
                <img src="./<?php echo $Complaint_picture; ?>" width="500px" alt="Complaint_Picture">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <?php
            // fetch operational data
            if ($row['Operational_ID']!=null)
            {
                $sql = "select * from Problem where Problem_ID = $Operational_ID;";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $Operational_date = $row['Problem_date'];
                $Operational_time = $row['Problem_time'];
                $Operational_title = $row['Problem_title'];
                $Operational_detail = $row['Problem_detail'];
                $Operational_picture = $row['Problem_picture'];

                echo "
                    <tr>
                        <td colspan=\"2\">
                            <h3>รายละเอียดการดำเนินงาน</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            วันที่เพิ่ม:
                        </td>
                        <td>
                            $Operational_date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            เวลาที่เพิ่ม:
                        </td>
                        <td>
                            $Operational_time
                        </td>
                    </tr>
                    <tr>
                        <td>
                            หัวข้อ
                        </td>
                        <td>
                            $Operational_title
                        </td>
                    </tr>
                    <tr>
                        <td>
                            รายละเอียดการดำเนินงาน
                        </td>
                        <td>
                            $Operational_detail
                        </td>
                    </tr>
                    <tr>
                        <td>
                            รูปภาพ
                        </td>
                        <td>
                            <img src=\"./$Operational_picture\" width=\"500px\" alt=\"รูปภาพการดำเนินงาน\">
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