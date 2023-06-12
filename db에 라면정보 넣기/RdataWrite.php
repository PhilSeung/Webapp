<html>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

$host = 'localhost';
$user = 'philseung';
$pw = '1234';
$dbName = 'test';
$mysqli = new mysqli($host, $user, $pw, $dbName);


$mysqli->query("ALTER TABLE Rinfo MODIFY COLUMN Rinfo_option_AC_time TIME");
$mysqli->query("ALTER TABLE Rinfo MODIFY COLUMN Rinfo_option_AD_time TIME");
$mysqli->query("ALTER TABLE Rinfo MODIFY COLUMN Rinfo_option_BC_time TIME");
$mysqli->query("ALTER TABLE Rinfo MODIFY COLUMN Rinfo_option_BD_time TIME");

// POST 데이터 가져오기
$Rinfo_Rname = $_POST['Rname'];
$Rinfo_soup = $_POST['soup'];
$Rinfo_spicy = $_POST['spicy'];
$Rinfo_sum = $_POST['sum'];
$Rinfo_option_AC_time = $_POST['option_AC_time'];
$Rinfo_option_AD_time = $_POST['option_AD_time'];
$Rinfo_option_BC_time = $_POST['option_BC_time'];
$Rinfo_option_BD_time = $_POST['option_BD_time'];

// SQL 쿼리 작성
$sql = "insert into Rinfo (
          Rinfo_Rname,
          Rinfo_soup,
          Rinfo_spicy,
          Rinfo_sum,
          Rinfo_option_AC_time,
          Rinfo_option_AD_time,
          Rinfo_option_BC_time,
          Rinfo_option_BD_time
        )";

        $sql = $sql. "values (
          '$Rinfo_Rname',
          '$Rinfo_soup',
          '$Rinfo_spicy',
          '$Rinfo_sum',
          '$Rinfo_option_AC_time',
          '$Rinfo_option_AD_time',
          '$Rinfo_option_BC_time',
          '$Rinfo_option_BD_time'
        )";

// SQL 쿼리 실행
if ($mysqli->query($sql)) {
  echo '<script>alert("success inserting")</script>';
} else {
  echo '<script>alert("fail to insert sql")</script>';
}

mysqli_close($mysqli);

?>

<script>
  location.href = "Rdata_input.html";
</script>
</html>
