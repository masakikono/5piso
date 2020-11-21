<?php

  $name = $_POST['name'];
  $room = $_POST['room'];
  $email = $_POST['email'];
  $bread1 = $_POST['bread1'];
  $amount1 = $_POST['amount1'];
  $bread2 = $_POST['bread2'];
  $amount2 = $_POST['amount2'];
  $message = $_POST['message'];

  // var_dump(preg_match("/PHPPHP/",$content));
  // name
  if ($name == '') {
    $name_result = '名前が入力されていません<br>';
  }elseif(mb_strlen($name)>10){
    $name_result = '名前が長すぎます<br>';
  }else{
    $name_result = 'ようこそ、' . $name .'様<br>';
  }
  // メールアドレス
  if ($email == '') {
    $email_result = '・email:メールアドレス が入力されていません<br>';
  }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $email_result = '・email:正しいメールアドレスを入力してください';
  }
  else{
    $email_result = $email.'<br>';
  }

// 住所
if ($room == '') {
    $room_result = '・Room:部屋番号が入力されていません<br>';
  }else{
    $room_result = $room .'<br>';
  }
// // email or Line

// bread1
  if ($bread1 == '') {
    $bread1_result = 'パンの名前が入力されていません<br>';
  }else{
    $bread1_result = $bread1 .'で間違い無いでしょうか？<br>';
  }
// amount1
  if ($amount1 == '') {
    $amount1_result = 'パンの数が入力されていません<br>';
  }else{
    $amount1_result = $amount1 .'個<br>';
  }

// bread2
  if ($bread2 == '') {
    $bread2_result = 'パンの名前が入力されていません<br>';
  }else{
    $bread2_result = $bread2 .'<br>';
  }
  // amount2
  if ($amount2 == '') {
    $amount2_result = 'パンの数が入力されていません<br>';
  }else{
    $amount2_result = $amount2 .'<br>';
  }

  // お問い合わせ内容
  if ($message == '') {
    $message_result = 'お問い合わせ内容が入力されていません<br>';
  // }elseif (preg_match("/？/",$message)) {
  //   $message_result = '自分で考えてください';
  }else{
    $message_result = '・お問い合わせ内容:' . $message.'<br>';
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="image/favicon (2).ico" />
  <meta name="viewport" content="width=device-width ,initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body class="container" style="background-color:#EAE4CA">
  <nav class="navbar navbar-warning bg-warning  fixed-top">
    <h1 class=""><!-- 5 piso Bread Store Official Site --><img src="image2/5pisoBreadlogo.jpg" style="height: 50px"></h1>
    <ul class="nav navbar-right pull-right ml-auto">

    </ul>
  </nav>
  <br><br><br><br>
  <h1>＜入力内容確認＞</h1>
    <p><?php echo $name_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $room_result; ?></p>
    <p><?php echo $bread1_result; ?></p>
    <p><?php echo $amount1_result; ?></p>
    <p><?php echo $bread2_result; ?></p>
    <p><?php echo $amount2_result; ?></p>
    <p><?php echo $message_result; ?></p>
  <h1 class=""><!-- 5 piso Bread Store Official Site --><img src="image2/5pisoBreadlogo.jpg" style="height: 200px"></h1>
  <form method="POST" action="order_thanks.php">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="room" value="<?php echo $room; ?>">
    <input type="hidden" name="bread1" value="<?php echo $bread1; ?>">
    <input type="hidden" name="amount1" value="<?php echo $amount1; ?>">
    <input type="hidden" name="bread2" value="<?php echo $bread2; ?>">
    <input type="hidden" name="amount2" value="<?php echo $amount2; ?>">
    <input type="hidden" name="message" value="<?php echo $message; ?>">
    <input type="button" value="戻る" onclick="history.back()">

    <?php if($name != '' && $email != '' && $room != '' && $bread1 != '' && $amount1 != '' && $bread2 != '' && $amount2 != '' && $message != ''):?>
    <input type="submit" name="OK">
  <?php  endif;?>
  </form>
</body>
</html>