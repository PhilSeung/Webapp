<?php

$host = 'localhost';
$user = 'philseung';
$pw = '1234';
$dbName = 'test';
$con = new mysqli($host, $user, $pw, $dbName);

$ID = $_POST['ID']; // 아이디
$PW = $_POST['PW']; // 패스워드

$query = "select * from Rmember where Rmember_ID='$ID' and Rmember_PW='$PW'";		// id와 pw 확인

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($ID == $row['Rmember_ID'] && $PW == $row['Rmember_PW']) { // id와 pw가 맞다면 login
    echo "
    <html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <style>
            body {
                background-image: url('images/ramenBG.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .notification {
                background-color: #99E000; /* 로그인 성공일 때 파란색 */
                border: 1px solid darkblue;
                padding: 20px 50px; /* padding-top 값을 조정 */
                text-align: center;
                font-weight: bold;
                font-family: 'Gamja Flower', cursive;
                color: white;
                border-radius: 5px;
                font-size: 40px; /* 텍스트 크기 조정 */
            }
        </style>
        <link href='https://fonts.googleapis.com/css?family=Gamja+Flower' rel='stylesheet'>
    </head>
    <body>
        <div class='notification'>로그인 성공</div>
        <script>
            setTimeout(function() { 
                window.location.href = 'Rmain.html'; 
            }, 1500);
        </script>
    </body>
    </html>";
} else { // id 또는 pw가 다르다면 admin_login 폼으로
    echo "
    <html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <style>
            body {
                background-image: url('images/ramenBG.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .notification {
                background-color: #ED0000; /* 로그인 실패일 때 빨간색 */
                border: 1px solid darkred;
                padding: 20px 50px; /* padding-top 값을 조정 */
                text-align: center;
                font-weight: bold;
                font-family: 'Gamja Flower', cursive;
                color: white;
                border-radius: 5px;
                font-size: 40px; /* 텍스트 크기 조정 */
            }
        </style>
        <link href='https://fonts.googleapis.com/css?family=Gamja+Flower' rel='stylesheet'>
    </head>
    <body>
        <div class='notification'>로그인 실패</div>
        <script>
            setTimeout(function() { 
                window.location.href = 'Rlogin.html'; 
            }, 1500);
        </script>
    </body>
    </html>";
}

mysqli_close($con);

?>
