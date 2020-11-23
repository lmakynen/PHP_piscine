<?php
function checker($arr, $login)
{
	foreach($arr as $log)
	{
		if ($log['login'] === $login)
			return (false);
	}
	return (true);
}
if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['passwd'])
{
	if (!file_exists("../private/"))
		mkdir("../private");
	$arr = array();
	$arr = unserialize(file_get_contents("../private/passwd"));
	if (checker($arr, $_POST['login']) == false)
		echo "ERROR\n";
	else
	{
		$arr[] = ["login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd'])];
		file_put_contents("../private/passwd", serialize($arr));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>