<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 글자 수 분석</title>
</head>
<body>
<h3>'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.</h3>
<hr>
<?php
$filename = 'exam.txt';
$file = fopen($filename, 'r');

if ($file) {
    $lineCount = $wordCount = $charCount = 0;

    while (($line = fgets($file)) !== false) {
        $lineCount++;

        // 단어 수
        $words = str_word_count($line);
        $wordCount += $words;

        // 글자 수
        $charCount += strlen($line);
    }

    echo "줄 수: $lineCount\n";
    echo "단어 수: $wordCount\n";
    echo "글자 수: $charCount\n";

    // 파일 닫기
    fclose($file);
} else {
    echo "파일을 열 수 없습니다.";
}
?>

</body>
</html>