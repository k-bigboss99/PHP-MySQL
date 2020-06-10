<?php	  
  $Obj = new class('小紅豆') 
  {
    public $Name;
	function __construct($Str) 
    {
      $this->Name = $Str;
      echo '已經建立名字為'.$this->Name.'的物件！';		  
    }        
  };	  
?>