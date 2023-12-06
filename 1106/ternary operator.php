<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삼항연산자로 홀짝 확인</title>
</head>
<body>
<h3>변수 12에 대해 홀/짝 여부를 판단하는 프로그램을 삼항연산자( ? : )를 이용하여 작성고 테스트하시오.</h3>
<hr>
<?php
$value = 12;
$result = ($value % 2 == 1) ? "odd" : "even";
echo $result;
?>
</body>
</html>