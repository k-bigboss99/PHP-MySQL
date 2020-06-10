<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得 MySQL 資料庫的版本資訊</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword");
      echo '$link 連線主機的資料庫版本為： ' . mysqli_get_server_info($link);
      mysqli_close($link);
    ?> 
  </body>
</html>