<?php
error_reporting(-1);

/* データベース設定 */
define('DB_DNS', 'mysql:host=localhost; dbname=cri_sortable; charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

/* データベースへ接続 */
try {
  $dbh = new PDO(DB_DNS, DB_USER, DB_PASSWORD);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
    exit;
}

/* データベースへ登録 */
if(!empty($_POST['inputName'])){
  try{
    $sql  = 'INSERT INTO sortable(name) VALUES(:ONAMAE)';
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':ONAMAE', $_POST['inputName'], PDO::PARAM_STR);
    $stmt->execute();

    header('location: http://localhost:8001/');
    exit();
  } catch (PDOException $e) {
      echo 'データベースにアクセスできません！'.$e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>8001-cri-sortable</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<<form action="insert_data.php" method="post">
  <label for="name">名前:</label>
  <input type="text" id="name" name="name">
  <br>

  <label for="email">Eメール:</label>
  <input type="email" id="email" name="email">
  <br>

  <input type="submit" value="送信">
</form>

<?php
// MySQLデータベースへの接続
$servername = "データベースホスト";
$username = "ユーザー名";
$password = "パスワード";
$dbname = "データベース名";

$conn = new mysqli($servername, $username, $password, $dbname);

// 接続の確認
if ($conn->connect_error) {
    die("データベースへの接続に失敗しました: " . $conn->connect_error);
}

// POSTデータを取得
$name = $_POST['name'];
$email = $_POST['email'];

// データを挿入
$sql = "INSERT INTO テーブル名 (名前, メール) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "データがデータベースに正常に挿入されました。";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

// データベース接続を閉じる
$conn->close();
?>
</body>
</html>