<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연상배열</title>
</head>
<body>
<h3>다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.
<pre>    
Kim   Seoul
Lee    Pusan, Daegu
Choi   Inchon
Park   Suwon, Daejon
Jung   Kwangju, Chunchon, Wonju
</pre>

위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 (단, vardump() 함수는 사용하지 않음).</h3>
<hr>
<?php
$data = [
    'Kim'  => 'Seoul',
    'Lee'  => ['Pusan', 'Daegu'],
    'Choi' => 'Inchon',
    'Park' => ['Suwon', 'Daejon'],
    'Jung' => ['Kwangju', 'Chunchon', 'Wonju']
];


unset($data['Choi']);

foreach ($data as $name => $cities) {
    echo "$name: ";

    if (is_array($cities)) {
        echo implode(', ', $cities);
    } else {
        echo $cities;
    }

    echo "\n";
}
?>

</body>
</html>