<?php

$name = $_POST['name'];
$home = $_POST['hometown'];

// ファイルに書き込み
$time = date('Y/m/d H:i:s');
// フォルダは作成する必要あり
$file = fopen('./data/data.txt','a');
fwrite($file, $time.','.$home.','.$name."\n");
fclose($file);

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>アンケート確認</title>
</head>

<body>

    <h1>アンケートを受け付けました！</h1>
    出身地：<?= h($home); ?><br>
    呼び方：<?= h($name); ?>
    <p>みんなのアンケート結果を確認してみましょう！</p>

    <ul>
        <li><a href="read.php">アンケート結果を見る</a></li>
        <li><a href="post.php">アンケート画面に戻る</a></li>
    </ul>
</body>

</html>
