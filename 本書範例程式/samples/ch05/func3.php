<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      function drink($kind = '茶')
      {
        echo '請給我一杯'.$kind.'<br>';
      } 
      drink();
      drink('咖啡');	
    ?>
  </body>
</html>
