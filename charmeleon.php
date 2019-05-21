<?php

class charmeleon extends pokemon{
	protected $species = "charmeleon";
	protected $hitpoints = 60;

	public function __construct($name, $currentHealth)
	{
		$weakness = new weakness(energyType::water,2);

		$resistance = new resistance('lightning',10);

		$moves = new moves([['head butt', 10],['flamethrower',30]]);

		$energyType = new energyType('fire');

		parent::__construct($name, $species, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance);
	}
}