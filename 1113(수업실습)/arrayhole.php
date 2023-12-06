<?php
  ini_set( 'display_errors', '0' );
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array();		// 배열의 생성
	$arr[2] = "apple";
	$arr[3] = "banana";
	$arr[4] = "orange";
	// $arr[0]과 $arr[1]은 배열의 홀(hole)이 됨.

	for ($i = 0; $i < count($arr); $i++) { 
		echo "\\$arr[$i] : ".$arr[$i]."<br>";
	}
	echo "<br>";

	foreach ($arr as $element){
		echo $element."<br>";
	}
?>

</body>

</html>