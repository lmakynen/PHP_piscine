<?php
class NightsWatch
{
	private $rec = [];
	public function recruit($name)
	{
		$arr = class_implements($name);
		if ($arr[IFighter])
			$this->rec[] = $name;
	}
	public function fight()
	{
		foreach ($this->rec as $r)
			$r->fight();
	}
}
?>