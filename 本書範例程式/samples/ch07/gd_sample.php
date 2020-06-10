<?php  
  $im = imagecreatetruecolor(400, 250);
  $background = imagecolorallocate($im, 255, 255, 180);
  $red = imagecolorallocate($im, 255, 0, 0);
  $green = imagecolorallocate($im, 0, 255, 0);
  $black = imagecolorallocate($im, 0, 0, 0);
  $points = array(360, 50, 290, 80, 260, 20, 300, 50); 
  //填滿背景色彩
  imagefill($im, 0, 0, $background);
  //繪製橢圓形
  imageellipse($im, 30, 30, 50, 50, $red);
  imageellipse($im, 30, 100, 40, 60, $green);  
  //繪製弧線
  imagearc($im, 30, 200, 80, 70, 270, 90, $black);  
  //填滿多邊形色彩
  imagefilledpolygon($im, $points, 4, $red);
  //填滿矩形
  imagefilledrectangle($im, 280, 150, 330, 200, $green);
  //繪製文字
  $imInfo = "image width: " . imagesx($im) ."px, height: " . imagesy($im) . "px";
  imagestring($im, 5, 60, 20, "<-- circle", $black);
  imagestring($im, 5, 60, 90, "<-- ellipse",$black);
  imagestring($im, 5, 95, 230, $imInfo, $red);  
  //輸出圖形
  header("content-type: image/png");
  imagepng($im);
  //釋放圖形佔用的記憶體
  imagedestroy($im);
?>
