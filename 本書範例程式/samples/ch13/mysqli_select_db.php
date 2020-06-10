<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>開啟資料庫</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword") or die("無法建立資料連接: " . mysqli_connect_error());
		
      mysqli_select_db($link, "students") or die ("無法開啟students資料庫: " . mysqli_error($link));

      mysqli_close($link);
    ?> 
  </body>
</html>