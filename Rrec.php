<?php
$host = 'localhost';
$user = 'philseung';
$pw = '1234';
$dbName = 'test';

$conn = new mysqli($host, $user, $pw, $dbName);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$query = "SELECT Rinfo_Rname, Rinfo_img FROM Rinfo ORDER BY RAND() LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $ramenName = $row['Rinfo_Rname'];
  $ramenImg = $row['Rinfo_img'];

  $response = array('Rinfo_Rname' => $ramenName, 'Rinfo_img' => $ramenImg);
  echo json_encode($response);
} else {
  echo "No ramen found.";
}

$conn->close();
?>
