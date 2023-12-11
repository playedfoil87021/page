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
    <?php session_start();

    // ログイン状態の確認
    if (isset($_SESSION['accountname'])) {
      // ユーザーがログインしている場合
      $loggedInUser = $_SESSION['accountname'];
    }
    echo "<h1>ようこそ、{$loggedInUser} さん</h1>";
    ?>
    <!--▽▽ヘッダーリスト▽▽-->
    <nav>
      <ul>
        <h1>

        </h1>

        <li><a href="../quest/index.php" target="_top">クエスト</a></li>
        <li><a href="../other/inquiry/index.html" target="_top">利用規約</a></li>
        <li><a href="../other/privacy_policy/index.html" target="_top">プライバシーポリシー</a></li>
        <li><a href="../other/inquiry/" target="_top">ヘルプ</a></li>
        <li><a href="../account/logout/" target="_top">ログアウト</a></li>
      </ul>
      <marquee scrollamount="7" direction="left" class="scroll">
        <strong>【本サービスご利用の皆さまへ】本サービスをご利用いただきありがとうございます。本サービスのモットーである『ヒトの成長を数値で可視化し、その変化を研究する』ことは、初めてのことに挑戦をし、それを継続することによって、自身が成長できるということです。ぜひ、自分の成長の為に本サービスをお楽しみください。HOBBYCONNECT一同より</strong>
      </marquee>

    </nav>
    <!--△△ヘッダーリスト△△-->
  </header>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>