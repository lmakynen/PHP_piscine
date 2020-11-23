<?php
function ft_split($str)
{
	$str = preg_replace('/ +/', ' ', $str);
	$tab = explode(" ", trim($str));
	sort($tab);
	return ($tab);
}
?>