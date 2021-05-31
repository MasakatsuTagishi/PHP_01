<?php
// $num = rand(1,5);

// if ($num == 1) {
//     $result = "大吉";
// } else if ($num == 2){
//     $result = "中吉";
// } else if ($num == 3){
//     $result = "小吉";
// } else if ($num == 4){
//     $result = "凶";
// } else if ($num == 5){
//     $result = "大凶";
// }

$gazou = '<img src="img/席替え.png" alt="">';

$result = [$gazou,'中吉','小吉','凶','大凶'][rand(0,4)];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 h1 {
     color: red;
 }
</style>
<body>

<h1>今日の運勢は<?=$result?>です！！</h1>
    
</body>
</html>


