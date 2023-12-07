<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for문 출력</title>
</head>
<body>
<pre>
<h3> for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오. 
A
A B
A B C
A B C D
A B C D E 
A B C D
A B C
A B
A
</h3></pre>
<hr>
<h2>결과</h2>
<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }
    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }
    echo "<br>";
}
?>
<br>
<hr>
새로운 변수를 입력해 원하는 출력을 해보자. 
<form method="post" action="">
    <label for="rows">행 수 입력:</label>
    <input type="number" id="rows" name="rows" required>
    <button type="submit">확인</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = $_POST["rows"];

        for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>