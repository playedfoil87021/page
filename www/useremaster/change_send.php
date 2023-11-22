<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <?php

  // セッションを開始
  session_start();

  // セッションからデータを取得
  $accountName = isset($_SESSION['accountName']) ? $_SESSION['accountName'] : '';
  $accountId = isset($_SESSION['accountId']) ? $_SESSION['accountId'] : '';
  $accountId1 = isset($_SESSION['accountId1']) ? $_SESSION['accountId1'] : '';
  $mailAddress = isset($_SESSION['mailAddress']) ? $_SESSION['mailAddress'] : '';
  $phoneNumber = isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : '';
  $gender1 = isset($_SESSION['gender1']) ? $_SESSION['gender1'] : '';

  try {
    // データベースに接続
    $dsn = 'mysql:dbname=questwalker;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'mysql';
    $PDO = new PDO($dsn, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQLクエリを作成し、データを更新
    $sql = 'UPDATE acount_list SET
        `account_name` = :account_name,
        `account_id` = :account_id,
        `mail_address` = :mail_address,
        `phone_number` = :phone_number,
        `gender` = :gender
        WHERE `account_id` = @accountId1';


    // $stmtを定義
    $stmt = $PDO->prepare($sql);

    // バインド
    $stmt->bindValue(':account_name', $accountName);
    $stmt->bindValue(':account_id', $accountId1);
    $stmt->bindValue(':mail_address', $mailAddress);
    $stmt->bindValue(':phone_number', $phoneNumber);
    $stmt->bindValue(':gender', $gender1);
    // SQLを実行
    $success = $stmt->execute();

    if ($success) {
      // 挿入が成功した場合、挿入されたデータを表示
      echo "<h2>更新された内容</h2>";
      echo "<ul>";
      echo "<li>アカウント名: " . htmlspecialchars($accountName) . "</li>";
      echo "<li>アカウントID: " . htmlspecialchars($accountId1) . "</li>";
      echo "<li>メールアドレス: " . htmlspecialchars($mailAddress) . "</li>";
      echo "<li>電話番号: " . htmlspecialchars($phoneNumber) . "</li>";
      echo "<li>性別: " . htmlspecialchars($gender1) . "</li>";
      echo "</ul>";

      // セッション変数をクリア
      $_SESSION['accountName'] = '';
      $_SESSION['accountId1'] = '';
      $_SESSION['mailAddress'] = '';
      $_SESSION['phoneNumber'] = '';
      $_SESSION['password'] = '';
      $_SESSION['gender1'] = '';
    } else {
      echo "データの更新に失敗しました。";
    }

  } catch (PDOException $e) {
    // エラーハンドリング：エラーが発生した場合にエラーメッセージを表示
    exit('データベースエラー: ' . $e->getMessage());
  }
  ?>
  <a href="http://localhost/ira/user_master/logout.php">logout</a>
</body>

</html>