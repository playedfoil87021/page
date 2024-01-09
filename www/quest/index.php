<?php
$servername = "localhost:65233";
$username = "root";
$password = "P2L13foJQeebl3Jl";
$dbname = "questwalker";

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
        $stmt->bindParam(':quest_end', $questEnd);
        $stmt->bindParam(':change_count', $changeCountInFunc);
        $stmt->execute();
    } catch (PDOException $e) {
        // エラーハンドリング：エラーが発生した場合にエラーメッセージを表示
        exit('データベースエラー: ' . $e->getMessage());
    }

}
?>

<html>
<head>

</head>
<body>

</body>
</html>