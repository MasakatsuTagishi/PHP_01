<?php
// var_dump($_POST);
// exit();

$deadline = $_POST["deadline"];
$num = $_POST["num"];
$name = $_POST["name"];
$body = $_POST["body"];
// 「option」 + ¥ \バックスラッシュ
$write_data = "{$deadline} {$num} {$name} {$body} \n";
$file = fopen('data/taion.csv','a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:kadai_input.php");