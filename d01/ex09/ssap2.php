#!/usr/bin/php
<?php
if ($argc > 1)
{
	function best_sort($f, $s)
	{
		$i = 0;
		$order = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while ($i < strlen($f) || $i < strlen($s))
		{
			$f1 = stripos($order, $f[$i]);
			$s2 = stripos($order, $s[$i]);
			if ($f1 > $s2)
				return 1;
			else if ($f1 < $s2)
				return -1;
			else
				$i++;
		}
		return (0);
	}
	$i = 1;
	$tab = array();
	while ($i < $argc)
	{
		$temp = preg_split('/ +/', trim($argv[$i]));
		$tab = array_merge($tab, $temp);
		$i++;
	}
	$char = $num = $rest = array();
	foreach ($tab as $str)
	{
		if (is_numeric($str[0]))
			array_push($num, $str);
		else if (ctype_alpha($str[0]))
			array_push($char, $str);
		else
			array_push($rest, $str);
	}
	usort ($char, "best_sort");
	usort ($num, "best_sort");
	usort ($rest, "best_sort");
	$tab = array_merge($char, $num, $rest);
	foreach ($tab as $str)
		print ($str."\n");
}
?>