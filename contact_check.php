<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location:index.html');
  }
  require_once('function.php');

  $nickname = trim(h ($_POST['nickname']));
  $email = trim(h ($_POST['email']));
  $address = trim(h ($_POST['address']));
  $telephone = trim(h ($_POST['telephone']));
  $content = trim(h ($_POST['content']));


  var_dump(mb_strlen($nickname));
  var_dump(strlen($nickname));

  var_dump(preg_match("/PHPPHP/",$content));

  // ニックネーム
  if ($nickname == '') {
    $nickname_result = 'ニックネームが入力されていません<br>';
  }elseif(mb_strlen($nickname)>10){
    $nickname_result = '名前長すぎひん？<br>';
  }else{
    $nickname_result = 'ようこそ、' . $nickname .'様<br>';
  }

  // メールアドレス
  if ($email == '') {
    $email_result = 'メールアドレスが入力されていません<br>';
  }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $email_result = '正しいメールアドレスを入力してください';
  }
  else{
    $email_result = 'メールアドレス:' . $email.'<br>';
  }

// 住所
if ($address == '') {
    $address_result = '住所が入力されていません<br>';
  }else{
    $address_result = $address .'で間違い無いでしょうか？<br>';
  }


// 電話番号
if ($telephone == '') {
    $telephone_result = '電話番号が入力されていません<br>';
  }else{
    $telephone_result = $telephone .'で間違い無いでしょうか？<br>';
  }


  // お問い合わせ内容
  if ($content == '') {
    $content_result = 'お問い合わせ内容が入力されていません<br>';
  }elseif (preg_match("/？/",$content)) {
    $content_result = '自分で考えてください';
  }else{
    $content_result = 'お問い合わせ内容:' . $content.'<br>';
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $address_result; ?></p>
  <p><?php echo $telephone_result; ?></p>
  <p><?php echo $content_result; ?></p>
  <form method="POST" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="address" value="<?php echo $address; ?>">
    <input type="hidden" name="telephone" value="<?php echo $telephone; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">

    <input type="button" value="戻る" onclick="history.back()">
    <?php if($nickname != '' && $email != '' && $address != '' && $telephone != '' && $content != ''):?>
    <input type="submit" name="OK">
  <?php  endif;?>
  </form>
</body>
</html>


</body>
</html>