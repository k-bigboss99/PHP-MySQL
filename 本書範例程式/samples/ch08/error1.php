<?php
    function F1(array $a)
	{        
    }
	
    try
	{
      F1(1);
    }catch (Exception $e)	// failed to catch it
	{ 
      echo $e->getMessage();
    }
?>