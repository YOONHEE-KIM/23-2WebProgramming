<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Built In Function</title>
</head>

<body>

<?php
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45);

	shuffle($arr);					// 배열 요소를 무작위로 재배치함.
	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i].", ";
	}
    
    sort($arr);		// 배열 정렬.
	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i].", ";
	}
    #????????????? shufle함수와 sort가 둘 다 실행되면서 숫자가 총 90개 출력됨..
?>

</body>

</html>