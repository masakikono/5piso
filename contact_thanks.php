<?php
// var_dump($_POST['nickname']);
require_once('function.php');
$nickname= h ($_POST['nickname']);
$email= h ($_POST['email']);
$address= h ($_POST['address']);
$telephone= h ($_POST['telephone']);
$content = h ($_POST['content']);
 

 // <!-- データベースの操作 -->

// STEP1 接続
$dsn = 'mysql:dbname=52_phpkiso;host=localhost';
$user = 'root';
$password='';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// STEP2 SQL実行
$sql = 'INSERT INTO survey (nickname,email,content) VALUES (?,?,?)';
$data = array($nickname,$email,$content);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>送信完了</title>
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <p>名前:<?php echo $nickname;  ?></p>
  <p>メールアドレス:<?php echo $email;  ?></p>
  <p>住所:<?php echo $address;  ?></p>
  <p>電話番号:<?php echo $telephone;  ?></p>
  <p>お問い合わせ内容:<?php echo $content;  ?></p>
</body>
</html>