<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  // セッションを開始
  session_start();

  // セッションからデータを取得
  $accountName = isset($_SESSION['accountName']) ? $_SESSION['accountName'] : '';
  $accountId = isset($_SESSION['accountId']) ? $_SESSION['accountId'] : '';
  $mailAddress = isset($_SESSION['mailAddress']) ? $_SESSION['mailAddress'] : '';
  $phoneNumber = isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : '';
  $password1 = isset($_SESSION['password1']) ? $_SESSION['password1'] : '';
  $gender1 = isset($_SESSION['gender1']) ? $_SESSION['gender1'] : '';

  try {
    // データベースに接続
    $dsn = 'mysql:dbname=questwalker;host=localhost:65233;charset=utf8';
    $user = 'root';
    $password = 'P2L13foJQeebl3Jl';
    $PDO = new PDO($dsn, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $hashedPassword = password_hash($password1, PASSWORD_BCRYPT);

    $sql = "SELECT count(*) FROM acount_list";

    $count_sql = $PDO->prepare($sql);
    $count_sql->execute();
    $count_num = $count_sql->fetchColumn() + 1; // アカウント数に1を加えて新しい識別子を生成
  
    /*//fetchColumn() + 1;
    if ($count_num > 0) {
      // 挿入が成功した場合の処理
      echo "挿入された行数: " . $count_num;
    } else {
      echo "データの挿入に失敗しました。";
    }
*/

    // SQLクエリを作成し、データを挿入
    $sql = "INSERT INTO acount_list (account_pk,account_name, account_id, mail_address, phone_number, pass_wd, gender) 
            VALUES (:account_pk,:account_name, :account_id, :mail_address, :phone_number, :pass_wd, :gender)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':account_pk', $count_num);
    $stmt->bindParam(':account_name', $accountName);
    $stmt->bindParam(':account_id', $accountId);
    $stmt->bindParam(':mail_address', $mailAddress);
    $stmt->bindParam(':phone_number', $phoneNumber);
    $stmt->bindParam(':pass_wd', $hashedPassword);
    $stmt->bindParam(':gender', $gender1);
    //$stmt->execute();
    $success = $stmt->execute(); // 挿入が成功したら true を返す
  
    if ($success) {
      // 挿入が成功した場合、挿入されたデータを表示
      echo "<h2>登録された内容</h2>";
      echo "<ul>";
      echo "<li>アカウント名: " . htmlspecialchars($accountName) . "</li>";
      echo "<li>アカウントID: " . htmlspecialchars($accountId) . "</li>";
      echo "<li>メールアドレス: " . htmlspecialchars($mailAddress) . "</li>";
      echo "<li>電話番号: " . htmlspecialchars($phoneNumber) . "</li>";
      echo "<li>パスワード: " . htmlspecialchars($hashedPassword) . "</li>";
      echo "<li>性別: " . htmlspecialchars($gender1) . "</li>";
      echo "</ul>";

      // セッション変数をクリア
      $_SESSION['accountName'] = '';
      $_SESSION['accountId'] = '';
      $_SESSION['mailAddress'] = '';
      $_SESSION['phoneNumber'] = '';
      $_SESSION['password'] = '';
      $_SESSION['gender1'] = '';
    } else {
      echo "データの挿入に失敗しました。";
    }
    // データベースへの挿入が成功したことをユーザーに通知するなどの処理を追加
  
  } catch (PDOException $e) {
    // エラーハンドリング：エラーが発生した場合にエラーメッセージを表示
    exit('データベースエラー: ' . $e->getMessage());
  }


  ?>
<button><a href="../../index.php" target="_top">トップ画面へ</a></button>
</body>

</html>