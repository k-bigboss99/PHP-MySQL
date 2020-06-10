<?php  
  function F1(array $a)
  {
  }

  try
  {
    F1(1);
  }
  catch (TypeError $e)
  { 
    echo $e->getMessage();
  }
?>