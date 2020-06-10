<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得 MySQL 資料庫協定的版本資訊</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword");
      echo '$link 資源變數的協定版本為： ' . mysqli_get_proto_info($link);
      mysqli_close($link);
    ?> 
  </body>
</html>