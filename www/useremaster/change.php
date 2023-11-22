<?php
session_start();

// ログイン中のユーザーの情報をデータベースから取得
$loggedInUser = null;

if (isset($_SESSION['accountId'])) {
    try {
        // データベースに接続
        $dsn = 'mysql:dbname=questwalker;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'mysql';

        $PDO = new PDO($dsn, $user, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // データベースからユーザー情報を取得
        $stmt = $PDO->prepare("SELECT * FROM acount_list WHERE account_id = :account_id");
        $stmt->bindParam(':account_id', $_SESSION['accountId']);
        $stmt->execute();
        $loggedInUser = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // エラーハンドリング：エラーが発生した場合にエラーメッセージを表示
        exit('データベースエラー: ' . $e->getMessage());
    }
}

// フォームからセッションに格納
$accountName = isset($_SESSION['accountName']) ? $_SESSION['accountName'] : '';
$accountId = isset($_SESSION['accountId']);
$accountId1 = isset($_SESSION['accountId1']);
$mailAddress = isset($_SESSION['mailAddress']) ? $_SESSION['mailAddress'] : '';
$phoneNumber = isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : '';
$gender1 = isset($_SESSION['gender1']) ? $_SESSION['gender1'] : '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="change_process.php">
    <h1>変更する内容を記述してください</h1>
    <div>アカウント名</div>
    <input pattern="^[a-zA-Z0-9]+$" type="text" name="account_name"
      value="<?php echo htmlspecialchars($loggedInUser['account_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <div>ユーザーID</div>
    <input type="text" name="account_id1"
      value="<?php echo htmlspecialchars($loggedInUser['account_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <div>メールアドレス</div>
    <input type="email" name="mail_address"
      value="<?php echo htmlspecialchars($loggedInUser['mail_address'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <div>電話番号</div>
    <input type="tel" pattern="[0-9]{10,11}" name="phone_number"
      value="<?php echo htmlspecialchars($loggedInUser['phone_number'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <div>性別</div>
    <div>
      <input type="radio" name="gender" value="0" <?php if ($loggedInUser['gender'] == "0") echo 'checked' ?>>hoge
      <input type="radio" name="gender" value="1" <?php if ($loggedInUser['gender'] == "1") echo 'checked' ?>>fuga
      <input type="radio" name="gender" value="2" <?php if ($loggedInUser['gender'] == "2") echo 'checked' ?>>piyo
    </div>
    <div>
      <input type="submit" value="入力内容確認">
    </div>
  </form>
</body>

</html>

