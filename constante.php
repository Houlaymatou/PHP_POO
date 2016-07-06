<?php
	
		class Sportif 
		{	
			public $force;
			//par convention, les constante s'écrivent en majuscule sans $
			const NAME 			= "Footballer";
			const FORCE_LOW 	= 0;
			const FORCE_MEDIUM 	= 50;
			const FORCE_HIGH    = 100;

			function __construct($force)
			{
				$this->force = $force;
				if($force == self::FORCE_MEDIUM)
				{
					echo 'Sportif de force moyenne de ' .$force;
				}
			}

		}

	 	class Champion
		{
			const FORCE_MEDIUM = 50;
		}
		
		class Tennisman extends Sportif
		{
			const NAME = "Tennisman";
		}

		echo Sportif::NAME; 
		echo '<br>';
		$s = new Sportif(Champion::FORCE_MEDIUM);
		echo '<br>';
		echo Tennisman::NAME;

?>