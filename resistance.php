<?php
class resistance
{
	public $type;
	public $reduction;

	public function __construct($Type, $Reduction)
	{
		$this->type = $Type;
		$this->reduction = $Reduction;
	}
}