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
session_start();
function getRandomQuestFromDatabase($connInFunc)
{
    //クエストの行数を取得
    $rowCount = mysqli_num_rows(mysqli_query($connInFunc, 'SELECT * FROM questwalker.quest_list'));
    //乱数をもとにクエストを決定
    $randomNum = rand(0, $rowCount - 1);

    //クエストを渡す
    $query = "SELECT qu_name FROM questwalker.quest_list LIMIT $randomNum,1";
    $result = mysqli_query($connInFunc, $query);

    if (!$result) {
        // クエリの実行に失敗した場合、エラー処理を行う代わりに false を返す
        return false;
    }
    $getTimeResult = mysqli_query($connInFunc, "SELECT timer FROM questwalker.quest_list LIMIT $randomNum,1");
    $timeLimitRow = mysqli_fetch_assoc($getTimeResult);
    $timeLimit = $timeLimitRow['timer'];
    questDataSet($randomNum, $timeLimit);

    $row = mysqli_fetch_assoc($result);

    return $row['qu_name'];
}

//今この人が受けてるぜ
function questDataSet($questId, $timeLimit)
{
    $dsn = 'mysql:dbname=questwalker;host=localhost:65233;charset=utf8';
    global $username;
    global $password;
    $PDO = new PDO($dsn, $username, $password);
    $changeCountInFunc = isset($_SESSION['change_count']) ? $_SESSION['change_count'] : 0;
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $usrId = $_SESSION['accountNumId'];
    $questEnd = date("Y/m/d H:i:s", strtotime("$timeLimit sec"));
    try {
        $sql = "INSERT INTO mission_tracker(
                    user_id,quest_id,quest_end,change_count
                ) VALUES (
                    :user_id,:quest_id,:quest_end,:change_count
                )on duplicate key update 
                    quest_id = VALUES(quest_id), 
                    quest_end = VALUES(quest_end),
                    change_count = VALUES(change_count);";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':user_id', $usrId);
        $stmt->bindParam(':quest_id', $questId);

    }
    catch (PDOException $e) {
        echo "データベースエラー: " . $e->getMessage();
        exit();
    }

}
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