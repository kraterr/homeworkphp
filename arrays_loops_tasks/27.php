<?php 

#№27

$colors = ['red','yellow','blue','gray','maroon','brown','green'];

$row = 4; //количество строк в таблице
$col = 8; //количество столбцов в таблице

$table = "<table border='1' cellpadding='20'>";

for ($i = 0; $i < $row; $i++) { 
	
	$table .= "<tr>";

	for ($j = 0; $j < $col; $j++) { 
		shuffle($colors); // перемешиваем массив
		$table .= "<td style='background-color:$colors[0]'>".rand(1, 20)."</td>";  // можно было в качестве индекса вызвать функцию rand(0, $col)
	}

	$table .= "</tr>";
}


$table .= "</table>";

echo $table;


?>