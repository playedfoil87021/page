<?php
session_start();

// データベースに接続
$dsn = 'mysql:dbname=questwalker;host=localhost:65233;charset=utf8';
    $user = 'root';
    $password = 'P2L13foJQeebl3Jl';

try {
    $PDO = new PDO($dsn, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
    exit();
}

// ログイン中のユーザーを確認する関数
function isUserLoggedIn() {
    return isset($_SESSION['userList']) && count($_SESSION['userList']) > 0;
}

// ログインしている場合のみログイン中のユーザー情報を取得
if (isUserLoggedIn()) {
    $userList = $_SESSION['userList'];
} else {
    $userList = [];
}

// データベースからユーザー一覧を取得
try {
    $stmt = $PDO->prepare("SELECT * FROM acount_list");
    $stmt->execute();
    $allUserList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー一覧</title>
</head>

<body>
  <h1>ユーザー一覧</h1>
  
  <table border="1">
    <tr>
      <th>ユーザーID</th>
      <th>ユーザー名</th>
      <th>ステータス</th>
    </tr>
    <?php foreach ($allUserList as $user) : ?>
      <tr>
        <td><?php echo $user['account_id']; ?></td>
        <td><?php echo $user['account_name']; ?></td>
        <td><?php echo (in_array($user['account_id'], $userList)) ? 'ログイン中' : '停止中'; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <form method="get" action="">
    <input type="submit" name="logout" value="ログアウト">
  </form>
</body>

</html>
