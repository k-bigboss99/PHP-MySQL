<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php      
      echo '目前網頁的絕對路徑：'.realpath(basename($_SERVER['PHP_SELF']));
    ?>
  </body>
</html>
