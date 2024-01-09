<?php
//DB連携
// MySQLサーバーへの接続パラメータの設定
$servername = "localhost:65233";
$username = "root";
$password = "P2L13foJQeebl3Jl";
$dbname = "questwalker";

// MySQLデータベースに接続
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 接続エラーの確認
if (!$conn) {
    die("データベースへの接続に失敗しました: " . mysqli_connect_error());
}
//クエストランダム

//クエスト変更（制限）

//タイマー

?>

<html>
<head>
<meta charset="UTF-8">
    <title>クエストトップ</title>
    <link rel="stylesheet" href="top.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="top.js"></script>
</head>
<header><iframe src="../header/header1.php" frameborder="0" width="100%" scrolling="no"></iframe></header>
<body>
    <p>本日のクエストはこちら！！</p>

    <p>終了時間</P>

    <div class="btn">
        <a href=./report><button class="success">達成報告</button></a>
        <button class="forgo">あきらめる</button>
    </div>

</body>
</html>