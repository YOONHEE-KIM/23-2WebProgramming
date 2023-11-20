<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<?php
error_reporting(0);

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    echo $login . "님의 비밀번호는 " . $password . "입니다.";
} else {
    echo "Form 데이터가 전송되지 않았습니다.";
}
?>
</body>
</html>