<?php
require_once('function.php');

$name= h ($_POST['name']);
$email= h ($_POST['email']);
$room= h ($_POST['room']);
$bread1= h ($_POST['bread1']);
$amount1= h ($_POST['amount1']);
$bread2= h ($_POST['bread2']);
$amount2= h ($_POST['amount2']);
$message = h ($_POST['message']);

 // <!-- データベースの操作 -->

// STEP1 接続
$dsn = 'mysql:dbname=masakikono_wp1;host=mysql8023.xserver.jp';
$user = 'masakikono_root';
$password='masaki1015';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// STEP2 SQL実行
$sql = 'INSERT INTO `order` (`name`,`email`,`room`,`bread1`,`amount1`,`bread2`,`amount2`,`message`) VALUES (?,?,?,?,?,?,?,?)';
$data =	array($name,$email,$room,$bread1,$amount1,$bread2,$amount2,$message);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/favicon (2).ico" />
	<meta name="viewport" content="width=device-width ,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>送信完了</title>
</head>
<body class="container" style="background-color:#EAE4CA">
  <nav class="navbar navbar-warning bg-warning  fixed-top">
    <h1 class=""><!-- 5 piso Bread Store Official Site --><img src="image2/5pisoBreadlogo.jpg" style="height: 50px"></h1>
    <ul class="nav navbar-right pull-right ml-auto">
    </ul>
  </nav>
		<br><br><br><br>
	<h1>
	＜ご注文ありがとうございました！＞</h1>
	<p>*お手数ですが、代金はこの後Nexseedの校舎で渡してもらえると助かります！</p>

	<p>・Name:<?php echo $name;  ?></p>
	<p>・email:<?php echo $email;  ?></p>
	<p>・Room:<?php echo $room;  ?></p>
	<p>・パンの名前1:<?php echo $bread1
;  ?></p>
	<p>・パンの数:<?php echo $amount1."個"
;  ?></p>
	<p>・パンの名前2:<?php echo $bread2
;  ?></p>
	<p>・パンの数:<?php echo $amount2."個"
;  ?></p>
	<p>・Message:<?php echo $message;  ?></p>
	<p style="font-size: 20px">*広告主募集中！</p>
	<h1 class=""><!-- 5 piso Bread Store Official Site --><img src="image2/5pisoBreadlogo.jpg" style="height: 200px"></h1>
</body>
</html>