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
			
      echo "<table border='1' align='center'><tr align='center'>";
      for ($i = 0; $i < mysqli_num_fields($result); $i++)
        echo "<td>" . mysqli_fetch_field_direct($result, $i)->name. "</td>";
      echo "</tr>";
	
      while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
      {
        echo "<tr>";			
        echo "<td>" . $row["no"] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row["brand"] . "</td>";
        echo "<td>" . $row["specification"] . "</td>";	
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[5] . "</td>";	
        echo "<td>" . $row["url"] . "</td>";													
        echo "</tr>";				
      }
      echo "</table>" ;
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
  </body>
</html>