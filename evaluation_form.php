<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>映画を登録</title>
    <link rel="stylesheet" href="myblog_style.css">          
  </head>
  <body>
   <div class="article">
      <h2>映画を評価しよう</h2>
      <p>
        <form action="article_submit.php" method="get">
          タイトル<br>
          <input type="text" name="title" size="40"><br>
          ワクワク度<br>
          <input type="radio" name="exite" value="1">1
          <input type="radio" name="exite" value="2">2
          <input type="radio" name="exite" value="3">3
          <input type="radio" name="exite" value="4">4
          <input type="radio" name="exite" value="5">5
          ほっこり度<br>
          <input type="radio" name="relax" value="1">1
          <input type="radio" name="relax" value="2">2
          <input type="radio" name="relax" value="3">3
          <input type="radio" name="relax" value="4">4
          <input type="radio" name="relax" value="5">5
          ドキドキ度<br>
          <input type="radio" name="fear" value="1">1
          <input type="radio" name="fear" value="2">2
          <input type="radio" name="fear" value="3">3
          <input type="radio" name="fear" value="4">4
          <input type="radio" name="fear" value="5">5
          しょんぼり度<br>
          <input type="radio" name="exite" value="1">1
          <input type="radio" name="exite" value="2">2
          <input type="radio" name="exite" value="3">3
          <input type="radio" name="exite" value="4">4
          <input type="radio" name="exite" value="5">5
         イライラ度<br>
          <input type="radio" name="exite" value="1">1
          <input type="radio" name="exite" value="2">2
          <input type="radio" name="exite" value="3">3
          <input type="radio" name="exite" value="4">4
          <input type="radio" name="exite" value="5">5
          <br>
          本文<br>
          <textarea name="body" rows="10" cols="40"></textarea><br>
          <input type="submit" value="送信">
        </form>
      </p>
    </div>
  </body>
</html>
