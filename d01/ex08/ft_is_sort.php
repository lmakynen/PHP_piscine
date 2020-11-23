<?php
function	ft_is_sort($tab)
{
	$new = $tab;
	sort($new);
	if ($new == $tab)
		return (1);
	return (0);
}
?>