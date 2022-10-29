<?php include("./Header.php");?>
<?php include("./Menu.php");?>
<?php include("./SessionCheck.php");?>
<?php include('./connection/connection.php');?>

<?php
//print_r($_FILES);
$DN_picture = "Image/none.png";

$dir = "uploadsNews/";
$DN_picture = $dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $DN_picture)){}
if ($DN_picture == "uploadsNews/"){
    $DN_picture = "Image/none.png";
}
$sql = "SELECT MAX(DN_ID) as DN_ID FROM dormnews;";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($query);

$DN_title = $_POST['TopNews'];
$DN_detail = $_POST['CenterNews'];
$DN_ID = $data['DN_ID'] + 1;
$DN_date = date('d/m/Y');
$AD_employeeID = $_SESSION["UserID"];
$sql="INSERT INTO `dormnews` (`DN_ID`, `DN_title`, `DN_picture`, `DN_detail`, `DN_date`, `AD_employeeID`) 
VALUES ('$DN_ID', '$DN_title', '$DN_picture','$DN_detail','$DN_date', '$AD_employeeID')";
$result = mysqli_query($conn,$sql);
//echo $sql;
if($result){
    echo'<br><br>
    <table align="center"><tr><td>
        <font size ="+20" color = "Black" >
        เพิ่มข้อมูลข่าวสารเสร็จสิ้น<br><br>
        </font>
        </td></tr></tr><td align="center">
        <a href="./ShowAdmin.php">
        <meta http-equiv="refresh" content="3; url=./Home.php">
        </a>กำลังนำคุณกลับไปหน้า Home
        </td>
    </tr>
    ';
} else {
    echo'<br><br>
    <table align="center"><tr><td>
        <font size ="+20" color = "red" >
        เพิ่มข้อมูลข่าวสารล้มเหลว<br><br>
        </font>
        </td></tr></tr><td align="center">
        <a href="./ShowAdmin.php">
        <meta http-equiv="refresh" content="3; url=./Home.php">
        </a>กำลังนำคุณกลับไปหน้า Home
        </td>
    </tr>
    ';
}



//<button class="btnOk">ตกลง</button>
?>
<?php include("./Footer.php");?>  