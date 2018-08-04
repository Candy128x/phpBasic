<?php

function selectionSort($arr)
{
	$n = count($arr);
	for($i=0; $i<$n-1; $i++)
	{
		$min = $i;
		for($j=$i+1; $j<$n; $j++)
		{
			if($arr[$j]<$arr[$min])
			{
				$min = $j;
			}
		}
		$arr = swpPosition($arr, $i, $min);
	}
	return $arr;
}


function swpPosition($arr1, $left, $right)
{
	$oldRightVal = $arr1[$right];
	$arr1[$right] = $arr1[$left];
	$arr1[$left] = $oldRightVal;
	return $arr1;
}


$arr = array(64,25,12,22,11);
echo "UnSorted Array: <br>".implode('| ',$arr)."<br><br>";

echo "Selection Sorted Array: <br>".implode('| ',selectionSort($arr));


?>