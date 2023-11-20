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
    $login = $_POST['login'];
    $password = $_POST['password'];

    echo $login."님의 비밀번호는 ".$password."입니다.";
?>
</body>
</html>