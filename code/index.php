<?php
    include("./t_connect.php");
    include("./t_headmenu.php");
    if ($_SESSION['lang'] == "")
    {
        $_SESSION['lang'] = "en";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
?>

<?php
    include("./t_foot.php");
?>