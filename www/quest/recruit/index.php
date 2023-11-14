<?php //旧input1.php
session_start();

// フォームからセッションに格納
$accountName = isset($_SESSION['accountName']) ? $_SESSION['accountName'] : '';
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
    <form method="post">
        <div>
            <label for="category">部門</label>
            
        </div>
        <div>
            <label for="genre">ジャンル</label>
        </div>
        <div>
            <label for="quest_outline">クエスト概要</label>
        </div>
    </form>
    
</body>