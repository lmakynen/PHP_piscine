#!/usr/bin/php
<?php
if ($argc > 1)
{
	$argv[1] = preg_replace('/\t+/', ' ', trim($argv[1]));
	$tab = preg_replace('/ +/', ' ', $argv[1]);
	print ($tab."\n");
}
?>