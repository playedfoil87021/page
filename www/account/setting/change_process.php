<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力情報の表示</title>
</head>

<body>
  <form method="post" action="change_send.php">
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      //入力されたデータをセッションに保存
      $_SESSION['accountName'] = $_POST["account_name"]; //セッションに何を入れる？
      $_SESSION['accountId1'] = $_POST["account_id1"];
      $_SESSION['mailAddress'] = $_POST["mail_address"];
      $_SESSION['phoneNumber'] = $_POST["phone_number"];
      $_SESSION['gender1'] = $_POST["gender"];

      // 受け取ったデータを表示します
      echo "<h2>入力情報の表示</h2>";
      echo "<p>アカウント名: " . htmlspecialchars($_SESSION["accountName"]) . "</p>";
      echo "<p>ユーザーID: " . htmlspecialchars($_SESSION['accountId1']) . "</p>";
      echo "<p>メールアドレス: " . htmlspecialchars($_SESSION['mailAddress']) . "</p>";
      echo "<p>電話番号: " . htmlspecialchars($_SESSION['phoneNumber']) . "</p>";
      //echo "<p>パスワード: " . htmlspecialchars($_SESSION['password']) . "</p>";
      echo "<p>性別: " . htmlspecialchars($_SESSION['gender1']) . "</p>";

    } else {
      echo "<p>このページは直接アクセスできません。</p>";
    }

    // フォームに戻るリンクを表示
    echo "<a href='input1.php'>入力画面に戻る</a>";
    ?>

    <div>
      <input type="submit" value="送信">
    </div>
</body>

</html>