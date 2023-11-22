<?php //旧input1.php
session_start();

// フォームからセッションに格納
$questCategorySes = isset($_SESSION['questCategorySes']) ? $_SESSION['questCategorySes'] : '';
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
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script><!--https://arts-factory.net/select2/-->
    <script src="js/select2.min.js"></script>
    <link rel="stylesheet" href="./RecuQuest.css">
    <script src="./RecuQuest.js"></script>
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
        <object data="../../header/header1.html" width="100%" height="auto"></object>
    </div>
    <h1>クエスト募集</h1>
    <form method="post" action="process_form.php">
        <div>
            <label for="category">部門</label>
            <select class="category_select" style="width:128px;">
                <option value=""></option>
                <option value="1">hoge</option>
                <option value="2">ホゲ</option>
                <option value="3">fuga</option>
                <option value="4">フガ</option>
            </select>
            <script>
                $(document).ready(function () {
                    $('.category_select').select2();
                });
            </script>

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