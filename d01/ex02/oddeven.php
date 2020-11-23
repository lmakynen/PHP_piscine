#!/usr/bin/php
<?php
	while (1)
	{
		echo "Enter a number: ";
		$input = fgets(STDIN);
		if ($input == false)
			break;
		$input = trim($input);
		if (!(is_numeric($input)))
			echo "'$input' is not a number\n";
		else if ($input % 2 == 0)
			echo "The number $input is even\n";
		else if ($input % 2 != 0)
			echo "The number $input is odd\n";
	}
	echo "^D\n";
?>