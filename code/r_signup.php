<?php
    include("./t_headmenu.php");
?>

<table class="table-content">
    <form action="./r_signup_pro.php" method="post">
        <tr>
            <td>
                <h3>Sign Up</h3>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Person_fname" placeholder="first name">
            </td>
            <td>
                <input type="text" name="Person_lname" placeholder="last name">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Person_phonenumber" placeholder="phone number">
            </td>
        </tr>
        <tr>
            <td>
                <input type="email" name="Person_email" placeholder="email@example.com">
            </td>
        </tr>
        <tr>
            <td>
                <input type="tel" name="Person_username" placeholder="username">
            </td>
        </tr>
        <tr>
            <td>
                <input type="" name="Person_password" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="Person_status" value="1">Member
                <input type="radio" name="Person_status" value="2">Employee
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Sign Up">
                <input type="reset" value="clear">
            </td>
        </tr>
    </form>
</table>

<?php
    include("./t_foot.php");
?>