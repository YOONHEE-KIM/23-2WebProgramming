<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내림차순 함수</title>
</head>
<body>
<h3>배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.
   (hint : sort와 array_reverse함수 사용)</h3>
<hr>
<form method="post" action="">
    <label for="arrayInput">배열 :</label>
    <input type="text" id="arrayInput" name="arrayInput" placeholder="예: 1, 7, 2, 0, 9" required>
    <button type="submit">확인</button>
</form>
<?php
function revsort(&$array) {
    sort($array);
    $array = array_reverse($array);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputArray = explode(",", $_POST["arrayInput"]);
    $inputArray = array_map('trim', $inputArray);

    // 숫자로만 이루어진 배열인지 확인
    if (array_filter($inputArray, 'is_numeric') === $inputArray) {
        revsort($inputArray);
        echo "결과: ";
        print_r($inputArray);
    } else {
        echo "배열은 숫자만 입력";
    }
}
?>
</body>
</html>