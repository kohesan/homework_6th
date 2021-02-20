<html>

<head>
    <meta charset="utf-8">
    <title>アンケート集計結果</title>
</head>

<body>

<h1>アンケート集計結果はこちら</h1>
<p>実は知らなかった真実があるのでは！？</p>

<?php
// ファイルを開く
$openFile = fopen('./data/data.txt','r');

// ファイル内容を1行ずつ読み込んで出力
// while文で読み込む行がなくなり，falseになるとループ終了。
// nl2brで\nをbrタグに変更

echo '<table border="3" width="70%">';
echo '<tr>';
echo '<th bgcolor="#00ced1">時間</th>';
echo '<th bgcolor="#00ced1">出身地</th>';
echo '<th bgcolor="#00ced1">呼び方</th>';
echo '</tr>';

while ($line = fgets($openFile)) {
    $str = explode("," , $line );
    echo '<tr>';
    foreach ($str as $key => $val) {
        // $valは使わない
        echo '<td>' . $str[$key] . '</td>';
    }
    echo '</tr>';
}

echo '</table>';

// ファイルを閉じる
fclose($openFile);
?>




    <ul>
        <li><a href="post.php">アンケート画面に戻る</a></li>
    </ul>
</body>

</html>
