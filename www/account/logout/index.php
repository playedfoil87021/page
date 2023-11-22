<?php
session_start();
$_SESSION = array();
session_destroy();
// ログアウト処理
if (isset($_GET['logout'])) {
    // ログアウトしたユーザーを $_SESSION['userList'] から削除
    $index = array_search($_SESSION['accountId'], $_SESSION['userList']);
    if ($index !== false) {
        unset($_SESSION['userList'][$index]);
    }

    session_destroy();
    header('Location: /'); // ログアウト後にログインページにリダイレクト
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>ログアウト</title>
</head>
<body>
<h1>
<font size='5'>ログアウトしました</font>
</h1>
<p><a href='/'>ログインページに戻る</a></p>
</body>
</html>
