<?php

function bubbleSort($arr)
{
	$n = count($arr);
	$swpHappend = true;

	while($swpHappend)
	{
		$swpHappend = false;
		for($i=0; $i<$n-1 ; $i++)
		{
			if($arr[$i]>$arr[$i+1])
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $temp;
				$swpHappend = true;
			}
		}
	}
	return $arr;
}


$arr = array(43,23,4,11,2);
echo "UnSorted Array: <br>".implode('| ',$arr)."<br><br>";

echo "Bubble Sorted Array: <br>".implode('| ',bubbleSort($arr))."<br>";

?>