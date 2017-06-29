<?php 

#№24

$number = 442158755745;
$temp = 0;
$count = 0;   // количество совпадений
$num = 4;     // то число которое нужно найти

while($number!=0){

    $temp=$number%10;

    if($num == $temp){
    	$count++;
    }

    $number=($number-$temp)/10;
}

echo $count;


?>