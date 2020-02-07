<?php 
function FunctionName($n,$m)
 {
 	$res=0;
 	if($n==0)
 	{
 		$res=0;
 	}
 	if($n>0)
 	{
 		$res=intdiv($m,$n);
 	}
 	return $res;
 } 
$n=rand();
$m=rand();
echo FunctionName($n,$m);
 ?>