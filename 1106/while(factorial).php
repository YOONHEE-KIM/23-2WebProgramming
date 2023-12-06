<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문으로 factorial 구하기</title>
</head>
<body>
<h3>while문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.</h3>
<hr> 
<form method="post" action="">
    <label for="number">숫자 입력:</label>
    <input type="text" id="number" name="number" required>
    <button type="submit">확인</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["number"];

    if (is_numeric($userInput) && $userInput >= 0) {
        function factorial($n) {
            $result = 1;
            $i = 1;

            while ($i <= $n) {
                $result *= $i;
                $i++;
            }

            return $result;
        }

        echo "입력값: $userInput<br>";
        echo "결과: " . factorial($userInput);
    } else {
        echo "!양수 입력 필요!";
    }
}
?> 
</body>
</html>