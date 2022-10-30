<?php
    include("./t_connect.php");
    include("./t_headmenu.php");
?>

<h3>Add Complaint</h3>
<table>
    <form action="./r_manage_complaint_add_pro.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>
                <input type="text" name="Complaint_title" placeholder="complaint's title">
            </td>
        </tr>
        <tr>
            <td>
                <textarea name="Complaint_detail" cols="30" rows="10" placeholder="complaint's detail"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="image">Image</label>
                <input type="file" name="Complaint_picture">
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