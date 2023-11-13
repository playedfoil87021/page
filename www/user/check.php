<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//①エラーメッセージの初期状態を空に
$err_msg = "";


//③データが渡ってきた場合の処理
try {
$db = new PDO('mysql:host=localhost; dbname=questwalker','root','mysql');
$sql = 'select count(*) from acount_list where account_id=? and pass_wd=?';
$stmt = $db->prepare($sql);
$stmt->execute(array($username1,$hashedPassword));
$result = $stmt->fetch();
$stmt = null;
$db = null;



//④ログイン認証ができたときの処理
if ($result[0] != 0){
header('Location: http://localhost/user_master/TestHP.php');
exit;

//⑤アカウント情報が間違っていたときの処理
}else{
$err_msg = "アカウント情報が間違っています。";
echo  $err_msg;
}

//⑥データが渡って来なかったときの処理
}catch (PDOException $e) {
    echo $e->getMessage();
    exit;

}
?>
    
</body>
</html>

