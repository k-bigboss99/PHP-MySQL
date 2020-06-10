<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();		
      $sql = "UPDATE price SET url = 'www.asus.com/tw/' WHERE url = 'tw.asus.com'";
      $result = execute_sql($link, "product", $sql);
			
      echo "執行UPDATE指令時，共有" . mysqli_affected_rows($link) . "筆記錄受影響";
			
      mysqli_close($link);
    ?> 
  </body>
</html>