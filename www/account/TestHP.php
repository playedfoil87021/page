<?php
session_start();

// ログイン状態の確認
if (isset($_SESSION['accountname'])) {
    // ユーザーがログインしている場合
    $loggedInUser = $_SESSION['accountname'];
    $loggedInmail = $_SESSION['accountmail'];

    

    // データベースからユーザー名を取得するか、登録時にデータベースに保存した名前を取得する方法に応じて適切なデータベースクエリを実行できます

    // ユーザー名を表示
    echo "<h1>ようこそ、{$loggedInUser} さん</h1>";
    echo "<h1>ようこそ、{$loggedInmail} さん</h1>";

    // その他のコンテンツを表示
} else {
    // ログインしていない場合、リダイレクトなどの適切なアクションを実行
    header('Location: ログインページのURL');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestHP</title>
</head>
<body>
    <h1>ここはテストのHPです</h1>

    <p><a href='./logout'>ログアウト</a></p>
    <p><a href='./setting'>アカウント変更</a></p>



</body>
</html>
