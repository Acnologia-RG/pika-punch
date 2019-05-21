<?php
class weakness
{
	public $type;
	public $multiplier;

	public function __construct($Type, $Multiplier)
	{
		$this->type = $Type;
		$this->multiplier = $Multiplier;
	}
}