<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ユーザーがフォームにアカウントIDとパスワードを入力して送信した場合の処理
    
    // 入力データを取得
    $inputAccountId = $_POST['account_id'];
    $inputPassword = $_POST['pass_wd'];

    // データベースに接続
    $dsn = 'mysql:dbname=questwalker;host=localhost:65233;charset=utf8';
    $user = 'root';
    $password = 'P2L13foJQeebl3Jl';

    try {
        $PDO = new PDO($dsn, $user, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // データベースからユーザー情報を取得
        $stmt = $PDO->prepare("SELECT * FROM acount_list WHERE account_id = :account_id");
        $stmt->bindParam(':account_id', $inputAccountId);
        $stmt->execute();
        $user1 = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user1 && password_verify($inputPassword, $user1['pass_wd'])) {
            // パスワードが一致する場合
            $_SESSION['accountId'] = $inputAccountId;
            $_SESSION['accountname'] = $user1['account_name'];
            $_SESSION['accountmail'] = $user1['mail_address'];
            
            // ログイン中のユーザーを $_SESSION['userList'] に追加
            if (!isset($_SESSION['userList'])) {
                $_SESSION['userList'] = array();
            }
            $_SESSION['userList'][] = $inputAccountId;

            // ログイン成功後の処理
            // 例: ダッシュボードにリダイレクト
            header('Location: ../quest/');
            exit();
        } else {
            // パスワードが一致しない場合
            echo "ログインに失敗しました。";
        }
    } catch (PDOException $e) {
        echo "データベースエラー: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン</title>
</head>

<body>
  <form method="post" action="">
    <div>ユーザーID</div>
    <input type="text" name="account_id">
    <div>パスワード</div>
    <input type="password" name="pass_wd">
    
    <div>
      <input type="submit" value="ログイン">
    </div>
  </form>
  <a href="../join">新規会員登録</a>
</body>

</html>
