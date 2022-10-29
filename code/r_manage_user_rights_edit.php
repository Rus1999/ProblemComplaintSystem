<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    $Person_ID = $_GET['Person_ID'];

    $sql = "select * from Person where Person_ID=$Person_ID;";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Person_fname = $row['Person_fname'];
    $Person_lname = $row['Person_lname'];
    $Person_phonenumber = $row['Person_phonenumber'];
    $Person_email = $row['Person_email'];
    $Person_username = $row['Person_username'];
    $Person_status = $row['Person_status'];
    $Person_rights = $row['Person_rights'];

    if ($Person_status==1)
    {
        $status = "Member";
    }
    else if ($Person_status==2)
    {
        $status = "Employee";
    }
    else if ($Person_status==3)
    {
        $status = "Admin";
    }


    $rights1 = "";
    $rights2 = "";
    // usable
    if ($Person_rights==1)
    {
        $rights1 = "checked";
    } // lock
    else if ($Person_rights==0)
    {
        $rights2 = "checked";
    }
?>

<table>
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
            Status: 
        </td>
        <td>
            <?php echo $status; ?>
        </td>
    </tr>
    <form action="./r_manage_user_rights_edit_pro.php" method="post">
        <tr>
            <td>
                <input type="radio" name="Person_rights" value="1" <?php echo $rights1; ?>>Usable account
            </td>
            <td>
                <input type="radio" name="Person_rights" value="0" <?php echo $rights2; ?>>Locked account
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="button" value="back" onclick="history.back()">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="Person_ID" value=<?php echo $Person_ID; ?>>
            </td>
        </tr>
    </form>
</table>



<?php
    $conn->close();
    include("./t_foot.php")
?>