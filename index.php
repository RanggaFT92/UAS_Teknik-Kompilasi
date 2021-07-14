<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Sort</title>
</head>

<body>
    <h1>Quick Sort dengan Algorithm PHP</h1>
    <h5>By : Rangga Tirta Pramana_181011400379</h5>
    <?php
function quick_sort($my_array)
 {
	$loe = $gt = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}
 
$my_array = array(6, 10, 8, 7, -5, 2, 4);
echo 'Data Sebelum di Quick Sort : '.implode(',',$my_array)."<br>","<br>";
$my_array = quick_sort($my_array);
echo 'Data Setelah di Quick sort : '.implode(',',$my_array);
?>
</body>

</html>