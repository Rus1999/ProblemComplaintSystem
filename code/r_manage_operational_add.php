<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $sql = "select * from Problem where Problem_status=1 and Operational_ID is null;";
    $result = $conn->query($sql);
?>

<h3>Add Operational</h3>
<table>
    <form action="./r_manage_operational_add_pro.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>
                Operational of &nbsp;
                <select name="Complaint_ID">
                    <?php
                        while ($row = $result->fetch_assoc())
                        {
                            $Complaint_ID = $row['Problem_ID'];
                            $Complaint_title = $row['Problem_title'];

                            echo "<option value=\"$Complaint_ID\">$Complaint_ID: $Complaint_title</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Operational_title" placeholder="opeational's title">
            </td>
        </tr>
        <tr>
            <td>
                <textarea name="Operational_detail" cols="30" rows="10" placeholder="Operational's detail"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="image">Image</label>
                <input type="file" name="Operational_picture">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </form>
</table>

<?php
    $conn->close();
    include("./t_foot.php");
?>