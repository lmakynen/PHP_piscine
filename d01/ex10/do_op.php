#!/usr/bin/php
<?php
if ($argc == 4)
{
	$num1 = (int)trim($argv[1]);
	$sign = trim($argv[2]);
	$num2 = (int)trim($argv[3]);
	if (($num2 == 0 && $sign == '%') || ($num2 == 0 && $sign == '/'))
	{
		print("Impossible to divide or modulate by zero\n");
		exit ;
	}
	if ($sign == '+')
		$res = $num1 + $num2;
	else if ($sign == '-')
		$res = $num1 - $num2;
	else if ($sign == '*')
		$res = $num1 * $num2;
	else if ($sign == '/')
		$res = $num1 / $num2;
	else if ($sign == '%')
		$res = $num1 % $num2;
	print($res."\n");
}
else
	print("Incorrect Parameters\n");
?>