<?php 

#№26
$arr = [];
$i = 0;

$pro = 1;


while ($i < 10) {
	$arr[$i] = rand(1, 100);
	$i++;
}

print_r($arr);
echo "<br>";
$i = 0;

while ($i < 10) {
	if(($i % 2 == 0) && ($arr[$i] > 0)){
		$pro *= $arr[$i];
	}
	if(($i % 2 != 0) && ($i > 0)){
		echo $arr[$i]."<br>";
	}
	$i++;
}

echo "Произведение всех чисел = ".$pro;


?>