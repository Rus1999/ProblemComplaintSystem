<?php
    session_start();

    $lng = $_GET['lng'];
    $_SESSION['lang'] = $lng;
?>

<meta http-equiv="refresh" content="0; url=index.php">
