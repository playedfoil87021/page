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
  <title>Document</title>
</head>

<body>
  <form method="post" action="process_form.php">
    <div>アカウント名</div>
    <input pattern="^[a-zA-Z0-9]+$" type="text" name="account_name"
      value="<?php echo htmlspecialchars($accountName, ENT_QUOTES, 'UTF-8'); ?>">
    <div>ユーザーID</div>
    <input type="^[a-zA-Z0-9]+$" name="account_id"
      value="<?php echo htmlspecialchars($accountId, ENT_QUOTES, 'UTF-8'); ?>">
    <div>メールアドレス</div>
    <input type="email" name="mail_address" value="<?php echo htmlspecialchars($mailAddress, ENT_QUOTES, 'UTF-8'); ?>">
    <div>電話番号</div>
    <input type="tel" pattern="[0-9]{10,11}" name="phone_number"
      value="<?php echo htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8'); ?>">
    <div>パスワード</div>
    <input type="text" name="pass_wd" value="<?php echo htmlspecialchars($password1, ENT_QUOTES, 'UTF-8'); ?>">
    <div>パスワード確認</div>
    <input type="text" name="pass_wd_confirm"
      value="<?php echo htmlspecialchars($password1, ENT_QUOTES, 'UTF-8'); ?>">

    <div>性別</div>
    <div>
      <input type="radio" name="gender" value="0" <?php if ($gender1 == "0")
        echo 'checked' ?>>hoge

        <input type="radio" name="gender" value="1" <?php if ($gender1 == "1")
        echo 'checked' ?>>fuga

        <input type="radio" name="gender" value="2" <?php if ($gender1 == "2")
        echo 'checked' ?>>piyo
      </div>
      <div>
        <input type="submit" value="入力内容確認">
      </div>
    </form>
  </body>

  </html>
  
  <!--     -->