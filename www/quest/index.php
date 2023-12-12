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
    $getTime = mysqli_query($connInFunc,"SELECT time FROM questwalker.quest_list LIMIT $randomNum,1");
    questDataSet($randomNum,$getTime);

    $row = mysqli_fetch_assoc($result);

    return $row['qu_name'];
}
function questDataSet($questId,$timeLimit)
{
    $dsn = 'mysql:dbname=questwalker;host=localhost:65233;charset=utf8';
    global $username;
    global $password;
    $PDO = new PDO($dsn, $username, $password);

    // エラーモードを設定
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $usrId = 10;
    $questEnd = date("Y/m/d H:i:s", strtotime("$timeLimit sec"));
    $changeCount = 0;
    try {
        $sql = "INSERT INTO mission_tracker(user_id,quest_id,quest_end,change_count) VALUES (:user_id,:quest_id,:quest_end,:change_count)on duplicate key update quest_id = VALUES(quest_id), quest_end = VALUES(quest_end),change_count = VALUES(change_count);";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':user_id', $usrId);
        $stmt->bindParam(':quest_id', $questId);
        $stmt->bindParam(':quest_end', $questEnd);
        $stmt->bindParam(':change_count', $changeCount);
        $stmt->execute();
    } catch (PDOException $e) {
        // エラーハンドリング：エラーが発生した場合にエラーメッセージを表示
        exit('データベースエラー: ' . $e->getMessage());
    }

}

$sessionDate = null; // $sessionDateを宣言

// 現在の日付を取得
$currentDate = date('Y-m-d');

// $sessionDateに現在の日付を設定
$sessionDate = $currentDate;

// 前回の日付と異なる場合、クエストを変更し、タイマーをリセット
if ($currentDate != $sessionDate) { //73行目で=にしているので動かない。
    $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
    $_SESSION['change_count'] = 0;
    $_SESSION['current_date'] = $currentDate;
}


// タイマーの初期値（秒単位）
$initialTime = 300;

// セッションからタイマーの値を取得
if (isset($_SESSION['timer'])) {
    $timeLeft = $_SESSION['timer'];
} else {
    $timeLeft = $initialTime;
}

// クエストが変更された場合
if (isset($_POST['changeQuest'])) {
    if ($_SESSION['change_count'] < 5) { // 上限を5回に設定
        $timeLeft = $initialTime;
        $_SESSION['change_count']++; // 回数をカウントアップ
        $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
        // タイマーをローカルストレージに保存
        echo "<script>localStorage.setItem('remainingTime', $timeLeft);</script>";
    }
}

// リセットボタンが押された場合
if (isset($_POST['resetQuest'])) {
    $_SESSION['change_count'] = 0;
    $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
    $_SESSION['current_date'] = $currentDate;
    // タイマーを初期値にリセットし、ローカルストレージに保存
    $timeLeft = $initialTime;
    echo "<script>localStorage.setItem('remainingTime', $timeLeft);</script>";
}


if ($currentDate != $sessionDate) {  //73行目で=にしているので動かない。
    $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
    $_SESSION['change_count'] = 0;
}

if (!isset($_SESSION['current_quest'])) {
    $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
    $_SESSION['change_count'] = 0;
}

// クエスト情報をセッションに保存
if ($currentDate != $sessionDate) { //73行目で=にしているので動かない。
    $_SESSION['current_quest'] = getRandomQuestFromDatabase($conn);
    $_SESSION['change_count'] = 0;
}

// タイマーをセッションに保存
if ($currentDate != $sessionDate) { //73行目で=にしているので動かない。
    $_SESSION['timer'] = $initialTime; // タイマーを初期時間に戻す
}

//$initialTime = $_SESSION['timer'];
$timeLeft = $initialTime;

$changeCount = $_SESSION['change_count'];
$maxChangeCount = 5;
$isButtonDisabled = ($changeCount >= $maxChangeCount);
$currentQuest = $_SESSION['current_quest'];

if ($changeCount >= 5) {
    $isButtonDisabled = true; // ボタンを無効にするフラグを設定
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クエストトップ</title>
    <link rel="stylesheet" href="top.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="top.js"></script>
</head>
<header><iframe src="../header/header1.php" frameborder="0" width="100%" scrolling="no"></iframe></header>

<body>
    <!--<div class="status">
        <p class="name">char_name</p>
        <img src="./img/rh.png" alt="" class="hp">
        <p class="hp_val">0</p>
        <img src="./img/rh.png" alt="" class="power">
        <p class="power_val">0</p>
        <img src="./img/rh.png" alt="" class="fast">
        <p class="fast_val">0</p>
        <img src="./img/rh.png" alt="" class="know">
        <p class="know_val">0</p>
    </div>
    <div class="level">
        <p class="level_txt">レベル:
        <div class="level_val">0</div>
        </p>
        <p class="next_level_txt">次のレベルまであと
        <div class="next_level_val">0</div>
        </p>
    </div>
    <div class="char_img">
        <img src="./img/no_image.jpg" alt="">
    </div>-->
    <div class="quest">
        <h1>現在のクエスト:
            <?php echo $currentQuest; ?>
        </h1>
        <p>変更回数:
            <?php echo $changeCount; ?>/
            <?php echo $maxChangeCount; ?>
        </p>
        <form method="post" action="">
            <p>↓デバッグ用</p>
            <input type="submit" name="resetQuest" value="クエストと回数をリセット" id="resetButton">
            <input type="hidden" name="loadedDate" id="loadedDate" value="">

            <input type="submit" name="changeQuest" value="クエストを変更する" id="changeButton">
        </form>
        <?php
        if ($changeCount >= 5) {
            echo "<p>変更回数の上限に達しました。</p>";
        }
        ?>
    </div>
    <div class="btn">
        <a href=./report><button class="success">達成報告</button></a>
        <button class="forgo">あきらめる</button>
    </div>
    <p>残り時間</p>
    <div id="timerCountdown" class="timer">

        <span id="timer">05:00</span>
    </div>
    <script src="timer.js"></script>
    <script>
        // PHPから出力された $isButtonDisabled を JavaScript 変数として取得
        var isButtonDisabled = <?php echo $isButtonDisabled ? 'true' : 'false'; ?>;

        // セッションから残り時間を取得
        var timeLeft = 0;

        // ページが読み込まれたときにタイマーを設定
        document.addEventListener('DOMContentLoaded', function () {
            // ローカルストレージからタイマーの値を取得
            var storedTime = localStorage.getItem('remainingTime');
            if (storedTime !== null) {
                timeLeft = parseInt(storedTime);
                setTimer(timeLeft);
            } else {
                setTimer(<?php echo $initialTime; ?>); // 初期値をセット
            }
        });

        // クエストを変更ボタンがクリックされたときの処理
        document.getElementById('changeButton').addEventListener('click', function () {
            if (!isButtonDisabled) {
                // 新しいクエストを取得
                getRandomQuestFromServer();
            }
        });


        // タイマーを設定する関数
        function setTimer(seconds) {
            var timer = document.getElementById('timer');
            var minutes, secondsText;

            var countdown = setInterval(function () {
                minutes = Math.floor(seconds / 60);
                secondsText = (seconds % 60).toString().padStart(2, '0');

                timer.textContent = minutes + ':' + secondsText;

                if (seconds <= 0) {
                    clearInterval(countdown);
                    // タイマーがゼロになったら何らかの処理を追加することができます。
                } else {
                    seconds--;
                }
            }, 1000);
        }


        // ボタンが無効の場合、ボタンを無効化
        if (isButtonDisabled) {
            document.getElementById('changeButton').disabled = true;
        }
    </script>

</body>

</html>