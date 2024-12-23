<?php
// まず var_dump で中身を確認
// var_dump($_POST);
// exit();
// 入力データを受け取る
$nickname = $_POST['nickname'];
$like = $_POST['like'];
$dislike = $_POST['dislike'];

// ディレクトリ確認
if (!file_exists('data')) {
    mkdir('data'); // ディレクトリがない場合は作成
}

// データをCSV形式に整える（改行で1行ずつ）
$write_data = "{$nickname},{$like},{$dislike}\n";

// CSVファイルに追記モードで書き込み
$file = fopen('data/data.csv', 'a');
fwrite($file, $write_data); // 1行のデータを追記
fclose($file);

// 完了メッセージを表示
echo "アンケートが送信されました！<br>";
echo '<a href="kadai.index.php">アンケートに戻る</a><br>';
echo '<a href="kadai.read.php">結果を見る</a>';
?>


