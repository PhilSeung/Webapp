<?php
$host = 'localhost';
$user = 'philseung';
$pw = '1234';
$dbName = 'test';
$mysqli = new mysqli($host, $user, $pw, $dbName);

$Rinfo_Rname = $_GET['Rinfo_Rname']; // Rinfo_Rname 값을 GET 파라미터로 받아옴

$sql = "SELECT * FROM Rinfo WHERE Rinfo_Rname = '$Rinfo_Rname'";
$result = mysqli_query($mysqli, $sql);

$row = mysqli_fetch_assoc($result);

$myObj = new stdClass();

$myObj->Rinfo_Rname = $row['Rinfo_Rname'];
$myObj->Rinfo_soup = $row['Rinfo_soup'];
$myObj->Rinfo_spicy = $row['Rinfo_spicy'];
$myObj->Rinfo_sum = $row['Rinfo_sum'];
$myObj->Rinfo_option_AC_time = $row['Rinfo_option_AC_time'];
$myObj->Rinfo_option_AD_time = $row['Rinfo_option_AD_time'];
$myObj->Rinfo_option_BC_time = $row['Rinfo_option_BC_time'];
$myObj->Rinfo_option_BD_time = $row['Rinfo_option_BD_time'];
$myObj->Rinfo_img = $row['Rinfo_img'];

$myObj->Rinfo_img_url = 'images/' . $row['Rinfo_img'];

$myJSON = json_encode($myObj);

echo $myJSON;
?>
