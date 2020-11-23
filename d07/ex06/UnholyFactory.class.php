<?php
class UnholyFactory
{
	private $arr = [];
	public function absorb($class)
	{
		if ($class instanceof Fighter)
		{
			foreach ($this->arr as $k)
			{
				if ($k == $class)
				{
					print("(Factory already absorbed a fighter of type ".$class->name.")".PHP_EOL);
					return ;
				}
			}
			$this->arr[] = $class;
			print("(Factory absorbed a fighter of type ".$class->name.")".PHP_EOL);
			return ;
		}
		print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
	}
	public function fabricate($who)
	{
		foreach ($this->arr as $k)
		{
			if ($k->name == $who && $k instanceof Fighter)
			{
				print("(Factory fabricates a fighter of type ".$who.")".PHP_EOL);
				return ($k);
			}
		}
		print("(Factory hasn't absorbed any fighter of type ".$who.")".PHP_EOL);
	}
}
?>