<?php
    include("./t_connect.php");
    include("./t_headmenu.php");

    // when login fail
    if(isset($_GET['error']))
    {
        $errorMessage = $_GET['error'];
    }
    else
    {
        $errorMessage = "";
    }
?>


<table align="center" style="padding: 7%;">
    <tr>
        <td>
            <h3>Login</h3>
        </td>
    </tr>
    <form action="./r_login_pro.php" method="post" >
        <tr>
            <td>
                <input type="text" name="login_username" placeholder="username">
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" name="login_password" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Login">
            </td>
        </tr>
        <!-- error message -->
        <tr>
            <td>
                <font color="red"><?php echo $errorMessage ?></font>
            </td>
        </tr>
    </form>
</table>

<?php
    $conn->close();
    include("./t_foot.php");
?>