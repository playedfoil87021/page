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
