<?php 

#№23
/* ==============первый вариант===============

$number=123;
$temp=0;
$summ=0;

while($number!=0){

    $temp=$number%10;
    $summ+=$temp;
    $number=($number-$temp)/10;
}
echo $summ;
*/


/*=============второй вариант=================*/
$num = 123;

$sum = 0;

$num = (string)$num;

$len = strlen($num);

for ($i=0;$i < $len; $i++) { 
	$sum += $num[$i];
}
echo $sum;


?>