<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();
      $sql = "SELECT * FROM price WHERE category = '主機板'";
      $result = execute_sql($link, "product", $sql);
			
      echo "category = 「主機板」 的記錄有 " . mysqli_num_rows($result) . "筆";
      echo "，包含 " . mysqli_num_fields($result) . "個欄位。";
			
      mysqli_close($link);
    ?> 
  </body>
</html>