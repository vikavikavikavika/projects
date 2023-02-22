<head>
<meta charset = "utf-8">
</head>
<?php
$array = array(array());
$sum=0;
for ($i = 1; $i <= 5; $i++) {
	for ($j = 1; $j <= 5; $j++) {
    $array[$i-1][$j-1]= mt_rand(1,10);
	$sum=$sum+$array[$i-1][$j-1];
}}
$avg=$sum/25;
echo '<pre>';

print_r($array);
print_r("Среднее элементов массива равно: ".$avg);

echo '</pre>';

?>