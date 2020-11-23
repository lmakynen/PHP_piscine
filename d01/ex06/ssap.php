#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	$tab = array();
	while ($i < $argc)
	{
		$temp = preg_split('/ +/', trim($argv[$i]));
		$tab = array_merge($tab, $temp);
		$i++;
	}
	sort ($tab);
	foreach ($tab as $str)
		print ($str."\n");
}
?>