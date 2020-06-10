<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>顯示欄位資訊</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();
      $sql = "SELECT * FROM PRICE WHERE category = '主機板'";
      $result = execute_sql($link, "product", $sql);
			
      echo "<table width='400' border='1'><tr align='center'>";
      echo "<td>欄位名稱</td><td>資料型態</td><td>最大長度</td></tr>";

      $i = 0;
      while ($i < mysqli_num_fields($result))
      {
        $meta = mysqli_fetch_field_direct($result, $i);
        echo "<tr>";
        echo "<td>$meta->name</td>";
        echo "<td>$meta->type</td>";
        echo "<td>$meta->max_length</td>";
        echo "</tr>";
        $i++;
      }
      echo "</table>" ;

      mysqli_close($link);
    ?> 
  </body>
</html>