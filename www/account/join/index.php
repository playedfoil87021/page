<?php
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
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <title>Document</title>
</head>

<body>
  <form method="post" action="process_form.php">
    <div>アカウント名</div>
    <input pattern="^[a-zA-Z0-9ぁ-んーァ-ヶーｱ-ﾝﾞﾟ一-龠]+$" type="text" name="account_name" title="アカウント名に記号は入れることはできません。"
      value="<?php echo htmlspecialchars($accountName, ENT_QUOTES, 'UTF-8'); ?>" required>
    <div>ユーザーID</div>
    <input pattern="^[a-zA-Z0-9]+$" type="text" name="account_id" title="アカウントIDは英数字のみです"
      value="<?php echo htmlspecialchars($accountId, ENT_QUOTES, 'UTF-8'); ?>" required>
    <div>メールアドレス</div>
    <input type="email" name="mail_address" value="<?php echo htmlspecialchars($mailAddress, ENT_QUOTES, 'UTF-8'); ?>"
      required>
    <div>電話番号</div>
    <input type="tel" pattern="[0-9]{10,11}" name="phone_number"
      value="<?php echo htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8'); ?>">
    <div>パスワード</div>
    <input type="password" pattern=".{5,}" name="pass_wd" id="pass_wd"
      value="<?php echo htmlspecialchars($password1, ENT_QUOTES, 'UTF-8'); ?>" required>
    <div>パスワード確認</div><p id="error_msg"></p>
    <input type="password" pattern=".{5,}" name="pass_wd_confirm" id="pass_wd_confirm"
      value="<?php echo htmlspecialchars($password1, ENT_QUOTES, 'UTF-8'); ?>" required>

    <div>性別</div>
    <div>
      <input type="radio" name="gender" value="0" <?php if ($gender1=="0" ) echo 'checked' ?>required>男性

      <input type="radio" name="gender" value="1" <?php if ($gender1=="1" ) echo 'checked' ?>required>女性

      <input type="radio" name="gender" value="2" <?php if ($gender1=="2" ) echo 'checked' ?>required>その他
    </div>
    <div>
      <input type="submit" value="入力内容確認" onclick="return confirmPassword();">
    </div>
  </form>
  <a href="../login">アカウントをお持ちの方はこちら</a>
</body>
<script>
  function confirmPasswd() {
    const password = document.getElementById('pass_wd').value;
    const confirmPassword = document.getElementById('pass_wd_confirm').value;
    const errorMsg = document.getElementById('error_msg');

    if (password == confirmPassword) {
      errorMsg.innerText = "";
      return true;
    } else {
      errorMsg.innerText = "パスワードが一致しません";
      return false;
    }
  }
    }
</Script>

</html>

<!--     -->