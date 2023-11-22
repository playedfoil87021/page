
<!--1トップ画面担当：小川・安江,確認者：（　）-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"> <!--文書の文字コード-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--端末の画面の幅に合わせる。Webページが表示される倍率は1-->
  <title>ヘッダーメニュー</title> <!--ページのタイトル-->
  <link rel="stylesheet" type="text/css" href="header1.css">
  <script src="header1.js"></script>
</head>

<body>


  <header>

    <a href="../index.php" target="_top">
      <h1>
        <img class="head_img" src="./img/hobbyconnect.png" alt="">
      </h1>
    </a>


    <!--▽▽ヘッダーリスト▽▽-->
    <nav>
      <ul>
        <h1>
          <?php session_start();

            // ログイン状態の確認
            if (isset($_SESSION['accountname'])) {
            // ユーザーがログインしている場合
            $loggedInUser = $_SESSION['accountname'];}
            echo "<h1>ようこそ、{$loggedInUser} さん</h1>";
            ?>
        </h1>
        <li><a href="../account/" target="_top">アカウント</a></li>
        <li><a href="../quest/index.php" target="_top">クエスト</a></li>
        <li><a href="../point/index.php" target="_top">ポイント</a></li>
        <li><a href="../quest/achievement/" target="_top">実績</a></li>
        <li><a href="../quest/report/" target="_top">募集</a></li>
        <li><a href="../other/inquiry/" target="_top">ヘルプ</a></li>
        <li><a href="../account/logout/" target="_top">ログアウト</a></li>
      </ul>
      <marquee scrollamount="7" direction="left" class="scroll">
        <strong>【緊急速報】11月30日に山上先生来訪❕❕</strong>
      </marquee>

    </nav>
    <!--△△ヘッダーリスト△△-->
  </header>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>