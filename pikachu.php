<?php

class pikachu extends pokemon{
	protected $species = "pikachu";
	protected $hitpoints = 60;

	public function __construct($name, $currentHealth)
	{
		$weakness = new weakness('fire',1.5);

		$resistance = new resistance('fighting',20);

		$moves = new moves([['volt tackle', 20],['Thunder',50]]);

		$energyType = new energyType('lightning');

		parent::__construct($name, $species, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance);
	}
}