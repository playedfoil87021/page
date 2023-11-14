<?php
try {

  //DB名、ユーザー名、パスワードを変数に格納
  $dsn = 'mysql:dbname=user_schema;host=localhost:65233;charset=utf8';
  $user = 'root';
  $password = 'P2L13foJQeebl3Jl';
 
  $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示
 
  //input.phpの値を取得
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
 
  $sql = "INSERT INTO user_schema.user_table (name, mail, message) VALUES (:name, :mail, :message)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく　
  $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
  $params = array(':name' => $name, ':mail' => $mail, ':message' => $message); // 挿入する値を配列に格納
  $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
 
  // 登録内容確認・メッセージ
  echo "<p>名前: " . $name . "</p>";
  echo "<p>メールアドレス: " . $mail . "</p>";
  echo "<p>メッセージ: " . $message . "</p>";
  echo '<p>上記の内容をデータベースへ登録しました。</p>';
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  
}
?>