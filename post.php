<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>アンケートフォーム</title>
</head>

<body>
    <div class="menu">
        <h3>地元アンケート</h3>
        <ul>
            <li>あなたの街では下の写真をなんと呼ぶ？</li>
            <p><img width=300 src="img/img1.jpg" alt=""></p><br>
        </ul>
    </div>
<!-- getはURLに見えるがpostは見えない為，パスワード等送る場合はpost -->
    <li>出身都道府県をお答えください。</li>
    <form action="write.php" method="post">
        <p>出身地: <input type="text" name="hometown"></p>
        <li>写真の呼び方をお答えください。</li>
        <p><input type="radio" name="name" value="サビオ">サビオ
            <input type="radio" name="name" value="カットバン">カットバン
            <input type="radio" name="name" value="バンドエイド">バンドエイド
            <input type="radio" name="name" value="ばんそうこう">ばんそうこう
            <input type="radio" name="name" value="リバテープ">リバテープ
            <input type="radio" name="name" value="キズバン">キズバン
            <input type="radio" name="name" value="その他">その他
            <!-- <p>その他: <input type="text" name="name"></p> -->
        </p>
        <input type="submit" value="送信">
    </form>
</body>

</html>
