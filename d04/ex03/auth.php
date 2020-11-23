<?php
function auth($login, $passwd)
{
	if (!$login || !$passwd)
		return (FALSE);
	$arr = unserialize(file_get_contents("../private/passwd"));
	foreach($arr as $user)
	{
		if ($user['login'] === $login && $user['passwd'] === hash("whirlpool", $passwd))
			return (TRUE);
	}
	return (FALSE);
}
?>
