<?php


function insertionSort($arr)
{
	$n = count($arr);
	for($i=0; $i<$n; $i++)
	{
		$val = $arr[$i];
		$j = $i-1;
		
		while($j>=0 && $arr[$j]>$val)
		{
			$arr[$j+1] = $arr[$j];
			$j--;
		}
		$arr[$j+1] = $val;
	}
	return $arr;
}


$arr = array(7,8,5,2,4,6,3);
echo "UnSorted Array: <br>".implode('| ',$arr)."<br><br>";

echo "Insertion Sorted Array: <br>".implode('| ',insertionSort($arr));
?>

