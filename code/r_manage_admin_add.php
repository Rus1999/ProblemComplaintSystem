<?php
    include("./t_connect.php");
    include("./t_headmenu.php");
?>

<table class="table-content">
    <form action="./r_manage_admin_add_pro.php" method="post">
        <tr>
            <td>
                <h3>Add admin</h3>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Admin_fname" placeholder="first name">
            </td>
            <td>
                <input type="text" name="Admin_lname" placeholder="last name">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Admin_phonenumber" placeholder="phone number">
            </td>
        </tr>
        <tr>
            <td>
                <input type="email" name="Admin_email" placeholder="email@example.com">
            </td>
        </tr>
        <tr>
            <td>
                <input type="tel" name="Admin_username" placeholder="username">
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" name="Admin_password" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Add admin">
                <input type="reset" value="clear">
            </td>
        </tr>
    </form>
</table>

<?php
    include("./t_foot.php");
?>