#!/usr/bin/php
<?php
if ($argc == 2)
{
	date_default_timezone_set('europe/paris');
	setlocale(LC_ALL, 'fr_FR');
	$date = $argv[1];
	if (($date = strptime($date, '%A %d %B %Y %H:%M:%S')))
	{	
		$timestamp = mktime($date["tm_hour"], $date["tm_min"], $date["tm_sec"], $date["tm_mon"] + 1,
			$date["tm_mday"], $date["tm_year"] + 1900);
		if (strlen($date[3] != 4 || strlen($date[4] != 8)))
		{
			printf("%ld\n", $timestamp);
			exit();
		}
		else
			print("Wrong Format\n");
	}
	else
		print("Wrong Format\n");
}
?>
