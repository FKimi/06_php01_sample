<?php
// 1から5の乱数を作成
$random_number = rand(0, 4);

// 乱数の値で条件分岐
if ($random_number === 0) {
  $result =  '大吉';
} elseif ($random_number === 1) {
    $result =  '中吉';
} elseif ($random_number === 2) {
    $result =  '小吉';
} elseif ($random_number === 3) {
    $result =  '凶';
}  else {
    $result  =  '大凶';
} 

?>

<!DOCTYPE html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
  </head>
  <body>
     <h1>今日の運勢は<span><?=$result?></span>です！！！！</h1>
  </body>
</html>