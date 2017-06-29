<?php 

#№19
$arr = [
	'понедельник',
	'вторник',
	'среда',
	'четверг',
	'пятница',
	'суббота',
	'воскресенье'
];


$day = "вторник";

$str = "<table border='1' cellpadding='10'><tr>";

foreach ($arr as $item) {
	if($day == $item){
		$str .= "<td><b>".$item."</b></td>";
	}else{
		$str .= "<td>".$item."</td>";
	}
}

$str .= "</tr></table>";
echo $str;


?>