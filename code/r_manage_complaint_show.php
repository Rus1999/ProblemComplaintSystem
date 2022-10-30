<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    if ($_SESSION['status']==1)
    {
        $sql = "select * from Problem where Problem_status=1 and Create_Person_ID=".$_SESSION['id'].";";
    }
    else
    {
        $sql = "select * from Problem where Problem_status=1;";
    }
    
    $result = $conn->query($sql);
?>

<h3>Manage Complaint</h3>
<a href="./r_manage_complaint_add.php">Add Complaint</a>
<table border="1">
    <tr>
        <td>Complaint_ID</td>
        <td>date</td>
        <td>time</td>
        <td>title</td>
        <td>detail</td>
        <td>manage</td>
    </tr>
    <?php
        while ($row=$result->fetch_assoc())
        {
            $Complaint_ID = $row['Problem_ID'];
            $Complaint_date = $row['Problem_date'];
            $Complaint_time = $row['Problem_time'];
            $Complaint_title = $row['Problem_title'];

            echo "
                <tr>
                    <td>$Complaint_ID</td>
                    <td>$Complaint_date</td>
                    <td>$Complaint_time</td>
                    <td>$Complaint_title</td>
                    <td><a href=\"./r_manage_complaint_detail.php?Complaint_ID=$Complaint_ID\">detail</a></td>
                    <td>
                        <a href=\"./r_manage_complaint_edit.php?Complaint_ID=$Complaint_ID\">edit</a>
                        |
                        <a href=\"./r_manage_complaint_delete.php?Complaint_ID=$Complaint_ID\">delete</a>
                    </td>
                </tr>
            ";
        }
    ?>
</table>

<?php
    $conn->close();
    include("./t_foot.php");
?>