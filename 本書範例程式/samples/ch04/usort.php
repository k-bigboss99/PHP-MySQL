<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      function compare($a, $b) 
      {
       return strcmp($a['color'], $b['color']);
      }    

      $colors[0]['color'] = 'red';
      $colors[1]['color'] = 'green';
      $colors[2]['color'] = 'blue';

      usort($colors, 'compare');

      while (list($key, $value) = each($colors))
        echo "\$colors[$key]: ".$value['color'].'<br>';
    ?>
  </body>
</html>
