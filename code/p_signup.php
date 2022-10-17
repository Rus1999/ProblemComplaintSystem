<?php
    include("./tem_connect.php");
    include("./tem_header.php");
    include("./tem_menu.php");
?>

<form action="./p_signup_pro.php" method="post">
    <input type="text" name="Person_fname" placeholder="First name">
    <input type="text" name="Person_lname" placeholder="Last name"><br>
    <input type="text" name="Person_phonenumber" placeholder="Phone number"><br>
    <input type="email" name="Person_email" placeholder="example@email.com"><br>
    <input type="text" name="Person_username" placeholder="Username"><br>
    <input type="password" name="Person_password" placeholder="Password"><br>
    <input type="radio" name="Person_status" value="1" id="Member">
    <label for="Member">Member</label>
    <input type="radio" name="Person_status" value="2" id="Employee">
    <label for="Employee">Employee</label>
    <br>
    <input type="submit" value="Sign Up">
    <input type="button" value="Cancel">
</form>

<?php
    // close connection
    $conn->close();
    include("./tem_footer.php");
?>