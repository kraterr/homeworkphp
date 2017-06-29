<?php 


#№17
$arr = [
	'январь',
	'февраль',
	'март',
	'апрель',
	'май',
	'июнь',
	'июль',
	'август',
	'сентябрь',
	'октябрь',
	'ноябрь',
	'декабрь'
];


$month = 'декабрь';

$str = "<table border='1' cellpadding='10'><tr>";

foreach ($arr as $item) {
	if($month == $item){
		$str .= "<td><b>".$item."</b></td>";
	}else{
		$str .= "<td>".$item."</td>";
	}
}

$str .= "</tr></table>";
echo $str;


?>