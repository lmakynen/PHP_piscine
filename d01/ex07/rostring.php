#!/usr/bin/php
<?php
if ($argc > 1)
{
	$tmp = preg_split('/ +/', trim($argv[1]));
	array_push($tmp, array_shift($tmp));
	$tab = implode(" ", $tmp);
	print ($tab."\n");
}
?>