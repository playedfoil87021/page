<?php
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
mission_tracker
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>クエスト報告</title>
    <link rel="stylesheet" href="./report.css">
    <script src="./report.js"></script>
</head>
<header><iframe src="../../header/header1.php" frameborder="0" width="100%" scrolling="no"></iframe></header>

<body>
    <div class="quest_area">
        <div class="title">現在受けれるクエストはこちら！</div>
        <div class="box_area">
            <div class="quest_title inbox">
           
            </div>
            <div class="quest_time inbox">目標時間:</div>
        </div>

        <div>
            <input type="file" name="quest_result_file" id="quest_file" accept="image/*" multiple>
        </div>
        <div>
            <input type="submit" value="送信" onclick="uploadFile()">
            <a href="../"><button class="cancel">キャンセル</button></a>
        </div>
    </div>
</body>

</html>