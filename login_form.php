<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class ="article">
      <h2>ユーザ名とパスワードを入力してください</h2>
      <form action="login_submit.php" method="get">
      <input type="text" name="username">
      <input type="password" name="password">
      <input type="submit" value="送信">
      </form>
      </div>
  </body>
</html>
