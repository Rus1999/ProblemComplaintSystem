<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $sql = "select * from Problem where Problem_status=2;";
    $result = $conn->query($sql);
?>

<h3>Manage Operational</h3>
<a href="./r_manage_operational_add.php">Add Operational</a>
<table border="1">
    <tr>
        <td>Operational</td>
        <td>date</td>
        <td>time</td>
        <td>title</td>
        <td>detail</td>
        <td>manage</td>
    </tr>
    <?php
        while ($row=$result->fetch_assoc())
        {
            $Operational_ID = $row['Problem_ID'];
            $Operational_date = $row['Problem_date'];
            $Operational_time = $row['Problem_time'];
            $Operational_title = $row['Problem_title'];

            echo "
                <tr>
                    <td>$Operational_ID</td>
                    <td>$Operational_date</td>
                    <td>$Operational_time</td>
                    <td>$Operational_title</td>
                    <td><a href=\"./r_manage_operational_detail.php?Operational_ID=$Operational_ID\">detail</a></td>
                    <td>
                        <a href=\"./r_manage_operational_edit.php?Operational_ID=$Operational_ID\">edit</a>
                        |
                        <a href=\"./r_manage_operational_delete.php?Operational_ID=$Operational_ID\">delete</a>
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