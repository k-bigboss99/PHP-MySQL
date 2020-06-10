<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得 MySQL 主機的資訊</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword");
      echo '$link 連線主機為： ' . mysqli_get_host_info($link);
      mysqli_close($link);
    ?> 
  </body>
</html>