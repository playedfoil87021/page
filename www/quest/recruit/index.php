<?php //旧input1.php
session_start();

// フォームからセッションに格納
$questTypeSes = isset($_SESSION['quesTypeSes']) ? $_SESSION['questTypeSes'] : '';
$accountId = isset($_SESSION['accountId']) ? $_SESSION['accountId'] : '';
$mailAddress = isset($_SESSION['mailAddress']) ? $_SESSION['mailAddress'] : '';
$phoneNumber = isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : '';
$password1 = isset($_SESSION['password']) ? $_SESSION['password'] : '';
$gender1 = isset($_SESSION['gender1']) ? $_SESSION['gender1'] : '';
?>

<!DOCTYPE html>
<head>
    <title>HobbyConnect</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./index.css">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<nav>
<ul>
    <li><a href="../top/index.php">トップ</a></li>
    <li><a href="../report/report.html">クエスト報告</a></li>
    <li><a href="../history/index.html">クエスト受注履歴</a></li>
    <li><a href="../achievement/">アチーブメント</a></li>
</ul>
</nav>
<body>
    <div id="header">
        <object data="../../header/header.html" width="100%" height="auto"></object>
    </div>
    <h1>クエスト募集</h1>
    <form method="post" action="process_form.php">
        <div>
            <label for="category">部門</label>
            
        </div>
        <div>
            <label for="genre">ジャンル</label>
        </div>
        <div>
            <label for="quest_outline">クエスト概要</label>
        </div>
        <input type="submit" value="確認画面へ">
    </form>
    
</body>