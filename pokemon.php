<?php

class pokemon {
	protected $name;
	protected $species;
	protected $energyType;
	protected $hitpoints;
	protected $currentHealth;
	protected $moves;
	protected $weakness;
	protected $resistance;

	public function __construct($name, $species, $energyType, $hitpoints, $currentHealth, $moves, $weakness, $resistance)	
	{
		$this->name = $name;
		$this->species = $species;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
		$this->currentHealth = $currentHealth;
		$this->moves = $moves;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}
	
	public function attack($target, $attack){
		$damage = $this->moves->actions[$attack][1];
		if ($this->energyType->type === $target->weakness->type){
			$damage *= $target->weakness->multiplier;
		}elseif ($this->energyType->type === $target->resistance->type) {
			$damage -= $target->resistance->reduction;
		}
	$this->calculateDamage($target, $damage);

	return $target->currentHealth;
	}
	
	private function calculateDamage($target, $damage){
		 $target->currentHealth -= $damage;
	}
}