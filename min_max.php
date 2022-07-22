<?php
$arrray=array(20,1,50,6,30,45,2,5);
$arr_length=count($arrray);
$new_array=array();
$max=$arrray[0];
$min=$arrray[0];
for($i=1;$i<=$arr_length-1;$i++)
{
	if($max<$arrray[$i])
	{
		
		$max=$arrray[$i];
		
		echo 'maximumu no is :'.$max;
		echo '</br>';
	}
	
	if($min>$arrray[$i])
	{
		
		$min=$arrray[$i];
		echo 'minimum no is :'.$min;
	
	}
}

?>