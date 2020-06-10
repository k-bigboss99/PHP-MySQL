<?php
  if (detect_mobile()) 
    $url = "mobile.php";  
  else
    $url = "PC.php";
  
  header("Location: $url");
  exit();
 
  function detect_mobile()
  {
    $mobile_list="/(alcatel|amoi|android|avantgo|blackberry|benq|blazer|cell|docomo|dopod| 
	  ericsson|foma|htc|helio|hosin|huawei|iemobile|iphone|ipad|ipod|j2me|java|midp|mini| 
	  mmp|mobi|motorola|nokia|padfone|palm|panasonic|philips|phone|sagem|samsung|sharp|sony| 
	  smartphone|softbank|symbian|t-mobile|telus|vodafone|wap|webos|windows ce|wireless| 
	  xda|xoom|zte|opera\s*mobi|opera\*mini|320x320|240x320|176x220)/i";
    return preg_match($mobile_list, strtolower($_SERVER['HTTP_USER_AGENT']));
  }  
?>