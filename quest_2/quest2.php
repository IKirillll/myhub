<?php 
function FunctionName($prefixes, $mass)
{
	foreach ($mass as $key => $value) 
	{
		if(strpos($mass[$key],$prefixes)!==0)
		{
			unset($mass[$key]);
		}
	}
	return $mass;
}
$prefixes= 'ba';
$array = array("foo", "bar", "hallo", "world", "bara","aba","b");
print_r(FunctionName($prefixes,$array));
 ?>