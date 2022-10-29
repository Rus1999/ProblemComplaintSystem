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

    if ($Person_status==1)
    {
        $status="member";
    }
    else if($Person_status==2)
    {
        $status="employee";
    }
    else if($Person_status==3)
    {
        $status="admin";
    }


?>

<table>
    <tr>
        <td>
            <a href="./r_info_edit.php">Edit</a>
        </td>
    </tr>
    <tr>
        <td>
            ID: 
        </td>
        <td>
            <?php echo $Person_ID; ?>
        </td>
    </tr>
    <tr>
        <td>
            First name: 
        </td>
        <td>
            <?php echo $Person_fname; ?>
        </td>
    </tr>
    <tr>
        <td>
            Last name:
        </td>
        <td>
            <?php echo $Person_lname; ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone number: 
        </td>
        <td>
            <?php echo $Person_phonenumber; ?>
        </td>
    </tr>
    <tr>
        <td>
            Email: 
        </td>
        <td>
            <?php echo $Person_email; ?>
        </td>
    </tr>
    <tr>
        <td>
            Username: 
        </td>
        <td>
            <?php echo $Person_username; ?>
        </td>
    </tr>
    <tr>
        <td>
            Password: 
        </td>
        <td>
            <?php echo $Person_password; ?>
        </td>
    </tr>
    <tr>
        <td>
            Status: 
        </td>
        <td>
            <?php echo $status; ?>
        </td>
    </tr>
</table>


<?php
    $conn->close();
    include("./t_foot.php");
?>