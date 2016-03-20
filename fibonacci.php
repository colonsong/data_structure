<?php

/**
* http://localhost/data_structure-master/fibonacci.php
* 當月數量 = 前次數量(成熟數量+未成熟數量) + (新生兒)前一次成熟數量
* 前一個月新生兒不是重點，重點是前一次成熟數量等於在前一個月的成熟+未成熟數量
*/
function fibonacci($n)
{
	$pre = 0;
	$prePre = 0;
	$now = $n;
	for( $i=2; $i <= $n; $i++ )
	{

		$now = $pre + $prePre;
		$pre = $prePre;
		$prePre = $now;
	}
	return $now;
}

for($n = 0; $n <= 10; $n++)
{
	echo " {$n}月" . fibonacci($n) . '對 ';
}