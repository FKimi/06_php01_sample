<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>アンケート結果</h1>
    <table>
        <tr>
            <th>ニックネーム</th>
            <th>好きな漫画</th>
            <th>最近気になる漫画</th>
        </tr>
        <?php
        // CSVファイルを開いて内容を読み取る
        $file = fopen('data/data.csv', 'r');
        while ($line = fgets($file)) {
            // カンマで分割して配列に変換
            $data = explode(",", trim($line));
            echo "<tr>";
            foreach ($data as $cell) {
                echo "<td>" . htmlspecialchars($cell, ENT_QUOTES, 'UTF-8') . "</td>";
            }
            echo "</tr>";
          }
          fclose($file); // ファイルを閉じる
          ?>
    </table>
    <a href="kadai.index.php">アンケートに戻る</a>
</body>
</html>