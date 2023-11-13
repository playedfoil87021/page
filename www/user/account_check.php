<!DOCTYPE html>
<html>
<head>
  <title>入力情報確認</title>
</head>
<body>
  <h2>入力情報確認</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>アカウント名: " . htmlspecialchars($_POST["account_name"]) . "</p>";
    echo "<p>ユーザーID: " . htmlspecialchars($_POST["user_id"]) . "</p>";
    echo "<p>メールアドレス: " . htmlspecialchars($_POST["mail_ad"]) . "</p>";
    echo "<p>電話番号: " . htmlspecialchars($_POST["phone_nu"]) . "</p>";
    echo "<p>パスワード: " . htmlspecialchars($_POST["pass_wd"]) . "</p>";
    echo "<p>性別: " . htmlspecialchars($_POST["gender_mw"]) . "</p>";
  }
  ?>

  <p><a href="index.html">戻る</a></p>
</body>
</html>