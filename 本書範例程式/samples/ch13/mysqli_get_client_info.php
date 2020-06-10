<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得 MySQL 用戶端函式庫的版本資訊</title>
  </head>
  <body>
    <?php
      echo "MySQL 用戶端函式庫的版本： " . mysqli_get_client_info();
    ?>
  </body>
</html>