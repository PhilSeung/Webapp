<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'philseung';
		$pw = '1234';
		$dbName = 'test';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$Rmember_ID = $_POST['ID']; //post로 보냈으니 post로 받아야함
	    $Rmember_PW = $_POST['PW'];
	    $Rmember_CPW = $_POST['CPW'];
	    $Rmember_NAME = $_POST['NAME'];
		$Rmember_Phone = $_POST['Phone'];

		$sql = "insert into Rmember (
				Rmember_ID,
				Rmember_PW,
				Rmember_CPW,
				Rmember_NAME,
				Rmember_Phone
		)";
		
		$sql = $sql. "values (
				'$Rmember_ID',
				'$Rmember_PW',
				'$Rmember_CPW',
				'$Rmember_NAME',
				'$Rmember_Phone'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("success inserting")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "Rlogin.html";
</script>


</html>