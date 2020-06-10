<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
  </head>
  <body>
    <?php
      function sumOfInts(int ...$ints)
      {
        return array_sum($ints);
      }

      var_dump(sumOfInts(1, '4', 4.8));
    ?>
  </body>
</html>
