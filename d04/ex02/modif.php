<?php
function checker($arr, $login, $pw)
{
	foreach($arr as $log)
	{
		if ($log['login'] === $login && $log['passwd'] === hash("whirlpool", $pw))
			return (true);
	}
	return (false);
}
function newp($arr, $login, $pw)
{
	foreach($arr as &$log)
	{
		if ($log['login'] === $login)
		{
			$log['passwd'] = hash("whirlpool", $pw);
			return ($arr);
		}
	}
	return ($arr);
}
if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"])
{
	$arr = array();
	$arr = unserialize(file_get_contents("../private/passwd"));
	if (checker($arr, $_POST["login"], $_POST["oldpw"]) == false || $_POST["oldpw"] === $_POST["newpw"])
		echo "ERROR\n";
	else
	{
		$arr = newp($arr, $_POST["login"], $_POST["newpw"]);
		file_put_contents("../private/passwd", serialize($arr));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>