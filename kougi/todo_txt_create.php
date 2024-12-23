<?php
// まず var_dump で中身を確認
// var_dump($_POST);
// exit();

// キー名に送信元ファイルのname属性を指定する．
$todo = $_POST['todo'];
$deadline = $_POST['deadline'];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$deadline} {$todo}\n";

// 2024-12-18 PHPの課題
// 2024-12-19 企画考える
// 2024-12-20 企画考える
// 2024-12-21 企画考える
// 2024-12-22 企画考える

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/todo.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

// データ入力画面に移動する
header("Location:todo_txt_input.php");
exit();

