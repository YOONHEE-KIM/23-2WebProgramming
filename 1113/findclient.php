<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나이가 30이상인 고객 찾기</title>
</head>
<body>
<h3>고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.
<pre>

이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일

</pre>
이 파일을 읽어 나이가 30 이상인 고객을 출력하는 프로그램을 작성하시오.</h3>
<hr>
<?php
$filename = 'client.txt';

// 파일 읽기
$file = fopen($filename, 'r');

if ($file) {
    // 파일 내용을 줄 단위로 읽어오기
    while (($line = fgets($file)) !== false) {
        // 줄을 탭 문자로 분리하여 배열로 변환
        $data = explode("\t", $line);

        // 배열에 적어도 4개의 항목이 있어야 함
        if (count($data) >= 4) {
            // 배열에서 이름, 나이, 성별, 이메일 추출
            $name = trim($data[0]); // 양쪽 공백 제거
            $age = (int)trim($data[1]); // 양쪽 공백 제거하고 정수로 변환
            $gender = trim($data[2]); // 양쪽 공백 제거
            $email = trim($data[3]); // 양쪽 공백 제거

            // 나이가 30세 이상인 경우 출력
            if ($age >= 30) {
                echo "이름: $name, 나이: $age, 성별: $gender, 이메일: $email\n";
            }
        }
    }

    // 파일 닫기
    fclose($file);
} else {
    echo "파일을 열 수 없습니다.";
}
?>

</body>
</html>