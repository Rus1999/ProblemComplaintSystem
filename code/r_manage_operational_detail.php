<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Operational_ID = $_GET['Operational_ID'];

    // fetch Operational data
    $sql = "select * from Problem where Problem_ID = $Operational_ID;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Operational_date = $row['Problem_date'];
    $Operational_time = $row['Problem_time'];
    $Operational_title = $row['Problem_title'];
    $Operational_detail = $row['Problem_detail'];
    $Operational_picture = $row['Problem_picture'];

    if ($Operational_picture==null)
    {
        $Operational_picture = "./images/no-pictures.png";
    }
?>

<h3>Operational Details</h3>
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
            <?php echo $Operational_date; ?>
        </td>
    </tr>
    <tr>
        <td>
            Create time:
        </td>
        <td>
            <?php echo $Operational_time; ?>
        </td>
    </tr>
    <tr>
        <td>
            Title
        </td>
        <td>
            <?php echo $Operational_title; ?>
        </td>
    </tr>
    <tr>
        <td>
            details
        </td>
        <td>
            <?php echo $Operational_detail; ?>
        </td>
    </tr>
    <tr>
        <td>
            Picture
        </td>
        <td>
            <img src="./<?php echo $Operational_picture; ?>" width="500px" alt="Operational_Picture">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
</table>

<?php
    $conn->close();
    include("./t_foot.php");
?>