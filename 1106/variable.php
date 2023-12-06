<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable $a</title>
</head>
<body>
<h3> $a라는 변수의 값이 홀수이면 그 숫자 다음 숫자인 짝수를 출력하고, $a의 값이 짝수이면 그 수를 출력하는 함수를 작성하고 테스트하시오.</h3>
<hr>
<form method="post" action="">
    <label for="number">변수 입력:</label>
    <input type="text" id="number" name="number" required>
    <button type="submit">확인</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["number"];

    // 입력된 숫자가 유효한지 검사
    if (is_numeric($userInput)) {
        function forEvenNum($a) {
            if ($a % 2 == 1) {
                // $a가 홀수면 다음 짝수 계산
                $result = $a + 1;
            } else {
                // $a가 짝수면 그대로 출력
                $result = $a;
            }

            echo $result;
        }

        // 함수 호출
        echo "입력 변수 값: $userInput<br>";
        echo "결과: ";
        forEvenNum($userInput);
    } else {
        echo "변수를 입력하세요.";
    }
}
?>
</body>
</html>