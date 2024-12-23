
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート入力</title>
</head>
<body>
    <h1>アンケート</h1>
    <form action="kadai.create.php" method="post">
        <label for="nickname">ニックネーム：</label>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <label for="like">好きな漫画：</label>
        <input type="text" id="like" name="like" required><br><br>

        <label for="dislike">最近気になる漫画：</label>
        <input type="text" id="dislike" name="dislike" required><br><br>

        <button type="submit">送信</button>
    </form>
</body>
</html>


