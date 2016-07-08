<?php

	class liste
	{
		public $array = [1, 2, 3];

	}
 
  	class transform extends liste
  	 {
  		public function __construct()
  		{
  			echo '<ul>';
  			foreach ($this->array as  $a)
  			{
  				
  				echo '<li>'.$a.'</li>';

  			}
  			echo '</ul>';
  			return $a;
  		}
  	}
  $t = new transform();
  
   
    
?>