<?php
abstract class Fighter
{
	public $name;
	public function __construct($type)
	{
		$this->name = $type;
	}
	abstract public function fight($target);
}
?>