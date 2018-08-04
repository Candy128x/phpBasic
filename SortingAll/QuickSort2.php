<?php

function quickSort($arr)
{
	if(count($arr)<2)
	{
		return $arr;
	}
	
	$left = $right = array();
	$pivot = $arr[0];
	
	$n = count($arr);
	for($i=1; $i<$n; $i++)
	{
		if($arr[$i]<$pivot)
			$left[] = $arr[$i];
		else
			$right[] = $arr[$i];
	}

	return array_merge(quickSort($left), array($pivot), quickSort($right));
}

$arr = array(51,95,66,72,42,38,39,41,15,4,56);
echo "UnSorted Array: <br>".implode('| ',$arr)."<br><br>";

echo "Quick Sorted Array: <br>".implode('| ',quickSort($arr));

?>